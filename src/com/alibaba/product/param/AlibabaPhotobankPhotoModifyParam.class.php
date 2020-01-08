<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaPhotobankPhotoModifyParam/AlibabaProductImageInfo.class.php');

class AlibabaPhotobankPhotoModifyParam {

        
        /**
    * @return 图片详情
    */
        public function getImageInfo() {
        $tempResult = $this->sdkStdResult["imageInfo"];
        return $tempResult;
    }
    
    /**
     * 设置图片详情     
     * @param AlibabaProductImageInfo $imageInfo     
     * 参数示例：<pre>{}</pre>     
     * 此参数必填     */
    public function setImageInfo(AlibabaProductImageInfo $imageInfo) {
        $this->sdkStdResult["imageInfo"] = $imageInfo;
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