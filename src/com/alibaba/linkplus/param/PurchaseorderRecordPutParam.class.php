<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class PurchaseorderRecordPutParam {

        
        /**
    * @return 机构ID	
    */
        public function getOrgid() {
        $tempResult = $this->sdkStdResult["orgid"];
        return $tempResult;
    }
    
    /**
     * 设置机构ID	     
     * @param String $orgid     
     * 参数示例：<pre>ORG_000001</pre>     
     * 此参数必填     */
    public function setOrgid( $orgid) {
        $this->sdkStdResult["orgid"] = $orgid;
    }
    
        
        /**
    * @return 终端用户ID	
    */
        public function getEndUserId() {
        $tempResult = $this->sdkStdResult["endUserId"];
        return $tempResult;
    }
    
    /**
     * 设置终端用户ID	     
     * @param String $endUserId     
     * 参数示例：<pre>USER_000001</pre>     
     * 此参数必填     */
    public function setEndUserId( $endUserId) {
        $this->sdkStdResult["endUserId"] = $endUserId;
    }
    
        
        /**
    * @return 订单号
    */
        public function getOrderNo() {
        $tempResult = $this->sdkStdResult["orderNo"];
        return $tempResult;
    }
    
    /**
     * 设置订单号     
     * @param String $orderNo     
     * 参数示例：<pre>ORDER_00001</pre>     
     * 此参数必填     */
    public function setOrderNo( $orderNo) {
        $this->sdkStdResult["orderNo"] = $orderNo;
    }
    
        
        /**
    * @return 订单行号
    */
        public function getOrderLineNo() {
        $tempResult = $this->sdkStdResult["orderLineNo"];
        return $tempResult;
    }
    
    /**
     * 设置订单行号     
     * @param String $orderLineNo     
     * 参数示例：<pre>ORDER_LINE_00001</pre>     
     * 此参数必填     */
    public function setOrderLineNo( $orderLineNo) {
        $this->sdkStdResult["orderLineNo"] = $orderLineNo;
    }
    
        
        /**
    * @return 订单行价格
    */
        public function getOrderLinePrice() {
        $tempResult = $this->sdkStdResult["orderLinePrice"];
        return $tempResult;
    }
    
    /**
     * 设置订单行价格     
     * @param Double $orderLinePrice     
     * 参数示例：<pre>1999</pre>     
     * 此参数必填     */
    public function setOrderLinePrice( $orderLinePrice) {
        $this->sdkStdResult["orderLinePrice"] = $orderLinePrice;
    }
    
        
        /**
    * @return 订单总价
    */
        public function getOrderTotalPrice() {
        $tempResult = $this->sdkStdResult["orderTotalPrice"];
        return $tempResult;
    }
    
    /**
     * 设置订单总价     
     * @param Double $orderTotalPrice     
     * 参数示例：<pre>3998</pre>     
     * 此参数必填     */
    public function setOrderTotalPrice( $orderTotalPrice) {
        $this->sdkStdResult["orderTotalPrice"] = $orderTotalPrice;
    }
    
        
        /**
    * @return 产品ID
    */
        public function getProductId() {
        $tempResult = $this->sdkStdResult["productId"];
        return $tempResult;
    }
    
    /**
     * 设置产品ID     
     * @param String $productId     
     * 参数示例：<pre>PRODUCT_001</pre>     
     * 此参数必填     */
    public function setProductId( $productId) {
        $this->sdkStdResult["productId"] = $productId;
    }
    
        
        /**
    * @return 产品名称
    */
        public function getProductName() {
        $tempResult = $this->sdkStdResult["productName"];
        return $tempResult;
    }
    
    /**
     * 设置产品名称     
     * @param String $productName     
     * 参数示例：<pre>小米Note7</pre>     
     * 此参数必填     */
    public function setProductName( $productName) {
        $this->sdkStdResult["productName"] = $productName;
    }
    
        
        /**
    * @return 产品价格
    */
        public function getProductPrice() {
        $tempResult = $this->sdkStdResult["productPrice"];
        return $tempResult;
    }
    
    /**
     * 设置产品价格     
     * @param Double $productPrice     
     * 参数示例：<pre>1999</pre>     
     * 此参数必填     */
    public function setProductPrice( $productPrice) {
        $this->sdkStdResult["productPrice"] = $productPrice;
    }
    
        
        /**
    * @return 产品含税价格
    */
        public function getProductPriceWithTax() {
        $tempResult = $this->sdkStdResult["productPriceWithTax"];
        return $tempResult;
    }
    
    /**
     * 设置产品含税价格     
     * @param Double $productPriceWithTax     
     * 参数示例：<pre>2080</pre>     
     * 此参数必填     */
    public function setProductPriceWithTax( $productPriceWithTax) {
        $this->sdkStdResult["productPriceWithTax"] = $productPriceWithTax;
    }
    
        
        /**
    * @return 产品单位
    */
        public function getProductUnit() {
        $tempResult = $this->sdkStdResult["productUnit"];
        return $tempResult;
    }
    
    /**
     * 设置产品单位     
     * @param String $productUnit     
     * 参数示例：<pre>台</pre>     
     * 此参数必填     */
    public function setProductUnit( $productUnit) {
        $this->sdkStdResult["productUnit"] = $productUnit;
    }
    
        
        /**
    * @return 产品品牌
    */
        public function getProductBrand() {
        $tempResult = $this->sdkStdResult["productBrand"];
        return $tempResult;
    }
    
    /**
     * 设置产品品牌     
     * @param String $productBrand     
     * 参数示例：<pre>小米手机</pre>     
     * 此参数必填     */
    public function setProductBrand( $productBrand) {
        $this->sdkStdResult["productBrand"] = $productBrand;
    }
    
        
        /**
    * @return 产品个数
    */
        public function getProductNum() {
        $tempResult = $this->sdkStdResult["productNum"];
        return $tempResult;
    }
    
    /**
     * 设置产品个数     
     * @param Long $productNum     
     * 参数示例：<pre>2</pre>     
     * 此参数必填     */
    public function setProductNum( $productNum) {
        $this->sdkStdResult["productNum"] = $productNum;
    }
    
        
        /**
    * @return 产品规格
    */
        public function getProductSpec() {
        $tempResult = $this->sdkStdResult["productSpec"];
        return $tempResult;
    }
    
    /**
     * 设置产品规格     
     * @param String $productSpec     
     * 参数示例：<pre>无</pre>     
     * 此参数必填     */
    public function setProductSpec( $productSpec) {
        $this->sdkStdResult["productSpec"] = $productSpec;
    }
    
        
        /**
    * @return 产品型号
    */
        public function getProductModel() {
        $tempResult = $this->sdkStdResult["productModel"];
        return $tempResult;
    }
    
    /**
     * 设置产品型号     
     * @param String $productModel     
     * 参数示例：<pre>YSF-1</pre>     
     * 此参数必填     */
    public function setProductModel( $productModel) {
        $this->sdkStdResult["productModel"] = $productModel;
    }
    
        
        /**
    * @return 创建时间戳
    */
        public function getCreateTimeStamp() {
        $tempResult = $this->sdkStdResult["createTimeStamp"];
        return $tempResult;
    }
    
    /**
     * 设置创建时间戳     
     * @param Long $createTimeStamp     
     * 参数示例：<pre>17726372813</pre>     
     * 此参数必填     */
    public function setCreateTimeStamp( $createTimeStamp) {
        $this->sdkStdResult["createTimeStamp"] = $createTimeStamp;
    }
    
        
        /**
    * @return 修改时间戳
    */
        public function getModifyTimeStamp() {
        $tempResult = $this->sdkStdResult["modifyTimeStamp"];
        return $tempResult;
    }
    
    /**
     * 设置修改时间戳     
     * @param Long $modifyTimeStamp     
     * 参数示例：<pre>17726372813</pre>     
     * 此参数必填     */
    public function setModifyTimeStamp( $modifyTimeStamp) {
        $this->sdkStdResult["modifyTimeStamp"] = $modifyTimeStamp;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>