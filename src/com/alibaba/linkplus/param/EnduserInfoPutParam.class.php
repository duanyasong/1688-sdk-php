<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class EnduserInfoPutParam {

        
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
    * @return 机构名称
    */
        public function getOrgName() {
        $tempResult = $this->sdkStdResult["orgName"];
        return $tempResult;
    }
    
    /**
     * 设置机构名称     
     * @param String $orgName     
     * 参数示例：<pre>三生网媒有限公司</pre>     
     * 此参数必填     */
    public function setOrgName( $orgName) {
        $this->sdkStdResult["orgName"] = $orgName;
    }
    
        
        /**
    * @return 机构地址
    */
        public function getOrgLocation() {
        $tempResult = $this->sdkStdResult["orgLocation"];
        return $tempResult;
    }
    
    /**
     * 设置机构地址     
     * @param String $orgLocation     
     * 参数示例：<pre>浙江杭州网商路699号</pre>     
     * 此参数必填     */
    public function setOrgLocation( $orgLocation) {
        $this->sdkStdResult["orgLocation"] = $orgLocation;
    }
    
        
        /**
    * @return 机构所属行业
    */
        public function getOrgIndustry() {
        $tempResult = $this->sdkStdResult["orgIndustry"];
        return $tempResult;
    }
    
    /**
     * 设置机构所属行业     
     * @param String $orgIndustry     
     * 参数示例：<pre>女装</pre>     
     * 此参数必填     */
    public function setOrgIndustry( $orgIndustry) {
        $this->sdkStdResult["orgIndustry"] = $orgIndustry;
    }
    
        
        /**
    * @return 机构联系方式
    */
        public function getOrgMobile() {
        $tempResult = $this->sdkStdResult["orgMobile"];
        return $tempResult;
    }
    
    /**
     * 设置机构联系方式     
     * @param String $orgMobile     
     * 参数示例：<pre>15888876875</pre>     
     * 此参数必填     */
    public function setOrgMobile( $orgMobile) {
        $this->sdkStdResult["orgMobile"] = $orgMobile;
    }
    
        
        /**
    * @return 机构email联系方式
    */
        public function getOrgEmail() {
        $tempResult = $this->sdkStdResult["orgEmail"];
        return $tempResult;
    }
    
    /**
     * 设置机构email联系方式     
     * @param String $orgEmail     
     * 参数示例：<pre>simon@163.com</pre>     
     * 此参数必填     */
    public function setOrgEmail( $orgEmail) {
        $this->sdkStdResult["orgEmail"] = $orgEmail;
    }
    
        
        /**
    * @return 机构绑定阿里巴巴登录账号
    */
        public function getOrgBindingAliLoginId() {
        $tempResult = $this->sdkStdResult["orgBindingAliLoginId"];
        return $tempResult;
    }
    
    /**
     * 设置机构绑定阿里巴巴登录账号     
     * @param String $orgBindingAliLoginId     
     * 参数示例：<pre>somebody2008</pre>     
     * 此参数必填     */
    public function setOrgBindingAliLoginId( $orgBindingAliLoginId) {
        $this->sdkStdResult["orgBindingAliLoginId"] = $orgBindingAliLoginId;
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
    * @return 终端用户名称
    */
        public function getEndUserName() {
        $tempResult = $this->sdkStdResult["endUserName"];
        return $tempResult;
    }
    
    /**
     * 设置终端用户名称     
     * @param String $endUserName     
     * 参数示例：<pre>赵兴明</pre>     
     * 此参数必填     */
    public function setEndUserName( $endUserName) {
        $this->sdkStdResult["endUserName"] = $endUserName;
    }
    
        
        /**
    * @return 终端用户手机
    */
        public function getEndUserMobile() {
        $tempResult = $this->sdkStdResult["endUserMobile"];
        return $tempResult;
    }
    
    /**
     * 设置终端用户手机     
     * @param String $endUserMobile     
     * 参数示例：<pre>15888876875</pre>     
     * 此参数必填     */
    public function setEndUserMobile( $endUserMobile) {
        $this->sdkStdResult["endUserMobile"] = $endUserMobile;
    }
    
        
        /**
    * @return 终端用户绑定阿里巴巴登录账号
    */
        public function getEndUserBindingAliLoginId() {
        $tempResult = $this->sdkStdResult["endUserBindingAliLoginId"];
        return $tempResult;
    }
    
    /**
     * 设置终端用户绑定阿里巴巴登录账号     
     * @param String $endUserBindingAliLoginId     
     * 参数示例：<pre>somebody2008</pre>     
     * 此参数必填     */
    public function setEndUserBindingAliLoginId( $endUserBindingAliLoginId) {
        $this->sdkStdResult["endUserBindingAliLoginId"] = $endUserBindingAliLoginId;
    }
    
        
        /**
    * @return 用户创建时间戳
    */
        public function getCreateTimeStamp() {
        $tempResult = $this->sdkStdResult["createTimeStamp"];
        return $tempResult;
    }
    
    /**
     * 设置用户创建时间戳     
     * @param Long $createTimeStamp     
     * 参数示例：<pre>17726372813</pre>     
     * 此参数必填     */
    public function setCreateTimeStamp( $createTimeStamp) {
        $this->sdkStdResult["createTimeStamp"] = $createTimeStamp;
    }
    
        
        /**
    * @return 用户修改时间戳
    */
        public function getModifyTimeStamp() {
        $tempResult = $this->sdkStdResult["modifyTimeStamp"];
        return $tempResult;
    }
    
    /**
     * 设置用户修改时间戳     
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