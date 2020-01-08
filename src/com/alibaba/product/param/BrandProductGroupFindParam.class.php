<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class BrandProductGroupFindParam {

        
        /**
    * @return 产品组ID
    */
        public function getProductGroupId() {
        $tempResult = $this->sdkStdResult["productGroupId"];
        return $tempResult;
    }
    
    /**
     * 设置产品组ID     
     * @param Long $productGroupId     
     * 参数示例：<pre>2012</pre>     
     * 此参数必填     */
    public function setProductGroupId( $productGroupId) {
        $this->sdkStdResult["productGroupId"] = $productGroupId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>