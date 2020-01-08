<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaProductPushMicroSupplySyncUserPlatformParam/AlibabaProductPushMicroSupplyShopModel.class.php');

class AlibabaProductPushMicroSupplySyncUserPlatformParam {

        
        /**
    * @return 
    */
        public function getUserPlatformDetails() {
        $tempResult = $this->sdkStdResult["userPlatformDetails"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param AlibabaProductPushMicroSupplyShopModel $userPlatformDetails     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setUserPlatformDetails(AlibabaProductPushMicroSupplyShopModel $userPlatformDetails) {
        $this->sdkStdResult["userPlatformDetails"] = $userPlatformDetails;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>