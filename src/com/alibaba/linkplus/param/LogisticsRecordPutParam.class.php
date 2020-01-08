<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class LogisticsRecordPutParam {

        
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
    * @return 终端用户Id
    */
        public function getEndUserId() {
        $tempResult = $this->sdkStdResult["endUserId"];
        return $tempResult;
    }
    
    /**
     * 设置终端用户Id     
     * @param String $endUserId     
     * 参数示例：<pre>USER_000001</pre>     
     * 此参数必填     */
    public function setEndUserId( $endUserId) {
        $this->sdkStdResult["endUserId"] = $endUserId;
    }
    
        
        /**
    * @return 发货地
    */
        public function getFromAddress() {
        $tempResult = $this->sdkStdResult["fromAddress"];
        return $tempResult;
    }
    
    /**
     * 设置发货地     
     * @param String $fromAddress     
     * 参数示例：<pre>浙江杭州余杭区</pre>     
     * 此参数必填     */
    public function setFromAddress( $fromAddress) {
        $this->sdkStdResult["fromAddress"] = $fromAddress;
    }
    
        
        /**
    * @return 收货地
    */
        public function getToAddress() {
        $tempResult = $this->sdkStdResult["toAddress"];
        return $tempResult;
    }
    
    /**
     * 设置收货地     
     * @param String $toAddress     
     * 参数示例：<pre>广东番禺</pre>     
     * 此参数必填     */
    public function setToAddress( $toAddress) {
        $this->sdkStdResult["toAddress"] = $toAddress;
    }
    
        
        /**
    * @return 物流公司
    */
        public function getLogisticsCorp() {
        $tempResult = $this->sdkStdResult["logisticsCorp"];
        return $tempResult;
    }
    
    /**
     * 设置物流公司     
     * @param String $logisticsCorp     
     * 参数示例：<pre>百世快递</pre>     
     * 此参数必填     */
    public function setLogisticsCorp( $logisticsCorp) {
        $this->sdkStdResult["logisticsCorp"] = $logisticsCorp;
    }
    
        
        /**
    * @return 物流单号
    */
        public function getLogisticsOrderId() {
        $tempResult = $this->sdkStdResult["logisticsOrderId"];
        return $tempResult;
    }
    
    /**
     * 设置物流单号     
     * @param String $logisticsOrderId     
     * 参数示例：<pre>LOGISTICS_001</pre>     
     * 此参数必填     */
    public function setLogisticsOrderId( $logisticsOrderId) {
        $this->sdkStdResult["logisticsOrderId"] = $logisticsOrderId;
    }
    
        
        /**
    * @return 订单
    */
        public function getOrderIds() {
        $tempResult = $this->sdkStdResult["orderIds"];
        return $tempResult;
    }
    
    /**
     * 设置订单     
     * @param String $orderIds     
     * 参数示例：<pre>012313,123914</pre>     
     * 此参数必填     */
    public function setOrderIds( $orderIds) {
        $this->sdkStdResult["orderIds"] = $orderIds;
    }
    
        
        /**
    * @return 操作时间
    */
        public function getOperateTimeStamp() {
        $tempResult = $this->sdkStdResult["operateTimeStamp"];
        return $tempResult;
    }
    
    /**
     * 设置操作时间     
     * @param Long $operateTimeStamp     
     * 参数示例：<pre>17726372813</pre>     
     * 此参数必填     */
    public function setOperateTimeStamp( $operateTimeStamp) {
        $this->sdkStdResult["operateTimeStamp"] = $operateTimeStamp;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>