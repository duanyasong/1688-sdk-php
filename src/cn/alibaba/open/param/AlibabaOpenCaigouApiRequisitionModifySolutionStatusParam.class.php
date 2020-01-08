<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaOpenCaigouApiRequisitionModifySolutionStatusParam/AlibabaCaigouBizApiCooperParamOpenModifySolutionStatusParam.class.php');

class AlibabaOpenCaigouApiRequisitionModifySolutionStatusParam {

        
        /**
    * @return 同步采购方案状态参数
    */
        public function getOpenModifySolutionStatusParam() {
        $tempResult = $this->sdkStdResult["openModifySolutionStatusParam"];
        return $tempResult;
    }
    
    /**
     * 设置同步采购方案状态参数     
     * @param AlibabaCaigouBizApiCooperParamOpenModifySolutionStatusParam $openModifySolutionStatusParam     
     * 参数示例：<pre>{    "operatorLoginId":"xiahui",    "solutionId":1111,     "status":"pass"  }</pre>     
     * 此参数必填     */
    public function setOpenModifySolutionStatusParam(AlibabaCaigouBizApiCooperParamOpenModifySolutionStatusParam $openModifySolutionStatusParam) {
        $this->sdkStdResult["openModifySolutionStatusParam"] = $openModifySolutionStatusParam;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>