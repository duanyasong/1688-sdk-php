<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigouQueryLmsParam {

        
        /**
    * @return dsaf
    */
        public function getId() {
        $tempResult = $this->sdkStdResult["id"];
        return $tempResult;
    }
    
    /**
     * 设置dsaf     
     * @param String $id     
     * 参数示例：<pre>312313</pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->sdkStdResult["id"] = $id;
    }
    
        
        /**
    * @return dada
    */
        public function getMemberId() {
        $tempResult = $this->sdkStdResult["memberId"];
        return $tempResult;
    }
    
    /**
     * 设置dada     
     * @param String $memberId     
     * 参数示例：<pre>b2b-1231</pre>     
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