<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaProductTemplateCreateStdParam/AlibabaProductProductAttribute.class.php');
include_once ('AlibabaProductTemplateCreateStdParam/AlibabaProductDescriptionMultiImageInfo.class.php');

class AlibabaProductTemplateCreateStdParam {

        
        /**
    * @return 慧眼识货通过图片识别属性后生成的识别ID
    */
        public function getRecogniseID() {
        $tempResult = $this->sdkStdResult["recogniseID"];
        return $tempResult;
    }
    
    /**
     * 设置慧眼识货通过图片识别属性后生成的识别ID     
     * @param String $recogniseID     
     * 参数示例：<pre>123</pre>     
     * 此参数必填     */
    public function setRecogniseID( $recogniseID) {
        $this->sdkStdResult["recogniseID"] = $recogniseID;
    }
    
        
        /**
    * @return 慧眼识货通过图片识别出的子类目ID
    */
        public function getCategoryID() {
        $tempResult = $this->sdkStdResult["categoryID"];
        return $tempResult;
    }
    
    /**
     * 设置慧眼识货通过图片识别出的子类目ID     
     * @param String $categoryID     
     * 参数示例：<pre>123</pre>     
     * 此参数必填     */
    public function setCategoryID( $categoryID) {
        $this->sdkStdResult["categoryID"] = $categoryID;
    }
    
        
        /**
    * @return 慧眼识货通过图片识别出的属性列表
    */
        public function getAttributes() {
        $tempResult = $this->sdkStdResult["attributes"];
        return $tempResult;
    }
    
    /**
     * 设置慧眼识货通过图片识别出的属性列表     
     * @param array include @see AlibabaProductProductAttribute[] $attributes     
     * 参数示例：<pre>[]</pre>     
     * 此参数必填     */
    public function setAttributes(AlibabaProductProductAttribute $attributes) {
        $this->sdkStdResult["attributes"] = $attributes;
    }
    
        
        /**
    * @return 货号，非必填
    */
        public function getArticleNumber() {
        $tempResult = $this->sdkStdResult["articleNumber"];
        return $tempResult;
    }
    
    /**
     * 设置货号，非必填     
     * @param String $articleNumber     
     * 参数示例：<pre>123</pre>     
     * 此参数必填     */
    public function setArticleNumber( $articleNumber) {
        $this->sdkStdResult["articleNumber"] = $articleNumber;
    }
    
        
        /**
    * @return 发货地址，非必填
    */
        public function getSendGoodsAddress() {
        $tempResult = $this->sdkStdResult["sendGoodsAddress"];
        return $tempResult;
    }
    
    /**
     * 设置发货地址，非必填     
     * @param String $sendGoodsAddress     
     * 参数示例：<pre>杭州市阿里巴巴</pre>     
     * 此参数必填     */
    public function setSendGoodsAddress( $sendGoodsAddress) {
        $this->sdkStdResult["sendGoodsAddress"] = $sendGoodsAddress;
    }
    
        
        /**
    * @return 指定详情描述模板ID，如果为空，将使用默认样式渲染详情描述
    */
        public function getDescriptionTemplateId() {
        $tempResult = $this->sdkStdResult["descriptionTemplateId"];
        return $tempResult;
    }
    
    /**
     * 设置指定详情描述模板ID，如果为空，将使用默认样式渲染详情描述     
     * @param String $descriptionTemplateId     
     * 参数示例：<pre>tmpl0000001</pre>     
     * 此参数必填     */
    public function setDescriptionTemplateId( $descriptionTemplateId) {
        $this->sdkStdResult["descriptionTemplateId"] = $descriptionTemplateId;
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