<?php
/**
 * 微信小程序标准组件接口-商品接口
 * @author qiming <mrzbeiming@gmail.com>
 */
namespace WxSubassembly;
use WxSubassembly\Standard;

class Spu extends Standard
{
    protected $access_token = '';
    public function __construct($access_token)
    {
        $this->access_token = $access_token;
    }

    /**
     * 添加商品
     * 
     * @access public
     * @param array $params
     * @return array
     * @see <https://developers.weixin.qq.com/miniprogram/dev/framework/ministore/minishopopencomponent/API/spu/add_spu.html>
     */
    public function spuAdd($params)
    {
        return $this->jsonDecode($this->curlPostJson($this->base_uri.'/spu/add?access_token='.$this->access_token,json_encode($params)));
    }

    /**
     * 删除商品
     * $params 两个字段二选一
     * - product_id
     * - out_product_id
     * 
     * @access public
     * @param array $params
     * @return array
     * @see <https://developers.weixin.qq.com/miniprogram/dev/framework/ministore/minishopopencomponent/API/spu/del_spu.html>
     */
    public function spuDel($params)
    {
        return $this->jsonDecode($this->curlPostJson($this->base_uri.'/spu/del?access_token='.$this->access_token,json_encode($params)));
    }

    /**
     * 获取单个商品
     * 
     * @access public
     * @param array $params
     * @return array
     * @see <https://developers.weixin.qq.com/miniprogram/dev/framework/ministore/minishopopencomponent/API/spu/get_spu.html>
     */
    public function getSpu($params)
    {
        return $this->jsonDecode($this->curlPostJson($this->base_uri.'/spu/get?access_token='.$this->access_token,json_encode($params)));
    }

    /**
     * 获取商品列表
     * 
     * @access public 
     * @param array $params
     * @return array
     * @see <https://developers.weixin.qq.com/miniprogram/dev/framework/ministore/minishopopencomponent/API/spu/get_spu_list.html>
     */
    public function getSpuList($params)
    {
        return $this->jsonDecode($this->curlPostJson($this->base_uri.'/spu/get_list?access_token='.$this->access_token,json_encode($params)));
    }

    /**
     * 搜索商品
     * 
     * @access public 
     * @param array $params
     * @return array
     * @see <https://developers.weixin.qq.com/miniprogram/dev/framework/ministore/minishopopencomponent/API/spu/search_spu.html>
     */
    public function spuSearch($params)
    {
        return $this->jsonDecode($this->curlPostJson($this->base_uri.'/spu/search?access_token='.$this->access_token,json_encode($params)));
    }

    /**
     * 更新商品
     * 
     * @access public
     * @param array $params
     * @return array
     * @see <https://developers.weixin.qq.com/miniprogram/dev/framework/ministore/minishopopencomponent/API/spu/up_spu.html>
     */
    public function spuUpdate($params)
    {
        return $this->jsonDecode($this->curlPostJson($this->base_uri.'/spu/update?access_token='.$this->access_token,json_encode($params)));
    }

    /**
     * 上架商品
     * 
     * @access public
     * @param array $params
     * @return array
     * @see <https://developers.weixin.qq.com/miniprogram/dev/framework/ministore/minishopopencomponent/API/spu/up_spu_listing.html>
     */
    public function spuListing($params)
    {
        return $this->jsonDecode($this->curlPostJson($this->base_uri.'/spu/listing?access_token='.$this->access_token,json_encode($params)));
    }

    /**
     * 下架商品
     * 
     * @access public
     * @param array $params
     * @return array
     * @see <https://developers.weixin.qq.com/miniprogram/dev/framework/ministore/minishopopencomponent/API/spu/up_spu_delisting.html>
     */
    public function spuDelisting($params)
    {
        return $this->jsonDecode($this->curlPostJson($this->base_uri.'/spu/delisting?access_token='.$this->access_token,json_encode($params)));
    }

    /**
     * 添加抢购任务
     * 
     * @access public
     * @param array $params
     * @return array
     * @see <https://developers.weixin.qq.com/miniprogram/dev/framework/ministore/minishopopencomponent/API/spu/add_limiteddiscount.html>
     */
    public function addLimiteddiscount($params)
    {
        return $this->jsonDecode($this->curlPostJson($this->base_uri.'/limiteddiscount/add/access_token='.$this->access_token,json_encode($params)));
    }

    /**
     * 获取抢购任务列表
     * 
     * @access public
     * @param array $params
     * @return array
     * @see <https://developers.weixin.qq.com/miniprogram/dev/framework/ministore/minishopopencomponent/API/spu/get_limiteddiscount_list.html>
     */
    public function getLimiteddiscountList($params)
    {
        return $this->jsonDecode($this->curlPostJson($this->base_uri.'/limiteddiscount/get_list?access_token='.$this->access_token,json_encode($params)));
    }

    /**
     * 更新抢购任务状态
     * 
     * @access public
     * @param array $params
     * @return array
     * @see <https://developers.weixin.qq.com/miniprogram/dev/framework/ministore/minishopopencomponent/API/spu/update_limiteddiscount_status.html>
     */
    public function limiteddiscountUpdate($params)
    {
        return $this->jsonDecode($this->curlPostJson($this->base_uri.'/limiteddiscount/update_status/access_token='.$this->access_token,json_encode($params)));
    }
}