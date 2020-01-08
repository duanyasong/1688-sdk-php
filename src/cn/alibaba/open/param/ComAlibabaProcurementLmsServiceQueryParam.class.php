<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ComAlibabaProcurementLmsServiceQueryParam {

        
        /**
    * @return 物流单id
    */
        public function getId() {
        $tempResult = $this->sdkStdResult["id"];
        return $tempResult;
    }
    
    /**
     * 设置物流单id     
     * @param String $id     
     * 参数示例：<pre>125321</pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->sdkStdResult["id"] = $id;
    }
    
        
        /**
    * @return 供应商id
    */
        public function getMemberId() {
        $tempResult = $this->sdkStdResult["memberId"];
        return $tempResult;
    }
    
    /**
     * 设置供应商id     
     * @param String $memberId     
     * 参数示例：<pre>b2b-12413143113</pre>     
     * 此参数必填     */
    public function setMemberId( $memberId) {
        $this->sdkStdResult["memberId"] = $memberId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>