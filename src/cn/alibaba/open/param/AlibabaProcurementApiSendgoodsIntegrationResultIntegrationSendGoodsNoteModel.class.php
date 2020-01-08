<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('ComAlibabaProcurementBuyerSendGoodsServiceQuerySendGoodsNoteParam/AlibabaProcurementApiSendgoodsBasicModelPoSendGoodsEntryModel.class.php');

class AlibabaProcurementApiSendgoodsIntegrationResultIntegrationSendGoodsNoteModel extends SDKDomain {

       	
    private $address;
    
        /**
    * @return 收货地址
    */
        public function getAddress() {
        return $this->address;
    }
    
    /**
     * 设置收货地址     
     * @param String $address     
     * 参数示例：<pre>长河街道</pre>     
     * 此参数必填     */
    public function setAddress( $address) {
        $this->address = $address;
    }
    
        	
    private $attributes;
    
        /**
    * @return 扩展信息
    */
        public function getAttributes() {
        return $this->attributes;
    }
    
    /**
     * 设置扩展信息     
     * @param String $attributes     
     * 参数示例：<pre>null</pre>     
     * 此参数必填     */
    public function setAttributes( $attributes) {
        $this->attributes = $attributes;
    }
    
        	
    private $buyerMainUserId;
    
        /**
    * @return 买家主账号id
    */
        public function getBuyerMainUserId() {
        return $this->buyerMainUserId;
    }
    
    /**
     * 设置买家主账号id     
     * @param Long $buyerMainUserId     
     * 参数示例：<pre>2062093241</pre>     
     * 此参数必填     */
    public function setBuyerMainUserId( $buyerMainUserId) {
        $this->buyerMainUserId = $buyerMainUserId;
    }
    
        	
    private $buyerMemberId;
    
        /**
    * @return 买家会员id	
    */
        public function getBuyerMemberId() {
        return $this->buyerMemberId;
    }
    
    /**
     * 设置买家会员id	     
     * @param String $buyerMemberId     
     * 参数示例：<pre>b2b-1234	</pre>     
     * 此参数必填     */
    public function setBuyerMemberId( $buyerMemberId) {
        $this->buyerMemberId = $buyerMemberId;
    }
    
        	
    private $buyerName;
    
        /**
    * @return 买家名	
    */
        public function getBuyerName() {
        return $this->buyerName;
    }
    
    /**
     * 设置买家名	     
     * @param String $buyerName     
     * 参数示例：<pre>苹果北京分公司	</pre>     
     * 此参数必填     */
    public function setBuyerName( $buyerName) {
        $this->buyerName = $buyerName;
    }
    
        	
    private $companyName;
    
        /**
    * @return 公司名	
    */
        public function getCompanyName() {
        return $this->companyName;
    }
    
    /**
     * 设置公司名	     
     * @param String $companyName     
     * 参数示例：<pre>大中华区中国北京分公司	</pre>     
     * 此参数必填     */
    public function setCompanyName( $companyName) {
        $this->companyName = $companyName;
    }
    
        	
    private $creatorLoginId;
    
        /**
    * @return 创建人LoginId	
    */
        public function getCreatorLoginId() {
        return $this->creatorLoginId;
    }
    
    /**
     * 设置创建人LoginId	     
     * @param String $creatorLoginId     
     * 参数示例：<pre>张三	</pre>     
     * 此参数必填     */
    public function setCreatorLoginId( $creatorLoginId) {
        $this->creatorLoginId = $creatorLoginId;
    }
    
        	
    private $creatorMobile;
    
        /**
    * @return 创建者手机	
    */
        public function getCreatorMobile() {
        return $this->creatorMobile;
    }
    
    /**
     * 设置创建者手机	     
     * @param String $creatorMobile     
     * 参数示例：<pre>12345678901</pre>     
     * 此参数必填     */
    public function setCreatorMobile( $creatorMobile) {
        $this->creatorMobile = $creatorMobile;
    }
    
        	
    private $creatorName;
    
        /**
    * @return 创建者名	
    */
        public function getCreatorName() {
        return $this->creatorName;
    }
    
    /**
     * 设置创建者名	     
     * @param String $creatorName     
     * 参数示例：<pre>张三	</pre>     
     * 此参数必填     */
    public function setCreatorName( $creatorName) {
        $this->creatorName = $creatorName;
    }
    
        	
    private $creatorTel;
    
        /**
    * @return 创建者电话	
    */
        public function getCreatorTel() {
        return $this->creatorTel;
    }
    
    /**
     * 设置创建者电话	     
     * @param String $creatorTel     
     * 参数示例：<pre>12345678</pre>     
     * 此参数必填     */
    public function setCreatorTel( $creatorTel) {
        $this->creatorTel = $creatorTel;
    }
    
        	
    private $entryList;
    
        /**
    * @return 发货单子单列表
    */
        public function getEntryList() {
        return $this->entryList;
    }
    
    /**
     * 设置发货单子单列表     
     * @param array include @see AlibabaProcurementApiSendgoodsBasicModelPoSendGoodsEntryModel[] $entryList     
     * 参数示例：<pre>null</pre>     
     * 此参数必填     */
    public function setEntryList(AlibabaProcurementApiSendgoodsBasicModelPoSendGoodsEntryModel $entryList) {
        $this->entryList = $entryList;
    }
    
        	
    private $expectArrivalDate;
    
        /**
    * @return 预计到货期
    */
        public function getExpectArrivalDate() {
        return $this->expectArrivalDate;
    }
    
    /**
     * 设置预计到货期     
     * @param Date $expectArrivalDate     
     * 参数示例：<pre>2018-12-12</pre>     
     * 此参数必填     */
    public function setExpectArrivalDate( $expectArrivalDate) {
        $this->expectArrivalDate = $expectArrivalDate;
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
     * 参数示例：<pre>2018-10-01	</pre>     
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
     * 参数示例：<pre>2018-10-01	</pre>     
     * 此参数必填     */
    public function setGmtModified( $gmtModified) {
        $this->gmtModified = $gmtModified;
    }
    
        	
    private $id;
    
        /**
    * @return 发货单id	
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置发货单id	     
     * @param Long $id     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $logisticsNumber;
    
        /**
    * @return 物流单号
    */
        public function getLogisticsNumber() {
        return $this->logisticsNumber;
    }
    
    /**
     * 设置物流单号     
     * @param String $logisticsNumber     
     * 参数示例：<pre>123456</pre>     
     * 此参数必填     */
    public function setLogisticsNumber( $logisticsNumber) {
        $this->logisticsNumber = $logisticsNumber;
    }
    
        	
    private $operatorLoginId;
    
        /**
    * @return 操作人LoginId	
    */
        public function getOperatorLoginId() {
        return $this->operatorLoginId;
    }
    
    /**
     * 设置操作人LoginId	     
     * @param String $operatorLoginId     
     * 参数示例：<pre>李四	</pre>     
     * 此参数必填     */
    public function setOperatorLoginId( $operatorLoginId) {
        $this->operatorLoginId = $operatorLoginId;
    }
    
        	
    private $operatorName;
    
        /**
    * @return 操作人名	
    */
        public function getOperatorName() {
        return $this->operatorName;
    }
    
    /**
     * 设置操作人名	     
     * @param String $operatorName     
     * 参数示例：<pre>李四	</pre>     
     * 此参数必填     */
    public function setOperatorName( $operatorName) {
        $this->operatorName = $operatorName;
    }
    
        	
    private $poOrderId;
    
        /**
    * @return 关联订单id
    */
        public function getPoOrderId() {
        return $this->poOrderId;
    }
    
    /**
     * 设置关联订单id     
     * @param Long $poOrderId     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setPoOrderId( $poOrderId) {
        $this->poOrderId = $poOrderId;
    }
    
        	
    private $receiverMobile;
    
        /**
    * @return 收货人手机号
    */
        public function getReceiverMobile() {
        return $this->receiverMobile;
    }
    
    /**
     * 设置收货人手机号     
     * @param String $receiverMobile     
     * 参数示例：<pre>12345678901</pre>     
     * 此参数必填     */
    public function setReceiverMobile( $receiverMobile) {
        $this->receiverMobile = $receiverMobile;
    }
    
        	
    private $receiverName;
    
        /**
    * @return 收货人姓名
    */
        public function getReceiverName() {
        return $this->receiverName;
    }
    
    /**
     * 设置收货人姓名     
     * @param String $receiverName     
     * 参数示例：<pre>李四	</pre>     
     * 此参数必填     */
    public function setReceiverName( $receiverName) {
        $this->receiverName = $receiverName;
    }
    
        	
    private $receiverTel;
    
        /**
    * @return 收货人电话
    */
        public function getReceiverTel() {
        return $this->receiverTel;
    }
    
    /**
     * 设置收货人电话     
     * @param String $receiverTel     
     * 参数示例：<pre>0571-12345678</pre>     
     * 此参数必填     */
    public function setReceiverTel( $receiverTel) {
        $this->receiverTel = $receiverTel;
    }
    
        	
    private $sendDate;
    
        /**
    * @return 发货日期
    */
        public function getSendDate() {
        return $this->sendDate;
    }
    
    /**
     * 设置发货日期     
     * @param Date $sendDate     
     * 参数示例：<pre>2018-10-01	</pre>     
     * 此参数必填     */
    public function setSendDate( $sendDate) {
        $this->sendDate = $sendDate;
    }
    
        	
    private $sgCode;
    
        /**
    * @return 发货单号
    */
        public function getSgCode() {
        return $this->sgCode;
    }
    
    /**
     * 设置发货单号     
     * @param String $sgCode     
     * 参数示例：<pre>2018092800004</pre>     
     * 此参数必填     */
    public function setSgCode( $sgCode) {
        $this->sgCode = $sgCode;
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
     * 参数示例：<pre>wait_receive_goods</pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
    }
    
        	
    private $supplierCode;
    
        /**
    * @return 供应商编号	
    */
        public function getSupplierCode() {
        return $this->supplierCode;
    }
    
    /**
     * 设置供应商编号	     
     * @param String $supplierCode     
     * 参数示例：<pre>s-1234	</pre>     
     * 此参数必填     */
    public function setSupplierCode( $supplierCode) {
        $this->supplierCode = $supplierCode;
    }
    
        	
    private $supplierMemberId;
    
        /**
    * @return 供应商会员id	
    */
        public function getSupplierMemberId() {
        return $this->supplierMemberId;
    }
    
    /**
     * 设置供应商会员id	     
     * @param String $supplierMemberId     
     * 参数示例：<pre>b2b-5678	</pre>     
     * 此参数必填     */
    public function setSupplierMemberId( $supplierMemberId) {
        $this->supplierMemberId = $supplierMemberId;
    }
    
        	
    private $supplierName;
    
        /**
    * @return 供应商名	
    */
        public function getSupplierName() {
        return $this->supplierName;
    }
    
    /**
     * 设置供应商名	     
     * @param String $supplierName     
     * 参数示例：<pre>富士康中国区成都分公司	</pre>     
     * 此参数必填     */
    public function setSupplierName( $supplierName) {
        $this->supplierName = $supplierName;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "address", $this->stdResult )) {
    				$this->address = $this->stdResult->{"address"};
    			}
    			    		    				    			    			if (array_key_exists ( "attributes", $this->stdResult )) {
    				$this->attributes = $this->stdResult->{"attributes"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerMainUserId", $this->stdResult )) {
    				$this->buyerMainUserId = $this->stdResult->{"buyerMainUserId"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerMemberId", $this->stdResult )) {
    				$this->buyerMemberId = $this->stdResult->{"buyerMemberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerName", $this->stdResult )) {
    				$this->buyerName = $this->stdResult->{"buyerName"};
    			}
    			    		    				    			    			if (array_key_exists ( "companyName", $this->stdResult )) {
    				$this->companyName = $this->stdResult->{"companyName"};
    			}
    			    		    				    			    			if (array_key_exists ( "creatorLoginId", $this->stdResult )) {
    				$this->creatorLoginId = $this->stdResult->{"creatorLoginId"};
    			}
    			    		    				    			    			if (array_key_exists ( "creatorMobile", $this->stdResult )) {
    				$this->creatorMobile = $this->stdResult->{"creatorMobile"};
    			}
    			    		    				    			    			if (array_key_exists ( "creatorName", $this->stdResult )) {
    				$this->creatorName = $this->stdResult->{"creatorName"};
    			}
    			    		    				    			    			if (array_key_exists ( "creatorTel", $this->stdResult )) {
    				$this->creatorTel = $this->stdResult->{"creatorTel"};
    			}
    			    		    				    			    			if (array_key_exists ( "entryList", $this->stdResult )) {
    			$entryListResult=$this->stdResult->{"entryList"};
    				$object = json_decode ( json_encode ( $entryListResult ), true );
					$this->entryList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaProcurementApiSendgoodsBasicModelPoSendGoodsEntryModelResult=new AlibabaProcurementApiSendgoodsBasicModelPoSendGoodsEntryModel();
						$AlibabaProcurementApiSendgoodsBasicModelPoSendGoodsEntryModelResult->setArrayResult($arrayobject );
						$this->entryList [$i] = $AlibabaProcurementApiSendgoodsBasicModelPoSendGoodsEntryModelResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "expectArrivalDate", $this->stdResult )) {
    				$this->expectArrivalDate = $this->stdResult->{"expectArrivalDate"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtCreate", $this->stdResult )) {
    				$this->gmtCreate = $this->stdResult->{"gmtCreate"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtModified", $this->stdResult )) {
    				$this->gmtModified = $this->stdResult->{"gmtModified"};
    			}
    			    		    				    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "logisticsNumber", $this->stdResult )) {
    				$this->logisticsNumber = $this->stdResult->{"logisticsNumber"};
    			}
    			    		    				    			    			if (array_key_exists ( "operatorLoginId", $this->stdResult )) {
    				$this->operatorLoginId = $this->stdResult->{"operatorLoginId"};
    			}
    			    		    				    			    			if (array_key_exists ( "operatorName", $this->stdResult )) {
    				$this->operatorName = $this->stdResult->{"operatorName"};
    			}
    			    		    				    			    			if (array_key_exists ( "poOrderId", $this->stdResult )) {
    				$this->poOrderId = $this->stdResult->{"poOrderId"};
    			}
    			    		    				    			    			if (array_key_exists ( "receiverMobile", $this->stdResult )) {
    				$this->receiverMobile = $this->stdResult->{"receiverMobile"};
    			}
    			    		    				    			    			if (array_key_exists ( "receiverName", $this->stdResult )) {
    				$this->receiverName = $this->stdResult->{"receiverName"};
    			}
    			    		    				    			    			if (array_key_exists ( "receiverTel", $this->stdResult )) {
    				$this->receiverTel = $this->stdResult->{"receiverTel"};
    			}
    			    		    				    			    			if (array_key_exists ( "sendDate", $this->stdResult )) {
    				$this->sendDate = $this->stdResult->{"sendDate"};
    			}
    			    		    				    			    			if (array_key_exists ( "sgCode", $this->stdResult )) {
    				$this->sgCode = $this->stdResult->{"sgCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    				    			    			if (array_key_exists ( "supplierCode", $this->stdResult )) {
    				$this->supplierCode = $this->stdResult->{"supplierCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "supplierMemberId", $this->stdResult )) {
    				$this->supplierMemberId = $this->stdResult->{"supplierMemberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "supplierName", $this->stdResult )) {
    				$this->supplierName = $this->stdResult->{"supplierName"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "address", $this->arrayResult )) {
    			$this->address = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "attributes", $this->arrayResult )) {
    			$this->attributes = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerMainUserId", $this->arrayResult )) {
    			$this->buyerMainUserId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerMemberId", $this->arrayResult )) {
    			$this->buyerMemberId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerName", $this->arrayResult )) {
    			$this->buyerName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "companyName", $this->arrayResult )) {
    			$this->companyName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "creatorLoginId", $this->arrayResult )) {
    			$this->creatorLoginId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "creatorMobile", $this->arrayResult )) {
    			$this->creatorMobile = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "creatorName", $this->arrayResult )) {
    			$this->creatorName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "creatorTel", $this->arrayResult )) {
    			$this->creatorTel = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "entryList", $this->arrayResult )) {
    		$entryListResult=$arrayResult['${paramType.paramName}'];
    			$this->entryList = new AlibabaProcurementApiSendgoodsBasicModelPoSendGoodsEntryModel();
    			$this->entryList->setStdResult ( $entryListResult);
    		}
    		    	    			    		    			if (array_key_exists ( "expectArrivalDate", $this->arrayResult )) {
    			$this->expectArrivalDate = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
    			$this->gmtCreate = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtModified", $this->arrayResult )) {
    			$this->gmtModified = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "logisticsNumber", $this->arrayResult )) {
    			$this->logisticsNumber = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "operatorLoginId", $this->arrayResult )) {
    			$this->operatorLoginId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "operatorName", $this->arrayResult )) {
    			$this->operatorName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "poOrderId", $this->arrayResult )) {
    			$this->poOrderId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "receiverMobile", $this->arrayResult )) {
    			$this->receiverMobile = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "receiverName", $this->arrayResult )) {
    			$this->receiverName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "receiverTel", $this->arrayResult )) {
    			$this->receiverTel = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "sendDate", $this->arrayResult )) {
    			$this->sendDate = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "sgCode", $this->arrayResult )) {
    			$this->sgCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "supplierCode", $this->arrayResult )) {
    			$this->supplierCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "supplierMemberId", $this->arrayResult )) {
    			$this->supplierMemberId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "supplierName", $this->arrayResult )) {
    			$this->supplierName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>