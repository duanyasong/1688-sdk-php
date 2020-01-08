<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaTradeSaleproxyCreateOrderParam/AlibabaOpenplatformTradeBizOrderCommitResult.class.php');

class AlibabaOpenplatformTradeKeyValuePairBizOrderCommitResult extends SDKDomain {

       	
    private $key;
    
        /**
    * @return key
    */
        public function getKey() {
        return $this->key;
    }
    
    /**
     * 设置key     
     * @param String $key     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setKey( $key) {
        $this->key = $key;
    }
    
        	
    private $value;
    
        /**
    * @return value
    */
        public function getValue() {
        return $this->value;
    }
    
    /**
     * 设置value     
     * @param AlibabaOpenplatformTradeBizOrderCommitResult $value     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setValue(AlibabaOpenplatformTradeBizOrderCommitResult $value) {
        $this->value = $value;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "key", $this->stdResult )) {
    				$this->key = $this->stdResult->{"key"};
    			}
    			    		    				    			    			if (array_key_exists ( "value", $this->stdResult )) {
    				$valueResult=$this->stdResult->{"value"};
    				$this->value = new AlibabaOpenplatformTradeBizOrderCommitResult();
    				$this->value->setStdResult ( $valueResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "key", $this->arrayResult )) {
    			$this->key = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "value", $this->arrayResult )) {
    		$valueResult=$arrayResult['${paramType.paramName}'];
    			    			$this->value = new AlibabaOpenplatformTradeBizOrderCommitResult();
    			    			$this->value->setStdResult ( $valueResult);
    		}
    		    	    		}
 
   
}
?>