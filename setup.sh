docker run --name mariadbtest -e MYSQL_ROOT_PASSWORD=mypass -e MYSQL_USER=unifi -e MYSQL_PASSWORD=password -e MYSQL_DATABASE=unifi  -d mariadb/server:10.1
docker exec -i some-mariadb sh -c 'exec mysql -uroot -p"password"' < db.sql
