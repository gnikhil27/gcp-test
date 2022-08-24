#!/bin/bash

apt update;
apt upgrade -y;

apt install git apache2 php;

rm -r /var/www/html;
git clone https://github.com/gnikhil27/gcp-test.git /var/www/html;

service apache2 restart;