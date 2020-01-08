<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaAitoolsModel3DPvgCheckResult {

        	
    private $hasPrivilege;
    
        /**
    * @return 用户是否可以使用 1688 3D 服务，为 true 表示可以使用。
    */
        public function getHasPrivilege() {
        return $this->hasPrivilege;
    }
    
    /**
     * 设置用户是否可以使用 1688 3D 服务，为 true 表示可以使用。     
     * @param Boolean $hasPrivilege     
          
     * 此参数必填     */
    public function setHasPrivilege( $hasPrivilege) {
        $this->hasPrivilege = $hasPrivilege;
    }
    
        	
    private $userGuideAddress;
    
        /**
    * @return 1688 3D 服务官方指引文档地址
    */
        public function getUserGuideAddress() {
        return $this->userGuideAddress;
    }
    
    /**
     * 设置1688 3D 服务官方指引文档地址     
     * @param String $userGuideAddress     
          
     * 此参数必填     */
    public function setUserGuideAddress( $userGuideAddress) {
        $this->userGuideAddress = $userGuideAddress;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "hasPrivilege", $this->stdResult )) {
    				$this->hasPrivilege = $this->stdResult->{"hasPrivilege"};
    			}
    			    		    				    			    			if (array_key_exists ( "userGuideAddress", $this->stdResult )) {
    				$this->userGuideAddress = $this->stdResult->{"userGuideAddress"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "hasPrivilege", $this->arrayResult )) {
    			$this->hasPrivilege = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "userGuideAddress", $this->arrayResult )) {
    			$this->userGuideAddress = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>