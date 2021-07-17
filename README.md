# -phone-location
手机号码归属地库

PHP 实现手机号码归属地查询，数据文件来自 [https://github.com/lovedboy/phone](https://github.com/lovedboy/phone)

### 提示
由于2019年11月携号转网已开始实行，手机号的运营商可能与实际不符，请谨慎将运营商信息用于重要的业务上。

### Installation
```
composer require "mayunfeng/phone-location"
```

### Usage
```php
<?php
use Mayunfeng\PhoneLocation\PhoneLocation;

// composer 方式安装
// include './vendor/autoload.php';

// 非 composer 方式安装的，引入文件
// include './src/PhoneLocation.php';
	
$pl = new PhoneLocation();
$info = $pl->find(18621288888);
print_r($info);

// Output;
Array
(
    [province] => 上海
    [city] => 上海
    [postcode] => 200000
    [tel_prefix] => 021
    [sp] => 联通
)
```

### Thanks
[https://github.com/lovedboy/phone](https://github.com/lovedboy/phone)

### License
[MIT license.](https://raw.githubusercontent.com/mayunf/phone-location/master/LICENSE)
