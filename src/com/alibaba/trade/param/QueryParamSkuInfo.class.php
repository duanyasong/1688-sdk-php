<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class QueryParamSkuInfo extends SDKDomain {

       	
    private $specId;
    
        /**
    * @return 购买的规格ID，无规格商品可不填
    */
        public function getSpecId() {
        return $this->specId;
    }
    
    /**
     * 设置购买的规格ID，无规格商品可不填     
     * @param String $specId     
     * 参数示例：<pre>111asd121313411df</pre>     
     * 此参数必填     */
    public function setSpecId( $specId) {
        $this->specId = $specId;
    }
    
        	
    private $quantity;
    
        /**
    * @return 购买数量
    */
        public function getQuantity() {
        return $this->quantity;
    }
    
    /**
     * 设置购买数量     
     * @param Double $quantity     
     * 参数示例：<pre>10</pre>     
     * 此参数必填     */
    public function setQuantity( $quantity) {
        $this->quantity = $quantity;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "specId", $this->stdResult )) {
    				$this->specId = $this->stdResult->{"specId"};
    			}
    			    		    				    			    			if (array_key_exists ( "quantity", $this->stdResult )) {
    				$this->quantity = $this->stdResult->{"quantity"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "specId", $this->arrayResult )) {
    			$this->specId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "quantity", $this->arrayResult )) {
    			$this->quantity = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>