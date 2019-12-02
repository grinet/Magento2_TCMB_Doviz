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

\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Grinet_DovizTCMB',
    __DIR__
);
