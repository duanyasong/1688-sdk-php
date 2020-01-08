<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class InterestingKeywordRecordPutParam {

        
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
     * 参数示例：<pre>ORG_001</pre>     
     * 此参数必填     */
    public function setOrgid( $orgid) {
        $this->sdkStdResult["orgid"] = $orgid;
    }
    
        
        /**
    * @return 终端用户UserId
    */
        public function getEndUserId() {
        $tempResult = $this->sdkStdResult["endUserId"];
        return $tempResult;
    }
    
    /**
     * 设置终端用户UserId     
     * @param String $endUserId     
     * 参数示例：<pre>ENDUSER_001</pre>     
     * 此参数必填     */
    public function setEndUserId( $endUserId) {
        $this->sdkStdResult["endUserId"] = $endUserId;
    }
    
        
        /**
    * @return 关键词
    */
        public function getKeywords() {
        $tempResult = $this->sdkStdResult["keywords"];
        return $tempResult;
    }
    
    /**
     * 设置关键词     
     * @param String $keywords     
     * 参数示例：<pre>小米手机</pre>     
     * 此参数必填     */
    public function setKeywords( $keywords) {
        $this->sdkStdResult["keywords"] = $keywords;
    }
    
        
        /**
    * @return 发起时间
    */
        public function getOperateTimeStamp() {
        $tempResult = $this->sdkStdResult["operateTimeStamp"];
        return $tempResult;
    }
    
    /**
     * 设置发起时间     
     * @param Long $operateTimeStamp     
     * 参数示例：<pre>17726372813</pre>     
     * 此参数必填     */
    public function setOperateTimeStamp( $operateTimeStamp) {
        $this->sdkStdResult["operateTimeStamp"] = $operateTimeStamp;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>