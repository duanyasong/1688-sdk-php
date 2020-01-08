<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaBulksettlementOpBulkSettlementSubOrderInfo extends SDKDomain {

       	
    private $orderEntryId;
    
        /**
    * @return 子订单号
    */
        public function getOrderEntryId() {
        return $this->orderEntryId;
    }
    
    /**
     * 设置子订单号     
     * @param String $orderEntryId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderEntryId( $orderEntryId) {
        $this->orderEntryId = $orderEntryId;
    }
    
        	
    private $quantity;
    
        /**
    * @return 商品数量
    */
        public function getQuantity() {
        return $this->quantity;
    }
    
    /**
     * 设置商品数量     
     * @param Long $quantity     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setQuantity( $quantity) {
        $this->quantity = $quantity;
    }
    
        	
    private $realQuantity;
    
        /**
    * @return 支持小数的商品数量
    */
        public function getRealQuantity() {
        return $this->realQuantity;
    }
    
    /**
     * 设置支持小数的商品数量     
     * @param Double $realQuantity     
     * 参数示例：<pre>0.001</pre>     
     * 此参数必填     */
    public function setRealQuantity( $realQuantity) {
        $this->realQuantity = $realQuantity;
    }
    
        	
    private $price;
    
        /**
    * @return 商品价格
    */
        public function getPrice() {
        return $this->price;
    }
    
    /**
     * 设置商品价格     
     * @param Double $price     
     * 参数示例：<pre>1.0</pre>     
     * 此参数必填     */
    public function setPrice( $price) {
        $this->price = $price;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "orderEntryId", $this->stdResult )) {
    				$this->orderEntryId = $this->stdResult->{"orderEntryId"};
    			}
    			    		    				    			    			if (array_key_exists ( "quantity", $this->stdResult )) {
    				$this->quantity = $this->stdResult->{"quantity"};
    			}
    			    		    				    			    			if (array_key_exists ( "realQuantity", $this->stdResult )) {
    				$this->realQuantity = $this->stdResult->{"realQuantity"};
    			}
    			    		    				    			    			if (array_key_exists ( "price", $this->stdResult )) {
    				$this->price = $this->stdResult->{"price"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "orderEntryId", $this->arrayResult )) {
    			$this->orderEntryId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "quantity", $this->arrayResult )) {
    			$this->quantity = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "realQuantity", $this->arrayResult )) {
    			$this->realQuantity = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "price", $this->arrayResult )) {
    			$this->price = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>