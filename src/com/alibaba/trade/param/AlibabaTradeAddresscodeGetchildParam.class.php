<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaTradeAddresscodeGetchildParam {

        
        /**
    * @return 地址码，如果不输入则获取最上层信息
    */
        public function getAreaCode() {
        $tempResult = $this->sdkStdResult["areaCode"];
        return $tempResult;
    }
    
    /**
     * 设置地址码，如果不输入则获取最上层信息     
     * @param String $areaCode     
     * 参数示例：<pre>330108</pre>     
     * 此参数必填     */
    public function setAreaCode( $areaCode) {
        $this->sdkStdResult["areaCode"] = $areaCode;
    }
    
        
        /**
    * @return 站点信息,1688或者alibaba
    */
        public function getWebSite() {
        $tempResult = $this->sdkStdResult["webSite"];
        return $tempResult;
    }
    
    /**
     * 设置站点信息,1688或者alibaba     
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