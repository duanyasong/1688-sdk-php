<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaLstShiporderCancelParam {

        
        /**
    * @return 外部订单
    */
        public function getOutOrderId() {
        $tempResult = $this->sdkStdResult["outOrderId"];
        return $tempResult;
    }
    
    /**
     * 设置外部订单     
     * @param String $outOrderId     
     * 参数示例：<pre>121212</pre>     
     * 此参数必填     */
    public function setOutOrderId( $outOrderId) {
        $this->sdkStdResult["outOrderId"] = $outOrderId;
    }
    
        
        /**
    * @return 原因
    */
        public function getReason() {
        $tempResult = $this->sdkStdResult["reason"];
        return $tempResult;
    }
    
    /**
     * 设置原因     
     * @param String $reason     
     * 参数示例：<pre>aaa</pre>     
     * 此参数必填     */
    public function setReason( $reason) {
        $this->sdkStdResult["reason"] = $reason;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>