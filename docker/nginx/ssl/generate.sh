#!/usr/bin/env bash

openssl genrsa -des3 -out endroid.key 2048
openssl req -x509 -new -nodes -key endroid.key -sha256 -days 20000 -out endroid.pem

sudo openssl req -new -sha256 -nodes -out server.csr -newkey rsa:2048 -keyout server.key -config server.csr.cnf
sudo openssl x509 -req -in server.csr -CA endroid.pem -CAkey endroid.key -CAcreateserial -out server.crt -days 20000 -sha256 -extfile v3.ext

openssl x509 -in endroid.pem -inform PEM -out endroid.crt
sudo cp endroid.crt /usr/share/ca-certificates/
sudo dpkg-reconfigure ca-certificates

sudo apt-get install libnss3-tools
certutil -d sql:$HOME/.pki/nssdb -A -t "C,," -n "Endroid" -i endroid.crt
