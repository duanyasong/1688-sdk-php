<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaMobileWinportGetParam {

        
        /**
    * @return 1688登录名
    */
        public function getLoginId() {
        $tempResult = $this->sdkStdResult["loginId"];
        return $tempResult;
    }
    
    /**
     * 设置1688登录名     
     * @param String $loginId     
     * 参数示例：<pre>test1234</pre>     
     * 此参数必填     */
    public function setLoginId( $loginId) {
        $this->sdkStdResult["loginId"] = $loginId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>