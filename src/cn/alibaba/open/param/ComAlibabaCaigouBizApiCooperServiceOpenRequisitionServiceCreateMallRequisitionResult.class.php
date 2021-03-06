<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('ComAlibabaCaigouBizApiCooperServiceOpenRequisitionServiceCreateMallRequisitionParam/ComAlibabaCaigouBizApiCommonModelResultData.class.php');

class ComAlibabaCaigouBizApiCooperServiceOpenRequisitionServiceCreateMallRequisitionResult {

        	
    private $result;
    
        /**
    * @return 参考文档
    */
        public function getResult() {
        return $this->result;
    }
    
    /**
     * 设置参考文档     
     * @param ComAlibabaCaigouBizApiCommonModelResultData $result     
          
     * 此参数必填     */
    public function setResult(ComAlibabaCaigouBizApiCommonModelResultData $result) {
        $this->result = $result;
    }
    
        	
    private $message;
    
        /**
    * @return 参考文档
    */
        public function getMessage() {
        return $this->message;
    }
    
    /**
     * 设置参考文档     
     * @param String $message     
          
     * 此参数必填     */
    public function setMessage( $message) {
        $this->message = $message;
    }
    
        	
    private $resultCode;
    
        /**
    * @return 参考文档
    */
        public function getResultCode() {
        return $this->resultCode;
    }
    
    /**
     * 设置参考文档     
     * @param String $resultCode     
          
     * 此参数必填     */
    public function setResultCode( $resultCode) {
        $this->resultCode = $resultCode;
    }
    
        	
    private $success;
    
        /**
    * @return 参考文档
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置参考文档     
     * @param Boolean $success     
          
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "result", $this->stdResult )) {
    				$resultResult=$this->stdResult->{"result"};
    				$this->result = new ComAlibabaCaigouBizApiCommonModelResultData();
    				$this->result->setStdResult ( $resultResult);
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
				    		    		if (array_key_exists ( "result", $this->arrayResult )) {
    		$resultResult=$arrayResult['${paramType.paramName}'];
    			    			$this->result = new ComAlibabaCaigouBizApiCommonModelResultData();
    			    			$this->result->setStdResult ( $resultResult);
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