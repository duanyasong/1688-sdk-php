<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaVideoVideocenterModifyParam {

        
        /**
    * @return 视频ID
    */
        public function getVideoId() {
        $tempResult = $this->sdkStdResult["videoId"];
        return $tempResult;
    }
    
    /**
     * 设置视频ID     
     * @param Long $videoId     
     * 参数示例：<pre>123456</pre>     
     * 此参数必填     */
    public function setVideoId( $videoId) {
        $this->sdkStdResult["videoId"] = $videoId;
    }
    
        
        /**
    * @return 视频标题
    */
        public function getName() {
        $tempResult = $this->sdkStdResult["name"];
        return $tempResult;
    }
    
    /**
     * 设置视频标题     
     * @param String $name     
     * 参数示例：<pre>xxx.mp4</pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->sdkStdResult["name"] = $name;
    }
    
        
        /**
    * @return 视频描述
    */
        public function getDescription() {
        $tempResult = $this->sdkStdResult["description"];
        return $tempResult;
    }
    
    /**
     * 设置视频描述     
     * @param String $description     
     * 参数示例：<pre>T恤宣传视频</pre>     
     * 此参数必填     */
    public function setDescription( $description) {
        $this->sdkStdResult["description"] = $description;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>