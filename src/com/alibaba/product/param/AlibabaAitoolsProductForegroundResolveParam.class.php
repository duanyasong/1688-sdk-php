<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaAitoolsProductForegroundResolveParam {

        
        /**
    * @return 识别号。由识别资源上传 API 生成，使用主图作为识别对象。
    */
        public function getRecogniseID() {
        $tempResult = $this->sdkStdResult["recogniseID"];
        return $tempResult;
    }
    
    /**
     * 设置识别号。由识别资源上传 API 生成，使用主图作为识别对象。     
     * @param String $recogniseID     
     * 参数示例：<pre>xxxxxxxxxx-123</pre>     
     * 此参数必填     */
    public function setRecogniseID( $recogniseID) {
        $this->sdkStdResult["recogniseID"] = $recogniseID;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>