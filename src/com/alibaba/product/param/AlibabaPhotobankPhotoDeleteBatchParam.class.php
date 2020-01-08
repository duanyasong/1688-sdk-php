<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaPhotobankPhotoDeleteBatchParam {

        
        /**
    * @return 待操作图片ID列表，每次最多支持删除20张图片。
    */
        public function getImageIds() {
        $tempResult = $this->sdkStdResult["imageIds"];
        return $tempResult;
    }
    
    /**
     * 设置待操作图片ID列表，每次最多支持删除20张图片。     
     * @param array include @see Long[] $imageIds     
     * 参数示例：<pre>[9268841037]</pre>     
     * 此参数必填     */
    public function setImageIds( $imageIds) {
        $this->sdkStdResult["imageIds"] = $imageIds;
    }
    
        
        /**
    * @return 1688或者alibaba
    */
        public function getWebSite() {
        $tempResult = $this->sdkStdResult["webSite"];
        return $tempResult;
    }
    
    /**
     * 设置1688或者alibaba     
     * @param String $webSite     
     * 参数示例：<pre>1688</pre>     
     * 此参数必填     */
    public function setWebSite( $webSite) {
        $this->sdkStdResult["webSite"] = $webSite;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>