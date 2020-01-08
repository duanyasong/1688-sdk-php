<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaVideocenterVideoTaskStartParam {

        
        /**
    * @return 视频Ids
    */
        public function getVideoIds() {
        $tempResult = $this->sdkStdResult["videoIds"];
        return $tempResult;
    }
    
    /**
     * 设置视频Ids     
     * @param String $videoIds     
     * 参数示例：<pre>583941257919</pre>     
     * 此参数必填     */
    public function setVideoIds( $videoIds) {
        $this->sdkStdResult["videoIds"] = $videoIds;
    }
    
        
        /**
    * @return 是否需要标题
    */
        public function getContainsTitle() {
        $tempResult = $this->sdkStdResult["containsTitle"];
        return $tempResult;
    }
    
    /**
     * 设置是否需要标题     
     * @param String $containsTitle     
     * 参数示例：<pre>false</pre>     
     * 此参数必填     */
    public function setContainsTitle( $containsTitle) {
        $this->sdkStdResult["containsTitle"] = $containsTitle;
    }
    
        
        /**
    * @return 是否包含视频片段
    */
        public function getContainsVideoFragment() {
        $tempResult = $this->sdkStdResult["containsVideoFragment"];
        return $tempResult;
    }
    
    /**
     * 设置是否包含视频片段     
     * @param String $containsVideoFragment     
     * 参数示例：<pre>false</pre>     
     * 此参数必填     */
    public function setContainsVideoFragment( $containsVideoFragment) {
        $this->sdkStdResult["containsVideoFragment"] = $containsVideoFragment;
    }
    
        
        /**
    * @return 是否包含字幕
    */
        public function getContainsSubTitle() {
        $tempResult = $this->sdkStdResult["containsSubTitle"];
        return $tempResult;
    }
    
    /**
     * 设置是否包含字幕     
     * @param String $containsSubTitle     
     * 参数示例：<pre>false</pre>     
     * 此参数必填     */
    public function setContainsSubTitle( $containsSubTitle) {
        $this->sdkStdResult["containsSubTitle"] = $containsSubTitle;
    }
    
        
        /**
    * @return 是否使用logo图作为ending
    */
        public function getLogoEnding() {
        $tempResult = $this->sdkStdResult["logoEnding"];
        return $tempResult;
    }
    
    /**
     * 设置是否使用logo图作为ending     
     * @param String $logoEnding     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setLogoEnding( $logoEnding) {
        $this->sdkStdResult["logoEnding"] = $logoEnding;
    }
    
        
        /**
    * @return 是否使用可视化特效
    */
        public function getVisualization() {
        $tempResult = $this->sdkStdResult["visualization"];
        return $tempResult;
    }
    
    /**
     * 设置是否使用可视化特效     
     * @param String $visualization     
     * 参数示例：<pre>false</pre>     
     * 此参数必填     */
    public function setVisualization( $visualization) {
        $this->sdkStdResult["visualization"] = $visualization;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>