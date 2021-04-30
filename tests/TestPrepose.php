<?php
require __DIR__.'/../vendor/autoload.php';
use WxSubassembly\Standard;
$Standard = new Standard();
$Standard->setAccessToken('44_CywbTprosesosJqQGikHTay2-mW1NCq01Kir4JQ24URwb0uIdQeBM6KrP0Oenao-yqI1uSBAgIOPpYSLazzEg1AqOlVzwaI4WMHxHQvzKrgPqoygPbXTydu1b4ELebCDcMCoVS5IMwWr7RK9HUIcAAACPD');
// 获取品牌列表
// $result = $Standard->Prepose()->getBrands();

// 获取微信类目
// $result = $Standard->Prepose()->getCategory();

// 获取运费模板
// $result = $Standard->Prepose()->getFreightTemplate();

// 获取店铺商品分类
$result = $Standard->Prepose()->getShopcat();
var_export($result);