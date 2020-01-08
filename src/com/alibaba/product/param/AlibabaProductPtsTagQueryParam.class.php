<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProductPtsTagQueryParam {

        
        /**
    * @return 产品ID
    */
        public function getOfferId() {
        $tempResult = $this->sdkStdResult["offerId"];
        return $tempResult;
    }
    
    /**
     * 设置产品ID     
     * @param Long $offerId     
     * 参数示例：<pre>592445920122</pre>     
     * 此参数必填     */
    public function setOfferId( $offerId) {
        $this->sdkStdResult["offerId"] = $offerId;
    }
    
        
        /**
    * @return 叶子类目ID
    */
        public function getSubCategoryId() {
        $tempResult = $this->sdkStdResult["subCategoryId"];
        return $tempResult;
    }
    
    /**
     * 设置叶子类目ID     
     * @param Long $subCategoryId     
     * 参数示例：<pre>1031910</pre>     
     * 此参数必填     */
    public function setSubCategoryId( $subCategoryId) {
        $this->sdkStdResult["subCategoryId"] = $subCategoryId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>