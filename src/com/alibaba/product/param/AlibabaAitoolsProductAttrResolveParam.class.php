<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaAitoolsProductAttrResolveParam {

        
        /**
    * @return 资源上传后生成的识别号
    */
        public function getRecogniseID() {
        $tempResult = $this->sdkStdResult["recogniseID"];
        return $tempResult;
    }
    
    /**
     * 设置资源上传后生成的识别号     
     * @param String $recogniseID     
     * 参数示例：<pre>xxxxxxxxx-xxx</pre>     
     * 此参数必填     */
    public function setRecogniseID( $recogniseID) {
        $this->sdkStdResult["recogniseID"] = $recogniseID;
    }
    
        
        /**
    * @return 一级类目ID
    */
        public function getRootCategoryID() {
        $tempResult = $this->sdkStdResult["rootCategoryID"];
        return $tempResult;
    }
    
    /**
     * 设置一级类目ID     
     * @param String $rootCategoryID     
     * 参数示例：<pre>10166</pre>     
     * 此参数必填     */
    public function setRootCategoryID( $rootCategoryID) {
        $this->sdkStdResult["rootCategoryID"] = $rootCategoryID;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>