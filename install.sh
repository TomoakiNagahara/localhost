#!/usr/bin/env bash

# Do selfupdate.
port selfupdate

# each PHP version.
for i in 53 54 55 56 70 71 72 73 74 80 81 82 83
do
  # Install PHP
  port install php${i}

  # each PHP Library.
  for s in fpm mbstring mysql openssl igbinary memcached apcu tideways_xhprof
  do
    port install php${i}-${s}
  done

  # Init php.ini
  if [ ! -e /opt/local/etc/php${i}/php.ini ]; then
    cp /opt/local/etc/php${i}/php.ini-development /opt/local/etc/php${i}/php.ini
  fi

  # php-fpm.conf is copy at all version.
  if [ ! -e /opt/local/etc/php${i}/php-fpm.conf ]; then
    cp /opt/local/etc/php${i}/php-fpm.conf.default /opt/local/etc/php${i}/php-fpm.conf
    # Change listen port before 7.0
    if [ $i -lt 70 ]; then
      sed -i -e "s/127.0.0.1:9000/127.0.0.1:90${i}/g" /opt/local/etc/php${i}/php-fpm.conf
    fi
  fi

  # Change listen port after 7.0
  if [ $i -ge 70 ]; then
    # Init php-fpm.d/www.conf
    if [ ! -e /opt/local/etc/php${i}/php-fpm.d/www.conf ]; then
      cp /opt/local/etc/php${i}/php-fpm.d/www.conf.default /opt/local/etc/php${i}/php-fpm.d/www.conf
      # Change listen port.
      sed -i -e "s/127.0.0.1:9000/127.0.0.1:90${i}/g" /opt/local/etc/php${i}/php-fpm.d/www.conf
      # Remove -e file.
      rm /opt/local/etc/php${i}/php-fpm.d/www.conf-e
    fi
  fi

  # Reboot
  port unload php${i}-fpm
  port   load php${i}-fpm
done
