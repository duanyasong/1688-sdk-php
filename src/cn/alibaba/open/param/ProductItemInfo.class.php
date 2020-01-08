<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ProductItemInfo extends SDKDomain {

       	
    private $itemAmount;
    
        /**
    * @return 实付金额，单位为元
    */
        public function getItemAmount() {
        return $this->itemAmount;
    }
    
    /**
     * 设置实付金额，单位为元     
     * @param Double $itemAmount     
     * 参数示例：<pre>12.34</pre>     
     * 此参数必填     */
    public function setItemAmount( $itemAmount) {
        $this->itemAmount = $itemAmount;
    }
    
        	
    private $name;
    
        /**
    * @return 商品名称
    */
        public function getName() {
        return $this->name;
    }
    
    /**
     * 设置商品名称     
     * @param String $name     
     * 参数示例：<pre>方便面</pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->name = $name;
    }
    
        	
    private $price;
    
        /**
    * @return 原始单价，以元为单位
    */
        public function getPrice() {
        return $this->price;
    }
    
    /**
     * 设置原始单价，以元为单位     
     * @param Double $price     
     * 参数示例：<pre>12.34</pre>     
     * 此参数必填     */
    public function setPrice( $price) {
        $this->price = $price;
    }
    
        	
    private $productID;
    
        /**
    * @return 产品ID
    */
        public function getProductID() {
        return $this->productID;
    }
    
    /**
     * 设置产品ID     
     * @param Long $productID     
     * 参数示例：<pre>123456</pre>     
     * 此参数必填     */
    public function setProductID( $productID) {
        $this->productID = $productID;
    }
    
        	
    private $productImgUrl;
    
        /**
    * @return 商品图片url
    */
        public function getProductImgUrl() {
        return $this->productImgUrl;
    }
    
    /**
     * 设置商品图片url     
     * @param array include @see String[] $productImgUrl     
     * 参数示例：<pre>["jpg1","jpg2"]</pre>     
     * 此参数必填     */
    public function setProductImgUrl( $productImgUrl) {
        $this->productImgUrl = $productImgUrl;
    }
    
        	
    private $productSnapshotUrl;
    
        /**
    * @return 产品快照url
    */
        public function getProductSnapshotUrl() {
        return $this->productSnapshotUrl;
    }
    
    /**
     * 设置产品快照url     
     * @param String $productSnapshotUrl     
     * 参数示例：<pre>http://123.com</pre>     
     * 此参数必填     */
    public function setProductSnapshotUrl( $productSnapshotUrl) {
        $this->productSnapshotUrl = $productSnapshotUrl;
    }
    
        	
    private $quantity;
    
        /**
    * @return 以unit为单位的数量
    */
        public function getQuantity() {
        return $this->quantity;
    }
    
    /**
     * 设置以unit为单位的数量     
     * @param Long $quantity     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setQuantity( $quantity) {
        $this->quantity = $quantity;
    }
    
        	
    private $refund;
    
        /**
    * @return 退款金额
    */
        public function getRefund() {
        return $this->refund;
    }
    
    /**
     * 设置退款金额     
     * @param Long $refund     
     * 参数示例：<pre>1234</pre>     
     * 此参数必填     */
    public function setRefund( $refund) {
        $this->refund = $refund;
    }
    
        	
    private $skuID;
    
        /**
    * @return skuID
    */
        public function getSkuID() {
        return $this->skuID;
    }
    
    /**
     * 设置skuID     
     * @param Long $skuID     
     * 参数示例：<pre>123456</pre>     
     * 此参数必填     */
    public function setSkuID( $skuID) {
        $this->skuID = $skuID;
    }
    
        	
    private $status;
    
        /**
    * @return 子订单状态
    */
        public function getStatus() {
        return $this->status;
    }
    
    /**
     * 设置子订单状态     
     * @param String $status     
     * 参数示例：<pre>waitsellersend</pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
    }
    
        	
    private $statusStr;
    
        /**
    * @return 子订单状态描述
    */
        public function getStatusStr() {
        return $this->statusStr;
    }
    
    /**
     * 设置子订单状态描述     
     * @param String $statusStr     
     * 参数示例：<pre>等待卖家发货</pre>     
     * 此参数必填     */
    public function setStatusStr( $statusStr) {
        $this->statusStr = $statusStr;
    }
    
        	
    private $subItemID;
    
        /**
    * @return 商品明细条目ID
    */
        public function getSubItemID() {
        return $this->subItemID;
    }
    
    /**
     * 设置商品明细条目ID     
     * @param Long $subItemID     
     * 参数示例：<pre>123456</pre>     
     * 此参数必填     */
    public function setSubItemID( $subItemID) {
        $this->subItemID = $subItemID;
    }
    
        	
    private $type;
    
        /**
    * @return 类型
    */
        public function getType() {
        return $this->type;
    }
    
    /**
     * 设置类型     
     * @param String $type     
     * 参数示例：<pre>common</pre>     
     * 此参数必填     */
    public function setType( $type) {
        $this->type = $type;
    }
    
        	
    private $unit;
    
        /**
    * @return 售卖单位
    */
        public function getUnit() {
        return $this->unit;
    }
    
    /**
     * 设置售卖单位     
     * @param String $unit     
     * 参数示例：<pre>张</pre>     
     * 此参数必填     */
    public function setUnit( $unit) {
        $this->unit = $unit;
    }
    
        	
    private $entryDiscount;
    
        /**
    * @return 订单明细涨价或降价的金额
    */
        public function getEntryDiscount() {
        return $this->entryDiscount;
    }
    
    /**
     * 设置订单明细涨价或降价的金额     
     * @param Long $entryDiscount     
     * 参数示例：<pre>0</pre>     
     * 此参数必填     */
    public function setEntryDiscount( $entryDiscount) {
        $this->entryDiscount = $entryDiscount;
    }
    
        	
    private $specId;
    
        /**
    * @return 订单销售属性ID
    */
        public function getSpecId() {
        return $this->specId;
    }
    
    /**
     * 设置订单销售属性ID     
     * @param String $specId     
     * 参数示例：<pre>asdfgh11</pre>     
     * 此参数必填     */
    public function setSpecId( $specId) {
        $this->specId = $specId;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "itemAmount", $this->stdResult )) {
    				$this->itemAmount = $this->stdResult->{"itemAmount"};
    			}
    			    		    				    			    			if (array_key_exists ( "name", $this->stdResult )) {
    				$this->name = $this->stdResult->{"name"};
    			}
    			    		    				    			    			if (array_key_exists ( "price", $this->stdResult )) {
    				$this->price = $this->stdResult->{"price"};
    			}
    			    		    				    			    			if (array_key_exists ( "productID", $this->stdResult )) {
    				$this->productID = $this->stdResult->{"productID"};
    			}
    			    		    				    			    			if (array_key_exists ( "productImgUrl", $this->stdResult )) {
    				$this->productImgUrl = $this->stdResult->{"productImgUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "productSnapshotUrl", $this->stdResult )) {
    				$this->productSnapshotUrl = $this->stdResult->{"productSnapshotUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "quantity", $this->stdResult )) {
    				$this->quantity = $this->stdResult->{"quantity"};
    			}
    			    		    				    			    			if (array_key_exists ( "refund", $this->stdResult )) {
    				$this->refund = $this->stdResult->{"refund"};
    			}
    			    		    				    			    			if (array_key_exists ( "skuID", $this->stdResult )) {
    				$this->skuID = $this->stdResult->{"skuID"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    				    			    			if (array_key_exists ( "statusStr", $this->stdResult )) {
    				$this->statusStr = $this->stdResult->{"statusStr"};
    			}
    			    		    				    			    			if (array_key_exists ( "subItemID", $this->stdResult )) {
    				$this->subItemID = $this->stdResult->{"subItemID"};
    			}
    			    		    				    			    			if (array_key_exists ( "type", $this->stdResult )) {
    				$this->type = $this->stdResult->{"type"};
    			}
    			    		    				    			    			if (array_key_exists ( "unit", $this->stdResult )) {
    				$this->unit = $this->stdResult->{"unit"};
    			}
    			    		    				    			    			if (array_key_exists ( "entryDiscount", $this->stdResult )) {
    				$this->entryDiscount = $this->stdResult->{"entryDiscount"};
    			}
    			    		    				    			    			if (array_key_exists ( "specId", $this->stdResult )) {
    				$this->specId = $this->stdResult->{"specId"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "itemAmount", $this->arrayResult )) {
    			$this->itemAmount = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "name", $this->arrayResult )) {
    			$this->name = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "price", $this->arrayResult )) {
    			$this->price = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "productID", $this->arrayResult )) {
    			$this->productID = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "productImgUrl", $this->arrayResult )) {
    			$this->productImgUrl = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "productSnapshotUrl", $this->arrayResult )) {
    			$this->productSnapshotUrl = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "quantity", $this->arrayResult )) {
    			$this->quantity = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "refund", $this->arrayResult )) {
    			$this->refund = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "skuID", $this->arrayResult )) {
    			$this->skuID = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "statusStr", $this->arrayResult )) {
    			$this->statusStr = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "subItemID", $this->arrayResult )) {
    			$this->subItemID = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "type", $this->arrayResult )) {
    			$this->type = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "unit", $this->arrayResult )) {
    			$this->unit = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "entryDiscount", $this->arrayResult )) {
    			$this->entryDiscount = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "specId", $this->arrayResult )) {
    			$this->specId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>