Faça download pelo site [PHP.net](https://secure.php.net/downloads.php) da versão estável.

```bash
> tar -vzxf php-7.3.1.tar.gz  

> cd php-7.3.1   

> sudo apt install libxml2-dev libssl-dev libbz2-dev curl-dev libcurl4-gnutls-dev libzip-dev   

> ./configure --prefix=/etc/php7 --enable-fpm --with-openssl --with-zlib --enable-bcmath --with-bz2 --with-curl --enable-exif --with-gd --with-gettext --with-mhash --enable-mbstring --enable-soap --enable-zip --with-mysqli --with-pdo-mysql --with-xmlrpc --enable-maintainer-zts --enable-pcntl  

> make  

> sudo make install  

> cd /etc/php7    

> cd bin  

> /etc/php7/bin/php -v  

> export PATH=$PATH:/etc/php7/bin  

> php -v  

> php -S localhost:8080  
```