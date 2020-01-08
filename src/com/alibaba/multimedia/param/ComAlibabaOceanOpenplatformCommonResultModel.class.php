<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ComAlibabaOceanOpenplatformCommonResultModel extends SDKDomain {

       	
    private $success;
    
        /**
    * @return 是否调用成功
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置是否调用成功     
     * @param Boolean $success     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
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
     * 参数示例：<pre>null</pre>     
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
     * 参数示例：<pre>null</pre>     
     * 此参数必填     */
    public function setMessage( $message) {
        $this->message = $message;
    }
    
        	
    private $subCode;
    
        /**
    * @return 子错误码
    */
        public function getSubCode() {
        return $this->subCode;
    }
    
    /**
     * 设置子错误码     
     * @param String $subCode     
     * 参数示例：<pre>null</pre>     
     * 此参数必填     */
    public function setSubCode( $subCode) {
        $this->subCode = $subCode;
    }
    
        	
    private $subMessage;
    
        /**
    * @return 子错误描述
    */
        public function getSubMessage() {
        return $this->subMessage;
    }
    
    /**
     * 设置子错误描述     
     * @param String $subMessage     
     * 参数示例：<pre>null</pre>     
     * 此参数必填     */
    public function setSubMessage( $subMessage) {
        $this->subMessage = $subMessage;
    }
    
        	
    private $taskId;
    
        /**
    * @return 发起任务后返回的taskId
    */
        public function getTaskId() {
        return $this->taskId;
    }
    
    /**
     * 设置发起任务后返回的taskId     
     * @param String $taskId     
     * 参数示例：<pre>39b2c5f0-49ad-4d18-9501-d074b51dfa1f_genVideo_1545272350345</pre>     
     * 此参数必填     */
    public function setTaskId( $taskId) {
        $this->taskId = $taskId;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    				    			    			if (array_key_exists ( "code", $this->stdResult )) {
    				$this->code = $this->stdResult->{"code"};
    			}
    			    		    				    			    			if (array_key_exists ( "message", $this->stdResult )) {
    				$this->message = $this->stdResult->{"message"};
    			}
    			    		    				    			    			if (array_key_exists ( "subCode", $this->stdResult )) {
    				$this->subCode = $this->stdResult->{"subCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "subMessage", $this->stdResult )) {
    				$this->subMessage = $this->stdResult->{"subMessage"};
    			}
    			    		    				    			    			if (array_key_exists ( "taskId", $this->stdResult )) {
    				$this->taskId = $this->stdResult->{"taskId"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "code", $this->arrayResult )) {
    			$this->code = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "message", $this->arrayResult )) {
    			$this->message = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "subCode", $this->arrayResult )) {
    			$this->subCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "subMessage", $this->arrayResult )) {
    			$this->subMessage = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "taskId", $this->arrayResult )) {
    			$this->taskId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>