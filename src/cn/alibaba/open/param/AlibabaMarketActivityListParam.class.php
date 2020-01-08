<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaMarketActivityListParam/AlibabaOceanOpenplatformBizMarketParamActivityTopicParam.class.php');

class AlibabaMarketActivityListParam {

        
        /**
    * @return 请求参数
    */
        public function getArgs0() {
        $tempResult = $this->sdkStdResult["args0"];
        return $tempResult;
    }
    
    /**
     * 设置请求参数     
     * @param AlibabaOceanOpenplatformBizMarketParamActivityTopicParam $args0     
     * 参数示例：<pre>{"pageIndex":1,"pageSize":10} </pre>     
     * 此参数必填     */
    public function setArgs0(AlibabaOceanOpenplatformBizMarketParamActivityTopicParam $args0) {
        $this->sdkStdResult["args0"] = $args0;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>