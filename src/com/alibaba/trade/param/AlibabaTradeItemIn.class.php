<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaProductGetBySellerCargoNumberParam/AlibabaProductItemID.class.php');
include_once ('AlibabaProductGetBySellerCargoNumberParam/AlibabaProductItemDetail.class.php');
include_once ('AlibabaProductGetBySellerCargoNumberParam/AlibabaCommonMoney.class.php');
include_once ('AlibabaProductGetBySellerCargoNumberParam/AlibabaProductItemAttribute.class.php');

class AlibabaTradeItemIn extends SDKDomain {

       	
    private $quantity;
    
        /**
    * @return 
    */
        public function getQuantity() {
        return $this->quantity;
    }
    
    /**
     * 设置     
     * @param Float $quantity     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setQuantity( $quantity) {
        $this->quantity = $quantity;
    }
    
        	
    private $itemID;
    
        /**
    * @return 
    */
        public function getItemID() {
        return $this->itemID;
    }
    
    /**
     * 设置     
     * @param AlibabaProductItemID $itemID     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setItemID(AlibabaProductItemID $itemID) {
        $this->itemID = $itemID;
    }
    
        	
    private $itemDetail;
    
        /**
    * @return 
    */
        public function getItemDetail() {
        return $this->itemDetail;
    }
    
    /**
     * 设置     
     * @param AlibabaProductItemDetail $itemDetail     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setItemDetail(AlibabaProductItemDetail $itemDetail) {
        $this->itemDetail = $itemDetail;
    }
    
        	
    private $itemInFee;
    
        /**
    * @return 
    */
        public function getItemInFee() {
        return $this->itemInFee;
    }
    
    /**
     * 设置     
     * @param AlibabaCommonMoney $itemInFee     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setItemInFee(AlibabaCommonMoney $itemInFee) {
        $this->itemInFee = $itemInFee;
    }
    
        	
    private $skuInfos;
    
        /**
    * @return 
    */
        public function getSkuInfos() {
        return $this->skuInfos;
    }
    
    /**
     * 设置     
     * @param array include @see AlibabaProductItemAttribute[] $skuInfos     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSkuInfos(AlibabaProductItemAttribute $skuInfos) {
        $this->skuInfos = $skuInfos;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "quantity", $this->stdResult )) {
    				$this->quantity = $this->stdResult->{"quantity"};
    			}
    			    		    				    			    			if (array_key_exists ( "itemID", $this->stdResult )) {
    				$itemIDResult=$this->stdResult->{"itemID"};
    				$this->itemID = new AlibabaProductItemID();
    				$this->itemID->setStdResult ( $itemIDResult);
    			}
    			    		    				    			    			if (array_key_exists ( "itemDetail", $this->stdResult )) {
    				$itemDetailResult=$this->stdResult->{"itemDetail"};
    				$this->itemDetail = new AlibabaProductItemDetail();
    				$this->itemDetail->setStdResult ( $itemDetailResult);
    			}
    			    		    				    			    			if (array_key_exists ( "itemInFee", $this->stdResult )) {
    				$itemInFeeResult=$this->stdResult->{"itemInFee"};
    				$this->itemInFee = new AlibabaCommonMoney();
    				$this->itemInFee->setStdResult ( $itemInFeeResult);
    			}
    			    		    				    			    			if (array_key_exists ( "skuInfos", $this->stdResult )) {
    			$skuInfosResult=$this->stdResult->{"skuInfos"};
    				$object = json_decode ( json_encode ( $skuInfosResult ), true );
					$this->skuInfos = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaProductItemAttributeResult=new AlibabaProductItemAttribute();
						$AlibabaProductItemAttributeResult->setArrayResult($arrayobject );
						$this->skuInfos [$i] = $AlibabaProductItemAttributeResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "quantity", $this->arrayResult )) {
    			$this->quantity = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "itemID", $this->arrayResult )) {
    		$itemIDResult=$arrayResult['${paramType.paramName}'];
    			    			$this->itemID = new AlibabaProductItemID();
    			    			$this->itemID->setStdResult ( $itemIDResult);
    		}
    		    	    			    		    		if (array_key_exists ( "itemDetail", $this->arrayResult )) {
    		$itemDetailResult=$arrayResult['${paramType.paramName}'];
    			    			$this->itemDetail = new AlibabaProductItemDetail();
    			    			$this->itemDetail->setStdResult ( $itemDetailResult);
    		}
    		    	    			    		    		if (array_key_exists ( "itemInFee", $this->arrayResult )) {
    		$itemInFeeResult=$arrayResult['${paramType.paramName}'];
    			    			$this->itemInFee = new AlibabaCommonMoney();
    			    			$this->itemInFee->setStdResult ( $itemInFeeResult);
    		}
    		    	    			    		    		if (array_key_exists ( "skuInfos", $this->arrayResult )) {
    		$skuInfosResult=$arrayResult['${paramType.paramName}'];
    			$this->skuInfos = new AlibabaProductItemAttribute();
    			$this->skuInfos->setStdResult ( $skuInfosResult);
    		}
    		    	    		}
 
   
}
?>