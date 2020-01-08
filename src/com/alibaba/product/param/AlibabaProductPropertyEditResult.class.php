<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaProductPropertyEditParam/AlibabaProductProductInfo.class.php');

class AlibabaProductPropertyEditResult {

        	
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
    
        	
    private $errorMsg;
    
        /**
    * @return 错误描述
    */
        public function getErrorMsg() {
        return $this->errorMsg;
    }
    
    /**
     * 设置错误描述     
     * @param String $errorMsg     
          
     * 此参数必填     */
    public function setErrorMsg( $errorMsg) {
        $this->errorMsg = $errorMsg;
    }
    
        	
    private $errorCode;
    
        /**
    * @return 错误信息
    */
        public function getErrorCode() {
        return $this->errorCode;
    }
    
    /**
     * 设置错误信息     
     * @param String $errorCode     
          
     * 此参数必填     */
    public function setErrorCode( $errorCode) {
        $this->errorCode = $errorCode;
    }
    
        	
    private $produtInfo;
    
        /**
    * @return 修改后的商品详情
    */
        public function getProdutInfo() {
        return $this->produtInfo;
    }
    
    /**
     * 设置修改后的商品详情     
     * @param AlibabaProductProductInfo $produtInfo     
          
     * 此参数必填     */
    public function setProdutInfo(AlibabaProductProductInfo $produtInfo) {
        $this->produtInfo = $produtInfo;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorMsg", $this->stdResult )) {
    				$this->errorMsg = $this->stdResult->{"errorMsg"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorCode", $this->stdResult )) {
    				$this->errorCode = $this->stdResult->{"errorCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "produtInfo", $this->stdResult )) {
    				$produtInfoResult=$this->stdResult->{"produtInfo"};
    				$this->produtInfo = new AlibabaProductProductInfo();
    				$this->produtInfo->setStdResult ( $produtInfoResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorMsg", $this->arrayResult )) {
    			$this->errorMsg = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorCode", $this->arrayResult )) {
    			$this->errorCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "produtInfo", $this->arrayResult )) {
    		$produtInfoResult=$arrayResult['${paramType.paramName}'];
    			    			$this->produtInfo = new AlibabaProductProductInfo();
    			    			$this->produtInfo->setStdResult ( $produtInfoResult);
    		}
    		    	    		}

}
?>