<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class TestHsfServiceParam {

        
        /**
    * @return appKey
    */
        public function getAppKey() {
        $tempResult = $this->sdkStdResult["appKey"];
        return $tempResult;
    }
    
    /**
     * 设置appKey     
     * @param Integer $appKey     
     * 参数示例：<pre>66666</pre>     
     * 此参数必填     */
    public function setAppKey( $appKey) {
        $this->sdkStdResult["appKey"] = $appKey;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>