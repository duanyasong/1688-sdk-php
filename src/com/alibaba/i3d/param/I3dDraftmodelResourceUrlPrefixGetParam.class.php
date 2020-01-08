<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class I3dDraftmodelResourceUrlPrefixGetParam {

        
        /**
    * @return 模型code
    */
        public function getCode() {
        $tempResult = $this->sdkStdResult["code"];
        return $tempResult;
    }
    
    /**
     * 设置模型code     
     * @param String $code     
     * 参数示例：<pre>d7d3827a_10063eabd3311e254240000n</pre>     
     * 此参数必填     */
    public function setCode( $code) {
        $this->sdkStdResult["code"] = $code;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>