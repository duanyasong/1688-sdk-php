<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ComAlibabaProcurementApiIntegrationServicePoSupplierIntegrationServiceParam {

        
        /**
    * @return 订单id
    */
        public function getProcurementOrderId() {
        $tempResult = $this->sdkStdResult["procurementOrderId"];
        return $tempResult;
    }
    
    /**
     * 设置订单id     
     * @param Long $procurementOrderId     
     * 参数示例：<pre>123</pre>     
     * 此参数必填     */
    public function setProcurementOrderId( $procurementOrderId) {
        $this->sdkStdResult["procurementOrderId"] = $procurementOrderId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>