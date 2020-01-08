<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaBulksettlementOpBulkSettlementQueryReceiveNoteListParam {

        
        /**
    * @return 卖家公司名称
    */
        public function getSellerCompanyName() {
        $tempResult = $this->sdkStdResult["sellerCompanyName"];
        return $tempResult;
    }
    
    /**
     * 设置卖家公司名称     
     * @param String $sellerCompanyName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSellerCompanyName( $sellerCompanyName) {
        $this->sdkStdResult["sellerCompanyName"] = $sellerCompanyName;
    }
    
        
        /**
    * @return 搜索起始行(从第几个搜索结果开始返回,从0开始)
    */
        public function getPageSize() {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置搜索起始行(从第几个搜索结果开始返回,从0开始)     
     * @param Integer $pageSize     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
    
        
        /**
    * @return 采购公司名称
    */
        public function getPurchaseCompanyName() {
        $tempResult = $this->sdkStdResult["purchaseCompanyName"];
        return $tempResult;
    }
    
    /**
     * 设置采购公司名称     
     * @param String $purchaseCompanyName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPurchaseCompanyName( $purchaseCompanyName) {
        $this->sdkStdResult["purchaseCompanyName"] = $purchaseCompanyName;
    }
    
        
        /**
    * @return 是否正常创建
    */
        public function getIsSuccess() {
        $tempResult = $this->sdkStdResult["isSuccess"];
        return $tempResult;
    }
    
    /**
     * 设置是否正常创建     
     * @param Byte $isSuccess     
     * 参数示例：<pre>1 正常 0 不正常</pre>     
     * 此参数必填     */
    public function setIsSuccess( $isSuccess) {
        $this->sdkStdResult["isSuccess"] = $isSuccess;
    }
    
        
        /**
    * @return 收货操作者userId 子账号有自己的userId，没有自己的memberId
    */
        public function getOperatorUserId() {
        $tempResult = $this->sdkStdResult["operatorUserId"];
        return $tempResult;
    }
    
    /**
     * 设置收货操作者userId 子账号有自己的userId，没有自己的memberId     
     * @param Long $operatorUserId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOperatorUserId( $operatorUserId) {
        $this->sdkStdResult["operatorUserId"] = $operatorUserId;
    }
    
        
        /**
    * @return 收货主单状态
    */
        public function getStatusInfo() {
        $tempResult = $this->sdkStdResult["statusInfo"];
        return $tempResult;
    }
    
    /**
     * 设置收货主单状态     
     * @param String $statusInfo     
     * 参数示例：<pre>1 待发起结算 2全部已发起结算</pre>     
     * 此参数必填     */
    public function setStatusInfo( $statusInfo) {
        $this->sdkStdResult["statusInfo"] = $statusInfo;
    }
    
        
        /**
    * @return 收货开始时间
    */
        public function getReceiveStartTime() {
        $tempResult = $this->sdkStdResult["receiveStartTime"];
        return $tempResult;
    }
    
    /**
     * 设置收货开始时间     
     * @param Date $receiveStartTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setReceiveStartTime( $receiveStartTime) {
        $this->sdkStdResult["receiveStartTime"] = $receiveStartTime;
    }
    
        
        /**
    * @return 收货结束时间
    */
        public function getReceiveEndTime() {
        $tempResult = $this->sdkStdResult["receiveEndTime"];
        return $tempResult;
    }
    
    /**
     * 设置收货结束时间     
     * @param Date $receiveEndTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setReceiveEndTime( $receiveEndTime) {
        $this->sdkStdResult["receiveEndTime"] = $receiveEndTime;
    }
    
        
        /**
    * @return 页码，从1开始
    */
        public function getPageNo() {
        $tempResult = $this->sdkStdResult["pageNo"];
        return $tempResult;
    }
    
    /**
     * 设置页码，从1开始     
     * @param Integer $pageNo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPageNo( $pageNo) {
        $this->sdkStdResult["pageNo"] = $pageNo;
    }
    
        
        /**
    * @return 
    */
        public function getStartRow() {
        $tempResult = $this->sdkStdResult["startRow"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param Integer $startRow     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStartRow( $startRow) {
        $this->sdkStdResult["startRow"] = $startRow;
    }
    
        
        /**
    * @return 
    */
        public function getBuyerLoginId() {
        $tempResult = $this->sdkStdResult["buyerLoginId"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param String $buyerLoginId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerLoginId( $buyerLoginId) {
        $this->sdkStdResult["buyerLoginId"] = $buyerLoginId;
    }
    
        
        /**
    * @return 主订单ID
    */
        public function getOrderId() {
        $tempResult = $this->sdkStdResult["orderId"];
        return $tempResult;
    }
    
    /**
     * 设置主订单ID     
     * @param String $orderId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderId( $orderId) {
        $this->sdkStdResult["orderId"] = $orderId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>