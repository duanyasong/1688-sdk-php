<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaTradeCreateCrossOrderWithOBUidParam/AlibabaTradeFastAddress.class.php');
include_once ('AlibabaTradeCreateCrossOrderWithOBUidParam/AlibabaTradeFastCargo.class.php');
include_once ('AlibabaTradeCreateCrossOrderWithOBUidParam/AlibabaTradeFastInvoice.class.php');

class AlibabaTradeCreateCrossOrderWithOBUidParam {

        
        /**
    * @return 代购用户唯一Id
    */
        public function getObUid() {
        $tempResult = $this->sdkStdResult["obUid"];
        return $tempResult;
    }
    
    /**
     * 设置代购用户唯一Id     
     * @param String $obUid     
     * 参数示例：<pre>T123421</pre>     
     * 此参数必填     */
    public function setObUid( $obUid) {
        $this->sdkStdResult["obUid"] = $obUid;
    }
    
        
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
     * 参数示例：<pre>general（创建大市场订单），saleproxy（创建分销订单）</pre>     
     * 此参数必填     */
    public function setFlow( $flow) {
        $this->sdkStdResult["flow"] = $flow;
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
    * @return 由于不同的商品支持的交易方式不同，没有一种交易方式是全局通用的，所以当前下单可使用的交易方式必须通过下单预览接口的tradeModeNameList获取。交易方式类型说明：fxassure（交易4.0通用担保交易），alipay（大市场通用的支付宝担保交易（目前在做切流，后续会下掉）），period（普通账期交易）, assure（大买家企业采购询报价下单时需要使用的担保交易流程）, creditBuy（诚E赊），bank（银行转账），631staged（631分阶段付款），37staged（37分阶段）；此字段不传则系统默认会选取一个可用的交易方式下单，默认使用的方式是支付宝担宝交易。
    */
        public function getTradeType() {
        $tempResult = $this->sdkStdResult["tradeType"];
        return $tempResult;
    }
    
    /**
     * 设置由于不同的商品支持的交易方式不同，没有一种交易方式是全局通用的，所以当前下单可使用的交易方式必须通过下单预览接口的tradeModeNameList获取。交易方式类型说明：fxassure（交易4.0通用担保交易），alipay（大市场通用的支付宝担保交易（目前在做切流，后续会下掉）），period（普通账期交易）, assure（大买家企业采购询报价下单时需要使用的担保交易流程）, creditBuy（诚E赊），bank（银行转账），631staged（631分阶段付款），37staged（37分阶段）；此字段不传则系统默认会选取一个可用的交易方式下单，默认使用的方式是支付宝担宝交易。     
     * @param String $tradeType     
     * 参数示例：<pre>fxassure</pre>     
     * 此参数必填     */
    public function setTradeType( $tradeType) {
        $this->sdkStdResult["tradeType"] = $tradeType;
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