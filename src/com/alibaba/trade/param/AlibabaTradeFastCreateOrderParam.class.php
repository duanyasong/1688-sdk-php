<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaTradeFastCreateOrderParam/AlibabaTradeFastAddress.class.php');
include_once ('AlibabaTradeFastCreateOrderParam/AlibabaTradeFastCargo.class.php');
include_once ('AlibabaTradeFastCreateOrderParam/AlibabaTradeFastInvoice.class.php');

class AlibabaTradeFastCreateOrderParam {

        
        /**
    * @return 流程
    */
        public function getFlow() {
        $tempResult = $this->sdkStdResult["flow"];
        return $tempResult;
    }
    
    /**
     * 设置流程     
     * @param String $flow     
     * 参数示例：<pre>general（创建大市场订单），saleproxy（创建代销市场订单），fenxiao（最新淘货源下单）</pre>     
     * 此参数必填     */
    public function setFlow( $flow) {
        $this->sdkStdResult["flow"] = $flow;
    }
    
        
        /**
    * @return 子账号ID
    */
        public function getSubUserId() {
        $tempResult = $this->sdkStdResult["subUserId"];
        return $tempResult;
    }
    
    /**
     * 设置子账号ID     
     * @param Long $subUserId     
     * 参数示例：<pre>222222</pre>     
     * 此参数必填     */
    public function setSubUserId( $subUserId) {
        $this->sdkStdResult["subUserId"] = $subUserId;
    }
    
        
        /**
    * @return 买家留言
    */
        public function getMessage() {
        $tempResult = $this->sdkStdResult["message"];
        return $tempResult;
    }
    
    /**
     * 设置买家留言     
     * @param String $message     
     * 参数示例：<pre>留言</pre>     
     * 此参数必填     */
    public function setMessage( $message) {
        $this->sdkStdResult["message"] = $message;
    }
    
        
        /**
    * @return 收货地址信息
    */
        public function getAddressParam() {
        $tempResult = $this->sdkStdResult["addressParam"];
        return $tempResult;
    }
    
    /**
     * 设置收货地址信息     
     * @param AlibabaTradeFastAddress $addressParam     
     * 参数示例：<pre>{"address":"网商路699号","phone": "0517-88990077","mobile": "15251667788","fullName": "张三","postCode": "000000","areaText": "滨江区","townText": "","cityText": "杭州市","provinceText": "浙江省"}</pre>     
     * 此参数必填     */
    public function setAddressParam(AlibabaTradeFastAddress $addressParam) {
        $this->sdkStdResult["addressParam"] = $addressParam;
    }
    
        
        /**
    * @return 商品信息
    */
        public function getCargoParamList() {
        $tempResult = $this->sdkStdResult["cargoParamList"];
        return $tempResult;
    }
    
    /**
     * 设置商品信息     
     * @param array include @see AlibabaTradeFastCargo[] $cargoParamList     
     * 参数示例：<pre>[{"specId": "b266e0726506185beaf205cbae88530d","quantity": 5,"offerId": 554456348334},{"specId": "2ba3d63866a71fbae83909d9b4814f01","quantity": 6,"offerId": 554456348334}]</pre>     
     * 此参数必填     */
    public function setCargoParamList(AlibabaTradeFastCargo $cargoParamList) {
        $this->sdkStdResult["cargoParamList"] = $cargoParamList;
    }
    
        
        /**
    * @return 发票信息
    */
        public function getInvoiceParam() {
        $tempResult = $this->sdkStdResult["invoiceParam"];
        return $tempResult;
    }
    
    /**
     * 设置发票信息     
     * @param AlibabaTradeFastInvoice $invoiceParam     
     * 参数示例：<pre>{"invoiceType":0,"cityText": "杭州市","provinceText": "浙江省","address": "网商路699号","phone": "0517-88990077","mobile": "15251667788","fullName": "张五","postCode": "000000","areaText": "滨江区","companyName": "测试公司","taxpayerIdentifier": "123455"}</pre>     
     * 此参数必填     */
    public function setInvoiceParam(AlibabaTradeFastInvoice $invoiceParam) {
        $this->sdkStdResult["invoiceParam"] = $invoiceParam;
    }
    
        
        /**
    * @return 店铺优惠ID，通过“创建订单前预览数据接口”获得。为空默认使用默认优惠
    */
        public function getShopPromotionId() {
        $tempResult = $this->sdkStdResult["shopPromotionId"];
        return $tempResult;
    }
    
    /**
     * 设置店铺优惠ID，通过“创建订单前预览数据接口”获得。为空默认使用默认优惠     
     * @param String $shopPromotionId     
     * 参数示例：<pre>itemCoupon-5600812521_31032085284-398517001570</pre>     
     * 此参数必填     */
    public function setShopPromotionId( $shopPromotionId) {
        $this->sdkStdResult["shopPromotionId"] = $shopPromotionId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>