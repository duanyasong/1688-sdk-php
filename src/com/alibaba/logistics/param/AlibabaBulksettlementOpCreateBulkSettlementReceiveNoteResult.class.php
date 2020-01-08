<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaBulksettlementOpCreateBulkSettlementReceiveNoteParam/AlibabaBulksettlementOpReceiveGoodsResult.class.php');

class AlibabaBulksettlementOpCreateBulkSettlementReceiveNoteResult {

        	
    private $result;
    
        /**
    * @return 处理结果
    */
        public function getResult() {
        return $this->result;
    }
    
    /**
     * 设置处理结果     
     * @param AlibabaBulksettlementOpReceiveGoodsResult $result     
          
     * 此参数必填     */
    public function setResult(AlibabaBulksettlementOpReceiveGoodsResult $result) {
        $this->result = $result;
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
    
        	
    private $errorMesage;
    
        /**
    * @return 错误描述
    */
        public function getErrorMesage() {
        return $this->errorMesage;
    }
    
    /**
     * 设置错误描述     
     * @param String $errorMesage     
          
     * 此参数必填     */
    public function setErrorMesage( $errorMesage) {
        $this->errorMesage = $errorMesage;
    }
    
        	
    private $extErrorMessage;
    
        /**
    * @return 扩展错误描述
    */
        public function getExtErrorMessage() {
        return $this->extErrorMessage;
    }
    
    /**
     * 设置扩展错误描述     
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