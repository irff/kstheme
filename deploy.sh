#!/bin/sh

ssh irfan@104.236.129.7 <<EOF
  cd ~/kstheme
  git pull
  rsync -av --exclude='.git/' --exclude='deploy.sh' . /var/www/khairulsaleh/wp-content/themes/kstheme/
  exit
EOF