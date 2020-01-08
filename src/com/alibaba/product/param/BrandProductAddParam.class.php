<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('BrandProductAddParam/AlibabaChinaProductApiOpenModelOpenProductModel.class.php');

class BrandProductAddParam {

        
        /**
    * @return 产品模型
    */
        public function getOpenProductModel() {
        $tempResult = $this->sdkStdResult["openProductModel"];
        return $tempResult;
    }
    
    /**
     * 设置产品模型     
     * @param AlibabaChinaProductApiOpenModelOpenProductModel $openProductModel     
     * 参数示例：<pre>openProductModel</pre>     
     * 此参数必填     */
    public function setOpenProductModel(AlibabaChinaProductApiOpenModelOpenProductModel $openProductModel) {
        $this->sdkStdResult["openProductModel"] = $openProductModel;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>