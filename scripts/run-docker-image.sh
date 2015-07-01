#!/bin/bash
root_folder=$(dirname $(dirname $(realpath -s $0)))
sudo docker run -d --name perf-test-suite-apache -p 4000:80 -v $root_folder:/var/www/html php:5.6-apache
