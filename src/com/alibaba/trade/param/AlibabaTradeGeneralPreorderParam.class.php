<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaTradeGeneralPreorderParam/AlibabaTradeGoodsInfo.class.php');
include_once ('AlibabaTradeGeneralPreorderParam/AlibabaTradeReceiveAddress.class.php');
include_once ('AlibabaTradeGeneralPreorderParam/AlibabaTradeComKeyValuePair.class.php');

class AlibabaTradeGeneralPreorderParam {

        
        /**
    * @return 购买的货物列表
    */
        public function getGoods() {
        $tempResult = $this->sdkStdResult["goods"];
        return $tempResult;
    }
    
    /**
     * 设置购买的货物列表     
     * @param array include @see AlibabaTradeGoodsInfo[] $goods     
     * 参数示例：<pre>[   {     "cartId": null,     "ext": null,     "flow": "123",     "id": null,     "offerId": "574598811823",     "quantity": "7",     "specId": "039bd28266279a1ffa5a22b94d3094ed",     "tradeMode": null,     "tradeWay": null,     "extParams": null   } ]</pre>     
     * 此参数必填     */
    public function setGoods(AlibabaTradeGoodsInfo $goods) {
        $this->sdkStdResult["goods"] = $goods;
    }
    
        
        /**
    * @return 收货地址，可以填写买家的收货地址ID，或者买家的收货地址信息
    */
        public function getReceiveAddress() {
        $tempResult = $this->sdkStdResult["receiveAddress"];
        return $tempResult;
    }
    
    /**
     * 设置收货地址，可以填写买家的收货地址ID，或者买家的收货地址信息     
     * @param AlibabaTradeReceiveAddress $receiveAddress     
     * 参数示例：<pre>{   "address": "网商路699号",   "addressCode": "330108",   "addressCodeText": "浙江省 杭州市 滨江区",   "addressId": "322683081",   "bizType": null,   "isDefault": null,   "fullName": "张三",   "latest": null,   "mobile": "18012345678",   "phone": "0517-8888888",   "postCode": "719000" }</pre>     
     * 此参数必填     */
    public function setReceiveAddress(AlibabaTradeReceiveAddress $receiveAddress) {
        $this->sdkStdResult["receiveAddress"] = $receiveAddress;
    }
    
        
        /**
    * @return 扩展信息
    */
        public function getExtension() {
        $tempResult = $this->sdkStdResult["extension"];
        return $tempResult;
    }
    
    /**
     * 设置扩展信息     
     * @param array include @see AlibabaTradeComKeyValuePair[] $extension     
     * 参数示例：<pre>[]</pre>     
     * 此参数必填     */
    public function setExtension(AlibabaTradeComKeyValuePair $extension) {
        $this->sdkStdResult["extension"] = $extension;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>