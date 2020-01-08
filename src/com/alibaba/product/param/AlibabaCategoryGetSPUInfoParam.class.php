<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaCategoryGetSPUInfoParam/AlibabaCategoryFeatureAttribute.class.php');

class AlibabaCategoryGetSPUInfoParam {

        
        /**
    * @return 类目ID
    */
        public function getCategoryId() {
        $tempResult = $this->sdkStdResult["categoryId"];
        return $tempResult;
    }
    
    /**
     * 设置类目ID     
     * @param Long $categoryId     
     * 参数示例：<pre>1031910</pre>     
     * 此参数必填     */
    public function setCategoryId( $categoryId) {
        $this->sdkStdResult["categoryId"] = $categoryId;
    }
    
        
        /**
    * @return 类目的规格属性列表
    */
        public function getKeyAttrs() {
        $tempResult = $this->sdkStdResult["keyAttrs"];
        return $tempResult;
    }
    
    /**
     * 设置类目的规格属性列表     
     * @param array include @see AlibabaCategoryFeatureAttribute[] $keyAttrs     
     * 参数示例：<pre>[]</pre>     
     * 此参数必填     */
    public function setKeyAttrs(AlibabaCategoryFeatureAttribute $keyAttrs) {
        $this->sdkStdResult["keyAttrs"] = $keyAttrs;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>