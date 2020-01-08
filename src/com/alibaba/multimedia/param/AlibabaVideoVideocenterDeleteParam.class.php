<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaVideoVideocenterDeleteParam {

        
        /**
    * @return 1688视频id
    */
        public function getVideoId() {
        $tempResult = $this->sdkStdResult["videoId"];
        return $tempResult;
    }
    
    /**
     * 设置1688视频id     
     * @param Long $videoId     
     * 参数示例：<pre>123456</pre>     
     * 此参数必填     */
    public function setVideoId( $videoId) {
        $this->sdkStdResult["videoId"] = $videoId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>