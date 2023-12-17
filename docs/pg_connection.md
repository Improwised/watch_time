## Connecting to PG database
1. Install php-pgsql
```
sudo pacman -S php-pgsql
```

2. Go to /etc/php/php.ini
```
sudo nano /etc/php/php.ini
```

3. Do enable extension=pgsql
4. create .env file at project root folder and set
```
DB_HOST=your_host
DB_PORT=your_port
DB_NAME=your_database_name
DB_USER=your_username
DB_PASSWORD=your_password
```
5. go to db/test_conn.php, you can see db connection status there
