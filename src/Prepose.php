<?php
/**
 * 微信小程序标准组件接口-前置接口
 * @author qiming <mrzbeiming@gmail.com>
 */
namespace WxSubassembly;

use WxSubassembly\Standard;

class Prepose extends Standard
{
    protected $access_token = '';
    public function __construct($access_token)
    {
        $this->access_token = $access_token;
    }
    
    /**
     * 获取品牌
     * 
     * @access  public
     * @return array
     */
    public function getBrands()
    {
        return $this->jsonDecode($this->curlPostJson('https://api.weixin.qq.com/product/brand/get?access_token='.$this->access_token,json_encode([])));
    }

    /**
     * 获取微信类目
     * 
     * @access public
     * @param int $cate_id
     * @return array
     */
    public function getCategory($cate_id = 0)
    {
        return $this->jsonDecode($this->curlPostJson('https://api.weixin.qq.com/product/category/get?access_token='.$this->access_token,json_encode(['f_cat_id' => $cate_id])));
    }

    /**
     * 获取运费模板
     * 
     * @access public
     * @return array
     */
    public function getFreightTemplate()
    {
        return $this->jsonDecode($this->curlPostJson('https://api.weixin.qq.com/product/delivery/get_freight_template?access_token='.$this->access_token,json_encode([])));
    }

    /**
     * 获取店铺的商品分类
     * 
     * @access public
     * @return array
     */
    public function getShopcat()
    {
        return $this->jsonDecode($this->curlPostJson('https://api.weixin.qq.com/product/store/get_shopcat?access_token='.$this->access_token,json_encode([])));
    }
}