<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCommonMoney extends SDKDomain {

       	
    private $value;
    
        /**
    * @return 钱的值，比如1.2
    */
        public function getValue() {
        return $this->value;
    }
    
    /**
     * 设置钱的值，比如1.2     
     * @param String $value     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setValue( $value) {
        $this->value = $value;
    }
    
        	
    private $currency;
    
        /**
    * @return 货币
    */
        public function getCurrency() {
        return $this->currency;
    }
    
    /**
     * 设置货币     
     * @param String $currency     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCurrency( $currency) {
        $this->currency = $currency;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "value", $this->stdResult )) {
    				$this->value = $this->stdResult->{"value"};
    			}
    			    		    				    			    			if (array_key_exists ( "currency", $this->stdResult )) {
    				$this->currency = $this->stdResult->{"currency"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "value", $this->arrayResult )) {
    			$this->value = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "currency", $this->arrayResult )) {
    			$this->currency = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>