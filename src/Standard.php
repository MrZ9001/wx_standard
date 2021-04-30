<?php
/**
 * 微信小程序标准组件接口
 * @author qiming <mrzbeiming@gmail.com>
 */
namespace WxSubassembly;
use WxSubassembly\Prepose;
use WxSubassembly\Spu;
use WxSubassembly\Sku;
use WxSubassembly\Order;
use WxSubassembly\Delivery;
use WxSubassembly\Coupon;
class Standard
{
    protected $base_uri = 'https://api.weixin.qq.com/product';
    protected $access_token;
    public function setAccessToken($access_token)
    {
        $this->access_token = $access_token;
    }
    /**
     * curl post 请求
     * @param string $url 请求地址
     * @param string $data 请求参数
     * @return array
     */
    public function curlPostJson($url, $data) {
        $header[] = 'Content-Type:application/json;charset=utf-8';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

        if (!curl_exec($ch)) {
            $data = '';
        } else {
            $data = curl_multi_getcontent($ch);
        }
        curl_close($ch);
        return $data;
    }

    /**
     * curl post 请求
     * @param string $url 请求地址
     * @param string $filename 请求参数
     * @return array
     */
    function curlPostImg($url, $filename) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_POST, 1);
        /* $curl_file = curl_file_create($filename);
        $postData = [
            'media' => $curl_file ,
        ]; */
        if (class_exists('\CURLFile')) {
            curl_setopt($ch, CURLOPT_SAFE_UPLOAD, true);
            $postData = array('media' => new \CURLFile($filename));//>=5.5
        } else {
            if (defined('CURLOPT_SAFE_UPLOAD')) {
                curl_setopt($ch, CURLOPT_SAFE_UPLOAD, false);
            }
            $postData = array('media' => '@' . realpath($filename));//<=5.5
        }
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        if (!curl_exec($ch)) {
            $data = '';
        } else {
            $data = curl_multi_getcontent($ch);
        }
        curl_close($ch);
        return $data;
    }

    public function jsonDecode($json)
    {
        return json_decode($json,true);
    }

    public function __call($name, $arguments)
    {
        $namespace = "WxSubassembly\\".$name;
        if (!class_exists($namespace)) {
            throw new \Exception('class '.$name.' not exists');
        }
        return new $namespace($this->access_token);
    }
}