<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaDistributorFastConsignParam {

        
        /**
    * @return 需要一键代销的产品Id
    */
        public function getProductId() {
        $tempResult = $this->sdkStdResult["productId"];
        return $tempResult;
    }
    
    /**
     * 设置需要一键代销的产品Id     
     * @param Long $productId     
     * 参数示例：<pre>12345</pre>     
     * 此参数必填     */
    public function setProductId( $productId) {
        $this->sdkStdResult["productId"] = $productId;
    }
    
        
        /**
    * @return 供应商memberId
    */
        public function getSupplierMemberId() {
        $tempResult = $this->sdkStdResult["supplierMemberId"];
        return $tempResult;
    }
    
    /**
     * 设置供应商memberId     
     * @param String $supplierMemberId     
     * 参数示例：<pre>123456</pre>     
     * 此参数必填     */
    public function setSupplierMemberId( $supplierMemberId) {
        $this->sdkStdResult["supplierMemberId"] = $supplierMemberId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>