<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaProductToolAddParam/AlibabaProductProductAttribute.class.php');
include_once ('AlibabaProductToolAddParam/AlibabaProductProductImageInfo.class.php');
include_once ('AlibabaProductToolAddParam/AlibabaProductProductSKUInfo.class.php');
include_once ('AlibabaProductToolAddParam/AlibabaProductProductSaleInfo.class.php');
include_once ('AlibabaProductToolAddParam/AlibabaProductProductShippingInfo.class.php');

class AlibabaProductToolAddParam {

        
        /**
    * @return 商品类型，在线批发商品(wholesale)或者询盘商品(sourcing)，1688网站缺省为wholesale
    */
        public function getProductType() {
        $tempResult = $this->sdkStdResult["productType"];
        return $tempResult;
    }
    
    /**
     * 设置商品类型，在线批发商品(wholesale)或者询盘商品(sourcing)，1688网站缺省为wholesale     
     * @param String $productType     
     * 参数示例：<pre>wholesale</pre>     
     * 此参数必填     */
    public function setProductType( $productType) {
        $this->sdkStdResult["productType"] = $productType;
    }
    
        
        /**
    * @return 类目ID，由相应类目API获取
    */
        public function getCategoryID() {
        $tempResult = $this->sdkStdResult["categoryID"];
        return $tempResult;
    }
    
    /**
     * 设置类目ID，由相应类目API获取     
     * @param Long $categoryID     
     * 参数示例：<pre>1031912</pre>     
     * 此参数必填     */
    public function setCategoryID( $categoryID) {
        $this->sdkStdResult["categoryID"] = $categoryID;
    }
    
        
        /**
    * @return 商品属性和属性值
    */
        public function getAttributes() {
        $tempResult = $this->sdkStdResult["attributes"];
        return $tempResult;
    }
    
    /**
     * 设置商品属性和属性值     
     * @param array include @see AlibabaProductProductAttribute[] $attributes     
     * 参数示例：<pre>[]</pre>     
     * 此参数必填     */
    public function setAttributes(AlibabaProductProductAttribute $attributes) {
        $this->sdkStdResult["attributes"] = $attributes;
    }
    
        
        /**
    * @return 分组ID，确定商品所属分组。1688可传入多个分组ID
    */
        public function getGroupID() {
        $tempResult = $this->sdkStdResult["groupID"];
        return $tempResult;
    }
    
    /**
     * 设置分组ID，确定商品所属分组。1688可传入多个分组ID     
     * @param array include @see Long[] $groupID     
     * 参数示例：<pre>[105630024]</pre>     
     * 此参数必填     */
    public function setGroupID( $groupID) {
        $this->sdkStdResult["groupID"] = $groupID;
    }
    
        
        /**
    * @return 商品标题，最多60个字符。标题内容将被系统切分作为关键字，因此API将不再单独提供关键字字段。
    */
        public function getSubject() {
        $tempResult = $this->sdkStdResult["subject"];
        return $tempResult;
    }
    
    /**
     * 设置商品标题，最多60个字符。标题内容将被系统切分作为关键字，因此API将不再单独提供关键字字段。     
     * @param String $subject     
     * 参数示例：<pre>可爱长颈鹿公仔睡觉抱枕小鹿玩偶布娃娃毛绒玩具</pre>     
     * 此参数必填     */
    public function setSubject( $subject) {
        $this->sdkStdResult["subject"] = $subject;
    }
    
        
        /**
    * @return 商品详情描述，可包含图片中心的图片URL
    */
        public function getDescription() {
        $tempResult = $this->sdkStdResult["description"];
        return $tempResult;
    }
    
    /**
     * 设置商品详情描述，可包含图片中心的图片URL     
     * @param String $description     
     * 参数示例：<pre>可爱长颈鹿公仔睡觉抱枕小鹿玩偶布娃娃毛绒玩具</pre>     
     * 此参数必填     */
    public function setDescription( $description) {
        $this->sdkStdResult["description"] = $description;
    }
    
        
        /**
    * @return 语种，参见FAQ 语种枚举值，1688网站默认传入CHINESE
    */
        public function getLanguage() {
        $tempResult = $this->sdkStdResult["language"];
        return $tempResult;
    }
    
    /**
     * 设置语种，参见FAQ 语种枚举值，1688网站默认传入CHINESE     
     * @param String $language     
     * 参数示例：<pre>CHINESE</pre>     
     * 此参数必填     */
    public function setLanguage( $language) {
        $this->sdkStdResult["language"] = $language;
    }
    
        
        /**
    * @return 信息有效期，按天计算
    */
        public function getPeriodOfValidity() {
        $tempResult = $this->sdkStdResult["periodOfValidity"];
        return $tempResult;
    }
    
    /**
     * 设置信息有效期，按天计算     
     * @param Integer $periodOfValidity     
     * 参数示例：<pre>365</pre>     
     * 此参数必填     */
    public function setPeriodOfValidity( $periodOfValidity) {
        $this->sdkStdResult["periodOfValidity"] = $periodOfValidity;
    }
    
        
        /**
    * @return 业务类型。1：商品，2：加工，3：代理，4：合作，5：商务服务；不传入默认按照商品发布；国际站按默认商品。
    */
        public function getBizType() {
        $tempResult = $this->sdkStdResult["bizType"];
        return $tempResult;
    }
    
    /**
     * 设置业务类型。1：商品，2：加工，3：代理，4：合作，5：商务服务；不传入默认按照商品发布；国际站按默认商品。     
     * @param Integer $bizType     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setBizType( $bizType) {
        $this->sdkStdResult["bizType"] = $bizType;
    }
    
        
        /**
    * @return 是否图片私密信息
    */
        public function getPictureAuth() {
        $tempResult = $this->sdkStdResult["pictureAuth"];
        return $tempResult;
    }
    
    /**
     * 设置是否图片私密信息     
     * @param Boolean $pictureAuth     
     * 参数示例：<pre>false</pre>     
     * 此参数必填     */
    public function setPictureAuth( $pictureAuth) {
        $this->sdkStdResult["pictureAuth"] = $pictureAuth;
    }
    
        
        /**
    * @return 商品主图
    */
        public function getImage() {
        $tempResult = $this->sdkStdResult["image"];
        return $tempResult;
    }
    
    /**
     * 设置商品主图     
     * @param AlibabaProductProductImageInfo $image     
     * 参数示例：<pre>{}</pre>     
     * 此参数必填     */
    public function setImage(AlibabaProductProductImageInfo $image) {
        $this->sdkStdResult["image"] = $image;
    }
    
        
        /**
    * @return SKU信息，这里可传入多组信息
    */
        public function getSkuInfos() {
        $tempResult = $this->sdkStdResult["skuInfos"];
        return $tempResult;
    }
    
    /**
     * 设置SKU信息，这里可传入多组信息     
     * @param array include @see AlibabaProductProductSKUInfo[] $skuInfos     
     * 参数示例：<pre>[]</pre>     
     * 此参数必填     */
    public function setSkuInfos(AlibabaProductProductSKUInfo $skuInfos) {
        $this->sdkStdResult["skuInfos"] = $skuInfos;
    }
    
        
        /**
    * @return 商品销售信息
    */
        public function getSaleInfo() {
        $tempResult = $this->sdkStdResult["saleInfo"];
        return $tempResult;
    }
    
    /**
     * 设置商品销售信息     
     * @param AlibabaProductProductSaleInfo $saleInfo     
     * 参数示例：<pre>{}</pre>     
     * 此参数必填     */
    public function setSaleInfo(AlibabaProductProductSaleInfo $saleInfo) {
        $this->sdkStdResult["saleInfo"] = $saleInfo;
    }
    
        
        /**
    * @return 商品物流信息
    */
        public function getShippingInfo() {
        $tempResult = $this->sdkStdResult["shippingInfo"];
        return $tempResult;
    }
    
    /**
     * 设置商品物流信息     
     * @param AlibabaProductProductShippingInfo $shippingInfo     
     * 参数示例：<pre>{}</pre>     
     * 此参数必填     */
    public function setShippingInfo(AlibabaProductProductShippingInfo $shippingInfo) {
        $this->sdkStdResult["shippingInfo"] = $shippingInfo;
    }
    
        
        /**
    * @return 商品识别ID，识别唯一性
    */
        public function getRecogniseID() {
        $tempResult = $this->sdkStdResult["recogniseID"];
        return $tempResult;
    }
    
    /**
     * 设置商品识别ID，识别唯一性     
     * @param String $recogniseID     
     * 参数示例：<pre>uuid</pre>     
     * 此参数必填     */
    public function setRecogniseID( $recogniseID) {
        $this->sdkStdResult["recogniseID"] = $recogniseID;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>