 # Magento 2 için Türkiye Cumhuriyet Merkez Bankası Döviz Güncelleyici

Magento 2 sitenize Döviz güncelleme kısmına Türkiye Cumhuriyet Merkez Bankasını ekler. Zaman ayarlaması yapıldığında 

# Kurulum
 - Zip içinden çıkan dosyaları `/app/code/Grinet/DovizTCMB` klasörüne yükleyin

( Unix/Linux/MacOSX için ) 
Magento ana klasörünüze girip aşağıdaki komutları çalıştırın :
```bash
php bin/magento module:enable Grinet_DovizTCMB
php bin/magento setup:upgrade
php bin/magento cache:clean
```

# Composer ile kurulum
```bash
composer require grinet/doviz-tcmb
php bin/magento module:enable Grinet_DovizTCMB
php bin/magento setup:upgrade
php bin/magento cache:clean
```

# Hata bildirimi

Gördüğünüz hataları info@grinet.com.tr adresimize iletebilirsiniz...

-----------------------------------------------------------------

# Magento2 Currency Updater for Central Bank of Turkey

# Installation
 - Copy all files to `/app/code/Grinet/DovizTCMB` directory

( For Unix/Linux/MacOSX ) 
Go to your root folder of your magento site and run these commands :
```bash
php bin/magento module:enable Grinet_DovizTCMB
php bin/magento setup:upgrade
php bin/magento cache:clean
```

# Installation with composer
```bash
composer require grinet/doviz-tcmb
php bin/magento module:enable Grinet_DovizTCMB
php bin/magento setup:upgrade
php bin/magento cache:clean
```

# Error reporting

Please send errors to info@grinet.com.tr ...

------------------------------------------------------------------
# Ekran Görüntüleri / Screenshots
<img src="https://raw.githubusercontent.com/grinet/Magento2_TCMB_Doviz/master/Admin_Settings.png">
