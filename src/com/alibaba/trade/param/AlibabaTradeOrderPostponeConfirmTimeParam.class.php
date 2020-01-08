<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaTradeOrderPostponeConfirmTimeParam {

        
        /**
    * @return 订单ID
    */
        public function getOrderId() {
        $tempResult = $this->sdkStdResult["orderId"];
        return $tempResult;
    }
    
    /**
     * 设置订单ID     
     * @param Long $orderId     
     * 参数示例：<pre>198263322216969811</pre>     
     * 此参数必填     */
    public function setOrderId( $orderId) {
        $this->sdkStdResult["orderId"] = $orderId;
    }
    
        
        /**
    * @return 子支付单号，如果传递，该值必须是真实的subPayOrderId
    */
        public function getSubPayOrderId() {
        $tempResult = $this->sdkStdResult["subPayOrderId"];
        return $tempResult;
    }
    
    /**
     * 设置子支付单号，如果传递，该值必须是真实的subPayOrderId     
     * @param Long $subPayOrderId     
     * 参数示例：<pre>1357925445454</pre>     
     * 此参数必填     */
    public function setSubPayOrderId( $subPayOrderId) {
        $this->sdkStdResult["subPayOrderId"] = $subPayOrderId;
    }
    
        
        /**
    * @return 延迟时间（天）
    */
        public function getDelayedDays() {
        $tempResult = $this->sdkStdResult["delayedDays"];
        return $tempResult;
    }
    
    /**
     * 设置延迟时间（天）     
     * @param Integer $delayedDays     
     * 参数示例：<pre>7</pre>     
     * 此参数必填     */
    public function setDelayedDays( $delayedDays) {
        $this->sdkStdResult["delayedDays"] = $delayedDays;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>