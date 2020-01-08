<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaCaigouProcurementOrderCreateProcurementOrderParam/AlibabaProcurementApiIntegrationParamIntegrationCreateOrderParam.class.php');

class AlibabaCaigouProcurementOrderCreateProcurementOrderParam {

        
        /**
    * @return 创建订单参数
    */
        public function getCreateOrderParam() {
        $tempResult = $this->sdkStdResult["createOrderParam"];
        return $tempResult;
    }
    
    /**
     * 设置创建订单参数     
     * @param AlibabaProcurementApiIntegrationParamIntegrationCreateOrderParam $createOrderParam     
     * 参数示例：<pre>  </pre>     
     * 此参数必填     */
    public function setCreateOrderParam(AlibabaProcurementApiIntegrationParamIntegrationCreateOrderParam $createOrderParam) {
        $this->sdkStdResult["createOrderParam"] = $createOrderParam;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>