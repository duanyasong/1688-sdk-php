<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaPreOrderItemCreateParam extends SDKDomain {

       	
    private $remark;
    
        /**
    * @return 备注
    */
        public function getRemark() {
        return $this->remark;
    }
    
    /**
     * 设置备注     
     * @param String $remark     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRemark( $remark) {
        $this->remark = $remark;
    }
    
        	
    private $skuId;
    
        /**
    * @return SKUID，没有SKU的商品可不填
    */
        public function getSkuId() {
        return $this->skuId;
    }
    
    /**
     * 设置SKUID，没有SKU的商品可不填     
     * @param Long $skuId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSkuId( $skuId) {
        $this->skuId = $skuId;
    }
    
        	
    private $offerId;
    
        /**
    * @return 商品ID
    */
        public function getOfferId() {
        return $this->offerId;
    }
    
    /**
     * 设置商品ID     
     * @param Long $offerId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOfferId( $offerId) {
        $this->offerId = $offerId;
    }
    
        	
    private $buyAmount;
    
        /**
    * @return 购买数量
    */
        public function getBuyAmount() {
        return $this->buyAmount;
    }
    
    /**
     * 设置购买数量     
     * @param Long $buyAmount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyAmount( $buyAmount) {
        $this->buyAmount = $buyAmount;
    }
    
        	
    private $auctionPrice;
    
        /**
    * @return 单价，必传，默认为0，单位：分
    */
        public function getAuctionPrice() {
        return $this->auctionPrice;
    }
    
    /**
     * 设置单价，必传，默认为0，单位：分     
     * @param Long $auctionPrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAuctionPrice( $auctionPrice) {
        $this->auctionPrice = $auctionPrice;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "remark", $this->stdResult )) {
    				$this->remark = $this->stdResult->{"remark"};
    			}
    			    		    				    			    			if (array_key_exists ( "skuId", $this->stdResult )) {
    				$this->skuId = $this->stdResult->{"skuId"};
    			}
    			    		    				    			    			if (array_key_exists ( "offerId", $this->stdResult )) {
    				$this->offerId = $this->stdResult->{"offerId"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyAmount", $this->stdResult )) {
    				$this->buyAmount = $this->stdResult->{"buyAmount"};
    			}
    			    		    				    			    			if (array_key_exists ( "auctionPrice", $this->stdResult )) {
    				$this->auctionPrice = $this->stdResult->{"auctionPrice"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "remark", $this->arrayResult )) {
    			$this->remark = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "skuId", $this->arrayResult )) {
    			$this->skuId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "offerId", $this->arrayResult )) {
    			$this->offerId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyAmount", $this->arrayResult )) {
    			$this->buyAmount = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "auctionPrice", $this->arrayResult )) {
    			$this->auctionPrice = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>