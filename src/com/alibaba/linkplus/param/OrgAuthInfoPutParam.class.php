<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class OrgAuthInfoPutParam {

        
        /**
    * @return 机构id
    */
        public function getOrgid() {
        $tempResult = $this->sdkStdResult["orgid"];
        return $tempResult;
    }
    
    /**
     * 设置机构id     
     * @param String $orgid     
     * 参数示例：<pre>ORG_0001</pre>     
     * 此参数必填     */
    public function setOrgid( $orgid) {
        $this->sdkStdResult["orgid"] = $orgid;
    }
    
        
        /**
    * @return 是否授权
    */
        public function getOrgIsAuth() {
        $tempResult = $this->sdkStdResult["orgIsAuth"];
        return $tempResult;
    }
    
    /**
     * 设置是否授权     
     * @param Boolean $orgIsAuth     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setOrgIsAuth( $orgIsAuth) {
        $this->sdkStdResult["orgIsAuth"] = $orgIsAuth;
    }
    
        
        /**
    * @return 授权修改时间
    */
        public function getModifyTimeStamp() {
        $tempResult = $this->sdkStdResult["modifyTimeStamp"];
        return $tempResult;
    }
    
    /**
     * 设置授权修改时间     
     * @param Long $modifyTimeStamp     
     * 参数示例：<pre>17726372813</pre>     
     * 此参数必填     */
    public function setModifyTimeStamp( $modifyTimeStamp) {
        $this->sdkStdResult["modifyTimeStamp"] = $modifyTimeStamp;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>