<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProductPushTaOrderQueryServiceSumWebUnionCooperationByParamParam {

        
        /**
    * @return 查询开始时间
    */
        public function getStartTime() {
        $tempResult = $this->sdkStdResult["startTime"];
        return $tempResult;
    }
    
    /**
     * 设置查询开始时间     
     * @param Date $startTime     
     * 参数示例：<pre>20180827000000000+0800</pre>     
     * 此参数必填     */
    public function setStartTime( $startTime) {
        $this->sdkStdResult["startTime"] = $startTime;
    }
    
        
        /**
    * @return 查询结束时间
    */
        public function getEndTime() {
        $tempResult = $this->sdkStdResult["endTime"];
        return $tempResult;
    }
    
    /**
     * 设置查询结束时间     
     * @param Date $endTime     
     * 参数示例：<pre>20180828000000000+0800</pre>     
     * 此参数必填     */
    public function setEndTime( $endTime) {
        $this->sdkStdResult["endTime"] = $endTime;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>