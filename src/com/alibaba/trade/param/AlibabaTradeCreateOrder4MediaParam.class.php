<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaTradeCreateOrder4MediaParam/AlibabaTradeFastAddress.class.php');
include_once ('AlibabaTradeCreateOrder4MediaParam/AlibabaTradeFastCargo.class.php');

class AlibabaTradeCreateOrder4MediaParam {

        
        /**
    * @return 下单方式，默认大市场下单，如需使用代销模式传fenxiao；，paired（有伙拼标offer可传该参数，走伙拼价，否则报错）
    */
        public function getFlow() {
        $tempResult = $this->sdkStdResult["flow"];
        return $tempResult;
    }
    
    /**
     * 设置下单方式，默认大市场下单，如需使用代销模式传fenxiao；，paired（有伙拼标offer可传该参数，走伙拼价，否则报错）     
     * @param String $flow     
     * 参数示例：<pre>fenxiao</pre>     
     * 此参数必填     */
    public function setFlow( $flow) {
        $this->sdkStdResult["flow"] = $flow;
    }
    
        
        /**
    * @return 收货地址
    */
        public function getAddressParam() {
        $tempResult = $this->sdkStdResult["addressParam"];
        return $tempResult;
    }
    
    /**
     * 设置收货地址     
     * @param AlibabaTradeFastAddress $addressParam     
     * 参数示例：<pre>{}</pre>     
     * 此参数必填     */
    public function setAddressParam(AlibabaTradeFastAddress $addressParam) {
        $this->sdkStdResult["addressParam"] = $addressParam;
    }
    
        
        /**
    * @return 购买的商品信息
    */
        public function getCargoParamList() {
        $tempResult = $this->sdkStdResult["cargoParamList"];
        return $tempResult;
    }
    
    /**
     * 设置购买的商品信息     
     * @param array include @see AlibabaTradeFastCargo[] $cargoParamList     
     * 参数示例：<pre>[]</pre>     
     * 此参数必填     */
    public function setCargoParamList(AlibabaTradeFastCargo $cargoParamList) {
        $this->sdkStdResult["cargoParamList"] = $cargoParamList;
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
    * @return 媒体的订单信息，json格式，如果校验不通过，不能创建订单。mediaOrderId:媒体订单号;offers.id:Long,1688订单id;offers.specId:String,1688商品sku标识(可能无);offers.price:Long,媒体溢价单价(单位分);offers.num:Long,售卖数量
    */
        public function getOuterOrderInfo() {
        $tempResult = $this->sdkStdResult["outerOrderInfo"];
        return $tempResult;
    }
    
    /**
     * 设置媒体的订单信息，json格式，如果校验不通过，不能创建订单。mediaOrderId:媒体订单号;offers.id:Long,1688订单id;offers.specId:String,1688商品sku标识(可能无);offers.price:Long,媒体溢价单价(单位分);offers.num:Long,售卖数量     
     * @param String $outerOrderInfo     
     * 参数示例：<pre>{"mediaOrderId":11,"offers":[{"id":586053789191,"specId":"af478130f6c683c4c77bb511796617d7","price":12343,"num":1}]}</pre>     
     * 此参数必填     */
    public function setOuterOrderInfo( $outerOrderInfo) {
        $this->sdkStdResult["outerOrderInfo"] = $outerOrderInfo;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>