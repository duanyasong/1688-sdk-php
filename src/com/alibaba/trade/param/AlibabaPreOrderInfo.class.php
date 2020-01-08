<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaPreOrderGetListParam/AlibabaPreOrderItemInfo.class.php');

class AlibabaPreOrderInfo extends SDKDomain {

       	
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
    
        	
    private $postFee;
    
        /**
    * @return 运费（分）
    */
        public function getPostFee() {
        return $this->postFee;
    }
    
    /**
     * 设置运费（分）     
     * @param Long $postFee     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPostFee( $postFee) {
        $this->postFee = $postFee;
    }
    
        	
    private $buyerSubId;
    
        /**
    * @return 买家子账号ID
    */
        public function getBuyerSubId() {
        return $this->buyerSubId;
    }
    
    /**
     * 设置买家子账号ID     
     * @param Long $buyerSubId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerSubId( $buyerSubId) {
        $this->buyerSubId = $buyerSubId;
    }
    
        	
    private $operatorId;
    
        /**
    * @return 操作人
    */
        public function getOperatorId() {
        return $this->operatorId;
    }
    
    /**
     * 设置操作人     
     * @param Long $operatorId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOperatorId( $operatorId) {
        $this->operatorId = $operatorId;
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
    * @return 状态，0:待支付；1:已创建订单，待支付；2：已支付
    */
        public function getStatus() {
        return $this->status;
    }
    
    /**
     * 设置状态，0:待支付；1:已创建订单，待支付；2：已支付     
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
    
        	
    private $id;
    
        /**
    * @return 预订单ID
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置预订单ID     
     * @param Long $id     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $logisticsType;
    
        /**
    * @return 物流方式：1：自提 2：快递
    */
        public function getLogisticsType() {
        return $this->logisticsType;
    }
    
    /**
     * 设置物流方式：1：自提 2：快递     
     * @param Integer $logisticsType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLogisticsType( $logisticsType) {
        $this->logisticsType = $logisticsType;
    }
    
        	
    private $gmtConfirm;
    
        /**
    * @return 开单时间
    */
        public function getGmtConfirm() {
        return $this->gmtConfirm;
    }
    
    /**
     * 设置开单时间     
     * @param Date $gmtConfirm     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtConfirm( $gmtConfirm) {
        $this->gmtConfirm = $gmtConfirm;
    }
    
        	
    private $totalFee;
    
        /**
    * @return 货品总金额(分)
    */
        public function getTotalFee() {
        return $this->totalFee;
    }
    
    /**
     * 设置货品总金额(分)     
     * @param Long $totalFee     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTotalFee( $totalFee) {
        $this->totalFee = $totalFee;
    }
    
        	
    private $payType;
    
        /**
    * @return 支付方式 1：线下 2：线上
    */
        public function getPayType() {
        return $this->payType;
    }
    
    /**
     * 设置支付方式 1：线下 2：线上     
     * @param Integer $payType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPayType( $payType) {
        $this->payType = $payType;
    }
    
        	
    private $itemList;
    
        /**
    * @return 详情
    */
        public function getItemList() {
        return $this->itemList;
    }
    
    /**
     * 设置详情     
     * @param array include @see AlibabaPreOrderItemInfo[] $itemList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setItemList(AlibabaPreOrderItemInfo $itemList) {
        $this->itemList = $itemList;
    }
    
        	
    private $detailUrl;
    
        /**
    * @return 预订单详情链接，ISV根据该地址生成二维码
    */
        public function getDetailUrl() {
        return $this->detailUrl;
    }
    
    /**
     * 设置预订单详情链接，ISV根据该地址生成二维码     
     * @param String $detailUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDetailUrl( $detailUrl) {
        $this->detailUrl = $detailUrl;
    }
    
        	
    private $bizOrderId;
    
        /**
    * @return 通过预订单生成的正式订单ID
    */
        public function getBizOrderId() {
        return $this->bizOrderId;
    }
    
    /**
     * 设置通过预订单生成的正式订单ID     
     * @param Long $bizOrderId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBizOrderId( $bizOrderId) {
        $this->bizOrderId = $bizOrderId;
    }
    
        	
    private $actualTotalFee;
    
        /**
    * @return 应付总金额(分)，应付总金额=调整金额+货品总金额+运费
    */
        public function getActualTotalFee() {
        return $this->actualTotalFee;
    }
    
    /**
     * 设置应付总金额(分)，应付总金额=调整金额+货品总金额+运费     
     * @param Long $actualTotalFee     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setActualTotalFee( $actualTotalFee) {
        $this->actualTotalFee = $actualTotalFee;
    }
    
        	
    private $adjustFee;
    
        /**
    * @return 调整金额(分)，可为负。
    */
        public function getAdjustFee() {
        return $this->adjustFee;
    }
    
    /**
     * 设置调整金额(分)，可为负。     
     * @param Long $adjustFee     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAdjustFee( $adjustFee) {
        $this->adjustFee = $adjustFee;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "gmtModified", $this->stdResult )) {
    				$this->gmtModified = $this->stdResult->{"gmtModified"};
    			}
    			    		    				    			    			if (array_key_exists ( "postFee", $this->stdResult )) {
    				$this->postFee = $this->stdResult->{"postFee"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerSubId", $this->stdResult )) {
    				$this->buyerSubId = $this->stdResult->{"buyerSubId"};
    			}
    			    		    				    			    			if (array_key_exists ( "operatorId", $this->stdResult )) {
    				$this->operatorId = $this->stdResult->{"operatorId"};
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
    			    		    				    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "logisticsType", $this->stdResult )) {
    				$this->logisticsType = $this->stdResult->{"logisticsType"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtConfirm", $this->stdResult )) {
    				$this->gmtConfirm = $this->stdResult->{"gmtConfirm"};
    			}
    			    		    				    			    			if (array_key_exists ( "totalFee", $this->stdResult )) {
    				$this->totalFee = $this->stdResult->{"totalFee"};
    			}
    			    		    				    			    			if (array_key_exists ( "payType", $this->stdResult )) {
    				$this->payType = $this->stdResult->{"payType"};
    			}
    			    		    				    			    			if (array_key_exists ( "itemList", $this->stdResult )) {
    			$itemListResult=$this->stdResult->{"itemList"};
    				$object = json_decode ( json_encode ( $itemListResult ), true );
					$this->itemList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaPreOrderItemInfoResult=new AlibabaPreOrderItemInfo();
						$AlibabaPreOrderItemInfoResult->setArrayResult($arrayobject );
						$this->itemList [$i] = $AlibabaPreOrderItemInfoResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "detailUrl", $this->stdResult )) {
    				$this->detailUrl = $this->stdResult->{"detailUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "bizOrderId", $this->stdResult )) {
    				$this->bizOrderId = $this->stdResult->{"bizOrderId"};
    			}
    			    		    				    			    			if (array_key_exists ( "actualTotalFee", $this->stdResult )) {
    				$this->actualTotalFee = $this->stdResult->{"actualTotalFee"};
    			}
    			    		    				    			    			if (array_key_exists ( "adjustFee", $this->stdResult )) {
    				$this->adjustFee = $this->stdResult->{"adjustFee"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "gmtModified", $this->arrayResult )) {
    			$this->gmtModified = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "postFee", $this->arrayResult )) {
    			$this->postFee = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerSubId", $this->arrayResult )) {
    			$this->buyerSubId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "operatorId", $this->arrayResult )) {
    			$this->operatorId = $arrayResult['${paramType.paramName}'];
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
    		    	    			    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "logisticsType", $this->arrayResult )) {
    			$this->logisticsType = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtConfirm", $this->arrayResult )) {
    			$this->gmtConfirm = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "totalFee", $this->arrayResult )) {
    			$this->totalFee = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "payType", $this->arrayResult )) {
    			$this->payType = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "itemList", $this->arrayResult )) {
    		$itemListResult=$arrayResult['${paramType.paramName}'];
    			$this->itemList = new AlibabaPreOrderItemInfo();
    			$this->itemList->setStdResult ( $itemListResult);
    		}
    		    	    			    		    			if (array_key_exists ( "detailUrl", $this->arrayResult )) {
    			$this->detailUrl = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "bizOrderId", $this->arrayResult )) {
    			$this->bizOrderId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "actualTotalFee", $this->arrayResult )) {
    			$this->actualTotalFee = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "adjustFee", $this->arrayResult )) {
    			$this->adjustFee = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>