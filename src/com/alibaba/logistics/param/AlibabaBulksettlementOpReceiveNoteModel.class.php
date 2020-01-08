<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaBulksettlementOpCreateBulkSettlementReceiveNoteParam/AlibabaBulksettlementOpReceiveNoteEntryModel.class.php');

class AlibabaBulksettlementOpReceiveNoteModel extends SDKDomain {

       	
    private $id;
    
        /**
    * @return 收货主单id
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置收货主单id     
     * @param Long $id     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $statusInfo;
    
        /**
    * @return 收货主单状态状态
    */
        public function getStatusInfo() {
        return $this->statusInfo;
    }
    
    /**
     * 设置收货主单状态状态     
     * @param String $statusInfo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStatusInfo( $statusInfo) {
        $this->statusInfo = $statusInfo;
    }
    
        	
    private $actualPayFee;
    
        /**
    * @return 1 待发起结算 2 已发起结算
    */
        public function getActualPayFee() {
        return $this->actualPayFee;
    }
    
    /**
     * 设置1 待发起结算 2 已发起结算     
     * @param Long $actualPayFee     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setActualPayFee( $actualPayFee) {
        $this->actualPayFee = $actualPayFee;
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
    
        	
    private $isSuccess;
    
        /**
    * @return 是否正常创建
    */
        public function getIsSuccess() {
        return $this->isSuccess;
    }
    
    /**
     * 设置是否正常创建     
     * @param Integer $isSuccess     
     * 参数示例：<pre>1 正常创建；0 非正常创建</pre>     
     * 此参数必填     */
    public function setIsSuccess( $isSuccess) {
        $this->isSuccess = $isSuccess;
    }
    
        	
    private $orderId;
    
        /**
    * @return 主订单ID
    */
        public function getOrderId() {
        return $this->orderId;
    }
    
    /**
     * 设置主订单ID     
     * @param Long $orderId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderId( $orderId) {
        $this->orderId = $orderId;
    }
    
        	
    private $gmtReceive;
    
        /**
    * @return 收货时间
    */
        public function getGmtReceive() {
        return $this->gmtReceive;
    }
    
    /**
     * 设置收货时间     
     * @param Date $gmtReceive     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtReceive( $gmtReceive) {
        $this->gmtReceive = $gmtReceive;
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
    
        	
    private $sellerUserId;
    
        /**
    * @return 卖家主账号userId
    */
        public function getSellerUserId() {
        return $this->sellerUserId;
    }
    
    /**
     * 设置卖家主账号userId     
     * @param Long $sellerUserId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSellerUserId( $sellerUserId) {
        $this->sellerUserId = $sellerUserId;
    }
    
        	
    private $sellerCompanyName;
    
        /**
    * @return 卖家公司名称
    */
        public function getSellerCompanyName() {
        return $this->sellerCompanyName;
    }
    
    /**
     * 设置卖家公司名称     
     * @param String $sellerCompanyName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSellerCompanyName( $sellerCompanyName) {
        $this->sellerCompanyName = $sellerCompanyName;
    }
    
        	
    private $operatorUsername;
    
        /**
    * @return 收货操作者姓名
    */
        public function getOperatorUsername() {
        return $this->operatorUsername;
    }
    
    /**
     * 设置收货操作者姓名     
     * @param String $operatorUsername     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOperatorUsername( $operatorUsername) {
        $this->operatorUsername = $operatorUsername;
    }
    
        	
    private $buyerUserId;
    
        /**
    * @return 买家主账号
    */
        public function getBuyerUserId() {
        return $this->buyerUserId;
    }
    
    /**
     * 设置买家主账号     
     * @param String $buyerUserId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerUserId( $buyerUserId) {
        $this->buyerUserId = $buyerUserId;
    }
    
        	
    private $operatorUserId;
    
        /**
    * @return 收货操作者userId
    */
        public function getOperatorUserId() {
        return $this->operatorUserId;
    }
    
    /**
     * 设置收货操作者userId     
     * @param Long $operatorUserId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOperatorUserId( $operatorUserId) {
        $this->operatorUserId = $operatorUserId;
    }
    
        	
    private $pcorpName;
    
        /**
    * @return 名义下单 下单公司主体
    */
        public function getPcorpName() {
        return $this->pcorpName;
    }
    
    /**
     * 设置名义下单 下单公司主体     
     * @param String $pcorpName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPcorpName( $pcorpName) {
        $this->pcorpName = $pcorpName;
    }
    
        	
    private $buyerName;
    
        /**
    * @return 名义下单 下单账号
    */
        public function getBuyerName() {
        return $this->buyerName;
    }
    
    /**
     * 设置名义下单 下单账号     
     * @param String $buyerName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerName( $buyerName) {
        $this->buyerName = $buyerName;
    }
    
        	
    private $receiveEntrylist;
    
        /**
    * @return 
    */
        public function getReceiveEntrylist() {
        return $this->receiveEntrylist;
    }
    
    /**
     * 设置     
     * @param array include @see AlibabaBulksettlementOpReceiveNoteEntryModel[] $receiveEntrylist     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setReceiveEntrylist(AlibabaBulksettlementOpReceiveNoteEntryModel $receiveEntrylist) {
        $this->receiveEntrylist = $receiveEntrylist;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "statusInfo", $this->stdResult )) {
    				$this->statusInfo = $this->stdResult->{"statusInfo"};
    			}
    			    		    				    			    			if (array_key_exists ( "actualPayFee", $this->stdResult )) {
    				$this->actualPayFee = $this->stdResult->{"actualPayFee"};
    			}
    			    		    				    			    			if (array_key_exists ( "attributes", $this->stdResult )) {
    				$this->attributes = $this->stdResult->{"attributes"};
    			}
    			    		    				    			    			if (array_key_exists ( "isSuccess", $this->stdResult )) {
    				$this->isSuccess = $this->stdResult->{"isSuccess"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderId", $this->stdResult )) {
    				$this->orderId = $this->stdResult->{"orderId"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtReceive", $this->stdResult )) {
    				$this->gmtReceive = $this->stdResult->{"gmtReceive"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtCreate", $this->stdResult )) {
    				$this->gmtCreate = $this->stdResult->{"gmtCreate"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtModified", $this->stdResult )) {
    				$this->gmtModified = $this->stdResult->{"gmtModified"};
    			}
    			    		    				    			    			if (array_key_exists ( "sellerUserId", $this->stdResult )) {
    				$this->sellerUserId = $this->stdResult->{"sellerUserId"};
    			}
    			    		    				    			    			if (array_key_exists ( "sellerCompanyName", $this->stdResult )) {
    				$this->sellerCompanyName = $this->stdResult->{"sellerCompanyName"};
    			}
    			    		    				    			    			if (array_key_exists ( "operatorUsername", $this->stdResult )) {
    				$this->operatorUsername = $this->stdResult->{"operatorUsername"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerUserId", $this->stdResult )) {
    				$this->buyerUserId = $this->stdResult->{"buyerUserId"};
    			}
    			    		    				    			    			if (array_key_exists ( "operatorUserId", $this->stdResult )) {
    				$this->operatorUserId = $this->stdResult->{"operatorUserId"};
    			}
    			    		    				    			    			if (array_key_exists ( "pcorpName", $this->stdResult )) {
    				$this->pcorpName = $this->stdResult->{"pcorpName"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerName", $this->stdResult )) {
    				$this->buyerName = $this->stdResult->{"buyerName"};
    			}
    			    		    				    			    			if (array_key_exists ( "receiveEntrylist", $this->stdResult )) {
    			$receiveEntrylistResult=$this->stdResult->{"receiveEntrylist"};
    				$object = json_decode ( json_encode ( $receiveEntrylistResult ), true );
					$this->receiveEntrylist = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaBulksettlementOpReceiveNoteEntryModelResult=new AlibabaBulksettlementOpReceiveNoteEntryModel();
						$AlibabaBulksettlementOpReceiveNoteEntryModelResult->setArrayResult($arrayobject );
						$this->receiveEntrylist [$i] = $AlibabaBulksettlementOpReceiveNoteEntryModelResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "statusInfo", $this->arrayResult )) {
    			$this->statusInfo = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "actualPayFee", $this->arrayResult )) {
    			$this->actualPayFee = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "attributes", $this->arrayResult )) {
    			$this->attributes = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "isSuccess", $this->arrayResult )) {
    			$this->isSuccess = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderId", $this->arrayResult )) {
    			$this->orderId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtReceive", $this->arrayResult )) {
    			$this->gmtReceive = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
    			$this->gmtCreate = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtModified", $this->arrayResult )) {
    			$this->gmtModified = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "sellerUserId", $this->arrayResult )) {
    			$this->sellerUserId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "sellerCompanyName", $this->arrayResult )) {
    			$this->sellerCompanyName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "operatorUsername", $this->arrayResult )) {
    			$this->operatorUsername = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerUserId", $this->arrayResult )) {
    			$this->buyerUserId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "operatorUserId", $this->arrayResult )) {
    			$this->operatorUserId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "pcorpName", $this->arrayResult )) {
    			$this->pcorpName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerName", $this->arrayResult )) {
    			$this->buyerName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "receiveEntrylist", $this->arrayResult )) {
    		$receiveEntrylistResult=$arrayResult['${paramType.paramName}'];
    			$this->receiveEntrylist = new AlibabaBulksettlementOpReceiveNoteEntryModel();
    			$this->receiveEntrylist->setStdResult ( $receiveEntrylistResult);
    		}
    		    	    		}
 
   
}
?>