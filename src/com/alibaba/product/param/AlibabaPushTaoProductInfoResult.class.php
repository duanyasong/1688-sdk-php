<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaPushTaoProductInfoParam/AlibabaProductProductInfo.class.php');

class AlibabaPushTaoProductInfoResult {

        	
    private $productInfo;
    
        /**
    * @return 返回结果
    */
        public function getProductInfo() {
        return $this->productInfo;
    }
    
    /**
     * 设置返回结果     
     * @param AlibabaProductProductInfo $productInfo     
          
     * 此参数必填     */
    public function setProductInfo(AlibabaProductProductInfo $productInfo) {
        $this->productInfo = $productInfo;
    }
    
        	
    private $errorCode;
    
        /**
    * @return 返回码
    */
        public function getErrorCode() {
        return $this->errorCode;
    }
    
    /**
     * 设置返回码     
     * @param String $errorCode     
          
     * 此参数必填     */
    public function setErrorCode( $errorCode) {
        $this->errorCode = $errorCode;
    }
    
        	
    private $errorMsg;
    
        /**
    * @return 返回信息
    */
        public function getErrorMsg() {
        return $this->errorMsg;
    }
    
    /**
     * 设置返回信息     
     * @param String $errorMsg     
          
     * 此参数必填     */
    public function setErrorMsg( $errorMsg) {
        $this->errorMsg = $errorMsg;
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
					    			    			if (array_key_exists ( "productInfo", $this->stdResult )) {
    				$productInfoResult=$this->stdResult->{"productInfo"};
    				$this->productInfo = new AlibabaProductProductInfo();
    				$this->productInfo->setStdResult ( $productInfoResult);
    			}
    			    		    				    			    			if (array_key_exists ( "errorCode", $this->stdResult )) {
    				$this->errorCode = $this->stdResult->{"errorCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorMsg", $this->stdResult )) {
    				$this->errorMsg = $this->stdResult->{"errorMsg"};
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "productInfo", $this->arrayResult )) {
    		$productInfoResult=$arrayResult['${paramType.paramName}'];
    			    			$this->productInfo = new AlibabaProductProductInfo();
    			    			$this->productInfo->setStdResult ( $productInfoResult);
    		}
    		    	    			    		    			if (array_key_exists ( "errorCode", $this->arrayResult )) {
    			$this->errorCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorMsg", $this->arrayResult )) {
    			$this->errorMsg = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>