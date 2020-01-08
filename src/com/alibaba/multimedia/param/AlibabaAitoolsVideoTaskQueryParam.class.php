<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaAitoolsVideoTaskQueryParam {

        
        /**
    * @return 异步任务Id
    */
        public function getTaskId() {
        $tempResult = $this->sdkStdResult["taskId"];
        return $tempResult;
    }
    
    /**
     * 设置异步任务Id     
     * @param String $taskId     
     * 参数示例：<pre>xxqdw-xx-xxx-xxfe</pre>     
     * 此参数必填     */
    public function setTaskId( $taskId) {
        $this->sdkStdResult["taskId"] = $taskId;
    }
    
        
        /**
    * @return 视频标题
    */
        public function getFileName() {
        $tempResult = $this->sdkStdResult["fileName"];
        return $tempResult;
    }
    
    /**
     * 设置视频标题     
     * @param String $fileName     
     * 参数示例：<pre>T恤</pre>     
     * 此参数必填     */
    public function setFileName( $fileName) {
        $this->sdkStdResult["fileName"] = $fileName;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>