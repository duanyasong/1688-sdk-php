<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('ComAlibabaCaigouBizApiCooperServiceOpenRequisitionServiceParam/AlibabaCaigouBizApiCooperParamOpenCreateRequisitionParam.class.php');

class ComAlibabaCaigouBizApiCooperServiceOpenRequisitionServiceParam {

        
        /**
    * @return 创建请购单参数模型
    */
        public function getOpenCreateRequisitionParam() {
        $tempResult = $this->sdkStdResult["openCreateRequisitionParam"];
        return $tempResult;
    }
    
    /**
     * 设置创建请购单参数模型     
     * @param AlibabaCaigouBizApiCooperParamOpenCreateRequisitionParam $openCreateRequisitionParam     
     * 参数示例：<pre>new A()</pre>     
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