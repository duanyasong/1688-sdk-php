<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaOpenCaigouApiRequisitionModifyBiddingStatusParam/AlibabaCaigouBizApiCooperModelOpenCreateRequisitionResponse.class.php');

class AlibabaCaigouBizApiCommonModelResultData extends SDKDomain {

       	
    private $data;
    
        /**
    * @return 看文档
    */
        public function getData() {
        return $this->data;
    }
    
    /**
     * 设置看文档     
     * @param AlibabaCaigouBizApiCooperModelOpenCreateRequisitionResponse $data     
     * 参数示例：<pre>看文档</pre>     
     * 此参数必填     */
    public function setData(AlibabaCaigouBizApiCooperModelOpenCreateRequisitionResponse $data) {
        $this->data = $data;
    }
    
        	
    private $message;
    
        /**
    * @return 看文档
    */
        public function getMessage() {
        return $this->message;
    }
    
    /**
     * 设置看文档     
     * @param String $message     
     * 参数示例：<pre>看文档</pre>     
     * 此参数必填     */
    public function setMessage( $message) {
        $this->message = $message;
    }
    
        	
    private $resultCode;
    
        /**
    * @return 看文档
    */
        public function getResultCode() {
        return $this->resultCode;
    }
    
    /**
     * 设置看文档     
     * @param String $resultCode     
     * 参数示例：<pre>看文档</pre>     
     * 此参数必填     */
    public function setResultCode( $resultCode) {
        $this->resultCode = $resultCode;
    }
    
        	
    private $success;
    
        /**
    * @return 看文档
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置看文档     
     * @param Boolean $success     
     * 参数示例：<pre>看文档</pre>     
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "data", $this->stdResult )) {
    				$dataResult=$this->stdResult->{"data"};
    				$this->data = new AlibabaCaigouBizApiCooperModelOpenCreateRequisitionResponse();
    				$this->data->setStdResult ( $dataResult);
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
    		$dataResult=$arrayResult['${paramType.paramName}'];
    			    			$this->data = new AlibabaCaigouBizApiCooperModelOpenCreateRequisitionResponse();
    			    			$this->data->setStdResult ( $dataResult);
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