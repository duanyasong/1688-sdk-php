<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigouPlatformSsoParam {

        
        /**
    * @return 跳转的类型
    */
        public function getTargetUrlEnum() {
        $tempResult = $this->sdkStdResult["targetUrlEnum"];
        return $tempResult;
    }
    
    /**
     * 设置跳转的类型     
     * @param String $targetUrlEnum     
     * 参数示例：<pre>ORDER_LIST</pre>     
     * 此参数必填     */
    public function setTargetUrlEnum( $targetUrlEnum) {
        $this->sdkStdResult["targetUrlEnum"] = $targetUrlEnum;
    }
    
        
        /**
    * @return 用户的登录名
    */
        public function getLoginId() {
        $tempResult = $this->sdkStdResult["loginId"];
        return $tempResult;
    }
    
    /**
     * 设置用户的登录名     
     * @param String $loginId     
     * 参数示例：<pre>aaa</pre>     
     * 此参数必填     */
    public function setLoginId( $loginId) {
        $this->sdkStdResult["loginId"] = $loginId;
    }
    
        
        /**
    * @return 用户的havanaId
    */
        public function getSubUserId() {
        $tempResult = $this->sdkStdResult["subUserId"];
        return $tempResult;
    }
    
    /**
     * 设置用户的havanaId     
     * @param String $subUserId     
     * 参数示例：<pre>11111</pre>     
     * 此参数必填     */
    public function setSubUserId( $subUserId) {
        $this->sdkStdResult["subUserId"] = $subUserId;
    }
    
        
        /**
    * @return 用户的最终跳转url
    */
        public function getTargetUrl() {
        $tempResult = $this->sdkStdResult["targetUrl"];
        return $tempResult;
    }
    
    /**
     * 设置用户的最终跳转url     
     * @param String $targetUrl     
     * 参数示例：<pre>http://ip:port</pre>     
     * 此参数必填     */
    public function setTargetUrl( $targetUrl) {
        $this->sdkStdResult["targetUrl"] = $targetUrl;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>