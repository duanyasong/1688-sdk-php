<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigouApiAccountBindAccountParam {

        
        /**
    * @return 对接企业员工在1688系统中的账号
    */
        public function getSubAccountloginId() {
        $tempResult = $this->sdkStdResult["subAccountloginId"];
        return $tempResult;
    }
    
    /**
     * 设置对接企业员工在1688系统中的账号     
     * @param String $subAccountloginId     
     * 参数示例：<pre>zhoulhtest001:foxtest001</pre>     
     * 此参数必填     */
    public function setSubAccountloginId( $subAccountloginId) {
        $this->sdkStdResult["subAccountloginId"] = $subAccountloginId;
    }
    
        
        /**
    * @return 对接企业员工在企业系统中的账号
    */
        public function getEmployeeId() {
        $tempResult = $this->sdkStdResult["employeeId"];
        return $tempResult;
    }
    
    /**
     * 设置对接企业员工在企业系统中的账号     
     * @param String $employeeId     
     * 参数示例：<pre>emId_001</pre>     
     * 此参数必填     */
    public function setEmployeeId( $employeeId) {
        $this->sdkStdResult["employeeId"] = $employeeId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>