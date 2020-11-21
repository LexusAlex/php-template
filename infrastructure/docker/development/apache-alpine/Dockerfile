FROM httpd:2.4-alpine

COPY ./httpd-vhosts.conf /usr/local/apache2/conf/extra/httpd-vhosts.conf
COPY ./httpd.conf /usr/local/apache2/conf/httpd.conf

WORKDIR /template
