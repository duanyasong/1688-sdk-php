<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaAppPieceorderGetParam {

        
        /**
    * @return 第几页 （用于分页）
    */
        public function getStartIndex() {
        $tempResult = $this->sdkStdResult["startIndex"];
        return $tempResult;
    }
    
    /**
     * 设置第几页 （用于分页）     
     * @param Integer $startIndex     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStartIndex( $startIndex) {
        $this->sdkStdResult["startIndex"] = $startIndex;
    }
    
        
        /**
    * @return 下单时间
    */
        public function getGmtCreate() {
        $tempResult = $this->sdkStdResult["gmtCreate"];
        return $tempResult;
    }
    
    /**
     * 设置下单时间     
     * @param Date $gmtCreate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtCreate( $gmtCreate) {
        $this->sdkStdResult["gmtCreate"] = $gmtCreate;
    }
    
        
        /**
    * @return 买家的aliId
    */
        public function getAliId() {
        $tempResult = $this->sdkStdResult["aliId"];
        return $tempResult;
    }
    
    /**
     * 设置买家的aliId     
     * @param Long $aliId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAliId( $aliId) {
        $this->sdkStdResult["aliId"] = $aliId;
    }
    
        
        /**
    * @return 每页大小（用于分页）
限制：小于等于50
    */
        public function getPageSize() {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置每页大小（用于分页）
限制：小于等于50     
     * @param Integer $pageSize     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
    
        
        /**
    * @return 订单服务状态列表
B:服务前，S:服务中，P：挂起，E：关闭，C:作废
    */
        public function getBizStatusList() {
        $tempResult = $this->sdkStdResult["bizStatusList"];
        return $tempResult;
    }
    
    /**
     * 设置订单服务状态列表
B:服务前，S:服务中，P：挂起，E：关闭，C:作废     
     * @param array include @see String[] $bizStatusList     
     * 参数示例：<pre>["S","E"]</pre>     
     * 此参数必填     */
    public function setBizStatusList( $bizStatusList) {
        $this->sdkStdResult["bizStatusList"] = $bizStatusList;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>