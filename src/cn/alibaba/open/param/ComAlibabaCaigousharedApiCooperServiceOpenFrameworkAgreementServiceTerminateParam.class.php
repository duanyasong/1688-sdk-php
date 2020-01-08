<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('ComAlibabaCaigousharedApiCooperServiceOpenFrameworkAgreementServiceTerminateParam/AlibabaCaigousharedApiFrameworkagreementParamOpenFrameworkAgreementTerminateParam.class.php');

class ComAlibabaCaigousharedApiCooperServiceOpenFrameworkAgreementServiceTerminateParam {

        
        /**
    * @return 1
    */
        public function getParam() {
        $tempResult = $this->sdkStdResult["param"];
        return $tempResult;
    }
    
    /**
     * 设置1     
     * @param AlibabaCaigousharedApiFrameworkagreementParamOpenFrameworkAgreementTerminateParam $param     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setParam(AlibabaCaigousharedApiFrameworkagreementParamOpenFrameworkAgreementTerminateParam $param) {
        $this->sdkStdResult["param"] = $param;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>