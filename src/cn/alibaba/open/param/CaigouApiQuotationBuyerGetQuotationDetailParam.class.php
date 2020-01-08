<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigouApiQuotationBuyerGetQuotationDetailParam {

        
        /**
    * @return 报价单ID
    */
        public function getQuotationId() {
        $tempResult = $this->sdkStdResult["quotationId"];
        return $tempResult;
    }
    
    /**
     * 设置报价单ID     
     * @param Long $quotationId     
     * 参数示例：<pre>123456</pre>     
     * 此参数必填     */
    public function setQuotationId( $quotationId) {
        $this->sdkStdResult["quotationId"] = $quotationId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>