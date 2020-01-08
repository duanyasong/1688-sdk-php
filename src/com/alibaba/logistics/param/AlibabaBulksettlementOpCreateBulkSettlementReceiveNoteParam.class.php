<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaBulksettlementOpCreateBulkSettlementReceiveNoteParam/AlibabaBulksettlementOpBulkSettlementSubOrderInfo.class.php');

class AlibabaBulksettlementOpCreateBulkSettlementReceiveNoteParam {

        
        /**
    * @return 子订单号和子订单确认收货数量（包括历史确认收货数量）和单价
    */
        public function getReceivedQuantity() {
        $tempResult = $this->sdkStdResult["receivedQuantity"];
        return $tempResult;
    }
    
    /**
     * 设置子订单号和子订单确认收货数量（包括历史确认收货数量）和单价     
     * @param array include @see AlibabaBulksettlementOpBulkSettlementSubOrderInfo[] $receivedQuantity     
     * 参数示例：<pre>null</pre>     
     * 此参数必填     */
    public function setReceivedQuantity(AlibabaBulksettlementOpBulkSettlementSubOrderInfo $receivedQuantity) {
        $this->sdkStdResult["receivedQuantity"] = $receivedQuantity;
    }
    
        
        /**
    * @return 订单号
    */
        public function getOrderId() {
        $tempResult = $this->sdkStdResult["orderId"];
        return $tempResult;
    }
    
    /**
     * 设置订单号     
     * @param Long $orderId     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setOrderId( $orderId) {
        $this->sdkStdResult["orderId"] = $orderId;
    }
    
        
        /**
    * @return 子账号的loginId
    */
        public function getSubUserLoginId() {
        $tempResult = $this->sdkStdResult["subUserLoginId"];
        return $tempResult;
    }
    
    /**
     * 设置子账号的loginId     
     * @param String $subUserLoginId     
     * 参数示例：<pre>asd</pre>     
     * 此参数必填     */
    public function setSubUserLoginId( $subUserLoginId) {
        $this->sdkStdResult["subUserLoginId"] = $subUserLoginId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>