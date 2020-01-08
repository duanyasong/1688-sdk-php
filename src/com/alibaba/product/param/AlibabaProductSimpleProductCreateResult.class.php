<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProductSimpleProductCreateResult extends SDKDomain {

       	
    private $offerId;
    
        /**
    * @return 创建的offerId
    */
        public function getOfferId() {
        return $this->offerId;
    }
    
    /**
     * 设置创建的offerId     
     * @param String $offerId     
     * 参数示例：<pre>12124232</pre>     
     * 此参数必填     */
    public function setOfferId( $offerId) {
        $this->offerId = $offerId;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "offerId", $this->stdResult )) {
    				$this->offerId = $this->stdResult->{"offerId"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "offerId", $this->arrayResult )) {
    			$this->offerId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>