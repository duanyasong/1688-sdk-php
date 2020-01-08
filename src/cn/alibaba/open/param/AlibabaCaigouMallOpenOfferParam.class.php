<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCaigouMallOpenOfferParam extends SDKDomain {

       	
    private $offerId;
    
        /**
    * @return offerId
    */
        public function getOfferId() {
        return $this->offerId;
    }
    
    /**
     * 设置offerId     
     * @param Long $offerId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOfferId( $offerId) {
        $this->offerId = $offerId;
    }
    
        	
    private $quantity;
    
        /**
    * @return 下单商品数量
    */
        public function getQuantity() {
        return $this->quantity;
    }
    
    /**
     * 设置下单商品数量     
     * @param Long $quantity     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setQuantity( $quantity) {
        $this->quantity = $quantity;
    }
    
        	
    private $buyerMessaage;
    
        /**
    * @return 买家留言
    */
        public function getBuyerMessaage() {
        return $this->buyerMessaage;
    }
    
    /**
     * 设置买家留言     
     * @param String $buyerMessaage     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerMessaage( $buyerMessaage) {
        $this->buyerMessaage = $buyerMessaage;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "offerId", $this->stdResult )) {
    				$this->offerId = $this->stdResult->{"offerId"};
    			}
    			    		    				    			    			if (array_key_exists ( "quantity", $this->stdResult )) {
    				$this->quantity = $this->stdResult->{"quantity"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerMessaage", $this->stdResult )) {
    				$this->buyerMessaage = $this->stdResult->{"buyerMessaage"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "offerId", $this->arrayResult )) {
    			$this->offerId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "quantity", $this->arrayResult )) {
    			$this->quantity = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerMessaage", $this->arrayResult )) {
    			$this->buyerMessaage = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>