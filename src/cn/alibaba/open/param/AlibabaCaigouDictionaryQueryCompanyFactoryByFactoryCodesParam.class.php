<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCaigouDictionaryQueryCompanyFactoryByFactoryCodesParam {

        
        /**
    * @return 工厂编码列表
    */
        public function getFactoryCodes() {
        $tempResult = $this->sdkStdResult["factoryCodes"];
        return $tempResult;
    }
    
    /**
     * 设置工厂编码列表     
     * @param array include @see String[] $factoryCodes     
     * 参数示例：<pre>["wh_fct_1","fa_003"]</pre>     
     * 此参数必填     */
    public function setFactoryCodes( $factoryCodes) {
        $this->sdkStdResult["factoryCodes"] = $factoryCodes;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>