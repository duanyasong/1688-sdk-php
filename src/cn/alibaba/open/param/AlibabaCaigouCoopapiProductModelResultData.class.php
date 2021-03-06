<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCaigouCoopapiProductModelResultData extends SDKDomain {

       	
    private $data;
    
        /**
    * @return 添加结果标识
    */
        public function getData() {
        return $this->data;
    }
    
    /**
     * 设置添加结果标识     
     * @param Boolean $data     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setData( $data) {
        $this->data = $data;
    }
    
        	
    private $message;
    
        /**
    * @return 错误消息
    */
        public function getMessage() {
        return $this->message;
    }
    
    /**
     * 设置错误消息     
     * @param String $message     
     * 参数示例：<pre>参数无效</pre>     
     * 此参数必填     */
    public function setMessage( $message) {
        $this->message = $message;
    }
    
        	
    private $resultCode;
    
        /**
    * @return 错误码
    */
        public function getResultCode() {
        return $this->resultCode;
    }
    
    /**
     * 设置错误码     
     * @param String $resultCode     
     * 参数示例：<pre>invalid param</pre>     
     * 此参数必填     */
    public function setResultCode( $resultCode) {
        $this->resultCode = $resultCode;
    }
    
        	
    private $success;
    
        /**
    * @return 接口调用成功标识
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置接口调用成功标识     
     * @param Boolean $success     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "data", $this->stdResult )) {
    				$this->data = $this->stdResult->{"data"};
    			}
    			    		    				    			    			if (array_key_exists ( "message", $this->stdResult )) {
    				$this->message = $this->stdResult->{"message"};
    			}
    			    		    				    			    			if (array_key_exists ( "resultCode", $this->stdResult )) {
    				$this->resultCode = $this->stdResult->{"resultCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "data", $this->arrayResult )) {
    			$this->data = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "message", $this->arrayResult )) {
    			$this->message = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "resultCode", $this->arrayResult )) {
    			$this->resultCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>