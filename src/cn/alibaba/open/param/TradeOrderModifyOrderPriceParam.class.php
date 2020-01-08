<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class TradeOrderModifyOrderPriceParam {

        
        /**
    * @return 订单id
    */
        public function getOrderId() {
        $tempResult = $this->sdkStdResult["orderId"];
        return $tempResult;
    }
    
    /**
     * 设置订单id     
     * @param Long $orderId     
     * 参数示例：<pre>192551450083225</pre>     
     * 此参数必填     */
    public function setOrderId( $orderId) {
        $this->sdkStdResult["orderId"] = $orderId;
    }
    
        
        /**
    * @return 订单修改之后的运费，单位为分
    */
        public function getCarriage() {
        $tempResult = $this->sdkStdResult["carriage"];
        return $tempResult;
    }
    
    /**
     * 设置订单修改之后的运费，单位为分     
     * @param Long $carriage     
     * 参数示例：<pre>100</pre>     
     * 此参数必填     */
    public function setCarriage( $carriage) {
        $this->sdkStdResult["carriage"] = $carriage;
    }
    
        
        /**
    * @return 改价明细,discount值的单位为分，正数为涨价，负数为减价
    */
        public function getEntryDiscounts() {
        $tempResult = $this->sdkStdResult["entryDiscounts"];
        return $tempResult;
    }
    
    /**
     * 设置改价明细,discount值的单位为分，正数为涨价，负数为减价     
     * @param String $entryDiscounts     
     * 参数示例：<pre>[{"id":111111, "discount":-200}, {"id":222222, "discount":-500}]</pre>     
     * 此参数必填     */
    public function setEntryDiscounts( $entryDiscounts) {
        $this->sdkStdResult["entryDiscounts"] = $entryDiscounts;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>