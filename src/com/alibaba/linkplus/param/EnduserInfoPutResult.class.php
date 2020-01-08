<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class EnduserInfoPutResult {

        	
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
    
        	
    private $errMsg;
    
        /**
    * @return 错误信息
    */
        public function getErrMsg() {
        return $this->errMsg;
    }
    
    /**
     * 设置错误信息     
     * @param String $errMsg     
          
     * 此参数必填     */
    public function setErrMsg( $errMsg) {
        $this->errMsg = $errMsg;
    }
    
        	
    private $errCode;
    
        /**
    * @return 错误代码
    */
        public function getErrCode() {
        return $this->errCode;
    }
    
    /**
     * 设置错误代码     
     * @param String $errCode     
          
     * 此参数必填     */
    public function setErrCode( $errCode) {
        $this->errCode = $errCode;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    				    			    			if (array_key_exists ( "errMsg", $this->stdResult )) {
    				$this->errMsg = $this->stdResult->{"errMsg"};
    			}
    			    		    				    			    			if (array_key_exists ( "errCode", $this->stdResult )) {
    				$this->errCode = $this->stdResult->{"errCode"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "errMsg", $this->arrayResult )) {
    			$this->errMsg = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "errCode", $this->arrayResult )) {
    			$this->errCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>