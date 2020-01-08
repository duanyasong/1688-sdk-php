<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaTaosellerVideoTaskQueryParam {

        
        /**
    * @return 发起任务时返回的taskId
    */
        public function getTaskId() {
        $tempResult = $this->sdkStdResult["taskId"];
        return $tempResult;
    }
    
    /**
     * 设置发起任务时返回的taskId     
     * @param String $taskId     
     * 参数示例：<pre>b1091c3a-7f46-402e-b548-7c6fd075f35c_genVideo_1545200943613</pre>     
     * 此参数必填     */
    public function setTaskId( $taskId) {
        $this->sdkStdResult["taskId"] = $taskId;
    }
    
        
        /**
    * @return 淘卖用户在淘宝的userId
    */
        public function getTaosellerUserId() {
        $tempResult = $this->sdkStdResult["taosellerUserId"];
        return $tempResult;
    }
    
    /**
     * 设置淘卖用户在淘宝的userId     
     * @param String $taosellerUserId     
     * 参数示例：<pre>12345678</pre>     
     * 此参数必填     */
    public function setTaosellerUserId( $taosellerUserId) {
        $this->sdkStdResult["taosellerUserId"] = $taosellerUserId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>