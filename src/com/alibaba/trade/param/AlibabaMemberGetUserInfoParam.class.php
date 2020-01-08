<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaMemberGetUserInfoParam {

        
        /**
    * @return 店铺域名
    */
        public function getDomin() {
        $tempResult = $this->sdkStdResult["domin"];
        return $tempResult;
    }
    
    /**
     * 设置店铺域名     
     * @param String $domin     
     * 参数示例：<pre>xx.1688.com</pre>     
     * 此参数必填     */
    public function setDomin( $domin) {
        $this->sdkStdResult["domin"] = $domin;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>