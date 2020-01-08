<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaBulksettlementOpBulkSettlementReceiveGoodsParam/AlibabaBulksettlementOpReceiveGoodsResult.class.php');

class AlibabaBulksettlementOpBulkSettlementReceiveGoodsResult {

        	
    private $result;
    
        /**
    * @return 结果数据
    */
        public function getResult() {
        return $this->result;
    }
    
    /**
     * 设置结果数据     
     * @param AlibabaBulksettlementOpReceiveGoodsResult $result     
          
     * 此参数必填     */
    public function setResult(AlibabaBulksettlementOpReceiveGoodsResult $result) {
        $this->result = $result;
    }
    
        	
    private $errorCode;
    
        /**
    * @return 错误代码
    */
        public function getErrorCode() {
        return $this->errorCode;
    }
    
    /**
     * 设置错误代码     
     * @param String $errorCode     
          
     * 此参数必填     */
    public function setErrorCode( $errorCode) {
        $this->errorCode = $errorCode;
    }
    
        	
    private $errorMesage;
    
        /**
    * @return 错误消息
    */
        public function getErrorMesage() {
        return $this->errorMesage;
    }
    
    /**
     * 设置错误消息     
     * @param String $errorMesage     
          
     * 此参数必填     */
    public function setErrorMesage( $errorMesage) {
        $this->errorMesage = $errorMesage;
    }
    
        	
    private $extErrorMessage;
    
        /**
    * @return 外部错误消息
    */
        public function getExtErrorMessage() {
        return $this->extErrorMessage;
    }
    
    /**
     * 设置外部错误消息     
     * @param String $extErrorMessage     
          
     * 此参数必填     */
    public function setExtErrorMessage( $extErrorMessage) {
        $this->extErrorMessage = $extErrorMessage;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "result", $this->stdResult )) {
    				$resultResult=$this->stdResult->{"result"};
    				$this->result = new AlibabaBulksettlementOpReceiveGoodsResult();
    				$this->result->setStdResult ( $resultResult);
    			}
    			    		    				    			    			if (array_key_exists ( "errorCode", $this->stdResult )) {
    				$this->errorCode = $this->stdResult->{"errorCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorMesage", $this->stdResult )) {
    				$this->errorMesage = $this->stdResult->{"errorMesage"};
    			}
    			    		    				    			    			if (array_key_exists ( "extErrorMessage", $this->stdResult )) {
    				$this->extErrorMessage = $this->stdResult->{"extErrorMessage"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "result", $this->arrayResult )) {
    		$resultResult=$arrayResult['${paramType.paramName}'];
    			    			$this->result = new AlibabaBulksettlementOpReceiveGoodsResult();
    			    			$this->result->setStdResult ( $resultResult);
    		}
    		    	    			    		    			if (array_key_exists ( "errorCode", $this->arrayResult )) {
    			$this->errorCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorMesage", $this->arrayResult )) {
    			$this->errorMesage = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "extErrorMessage", $this->arrayResult )) {
    			$this->extErrorMessage = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>