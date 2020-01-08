<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('ComAlibabaProcurementBuyerReceiveGoodsServiceCreateReceiveGoodsNoteParam/AlibabaProcurementApiReceivegoodsIntegrationResultCreateReceiveGoodsNoteResult.class.php');

class ComAlibabaProcurementBuyerReceiveGoodsServiceCreateReceiveGoodsNoteResult {

        	
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
          
     * 此参数必填     */
    public function setResultCode( $resultCode) {
        $this->resultCode = $resultCode;
    }
    
        	
    private $message;
    
        /**
    * @return 错误信息	
    */
        public function getMessage() {
        return $this->message;
    }
    
    /**
     * 设置错误信息	     
     * @param String $message     
          
     * 此参数必填     */
    public function setMessage( $message) {
        $this->message = $message;
    }
    
        	
    private $data;
    
        /**
    * @return 结果数据	
    */
        public function getData() {
        return $this->data;
    }
    
    /**
     * 设置结果数据	     
     * @param AlibabaProcurementApiReceivegoodsIntegrationResultCreateReceiveGoodsNoteResult $data     
          
     * 此参数必填     */
    public function setData(AlibabaProcurementApiReceivegoodsIntegrationResultCreateReceiveGoodsNoteResult $data) {
        $this->data = $data;
    }
    
        	
    private $success;
    
        /**
    * @return 是否处理成功	
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置是否处理成功	     
     * @param Boolean $success     
          
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "resultCode", $this->stdResult )) {
    				$this->resultCode = $this->stdResult->{"resultCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "message", $this->stdResult )) {
    				$this->message = $this->stdResult->{"message"};
    			}
    			    		    				    			    			if (array_key_exists ( "data", $this->stdResult )) {
    				$dataResult=$this->stdResult->{"data"};
    				$this->data = new AlibabaProcurementApiReceivegoodsIntegrationResultCreateReceiveGoodsNoteResult();
    				$this->data->setStdResult ( $dataResult);
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "resultCode", $this->arrayResult )) {
    			$this->resultCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "message", $this->arrayResult )) {
    			$this->message = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "data", $this->arrayResult )) {
    		$dataResult=$arrayResult['${paramType.paramName}'];
    			    			$this->data = new AlibabaProcurementApiReceivegoodsIntegrationResultCreateReceiveGoodsNoteResult();
    			    			$this->data->setStdResult ( $dataResult);
    		}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>