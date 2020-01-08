<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProductPushTaOrderQueryServiceQueryTradeBillParam {

        
        /**
    * @return 每页显示记录数
    */
        public function getLimit() {
        $tempResult = $this->sdkStdResult["limit"];
        return $tempResult;
    }
    
    /**
     * 设置每页显示记录数     
     * @param Integer $limit     
     * 参数示例：<pre>10</pre>     
     * 此参数必填     */
    public function setLimit( $limit) {
        $this->sdkStdResult["limit"] = $limit;
    }
    
        
        /**
    * @return 当前页
    */
        public function getPageNumber() {
        $tempResult = $this->sdkStdResult["pageNumber"];
        return $tempResult;
    }
    
    /**
     * 设置当前页     
     * @param Integer $pageNumber     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setPageNumber( $pageNumber) {
        $this->sdkStdResult["pageNumber"] = $pageNumber;
    }
    
        
        /**
    * @return 标识userId用户类型,false为推客,true为卖家
    */
        public function getSeller() {
        $tempResult = $this->sdkStdResult["seller"];
        return $tempResult;
    }
    
    /**
     * 设置标识userId用户类型,false为推客,true为卖家     
     * @param Boolean $seller     
     * 参数示例：<pre>false</pre>     
     * 此参数必填     */
    public function setSeller( $seller) {
        $this->sdkStdResult["seller"] = $seller;
    }
    
        
        /**
    * @return 账单创建时间查询开始值
    */
        public function getStartTime() {
        $tempResult = $this->sdkStdResult["startTime"];
        return $tempResult;
    }
    
    /**
     * 设置账单创建时间查询开始值     
     * @param Date $startTime     
     * 参数示例：<pre>20170100000000000+0800</pre>     
     * 此参数必填     */
    public function setStartTime( $startTime) {
        $this->sdkStdResult["startTime"] = $startTime;
    }
    
        
        /**
    * @return 账单创建时间查询结束值
    */
        public function getEndTime() {
        $tempResult = $this->sdkStdResult["endTime"];
        return $tempResult;
    }
    
    /**
     * 设置账单创建时间查询结束值     
     * @param Date $endTime     
     * 参数示例：<pre>20170900000000000+0800</pre>     
     * 此参数必填     */
    public function setEndTime( $endTime) {
        $this->sdkStdResult["endTime"] = $endTime;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>