<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaAitoolsProductRemoveModel3DParam {

        
        /**
    * @return 1688 商品 ID
    */
        public function getProductID() {
        $tempResult = $this->sdkStdResult["productID"];
        return $tempResult;
    }
    
    /**
     * 设置1688 商品 ID     
     * @param String $productID     
     * 参数示例：<pre>123</pre>     
     * 此参数必填     */
    public function setProductID( $productID) {
        $this->sdkStdResult["productID"] = $productID;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>