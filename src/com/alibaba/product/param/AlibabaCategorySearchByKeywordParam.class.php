<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCategorySearchByKeywordParam {

        
        /**
    * @return 叶子类目关键字
    */
        public function getKeyword() {
        $tempResult = $this->sdkStdResult["keyword"];
        return $tempResult;
    }
    
    /**
     * 设置叶子类目关键字     
     * @param String $keyword     
     * 参数示例：<pre>帽子</pre>     
     * 此参数必填     */
    public function setKeyword( $keyword) {
        $this->sdkStdResult["keyword"] = $keyword;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>