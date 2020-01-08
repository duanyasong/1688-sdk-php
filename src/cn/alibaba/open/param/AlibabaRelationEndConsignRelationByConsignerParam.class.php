<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaRelationEndConsignRelationByConsignerParam {

        
        /**
    * @return 供应商LoginId
    */
        public function getSupplierLoginId() {
        $tempResult = $this->sdkStdResult["supplierLoginId"];
        return $tempResult;
    }
    
    /**
     * 设置供应商LoginId     
     * @param String $supplierLoginId     
     * 参数示例：<pre>alitestforisv01</pre>     
     * 此参数必填     */
    public function setSupplierLoginId( $supplierLoginId) {
        $this->sdkStdResult["supplierLoginId"] = $supplierLoginId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>