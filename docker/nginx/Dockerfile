FROM nginx:1.13.3

RUN apt-get update && apt-get install -y vim nano --fix-missing

ADD nginx.conf /etc/nginx/nginx.conf
ADD ssl /etc/nginx/ssl

RUN usermod -u 1000 www-data

CMD ["nginx", "-g", "daemon off;"]

WORKDIR /var/www/html

EXPOSE 80 443
