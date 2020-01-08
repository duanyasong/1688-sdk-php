<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProductPicTaskStartParam {

        
        /**
    * @return 商品Id值
    */
        public function getProductIds() {
        $tempResult = $this->sdkStdResult["productIds"];
        return $tempResult;
    }
    
    /**
     * 设置商品Id值     
     * @param String $productIds     
     * 参数示例：<pre>583941257919,584161349716</pre>     
     * 此参数必填     */
    public function setProductIds( $productIds) {
        $this->sdkStdResult["productIds"] = $productIds;
    }
    
        
        /**
    * @return 是否需要标题，默认false，素材有文字时使用
    */
        public function getContainsTitle() {
        $tempResult = $this->sdkStdResult["containsTitle"];
        return $tempResult;
    }
    
    /**
     * 设置是否需要标题，默认false，素材有文字时使用     
     * @param Boolean $containsTitle     
     * 参数示例：<pre>false</pre>     
     * 此参数必填     */
    public function setContainsTitle( $containsTitle) {
        $this->sdkStdResult["containsTitle"] = $containsTitle;
    }
    
        
        /**
    * @return 是否包含视频片段，素材内容说明
    */
        public function getContainsVideoFragment() {
        $tempResult = $this->sdkStdResult["containsVideoFragment"];
        return $tempResult;
    }
    
    /**
     * 设置是否包含视频片段，素材内容说明     
     * @param Boolean $containsVideoFragment     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setContainsVideoFragment( $containsVideoFragment) {
        $this->sdkStdResult["containsVideoFragment"] = $containsVideoFragment;
    }
    
        
        /**
    * @return 是否包含字幕，素材有文字时使用
    */
        public function getContainsSubTitle() {
        $tempResult = $this->sdkStdResult["containsSubTitle"];
        return $tempResult;
    }
    
    /**
     * 设置是否包含字幕，素材有文字时使用     
     * @param Boolean $containsSubTitle     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setContainsSubTitle( $containsSubTitle) {
        $this->sdkStdResult["containsSubTitle"] = $containsSubTitle;
    }
    
        
        /**
    * @return 是否使用logo图作为ending，素材有图片时使用
    */
        public function getLogoEnding() {
        $tempResult = $this->sdkStdResult["logoEnding"];
        return $tempResult;
    }
    
    /**
     * 设置是否使用logo图作为ending，素材有图片时使用     
     * @param Boolean $logoEnding     
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
     * @param Boolean $visualization     
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