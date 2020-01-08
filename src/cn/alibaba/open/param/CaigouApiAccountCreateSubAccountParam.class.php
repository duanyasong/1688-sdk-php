<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigouApiAccountCreateSubAccountParam {

        
        /**
    * @return 需要创建的子帐号在接入商系统内部唯一编号或者ID
    */
        public function getEmployeeId() {
        $tempResult = $this->sdkStdResult["employeeId"];
        return $tempResult;
    }
    
    /**
     * 设置需要创建的子帐号在接入商系统内部唯一编号或者ID     
     * @param String $employeeId     
     * 参数示例：<pre>001</pre>     
     * 此参数必填     */
    public function setEmployeeId( $employeeId) {
        $this->sdkStdResult["employeeId"] = $employeeId;
    }
    
        
        /**
    * @return 需要创建的子帐号的姓名
    */
        public function getName() {
        $tempResult = $this->sdkStdResult["name"];
        return $tempResult;
    }
    
    /**
     * 设置需要创建的子帐号的姓名     
     * @param String $name     
     * 参数示例：<pre>张三</pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->sdkStdResult["name"] = $name;
    }
    
        
        /**
    * @return 需要创建的子帐号的手机号，如果为空的话将来无法收到来自1688的采购业务提醒
    */
        public function getMobileNo() {
        $tempResult = $this->sdkStdResult["mobileNo"];
        return $tempResult;
    }
    
    /**
     * 设置需要创建的子帐号的手机号，如果为空的话将来无法收到来自1688的采购业务提醒     
     * @param String $mobileNo     
     * 参数示例：<pre>13500000000</pre>     
     * 此参数必填     */
    public function setMobileNo( $mobileNo) {
        $this->sdkStdResult["mobileNo"] = $mobileNo;
    }
    
        
        /**
    * @return 需要创建的子帐号的邮箱，如果为空则无法收到来自1688采购业务的邮件提醒
    */
        public function getEmail() {
        $tempResult = $this->sdkStdResult["email"];
        return $tempResult;
    }
    
    /**
     * 设置需要创建的子帐号的邮箱，如果为空则无法收到来自1688采购业务的邮件提醒     
     * @param String $email     
     * 参数示例：<pre>aaa@aliyun.com</pre>     
     * 此参数必填     */
    public function setEmail( $email) {
        $this->sdkStdResult["email"] = $email;
    }
    
        
        /**
    * @return 需要创建的子帐号的性别，枚举值：1或者2；1表示男，2表示女
    */
        public function getSex() {
        $tempResult = $this->sdkStdResult["sex"];
        return $tempResult;
    }
    
    /**
     * 设置需要创建的子帐号的性别，枚举值：1或者2；1表示男，2表示女     
     * @param String $sex     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setSex( $sex) {
        $this->sdkStdResult["sex"] = $sex;
    }
    
        
        /**
    * @return 需要创建的子帐号所属部门，多级部门用"-"分割，最多三级；如果为空，系统默认会在主帐号下面创建一个“我的团队”这个部门，所有没有传部门的子帐号都会归属到这个默认部门下面去。
    */
        public function getDepartment() {
        $tempResult = $this->sdkStdResult["department"];
        return $tempResult;
    }
    
    /**
     * 设置需要创建的子帐号所属部门，多级部门用"-"分割，最多三级；如果为空，系统默认会在主帐号下面创建一个“我的团队”这个部门，所有没有传部门的子帐号都会归属到这个默认部门下面去。     
     * @param String $department     
     * 参数示例：<pre>采购部-采购一部-采购一组</pre>     
     * 此参数必填     */
    public function setDepartment( $department) {
        $this->sdkStdResult["department"] = $department;
    }
    
        
        /**
    * @return 需要创建的子帐号在1688帐号体系下的角色，枚举值为：采购员、采购经理、财务，如果为空的话这个子帐号就没有相关采购寻源的权限或者采购的权限
    */
        public function getRole() {
        $tempResult = $this->sdkStdResult["role"];
        return $tempResult;
    }
    
    /**
     * 设置需要创建的子帐号在1688帐号体系下的角色，枚举值为：采购员、采购经理、财务，如果为空的话这个子帐号就没有相关采购寻源的权限或者采购的权限     
     * @param String $role     
     * 参数示例：<pre>采购员</pre>     
     * 此参数必填     */
    public function setRole( $role) {
        $this->sdkStdResult["role"] = $role;
    }
    
        
        /**
    * @return 授权公司编码，多个用英文分号分隔
    */
        public function getAuthCompanies() {
        $tempResult = $this->sdkStdResult["authCompanies"];
        return $tempResult;
    }
    
    /**
     * 设置授权公司编码，多个用英文分号分隔     
     * @param String $authCompanies     
     * 参数示例：<pre>c001;c002;c003</pre>     
     * 此参数必填     */
    public function setAuthCompanies( $authCompanies) {
        $this->sdkStdResult["authCompanies"] = $authCompanies;
    }
    
        
        /**
    * @return 授权工厂编码，多个用英文分号分隔
    */
        public function getAuthFactories() {
        $tempResult = $this->sdkStdResult["authFactories"];
        return $tempResult;
    }
    
    /**
     * 设置授权工厂编码，多个用英文分号分隔     
     * @param String $authFactories     
     * 参数示例：<pre>f001;f002;f003</pre>     
     * 此参数必填     */
    public function setAuthFactories( $authFactories) {
        $this->sdkStdResult["authFactories"] = $authFactories;
    }
    
        
        /**
    * @return 授权采购中心编码，多个用英文分号分隔
    */
        public function getAuthPurchaseCenters() {
        $tempResult = $this->sdkStdResult["authPurchaseCenters"];
        return $tempResult;
    }
    
    /**
     * 设置授权采购中心编码，多个用英文分号分隔     
     * @param String $authPurchaseCenters     
     * 参数示例：<pre>pc001;pc002;pc003</pre>     
     * 此参数必填     */
    public function setAuthPurchaseCenters( $authPurchaseCenters) {
        $this->sdkStdResult["authPurchaseCenters"] = $authPurchaseCenters;
    }
    
        
        /**
    * @return 授权成本中心，格式：公司编码|成本中心编码   多个成本中心用英文分号分隔
    */
        public function getAuthCostCenters() {
        $tempResult = $this->sdkStdResult["authCostCenters"];
        return $tempResult;
    }
    
    /**
     * 设置授权成本中心，格式：公司编码|成本中心编码   多个成本中心用英文分号分隔     
     * @param String $authCostCenters     
     * 参数示例：<pre>c001|cc123;c002|cc098</pre>     
     * 此参数必填     */
    public function setAuthCostCenters( $authCostCenters) {
        $this->sdkStdResult["authCostCenters"] = $authCostCenters;
    }
    
        
        /**
    * @return 授权区域名称，多个用英文分号分隔
    */
        public function getAuthAreas() {
        $tempResult = $this->sdkStdResult["authAreas"];
        return $tempResult;
    }
    
    /**
     * 设置授权区域名称，多个用英文分号分隔     
     * @param String $authAreas     
     * 参数示例：<pre>上海;广州</pre>     
     * 此参数必填     */
    public function setAuthAreas( $authAreas) {
        $this->sdkStdResult["authAreas"] = $authAreas;
    }
    
        
        /**
    * @return 授权类目编码，多个用英文分号分隔
    */
        public function getAuthCategories() {
        $tempResult = $this->sdkStdResult["authCategories"];
        return $tempResult;
    }
    
    /**
     * 设置授权类目编码，多个用英文分号分隔     
     * @param String $authCategories     
     * 参数示例：<pre>017</pre>     
     * 此参数必填     */
    public function setAuthCategories( $authCategories) {
        $this->sdkStdResult["authCategories"] = $authCategories;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>