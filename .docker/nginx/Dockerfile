FROM nginx:1.17-alpine

COPY ./nginx/configurations/nginx.conf /etc/nginx/
COPY ./nginx/hosts/default.conf /etc/nginx/sites-available/default.conf

WORKDIR /etc/nginx/

CMD ["nginx"]