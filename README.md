## 1.Install
composer require --prefer-dist lulubin/yii2-ip2location "dev-master"

## 2.Usage

## 根据IP查询
```php
use lulubin\ip2location\Ip2Location;
$ipLocation = new Ip2Location();
$locationModel = $ipLocation->getLocation('8.8.8.8');
print_r($locationModel->toArray());
/* Array
 (
    [ip] => 8.8.8.8
    [begin_ip] => 8.8.8.8
    [end_ip] => 8.8.8.8
    [country] => 美国
    [area] => 加利福尼亚州圣克拉拉县山景市谷歌公司DNS服务器
 )*/
```

## 升级数据库
```php
use lulubin\ip2location\QQWry;
$qqwry = new QQWry();
$qqwry->upgrade();
