<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaCaigouDictionaryUpdateFactoryParam/AlibabaCaigouCoopapiDictionaryParamUpdateFactoryParam.class.php');

class AlibabaCaigouDictionaryUpdateFactoryParam {

        
        /**
    * @return 更新工厂参数
    */
        public function getUpdateFactoryParam() {
        $tempResult = $this->sdkStdResult["updateFactoryParam"];
        return $tempResult;
    }
    
    /**
     * 设置更新工厂参数     
     * @param AlibabaCaigouCoopapiDictionaryParamUpdateFactoryParam $updateFactoryParam     
     * 参数示例：<pre>{"code":"100101","name":"二工厂"}</pre>     
     * 此参数必填     */
    public function setUpdateFactoryParam(AlibabaCaigouCoopapiDictionaryParamUpdateFactoryParam $updateFactoryParam) {
        $this->sdkStdResult["updateFactoryParam"] = $updateFactoryParam;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>