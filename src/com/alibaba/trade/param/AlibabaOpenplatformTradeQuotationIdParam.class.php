<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaTradeQuotationOrderCreateParam/AlibabaOpenplatformTradeQuotationSkuAmount.class.php');

class AlibabaOpenplatformTradeQuotationIdParam extends SDKDomain {

       	
    private $buyerMemberId;
    
        /**
    * @return 采购商 memberId
    */
        public function getBuyerMemberId() {
        return $this->buyerMemberId;
    }
    
    /**
     * 设置采购商 memberId     
     * @param String $buyerMemberId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerMemberId( $buyerMemberId) {
        $this->buyerMemberId = $buyerMemberId;
    }
    
        	
    private $purchaseNoteId;
    
        /**
    * @return 询价单Id（选填）
    */
        public function getPurchaseNoteId() {
        return $this->purchaseNoteId;
    }
    
    /**
     * 设置询价单Id（选填）     
     * @param Long $purchaseNoteId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPurchaseNoteId( $purchaseNoteId) {
        $this->purchaseNoteId = $purchaseNoteId;
    }
    
        	
    private $quoteItemIds;
    
        /**
    * @return 报价项id,指定报价项下单时必填
    */
        public function getQuoteItemIds() {
        return $this->quoteItemIds;
    }
    
    /**
     * 设置报价项id,指定报价项下单时必填     
     * @param array include @see Long[] $quoteItemIds     
     * 参数示例：<pre>[63540081872,63540071872,63540061872,63540051872]</pre>     
     * 此参数必填     */
    public function setQuoteItemIds( $quoteItemIds) {
        $this->quoteItemIds = $quoteItemIds;
    }
    
        	
    private $supplyNoteId;
    
        /**
    * @return 报价单/投标单ID（必填）
    */
        public function getSupplyNoteId() {
        return $this->supplyNoteId;
    }
    
    /**
     * 设置报价单/投标单ID（必填）     
     * @param String $supplyNoteId     
     * 参数示例：<pre>38630021872</pre>     
     * 此参数必填     */
    public function setSupplyNoteId( $supplyNoteId) {
        $this->supplyNoteId = $supplyNoteId;
    }
    
        	
    private $skuAmountList;
    
        /**
    * @return 采购商填写的采购量
    */
        public function getSkuAmountList() {
        return $this->skuAmountList;
    }
    
    /**
     * 设置采购商填写的采购量     
     * @param array include @see AlibabaOpenplatformTradeQuotationSkuAmount[] $skuAmountList     
     * 参数示例：<pre>[{"quoteItemId":63540051872,"itemCount":100},{"quoteItemId":63540061872,"itemCount":100}]</pre>     
     * 此参数必填     */
    public function setSkuAmountList(AlibabaOpenplatformTradeQuotationSkuAmount $skuAmountList) {
        $this->skuAmountList = $skuAmountList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "buyerMemberId", $this->stdResult )) {
    				$this->buyerMemberId = $this->stdResult->{"buyerMemberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "purchaseNoteId", $this->stdResult )) {
    				$this->purchaseNoteId = $this->stdResult->{"purchaseNoteId"};
    			}
    			    		    				    			    			if (array_key_exists ( "quoteItemIds", $this->stdResult )) {
    				$this->quoteItemIds = $this->stdResult->{"quoteItemIds"};
    			}
    			    		    				    			    			if (array_key_exists ( "supplyNoteId", $this->stdResult )) {
    				$this->supplyNoteId = $this->stdResult->{"supplyNoteId"};
    			}
    			    		    				    			    			if (array_key_exists ( "skuAmountList", $this->stdResult )) {
    			$skuAmountListResult=$this->stdResult->{"skuAmountList"};
    				$object = json_decode ( json_encode ( $skuAmountListResult ), true );
					$this->skuAmountList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaOpenplatformTradeQuotationSkuAmountResult=new AlibabaOpenplatformTradeQuotationSkuAmount();
						$AlibabaOpenplatformTradeQuotationSkuAmountResult->setArrayResult($arrayobject );
						$this->skuAmountList [$i] = $AlibabaOpenplatformTradeQuotationSkuAmountResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "buyerMemberId", $this->arrayResult )) {
    			$this->buyerMemberId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "purchaseNoteId", $this->arrayResult )) {
    			$this->purchaseNoteId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "quoteItemIds", $this->arrayResult )) {
    			$this->quoteItemIds = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "supplyNoteId", $this->arrayResult )) {
    			$this->supplyNoteId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "skuAmountList", $this->arrayResult )) {
    		$skuAmountListResult=$arrayResult['${paramType.paramName}'];
    			$this->skuAmountList = new AlibabaOpenplatformTradeQuotationSkuAmount();
    			$this->skuAmountList->setStdResult ( $skuAmountListResult);
    		}
    		    	    		}
 
   
}
?>