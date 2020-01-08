<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaMarketCouponApplyParam/AlibabaOceanOpenplatformBizMarketParamBizCouponApplyParam.class.php');

class AlibabaMarketCouponApplyParam {

        
        /**
    * @return 请求参数
    */
        public function getParam() {
        $tempResult = $this->sdkStdResult["param"];
        return $tempResult;
    }
    
    /**
     * 设置请求参数     
     * @param AlibabaOceanOpenplatformBizMarketParamBizCouponApplyParam $param     
     * 参数示例：<pre>{"couponId":1982666518,"couponType":8,"sellerId":2248564064,"uuid":"b05eb2190e0340bcb838bb131d4c9fbf"}</pre>     
     * 此参数必填     */
    public function setParam(AlibabaOceanOpenplatformBizMarketParamBizCouponApplyParam $param) {
        $this->sdkStdResult["param"] = $param;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>