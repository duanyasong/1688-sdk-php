<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaPanamaPushTaoResult {

        	
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
    
        	
    private $itemId;
    
        /**
    * @return 淘宝商品ID	
    */
        public function getItemId() {
        return $this->itemId;
    }
    
    /**
     * 设置淘宝商品ID	     
     * @param Long $itemId     
          
     * 此参数必填     */
    public function setItemId( $itemId) {
        $this->itemId = $itemId;
    }
    
        	
    private $offerId;
    
        /**
    * @return 1688商品ID	
    */
        public function getOfferId() {
        return $this->offerId;
    }
    
    /**
     * 设置1688商品ID	     
     * @param Long $offerId     
          
     * 此参数必填     */
    public function setOfferId( $offerId) {
        $this->offerId = $offerId;
    }
    
        	
    private $requestId;
    
        /**
    * @return 请求ID，排查问题时请提供	
    */
        public function getRequestId() {
        return $this->requestId;
    }
    
    /**
     * 设置请求ID，排查问题时请提供	     
     * @param Long $requestId     
          
     * 此参数必填     */
    public function setRequestId( $requestId) {
        $this->requestId = $requestId;
    }
    
        	
    private $errorMsg;
    
        /**
    * @return 错误信息	
    */
        public function getErrorMsg() {
        return $this->errorMsg;
    }
    
    /**
     * 设置错误信息	     
     * @param String $errorMsg     
          
     * 此参数必填     */
    public function setErrorMsg( $errorMsg) {
        $this->errorMsg = $errorMsg;
    }
    
        	
    private $errorCode;
    
        /**
    * @return 错误码	
    */
        public function getErrorCode() {
        return $this->errorCode;
    }
    
    /**
     * 设置错误码	     
     * @param String $errorCode     
          
     * 此参数必填     */
    public function setErrorCode( $errorCode) {
        $this->errorCode = $errorCode;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    				    			    			if (array_key_exists ( "itemId", $this->stdResult )) {
    				$this->itemId = $this->stdResult->{"itemId"};
    			}
    			    		    				    			    			if (array_key_exists ( "offerId", $this->stdResult )) {
    				$this->offerId = $this->stdResult->{"offerId"};
    			}
    			    		    				    			    			if (array_key_exists ( "requestId", $this->stdResult )) {
    				$this->requestId = $this->stdResult->{"requestId"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorMsg", $this->stdResult )) {
    				$this->errorMsg = $this->stdResult->{"errorMsg"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorCode", $this->stdResult )) {
    				$this->errorCode = $this->stdResult->{"errorCode"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "itemId", $this->arrayResult )) {
    			$this->itemId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "offerId", $this->arrayResult )) {
    			$this->offerId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "requestId", $this->arrayResult )) {
    			$this->requestId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorMsg", $this->arrayResult )) {
    			$this->errorMsg = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorCode", $this->arrayResult )) {
    			$this->errorCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>