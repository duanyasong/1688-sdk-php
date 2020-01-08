<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AitoolsUploadOssCut3DAlbumParam {

        
        /**
    * @return 资源id
    */
        public function getRecogniseId() {
        $tempResult = $this->sdkStdResult["recogniseId"];
        return $tempResult;
    }
    
    /**
     * 设置资源id     
     * @param String $recogniseId     
     * 参数示例：<pre>123</pre>     
     * 此参数必填     */
    public function setRecogniseId( $recogniseId) {
        $this->sdkStdResult["recogniseId"] = $recogniseId;
    }
    
        
        /**
    * @return 相册id
    */
        public function getAlbumId() {
        $tempResult = $this->sdkStdResult["albumId"];
        return $tempResult;
    }
    
    /**
     * 设置相册id     
     * @param String $albumId     
     * 参数示例：<pre>123</pre>     
     * 此参数必填     */
    public function setAlbumId( $albumId) {
        $this->sdkStdResult["albumId"] = $albumId;
    }
    
        
        /**
    * @return 类目id
    */
        public function getCategoryId() {
        $tempResult = $this->sdkStdResult["categoryId"];
        return $tempResult;
    }
    
    /**
     * 设置类目id     
     * @param Long $categoryId     
     * 参数示例：<pre>123</pre>     
     * 此参数必填     */
    public function setCategoryId( $categoryId) {
        $this->sdkStdResult["categoryId"] = $categoryId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>