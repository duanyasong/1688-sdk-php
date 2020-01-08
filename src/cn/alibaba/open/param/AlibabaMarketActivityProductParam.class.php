<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaMarketActivityProductParam/AlibabaOceanOpenplatformBizMarketParamActivityProductsParam.class.php');

class AlibabaMarketActivityProductParam {

        
        /**
    * @return 请求参数
    */
        public function getArgs0() {
        $tempResult = $this->sdkStdResult["args0"];
        return $tempResult;
    }
    
    /**
     * 设置请求参数     
     * @param AlibabaOceanOpenplatformBizMarketParamActivityProductsParam $args0     
     * 参数示例：<pre>{}</pre>     
     * 此参数必填     */
    public function setArgs0(AlibabaOceanOpenplatformBizMarketParamActivityProductsParam $args0) {
        $this->sdkStdResult["args0"] = $args0;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>