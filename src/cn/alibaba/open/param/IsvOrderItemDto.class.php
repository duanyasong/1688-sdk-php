<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaAppAgentorderGetParam/AlibabaSettleSettleItemDto.class.php');

class IsvOrderItemDto extends SDKDomain {

       	
    private $bizStatusExt;
    
        /**
    * @return 订单详细状态 audit_pass:审核通过，issue_ready：待发布，service：服务中，suspend：挂起
     arrear_suspend：欠费挂起，closed：关闭，cancel：作废
    */
        public function getBizStatusExt() {
        return $this->bizStatusExt;
    }
    
    /**
     * 设置订单详细状态 audit_pass:审核通过，issue_ready：待发布，service：服务中，suspend：挂起
     arrear_suspend：欠费挂起，closed：关闭，cancel：作废     
     * @param String $bizStatusExt     
     * 参数示例：<pre>closed</pre>     
     * 此参数必填     */
    public function setBizStatusExt( $bizStatusExt) {
        $this->bizStatusExt = $bizStatusExt;
    }
    
        	
    private $memberId;
    
        /**
    * @return 会员memberId
    */
        public function getMemberId() {
        return $this->memberId;
    }
    
    /**
     * 设置会员memberId     
     * @param String $memberId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMemberId( $memberId) {
        $this->memberId = $memberId;
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
    
        	
    private $gmtCreate;
    
        /**
    * @return 下单时间
    */
        public function getGmtCreate() {
        return $this->gmtCreate;
    }
    
    /**
     * 设置下单时间     
     * @param Date $gmtCreate     
     * 参数示例：<pre>20130509120000000+0800</pre>     
     * 此参数必填     */
    public function setGmtCreate( $gmtCreate) {
        $this->gmtCreate = $gmtCreate;
    }
    
        	
    private $gmtServiceEnd;
    
        /**
    * @return 到期时间
    */
        public function getGmtServiceEnd() {
        return $this->gmtServiceEnd;
    }
    
    /**
     * 设置到期时间     
     * @param Date $gmtServiceEnd     
     * 参数示例：<pre>20130509120000000+0800</pre>     
     * 此参数必填     */
    public function setGmtServiceEnd( $gmtServiceEnd) {
        $this->gmtServiceEnd = $gmtServiceEnd;
    }
    
        	
    private $bizStatus;
    
        /**
    * @return 订单状态
B:服务前，S:服务中，P：挂起，E：关闭，C:作废
    */
        public function getBizStatus() {
        return $this->bizStatus;
    }
    
    /**
     * 设置订单状态
B:服务前，S:服务中，P：挂起，E：关闭，C:作废     
     * @param String $bizStatus     
     * 参数示例：<pre>S</pre>     
     * 此参数必填     */
    public function setBizStatus( $bizStatus) {
        $this->bizStatus = $bizStatus;
    }
    
        	
    private $paymentAmount;
    
        /**
    * @return 到帐金额
    */
        public function getPaymentAmount() {
        return $this->paymentAmount;
    }
    
    /**
     * 设置到帐金额     
     * @param Double $paymentAmount     
     * 参数示例：<pre>50</pre>     
     * 此参数必填     */
    public function setPaymentAmount( $paymentAmount) {
        $this->paymentAmount = $paymentAmount;
    }
    
        	
    private $executePrice;
    
        /**
    * @return 执行金额
    */
        public function getExecutePrice() {
        return $this->executePrice;
    }
    
    /**
     * 设置执行金额     
     * @param Double $executePrice     
     * 参数示例：<pre>250.0</pre>     
     * 此参数必填     */
    public function setExecutePrice( $executePrice) {
        $this->executePrice = $executePrice;
    }
    
        	
    private $orderItemNum;
    
        /**
    * @return 订单编号
    */
        public function getOrderItemNum() {
        return $this->orderItemNum;
    }
    
    /**
     * 设置订单编号     
     * @param String $orderItemNum     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderItemNum( $orderItemNum) {
        $this->orderItemNum = $orderItemNum;
    }
    
        	
    private $gmtServiceBegin;
    
        /**
    * @return 服务开始时间
    */
        public function getGmtServiceBegin() {
        return $this->gmtServiceBegin;
    }
    
    /**
     * 设置服务开始时间     
     * @param Date $gmtServiceBegin     
     * 参数示例：<pre>20171014000000000+0800</pre>     
     * 此参数必填     */
    public function setGmtServiceBegin( $gmtServiceBegin) {
        $this->gmtServiceBegin = $gmtServiceBegin;
    }
    
        	
    private $gmtConfirm;
    
        /**
    * @return 服务确认时间
    */
        public function getGmtConfirm() {
        return $this->gmtConfirm;
    }
    
    /**
     * 设置服务确认时间     
     * @param Date $gmtConfirm     
     * 参数示例：<pre>20171116011355000+0800</pre>     
     * 此参数必填     */
    public function setGmtConfirm( $gmtConfirm) {
        $this->gmtConfirm = $gmtConfirm;
    }
    
        	
    private $settleItemDtos;
    
        /**
    * @return 结算信息
    */
        public function getSettleItemDtos() {
        return $this->settleItemDtos;
    }
    
    /**
     * 设置结算信息     
     * @param array include @see AlibabaSettleSettleItemDto[] $settleItemDtos     
     * 参数示例：<pre>结算信息数组</pre>     
     * 此参数必填     */
    public function setSettleItemDtos(AlibabaSettleSettleItemDto $settleItemDtos) {
        $this->settleItemDtos = $settleItemDtos;
    }
    
        	
    private $payCustomerUid;
    
        /**
    * @return 付款用户ID
    */
        public function getPayCustomerUid() {
        return $this->payCustomerUid;
    }
    
    /**
     * 设置付款用户ID     
     * @param String $payCustomerUid     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPayCustomerUid( $payCustomerUid) {
        $this->payCustomerUid = $payCustomerUid;
    }
    
        	
    private $signCustomerUid;
    
        /**
    * @return 登录用户ID
    */
        public function getSignCustomerUid() {
        return $this->signCustomerUid;
    }
    
    /**
     * 设置登录用户ID     
     * @param String $signCustomerUid     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSignCustomerUid( $signCustomerUid) {
        $this->signCustomerUid = $signCustomerUid;
    }
    
        	
    private $loginId;
    
        /**
    * @return loginId
    */
        public function getLoginId() {
        return $this->loginId;
    }
    
    /**
     * 设置loginId     
     * @param String $loginId     
     * 参数示例：<pre>alitestforIsv01</pre>     
     * 此参数必填     */
    public function setLoginId( $loginId) {
        $this->loginId = $loginId;
    }
    
        	
    private $quantity;
    
        /**
    * @return 购买数量
    */
        public function getQuantity() {
        return $this->quantity;
    }
    
    /**
     * 设置购买数量     
     * @param Integer $quantity     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setQuantity( $quantity) {
        $this->quantity = $quantity;
    }
    
        	
    private $payStatus;
    
        /**
    * @return 付款状态
    */
        public function getPayStatus() {
        return $this->payStatus;
    }
    
    /**
     * 设置付款状态     
     * @param String $payStatus     
     * 参数示例：<pre>payment_none</pre>     
     * 此参数必填     */
    public function setPayStatus( $payStatus) {
        $this->payStatus = $payStatus;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "bizStatusExt", $this->stdResult )) {
    				$this->bizStatusExt = $this->stdResult->{"bizStatusExt"};
    			}
    			    		    				    			    			if (array_key_exists ( "memberId", $this->stdResult )) {
    				$this->memberId = $this->stdResult->{"memberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "productName", $this->stdResult )) {
    				$this->productName = $this->stdResult->{"productName"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtCreate", $this->stdResult )) {
    				$this->gmtCreate = $this->stdResult->{"gmtCreate"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtServiceEnd", $this->stdResult )) {
    				$this->gmtServiceEnd = $this->stdResult->{"gmtServiceEnd"};
    			}
    			    		    				    			    			if (array_key_exists ( "bizStatus", $this->stdResult )) {
    				$this->bizStatus = $this->stdResult->{"bizStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "paymentAmount", $this->stdResult )) {
    				$this->paymentAmount = $this->stdResult->{"paymentAmount"};
    			}
    			    		    				    			    			if (array_key_exists ( "executePrice", $this->stdResult )) {
    				$this->executePrice = $this->stdResult->{"executePrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderItemNum", $this->stdResult )) {
    				$this->orderItemNum = $this->stdResult->{"orderItemNum"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtServiceBegin", $this->stdResult )) {
    				$this->gmtServiceBegin = $this->stdResult->{"gmtServiceBegin"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtConfirm", $this->stdResult )) {
    				$this->gmtConfirm = $this->stdResult->{"gmtConfirm"};
    			}
    			    		    				    			    			if (array_key_exists ( "settleItemDtos", $this->stdResult )) {
    			$settleItemDtosResult=$this->stdResult->{"settleItemDtos"};
    				$object = json_decode ( json_encode ( $settleItemDtosResult ), true );
					$this->settleItemDtos = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaSettleSettleItemDtoResult=new AlibabaSettleSettleItemDto();
						$AlibabaSettleSettleItemDtoResult->setArrayResult($arrayobject );
						$this->settleItemDtos [$i] = $AlibabaSettleSettleItemDtoResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "payCustomerUid", $this->stdResult )) {
    				$this->payCustomerUid = $this->stdResult->{"payCustomerUid"};
    			}
    			    		    				    			    			if (array_key_exists ( "signCustomerUid", $this->stdResult )) {
    				$this->signCustomerUid = $this->stdResult->{"signCustomerUid"};
    			}
    			    		    				    			    			if (array_key_exists ( "loginId", $this->stdResult )) {
    				$this->loginId = $this->stdResult->{"loginId"};
    			}
    			    		    				    			    			if (array_key_exists ( "quantity", $this->stdResult )) {
    				$this->quantity = $this->stdResult->{"quantity"};
    			}
    			    		    				    			    			if (array_key_exists ( "payStatus", $this->stdResult )) {
    				$this->payStatus = $this->stdResult->{"payStatus"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "bizStatusExt", $this->arrayResult )) {
    			$this->bizStatusExt = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "memberId", $this->arrayResult )) {
    			$this->memberId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "productName", $this->arrayResult )) {
    			$this->productName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
    			$this->gmtCreate = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtServiceEnd", $this->arrayResult )) {
    			$this->gmtServiceEnd = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "bizStatus", $this->arrayResult )) {
    			$this->bizStatus = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "paymentAmount", $this->arrayResult )) {
    			$this->paymentAmount = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "executePrice", $this->arrayResult )) {
    			$this->executePrice = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderItemNum", $this->arrayResult )) {
    			$this->orderItemNum = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtServiceBegin", $this->arrayResult )) {
    			$this->gmtServiceBegin = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtConfirm", $this->arrayResult )) {
    			$this->gmtConfirm = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "settleItemDtos", $this->arrayResult )) {
    		$settleItemDtosResult=$arrayResult['${paramType.paramName}'];
    			$this->settleItemDtos = new AlibabaSettleSettleItemDto();
    			$this->settleItemDtos->setStdResult ( $settleItemDtosResult);
    		}
    		    	    			    		    			if (array_key_exists ( "payCustomerUid", $this->arrayResult )) {
    			$this->payCustomerUid = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "signCustomerUid", $this->arrayResult )) {
    			$this->signCustomerUid = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "loginId", $this->arrayResult )) {
    			$this->loginId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "quantity", $this->arrayResult )) {
    			$this->quantity = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "payStatus", $this->arrayResult )) {
    			$this->payStatus = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>