<?php
/**
 * 微信小程序标准组件接口-优惠券接口
 * @author qiming <mrzbeiming@gmail.com>
 */
namespace WxSubassembly;
use WxSubassembly\Standard;

class Coupon extends Standard
{
    protected $access_token = '';
    public function __construct($access_token)
    {
        $this->access_token = $access_token;
    }

    /**
     * 创建优惠券
     * 
     * @access public
     * @param array $params
     * @return array
     * @see <https://developers.weixin.qq.com/miniprogram/dev/framework/ministore/minishopopencomponent/API/coupon/create_coupon.html>
     */
    public function couponCreate($params)
    {
        return $this->jsonDecode($this->curlPostJson($this->base_uri.'/coupon/create?access_token='.$this->access_token,json_encode($params)));
    }

    /**
     * 更新优惠券
     * 
     * @access public
     * @param array $params
     * @return array
     * @see <https://developers.weixin.qq.com/miniprogram/dev/framework/ministore/minishopopencomponent/API/coupon/update_coupon.html>
     */
    public function couponUpdate($params)
    {
        return $this->jsonDecode($this->curlPostJson($this->base_uri.'/coupon/update?access_token='.$this->access_token,json_encode($params)));
    }

    /**
     * 更新优惠券状态
     * 
     * @access public
     * @param array $params
     * @return array
     * @see <https://developers.weixin.qq.com/miniprogram/dev/framework/ministore/minishopopencomponent/API/coupon/update_coupon_status.html>
     */
    public function couponUpdateStatus($params)
    {
        return $this->jsonDecode($this->curlPostJson($this->base_uri.'/coupon/update_status?access_token='.$this->access_token,json_encode($params)));
    }

    /**
     * 获取优惠券信息
     * 
     * @access public
     * @param array $params
     * @return array
     * @see <https://developers.weixin.qq.com/miniprogram/dev/framework/ministore/minishopopencomponent/API/coupon/get.html>
     */
    public function getCouponDetail($params)
    {
        return $this->jsonDecode($this->curlPostJson($this->base_uri.'/coupon/get?access_token='.$this->access_token,json_encode($params)));
    }

    /**
     * 获取优惠券列表
     * 
     * @access public
     * @param array $params
     * @return array
     * @see <https://developers.weixin.qq.com/miniprogram/dev/framework/ministore/minishopopencomponent/API/coupon/get_coupon.html>
     */
    public function getCouponList($params)
    {
        return $this->jsonDecode($this->curlPostJson($this->base_uri.'/coupon/get_list?access_token='.$this->access_token,json_encode($params)));
    }

    /**
     * 发放优惠券
     * 
     * @access public
     * @param array $params
     * @return array
     * @see <https://developers.weixin.qq.com/miniprogram/dev/framework/ministore/minishopopencomponent/API/coupon/push_coupon.html>
     */
    public function couponPush($params)
    {
        return $this->jsonDecode($this->curlPostJson($this->base_uri.'/coupon/push?access_token='.$this->access_token,json_encode($params)));
    }
}