#### 介绍

基于 [phptool/vbot](https://github.com/PHPTool/vbot) [基于 [hanson/vbot](https://github.com/Hanson/vbot) 的改版]实现

#### 使用说明
引入 swoole
```php
pecl install swoole
```

终端运行
```php
php public/run.php --session=vbot // 单独创建一个微信机器人服务
```

多微信号运行（新建终端运行）
```php
php public/run.php --session=vbot1 // 单独创建一个微信机器人服务
```



#### todo
* 多码扫描管理
* 拉手功能

