<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ComAlibabaTradeTradeFlowServiceStopReceiveGoodsParam {

        
        /**
    * @return 操作角色
    */
        public function getOperatorRole() {
        $tempResult = $this->sdkStdResult["operatorRole"];
        return $tempResult;
    }
    
    /**
     * 设置操作角色     
     * @param String $operatorRole     
     * 参数示例：<pre>BUYER</pre>     
     * 此参数必填     */
    public function setOperatorRole( $operatorRole) {
        $this->sdkStdResult["operatorRole"] = $operatorRole;
    }
    
        
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
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setOrderId( $orderId) {
        $this->sdkStdResult["orderId"] = $orderId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>