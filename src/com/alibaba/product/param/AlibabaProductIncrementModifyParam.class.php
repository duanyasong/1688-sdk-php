<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaProductIncrementModifyParam/AlibabaProductProductImageInfo.class.php');

class AlibabaProductIncrementModifyParam {

        
        /**
    * @return 商品ID
    */
        public function getProductID() {
        $tempResult = $this->sdkStdResult["productID"];
        return $tempResult;
    }
    
    /**
     * 设置商品ID     
     * @param Long $productID     
     * 参数示例：<pre>575779850479</pre>     
     * 此参数必填     */
    public function setProductID( $productID) {
        $this->sdkStdResult["productID"] = $productID;
    }
    
        
        /**
    * @return 商品标题，如果不传递或者传递空字符串则不作任何处理
    */
        public function getSubject() {
        $tempResult = $this->sdkStdResult["subject"];
        return $tempResult;
    }
    
    /**
     * 设置商品标题，如果不传递或者传递空字符串则不作任何处理     
     * @param String $subject     
     * 参数示例：<pre>HQ-韩国女孩充电器手机贴纸装饰</pre>     
     * 此参数必填     */
    public function setSubject( $subject) {
        $this->sdkStdResult["subject"] = $subject;
    }
    
        
        /**
    * @return 商品描述，如果不传递或者传递空字符串则不作任何处理.
    */
        public function getDescription() {
        $tempResult = $this->sdkStdResult["description"];
        return $tempResult;
    }
    
    /**
     * 设置商品描述，如果不传递或者传递空字符串则不作任何处理.     
     * @param String $description     
     * 参数示例：<pre>测试增量修改</pre>     
     * 此参数必填     */
    public function setDescription( $description) {
        $this->sdkStdResult["description"] = $description;
    }
    
        
        /**
    * @return 商品图片，如果不传递或者传递空字符串则不作任何处理请注意，如果ISV需要修改image字段，那么subject和description必须至少传入其一
    */
        public function getImage() {
        $tempResult = $this->sdkStdResult["image"];
        return $tempResult;
    }
    
    /**
     * 设置商品图片，如果不传递或者传递空字符串则不作任何处理请注意，如果ISV需要修改image字段，那么subject和description必须至少传入其一     
     * @param AlibabaProductProductImageInfo $image     
     * 参数示例：<pre>{}</pre>     
     * 此参数必填     */
    public function setImage(AlibabaProductProductImageInfo $image) {
        $this->sdkStdResult["image"] = $image;
    }
    
        
        /**
    * @return 1688或者alibaba
    */
        public function getWebSite() {
        $tempResult = $this->sdkStdResult["webSite"];
        return $tempResult;
    }
    
    /**
     * 设置1688或者alibaba     
     * @param String $webSite     
     * 参数示例：<pre>1688</pre>     
     * 此参数必填     */
    public function setWebSite( $webSite) {
        $this->sdkStdResult["webSite"] = $webSite;
    }
    
        
        /**
    * @return 是否允许在线交易
    */
        public function getSupportOnlineTrade() {
        $tempResult = $this->sdkStdResult["supportOnlineTrade"];
        return $tempResult;
    }
    
    /**
     * 设置是否允许在线交易     
     * @param Boolean $supportOnlineTrade     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setSupportOnlineTrade( $supportOnlineTrade) {
        $this->sdkStdResult["supportOnlineTrade"] = $supportOnlineTrade;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>