<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaProductPropertyEditParam/AlibabaProductProductAttributeParam.class.php');

class AlibabaProductPropertyEditParam {

        
        /**
    * @return 商品ID
    */
        public function getProductId() {
        $tempResult = $this->sdkStdResult["productId"];
        return $tempResult;
    }
    
    /**
     * 设置商品ID     
     * @param Long $productId     
     * 参数示例：<pre>122122233</pre>     
     * 此参数必填     */
    public function setProductId( $productId) {
        $this->sdkStdResult["productId"] = $productId;
    }
    
        
        /**
    * @return 商品产品属性列表
    */
        public function getAttributes() {
        $tempResult = $this->sdkStdResult["attributes"];
        return $tempResult;
    }
    
    /**
     * 设置商品产品属性列表     
     * @param array include @see AlibabaProductProductAttributeParam[] $attributes     
     * 参数示例：<pre>[]</pre>     
     * 此参数必填     */
    public function setAttributes(AlibabaProductProductAttributeParam $attributes) {
        $this->sdkStdResult["attributes"] = $attributes;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>