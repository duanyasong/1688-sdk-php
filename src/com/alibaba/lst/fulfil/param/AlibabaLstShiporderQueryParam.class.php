<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaLstShiporderQueryParam {

        
        /**
    * @return 外部订单ID
    */
        public function getOutOrderId() {
        $tempResult = $this->sdkStdResult["outOrderId"];
        return $tempResult;
    }
    
    /**
     * 设置外部订单ID     
     * @param String $outOrderId     
     * 参数示例：<pre>121212</pre>     
     * 此参数必填     */
    public function setOutOrderId( $outOrderId) {
        $this->sdkStdResult["outOrderId"] = $outOrderId;
    }
    
        
        /**
    * @return 订单来源
    */
        public function getSource() {
        $tempResult = $this->sdkStdResult["source"];
        return $tempResult;
    }
    
    /**
     * 设置订单来源     
     * @param String $source     
     * 参数示例：<pre>LST</pre>     
     * 此参数必填     */
    public function setSource( $source) {
        $this->sdkStdResult["source"] = $source;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>