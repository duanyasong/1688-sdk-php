<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaAppOrderListbyIdsParam/IsvOrderItemDto.class.php');

class AlibabaAppOrderListbyIdsResult {

        	
    private $returnValue;
    
        /**
    * @return isv订单信息
    */
        public function getReturnValue() {
        return $this->returnValue;
    }
    
    /**
     * 设置isv订单信息     
     * @param array include @see IsvOrderItemDto[] $returnValue     
          
     * 此参数必填     */
    public function setReturnValue(IsvOrderItemDto $returnValue) {
        $this->returnValue = $returnValue;
    }
    
        	
    private $successed;
    
        /**
    * @return 是否成功
    */
        public function getSuccessed() {
        return $this->successed;
    }
    
    /**
     * 设置是否成功     
     * @param Boolean $successed     
          
     * 此参数必填     */
    public function setSuccessed( $successed) {
        $this->successed = $successed;
    }
    
        	
    private $code;
    
        /**
    * @return 错误码
    */
        public function getCode() {
        return $this->code;
    }
    
    /**
     * 设置错误码     
     * @param String $code     
          
     * 此参数必填     */
    public function setCode( $code) {
        $this->code = $code;
    }
    
        	
    private $message;
    
        /**
    * @return 错误描述
    */
        public function getMessage() {
        return $this->message;
    }
    
    /**
     * 设置错误描述     
     * @param String $message     
          
     * 此参数必填     */
    public function setMessage( $message) {
        $this->message = $message;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "returnValue", $this->stdResult )) {
    			$returnValueResult=$this->stdResult->{"returnValue"};
    				$object = json_decode ( json_encode ( $returnValueResult ), true );
					$this->returnValue = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$IsvOrderItemDtoResult=new IsvOrderItemDto();
						$IsvOrderItemDtoResult->setArrayResult($arrayobject );
						$this->returnValue [$i] = $IsvOrderItemDtoResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "successed", $this->stdResult )) {
    				$this->successed = $this->stdResult->{"successed"};
    			}
    			    		    				    			    			if (array_key_exists ( "code", $this->stdResult )) {
    				$this->code = $this->stdResult->{"code"};
    			}
    			    		    				    			    			if (array_key_exists ( "message", $this->stdResult )) {
    				$this->message = $this->stdResult->{"message"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "returnValue", $this->arrayResult )) {
    		$returnValueResult=$arrayResult['${paramType.paramName}'];
    			$this->returnValue = new IsvOrderItemDto();
    			$this->returnValue->setStdResult ( $returnValueResult);
    		}
    		    	    			    		    			if (array_key_exists ( "successed", $this->arrayResult )) {
    			$this->successed = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "code", $this->arrayResult )) {
    			$this->code = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "message", $this->arrayResult )) {
    			$this->message = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>