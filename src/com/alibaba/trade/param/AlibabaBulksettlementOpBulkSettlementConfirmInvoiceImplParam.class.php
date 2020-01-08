<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaBulksettlementOpBulkSettlementConfirmInvoiceImplParam {

        
        /**
    * @return 结算单Id
    */
        public function getSettlemnetId() {
        $tempResult = $this->sdkStdResult["settlemnetId"];
        return $tempResult;
    }
    
    /**
     * 设置结算单Id     
     * @param Long $settlemnetId     
     * 参数示例：<pre>151454</pre>     
     * 此参数必填     */
    public function setSettlemnetId( $settlemnetId) {
        $this->sdkStdResult["settlemnetId"] = $settlemnetId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>