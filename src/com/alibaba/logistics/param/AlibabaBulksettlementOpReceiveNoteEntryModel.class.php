<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaBulksettlementOpCreateBulkSettlementReceiveNoteParam/AlibabaBulksettlementOpSpecItem.class.php');
include_once ('AlibabaBulksettlementOpCreateBulkSettlementReceiveNoteParam/AlibabaBulksettlementOpQuantityModel.class.php');

class AlibabaBulksettlementOpReceiveNoteEntryModel extends SDKDomain {

       	
    private $id;
    
        /**
    * @return 收货子单id
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置收货子单id     
     * @param Long $id     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $receiveId;
    
        /**
    * @return 收货单id
    */
        public function getReceiveId() {
        return $this->receiveId;
    }
    
    /**
     * 设置收货单id     
     * @param Long $receiveId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setReceiveId( $receiveId) {
        $this->receiveId = $receiveId;
    }
    
        	
    private $statusInfo;
    
        /**
    * @return 收货子单状态
    */
        public function getStatusInfo() {
        return $this->statusInfo;
    }
    
    /**
     * 设置收货子单状态     
     * @param String $statusInfo     
     * 参数示例：<pre>1 待发起结算
2 已发起结算</pre>     
     * 此参数必填     */
    public function setStatusInfo( $statusInfo) {
        $this->statusInfo = $statusInfo;
    }
    
        	
    private $settlementOrderId;
    
        /**
    * @return 结算单id
    */
        public function getSettlementOrderId() {
        return $this->settlementOrderId;
    }
    
    /**
     * 设置结算单id     
     * @param Long $settlementOrderId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSettlementOrderId( $settlementOrderId) {
        $this->settlementOrderId = $settlementOrderId;
    }
    
        	
    private $gmtCreate;
    
        /**
    * @return 创建时间
    */
        public function getGmtCreate() {
        return $this->gmtCreate;
    }
    
    /**
     * 设置创建时间     
     * @param Date $gmtCreate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtCreate( $gmtCreate) {
        $this->gmtCreate = $gmtCreate;
    }
    
        	
    private $gmtModified;
    
        /**
    * @return 修改时间
    */
        public function getGmtModified() {
        return $this->gmtModified;
    }
    
    /**
     * 设置修改时间     
     * @param Date $gmtModified     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtModified( $gmtModified) {
        $this->gmtModified = $gmtModified;
    }
    
        	
    private $endTime;
    
        /**
    * @return 发起结算时间
    */
        public function getEndTime() {
        return $this->endTime;
    }
    
    /**
     * 设置发起结算时间     
     * @param Date $endTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setEndTime( $endTime) {
        $this->endTime = $endTime;
    }
    
        	
    private $orderId;
    
        /**
    * @return 主订单号
    */
        public function getOrderId() {
        return $this->orderId;
    }
    
    /**
     * 设置主订单号     
     * @param Long $orderId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderId( $orderId) {
        $this->orderId = $orderId;
    }
    
        	
    private $orderEntryId;
    
        /**
    * @return 子订单号
    */
        public function getOrderEntryId() {
        return $this->orderEntryId;
    }
    
    /**
     * 设置子订单号     
     * @param Long $orderEntryId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderEntryId( $orderEntryId) {
        $this->orderEntryId = $orderEntryId;
    }
    
        	
    private $orderSourceType;
    
        /**
    * @return 该订单明细订购的来源
    */
        public function getOrderSourceType() {
        return $this->orderSourceType;
    }
    
    /**
     * 设置该订单明细订购的来源     
     * @param String $orderSourceType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderSourceType( $orderSourceType) {
        $this->orderSourceType = $orderSourceType;
    }
    
        	
    private $price;
    
        /**
    * @return 单价 (实付款-已退款)/总件数，单位：分
    */
        public function getPrice() {
        return $this->price;
    }
    
    /**
     * 设置单价 (实付款-已退款)/总件数，单位：分     
     * @param Long $price     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPrice( $price) {
        $this->price = $price;
    }
    
        	
    private $originalPrice;
    
        /**
    * @return 原始单价，单位：分
    */
        public function getOriginalPrice() {
        return $this->originalPrice;
    }
    
    /**
     * 设置原始单价，单位：分     
     * @param Long $originalPrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOriginalPrice( $originalPrice) {
        $this->originalPrice = $originalPrice;
    }
    
        	
    private $postFee;
    
        /**
    * @return 运费 单位：分
    */
        public function getPostFee() {
        return $this->postFee;
    }
    
    /**
     * 设置运费 单位：分     
     * @param Long $postFee     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPostFee( $postFee) {
        $this->postFee = $postFee;
    }
    
        	
    private $actualPayFee;
    
        /**
    * @return 应付款，单位：分；
    */
        public function getActualPayFee() {
        return $this->actualPayFee;
    }
    
    /**
     * 设置应付款，单位：分；     
     * @param Long $actualPayFee     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setActualPayFee( $actualPayFee) {
        $this->actualPayFee = $actualPayFee;
    }
    
        	
    private $productName;
    
        /**
    * @return 产品名称
    */
        public function getProductName() {
        return $this->productName;
    }
    
    /**
     * 设置产品名称     
     * @param String $productName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductName( $productName) {
        $this->productName = $productName;
    }
    
        	
    private $sourceId;
    
        /**
    * @return 商品Id
    */
        public function getSourceId() {
        return $this->sourceId;
    }
    
    /**
     * 设置商品Id     
     * @param Long $sourceId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSourceId( $sourceId) {
        $this->sourceId = $sourceId;
    }
    
        	
    private $summImageUrl;
    
        /**
    * @return 小图图片:全路径,目前动态生成小图规格:64x64
    */
        public function getSummImageUrl() {
        return $this->summImageUrl;
    }
    
    /**
     * 设置小图图片:全路径,目前动态生成小图规格:64x64     
     * @param String $summImageUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSummImageUrl( $summImageUrl) {
        $this->summImageUrl = $summImageUrl;
    }
    
        	
    private $skuId;
    
        /**
    * @return 
    */
        public function getSkuId() {
        return $this->skuId;
    }
    
    /**
     * 设置     
     * @param Long $skuId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSkuId( $skuId) {
        $this->skuId = $skuId;
    }
    
        	
    private $productMaterialCode;
    
        /**
    * @return 货品的物料编码
    */
        public function getProductMaterialCode() {
        return $this->productMaterialCode;
    }
    
    /**
     * 设置货品的物料编码     
     * @param String $productMaterialCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductMaterialCode( $productMaterialCode) {
        $this->productMaterialCode = $productMaterialCode;
    }
    
        	
    private $attributes;
    
        /**
    * @return 扩展属性
    */
        public function getAttributes() {
        return $this->attributes;
    }
    
    /**
     * 设置扩展属性     
     * @param String $attributes     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAttributes( $attributes) {
        $this->attributes = $attributes;
    }
    
        	
    private $amount;
    
        /**
    * @return 收货件数
    */
        public function getAmount() {
        return $this->amount;
    }
    
    /**
     * 设置收货件数     
     * @param Long $amount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAmount( $amount) {
        $this->amount = $amount;
    }
    
        	
    private $specItems;
    
        /**
    * @return 规格属性条目列表
    */
        public function getSpecItems() {
        return $this->specItems;
    }
    
    /**
     * 设置规格属性条目列表     
     * @param array include @see AlibabaBulksettlementOpSpecItem[] $specItems     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSpecItems(AlibabaBulksettlementOpSpecItem $specItems) {
        $this->specItems = $specItems;
    }
    
        	
    private $quantityModel;
    
        /**
    * @return 数量模型，支持小数
    */
        public function getQuantityModel() {
        return $this->quantityModel;
    }
    
    /**
     * 设置数量模型，支持小数     
     * @param AlibabaBulksettlementOpQuantityModel $quantityModel     
     * 参数示例：<pre>{"realAmount":0.001,"amountFactor":1000.0,"calAmount":1,"realAmountStr":"0.001"}</pre>     
     * 此参数必填     */
    public function setQuantityModel(AlibabaBulksettlementOpQuantityModel $quantityModel) {
        $this->quantityModel = $quantityModel;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "receiveId", $this->stdResult )) {
    				$this->receiveId = $this->stdResult->{"receiveId"};
    			}
    			    		    				    			    			if (array_key_exists ( "statusInfo", $this->stdResult )) {
    				$this->statusInfo = $this->stdResult->{"statusInfo"};
    			}
    			    		    				    			    			if (array_key_exists ( "settlementOrderId", $this->stdResult )) {
    				$this->settlementOrderId = $this->stdResult->{"settlementOrderId"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtCreate", $this->stdResult )) {
    				$this->gmtCreate = $this->stdResult->{"gmtCreate"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtModified", $this->stdResult )) {
    				$this->gmtModified = $this->stdResult->{"gmtModified"};
    			}
    			    		    				    			    			if (array_key_exists ( "endTime", $this->stdResult )) {
    				$this->endTime = $this->stdResult->{"endTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderId", $this->stdResult )) {
    				$this->orderId = $this->stdResult->{"orderId"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderEntryId", $this->stdResult )) {
    				$this->orderEntryId = $this->stdResult->{"orderEntryId"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderSourceType", $this->stdResult )) {
    				$this->orderSourceType = $this->stdResult->{"orderSourceType"};
    			}
    			    		    				    			    			if (array_key_exists ( "price", $this->stdResult )) {
    				$this->price = $this->stdResult->{"price"};
    			}
    			    		    				    			    			if (array_key_exists ( "originalPrice", $this->stdResult )) {
    				$this->originalPrice = $this->stdResult->{"originalPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "postFee", $this->stdResult )) {
    				$this->postFee = $this->stdResult->{"postFee"};
    			}
    			    		    				    			    			if (array_key_exists ( "actualPayFee", $this->stdResult )) {
    				$this->actualPayFee = $this->stdResult->{"actualPayFee"};
    			}
    			    		    				    			    			if (array_key_exists ( "productName", $this->stdResult )) {
    				$this->productName = $this->stdResult->{"productName"};
    			}
    			    		    				    			    			if (array_key_exists ( "sourceId", $this->stdResult )) {
    				$this->sourceId = $this->stdResult->{"sourceId"};
    			}
    			    		    				    			    			if (array_key_exists ( "summImageUrl", $this->stdResult )) {
    				$this->summImageUrl = $this->stdResult->{"summImageUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "skuId", $this->stdResult )) {
    				$this->skuId = $this->stdResult->{"skuId"};
    			}
    			    		    				    			    			if (array_key_exists ( "productMaterialCode", $this->stdResult )) {
    				$this->productMaterialCode = $this->stdResult->{"productMaterialCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "attributes", $this->stdResult )) {
    				$this->attributes = $this->stdResult->{"attributes"};
    			}
    			    		    				    			    			if (array_key_exists ( "amount", $this->stdResult )) {
    				$this->amount = $this->stdResult->{"amount"};
    			}
    			    		    				    			    			if (array_key_exists ( "specItems", $this->stdResult )) {
    			$specItemsResult=$this->stdResult->{"specItems"};
    				$object = json_decode ( json_encode ( $specItemsResult ), true );
					$this->specItems = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaBulksettlementOpSpecItemResult=new AlibabaBulksettlementOpSpecItem();
						$AlibabaBulksettlementOpSpecItemResult->setArrayResult($arrayobject );
						$this->specItems [$i] = $AlibabaBulksettlementOpSpecItemResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "quantityModel", $this->stdResult )) {
    				$quantityModelResult=$this->stdResult->{"quantityModel"};
    				$this->quantityModel = new AlibabaBulksettlementOpQuantityModel();
    				$this->quantityModel->setStdResult ( $quantityModelResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "receiveId", $this->arrayResult )) {
    			$this->receiveId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "statusInfo", $this->arrayResult )) {
    			$this->statusInfo = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "settlementOrderId", $this->arrayResult )) {
    			$this->settlementOrderId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
    			$this->gmtCreate = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtModified", $this->arrayResult )) {
    			$this->gmtModified = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "endTime", $this->arrayResult )) {
    			$this->endTime = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderId", $this->arrayResult )) {
    			$this->orderId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderEntryId", $this->arrayResult )) {
    			$this->orderEntryId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderSourceType", $this->arrayResult )) {
    			$this->orderSourceType = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "price", $this->arrayResult )) {
    			$this->price = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "originalPrice", $this->arrayResult )) {
    			$this->originalPrice = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "postFee", $this->arrayResult )) {
    			$this->postFee = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "actualPayFee", $this->arrayResult )) {
    			$this->actualPayFee = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "productName", $this->arrayResult )) {
    			$this->productName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "sourceId", $this->arrayResult )) {
    			$this->sourceId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "summImageUrl", $this->arrayResult )) {
    			$this->summImageUrl = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "skuId", $this->arrayResult )) {
    			$this->skuId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "productMaterialCode", $this->arrayResult )) {
    			$this->productMaterialCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "attributes", $this->arrayResult )) {
    			$this->attributes = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "amount", $this->arrayResult )) {
    			$this->amount = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "specItems", $this->arrayResult )) {
    		$specItemsResult=$arrayResult['${paramType.paramName}'];
    			$this->specItems = new AlibabaBulksettlementOpSpecItem();
    			$this->specItems->setStdResult ( $specItemsResult);
    		}
    		    	    			    		    		if (array_key_exists ( "quantityModel", $this->arrayResult )) {
    		$quantityModelResult=$arrayResult['${paramType.paramName}'];
    			    			$this->quantityModel = new AlibabaBulksettlementOpQuantityModel();
    			    			$this->quantityModel->setStdResult ( $quantityModelResult);
    		}
    		    	    		}
 
   
}
?>