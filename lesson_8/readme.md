# 1. Установить Zabbix Server.
## Установка ZABBIX
```
sudo apt install zabbix-server-mysql zabbix-frontend-php
```
***
>>> zabbix_server -V
zabbix_server (Zabbix) 3.0.12
Revision 73586 17 October 2017, compilation time: Oct 29 2017 10:47:20
***
## Создание базы данных
```
mysql>
CREATE DATABASE zabbix;
ALTER DATABASE zabbix CHARACTER SET utf8 COLLATE utf8_general_ci;
GRANT ALL on zabbix.* to zabbix@localhost IDENTIFIED BY 'zabbix';
FLUSH PRIVILEGES;
```
***
```
cd /usr/share/zabbix-server-mysql/
zcat data.sql.gz | mysql -u zabbix -p zabbix
zcat schema.sql.gz | mysql -u zabbix -p zabbix
zcat images.sql.gz | mysql -u zabbix -p zabbix
```
***
## Настройка ZABBIX
```
sudo nano /etc/zabbix/zabbix_server.conf
DBHost=localhost
DBName=zabbix
DBUser=zabbix
DBPassword=zabbix
```
***
## Настройка NGINX
```
sudo nano /etc/nginx/conf.d/zabbix.conf
```
**Отчет: файл "zabbix.conf"**
***
```
sudo chown -R www-data. /usr/share/zabbix
```
***
```
sudo service nginx restart
sudo service mysql restart
sudo service zabbix-server restart
```
***
После этого ZABBIX не хотел работать, искал файл "/etc/zabbix/zabbix.conf.php" которого небыло нигде в системе!

*Я нашел файл:*
```
/usr/share/zabbix/conf/zabbix.conf.php.example
```
*Скопировал в:*
```
/etc/zabbix/zabbix.conf.php
```
**После настройки, скопировал его в папку с ДЗ.**
***
*Далее вылезла ошибка:*
```
DBException: Unable to select configuration. in /usr/share/zabbix/include/classes/core/ZBase.php on line 297
```
*В этом файле было на 297 строке:*
```
$error = null;
	if (!DBconnect($error)) {
		throw new DBException($error);
	}
```

*После повторного:*
```
zcat data.sql.gz | mysql -u zabbix -p zabbix
```
*WEB-интерфейс заработал!*

***Отчет в папке "task_1"***
***
# 2. Добавить шаблон мониторинга HTTP-соединений.

***Отчет в папке "task_2"***

# 3. Настроить мониторинг созданных в рамках курса виртуальных машин.

*На странице с данными и графиками пишет ошибку:*
```
count(): Parameter must be an array or an object that implements Countable [ in latest.php:103]
```
*Данную проблему решить не смог, там какие-то ошибки в коде!
На последнем скриншоте видно, что 2-ой сервер подключен!*

***Отчет в папке "task_3"***