<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaPhotobankAlbumGetListParam {

        
        /**
    * @return 站点信息，指定调用的API是属于国际站（alibaba）还是1688网站（1688）
    */
        public function getWebSite() {
        $tempResult = $this->sdkStdResult["webSite"];
        return $tempResult;
    }
    
    /**
     * 设置站点信息，指定调用的API是属于国际站（alibaba）还是1688网站（1688）     
     * @param String $webSite     
     * 参数示例：<pre>1688</pre>     
     * 此参数必填     */
    public function setWebSite( $webSite) {
        $this->sdkStdResult["webSite"] = $webSite;
    }
    
        
        /**
    * @return 相册类型
    */
        public function getAlbumType() {
        $tempResult = $this->sdkStdResult["albumType"];
        return $tempResult;
    }
    
    /**
     * 设置相册类型     
     * @param String $albumType     
     * 参数示例：<pre>MY:我的相册(系统相册); OFF:下架相册(系统相册); AUDTING:审核中(系统相册); NOPASS:审核不通过(系统相册); CUSTOM:自定义;</pre>     
     * 此参数必填     */
    public function setAlbumType( $albumType) {
        $this->sdkStdResult["albumType"] = $albumType;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>