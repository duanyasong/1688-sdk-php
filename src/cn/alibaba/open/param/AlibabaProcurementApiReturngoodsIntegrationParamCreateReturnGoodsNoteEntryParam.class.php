<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProcurementApiReturngoodsIntegrationParamCreateReturnGoodsNoteEntryParam extends SDKDomain {

       	
    private $entryId;
    
        /**
    * @return 采购子订单id
    */
        public function getEntryId() {
        return $this->entryId;
    }
    
    /**
     * 设置采购子订单id     
     * @param Long $entryId     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setEntryId( $entryId) {
        $this->entryId = $entryId;
    }
    
        	
    private $quantity;
    
        /**
    * @return 退货量
    */
        public function getQuantity() {
        return $this->quantity;
    }
    
    /**
     * 设置退货量     
     * @param BigDecimal $quantity     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setQuantity( $quantity) {
        $this->quantity = $quantity;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "entryId", $this->stdResult )) {
    				$this->entryId = $this->stdResult->{"entryId"};
    			}
    			    		    				    			    			if (array_key_exists ( "quantity", $this->stdResult )) {
    				$this->quantity = $this->stdResult->{"quantity"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "entryId", $this->arrayResult )) {
    			$this->entryId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "quantity", $this->arrayResult )) {
    			$this->quantity = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>