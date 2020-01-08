<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaGlobalAddressLevelDivisionParam {

        
        /**
    * @return 需要查询的地区ID
    */
        public function getAreaId() {
        $tempResult = $this->sdkStdResult["areaId"];
        return $tempResult;
    }
    
    /**
     * 设置需要查询的地区ID     
     * @param Long $areaId     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setAreaId( $areaId) {
        $this->sdkStdResult["areaId"] = $areaId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>