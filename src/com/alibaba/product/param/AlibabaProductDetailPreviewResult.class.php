<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProductDetailPreviewResult {

        	
    private $result;
    
        /**
    * @return 渲染后结果，有值则渲染成功，否则渲染失败
    */
        public function getResult() {
        return $this->result;
    }
    
    /**
     * 设置渲染后结果，有值则渲染成功，否则渲染失败     
     * @param String $result     
          
     * 此参数必填     */
    public function setResult( $result) {
        $this->result = $result;
    }
    
        	
    private $errorMsg;
    
        /**
    * @return 错误信息，渲染失败错误原因描述
    */
        public function getErrorMsg() {
        return $this->errorMsg;
    }
    
    /**
     * 设置错误信息，渲染失败错误原因描述     
     * @param String $errorMsg     
          
     * 此参数必填     */
    public function setErrorMsg( $errorMsg) {
        $this->errorMsg = $errorMsg;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "result", $this->stdResult )) {
    				$this->result = $this->stdResult->{"result"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorMsg", $this->stdResult )) {
    				$this->errorMsg = $this->stdResult->{"errorMsg"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "result", $this->arrayResult )) {
    			$this->result = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorMsg", $this->arrayResult )) {
    			$this->errorMsg = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>