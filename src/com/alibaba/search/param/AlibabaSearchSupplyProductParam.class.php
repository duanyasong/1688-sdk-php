<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaSearchSupplyProductParam {

        
        /**
    * @return 分页时的页数
    */
        public function getPageNum() {
        $tempResult = $this->sdkStdResult["pageNum"];
        return $tempResult;
    }
    
    /**
     * 设置分页时的页数     
     * @param Integer $pageNum     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setPageNum( $pageNum) {
        $this->sdkStdResult["pageNum"] = $pageNum;
    }
    
        
        /**
    * @return 每一页的大小
    */
        public function getPageSize() {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置每一页的大小     
     * @param Integer $pageSize     
     * 参数示例：<pre>20</pre>     
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
    
        
        /**
    * @return 卖家商品发布的时间，如果不设置则查找所有
    */
        public function getProductPublishTime() {
        $tempResult = $this->sdkStdResult["productPublishTime"];
        return $tempResult;
    }
    
    /**
     * 设置卖家商品发布的时间，如果不设置则查找所有     
     * @param Date $productPublishTime     
     * 参数示例：<pre>20180809000000000+0800</pre>     
     * 此参数必填     */
    public function setProductPublishTime( $productPublishTime) {
        $this->sdkStdResult["productPublishTime"] = $productPublishTime;
    }
    
        
        /**
    * @return 卖家用户ID
    */
        public function getSellerUserId() {
        $tempResult = $this->sdkStdResult["sellerUserId"];
        return $tempResult;
    }
    
    /**
     * 设置卖家用户ID     
     * @param Long $sellerUserId     
     * 参数示例：<pre>1624961198</pre>     
     * 此参数必填     */
    public function setSellerUserId( $sellerUserId) {
        $this->sdkStdResult["sellerUserId"] = $sellerUserId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>