<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaBulksettlementOpBulkSettlementQueryReceiveNoteListParam/AlibabaBulksettlementOpReceiveNoteModels.class.php');

class AlibabaBulksettlementOpBulkSettlementQueryReceiveNoteListResult {

        	
    private $result;
    
        /**
    * @return 
    */
        public function getResult() {
        return $this->result;
    }
    
    /**
     * 设置     
     * @param AlibabaBulksettlementOpReceiveNoteModels $result     
          
     * 此参数必填     */
    public function setResult(AlibabaBulksettlementOpReceiveNoteModels $result) {
        $this->result = $result;
    }
    
        	
    private $success;
    
        /**
    * @return 
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置     
     * @param String $success     
          
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
        	
    private $errorCode;
    
        /**
    * @return 
    */
        public function getErrorCode() {
        return $this->errorCode;
    }
    
    /**
     * 设置     
     * @param String $errorCode     
          
     * 此参数必填     */
    public function setErrorCode( $errorCode) {
        $this->errorCode = $errorCode;
    }
    
        	
    private $errorMessage;
    
        /**
    * @return 
    */
        public function getErrorMessage() {
        return $this->errorMessage;
    }
    
    /**
     * 设置     
     * @param String $errorMessage     
          
     * 此参数必填     */
    public function setErrorMessage( $errorMessage) {
        $this->errorMessage = $errorMessage;
    }
    
        	
    private $extErrorMessage;
    
        /**
    * @return 
    */
        public function getExtErrorMessage() {
        return $this->extErrorMessage;
    }
    
    /**
     * 设置     
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
    				$this->result = new AlibabaBulksettlementOpReceiveNoteModels();
    				$this->result->setStdResult ( $resultResult);
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
    			    		    				    			    			if (array_key_exists ( "extErrorMessage", $this->stdResult )) {
    				$this->extErrorMessage = $this->stdResult->{"extErrorMessage"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "result", $this->arrayResult )) {
    		$resultResult=$arrayResult['${paramType.paramName}'];
    			    			$this->result = new AlibabaBulksettlementOpReceiveNoteModels();
    			    			$this->result->setStdResult ( $resultResult);
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
    		    	    			    		    			if (array_key_exists ( "extErrorMessage", $this->arrayResult )) {
    			$this->extErrorMessage = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>