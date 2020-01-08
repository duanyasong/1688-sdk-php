<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaRelationEndConsignRelationByConsignerResult {

        	
    private $isSuccess;
    
        /**
    * @return 是否成功
    */
        public function getIsSuccess() {
        return $this->isSuccess;
    }
    
    /**
     * 设置是否成功     
     * @param Boolean $isSuccess     
          
     * 此参数必填     */
    public function setIsSuccess( $isSuccess) {
        $this->isSuccess = $isSuccess;
    }
    
        	
    private $errorMsg;
    
        /**
    * @return 错误返回信息
    */
        public function getErrorMsg() {
        return $this->errorMsg;
    }
    
    /**
     * 设置错误返回信息     
     * @param String $errorMsg     
          
     * 此参数必填     */
    public function setErrorMsg( $errorMsg) {
        $this->errorMsg = $errorMsg;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "isSuccess", $this->stdResult )) {
    				$this->isSuccess = $this->stdResult->{"isSuccess"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorMsg", $this->stdResult )) {
    				$this->errorMsg = $this->stdResult->{"errorMsg"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "isSuccess", $this->arrayResult )) {
    			$this->isSuccess = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorMsg", $this->arrayResult )) {
    			$this->errorMsg = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>