<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('ComAlibabaCaigouBizApiCooperServiceOpenRequisitionServiceCreateMallRequisitionParam/AlibabaCaigouBizApiCooperParamOpenCreateRequisitionParam.class.php');

class ComAlibabaCaigouBizApiCooperServiceOpenRequisitionServiceCreateMallRequisitionParam {

        
        /**
    * @return 参考文档
    */
        public function getOpenCreateRequisitionParam() {
        $tempResult = $this->sdkStdResult["openCreateRequisitionParam"];
        return $tempResult;
    }
    
    /**
     * 设置参考文档     
     * @param AlibabaCaigouBizApiCooperParamOpenCreateRequisitionParam $openCreateRequisitionParam     
     * 参数示例：<pre>参考文档</pre>     
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