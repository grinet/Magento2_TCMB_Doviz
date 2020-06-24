<?php
/**
 * Grinet_DovizTCMB 
 *
 * [EN] Get currency rates from the Turkish Central Bank 
 * [TR] Magento2 için T.C. Merkez Bankası Döviz Kuru Güncelleyici
 *
 * https://www.grinet.com.tr/
 *
 * Author / Geliştirici : Hidayet Ok / hidonet@gmail.com 
 * 
 */

namespace Grinet\DovizTCMB\Model;

class Import extends \Magento\Directory\Model\Currency\Import\AbstractImport
{
    /**
     * @var string
     */
    const CURRENCY_CONVERTER_URL = 'https://www.tcmb.gov.tr/kurlar/today.xml';

    /**
     * HTTP client
     *
     * @var \Magento\Framework\HTTP\ZendClient
     */
    protected $_httpClient;

    /**
     * Core store config
     *
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $_scopeConfig;

    /**
     * @param \Magento\Directory\Model\CurrencyFactory $currencyFactory
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        \Magento\Directory\Model\CurrencyFactory $currencyFactory,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        parent::__construct($currencyFactory);
        $this->_scopeConfig = $scopeConfig;
        $this->_httpClient = new \Magento\Framework\HTTP\ZendClient();
    }

    /**
     * @param string $currencyFrom
     * @param string $currencyTo
     * @param int $retry
     * @return float|null
     */
    protected function _convert($currencyFrom, $currencyTo, $retry = 0)
    {
        $url = sprintf(self::CURRENCY_CONVERTER_URL, $currencyFrom, $currencyTo);

        try {
            $response = $this->_httpClient->setUri(
                $url
            )->setConfig(
                [
                    'timeout' => $this->_scopeConfig->getValue(
                        'currency/fixerio/timeout',
                        \Magento\Store\Model\ScopeInterface::SCOPE_STORE
                    ),
                ]
            )->request(
                'GET'
            )->getBody();


			$doviz_data = json_decode(json_encode(simplexml_load_string($response)),true)['Currency'];
		
			$rates = [];

			if (isset($doviz_data) and is_array($doviz_data)) 
			{
				
				foreach ($doviz_data as $curr_key => $curr_data) 
				{
					$curr_code = $curr_data["@attributes"]["CurrencyCode"];
					$curr_rate = floatval($curr_data['BanknoteBuying']);
					if ($curr_rate > 0) 
					{
						$rates[$curr_code] = $curr_rate;
					} // if sonu
				} // foreach sonu
			} // if sonu

			unset($rate);

			if ($currencyFrom != 'TRY' and $currencyTo == 'TRY') 
			{
				$rate = $rates[$currencyFrom];
			} // if sonu
			elseif ($currencyFrom == 'TRY' and $currencyTo != 'TRY') 
			{
				$rate = 1 / $rates[$currencyTo];
			}
			elseif ($currencyFrom != 'TRY' and $currencyTo != 'TRY') 
			{
				$rate = $rates[$currencyFrom] / $rates[$currencyTo];
			}

            if (!$rate) {
                $this->_messages[] = __('We can\'t retrieve a rate from %1.', $url);
                return null;
            }

            //support for preserving the precision
            if (function_exists('bcadd')) {
                return bcadd($rate, '0', 12);
            }

            return (double)$xml;
        } catch (\Exception $e) {
            if ($retry == 0) {
                $this->_convert($currencyFrom, $currencyTo, 1);
            } else {
                $this->_messages[] = __('We can\'t retrieve a rate from %1.', $url);
                return null;
            }
        }
    }
}
