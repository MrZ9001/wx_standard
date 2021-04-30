<?php
/**
 * 微信小程序标准组件接口-店铺接口
 * @author qiming <mrzbeiming@gmail.com>
 */
namespace WxSubassembly;
use WxSubassembly\Standard;

class Store extends Standard
{
    protected $access_token = '';
    public function __construct($access_token)
    {
        $this->access_token = $access_token;
    }
    

    /**
     * 获取店铺信息
     * 
     * @access public
     * @return array
     */
    public function storeInfo()
    {
        return $this->jsonDecode($this->curlPostJson($this->base_uri.'/store/get_info?access_token='.$this->access_token,json_encode([])));
    }

    /**
     * 上传图片
     * 
     * @access public
     * @param string $img 本地图片路径
     * @param int $width
     * @param int $height
     * @return array
     * @see <https://developers.weixin.qq.com/miniprogram/dev/framework/ministore/minishopopencomponent/API/register/uploadimg.html>
     */
    public function uploadImg($img,$width,$height)
    {
        return $this->jsonDecode($this->curlPostImg('https://api.weixin.qq.com/product/img/upload?access_token='.$this->access_token.'&height='.$height.'&width='.$width,$img));
    }

    /**
     * 提交支付资质
     * 
     * @access public
     * @param array $params
     * @return array
     * @see <https://developers.weixin.qq.com/miniprogram/dev/framework/ministore/minishopopencomponent/API/register/submit_merchantinfo.html>
     */
    public function submitMerchantinfo($params)
    {
        return $this->jsonDecode($this->curlPostJson($this->base_uri.'/register/submit_merchantinfo?access_token='.$this->access_token,json_encode($params)));
    }

    /**
     * 提交小商店基础信息
     * 
     * @access public
     * @param array $params
     * @return array
     * @see <https://developers.weixin.qq.com/miniprogram/dev/framework/ministore/minishopopencomponent/API/register/submit_basicinfo.html>
     */
    public function submitBasicinfo($params)
    {
        return $this->jsonDecode($this->curlPostJson($this->base_uri.'/register/submit_basicinfo?access_token='.$this->access_token,json_encode($params)));
    }

    /**
     * 上传临时素材接口
     * 
     * @access public
     * @param string $type [image|voice|video|thumb]
     * @param string $filename
     * @return array
     */
    public function mediaUpload($type, $filename)
    {
        return $this->jsonDecode($this->curlPostImg('https://api.weixin.qq.com/cgi-bin/media/upload?type='.$type.'&access_token='.$this->access_token,$filename));
    }
}