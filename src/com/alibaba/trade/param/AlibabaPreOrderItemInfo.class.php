<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaPreOrderItemInfo extends SDKDomain {

       	
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
    
        	
    private $sourceType;
    
        /**
    * @return 货品来源
    */
        public function getSourceType() {
        return $this->sourceType;
    }
    
    /**
     * 设置货品来源     
     * @param String $sourceType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSourceType( $sourceType) {
        $this->sourceType = $sourceType;
    }
    
        	
    private $auctionUnit;
    
        /**
    * @return 货品单位
    */
        public function getAuctionUnit() {
        return $this->auctionUnit;
    }
    
    /**
     * 设置货品单位     
     * @param String $auctionUnit     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAuctionUnit( $auctionUnit) {
        $this->auctionUnit = $auctionUnit;
    }
    
        	
    private $discountFee;
    
        /**
    * @return 优惠金额
    */
        public function getDiscountFee() {
        return $this->discountFee;
    }
    
    /**
     * 设置优惠金额     
     * @param Long $discountFee     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDiscountFee( $discountFee) {
        $this->discountFee = $discountFee;
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
    
        	
    private $status;
    
        /**
    * @return 状态
    */
        public function getStatus() {
        return $this->status;
    }
    
    /**
     * 设置状态     
     * @param Integer $status     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
    }
    
        	
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
    
        	
    private $adjustFee;
    
        /**
    * @return 改价金额
    */
        public function getAdjustFee() {
        return $this->adjustFee;
    }
    
    /**
     * 设置改价金额     
     * @param Long $adjustFee     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAdjustFee( $adjustFee) {
        $this->adjustFee = $adjustFee;
    }
    
        	
    private $buyerId;
    
        /**
    * @return 买家userId
    */
        public function getBuyerId() {
        return $this->buyerId;
    }
    
    /**
     * 设置买家userId     
     * @param Long $buyerId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerId( $buyerId) {
        $this->buyerId = $buyerId;
    }
    
        	
    private $auctionPicUrl;
    
        /**
    * @return 货品图片url
    */
        public function getAuctionPicUrl() {
        return $this->auctionPicUrl;
    }
    
    /**
     * 设置货品图片url     
     * @param String $auctionPicUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAuctionPicUrl( $auctionPicUrl) {
        $this->auctionPicUrl = $auctionPicUrl;
    }
    
        	
    private $id;
    
        /**
    * @return 主键
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置主键     
     * @param Long $id     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $orderDraftId;
    
        /**
    * @return 开单记录id
    */
        public function getOrderDraftId() {
        return $this->orderDraftId;
    }
    
    /**
     * 设置开单记录id     
     * @param Long $orderDraftId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderDraftId( $orderDraftId) {
        $this->orderDraftId = $orderDraftId;
    }
    
        	
    private $auctionPrice;
    
        /**
    * @return 货品单价
    */
        public function getAuctionPrice() {
        return $this->auctionPrice;
    }
    
    /**
     * 设置货品单价     
     * @param Long $auctionPrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAuctionPrice( $auctionPrice) {
        $this->auctionPrice = $auctionPrice;
    }
    
        	
    private $totalFee;
    
        /**
    * @return 总价格
    */
        public function getTotalFee() {
        return $this->totalFee;
    }
    
    /**
     * 设置总价格     
     * @param Long $totalFee     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTotalFee( $totalFee) {
        $this->totalFee = $totalFee;
    }
    
        	
    private $auctionNumber;
    
        /**
    * @return 货品货号
    */
        public function getAuctionNumber() {
        return $this->auctionNumber;
    }
    
    /**
     * 设置货品货号     
     * @param Integer $auctionNumber     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAuctionNumber( $auctionNumber) {
        $this->auctionNumber = $auctionNumber;
    }
    
        	
    private $sellerId;
    
        /**
    * @return 卖家userId
    */
        public function getSellerId() {
        return $this->sellerId;
    }
    
    /**
     * 设置卖家userId     
     * @param Long $sellerId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSellerId( $sellerId) {
        $this->sellerId = $sellerId;
    }
    
        	
    private $specId;
    
        /**
    * @return 规格编号，同一个Offer不重复
    */
        public function getSpecId() {
        return $this->specId;
    }
    
    /**
     * 设置规格编号，同一个Offer不重复     
     * @param String $specId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSpecId( $specId) {
        $this->specId = $specId;
    }
    
        	
    private $auctionId;
    
        /**
    * @return 货品id
    */
        public function getAuctionId() {
        return $this->auctionId;
    }
    
    /**
     * 设置货品id     
     * @param Long $auctionId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAuctionId( $auctionId) {
        $this->auctionId = $auctionId;
    }
    
        	
    private $skuId;
    
        /**
    * @return 规格ID，全局唯一
    */
        public function getSkuId() {
        return $this->skuId;
    }
    
    /**
     * 设置规格ID，全局唯一     
     * @param Long $skuId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSkuId( $skuId) {
        $this->skuId = $skuId;
    }
    
        	
    private $auctionTitle;
    
        /**
    * @return 货品名称
    */
        public function getAuctionTitle() {
        return $this->auctionTitle;
    }
    
    /**
     * 设置货品名称     
     * @param String $auctionTitle     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAuctionTitle( $auctionTitle) {
        $this->auctionTitle = $auctionTitle;
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
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "gmtModified", $this->stdResult )) {
    				$this->gmtModified = $this->stdResult->{"gmtModified"};
    			}
    			    		    				    			    			if (array_key_exists ( "sourceType", $this->stdResult )) {
    				$this->sourceType = $this->stdResult->{"sourceType"};
    			}
    			    		    				    			    			if (array_key_exists ( "auctionUnit", $this->stdResult )) {
    				$this->auctionUnit = $this->stdResult->{"auctionUnit"};
    			}
    			    		    				    			    			if (array_key_exists ( "discountFee", $this->stdResult )) {
    				$this->discountFee = $this->stdResult->{"discountFee"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtCreate", $this->stdResult )) {
    				$this->gmtCreate = $this->stdResult->{"gmtCreate"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    				    			    			if (array_key_exists ( "remark", $this->stdResult )) {
    				$this->remark = $this->stdResult->{"remark"};
    			}
    			    		    				    			    			if (array_key_exists ( "adjustFee", $this->stdResult )) {
    				$this->adjustFee = $this->stdResult->{"adjustFee"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerId", $this->stdResult )) {
    				$this->buyerId = $this->stdResult->{"buyerId"};
    			}
    			    		    				    			    			if (array_key_exists ( "auctionPicUrl", $this->stdResult )) {
    				$this->auctionPicUrl = $this->stdResult->{"auctionPicUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderDraftId", $this->stdResult )) {
    				$this->orderDraftId = $this->stdResult->{"orderDraftId"};
    			}
    			    		    				    			    			if (array_key_exists ( "auctionPrice", $this->stdResult )) {
    				$this->auctionPrice = $this->stdResult->{"auctionPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "totalFee", $this->stdResult )) {
    				$this->totalFee = $this->stdResult->{"totalFee"};
    			}
    			    		    				    			    			if (array_key_exists ( "auctionNumber", $this->stdResult )) {
    				$this->auctionNumber = $this->stdResult->{"auctionNumber"};
    			}
    			    		    				    			    			if (array_key_exists ( "sellerId", $this->stdResult )) {
    				$this->sellerId = $this->stdResult->{"sellerId"};
    			}
    			    		    				    			    			if (array_key_exists ( "specId", $this->stdResult )) {
    				$this->specId = $this->stdResult->{"specId"};
    			}
    			    		    				    			    			if (array_key_exists ( "auctionId", $this->stdResult )) {
    				$this->auctionId = $this->stdResult->{"auctionId"};
    			}
    			    		    				    			    			if (array_key_exists ( "skuId", $this->stdResult )) {
    				$this->skuId = $this->stdResult->{"skuId"};
    			}
    			    		    				    			    			if (array_key_exists ( "auctionTitle", $this->stdResult )) {
    				$this->auctionTitle = $this->stdResult->{"auctionTitle"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyAmount", $this->stdResult )) {
    				$this->buyAmount = $this->stdResult->{"buyAmount"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "gmtModified", $this->arrayResult )) {
    			$this->gmtModified = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "sourceType", $this->arrayResult )) {
    			$this->sourceType = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "auctionUnit", $this->arrayResult )) {
    			$this->auctionUnit = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "discountFee", $this->arrayResult )) {
    			$this->discountFee = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
    			$this->gmtCreate = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "remark", $this->arrayResult )) {
    			$this->remark = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "adjustFee", $this->arrayResult )) {
    			$this->adjustFee = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerId", $this->arrayResult )) {
    			$this->buyerId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "auctionPicUrl", $this->arrayResult )) {
    			$this->auctionPicUrl = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderDraftId", $this->arrayResult )) {
    			$this->orderDraftId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "auctionPrice", $this->arrayResult )) {
    			$this->auctionPrice = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "totalFee", $this->arrayResult )) {
    			$this->totalFee = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "auctionNumber", $this->arrayResult )) {
    			$this->auctionNumber = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "sellerId", $this->arrayResult )) {
    			$this->sellerId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "specId", $this->arrayResult )) {
    			$this->specId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "auctionId", $this->arrayResult )) {
    			$this->auctionId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "skuId", $this->arrayResult )) {
    			$this->skuId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "auctionTitle", $this->arrayResult )) {
    			$this->auctionTitle = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyAmount", $this->arrayResult )) {
    			$this->buyAmount = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>