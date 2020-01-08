<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigouApiAccountCoopSubAccountModel extends SDKDomain {

       	
    private $userId;
    
        /**
    * @return 子账号userId
    */
        public function getUserId() {
        return $this->userId;
    }
    
    /**
     * 设置子账号userId     
     * @param Long $userId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setUserId( $userId) {
        $this->userId = $userId;
    }
    
        	
    private $loginId;
    
        /**
    * @return 子账号loginId
    */
        public function getLoginId() {
        return $this->loginId;
    }
    
    /**
     * 设置子账号loginId     
     * @param String $loginId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLoginId( $loginId) {
        $this->loginId = $loginId;
    }
    
        	
    private $employeeId;
    
        /**
    * @return 子账号employeeId
    */
        public function getEmployeeId() {
        return $this->employeeId;
    }
    
    /**
     * 设置子账号employeeId     
     * @param String $employeeId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setEmployeeId( $employeeId) {
        $this->employeeId = $employeeId;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "userId", $this->stdResult )) {
    				$this->userId = $this->stdResult->{"userId"};
    			}
    			    		    				    			    			if (array_key_exists ( "loginId", $this->stdResult )) {
    				$this->loginId = $this->stdResult->{"loginId"};
    			}
    			    		    				    			    			if (array_key_exists ( "employeeId", $this->stdResult )) {
    				$this->employeeId = $this->stdResult->{"employeeId"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "userId", $this->arrayResult )) {
    			$this->userId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "loginId", $this->arrayResult )) {
    			$this->loginId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "employeeId", $this->arrayResult )) {
    			$this->employeeId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>