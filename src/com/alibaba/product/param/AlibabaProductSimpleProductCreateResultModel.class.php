<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaProductSimpleAddParam/AlibabaProductSimpleProductCreateResult.class.php');

class AlibabaProductSimpleProductCreateResultModel extends SDKDomain {

       	
    private $message;
    
        /**
    * @return 返回消息
    */
        public function getMessage() {
        return $this->message;
    }
    
    /**
     * 设置返回消息     
     * @param String $message     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMessage( $message) {
        $this->message = $message;
    }
    
        	
    private $subCode;
    
        /**
    * @return 返回子码
    */
        public function getSubCode() {
        return $this->subCode;
    }
    
    /**
     * 设置返回子码     
     * @param String $subCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSubCode( $subCode) {
        $this->subCode = $subCode;
    }
    
        	
    private $subMessage;
    
        /**
    * @return 返回子消息
    */
        public function getSubMessage() {
        return $this->subMessage;
    }
    
    /**
     * 设置返回子消息     
     * @param String $subMessage     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSubMessage( $subMessage) {
        $this->subMessage = $subMessage;
    }
    
        	
    private $code;
    
        /**
    * @return 返回码
    */
        public function getCode() {
        return $this->code;
    }
    
    /**
     * 设置返回码     
     * @param String $code     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCode( $code) {
        $this->code = $code;
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
     * @param String $success     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
        	
    private $result;
    
        /**
    * @return 
    */
        public function getResult() {
        return $this->result;
    }
    
    /**
     * 设置     
     * @param AlibabaProductSimpleProductCreateResult $result     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setResult(AlibabaProductSimpleProductCreateResult $result) {
        $this->result = $result;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "message", $this->stdResult )) {
    				$this->message = $this->stdResult->{"message"};
    			}
    			    		    				    			    			if (array_key_exists ( "subCode", $this->stdResult )) {
    				$this->subCode = $this->stdResult->{"subCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "subMessage", $this->stdResult )) {
    				$this->subMessage = $this->stdResult->{"subMessage"};
    			}
    			    		    				    			    			if (array_key_exists ( "code", $this->stdResult )) {
    				$this->code = $this->stdResult->{"code"};
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    				    			    			if (array_key_exists ( "result", $this->stdResult )) {
    				$resultResult=$this->stdResult->{"result"};
    				$this->result = new AlibabaProductSimpleProductCreateResult();
    				$this->result->setStdResult ( $resultResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "message", $this->arrayResult )) {
    			$this->message = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "subCode", $this->arrayResult )) {
    			$this->subCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "subMessage", $this->arrayResult )) {
    			$this->subMessage = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "code", $this->arrayResult )) {
    			$this->code = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "result", $this->arrayResult )) {
    		$resultResult=$arrayResult['${paramType.paramName}'];
    			    			$this->result = new AlibabaProductSimpleProductCreateResult();
    			    			$this->result->setStdResult ( $resultResult);
    		}
    		    	    		}
 
   
}
?>