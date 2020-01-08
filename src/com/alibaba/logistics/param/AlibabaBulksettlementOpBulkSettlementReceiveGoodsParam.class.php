<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaBulksettlementOpBulkSettlementReceiveGoodsParam/AlibabaBulksettlementOpBulkSettlementSubOrderInfo.class.php');
include_once ('AlibabaBulksettlementOpBulkSettlementReceiveGoodsParam/AlibabaBulksettlementOpBulkSettlementRefundInfo.class.php');

class AlibabaBulksettlementOpBulkSettlementReceiveGoodsParam {

        
        /**
    * @return 子订单号和子订单确认收货数量（包括历史确认收货数量）
    */
        public function getReceivedQuantity() {
        $tempResult = $this->sdkStdResult["receivedQuantity"];
        return $tempResult;
    }
    
    /**
     * 设置子订单号和子订单确认收货数量（包括历史确认收货数量）     
     * @param array include @see AlibabaBulksettlementOpBulkSettlementSubOrderInfo[] $receivedQuantity     
     * 参数示例：<pre>-</pre>     
     * 此参数必填     */
    public function setReceivedQuantity(AlibabaBulksettlementOpBulkSettlementSubOrderInfo $receivedQuantity) {
        $this->sdkStdResult["receivedQuantity"] = $receivedQuantity;
    }
    
        
        /**
    * @return 退款单号，子订单号及退款但中商品数量
    */
        public function getRefundIdReceivedQuantity() {
        $tempResult = $this->sdkStdResult["refundIdReceivedQuantity"];
        return $tempResult;
    }
    
    /**
     * 设置退款单号，子订单号及退款但中商品数量     
     * @param array include @see AlibabaBulksettlementOpBulkSettlementRefundInfo[] $refundIdReceivedQuantity     
     * 参数示例：<pre>-</pre>     
     * 此参数必填     */
    public function setRefundIdReceivedQuantity(AlibabaBulksettlementOpBulkSettlementRefundInfo $refundIdReceivedQuantity) {
        $this->sdkStdResult["refundIdReceivedQuantity"] = $refundIdReceivedQuantity;
    }
    
        
        /**
    * @return 订单id
    */
        public function getOrderId() {
        $tempResult = $this->sdkStdResult["orderId"];
        return $tempResult;
    }
    
    /**
     * 设置订单id     
     * @param Long $orderId     
     * 参数示例：<pre>-</pre>     
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
     * 参数示例：<pre>-</pre>     
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