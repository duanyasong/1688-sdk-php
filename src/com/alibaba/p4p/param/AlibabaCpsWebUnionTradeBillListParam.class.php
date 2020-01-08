<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCpsWebUnionTradeBillListParam {

        
        /**
    * @return 网盟appKey
    */
        public function getWebUnionKey() {
        $tempResult = $this->sdkStdResult["webUnionKey"];
        return $tempResult;
    }
    
    /**
     * 设置网盟appKey     
     * @param String $webUnionKey     
     * 参数示例：<pre>000</pre>     
     * 此参数必填     */
    public function setWebUnionKey( $webUnionKey) {
        $this->sdkStdResult["webUnionKey"] = $webUnionKey;
    }
    
        
        /**
    * @return 订单状态查询类型
    */
        public function getQueryOrderType() {
        $tempResult = $this->sdkStdResult["queryOrderType"];
        return $tempResult;
    }
    
    /**
     * 设置订单状态查询类型     
     * @param String $queryOrderType     
     * 参数示例：<pre>全部订单:orderAll
订单结算:orderSettle
 订单付款:orderPay</pre>     
     * 此参数必填     */
    public function setQueryOrderType( $queryOrderType) {
        $this->sdkStdResult["queryOrderType"] = $queryOrderType;
    }
    
        
        /**
    * @return 订单时间查询类型
    */
        public function getQueryTimeType() {
        $tempResult = $this->sdkStdResult["queryTimeType"];
        return $tempResult;
    }
    
    /**
     * 设置订单时间查询类型     
     * @param String $queryTimeType     
     * 参数示例：<pre>*1.0 订单创建时间查询类型:gmtCreateTime(订单创建)
* 1.1 订单成功时间查询类型:confirmTime(订单成功)
     * 1.2 订单结算时间查询类型:settleTime(订单结算)
     * 2.1 维权创建时间查询类型:rightsStartTime
     * 2.2 维权完成时间查询类型:rightsEndTime
     * 3   订单结算时间查询类型:settleTime</pre>     
     * 此参数必填     */
    public function setQueryTimeType( $queryTimeType) {
        $this->sdkStdResult["queryTimeType"] = $queryTimeType;
    }
    
        
        /**
    * @return 查询开始时间
    */
        public function getQueryStartTime() {
        $tempResult = $this->sdkStdResult["queryStartTime"];
        return $tempResult;
    }
    
    /**
     * 设置查询开始时间     
     * @param String $queryStartTime     
     * 参数示例：<pre>2017-12-01</pre>     
     * 此参数必填     */
    public function setQueryStartTime( $queryStartTime) {
        $this->sdkStdResult["queryStartTime"] = $queryStartTime;
    }
    
        
        /**
    * @return 查询结束时间
    */
        public function getQueryEndTime() {
        $tempResult = $this->sdkStdResult["queryEndTime"];
        return $tempResult;
    }
    
    /**
     * 设置查询结束时间     
     * @param String $queryEndTime     
     * 参数示例：<pre>2017-12-31</pre>     
     * 此参数必填     */
    public function setQueryEndTime( $queryEndTime) {
        $this->sdkStdResult["queryEndTime"] = $queryEndTime;
    }
    
        
        /**
    * @return 订单状态
    */
        public function getOrderState() {
        $tempResult = $this->sdkStdResult["orderState"];
        return $tempResult;
    }
    
    /**
     * 设置订单状态     
     * @param Integer $orderState     
     * 参数示例：<pre>订单创建10;已付款20;交易成功50;交易关闭80</pre>     
     * 此参数必填     */
    public function setOrderState( $orderState) {
        $this->sdkStdResult["orderState"] = $orderState;
    }
    
        
        /**
    * @return 结算状态
    */
        public function getSettleState() {
        $tempResult = $this->sdkStdResult["settleState"];
        return $tempResult;
    }
    
    /**
     * 设置结算状态     
     * @param Integer $settleState     
     * 参数示例：<pre>1结算成功状态;2结算失败状态</pre>     
     * 此参数必填     */
    public function setSettleState( $settleState) {
        $this->sdkStdResult["settleState"] = $settleState;
    }
    
        
        /**
    * @return 维权状态
    */
        public function getRightsState() {
        $tempResult = $this->sdkStdResult["rightsState"];
        return $tempResult;
    }
    
    /**
     * 设置维权状态     
     * @param Integer $rightsState     
     * 参数示例：<pre>10维权中;30维权成功;40退款关闭</pre>     
     * 此参数必填     */
    public function setRightsState( $rightsState) {
        $this->sdkStdResult["rightsState"] = $rightsState;
    }
    
        
        /**
    * @return 页偏移量
    */
        public function getPageNo() {
        $tempResult = $this->sdkStdResult["pageNo"];
        return $tempResult;
    }
    
    /**
     * 设置页偏移量     
     * @param Integer $pageNo     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setPageNo( $pageNo) {
        $this->sdkStdResult["pageNo"] = $pageNo;
    }
    
        
        /**
    * @return 页大小
    */
        public function getPageSize() {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置页大小     
     * @param Integer $pageSize     
     * 参数示例：<pre>100</pre>     
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>