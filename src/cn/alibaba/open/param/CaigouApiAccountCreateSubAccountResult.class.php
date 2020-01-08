<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigouApiAccountCreateSubAccountResult {

        	
    private $loginId;
    
        /**
    * @return 登录名
    */
        public function getLoginId() {
        return $this->loginId;
    }
    
    /**
     * 设置登录名     
     * @param String $loginId     
          
     * 此参数必填     */
    public function setLoginId( $loginId) {
        $this->loginId = $loginId;
    }
    
        	
    private $employeeId;
    
        /**
    * @return 工号
    */
        public function getEmployeeId() {
        return $this->employeeId;
    }
    
    /**
     * 设置工号     
     * @param String $employeeId     
          
     * 此参数必填     */
    public function setEmployeeId( $employeeId) {
        $this->employeeId = $employeeId;
    }
    
        	
    private $subUserId;
    
        /**
    * @return 子账号id
    */
        public function getSubUserId() {
        return $this->subUserId;
    }
    
    /**
     * 设置子账号id     
     * @param Long $subUserId     
          
     * 此参数必填     */
    public function setSubUserId( $subUserId) {
        $this->subUserId = $subUserId;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "loginId", $this->stdResult )) {
    				$this->loginId = $this->stdResult->{"loginId"};
    			}
    			    		    				    			    			if (array_key_exists ( "employeeId", $this->stdResult )) {
    				$this->employeeId = $this->stdResult->{"employeeId"};
    			}
    			    		    				    			    			if (array_key_exists ( "subUserId", $this->stdResult )) {
    				$this->subUserId = $this->stdResult->{"subUserId"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "loginId", $this->arrayResult )) {
    			$this->loginId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "employeeId", $this->arrayResult )) {
    			$this->employeeId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "subUserId", $this->arrayResult )) {
    			$this->subUserId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>