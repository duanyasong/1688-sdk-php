<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProcurementApiReturngoodsIntegrationResultCreateReceiveGoodsNoteEntryResult extends SDKDomain {

       	
    private $poOrderEntryId;
    
        /**
    * @return 采购子订单id
    */
        public function getPoOrderEntryId() {
        return $this->poOrderEntryId;
    }
    
    /**
     * 设置采购子订单id     
     * @param Long $poOrderEntryId     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setPoOrderEntryId( $poOrderEntryId) {
        $this->poOrderEntryId = $poOrderEntryId;
    }
    
        	
    private $returnGoodsNoteEntryId;
    
        /**
    * @return 退货子单id
    */
        public function getReturnGoodsNoteEntryId() {
        return $this->returnGoodsNoteEntryId;
    }
    
    /**
     * 设置退货子单id     
     * @param Long $returnGoodsNoteEntryId     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setReturnGoodsNoteEntryId( $returnGoodsNoteEntryId) {
        $this->returnGoodsNoteEntryId = $returnGoodsNoteEntryId;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "poOrderEntryId", $this->stdResult )) {
    				$this->poOrderEntryId = $this->stdResult->{"poOrderEntryId"};
    			}
    			    		    				    			    			if (array_key_exists ( "returnGoodsNoteEntryId", $this->stdResult )) {
    				$this->returnGoodsNoteEntryId = $this->stdResult->{"returnGoodsNoteEntryId"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "poOrderEntryId", $this->arrayResult )) {
    			$this->poOrderEntryId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "returnGoodsNoteEntryId", $this->arrayResult )) {
    			$this->returnGoodsNoteEntryId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>