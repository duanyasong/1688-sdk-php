<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaVideoVideocenterAttachParam {

        
        /**
    * @return 商品id
    */
        public function getProductId() {
        $tempResult = $this->sdkStdResult["productId"];
        return $tempResult;
    }
    
    /**
     * 设置商品id     
     * @param String $productId     
     * 参数示例：<pre>12312412</pre>     
     * 此参数必填     */
    public function setProductId( $productId) {
        $this->sdkStdResult["productId"] = $productId;
    }
    
        
        /**
    * @return 视频关联商品位置，目前支持3种: 主图视频：mainPictureVideo 详情视频：detailVideo 所有：all
    */
        public function getLocation() {
        $tempResult = $this->sdkStdResult["location"];
        return $tempResult;
    }
    
    /**
     * 设置视频关联商品位置，目前支持3种: 主图视频：mainPictureVideo 详情视频：detailVideo 所有：all     
     * @param String $location     
     * 参数示例：<pre>mainPictureVideo</pre>     
     * 此参数必填     */
    public function setLocation( $location) {
        $this->sdkStdResult["location"] = $location;
    }
    
        
        /**
    * @return 视频id
    */
        public function getVideoId() {
        $tempResult = $this->sdkStdResult["videoId"];
        return $tempResult;
    }
    
    /**
     * 设置视频id     
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