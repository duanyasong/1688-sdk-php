<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProcurementApiSendgoodsBasicModelPoSendGoodsEntryModel extends SDKDomain {

       	
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
    
        	
    private $brandModel;
    
        /**
    * @return 型号
    */
        public function getBrandModel() {
        return $this->brandModel;
    }
    
    /**
     * 设置型号     
     * @param String $brandModel     
     * 参数示例：<pre>123</pre>     
     * 此参数必填     */
    public function setBrandModel( $brandModel) {
        $this->brandModel = $brandModel;
    }
    
        	
    private $brandName;
    
        /**
    * @return 品牌
    */
        public function getBrandName() {
        return $this->brandName;
    }
    
    /**
     * 设置品牌     
     * @param String $brandName     
     * 参数示例：<pre>阿里</pre>     
     * 此参数必填     */
    public function setBrandName( $brandName) {
        $this->brandName = $brandName;
    }
    
        	
    private $buyerMemberId;
    
        /**
    * @return 买家会员memberId
    */
        public function getBuyerMemberId() {
        return $this->buyerMemberId;
    }
    
    /**
     * 设置买家会员memberId     
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
    
        	
    private $companyCode;
    
        /**
    * @return 公司编码	
    */
        public function getCompanyCode() {
        return $this->companyCode;
    }
    
    /**
     * 设置公司编码	     
     * @param String $companyCode     
     * 参数示例：<pre>s-01	</pre>     
     * 此参数必填     */
    public function setCompanyCode( $companyCode) {
        $this->companyCode = $companyCode;
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
     * 参数示例：<pre>张三</pre>     
     * 此参数必填     */
    public function setCreatorName( $creatorName) {
        $this->creatorName = $creatorName;
    }
    
        	
    private $expectArrivalDate;
    
        /**
    * @return 期望到货日
    */
        public function getExpectArrivalDate() {
        return $this->expectArrivalDate;
    }
    
    /**
     * 设置期望到货日     
     * @param Date $expectArrivalDate     
     * 参数示例：<pre>2018-12-12</pre>     
     * 此参数必填     */
    public function setExpectArrivalDate( $expectArrivalDate) {
        $this->expectArrivalDate = $expectArrivalDate;
    }
    
        	
    private $factoryCode;
    
        /**
    * @return 工厂编码
    */
        public function getFactoryCode() {
        return $this->factoryCode;
    }
    
    /**
     * 设置工厂编码     
     * @param String $factoryCode     
     * 参数示例：<pre>f01</pre>     
     * 此参数必填     */
    public function setFactoryCode( $factoryCode) {
        $this->factoryCode = $factoryCode;
    }
    
        	
    private $factoryName;
    
        /**
    * @return 工厂名
    */
        public function getFactoryName() {
        return $this->factoryName;
    }
    
    /**
     * 设置工厂名     
     * @param String $factoryName     
     * 参数示例：<pre>西厂</pre>     
     * 此参数必填     */
    public function setFactoryName( $factoryName) {
        $this->factoryName = $factoryName;
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
    * @return 发货子单id
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置发货子单id     
     * @param Long $id     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
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
    
        	
    private $poOrderCode;
    
        /**
    * @return 采购订单编号
    */
        public function getPoOrderCode() {
        return $this->poOrderCode;
    }
    
    /**
     * 设置采购订单编号     
     * @param String $poOrderCode     
     * 参数示例：<pre>WH20181212</pre>     
     * 此参数必填     */
    public function setPoOrderCode( $poOrderCode) {
        $this->poOrderCode = $poOrderCode;
    }
    
        	
    private $poOrderCreatorLogin;
    
        /**
    * @return 采购订单创建人Login名
    */
        public function getPoOrderCreatorLogin() {
        return $this->poOrderCreatorLogin;
    }
    
    /**
     * 设置采购订单创建人Login名     
     * @param String $poOrderCreatorLogin     
     * 参数示例：<pre>阿里：李四	</pre>     
     * 此参数必填     */
    public function setPoOrderCreatorLogin( $poOrderCreatorLogin) {
        $this->poOrderCreatorLogin = $poOrderCreatorLogin;
    }
    
        	
    private $poOrderCreatorName;
    
        /**
    * @return 采购订单创建人名
    */
        public function getPoOrderCreatorName() {
        return $this->poOrderCreatorName;
    }
    
    /**
     * 设置采购订单创建人名     
     * @param String $poOrderCreatorName     
     * 参数示例：<pre>李四	</pre>     
     * 此参数必填     */
    public function setPoOrderCreatorName( $poOrderCreatorName) {
        $this->poOrderCreatorName = $poOrderCreatorName;
    }
    
        	
    private $poOrderEntryId;
    
        /**
    * @return 采购子订单id
    */
        public function getPoOrderEntryId() {
        return $this->poOrderEntryId;
    }
    
    /**
     * 设置采购子订单id     
     * @param Long $poOrderEntryId     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setPoOrderEntryId( $poOrderEntryId) {
        $this->poOrderEntryId = $poOrderEntryId;
    }
    
        	
    private $poOrderEntryRowId;
    
        /**
    * @return 采购子订单行号
    */
        public function getPoOrderEntryRowId() {
        return $this->poOrderEntryRowId;
    }
    
    /**
     * 设置采购子订单行号     
     * @param String $poOrderEntryRowId     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setPoOrderEntryRowId( $poOrderEntryRowId) {
        $this->poOrderEntryRowId = $poOrderEntryRowId;
    }
    
        	
    private $poOrderId;
    
        /**
    * @return 对应采购订单主健行id
    */
        public function getPoOrderId() {
        return $this->poOrderId;
    }
    
    /**
     * 设置对应采购订单主健行id     
     * @param Long $poOrderId     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setPoOrderId( $poOrderId) {
        $this->poOrderId = $poOrderId;
    }
    
        	
    private $poSgId;
    
        /**
    * @return 发货单id
    */
        public function getPoSgId() {
        return $this->poSgId;
    }
    
    /**
     * 设置发货单id     
     * @param Long $poSgId     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setPoSgId( $poSgId) {
        $this->poSgId = $poSgId;
    }
    
        	
    private $receiveAmount;
    
        /**
    * @return 收货量
    */
        public function getReceiveAmount() {
        return $this->receiveAmount;
    }
    
    /**
     * 设置收货量     
     * @param BigDecimal $receiveAmount     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setReceiveAmount( $receiveAmount) {
        $this->receiveAmount = $receiveAmount;
    }
    
        	
    private $rowId;
    
        /**
    * @return 行号
    */
        public function getRowId() {
        return $this->rowId;
    }
    
    /**
     * 设置行号     
     * @param String $rowId     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setRowId( $rowId) {
        $this->rowId = $rowId;
    }
    
        	
    private $sendAmount;
    
        /**
    * @return 发货量
    */
        public function getSendAmount() {
        return $this->sendAmount;
    }
    
    /**
     * 设置发货量     
     * @param BigDecimal $sendAmount     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setSendAmount( $sendAmount) {
        $this->sendAmount = $sendAmount;
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
     * 参数示例：<pre>123</pre>     
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
    
        	
    private $storehouseCode;
    
        /**
    * @return 仓库编码
    */
        public function getStorehouseCode() {
        return $this->storehouseCode;
    }
    
    /**
     * 设置仓库编码     
     * @param String $storehouseCode     
     * 参数示例：<pre>s01</pre>     
     * 此参数必填     */
    public function setStorehouseCode( $storehouseCode) {
        $this->storehouseCode = $storehouseCode;
    }
    
        	
    private $storehouseName;
    
        /**
    * @return 仓库名
    */
        public function getStorehouseName() {
        return $this->storehouseName;
    }
    
    /**
     * 设置仓库名     
     * @param String $storehouseName     
     * 参数示例：<pre>1号仓库</pre>     
     * 此参数必填     */
    public function setStorehouseName( $storehouseName) {
        $this->storehouseName = $storehouseName;
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
    
        	
    private $supplierRemark;
    
        /**
    * @return 供应商给买家备注	
    */
        public function getSupplierRemark() {
        return $this->supplierRemark;
    }
    
    /**
     * 设置供应商给买家备注	     
     * @param String $supplierRemark     
     * 参数示例：<pre>15日前会到货	</pre>     
     * 此参数必填     */
    public function setSupplierRemark( $supplierRemark) {
        $this->supplierRemark = $supplierRemark;
    }
    
        	
    private $tolerance;
    
        /**
    * @return 是否允差
    */
        public function getTolerance() {
        return $this->tolerance;
    }
    
    /**
     * 设置是否允差     
     * @param Byte $tolerance     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setTolerance( $tolerance) {
        $this->tolerance = $tolerance;
    }
    
        	
    private $unit;
    
        /**
    * @return 单位
    */
        public function getUnit() {
        return $this->unit;
    }
    
    /**
     * 设置单位     
     * @param String $unit     
     * 参数示例：<pre>吨</pre>     
     * 此参数必填     */
    public function setUnit( $unit) {
        $this->unit = $unit;
    }
    
        	
    private $unitCode;
    
        /**
    * @return 单位编码
    */
        public function getUnitCode() {
        return $this->unitCode;
    }
    
    /**
     * 设置单位编码     
     * @param String $unitCode     
     * 参数示例：<pre>t</pre>     
     * 此参数必填     */
    public function setUnitCode( $unitCode) {
        $this->unitCode = $unitCode;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "attributes", $this->stdResult )) {
    				$this->attributes = $this->stdResult->{"attributes"};
    			}
    			    		    				    			    			if (array_key_exists ( "brandModel", $this->stdResult )) {
    				$this->brandModel = $this->stdResult->{"brandModel"};
    			}
    			    		    				    			    			if (array_key_exists ( "brandName", $this->stdResult )) {
    				$this->brandName = $this->stdResult->{"brandName"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerMemberId", $this->stdResult )) {
    				$this->buyerMemberId = $this->stdResult->{"buyerMemberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerName", $this->stdResult )) {
    				$this->buyerName = $this->stdResult->{"buyerName"};
    			}
    			    		    				    			    			if (array_key_exists ( "companyCode", $this->stdResult )) {
    				$this->companyCode = $this->stdResult->{"companyCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "companyName", $this->stdResult )) {
    				$this->companyName = $this->stdResult->{"companyName"};
    			}
    			    		    				    			    			if (array_key_exists ( "creatorLoginId", $this->stdResult )) {
    				$this->creatorLoginId = $this->stdResult->{"creatorLoginId"};
    			}
    			    		    				    			    			if (array_key_exists ( "creatorName", $this->stdResult )) {
    				$this->creatorName = $this->stdResult->{"creatorName"};
    			}
    			    		    				    			    			if (array_key_exists ( "expectArrivalDate", $this->stdResult )) {
    				$this->expectArrivalDate = $this->stdResult->{"expectArrivalDate"};
    			}
    			    		    				    			    			if (array_key_exists ( "factoryCode", $this->stdResult )) {
    				$this->factoryCode = $this->stdResult->{"factoryCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "factoryName", $this->stdResult )) {
    				$this->factoryName = $this->stdResult->{"factoryName"};
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
    			    		    				    			    			if (array_key_exists ( "operatorName", $this->stdResult )) {
    				$this->operatorName = $this->stdResult->{"operatorName"};
    			}
    			    		    				    			    			if (array_key_exists ( "poOrderCode", $this->stdResult )) {
    				$this->poOrderCode = $this->stdResult->{"poOrderCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "poOrderCreatorLogin", $this->stdResult )) {
    				$this->poOrderCreatorLogin = $this->stdResult->{"poOrderCreatorLogin"};
    			}
    			    		    				    			    			if (array_key_exists ( "poOrderCreatorName", $this->stdResult )) {
    				$this->poOrderCreatorName = $this->stdResult->{"poOrderCreatorName"};
    			}
    			    		    				    			    			if (array_key_exists ( "poOrderEntryId", $this->stdResult )) {
    				$this->poOrderEntryId = $this->stdResult->{"poOrderEntryId"};
    			}
    			    		    				    			    			if (array_key_exists ( "poOrderEntryRowId", $this->stdResult )) {
    				$this->poOrderEntryRowId = $this->stdResult->{"poOrderEntryRowId"};
    			}
    			    		    				    			    			if (array_key_exists ( "poOrderId", $this->stdResult )) {
    				$this->poOrderId = $this->stdResult->{"poOrderId"};
    			}
    			    		    				    			    			if (array_key_exists ( "poSgId", $this->stdResult )) {
    				$this->poSgId = $this->stdResult->{"poSgId"};
    			}
    			    		    				    			    			if (array_key_exists ( "receiveAmount", $this->stdResult )) {
    				$this->receiveAmount = $this->stdResult->{"receiveAmount"};
    			}
    			    		    				    			    			if (array_key_exists ( "rowId", $this->stdResult )) {
    				$this->rowId = $this->stdResult->{"rowId"};
    			}
    			    		    				    			    			if (array_key_exists ( "sendAmount", $this->stdResult )) {
    				$this->sendAmount = $this->stdResult->{"sendAmount"};
    			}
    			    		    				    			    			if (array_key_exists ( "sgCode", $this->stdResult )) {
    				$this->sgCode = $this->stdResult->{"sgCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    				    			    			if (array_key_exists ( "storehouseCode", $this->stdResult )) {
    				$this->storehouseCode = $this->stdResult->{"storehouseCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "storehouseName", $this->stdResult )) {
    				$this->storehouseName = $this->stdResult->{"storehouseName"};
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
    			    		    				    			    			if (array_key_exists ( "supplierRemark", $this->stdResult )) {
    				$this->supplierRemark = $this->stdResult->{"supplierRemark"};
    			}
    			    		    				    			    			if (array_key_exists ( "tolerance", $this->stdResult )) {
    				$this->tolerance = $this->stdResult->{"tolerance"};
    			}
    			    		    				    			    			if (array_key_exists ( "unit", $this->stdResult )) {
    				$this->unit = $this->stdResult->{"unit"};
    			}
    			    		    				    			    			if (array_key_exists ( "unitCode", $this->stdResult )) {
    				$this->unitCode = $this->stdResult->{"unitCode"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "attributes", $this->arrayResult )) {
    			$this->attributes = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "brandModel", $this->arrayResult )) {
    			$this->brandModel = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "brandName", $this->arrayResult )) {
    			$this->brandName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerMemberId", $this->arrayResult )) {
    			$this->buyerMemberId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerName", $this->arrayResult )) {
    			$this->buyerName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "companyCode", $this->arrayResult )) {
    			$this->companyCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "companyName", $this->arrayResult )) {
    			$this->companyName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "creatorLoginId", $this->arrayResult )) {
    			$this->creatorLoginId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "creatorName", $this->arrayResult )) {
    			$this->creatorName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "expectArrivalDate", $this->arrayResult )) {
    			$this->expectArrivalDate = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "factoryCode", $this->arrayResult )) {
    			$this->factoryCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "factoryName", $this->arrayResult )) {
    			$this->factoryName = $arrayResult['${paramType.paramName}'];
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
    		    	    			    		    			if (array_key_exists ( "operatorName", $this->arrayResult )) {
    			$this->operatorName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "poOrderCode", $this->arrayResult )) {
    			$this->poOrderCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "poOrderCreatorLogin", $this->arrayResult )) {
    			$this->poOrderCreatorLogin = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "poOrderCreatorName", $this->arrayResult )) {
    			$this->poOrderCreatorName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "poOrderEntryId", $this->arrayResult )) {
    			$this->poOrderEntryId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "poOrderEntryRowId", $this->arrayResult )) {
    			$this->poOrderEntryRowId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "poOrderId", $this->arrayResult )) {
    			$this->poOrderId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "poSgId", $this->arrayResult )) {
    			$this->poSgId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "receiveAmount", $this->arrayResult )) {
    			$this->receiveAmount = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "rowId", $this->arrayResult )) {
    			$this->rowId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "sendAmount", $this->arrayResult )) {
    			$this->sendAmount = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "sgCode", $this->arrayResult )) {
    			$this->sgCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "storehouseCode", $this->arrayResult )) {
    			$this->storehouseCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "storehouseName", $this->arrayResult )) {
    			$this->storehouseName = $arrayResult['${paramType.paramName}'];
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
    		    	    			    		    			if (array_key_exists ( "supplierRemark", $this->arrayResult )) {
    			$this->supplierRemark = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "tolerance", $this->arrayResult )) {
    			$this->tolerance = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "unit", $this->arrayResult )) {
    			$this->unit = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "unitCode", $this->arrayResult )) {
    			$this->unitCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>