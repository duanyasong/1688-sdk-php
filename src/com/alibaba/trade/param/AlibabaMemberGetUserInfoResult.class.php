<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaMemberGetUserInfoResult {

        	
    private $userId;
    
        /**
    * @return 用户userId
    */
        public function getUserId() {
        return $this->userId;
    }
    
    /**
     * 设置用户userId     
     * @param String $userId     
          
     * 此参数必填     */
    public function setUserId( $userId) {
        $this->userId = $userId;
    }
    
        	
    private $companyName;
    
        /**
    * @return 公司名称
    */
        public function getCompanyName() {
        return $this->companyName;
    }
    
    /**
     * 设置公司名称     
     * @param String $companyName     
          
     * 此参数必填     */
    public function setCompanyName( $companyName) {
        $this->companyName = $companyName;
    }
    
        	
    private $memberId;
    
        /**
    * @return 会员ID
    */
        public function getMemberId() {
        return $this->memberId;
    }
    
    /**
     * 设置会员ID     
     * @param String $memberId     
          
     * 此参数必填     */
    public function setMemberId( $memberId) {
        $this->memberId = $memberId;
    }
    
        	
    private $loginId;
    
        /**
    * @return loginId
    */
        public function getLoginId() {
        return $this->loginId;
    }
    
    /**
     * 设置loginId     
     * @param String $loginId     
          
     * 此参数必填     */
    public function setLoginId( $loginId) {
        $this->loginId = $loginId;
    }
    
        	
    private $success;
    
        /**
    * @return 是否成功
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置是否成功     
     * @param Boolean $success     
          
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "userId", $this->stdResult )) {
    				$this->userId = $this->stdResult->{"userId"};
    			}
    			    		    				    			    			if (array_key_exists ( "companyName", $this->stdResult )) {
    				$this->companyName = $this->stdResult->{"companyName"};
    			}
    			    		    				    			    			if (array_key_exists ( "memberId", $this->stdResult )) {
    				$this->memberId = $this->stdResult->{"memberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "loginId", $this->stdResult )) {
    				$this->loginId = $this->stdResult->{"loginId"};
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "userId", $this->arrayResult )) {
    			$this->userId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "companyName", $this->arrayResult )) {
    			$this->companyName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "memberId", $this->arrayResult )) {
    			$this->memberId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "loginId", $this->arrayResult )) {
    			$this->loginId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>