FROM httpd:2.4-alpine

COPY ./development/apache/httpd-vhosts.conf /usr/local/apache2/conf/extra/httpd-vhosts.conf
COPY ./development/apache/httpd.conf /usr/local/apache2/conf/httpd.conf

WORKDIR /template
