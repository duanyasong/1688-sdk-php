<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaAitoolsGet3DModelMetaParam {

        
        /**
    * @return 识别ID
    */
        public function getRecognizeID() {
        $tempResult = $this->sdkStdResult["recognizeID"];
        return $tempResult;
    }
    
    /**
     * 设置识别ID     
     * @param String $recognizeID     
     * 参数示例：<pre>xxx-xxxx</pre>     
     * 此参数必填     */
    public function setRecognizeID( $recognizeID) {
        $this->sdkStdResult["recognizeID"] = $recognizeID;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>