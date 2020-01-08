<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaOpenCaigouApiRequisitionModifyBiddingStatusParam/AlibabaCaigouBizApiCooperParamOpenModifyBiddingStatusParam.class.php');

class AlibabaOpenCaigouApiRequisitionModifyBiddingStatusParam {

        
        /**
    * @return 修改招标单状态参数
    */
        public function getOpenModifyBiddingStatusParam() {
        $tempResult = $this->sdkStdResult["openModifyBiddingStatusParam"];
        return $tempResult;
    }
    
    /**
     * 设置修改招标单状态参数     
     * @param AlibabaCaigouBizApiCooperParamOpenModifyBiddingStatusParam $openModifyBiddingStatusParam     
     * 参数示例：<pre>null</pre>     
     * 此参数必填     */
    public function setOpenModifyBiddingStatusParam(AlibabaCaigouBizApiCooperParamOpenModifyBiddingStatusParam $openModifyBiddingStatusParam) {
        $this->sdkStdResult["openModifyBiddingStatusParam"] = $openModifyBiddingStatusParam;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>