<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaLstPosTradeSendParam {

        
        /**
    * @return 订单ID
    */
        public function getOrderId() {
        $tempResult = $this->sdkStdResult["orderId"];
        return $tempResult;
    }
    
    /**
     * 设置订单ID     
     * @param String $orderId     
     * 参数示例：<pre>123456</pre>     
     * 此参数必填     */
    public function setOrderId( $orderId) {
        $this->sdkStdResult["orderId"] = $orderId;
    }
    
        
        /**
    * @return 订单明细ID, 多个明细请用英文逗号分隔
    */
        public function getOrderEntryIds() {
        $tempResult = $this->sdkStdResult["orderEntryIds"];
        return $tempResult;
    }
    
    /**
     * 设置订单明细ID, 多个明细请用英文逗号分隔     
     * @param String $orderEntryIds     
     * 参数示例：<pre>123456,123457</pre>     
     * 此参数必填     */
    public function setOrderEntryIds( $orderEntryIds) {
        $this->sdkStdResult["orderEntryIds"] = $orderEntryIds;
    }
    
        
        /**
    * @return 发货时间
    */
        public function getGmtSystemSend() {
        $tempResult = $this->sdkStdResult["gmtSystemSend"];
        return $tempResult;
    }
    
    /**
     * 设置发货时间     
     * @param String $gmtSystemSend     
     * 参数示例：<pre>2012-04-13 09:38:00</pre>     
     * 此参数必填     */
    public function setGmtSystemSend( $gmtSystemSend) {
        $this->sdkStdResult["gmtSystemSend"] = $gmtSystemSend;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>