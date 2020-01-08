<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaProductMicroSupplyGetParam/AlibabaProductProductInfo.class.php');

class AlibabaProductMicroSupplyGetResult {

        	
    private $product;
    
        /**
    * @return 商品信息
    */
        public function getProduct() {
        return $this->product;
    }
    
    /**
     * 设置商品信息     
     * @param AlibabaProductProductInfo $product     
          
     * 此参数必填     */
    public function setProduct(AlibabaProductProductInfo $product) {
        $this->product = $product;
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
    
        	
    private $errorCode;
    
        /**
    * @return 错误码：400：客户请求参数问题，500：服务端问题
    */
        public function getErrorCode() {
        return $this->errorCode;
    }
    
    /**
     * 设置错误码：400：客户请求参数问题，500：服务端问题     
     * @param String $errorCode     
          
     * 此参数必填     */
    public function setErrorCode( $errorCode) {
        $this->errorCode = $errorCode;
    }
    
        	
    private $errorMessage;
    
        /**
    * @return 错误信息
    */
        public function getErrorMessage() {
        return $this->errorMessage;
    }
    
    /**
     * 设置错误信息     
     * @param String $errorMessage     
          
     * 此参数必填     */
    public function setErrorMessage( $errorMessage) {
        $this->errorMessage = $errorMessage;
    }
    
        	
    private $shareInfo;
    
        /**
    * @return 微供转发文案
    */
        public function getShareInfo() {
        return $this->shareInfo;
    }
    
    /**
     * 设置微供转发文案     
     * @param String $shareInfo     
          
     * 此参数必填     */
    public function setShareInfo( $shareInfo) {
        $this->shareInfo = $shareInfo;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "product", $this->stdResult )) {
    				$productResult=$this->stdResult->{"product"};
    				$this->product = new AlibabaProductProductInfo();
    				$this->product->setStdResult ( $productResult);
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorCode", $this->stdResult )) {
    				$this->errorCode = $this->stdResult->{"errorCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorMessage", $this->stdResult )) {
    				$this->errorMessage = $this->stdResult->{"errorMessage"};
    			}
    			    		    				    			    			if (array_key_exists ( "shareInfo", $this->stdResult )) {
    				$this->shareInfo = $this->stdResult->{"shareInfo"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "product", $this->arrayResult )) {
    		$productResult=$arrayResult['${paramType.paramName}'];
    			    			$this->product = new AlibabaProductProductInfo();
    			    			$this->product->setStdResult ( $productResult);
    		}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorCode", $this->arrayResult )) {
    			$this->errorCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorMessage", $this->arrayResult )) {
    			$this->errorMessage = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "shareInfo", $this->arrayResult )) {
    			$this->shareInfo = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>