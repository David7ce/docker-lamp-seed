# docker-lamp

another Docker with Apache, MySQL 8.0, PHPMyAdmin and PHP.

I use docker-compose as an orchestrator. To run these containers:

```bash
docker-compose up -d
```

Unlike most of this docker compose configs, this one is selinux ready. Just add the `:z` flags, my dudes.

## Services
- phpmyadmin at [http://127.0.0.1:8000](http://127.0.0.1:8000)
- served app at [http://127.0.0.1:80](http://127.0.0.1:80)

## Project Setup
Clone YourProject on `www/` and then, open web [http://127.0.0.1/YourProject](http://127.0.0.1/YourProject)

Don't forget to modify the .gitignore file

## Other
Run MySQL client:

```bash
docker-compose exec db mysql -u root -p
```


Wordpress direct problems

```php
define('FS_METHOD', 'direct');
```

Permissions problems

```bash
docker exec -u root -it {CONTAINER_ID} /bin/bash
chown -R www-data wp-content
chmod -R 755 wp-content
```

# User info

- Host: db
- Database: dbname
- User: root
- Password: test
