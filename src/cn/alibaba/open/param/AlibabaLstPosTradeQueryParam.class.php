<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaLstPosTradeQueryParam {

        
        /**
    * @return 交易的订单id
    */
        public function getOrderId() {
        $tempResult = $this->sdkStdResult["orderId"];
        return $tempResult;
    }
    
    /**
     * 设置交易的订单id     
     * @param String $orderId     
     * 参数示例：<pre>123456</pre>     
     * 此参数必填     */
    public function setOrderId( $orderId) {
        $this->sdkStdResult["orderId"] = $orderId;
    }
    
        
        /**
    * @return 查询结果中包含的域，GuaranteesTerms：保障条款，NativeLogistics：物流信息，RateDetail：评价详情，OrderInvoice：发票信息。默认返回GuaranteesTerms、NativeLogistics、OrderInvoice
    */
        public function getIncludeFields() {
        $tempResult = $this->sdkStdResult["includeFields"];
        return $tempResult;
    }
    
    /**
     * 设置查询结果中包含的域，GuaranteesTerms：保障条款，NativeLogistics：物流信息，RateDetail：评价详情，OrderInvoice：发票信息。默认返回GuaranteesTerms、NativeLogistics、OrderInvoice     
     * @param String $includeFields     
     * 参数示例：<pre>GuaranteesTerms,NativeLogistics,RateDetail,OrderInvoice</pre>     
     * 此参数必填     */
    public function setIncludeFields( $includeFields) {
        $this->sdkStdResult["includeFields"] = $includeFields;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>