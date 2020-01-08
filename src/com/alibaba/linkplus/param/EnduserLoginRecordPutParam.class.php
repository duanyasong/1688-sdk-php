<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class EnduserLoginRecordPutParam {

        
        /**
    * @return 机构ID
    */
        public function getOrgid() {
        $tempResult = $this->sdkStdResult["orgid"];
        return $tempResult;
    }
    
    /**
     * 设置机构ID     
     * @param String $orgid     
     * 参数示例：<pre>ORG_000001</pre>     
     * 此参数必填     */
    public function setOrgid( $orgid) {
        $this->sdkStdResult["orgid"] = $orgid;
    }
    
        
        /**
    * @return 终端用户ID
    */
        public function getEndUserId() {
        $tempResult = $this->sdkStdResult["endUserId"];
        return $tempResult;
    }
    
    /**
     * 设置终端用户ID     
     * @param String $endUserId     
     * 参数示例：<pre>USER_000001</pre>     
     * 此参数必填     */
    public function setEndUserId( $endUserId) {
        $this->sdkStdResult["endUserId"] = $endUserId;
    }
    
        
        /**
    * @return 当前URL
    */
        public function getRealUrl() {
        $tempResult = $this->sdkStdResult["realUrl"];
        return $tempResult;
    }
    
    /**
     * 设置当前URL     
     * @param String $realUrl     
     * 参数示例：<pre>http://www.saperp.com</pre>     
     * 此参数必填     */
    public function setRealUrl( $realUrl) {
        $this->sdkStdResult["realUrl"] = $realUrl;
    }
    
        
        /**
    * @return 登录IP地址
    */
        public function getIp() {
        $tempResult = $this->sdkStdResult["ip"];
        return $tempResult;
    }
    
    /**
     * 设置登录IP地址     
     * @param String $ip     
     * 参数示例：<pre>10.123.12.1</pre>     
     * 此参数必填     */
    public function setIp( $ip) {
        $this->sdkStdResult["ip"] = $ip;
    }
    
        
        /**
    * @return 国家名称
    */
        public function getCountryName() {
        $tempResult = $this->sdkStdResult["countryName"];
        return $tempResult;
    }
    
    /**
     * 设置国家名称     
     * @param String $countryName     
     * 参数示例：<pre>中国</pre>     
     * 此参数必填     */
    public function setCountryName( $countryName) {
        $this->sdkStdResult["countryName"] = $countryName;
    }
    
        
        /**
    * @return 省名称
    */
        public function getProvinceName() {
        $tempResult = $this->sdkStdResult["provinceName"];
        return $tempResult;
    }
    
    /**
     * 设置省名称     
     * @param String $provinceName     
     * 参数示例：<pre>浙江</pre>     
     * 此参数必填     */
    public function setProvinceName( $provinceName) {
        $this->sdkStdResult["provinceName"] = $provinceName;
    }
    
        
        /**
    * @return 城市名称
    */
        public function getCityName() {
        $tempResult = $this->sdkStdResult["cityName"];
        return $tempResult;
    }
    
    /**
     * 设置城市名称     
     * @param String $cityName     
     * 参数示例：<pre>杭州</pre>     
     * 此参数必填     */
    public function setCityName( $cityName) {
        $this->sdkStdResult["cityName"] = $cityName;
    }
    
        
        /**
    * @return 分辨率
    */
        public function getScr() {
        $tempResult = $this->sdkStdResult["scr"];
        return $tempResult;
    }
    
    /**
     * 设置分辨率     
     * @param String $scr     
     * 参数示例：<pre>1920x1080</pre>     
     * 此参数必填     */
    public function setScr( $scr) {
        $this->sdkStdResult["scr"] = $scr;
    }
    
        
        /**
    * @return 浏览器
    */
        public function getAgent() {
        $tempResult = $this->sdkStdResult["agent"];
        return $tempResult;
    }
    
    /**
     * 设置浏览器     
     * @param String $agent     
     * 参数示例：<pre>Chrome</pre>     
     * 此参数必填     */
    public function setAgent( $agent) {
        $this->sdkStdResult["agent"] = $agent;
    }
    
        
        /**
    * @return 客户端信息串
    */
        public function getAgentName() {
        $tempResult = $this->sdkStdResult["agentName"];
        return $tempResult;
    }
    
    /**
     * 设置客户端信息串     
     * @param String $agentName     
     * 参数示例：<pre>Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36</pre>     
     * 此参数必填     */
    public function setAgentName( $agentName) {
        $this->sdkStdResult["agentName"] = $agentName;
    }
    
        
        /**
    * @return 操作系统
    */
        public function getPlatform() {
        $tempResult = $this->sdkStdResult["platform"];
        return $tempResult;
    }
    
    /**
     * 设置操作系统     
     * @param String $platform     
     * 参数示例：<pre>Windows NT 5.1(Windows XP)</pre>     
     * 此参数必填     */
    public function setPlatform( $platform) {
        $this->sdkStdResult["platform"] = $platform;
    }
    
        
        /**
    * @return 登录时间
    */
        public function getLoginTimeStamp() {
        $tempResult = $this->sdkStdResult["loginTimeStamp"];
        return $tempResult;
    }
    
    /**
     * 设置登录时间     
     * @param Long $loginTimeStamp     
     * 参数示例：<pre>17726372813</pre>     
     * 此参数必填     */
    public function setLoginTimeStamp( $loginTimeStamp) {
        $this->sdkStdResult["loginTimeStamp"] = $loginTimeStamp;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>