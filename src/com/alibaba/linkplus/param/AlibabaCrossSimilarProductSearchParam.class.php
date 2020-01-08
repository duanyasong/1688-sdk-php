<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCrossSimilarProductSearchParam {

        
        /**
    * @return erp内部的企业身份id
    */
        public function getOrgId() {
        $tempResult = $this->sdkStdResult["orgId"];
        return $tempResult;
    }
    
    /**
     * 设置erp内部的企业身份id     
     * @param String $orgId     
     * 参数示例：<pre>XX123</pre>     
     * 此参数必填     */
    public function setOrgId( $orgId) {
        $this->sdkStdResult["orgId"] = $orgId;
    }
    
        
        /**
    * @return erp内部的用户身份id
    */
        public function getEndUserId() {
        $tempResult = $this->sdkStdResult["endUserId"];
        return $tempResult;
    }
    
    /**
     * 设置erp内部的用户身份id     
     * @param String $endUserId     
     * 参数示例：<pre>XXX</pre>     
     * 此参数必填     */
    public function setEndUserId( $endUserId) {
        $this->sdkStdResult["endUserId"] = $endUserId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>