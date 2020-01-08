<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaAppAgentorderGetParam {

        
        /**
    * @return 权益状态，S：服务中，B：服务前，E：权益关闭
    */
        public function getBizStatusList() {
        $tempResult = $this->sdkStdResult["bizStatusList"];
        return $tempResult;
    }
    
    /**
     * 设置权益状态，S：服务中，B：服务前，E：权益关闭     
     * @param array include @see String[] $bizStatusList     
     * 参数示例：<pre>["S"]</pre>     
     * 此参数必填     */
    public function setBizStatusList( $bizStatusList) {
        $this->sdkStdResult["bizStatusList"] = $bizStatusList;
    }
    
        
        /**
    * @return 开始页，从1开始。
    */
        public function getStartIndex() {
        $tempResult = $this->sdkStdResult["startIndex"];
        return $tempResult;
    }
    
    /**
     * 设置开始页，从1开始。     
     * @param Integer $startIndex     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setStartIndex( $startIndex) {
        $this->sdkStdResult["startIndex"] = $startIndex;
    }
    
        
        /**
    * @return 查询一页数据量大小，最大20
    */
        public function getPageSize() {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置查询一页数据量大小，最大20     
     * @param Integer $pageSize     
     * 参数示例：<pre>20</pre>     
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
    
        
        /**
    * @return 服务创建时间，仅为排序用
    */
        public function getGmtCreate() {
        $tempResult = $this->sdkStdResult["gmtCreate"];
        return $tempResult;
    }
    
    /**
     * 设置服务创建时间，仅为排序用     
     * @param Date $gmtCreate     
     * 参数示例：<pre>1545729708000</pre>     
     * 此参数必填     */
    public function setGmtCreate( $gmtCreate) {
        $this->sdkStdResult["gmtCreate"] = $gmtCreate;
    }
    
        
        /**
    * @return 服务的使用人的loginId
    */
        public function getBuyerLoginId() {
        $tempResult = $this->sdkStdResult["buyerLoginId"];
        return $tempResult;
    }
    
    /**
     * 设置服务的使用人的loginId     
     * @param String $buyerLoginId     
     * 参数示例：<pre>alitestforisv01</pre>     
     * 此参数必填     */
    public function setBuyerLoginId( $buyerLoginId) {
        $this->sdkStdResult["buyerLoginId"] = $buyerLoginId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>