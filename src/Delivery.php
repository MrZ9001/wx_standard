<?php
/**
 * 微信小程序标准组件接口-物流接口
 * @author qiming <mrzbeiming@gmail.com>
 */
namespace WxSubassembly;
use WxSubassembly\Standard;

class Delivery extends Standard
{
    protected $access_token = '';
    public function __construct($access_token)
    {
        $this->access_token = $access_token;
    }

    /**
     * 获取快递公司列表
     * 
     * @access public
     * @return array
     * @see <https://developers.weixin.qq.com/miniprogram/dev/framework/ministore/minishopopencomponent/API/delivery/get_delivery_company_list.html>
     */
    public function getCompanyList()
    {
        return $this->jsonDecode($this->curlPostJson($this->base_uri.'/delivery/get_company_list?access_token='.$this->access_token,json_encode([])));
    }
    
    /**
     * 订单发货
     * 
     * @access public
     * @param array $params
     * @return array
     * @see <https://developers.weixin.qq.com/miniprogram/dev/framework/ministore/minishopopencomponent/API/delivery/send_delivery.html>
     */
    public function getOrderList($params)
    {
        return $this->jsonDecode($this->curlPostJson($this->base_uri.'/delivery/send?access_token='.$this->access_token,json_encode($params)));
    }
}