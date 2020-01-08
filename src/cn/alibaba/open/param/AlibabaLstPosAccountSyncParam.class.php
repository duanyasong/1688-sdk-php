<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaLstPosAccountSyncParam {

        
        /**
    * @return 用户ID
    */
        public function getUid() {
        $tempResult = $this->sdkStdResult["uid"];
        return $tempResult;
    }
    
    /**
     * 设置用户ID     
     * @param String $uid     
     * 参数示例：<pre>1234qwer</pre>     
     * 此参数必填     */
    public function setUid( $uid) {
        $this->sdkStdResult["uid"] = $uid;
    }
    
        
        /**
    * @return 信息详情，json格式
    */
        public function getInfo() {
        $tempResult = $this->sdkStdResult["info"];
        return $tempResult;
    }
    
    /**
     * 设置信息详情，json格式     
     * @param String $info     
     * 参数示例：<pre>{"withhold":true}</pre>     
     * 此参数必填     */
    public function setInfo( $info) {
        $this->sdkStdResult["info"] = $info;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>