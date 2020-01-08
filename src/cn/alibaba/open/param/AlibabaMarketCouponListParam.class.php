<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaMarketCouponListParam/AlibabaOceanOpenplatformBizMarketParamBizCouponActivityParam.class.php');

class AlibabaMarketCouponListParam {

        
        /**
    * @return 请求参数
    */
        public function getParam() {
        $tempResult = $this->sdkStdResult["param"];
        return $tempResult;
    }
    
    /**
     * 设置请求参数     
     * @param AlibabaOceanOpenplatformBizMarketParamBizCouponActivityParam $param     
     * 参数示例：<pre>{}</pre>     
     * 此参数必填     */
    public function setParam(AlibabaOceanOpenplatformBizMarketParamBizCouponActivityParam $param) {
        $this->sdkStdResult["param"] = $param;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>