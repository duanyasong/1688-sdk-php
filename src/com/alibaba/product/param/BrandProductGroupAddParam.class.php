<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('BrandProductGroupAddParam/AlibabaChinaProductApiOpenModelOpenProductGroupModel.class.php');

class BrandProductGroupAddParam {

        
        /**
    * @return 产品组模型信息
    */
        public function getOpenProductGroupModel() {
        $tempResult = $this->sdkStdResult["openProductGroupModel"];
        return $tempResult;
    }
    
    /**
     * 设置产品组模型信息     
     * @param AlibabaChinaProductApiOpenModelOpenProductGroupModel $openProductGroupModel     
     * 参数示例：<pre>test</pre>     
     * 此参数必填     */
    public function setOpenProductGroupModel(AlibabaChinaProductApiOpenModelOpenProductGroupModel $openProductGroupModel) {
        $this->sdkStdResult["openProductGroupModel"] = $openProductGroupModel;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>