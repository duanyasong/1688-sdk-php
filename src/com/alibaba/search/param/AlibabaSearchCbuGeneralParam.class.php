<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaSearchCbuGeneralParam {

        
        /**
    * @return 商品卖家的业务类型：
5 企业单位,6 个体经营,7 事业单位或社会团体,8 未人经工商注册
    */
        public function getBizType() {
        $tempResult = $this->sdkStdResult["bizType"];
        return $tempResult;
    }
    
    /**
     * 设置商品卖家的业务类型：
5 企业单位,6 个体经营,7 事业单位或社会团体,8 未人经工商注册     
     * @param Integer $bizType     
     * 参数示例：<pre>5</pre>     
     * 此参数必填     */
    public function setBizType( $bizType) {
        $this->sdkStdResult["bizType"] = $bizType;
    }
    
        
        /**
    * @return 商品的类目ID
    */
        public function getCategory() {
        $tempResult = $this->sdkStdResult["category"];
        return $tempResult;
    }
    
    /**
     * 设置商品的类目ID     
     * @param Long $category     
     * 参数示例：<pre>13579</pre>     
     * 此参数必填     */
    public function setCategory( $category) {
        $this->sdkStdResult["category"] = $category;
    }
    
        
        /**
    * @return 商品的发货城市
    */
        public function getCity() {
        $tempResult = $this->sdkStdResult["city"];
        return $tempResult;
    }
    
    /**
     * 设置商品的发货城市     
     * @param String $city     
     * 参数示例：<pre>杭州市</pre>     
     * 此参数必填     */
    public function setCity( $city) {
        $this->sdkStdResult["city"] = $city;
    }
    
        
        /**
    * @return 排序值
    */
        public function getDescendOrder() {
        $tempResult = $this->sdkStdResult["descendOrder"];
        return $tempResult;
    }
    
    /**
     * 设置排序值     
     * @param String $descendOrder     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setDescendOrder( $descendOrder) {
        $this->sdkStdResult["descendOrder"] = $descendOrder;
    }
    
        
        /**
    * @return 商品的修改开始时间
    */
        public function getGmtModifiedBegin() {
        $tempResult = $this->sdkStdResult["gmtModifiedBegin"];
        return $tempResult;
    }
    
    /**
     * 设置商品的修改开始时间     
     * @param Date $gmtModifiedBegin     
     * 参数示例：<pre>123213</pre>     
     * 此参数必填     */
    public function setGmtModifiedBegin( $gmtModifiedBegin) {
        $this->sdkStdResult["gmtModifiedBegin"] = $gmtModifiedBegin;
    }
    
        
        /**
    * @return 商品的修改结束时间
    */
        public function getGmtModifiedEnd() {
        $tempResult = $this->sdkStdResult["gmtModifiedEnd"];
        return $tempResult;
    }
    
    /**
     * 设置商品的修改结束时间     
     * @param Date $gmtModifiedEnd     
     * 参数示例：<pre>12312</pre>     
     * 此参数必填     */
    public function setGmtModifiedEnd( $gmtModifiedEnd) {
        $this->sdkStdResult["gmtModifiedEnd"] = $gmtModifiedEnd;
    }
    
        
        /**
    * @return 分页的开始页数，1代表第一页
    */
        public function getPageNo() {
        $tempResult = $this->sdkStdResult["pageNo"];
        return $tempResult;
    }
    
    /**
     * 设置分页的开始页数，1代表第一页     
     * @param Integer $pageNo     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setPageNo( $pageNo) {
        $this->sdkStdResult["pageNo"] = $pageNo;
    }
    
        
        /**
    * @return 搜索价格最小值
    */
        public function getPriceStart() {
        $tempResult = $this->sdkStdResult["priceStart"];
        return $tempResult;
    }
    
    /**
     * 设置搜索价格最小值     
     * @param Double $priceStart     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setPriceStart( $priceStart) {
        $this->sdkStdResult["priceStart"] = $priceStart;
    }
    
        
        /**
    * @return 搜索价格最大值
    */
        public function getPriceEnd() {
        $tempResult = $this->sdkStdResult["priceEnd"];
        return $tempResult;
    }
    
    /**
     * 设置搜索价格最大值     
     * @param Double $priceEnd     
     * 参数示例：<pre>10</pre>     
     * 此参数必填     */
    public function setPriceEnd( $priceEnd) {
        $this->sdkStdResult["priceEnd"] = $priceEnd;
    }
    
        
        /**
    * @return 商品的发货省
    */
        public function getProvince() {
        $tempResult = $this->sdkStdResult["province"];
        return $tempResult;
    }
    
    /**
     * 设置商品的发货省     
     * @param String $province     
     * 参数示例：<pre>浙江省</pre>     
     * 此参数必填     */
    public function setProvince( $province) {
        $this->sdkStdResult["province"] = $province;
    }
    
        
        /**
    * @return 商品的搜索关键字，通常是商品的标题
    */
        public function getQ() {
        $tempResult = $this->sdkStdResult["q"];
        return $tempResult;
    }
    
    /**
     * 设置商品的搜索关键字，通常是商品的标题     
     * @param String $q     
     * 参数示例：<pre>test</pre>     
     * 此参数必填     */
    public function setQ( $q) {
        $this->sdkStdResult["q"] = $q;
    }
    
        
        /**
    * @return 商品的最小起批量
    */
        public function getQuantityMin() {
        $tempResult = $this->sdkStdResult["quantityMin"];
        return $tempResult;
    }
    
    /**
     * 设置商品的最小起批量     
     * @param Integer $quantityMin     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setQuantityMin( $quantityMin) {
        $this->sdkStdResult["quantityMin"] = $quantityMin;
    }
    
        
        /**
    * @return 包换保障，目前支持7天包换(qtbh)和15天包换(swtbh)
    */
        public function getReplaceEnsure() {
        $tempResult = $this->sdkStdResult["replaceEnsure"];
        return $tempResult;
    }
    
    /**
     * 设置包换保障，目前支持7天包换(qtbh)和15天包换(swtbh)     
     * @param String $replaceEnsure     
     * 参数示例：<pre>swtbh</pre>     
     * 此参数必填     */
    public function setReplaceEnsure( $replaceEnsure) {
        $this->sdkStdResult["replaceEnsure"] = $replaceEnsure;
    }
    
        
        /**
    * @return 卖家是否在线
    */
        public function getSellerOnline() {
        $tempResult = $this->sdkStdResult["sellerOnline"];
        return $tempResult;
    }
    
    /**
     * 设置卖家是否在线     
     * @param String $sellerOnline     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setSellerOnline( $sellerOnline) {
        $this->sdkStdResult["sellerOnline"] = $sellerOnline;
    }
    
        
        /**
    * @return 发货保障，目前仅支持48小时发货条件查询
    */
        public function getSendGoodsEnsure() {
        $tempResult = $this->sdkStdResult["sendGoodsEnsure"];
        return $tempResult;
    }
    
    /**
     * 设置发货保障，目前仅支持48小时发货条件查询     
     * @param String $sendGoodsEnsure     
     * 参数示例：<pre>48</pre>     
     * 此参数必填     */
    public function setSendGoodsEnsure( $sendGoodsEnsure) {
        $this->sdkStdResult["sendGoodsEnsure"] = $sendGoodsEnsure;
    }
    
        
        /**
    * @return 排序类型，以价格排序price，成交量排序booked
    */
        public function getSortType() {
        $tempResult = $this->sdkStdResult["sortType"];
        return $tempResult;
    }
    
    /**
     * 设置排序类型，以价格排序price，成交量排序booked     
     * @param String $sortType     
     * 参数示例：<pre>price</pre>     
     * 此参数必填     */
    public function setSortType( $sortType) {
        $this->sdkStdResult["sortType"] = $sortType;
    }
    
        
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
     * 参数示例：<pre>123123123</pre>     
     * 此参数必填     */
    public function setProductId( $productId) {
        $this->sdkStdResult["productId"] = $productId;
    }
    
        
        /**
    * @return 商品ID列表
    */
        public function getProductIds() {
        $tempResult = $this->sdkStdResult["productIds"];
        return $tempResult;
    }
    
    /**
     * 设置商品ID列表     
     * @param array include @see Long[] $productIds     
     * 参数示例：<pre>[123123,123123,1234334]</pre>     
     * 此参数必填     */
    public function setProductIds( $productIds) {
        $this->sdkStdResult["productIds"] = $productIds;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>