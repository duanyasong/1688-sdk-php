<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaProductPushMicroSupplySyncPushProductResultParam/AlibabaProductPushMicroSupplyPuHuoModel.class.php');

class AlibabaProductPushMicroSupplySyncPushProductResultParam {

        
        /**
    * @return 商品级别的铺货结果
    */
        public function getPushProductResults() {
        $tempResult = $this->sdkStdResult["pushProductResults"];
        return $tempResult;
    }
    
    /**
     * 设置商品级别的铺货结果     
     * @param array include @see AlibabaProductPushMicroSupplyPuHuoModel[] $pushProductResults     
     * 参数示例：<pre>{}</pre>     
     * 此参数必填     */
    public function setPushProductResults(AlibabaProductPushMicroSupplyPuHuoModel $pushProductResults) {
        $this->sdkStdResult["pushProductResults"] = $pushProductResults;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>