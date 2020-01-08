<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('ComAlibabaProcurementBuyerSettlementServiceCreateSettlementNoteParam/AlibabaProcurementApiSettlementIntegrationParamSettleEntryModel.class.php');

class ComAlibabaProcurementBuyerSettlementServiceCreateSettlementNoteParam {

        
        /**
    * @return 结算明细
    */
        public function getEntryList() {
        $tempResult = $this->sdkStdResult["entryList"];
        return $tempResult;
    }
    
    /**
     * 设置结算明细     
     * @param array include @see AlibabaProcurementApiSettlementIntegrationParamSettleEntryModel[] $entryList     
     * 参数示例：<pre>List</pre>     
     * 此参数必填     */
    public function setEntryList(AlibabaProcurementApiSettlementIntegrationParamSettleEntryModel $entryList) {
        $this->sdkStdResult["entryList"] = $entryList;
    }
    
        
        /**
    * @return 结算场景
    */
        public function getScene() {
        $tempResult = $this->sdkStdResult["scene"];
        return $tempResult;
    }
    
    /**
     * 设置结算场景     
     * @param String $scene     
     * 参数示例：<pre>账期结算accountPeriod，非账期结算stepTrade</pre>     
     * 此参数必填     */
    public function setScene( $scene) {
        $this->sdkStdResult["scene"] = $scene;
    }
    
        
        /**
    * @return 操作人登录id
    */
        public function getOperatorLoginId() {
        $tempResult = $this->sdkStdResult["operatorLoginId"];
        return $tempResult;
    }
    
    /**
     * 设置操作人登录id     
     * @param String $operatorLoginId     
     * 参数示例：<pre>dongyl3333:alitest</pre>     
     * 此参数必填     */
    public function setOperatorLoginId( $operatorLoginId) {
        $this->sdkStdResult["operatorLoginId"] = $operatorLoginId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>