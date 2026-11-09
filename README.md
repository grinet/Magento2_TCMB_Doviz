# Magento2_TCMB_Doviz
Magento2 için Türkiye Cumhuriyet Merkez Bankasından kur güncellemesi yapar.

>
# **ÜCRETSİZ Modüllerimiz**
### [Grinet TurkeyCities - Magento2 Türkiye Şehirleri Modülü](https://github.com/grinet/Magento2_TurkeyCities)
### [Grinet TurkeyTaxes - Magento2 Türkiye Vergileri Modülü](https://github.com/grinet/Magento2_TurkeyTaxes)
### [Grinet TCMB Döviz - Magento2 Döviz Kuru Modülü](https://github.com/grinet/Magento2_TCMB_Doviz)
### [Grinet RomCity Import - Magento2 RomCity Şehir Import Modülü](https://github.com/grinet/Magento2_RomcityImportTurkeyCities)
### [Grinet DuplicateFix - Magento2 Hata Fix](https://github.com/grinet/Magento2-DuplicateFix)

>
# **Magento2 Modüllerimiz**

### [Grinet Iyzico - Magento Sanal Pos Modülü](https://magesanalpos.com/grinet-iyzico-magento-icin-sanal-pos-modulu-magento2)
### [Grinet Turkpay2 - Magento2 Banka Sanal Pos Modülü](https://magesanalpos.com/grinet-turkpay-magento-icin-sanal-pos-modulu-magento2)
### [Grinet Kargo - Magento2 Kargo Entegrasyon Modülü](https://magesanalpos.com/grinet-kargo-entegrasyon-modulu-magento-2)

>
# **Magento1 Modüllerimiz**

### [Grinet Iyzico - Magento1 Iyzico Sanal Pos Modülü](https://magesanalpos.com/grinet-iyzico-magento-icin-sanal-pos-modulu-magento1)
### [Grinet Turkpay - Magento1 Banka Sanal Pos Modülü](https://magesanalpos.com/grinet-turkpay-magento-icin-sanal-pos-modulu)
### [Grinet Turkpay Pro - Magento1 Banka Sanal Pos ve Açıktan Tahsilat Modülü](https://magesanalpos.com/grinet-turkpay-magento-icin-sanal-pos-modulu-pro)

## PHP compatibility

PHP 8.5 syntax and PHPCompatibility static checks were run on this release. Existing minimum PHP requirements are retained. Use a Magento release that supports your PHP runtime; syntax/static checks alone do not verify installation, DI compilation or storefront/admin behavior.

This release replaces the deprecated float cast and returns the calculated rate when bcmath is unavailable. The removed ZendClient dependency is replaced with Magento HTTP Client\Curl, available since Magento 2.0. The directory constraint retains ~100.0.5 and adds ^100.1. Mage-OS keywords reflect compatible Composer replacements and Magento namespaces; full store integration has not been tested.
