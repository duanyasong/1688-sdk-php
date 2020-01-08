<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaOpenplatformTradeQuotationSkuAmount extends SDKDomain {

       	
    private $quoteItemId;
    
        /**
    * @return 报价项ID
    */
        public function getQuoteItemId() {
        return $this->quoteItemId;
    }
    
    /**
     * 设置报价项ID     
     * @param Long $quoteItemId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setQuoteItemId( $quoteItemId) {
        $this->quoteItemId = $quoteItemId;
    }
    
        	
    private $itemCount;
    
        /**
    * @return 下单数量
    */
        public function getItemCount() {
        return $this->itemCount;
    }
    
    /**
     * 设置下单数量     
     * @param Double $itemCount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setItemCount( $itemCount) {
        $this->itemCount = $itemCount;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "quoteItemId", $this->stdResult )) {
    				$this->quoteItemId = $this->stdResult->{"quoteItemId"};
    			}
    			    		    				    			    			if (array_key_exists ( "itemCount", $this->stdResult )) {
    				$this->itemCount = $this->stdResult->{"itemCount"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "quoteItemId", $this->arrayResult )) {
    			$this->quoteItemId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "itemCount", $this->arrayResult )) {
    			$this->itemCount = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>