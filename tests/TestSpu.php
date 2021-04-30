<?php
require __DIR__.'/../vendor/autoload.php';
use WxSubassembly\Standard;
$Standard = new Standard();
$Standard->setAccessToken('44_G9KgzCR6jSvsm1TeKEWS4He-2fm7rS5mYskQ8q-FdrlOkO3TqLZ7QVi1KSc021erKNqB2XHaEyuoL86xaBea7pIpOlQ_CqfEH63E7fbVEA0041ERBqdH5MWsPEKzI6GiFm87yy9zUaePGdpWMTDjACAELV');
// 获取商品列表
// $result = $Standard->Spu()->getSpuList(['status'=>11,'page'=>1,'page_size'=>10,'need_edit_spu'=>1]);

// 获取抢购任务列表
// $result = $Standard->Spu()->getLimiteddiscountList(['status'=>0]);

// 获取物流公司列表
// $result = $Standard->Store()->uploadImg(__DIR__.'/aaaa.jpg',80,80);
$result = $Standard->Store()->mediaUpload('image', __DIR__.'/aaaa.jpg');
var_export($result);