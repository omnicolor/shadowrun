#!/usr/bin/env bash

apt-get update
apt-get install -y apache2 php5 2> /dev/null
rm -rf /var/www
ln -fs /vagrant/web /var/www
cp /vagrant/vagrant/web.apache.conf /etc/apache2/sites-available/default
mkdir /var/twig-cache
chmod 700 /var/twig-cache
chown www-data /var/twig-cache
service apache2 restart
