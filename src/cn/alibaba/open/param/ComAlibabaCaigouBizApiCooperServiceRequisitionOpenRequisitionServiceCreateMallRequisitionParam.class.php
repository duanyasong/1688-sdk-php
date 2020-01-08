<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('ComAlibabaCaigouBizApiCooperServiceRequisitionOpenRequisitionServiceCreateMallRequisitionParam/AlibabaCaigouBizApiCooperParamOpenCreateRequisitionParam.class.php');

class ComAlibabaCaigouBizApiCooperServiceRequisitionOpenRequisitionServiceCreateMallRequisitionParam {

        
        /**
    * @return 入参
    */
        public function getOpenCreateRequisitionParam() {
        $tempResult = $this->sdkStdResult["openCreateRequisitionParam"];
        return $tempResult;
    }
    
    /**
     * 设置入参     
     * @param AlibabaCaigouBizApiCooperParamOpenCreateRequisitionParam $openCreateRequisitionParam     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setOpenCreateRequisitionParam(AlibabaCaigouBizApiCooperParamOpenCreateRequisitionParam $openCreateRequisitionParam) {
        $this->sdkStdResult["openCreateRequisitionParam"] = $openCreateRequisitionParam;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>