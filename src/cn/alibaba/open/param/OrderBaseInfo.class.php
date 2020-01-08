<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class OrderBaseInfo extends SDKDomain {

       	
    private $payTime;
    
        /**
    * @return 付款时间
    */
        public function getPayTime() {
        return $this->payTime;
    }
    
    /**
     * 设置付款时间     
     * @param String $payTime     
     * 参数示例：<pre>20190424145347000+0800</pre>     
     * 此参数必填     */
    public function setPayTime( $payTime) {
        $this->payTime = $payTime;
    }
    
        	
    private $discount;
    
        /**
    * @return 折扣信息
    */
        public function getDiscount() {
        return $this->discount;
    }
    
    /**
     * 设置折扣信息     
     * @param Long $discount     
     * 参数示例：<pre>0</pre>     
     * 此参数必填     */
    public function setDiscount( $discount) {
        $this->discount = $discount;
    }
    
        	
    private $alipayTradeId;
    
        /**
    * @return 支付宝交易号
    */
        public function getAlipayTradeId() {
        return $this->alipayTradeId;
    }
    
    /**
     * 设置支付宝交易号     
     * @param String $alipayTradeId     
     * 参数示例：<pre>2019042422001854461028147568</pre>     
     * 此参数必填     */
    public function setAlipayTradeId( $alipayTradeId) {
        $this->alipayTradeId = $alipayTradeId;
    }
    
        	
    private $sumProductPayment;
    
        /**
    * @return 价格
    */
        public function getSumProductPayment() {
        return $this->sumProductPayment;
    }
    
    /**
     * 设置价格     
     * @param BigDecimal $sumProductPayment     
     * 参数示例：<pre>49.85</pre>     
     * 此参数必填     */
    public function setSumProductPayment( $sumProductPayment) {
        $this->sumProductPayment = $sumProductPayment;
    }
    
        	
    private $flowTemplateCode;
    
        /**
    * @return 模板编码
    */
        public function getFlowTemplateCode() {
        return $this->flowTemplateCode;
    }
    
    /**
     * 设置模板编码     
     * @param String $flowTemplateCode     
     * 参数示例：<pre>virtualGoodsTradeLst</pre>     
     * 此参数必填     */
    public function setFlowTemplateCode( $flowTemplateCode) {
        $this->flowTemplateCode = $flowTemplateCode;
    }
    
        	
    private $sellerOrder;
    
        /**
    * @return 卖家订单
    */
        public function getSellerOrder() {
        return $this->sellerOrder;
    }
    
    /**
     * 设置卖家订单     
     * @param Boolean $sellerOrder     
     * 参数示例：<pre>false</pre>     
     * 此参数必填     */
    public function setSellerOrder( $sellerOrder) {
        $this->sellerOrder = $sellerOrder;
    }
    
        	
    private $buyerLoginId;
    
        /**
    * @return 买家账号
    */
        public function getBuyerLoginId() {
        return $this->buyerLoginId;
    }
    
    /**
     * 设置买家账号     
     * @param String $buyerLoginId     
     * 参数示例：<pre>loginId</pre>     
     * 此参数必填     */
    public function setBuyerLoginId( $buyerLoginId) {
        $this->buyerLoginId = $buyerLoginId;
    }
    
        	
    private $modifyTime;
    
        /**
    * @return 修改时间
    */
        public function getModifyTime() {
        return $this->modifyTime;
    }
    
    /**
     * 设置修改时间     
     * @param String $modifyTime     
     * 参数示例：<pre>20190424145347000+0800</pre>     
     * 此参数必填     */
    public function setModifyTime( $modifyTime) {
        $this->modifyTime = $modifyTime;
    }
    
        	
    private $id;
    
        /**
    * @return 订单id
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置订单id     
     * @param String $id     
     * 参数示例：<pre>12345678</pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $buyerLevel;
    
        /**
    * @return L1
    */
        public function getBuyerLevel() {
        return $this->buyerLevel;
    }
    
    /**
     * 设置L1     
     * @param String $buyerLevel     
     * 参数示例：<pre>买家等级</pre>     
     * 此参数必填     */
    public function setBuyerLevel( $buyerLevel) {
        $this->buyerLevel = $buyerLevel;
    }
    
        	
    private $sellerAlipayId;
    
        /**
    * @return 卖家支付宝账号
    */
        public function getSellerAlipayId() {
        return $this->sellerAlipayId;
    }
    
    /**
     * 设置卖家支付宝账号     
     * @param String $sellerAlipayId     
     * 参数示例：<pre>123456</pre>     
     * 此参数必填     */
    public function setSellerAlipayId( $sellerAlipayId) {
        $this->sellerAlipayId = $sellerAlipayId;
    }
    
        	
    private $sellerLoginId;
    
        /**
    * @return 卖家账号
    */
        public function getSellerLoginId() {
        return $this->sellerLoginId;
    }
    
    /**
     * 设置卖家账号     
     * @param String $sellerLoginId     
     * 参数示例：<pre>loginId</pre>     
     * 此参数必填     */
    public function setSellerLoginId( $sellerLoginId) {
        $this->sellerLoginId = $sellerLoginId;
    }
    
        	
    private $buyerID;
    
        /**
    * @return 买家ID
    */
        public function getBuyerID() {
        return $this->buyerID;
    }
    
    /**
     * 设置买家ID     
     * @param String $buyerID     
     * 参数示例：<pre>123456</pre>     
     * 此参数必填     */
    public function setBuyerID( $buyerID) {
        $this->buyerID = $buyerID;
    }
    
        	
    private $closeOperateType;
    
        /**
    * @return 关闭操作类型
    */
        public function getCloseOperateType() {
        return $this->closeOperateType;
    }
    
    /**
     * 设置关闭操作类型     
     * @param String $closeOperateType     
     * 参数示例：<pre>close</pre>     
     * 此参数必填     */
    public function setCloseOperateType( $closeOperateType) {
        $this->closeOperateType = $closeOperateType;
    }
    
        	
    private $totalAmount;
    
        /**
    * @return 总价
    */
        public function getTotalAmount() {
        return $this->totalAmount;
    }
    
    /**
     * 设置总价     
     * @param BigDecimal $totalAmount     
     * 参数示例：<pre>49.85</pre>     
     * 此参数必填     */
    public function setTotalAmount( $totalAmount) {
        $this->totalAmount = $totalAmount;
    }
    
        	
    private $sellerID;
    
        /**
    * @return 卖家ID
    */
        public function getSellerID() {
        return $this->sellerID;
    }
    
    /**
     * 设置卖家ID     
     * @param String $sellerID     
     * 参数示例：<pre>123456</pre>     
     * 此参数必填     */
    public function setSellerID( $sellerID) {
        $this->sellerID = $sellerID;
    }
    
        	
    private $shippingFee;
    
        /**
    * @return 运费
    */
        public function getShippingFee() {
        return $this->shippingFee;
    }
    
    /**
     * 设置运费     
     * @param Long $shippingFee     
     * 参数示例：<pre>0</pre>     
     * 此参数必填     */
    public function setShippingFee( $shippingFee) {
        $this->shippingFee = $shippingFee;
    }
    
        	
    private $buyerUserId;
    
        /**
    * @return 买家ID
    */
        public function getBuyerUserId() {
        return $this->buyerUserId;
    }
    
    /**
     * 设置买家ID     
     * @param Long $buyerUserId     
     * 参数示例：<pre>123456</pre>     
     * 此参数必填     */
    public function setBuyerUserId( $buyerUserId) {
        $this->buyerUserId = $buyerUserId;
    }
    
        	
    private $refund;
    
        /**
    * @return 退款
    */
        public function getRefund() {
        return $this->refund;
    }
    
    /**
     * 设置退款     
     * @param Long $refund     
     * 参数示例：<pre>0</pre>     
     * 此参数必填     */
    public function setRefund( $refund) {
        $this->refund = $refund;
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
     * @param String $status     
     * 参数示例：<pre>waitsellersend</pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
    }
    
        	
    private $refundPayment;
    
        /**
    * @return 退款支付类型
    */
        public function getRefundPayment() {
        return $this->refundPayment;
    }
    
    /**
     * 设置退款支付类型     
     * @param Long $refundPayment     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setRefundPayment( $refundPayment) {
        $this->refundPayment = $refundPayment;
    }
    
        	
    private $couponFee;
    
        /**
    * @return 优惠券金额
    */
        public function getCouponFee() {
        return $this->couponFee;
    }
    
    /**
     * 设置优惠券金额     
     * @param String $couponFee     
     * 参数示例：<pre>0</pre>     
     * 此参数必填     */
    public function setCouponFee( $couponFee) {
        $this->couponFee = $couponFee;
    }
    
        	
    private $tradeType;
    
        /**
    * @return 交易类型
    */
        public function getTradeType() {
        return $this->tradeType;
    }
    
    /**
     * 设置交易类型     
     * @param String $tradeType     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setTradeType( $tradeType) {
        $this->tradeType = $tradeType;
    }
    
        	
    private $idOfStr;
    
        /**
    * @return 订单id
    */
        public function getIdOfStr() {
        return $this->idOfStr;
    }
    
    /**
     * 设置订单id     
     * @param String $idOfStr     
     * 参数示例：<pre>12345678</pre>     
     * 此参数必填     */
    public function setIdOfStr( $idOfStr) {
        $this->idOfStr = $idOfStr;
    }
    
        	
    private $sellerUserId;
    
        /**
    * @return 卖家账号ID
    */
        public function getSellerUserId() {
        return $this->sellerUserId;
    }
    
    /**
     * 设置卖家账号ID     
     * @param Long $sellerUserId     
     * 参数示例：<pre>123456</pre>     
     * 此参数必填     */
    public function setSellerUserId( $sellerUserId) {
        $this->sellerUserId = $sellerUserId;
    }
    
        	
    private $buyerAlipayId;
    
        /**
    * @return 买家支付宝账号
    */
        public function getBuyerAlipayId() {
        return $this->buyerAlipayId;
    }
    
    /**
     * 设置买家支付宝账号     
     * @param String $buyerAlipayId     
     * 参数示例：<pre>123456</pre>     
     * 此参数必填     */
    public function setBuyerAlipayId( $buyerAlipayId) {
        $this->buyerAlipayId = $buyerAlipayId;
    }
    
        	
    private $createTime;
    
        /**
    * @return 订单时间
    */
        public function getCreateTime() {
        return $this->createTime;
    }
    
    /**
     * 设置订单时间     
     * @param String $createTime     
     * 参数示例：<pre>20190424145338000+0800</pre>     
     * 此参数必填     */
    public function setCreateTime( $createTime) {
        $this->createTime = $createTime;
    }
    
        	
    private $businessType;
    
        /**
    * @return 业务类型
    */
        public function getBusinessType() {
        return $this->businessType;
    }
    
    /**
     * 设置业务类型     
     * @param String $businessType     
     * 参数示例：<pre>lst</pre>     
     * 此参数必填     */
    public function setBusinessType( $businessType) {
        $this->businessType = $businessType;
    }
    
        	
    private $overSeaOrder;
    
        /**
    * @return 海外交易
    */
        public function getOverSeaOrder() {
        return $this->overSeaOrder;
    }
    
    /**
     * 设置海外交易     
     * @param Boolean $overSeaOrder     
     * 参数示例：<pre>false</pre>     
     * 此参数必填     */
    public function setOverSeaOrder( $overSeaOrder) {
        $this->overSeaOrder = $overSeaOrder;
    }
    
        	
    private $tradeTypeDesc;
    
        /**
    * @return 支付类型描述
    */
        public function getTradeTypeDesc() {
        return $this->tradeTypeDesc;
    }
    
    /**
     * 设置支付类型描述     
     * @param String $tradeTypeDesc     
     * 参数示例：<pre>其他交易方式</pre>     
     * 此参数必填     */
    public function setTradeTypeDesc( $tradeTypeDesc) {
        $this->tradeTypeDesc = $tradeTypeDesc;
    }
    
        	
    private $tradeTypeCode;
    
        /**
    * @return 支付类型编码
    */
        public function getTradeTypeCode() {
        return $this->tradeTypeCode;
    }
    
    /**
     * 设置支付类型编码     
     * @param String $tradeTypeCode     
     * 参数示例：<pre>other</pre>     
     * 此参数必填     */
    public function setTradeTypeCode( $tradeTypeCode) {
        $this->tradeTypeCode = $tradeTypeCode;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "payTime", $this->stdResult )) {
    				$this->payTime = $this->stdResult->{"payTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "discount", $this->stdResult )) {
    				$this->discount = $this->stdResult->{"discount"};
    			}
    			    		    				    			    			if (array_key_exists ( "alipayTradeId", $this->stdResult )) {
    				$this->alipayTradeId = $this->stdResult->{"alipayTradeId"};
    			}
    			    		    				    			    			if (array_key_exists ( "sumProductPayment", $this->stdResult )) {
    				$this->sumProductPayment = $this->stdResult->{"sumProductPayment"};
    			}
    			    		    				    			    			if (array_key_exists ( "flowTemplateCode", $this->stdResult )) {
    				$this->flowTemplateCode = $this->stdResult->{"flowTemplateCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "sellerOrder", $this->stdResult )) {
    				$this->sellerOrder = $this->stdResult->{"sellerOrder"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerLoginId", $this->stdResult )) {
    				$this->buyerLoginId = $this->stdResult->{"buyerLoginId"};
    			}
    			    		    				    			    			if (array_key_exists ( "modifyTime", $this->stdResult )) {
    				$this->modifyTime = $this->stdResult->{"modifyTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerLevel", $this->stdResult )) {
    				$this->buyerLevel = $this->stdResult->{"buyerLevel"};
    			}
    			    		    				    			    			if (array_key_exists ( "sellerAlipayId", $this->stdResult )) {
    				$this->sellerAlipayId = $this->stdResult->{"sellerAlipayId"};
    			}
    			    		    				    			    			if (array_key_exists ( "sellerLoginId", $this->stdResult )) {
    				$this->sellerLoginId = $this->stdResult->{"sellerLoginId"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerID", $this->stdResult )) {
    				$this->buyerID = $this->stdResult->{"buyerID"};
    			}
    			    		    				    			    			if (array_key_exists ( "closeOperateType", $this->stdResult )) {
    				$this->closeOperateType = $this->stdResult->{"closeOperateType"};
    			}
    			    		    				    			    			if (array_key_exists ( "totalAmount", $this->stdResult )) {
    				$this->totalAmount = $this->stdResult->{"totalAmount"};
    			}
    			    		    				    			    			if (array_key_exists ( "sellerID", $this->stdResult )) {
    				$this->sellerID = $this->stdResult->{"sellerID"};
    			}
    			    		    				    			    			if (array_key_exists ( "shippingFee", $this->stdResult )) {
    				$this->shippingFee = $this->stdResult->{"shippingFee"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerUserId", $this->stdResult )) {
    				$this->buyerUserId = $this->stdResult->{"buyerUserId"};
    			}
    			    		    				    			    			if (array_key_exists ( "refund", $this->stdResult )) {
    				$this->refund = $this->stdResult->{"refund"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    				    			    			if (array_key_exists ( "refundPayment", $this->stdResult )) {
    				$this->refundPayment = $this->stdResult->{"refundPayment"};
    			}
    			    		    				    			    			if (array_key_exists ( "couponFee", $this->stdResult )) {
    				$this->couponFee = $this->stdResult->{"couponFee"};
    			}
    			    		    				    			    			if (array_key_exists ( "tradeType", $this->stdResult )) {
    				$this->tradeType = $this->stdResult->{"tradeType"};
    			}
    			    		    				    			    			if (array_key_exists ( "idOfStr", $this->stdResult )) {
    				$this->idOfStr = $this->stdResult->{"idOfStr"};
    			}
    			    		    				    			    			if (array_key_exists ( "sellerUserId", $this->stdResult )) {
    				$this->sellerUserId = $this->stdResult->{"sellerUserId"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerAlipayId", $this->stdResult )) {
    				$this->buyerAlipayId = $this->stdResult->{"buyerAlipayId"};
    			}
    			    		    				    			    			if (array_key_exists ( "createTime", $this->stdResult )) {
    				$this->createTime = $this->stdResult->{"createTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "businessType", $this->stdResult )) {
    				$this->businessType = $this->stdResult->{"businessType"};
    			}
    			    		    				    			    			if (array_key_exists ( "overSeaOrder", $this->stdResult )) {
    				$this->overSeaOrder = $this->stdResult->{"overSeaOrder"};
    			}
    			    		    				    			    			if (array_key_exists ( "tradeTypeDesc", $this->stdResult )) {
    				$this->tradeTypeDesc = $this->stdResult->{"tradeTypeDesc"};
    			}
    			    		    				    			    			if (array_key_exists ( "tradeTypeCode", $this->stdResult )) {
    				$this->tradeTypeCode = $this->stdResult->{"tradeTypeCode"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "payTime", $this->arrayResult )) {
    			$this->payTime = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "discount", $this->arrayResult )) {
    			$this->discount = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "alipayTradeId", $this->arrayResult )) {
    			$this->alipayTradeId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "sumProductPayment", $this->arrayResult )) {
    			$this->sumProductPayment = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "flowTemplateCode", $this->arrayResult )) {
    			$this->flowTemplateCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "sellerOrder", $this->arrayResult )) {
    			$this->sellerOrder = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerLoginId", $this->arrayResult )) {
    			$this->buyerLoginId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "modifyTime", $this->arrayResult )) {
    			$this->modifyTime = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerLevel", $this->arrayResult )) {
    			$this->buyerLevel = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "sellerAlipayId", $this->arrayResult )) {
    			$this->sellerAlipayId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "sellerLoginId", $this->arrayResult )) {
    			$this->sellerLoginId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerID", $this->arrayResult )) {
    			$this->buyerID = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "closeOperateType", $this->arrayResult )) {
    			$this->closeOperateType = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "totalAmount", $this->arrayResult )) {
    			$this->totalAmount = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "sellerID", $this->arrayResult )) {
    			$this->sellerID = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "shippingFee", $this->arrayResult )) {
    			$this->shippingFee = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerUserId", $this->arrayResult )) {
    			$this->buyerUserId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "refund", $this->arrayResult )) {
    			$this->refund = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "refundPayment", $this->arrayResult )) {
    			$this->refundPayment = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "couponFee", $this->arrayResult )) {
    			$this->couponFee = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "tradeType", $this->arrayResult )) {
    			$this->tradeType = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "idOfStr", $this->arrayResult )) {
    			$this->idOfStr = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "sellerUserId", $this->arrayResult )) {
    			$this->sellerUserId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerAlipayId", $this->arrayResult )) {
    			$this->buyerAlipayId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "createTime", $this->arrayResult )) {
    			$this->createTime = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "businessType", $this->arrayResult )) {
    			$this->businessType = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "overSeaOrder", $this->arrayResult )) {
    			$this->overSeaOrder = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "tradeTypeDesc", $this->arrayResult )) {
    			$this->tradeTypeDesc = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "tradeTypeCode", $this->arrayResult )) {
    			$this->tradeTypeCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>