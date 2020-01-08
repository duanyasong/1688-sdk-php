<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaVideoTaskQueryParam/ComAlibabaOceanOpenplatformBizVideoResultVideoTaskResult.class.php');

class AlibabaVideoTaskQueryResult {

        	
    private $code;
    
        /**
    * @return 调用错误码
    */
        public function getCode() {
        return $this->code;
    }
    
    /**
     * 设置调用错误码     
     * @param String $code     
          
     * 此参数必填     */
    public function setCode( $code) {
        $this->code = $code;
    }
    
        	
    private $message;
    
        /**
    * @return 调用错误描述
    */
        public function getMessage() {
        return $this->message;
    }
    
    /**
     * 设置调用错误描述     
     * @param String $message     
          
     * 此参数必填     */
    public function setMessage( $message) {
        $this->message = $message;
    }
    
        	
    private $videoTaskResult;
    
        /**
    * @return 视频任务返回的具体结果
    */
        public function getVideoTaskResult() {
        return $this->videoTaskResult;
    }
    
    /**
     * 设置视频任务返回的具体结果     
     * @param ComAlibabaOceanOpenplatformBizVideoResultVideoTaskResult $videoTaskResult     
          
     * 此参数必填     */
    public function setVideoTaskResult(ComAlibabaOceanOpenplatformBizVideoResultVideoTaskResult $videoTaskResult) {
        $this->videoTaskResult = $videoTaskResult;
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
					    			    			if (array_key_exists ( "code", $this->stdResult )) {
    				$this->code = $this->stdResult->{"code"};
    			}
    			    		    				    			    			if (array_key_exists ( "message", $this->stdResult )) {
    				$this->message = $this->stdResult->{"message"};
    			}
    			    		    				    			    			if (array_key_exists ( "videoTaskResult", $this->stdResult )) {
    				$videoTaskResultResult=$this->stdResult->{"videoTaskResult"};
    				$this->videoTaskResult = new ComAlibabaOceanOpenplatformBizVideoResultVideoTaskResult();
    				$this->videoTaskResult->setStdResult ( $videoTaskResultResult);
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "code", $this->arrayResult )) {
    			$this->code = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "message", $this->arrayResult )) {
    			$this->message = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "videoTaskResult", $this->arrayResult )) {
    		$videoTaskResultResult=$arrayResult['${paramType.paramName}'];
    			    			$this->videoTaskResult = new ComAlibabaOceanOpenplatformBizVideoResultVideoTaskResult();
    			    			$this->videoTaskResult->setStdResult ( $videoTaskResultResult);
    		}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>