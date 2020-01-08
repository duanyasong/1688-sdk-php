<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaProductRepublishParam/AlibabaProductProductOperateResult.class.php');

class AlibabaProductRepublishResult {

        	
    private $result;
    
        /**
    * @return 操作结果
    */
        public function getResult() {
        return $this->result;
    }
    
    /**
     * 设置操作结果     
     * @param array include @see AlibabaProductProductOperateResult[] $result     
          
     * 此参数必填     */
    public function setResult(AlibabaProductProductOperateResult $result) {
        $this->result = $result;
    }
    
        	
    private $errorCode;
    
        /**
    * @return 错误code
    */
        public function getErrorCode() {
        return $this->errorCode;
    }
    
    /**
     * 设置错误code     
     * @param String $errorCode     
          
     * 此参数必填     */
    public function setErrorCode( $errorCode) {
        $this->errorCode = $errorCode;
    }
    
        	
    private $errorMessage;
    
        /**
    * @return 详细的错误信息，可能有多条，是一个Map，用于开发自己定位问题
    */
        public function getErrorMessage() {
        return $this->errorMessage;
    }
    
    /**
     * 设置详细的错误信息，可能有多条，是一个Map，用于开发自己定位问题     
     * @param String $errorMessage     
          
     * 此参数必填     */
    public function setErrorMessage( $errorMessage) {
        $this->errorMessage = $errorMessage;
    }
    
        	
    private $subErrorCode;
    
        /**
    * @return 单条错误code
    */
        public function getSubErrorCode() {
        return $this->subErrorCode;
    }
    
    /**
     * 设置单条错误code     
     * @param String $subErrorCode     
          
     * 此参数必填     */
    public function setSubErrorCode( $subErrorCode) {
        $this->subErrorCode = $subErrorCode;
    }
    
        	
    private $subErrorMessage;
    
        /**
    * @return 单条错误信息，被errorMessage所包含。可用于前台展示
    */
        public function getSubErrorMessage() {
        return $this->subErrorMessage;
    }
    
    /**
     * 设置单条错误信息，被errorMessage所包含。可用于前台展示     
     * @param String $subErrorMessage     
          
     * 此参数必填     */
    public function setSubErrorMessage( $subErrorMessage) {
        $this->subErrorMessage = $subErrorMessage;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "result", $this->stdResult )) {
    			$resultResult=$this->stdResult->{"result"};
    				$object = json_decode ( json_encode ( $resultResult ), true );
					$this->result = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaProductProductOperateResultResult=new AlibabaProductProductOperateResult();
						$AlibabaProductProductOperateResultResult->setArrayResult($arrayobject );
						$this->result [$i] = $AlibabaProductProductOperateResultResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "errorCode", $this->stdResult )) {
    				$this->errorCode = $this->stdResult->{"errorCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorMessage", $this->stdResult )) {
    				$this->errorMessage = $this->stdResult->{"errorMessage"};
    			}
    			    		    				    			    			if (array_key_exists ( "subErrorCode", $this->stdResult )) {
    				$this->subErrorCode = $this->stdResult->{"subErrorCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "subErrorMessage", $this->stdResult )) {
    				$this->subErrorMessage = $this->stdResult->{"subErrorMessage"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "result", $this->arrayResult )) {
    		$resultResult=$arrayResult['${paramType.paramName}'];
    			$this->result = new AlibabaProductProductOperateResult();
    			$this->result->setStdResult ( $resultResult);
    		}
    		    	    			    		    			if (array_key_exists ( "errorCode", $this->arrayResult )) {
    			$this->errorCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorMessage", $this->arrayResult )) {
    			$this->errorMessage = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "subErrorCode", $this->arrayResult )) {
    			$this->subErrorCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "subErrorMessage", $this->arrayResult )) {
    			$this->subErrorMessage = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>