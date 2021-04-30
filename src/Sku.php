<?php
/**
 * 微信小程序标准组件接口-sku 接口
 * @author qiming <mrzbeiming@gmail.com>
 */
namespace WxSubassembly;
use WxSubassembly\Standard;

class Sku extends Standard
{
    protected $access_token = '';
    public function __construct($access_token)
    {
        $this->access_token = $access_token;
    }

    /**
     * 添加sku
     * 
     * @access public
     * @param array $params
     * @return array
     * @see <https://developers.weixin.qq.com/miniprogram/dev/framework/ministore/minishopopencomponent/API/sku/add_sku.html>
     */
    public function skuAdd($params)
    {
        return $this->jsonDecode($this->curlPostJson($this->base_uri.'/sku/add?access_token='.$this->access_token,json_encode($params)));
    }

    /**
     * 批量添加sku
     * 
     * @access public
     * @param array $params
     * @return array
     * @see <https://developers.weixin.qq.com/miniprogram/dev/framework/ministore/minishopopencomponent/API/sku/batch_add_sku.html>
     */
    public function skuBatchAdd($params)
    {
        return $this->jsonDecode($this->curlPostJson($this->base_uri.'/sku/batch_add?access_token='.$this->access_token,json_encode($params)));
    }

    /**
     * 删除sku
     * 
     * @access public
     * @param array $params
     * @return array
     * @see <https://developers.weixin.qq.com/miniprogram/dev/framework/ministore/minishopopencomponent/API/sku/del_sku.html>
     */
    public function skuDel($params)
    {
        return $this->jsonDecode($this->curlPostJson($this->base_uri.'/sku/del?access_token='.$this->access_token,json_encode($params)));
    }

    /**
     * 获取SKU信息
     * 
     * @access public
     * @param array $params
     * @return array
     * @see <https://developers.weixin.qq.com/miniprogram/dev/framework/ministore/minishopopencomponent/API/sku/get_sku.html>
     */
    public function getSku($params)
    {
        return $this->jsonDecode($this->curlPostJson($this->base_uri.'/sku/get?access_token='.$this->access_token,json_encode($params)));
    }

    /**
     * 批量获取SKU信息
     * 
     * @access public
     * @param array $params
     * @return array
     * @see <https://developers.weixin.qq.com/miniprogram/dev/framework/ministore/minishopopencomponent/API/sku/get_sku.html>
     */
    public function getSkuList($params)
    {
        return $this->jsonDecode($this->curlPostJson($this->base_uri.'/sku/get_list?access_token='.$this->access_token,json_encode($params)));
    }

    /**
     * 更新SKU
     * 
     * @access public
     * @param array $params
     * @return array
     * @see <https://developers.weixin.qq.com/miniprogram/dev/framework/ministore/minishopopencomponent/API/sku/up_sku.html>
     */
    public function skuUpdate($params)
    {
        return $this->jsonDecode($this->curlPostJson($this->base_uri.'/sku/update?access_token='.$this->access_token,json_encode($params)));
    }

    /**
     * 更新SKU价格
     * 
     * @access public
     * @param array $params
     * @return array
     * @see <https://developers.weixin.qq.com/miniprogram/dev/framework/ministore/minishopopencomponent/API/sku/up_sku_price.html>
     */
    public function skuUpdatePrice($params)
    {
        return $this->jsonDecode($this->curlPostJson($this->base_uri.'/sku/update_price?access_token='.$this->access_token,json_encode($params)));
    }

    /**
     * 更新库存
     * 
     * @access public
     * @param array $params
     * @return array
     * @see <https://developers.weixin.qq.com/miniprogram/dev/framework/ministore/minishopopencomponent/API/sku/up_stock.html>
     */
    public function skuUpStock($params)
    {
        return $this->jsonDecode($this->curlPostJson($this->base_uri.'/stock/update?access_token='.$this->access_token,json_encode($params)));
    }

    /**
     * 获取库存
     * 
     * @access public
     * @param array $params
     * @return array
     * @see <https://developers.weixin.qq.com/miniprogram/dev/framework/ministore/minishopopencomponent/API/sku/get_stock.html>
     */
    public function skuStock($params)
    {
        return $this->jsonDecode($this->curlPostJson($this->base_uri.'/stock/get?access_token='.$this->access_token,json_encode($params)));
    }
}