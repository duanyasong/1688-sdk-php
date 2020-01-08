<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ComAlibabaProcurementBuyerSettlementServiceCancelSettlementNoteParam {

        
        /**
    * @return 采购结算单ID
    */
        public function getSettlementNoteId() {
        $tempResult = $this->sdkStdResult["settlementNoteId"];
        return $tempResult;
    }
    
    /**
     * 设置采购结算单ID     
     * @param Long $settlementNoteId     
     * 参数示例：<pre>201582581541</pre>     
     * 此参数必填     */
    public function setSettlementNoteId( $settlementNoteId) {
        $this->sdkStdResult["settlementNoteId"] = $settlementNoteId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>