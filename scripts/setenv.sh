#!/bin/sh
echo $PATH | egrep "/home/lr26/prestashop-1.7.3.3-0/common" > /dev/null
if [ $? -ne 0 ] ; then
PATH="/home/lr26/prestashop-1.7.3.3-0/varnish/bin:/home/lr26/prestashop-1.7.3.3-0/sqlite/bin:/home/lr26/prestashop-1.7.3.3-0/php/bin:/home/lr26/prestashop-1.7.3.3-0/mysql/bin:/home/lr26/prestashop-1.7.3.3-0/apache2/bin:/home/lr26/prestashop-1.7.3.3-0/common/bin:$PATH"
export PATH
fi
echo $LD_LIBRARY_PATH | egrep "/home/lr26/prestashop-1.7.3.3-0/common" > /dev/null
if [ $? -ne 0 ] ; then
LD_LIBRARY_PATH="/home/lr26/prestashop-1.7.3.3-0/varnish/lib:/home/lr26/prestashop-1.7.3.3-0/varnish/lib/varnish:/home/lr26/prestashop-1.7.3.3-0/varnish/lib/varnish/vmods:/home/lr26/prestashop-1.7.3.3-0/sqlite/lib:/home/lr26/prestashop-1.7.3.3-0/mysql/lib:/home/lr26/prestashop-1.7.3.3-0/apache2/lib:/home/lr26/prestashop-1.7.3.3-0/common/lib:$LD_LIBRARY_PATH"
export LD_LIBRARY_PATH
fi

TERMINFO=/home/lr26/prestashop-1.7.3.3-0/common/share/terminfo
export TERMINFO
##### VARNISH ENV #####
		
      ##### SQLITE ENV #####
			
SASL_CONF_PATH=/home/lr26/prestashop-1.7.3.3-0/common/etc
export SASL_CONF_PATH
SASL_PATH=/home/lr26/prestashop-1.7.3.3-0/common/lib/sasl2 
export SASL_PATH
LDAPCONF=/home/lr26/prestashop-1.7.3.3-0/common/etc/openldap/ldap.conf
export LDAPCONF
##### PHP ENV #####
PHP_PATH=/home/lr26/prestashop-1.7.3.3-0/php/bin/php
COMPOSER_HOME=/home/lr26/prestashop-1.7.3.3-0/php/composer
export PHP_PATH
export COMPOSER_HOME
##### MYSQL ENV #####

##### APACHE ENV #####

##### CURL ENV #####
CURL_CA_BUNDLE=/home/lr26/prestashop-1.7.3.3-0/common/openssl/certs/curl-ca-bundle.crt
export CURL_CA_BUNDLE
##### SSL ENV #####
SSL_CERT_FILE=/home/lr26/prestashop-1.7.3.3-0/common/openssl/certs/curl-ca-bundle.crt
export SSL_CERT_FILE
OPENSSL_CONF=/home/lr26/prestashop-1.7.3.3-0/common/openssl/openssl.cnf
export OPENSSL_CONF
OPENSSL_ENGINES=/home/lr26/prestashop-1.7.3.3-0/common/lib/engines
export OPENSSL_ENGINES


. /home/lr26/prestashop-1.7.3.3-0/scripts/build-setenv.sh
