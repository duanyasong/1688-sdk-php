<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaPreOrderGetListParam {

        
        /**
    * @return 预订单ID
    */
        public function getOrderId() {
        $tempResult = $this->sdkStdResult["orderId"];
        return $tempResult;
    }
    
    /**
     * 设置预订单ID     
     * @param Long $orderId     
     * 参数示例：<pre>21579698640</pre>     
     * 此参数必填     */
    public function setOrderId( $orderId) {
        $this->sdkStdResult["orderId"] = $orderId;
    }
    
        
        /**
    * @return 每页数量，最大20
    */
        public function getPageSize() {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置每页数量，最大20     
     * @param Long $pageSize     
     * 参数示例：<pre>10</pre>     
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
    
        
        /**
    * @return 页码
    */
        public function getPageIndex() {
        $tempResult = $this->sdkStdResult["pageIndex"];
        return $tempResult;
    }
    
    /**
     * 设置页码     
     * @param Long $pageIndex     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setPageIndex( $pageIndex) {
        $this->sdkStdResult["pageIndex"] = $pageIndex;
    }
    
        
        /**
    * @return 专业市场，枚举dxc：大象城，hqb：华强北
    */
        public function getMarketName() {
        $tempResult = $this->sdkStdResult["marketName"];
        return $tempResult;
    }
    
    /**
     * 设置专业市场，枚举dxc：大象城，hqb：华强北     
     * @param String $marketName     
     * 参数示例：<pre> </pre>     
     * 此参数必填     */
    public function setMarketName( $marketName) {
        $this->sdkStdResult["marketName"] = $marketName;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>