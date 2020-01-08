<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ComAlibabaProcurementBuyerSettlementServiceConfirmInvoiceResult {

        	
    private $data;
    
        /**
    * @return 数据
    */
        public function getData() {
        return $this->data;
    }
    
    /**
     * 设置数据     
     * @param Boolean $data     
          
     * 此参数必填     */
    public function setData( $data) {
        $this->data = $data;
    }
    
        	
    private $resultCode;
    
        /**
    * @return 错误返回码
    */
        public function getResultCode() {
        return $this->resultCode;
    }
    
    /**
     * 设置错误返回码     
     * @param String $resultCode     
          
     * 此参数必填     */
    public function setResultCode( $resultCode) {
        $this->resultCode = $resultCode;
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
          
     * 此参数必填     */
    public function setMessage( $message) {
        $this->message = $message;
    }
    
        	
    private $success;
    
        /**
    * @return 成功标识
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置成功标识     
     * @param Boolean $success     
          
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
    			    		    				    			    			if (array_key_exists ( "resultCode", $this->stdResult )) {
    				$this->resultCode = $this->stdResult->{"resultCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "message", $this->stdResult )) {
    				$this->message = $this->stdResult->{"message"};
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
    		    	    			    		    			if (array_key_exists ( "resultCode", $this->arrayResult )) {
    			$this->resultCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "message", $this->arrayResult )) {
    			$this->message = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>