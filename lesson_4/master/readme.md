```
user@highload:~$ ip a
1: lo: <LOOPBACK,UP,LOWER_UP> mtu 65536 qdisc noqueue state UNKNOWN group default qlen 1000
    link/loopback 00:00:00:00:00:00 brd 00:00:00:00:00:00
    inet 127.0.0.1/8 scope host lo
       valid_lft forever preferred_lft forever
    inet6 ::1/128 scope host 
       valid_lft forever preferred_lft forever
2: enp0s3: <BROADCAST,MULTICAST,UP,LOWER_UP> mtu 1500 qdisc fq_codel state UP group default qlen 1000
    link/ether 08:00:27:e4:a2:ce brd ff:ff:ff:ff:ff:ff
    inet 10.0.2.15/24 brd 10.0.2.255 scope global dynamic enp0s3
       valid_lft 86273sec preferred_lft 86273sec
    inet6 fe80::a00:27ff:fee4:a2ce/64 scope link 
       valid_lft forever preferred_lft forever
3: enp0s8: <BROADCAST,MULTICAST,UP,LOWER_UP> mtu 1500 qdisc fq_codel state UP group default qlen 1000
    link/ether 08:00:27:79:0c:10 brd ff:ff:ff:ff:ff:ff
    inet 192.168.83.3/24 brd 192.168.83.255 scope global enp0s8
       valid_lft forever preferred_lft forever
    inet6 fe80::a00:27ff:fe79:c10/64 scope link 
       valid_lft forever preferred_lft forever
```
******************************************
**mysql> SHOW DATABASES;**
Database |
--- |
information_schema |
mysql |
new_database |
performance_schema |
skytech |
sys |
******************************************
**mysql> SHOW MASTER STATUS;**
File | Position	Binlog_Do_DB | Binlog_Ignore_DB | Executed_Gtid_Set
--- | --- | --- | ---
mysql-bin.000012 | 154 | skytech |
******************************************
