<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCaigouMallTradeOfferModel extends SDKDomain {

       	
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
     * 参数示例：<pre>563254748</pre>     
     * 此参数必填     */
    public function setOfferId( $offerId) {
        $this->offerId = $offerId;
    }
    
        	
    private $offerTitle;
    
        /**
    * @return 商品标题
    */
        public function getOfferTitle() {
        return $this->offerTitle;
    }
    
    /**
     * 设置商品标题     
     * @param String $offerTitle     
     * 参数示例：<pre>我是标题</pre>     
     * 此参数必填     */
    public function setOfferTitle( $offerTitle) {
        $this->offerTitle = $offerTitle;
    }
    
        	
    private $subOrderId;
    
        /**
    * @return 子订单ID
    */
        public function getSubOrderId() {
        return $this->subOrderId;
    }
    
    /**
     * 设置子订单ID     
     * @param Long $subOrderId     
     * 参数示例：<pre>43637373</pre>     
     * 此参数必填     */
    public function setSubOrderId( $subOrderId) {
        $this->subOrderId = $subOrderId;
    }
    
        	
    private $productCode;
    
        /**
    * @return 物料编码
    */
        public function getProductCode() {
        return $this->productCode;
    }
    
    /**
     * 设置物料编码     
     * @param String $productCode     
     * 参数示例：<pre>danshi-code</pre>     
     * 此参数必填     */
    public function setProductCode( $productCode) {
        $this->productCode = $productCode;
    }
    
        	
    private $productName;
    
        /**
    * @return 物料名称
    */
        public function getProductName() {
        return $this->productName;
    }
    
    /**
     * 设置物料名称     
     * @param String $productName     
     * 参数示例：<pre>物料编码</pre>     
     * 此参数必填     */
    public function setProductName( $productName) {
        $this->productName = $productName;
    }
    
        	
    private $skuId;
    
        /**
    * @return 规格ID
    */
        public function getSkuId() {
        return $this->skuId;
    }
    
    /**
     * 设置规格ID     
     * @param Long $skuId     
     * 参数示例：<pre>353636</pre>     
     * 此参数必填     */
    public function setSkuId( $skuId) {
        $this->skuId = $skuId;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "offerId", $this->stdResult )) {
    				$this->offerId = $this->stdResult->{"offerId"};
    			}
    			    		    				    			    			if (array_key_exists ( "offerTitle", $this->stdResult )) {
    				$this->offerTitle = $this->stdResult->{"offerTitle"};
    			}
    			    		    				    			    			if (array_key_exists ( "subOrderId", $this->stdResult )) {
    				$this->subOrderId = $this->stdResult->{"subOrderId"};
    			}
    			    		    				    			    			if (array_key_exists ( "productCode", $this->stdResult )) {
    				$this->productCode = $this->stdResult->{"productCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "productName", $this->stdResult )) {
    				$this->productName = $this->stdResult->{"productName"};
    			}
    			    		    				    			    			if (array_key_exists ( "skuId", $this->stdResult )) {
    				$this->skuId = $this->stdResult->{"skuId"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "offerId", $this->arrayResult )) {
    			$this->offerId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "offerTitle", $this->arrayResult )) {
    			$this->offerTitle = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "subOrderId", $this->arrayResult )) {
    			$this->subOrderId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "productCode", $this->arrayResult )) {
    			$this->productCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "productName", $this->arrayResult )) {
    			$this->productName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "skuId", $this->arrayResult )) {
    			$this->skuId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>