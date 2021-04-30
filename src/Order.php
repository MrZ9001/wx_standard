<?php
/**
 * 微信小程序标准组件接口-订单接口
 * @author qiming <mrzbeiming@gmail.com>
 */
namespace WxSubassembly;
use WxSubassembly\Standard;

class Order extends Standard
{
    protected $access_token = '';
    public function __construct($access_token)
    {
        $this->access_token = $access_token;
    }

    /**
     * 获取订单列表
     * 
     * @access public
     * @param array $params
     * @return array
     * @see <https://developers.weixin.qq.com/miniprogram/dev/framework/ministore/minishopopencomponent/API/order/get_order_list.html>
     */
    public function getOrderList($params)
    {
        return $this->jsonDecode($this->curlPostJson($this->base_uri.'/order/get_list?access_token='.$this->access_token,json_encode($params)));
    }

    /**
     * 获取订单详情
     * 
     * @access public
     * @param array $params
     * @return array
     * @see <https://developers.weixin.qq.com/miniprogram/dev/framework/ministore/minishopopencomponent/API/order/get_order_detail.html>
     */
    public function getOrderDetail($params)
    {
        return $this->jsonDecode($this->curlPostJson($this->base_uri.'/order/get?access_token='.$this->access_token,json_encode($params)));
    }

    /**
     * 搜索订单
     * 
     * @access public
     * @param array $params
     * @return array
     * @see <https://developers.weixin.qq.com/miniprogram/dev/framework/ministore/minishopopencomponent/API/order/search_order.html>
     */
    public function orderSearch($params)
    {
        return $this->jsonDecode($this->curlPostJson($this->base_uri.'/order/search?access_token='.$this->access_token,json_encode($params)));
    }
}