<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaAitoolsProductImageCropParam/AlibabaAitoolsProductProductAttribute.class.php');

class AlibabaAitoolsProductImageCropParam {

        
        /**
    * @return 识别号，使用慧眼识货资源上传 API 上传资源后，自动生成
    */
        public function getRecogniseID() {
        $tempResult = $this->sdkStdResult["recogniseID"];
        return $tempResult;
    }
    
    /**
     * 设置识别号，使用慧眼识货资源上传 API 上传资源后，自动生成     
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
    
        
        /**
    * @return 商品所属末级类目ID，比如连衣裙、T恤等
    */
        public function getCategoryID() {
        $tempResult = $this->sdkStdResult["categoryID"];
        return $tempResult;
    }
    
    /**
     * 设置商品所属末级类目ID，比如连衣裙、T恤等     
     * @param String $categoryID     
     * 参数示例：<pre>123456</pre>     
     * 此参数必填     */
    public function setCategoryID( $categoryID) {
        $this->sdkStdResult["categoryID"] = $categoryID;
    }
    
        
        /**
    * @return 商品属性列表，用于生成商品细节图中的智能描述文案，推荐使用智能属性识别 API 后的属性列表作为此参数的值
    */
        public function getAttributes() {
        $tempResult = $this->sdkStdResult["attributes"];
        return $tempResult;
    }
    
    /**
     * 设置商品属性列表，用于生成商品细节图中的智能描述文案，推荐使用智能属性识别 API 后的属性列表作为此参数的值     
     * @param array include @see AlibabaAitoolsProductProductAttribute[] $attributes     
     * 参数示例：<pre>[]</pre>     
     * 此参数必填     */
    public function setAttributes(AlibabaAitoolsProductProductAttribute $attributes) {
        $this->sdkStdResult["attributes"] = $attributes;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>