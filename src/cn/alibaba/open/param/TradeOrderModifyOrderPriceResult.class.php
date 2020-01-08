<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class TradeOrderModifyOrderPriceResult {

        	
    private $result;
    
        /**
    * @return 修改结果，true 成功，false 失败
    */
        public function getResult() {
        return $this->result;
    }
    
    /**
     * 设置修改结果，true 成功，false 失败     
     * @param Boolean $result     
          
     * 此参数必填     */
    public function setResult( $result) {
        $this->result = $result;
    }
    
        	
    private $resultCode;
    
        /**
    * @return 错误码，指示错误原因
    */
        public function getResultCode() {
        return $this->resultCode;
    }
    
    /**
     * 设置错误码，指示错误原因     
     * @param String $resultCode     
          
     * 此参数必填     */
    public function setResultCode( $resultCode) {
        $this->resultCode = $resultCode;
    }
    
        	
    private $resultMsg;
    
        /**
    * @return 错误原因
    */
        public function getResultMsg() {
        return $this->resultMsg;
    }
    
    /**
     * 设置错误原因     
     * @param String $resultMsg     
          
     * 此参数必填     */
    public function setResultMsg( $resultMsg) {
        $this->resultMsg = $resultMsg;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "result", $this->stdResult )) {
    				$this->result = $this->stdResult->{"result"};
    			}
    			    		    				    			    			if (array_key_exists ( "resultCode", $this->stdResult )) {
    				$this->resultCode = $this->stdResult->{"resultCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "resultMsg", $this->stdResult )) {
    				$this->resultMsg = $this->stdResult->{"resultMsg"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "result", $this->arrayResult )) {
    			$this->result = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "resultCode", $this->arrayResult )) {
    			$this->resultCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "resultMsg", $this->arrayResult )) {
    			$this->resultMsg = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>