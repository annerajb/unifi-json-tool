
docker run --rm -p 80:80 -v $(pwd):/var/www/html/ --link mariadbtest:db -it unifi-json

