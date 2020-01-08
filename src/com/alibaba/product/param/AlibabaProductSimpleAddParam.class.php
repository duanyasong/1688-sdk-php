<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProductSimpleAddParam {

        
        /**
    * @return offer标题
    */
        public function getSubject() {
        $tempResult = $this->sdkStdResult["subject"];
        return $tempResult;
    }
    
    /**
     * 设置offer标题     
     * @param String $subject     
     * 参数示例：<pre>测试简单商品</pre>     
     * 此参数必填     */
    public function setSubject( $subject) {
        $this->sdkStdResult["subject"] = $subject;
    }
    
        
        /**
    * @return offer的类目ID
    */
        public function getCategoryId() {
        $tempResult = $this->sdkStdResult["categoryId"];
        return $tempResult;
    }
    
    /**
     * 设置offer的类目ID     
     * @param Long $categoryId     
     * 参数示例：<pre>126552002</pre>     
     * 此参数必填     */
    public function setCategoryId( $categoryId) {
        $this->sdkStdResult["categoryId"] = $categoryId;
    }
    
        
        /**
    * @return 主图信息
    */
        public function getImages() {
        $tempResult = $this->sdkStdResult["images"];
        return $tempResult;
    }
    
    /**
     * 设置主图信息     
     * @param array include @see String[] $images     
     * 参数示例：<pre>["img/ibank/2018/891/043/9246340198_1660977857.jpg","img/ibank/2018/767/613/9246316767_1660977857.jpg","img/ibank/2018/603/271/9265172306_1660977857.jpg","img/ibank/2018/381/343/9246343183_1660977857.jpg","img/ibank/2018/552/733/9246337255_1660977857.jpg" ]</pre>     
     * 此参数必填     */
    public function setImages( $images) {
        $this->sdkStdResult["images"] = $images;
    }
    
        
        /**
    * @return offer描述
    */
        public function getDescription() {
        $tempResult = $this->sdkStdResult["description"];
        return $tempResult;
    }
    
    /**
     * 设置offer描述     
     * @param String $description     
     * 参数示例：<pre>测试简单商品</pre>     
     * 此参数必填     */
    public function setDescription( $description) {
        $this->sdkStdResult["description"] = $description;
    }
    
        
        /**
    * @return 库存总数
    */
        public function getTradeAmount() {
        $tempResult = $this->sdkStdResult["tradeAmount"];
        return $tempResult;
    }
    
    /**
     * 设置库存总数     
     * @param Long $tradeAmount     
     * 参数示例：<pre>1000</pre>     
     * 此参数必填     */
    public function setTradeAmount( $tradeAmount) {
        $this->sdkStdResult["tradeAmount"] = $tradeAmount;
    }
    
        
        /**
    * @return 建议零售价
    */
        public function getTradeRetailPrice() {
        $tempResult = $this->sdkStdResult["tradeRetailPrice"];
        return $tempResult;
    }
    
    /**
     * 设置建议零售价     
     * @param String $tradeRetailPrice     
     * 参数示例：<pre>100</pre>     
     * 此参数必填     */
    public function setTradeRetailPrice( $tradeRetailPrice) {
        $this->sdkStdResult["tradeRetailPrice"] = $tradeRetailPrice;
    }
    
        
        /**
    * @return 售卖价格
    */
        public function getPrice() {
        $tempResult = $this->sdkStdResult["price"];
        return $tempResult;
    }
    
    /**
     * 设置售卖价格     
     * @param Double $price     
     * 参数示例：<pre>100.00</pre>     
     * 此参数必填     */
    public function setPrice( $price) {
        $this->sdkStdResult["price"] = $price;
    }
    
        
        /**
    * @return 是否支持在线交易，只有开通旺铺后才能发布可在线交易商品
    */
        public function getSupportOnlineTrade() {
        $tempResult = $this->sdkStdResult["supportOnlineTrade"];
        return $tempResult;
    }
    
    /**
     * 设置是否支持在线交易，只有开通旺铺后才能发布可在线交易商品     
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