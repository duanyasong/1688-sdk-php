<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaProductTemplateCreateParam/AlibabaProductProductAttribute.class.php');
include_once ('AlibabaProductTemplateCreateParam/AlibabaProductDescriptionMultiImageInfo.class.php');

class AlibabaProductTemplateCreateParam {

        
        /**
    * @return 商品识别ID
    */
        public function getRecogniseID() {
        $tempResult = $this->sdkStdResult["recogniseID"];
        return $tempResult;
    }
    
    /**
     * 设置商品识别ID     
     * @param String $recogniseID     
     * 参数示例：<pre>123456</pre>     
     * 此参数必填     */
    public function setRecogniseID( $recogniseID) {
        $this->sdkStdResult["recogniseID"] = $recogniseID;
    }
    
        
        /**
    * @return 商品叶子类目ID
    */
        public function getCategoryID() {
        $tempResult = $this->sdkStdResult["categoryID"];
        return $tempResult;
    }
    
    /**
     * 设置商品叶子类目ID     
     * @param String $categoryID     
     * 参数示例：<pre>123</pre>     
     * 此参数必填     */
    public function setCategoryID( $categoryID) {
        $this->sdkStdResult["categoryID"] = $categoryID;
    }
    
        
        /**
    * @return 商品完善的属性和属性值，包括规格属性
    */
        public function getAttributes() {
        $tempResult = $this->sdkStdResult["attributes"];
        return $tempResult;
    }
    
    /**
     * 设置商品完善的属性和属性值，包括规格属性     
     * @param array include @see AlibabaProductProductAttribute[] $attributes     
     * 参数示例：<pre>{}</pre>     
     * 此参数必填     */
    public function setAttributes(AlibabaProductProductAttribute $attributes) {
        $this->sdkStdResult["attributes"] = $attributes;
    }
    
        
        /**
    * @return 商品货号
    */
        public function getArticleNumber() {
        $tempResult = $this->sdkStdResult["articleNumber"];
        return $tempResult;
    }
    
    /**
     * 设置商品货号     
     * @param String $articleNumber     
     * 参数示例：<pre>20180801000123</pre>     
     * 此参数必填     */
    public function setArticleNumber( $articleNumber) {
        $this->sdkStdResult["articleNumber"] = $articleNumber;
    }
    
        
        /**
    * @return 发货地址
    */
        public function getSendGoodsAddress() {
        $tempResult = $this->sdkStdResult["sendGoodsAddress"];
        return $tempResult;
    }
    
    /**
     * 设置发货地址     
     * @param String $sendGoodsAddress     
     * 参数示例：<pre>杭州市阿里巴巴</pre>     
     * 此参数必填     */
    public function setSendGoodsAddress( $sendGoodsAddress) {
        $this->sdkStdResult["sendGoodsAddress"] = $sendGoodsAddress;
    }
    
        
        /**
    * @return 详情描述中的多图部分，比如多种颜色的展示、多个款式的展示、多个角度的展示等
    */
        public function getDescriptionMultiImageParts() {
        $tempResult = $this->sdkStdResult["descriptionMultiImageParts"];
        return $tempResult;
    }
    
    /**
     * 设置详情描述中的多图部分，比如多种颜色的展示、多个款式的展示、多个角度的展示等     
     * @param array include @see AlibabaProductDescriptionMultiImageInfo[] $descriptionMultiImageParts     
     * 参数示例：<pre>[{ "title": "多种颜色", "subTitle": "Different Colors", "images": [ { "url": "https://foo.bar.com/baz.jpg" } ] }]</pre>     
     * 此参数必填     */
    public function setDescriptionMultiImageParts(AlibabaProductDescriptionMultiImageInfo $descriptionMultiImageParts) {
        $this->sdkStdResult["descriptionMultiImageParts"] = $descriptionMultiImageParts;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>