<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaDistributorFastConsignResult {

        	
    private $itemId;
    
        /**
    * @return 淘宝ItemId
    */
        public function getItemId() {
        return $this->itemId;
    }
    
    /**
     * 设置淘宝ItemId     
     * @param Long $itemId     
          
     * 此参数必填     */
    public function setItemId( $itemId) {
        $this->itemId = $itemId;
    }
    
        	
    private $errorMsg;
    
        /**
    * @return 错误返回信息
    */
        public function getErrorMsg() {
        return $this->errorMsg;
    }
    
    /**
     * 设置错误返回信息     
     * @param String $errorMsg     
          
     * 此参数必填     */
    public function setErrorMsg( $errorMsg) {
        $this->errorMsg = $errorMsg;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "itemId", $this->stdResult )) {
    				$this->itemId = $this->stdResult->{"itemId"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorMsg", $this->stdResult )) {
    				$this->errorMsg = $this->stdResult->{"errorMsg"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "itemId", $this->arrayResult )) {
    			$this->itemId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorMsg", $this->arrayResult )) {
    			$this->errorMsg = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>