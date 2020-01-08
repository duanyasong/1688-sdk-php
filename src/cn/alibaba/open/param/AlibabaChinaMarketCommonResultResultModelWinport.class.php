<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaMobileWinportGetParam/AlibabaChinaMarketSmartcityModelWinport.class.php');

class AlibabaChinaMarketCommonResultResultModelWinport extends SDKDomain {

       	
    private $errorMessage;
    
        /**
    * @return test
    */
        public function getErrorMessage() {
        return $this->errorMessage;
    }
    
    /**
     * 设置test     
     * @param String $errorMessage     
     * 参数示例：<pre>test</pre>     
     * 此参数必填     */
    public function setErrorMessage( $errorMessage) {
        $this->errorMessage = $errorMessage;
    }
    
        	
    private $winport;
    
        /**
    * @return test
    */
        public function getWinport() {
        return $this->winport;
    }
    
    /**
     * 设置test     
     * @param AlibabaChinaMarketSmartcityModelWinport $winport     
     * 参数示例：<pre>test</pre>     
     * 此参数必填     */
    public function setWinport(AlibabaChinaMarketSmartcityModelWinport $winport) {
        $this->winport = $winport;
    }
    
        	
    private $errorCode;
    
        /**
    * @return test
    */
        public function getErrorCode() {
        return $this->errorCode;
    }
    
    /**
     * 设置test     
     * @param String $errorCode     
     * 参数示例：<pre>test</pre>     
     * 此参数必填     */
    public function setErrorCode( $errorCode) {
        $this->errorCode = $errorCode;
    }
    
        	
    private $success;
    
        /**
    * @return test
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置test     
     * @param Boolean $success     
     * 参数示例：<pre>test</pre>     
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "errorMessage", $this->stdResult )) {
    				$this->errorMessage = $this->stdResult->{"errorMessage"};
    			}
    			    		    				    			    			if (array_key_exists ( "winport", $this->stdResult )) {
    				$winportResult=$this->stdResult->{"winport"};
    				$this->winport = new AlibabaChinaMarketSmartcityModelWinport();
    				$this->winport->setStdResult ( $winportResult);
    			}
    			    		    				    			    			if (array_key_exists ( "errorCode", $this->stdResult )) {
    				$this->errorCode = $this->stdResult->{"errorCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "errorMessage", $this->arrayResult )) {
    			$this->errorMessage = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "winport", $this->arrayResult )) {
    		$winportResult=$arrayResult['${paramType.paramName}'];
    			    			$this->winport = new AlibabaChinaMarketSmartcityModelWinport();
    			    			$this->winport->setStdResult ( $winportResult);
    		}
    		    	    			    		    			if (array_key_exists ( "errorCode", $this->arrayResult )) {
    			$this->errorCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>