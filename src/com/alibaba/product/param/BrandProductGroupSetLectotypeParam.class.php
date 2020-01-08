<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('BrandProductGroupSetLectotypeParam/AlibabaChinaProductApiOpenModelOpenPropertyModel.class.php');

class BrandProductGroupSetLectotypeParam {

        
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
    
        
        /**
    * @return 参数类型 0-通过1688属性ID， 1-通过1688属性名称 2-通过外部属性ID
    */
        public function getParamType() {
        $tempResult = $this->sdkStdResult["paramType"];
        return $tempResult;
    }
    
    /**
     * 设置参数类型 0-通过1688属性ID， 1-通过1688属性名称 2-通过外部属性ID     
     * @param Integer $paramType     
     * 参数示例：<pre>0</pre>     
     * 此参数必填     */
    public function setParamType( $paramType) {
        $this->sdkStdResult["paramType"] = $paramType;
    }
    
        
        /**
    * @return 选型属性信息
    */
        public function getProperties() {
        $tempResult = $this->sdkStdResult["properties"];
        return $tempResult;
    }
    
    /**
     * 设置选型属性信息     
     * @param array include @see AlibabaChinaProductApiOpenModelOpenPropertyModel[] $properties     
     * 参数示例：<pre>properties</pre>     
     * 此参数必填     */
    public function setProperties(AlibabaChinaProductApiOpenModelOpenPropertyModel $properties) {
        $this->sdkStdResult["properties"] = $properties;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>