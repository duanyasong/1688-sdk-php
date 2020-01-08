<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCaigousharedApiPricelistModelAgreementPriceModel extends SDKDomain {

       	
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
    
        	
    private $noTaxPrice;
    
        /**
    * @return 非含税价
    */
        public function getNoTaxPrice() {
        return $this->noTaxPrice;
    }
    
    /**
     * 设置非含税价     
     * @param Long $noTaxPrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setNoTaxPrice( $noTaxPrice) {
        $this->noTaxPrice = $noTaxPrice;
    }
    
        	
    private $buyerUserId;
    
        /**
    * @return 采购商UserId
    */
        public function getBuyerUserId() {
        return $this->buyerUserId;
    }
    
    /**
     * 设置采购商UserId     
     * @param Long $buyerUserId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerUserId( $buyerUserId) {
        $this->buyerUserId = $buyerUserId;
    }
    
        	
    private $purchasingQuantity;
    
        /**
    * @return 计划采购数量
    */
        public function getPurchasingQuantity() {
        return $this->purchasingQuantity;
    }
    
    /**
     * 设置计划采购数量     
     * @param String $purchasingQuantity     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPurchasingQuantity( $purchasingQuantity) {
        $this->purchasingQuantity = $purchasingQuantity;
    }
    
        	
    private $sourceId;
    
        /**
    * @return 数据来源ID
    */
        public function getSourceId() {
        return $this->sourceId;
    }
    
    /**
     * 设置数据来源ID     
     * @param Long $sourceId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSourceId( $sourceId) {
        $this->sourceId = $sourceId;
    }
    
        	
    private $secondCategoryName;
    
        /**
    * @return 二级类目名称
    */
        public function getSecondCategoryName() {
        return $this->secondCategoryName;
    }
    
    /**
     * 设置二级类目名称     
     * @param String $secondCategoryName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSecondCategoryName( $secondCategoryName) {
        $this->secondCategoryName = $secondCategoryName;
    }
    
        	
    private $id;
    
        /**
    * @return 主健id
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置主健id     
     * @param Long $id     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $thirdCategoryName;
    
        /**
    * @return 三级类目名称
    */
        public function getThirdCategoryName() {
        return $this->thirdCategoryName;
    }
    
    /**
     * 设置三级类目名称     
     * @param String $thirdCategoryName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setThirdCategoryName( $thirdCategoryName) {
        $this->thirdCategoryName = $thirdCategoryName;
    }
    
        	
    private $purchasedQuantity;
    
        /**
    * @return 单行上的累计采购数量
    */
        public function getPurchasedQuantity() {
        return $this->purchasedQuantity;
    }
    
    /**
     * 设置单行上的累计采购数量     
     * @param String $purchasedQuantity     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPurchasedQuantity( $purchasedQuantity) {
        $this->purchasedQuantity = $purchasedQuantity;
    }
    
        	
    private $frameworkAgreementNum;
    
        /**
    * @return 框架协议编号
    */
        public function getFrameworkAgreementNum() {
        return $this->frameworkAgreementNum;
    }
    
    /**
     * 设置框架协议编号     
     * @param String $frameworkAgreementNum     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFrameworkAgreementNum( $frameworkAgreementNum) {
        $this->frameworkAgreementNum = $frameworkAgreementNum;
    }
    
        	
    private $firstCategoryId;
    
        /**
    * @return 一级类目Id
    */
        public function getFirstCategoryId() {
        return $this->firstCategoryId;
    }
    
    /**
     * 设置一级类目Id     
     * @param Long $firstCategoryId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFirstCategoryId( $firstCategoryId) {
        $this->firstCategoryId = $firstCategoryId;
    }
    
        	
    private $sourceType;
    
        /**
    * @return 数据来源
    */
        public function getSourceType() {
        return $this->sourceType;
    }
    
    /**
     * 设置数据来源     
     * @param String $sourceType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSourceType( $sourceType) {
        $this->sourceType = $sourceType;
    }
    
        	
    private $supplierUserId;
    
        /**
    * @return 供应商UserId
    */
        public function getSupplierUserId() {
        return $this->supplierUserId;
    }
    
    /**
     * 设置供应商UserId     
     * @param Long $supplierUserId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSupplierUserId( $supplierUserId) {
        $this->supplierUserId = $supplierUserId;
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
    
        	
    private $taxRate;
    
        /**
    * @return 税率
    */
        public function getTaxRate() {
        return $this->taxRate;
    }
    
    /**
     * 设置税率     
     * @param Integer $taxRate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTaxRate( $taxRate) {
        $this->taxRate = $taxRate;
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
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductCode( $productCode) {
        $this->productCode = $productCode;
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
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
    }
    
        	
    private $secondCategoryId;
    
        /**
    * @return 二级类目Id
    */
        public function getSecondCategoryId() {
        return $this->secondCategoryId;
    }
    
    /**
     * 设置二级类目Id     
     * @param Long $secondCategoryId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSecondCategoryId( $secondCategoryId) {
        $this->secondCategoryId = $secondCategoryId;
    }
    
        	
    private $moq;
    
        /**
    * @return 最小起订量
    */
        public function getMoq() {
        return $this->moq;
    }
    
    /**
     * 设置最小起订量     
     * @param Integer $moq     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMoq( $moq) {
        $this->moq = $moq;
    }
    
        	
    private $buyerMemberId;
    
        /**
    * @return 采购商MemberId
    */
        public function getBuyerMemberId() {
        return $this->buyerMemberId;
    }
    
    /**
     * 设置采购商MemberId     
     * @param String $buyerMemberId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerMemberId( $buyerMemberId) {
        $this->buyerMemberId = $buyerMemberId;
    }
    
        	
    private $frameworkAgreementId;
    
        /**
    * @return 框架协议表主健ID
    */
        public function getFrameworkAgreementId() {
        return $this->frameworkAgreementId;
    }
    
    /**
     * 设置框架协议表主健ID     
     * @param Long $frameworkAgreementId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFrameworkAgreementId( $frameworkAgreementId) {
        $this->frameworkAgreementId = $frameworkAgreementId;
    }
    
        	
    private $productId;
    
        /**
    * @return 物料ID
    */
        public function getProductId() {
        return $this->productId;
    }
    
    /**
     * 设置物料ID     
     * @param Long $productId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductId( $productId) {
        $this->productId = $productId;
    }
    
        	
    private $firstCategoryName;
    
        /**
    * @return 一级类目名称
    */
        public function getFirstCategoryName() {
        return $this->firstCategoryName;
    }
    
    /**
     * 设置一级类目名称     
     * @param String $firstCategoryName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFirstCategoryName( $firstCategoryName) {
        $this->firstCategoryName = $firstCategoryName;
    }
    
        	
    private $supplierMemberId;
    
        /**
    * @return 供应商MemberId
    */
        public function getSupplierMemberId() {
        return $this->supplierMemberId;
    }
    
    /**
     * 设置供应商MemberId     
     * @param String $supplierMemberId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSupplierMemberId( $supplierMemberId) {
        $this->supplierMemberId = $supplierMemberId;
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
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setUnit( $unit) {
        $this->unit = $unit;
    }
    
        	
    private $productDesc;
    
        /**
    * @return 产品描述
    */
        public function getProductDesc() {
        return $this->productDesc;
    }
    
    /**
     * 设置产品描述     
     * @param String $productDesc     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductDesc( $productDesc) {
        $this->productDesc = $productDesc;
    }
    
        	
    private $price;
    
        /**
    * @return 价格
    */
        public function getPrice() {
        return $this->price;
    }
    
    /**
     * 设置价格     
     * @param Long $price     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPrice( $price) {
        $this->price = $price;
    }
    
        	
    private $bizType;
    
        /**
    * @return 创建类型
    */
        public function getBizType() {
        return $this->bizType;
    }
    
    /**
     * 设置创建类型     
     * @param String $bizType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBizType( $bizType) {
        $this->bizType = $bizType;
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
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductName( $productName) {
        $this->productName = $productName;
    }
    
        	
    private $contractCode;
    
        /**
    * @return 合同编码
    */
        public function getContractCode() {
        return $this->contractCode;
    }
    
    /**
     * 设置合同编码     
     * @param String $contractCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setContractCode( $contractCode) {
        $this->contractCode = $contractCode;
    }
    
        	
    private $thirdCategoryId;
    
        /**
    * @return 三级类目Id
    */
        public function getThirdCategoryId() {
        return $this->thirdCategoryId;
    }
    
    /**
     * 设置三级类目Id     
     * @param Long $thirdCategoryId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setThirdCategoryId( $thirdCategoryId) {
        $this->thirdCategoryId = $thirdCategoryId;
    }
    
        	
    private $startDate;
    
        /**
    * @return 开始时间
    */
        public function getStartDate() {
        return $this->startDate;
    }
    
    /**
     * 设置开始时间     
     * @param Date $startDate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStartDate( $startDate) {
        $this->startDate = $startDate;
    }
    
        	
    private $endDate;
    
        /**
    * @return 结束时间
    */
        public function getEndDate() {
        return $this->endDate;
    }
    
    /**
     * 设置结束时间     
     * @param Date $endDate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setEndDate( $endDate) {
        $this->endDate = $endDate;
    }
    
        	
    private $purchasingAppNumber;
    
        /**
    * @return 采购申请号
    */
        public function getPurchasingAppNumber() {
        return $this->purchasingAppNumber;
    }
    
    /**
     * 设置采购申请号     
     * @param String $purchasingAppNumber     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPurchasingAppNumber( $purchasingAppNumber) {
        $this->purchasingAppNumber = $purchasingAppNumber;
    }
    
        	
    private $purchasingAppRowId;
    
        /**
    * @return 采购申请行号
    */
        public function getPurchasingAppRowId() {
        return $this->purchasingAppRowId;
    }
    
    /**
     * 设置采购申请行号     
     * @param String $purchasingAppRowId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPurchasingAppRowId( $purchasingAppRowId) {
        $this->purchasingAppRowId = $purchasingAppRowId;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "gmtModified", $this->stdResult )) {
    				$this->gmtModified = $this->stdResult->{"gmtModified"};
    			}
    			    		    				    			    			if (array_key_exists ( "noTaxPrice", $this->stdResult )) {
    				$this->noTaxPrice = $this->stdResult->{"noTaxPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerUserId", $this->stdResult )) {
    				$this->buyerUserId = $this->stdResult->{"buyerUserId"};
    			}
    			    		    				    			    			if (array_key_exists ( "purchasingQuantity", $this->stdResult )) {
    				$this->purchasingQuantity = $this->stdResult->{"purchasingQuantity"};
    			}
    			    		    				    			    			if (array_key_exists ( "sourceId", $this->stdResult )) {
    				$this->sourceId = $this->stdResult->{"sourceId"};
    			}
    			    		    				    			    			if (array_key_exists ( "secondCategoryName", $this->stdResult )) {
    				$this->secondCategoryName = $this->stdResult->{"secondCategoryName"};
    			}
    			    		    				    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "thirdCategoryName", $this->stdResult )) {
    				$this->thirdCategoryName = $this->stdResult->{"thirdCategoryName"};
    			}
    			    		    				    			    			if (array_key_exists ( "purchasedQuantity", $this->stdResult )) {
    				$this->purchasedQuantity = $this->stdResult->{"purchasedQuantity"};
    			}
    			    		    				    			    			if (array_key_exists ( "frameworkAgreementNum", $this->stdResult )) {
    				$this->frameworkAgreementNum = $this->stdResult->{"frameworkAgreementNum"};
    			}
    			    		    				    			    			if (array_key_exists ( "firstCategoryId", $this->stdResult )) {
    				$this->firstCategoryId = $this->stdResult->{"firstCategoryId"};
    			}
    			    		    				    			    			if (array_key_exists ( "sourceType", $this->stdResult )) {
    				$this->sourceType = $this->stdResult->{"sourceType"};
    			}
    			    		    				    			    			if (array_key_exists ( "supplierUserId", $this->stdResult )) {
    				$this->supplierUserId = $this->stdResult->{"supplierUserId"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtCreate", $this->stdResult )) {
    				$this->gmtCreate = $this->stdResult->{"gmtCreate"};
    			}
    			    		    				    			    			if (array_key_exists ( "taxRate", $this->stdResult )) {
    				$this->taxRate = $this->stdResult->{"taxRate"};
    			}
    			    		    				    			    			if (array_key_exists ( "productCode", $this->stdResult )) {
    				$this->productCode = $this->stdResult->{"productCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    				    			    			if (array_key_exists ( "secondCategoryId", $this->stdResult )) {
    				$this->secondCategoryId = $this->stdResult->{"secondCategoryId"};
    			}
    			    		    				    			    			if (array_key_exists ( "moq", $this->stdResult )) {
    				$this->moq = $this->stdResult->{"moq"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerMemberId", $this->stdResult )) {
    				$this->buyerMemberId = $this->stdResult->{"buyerMemberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "frameworkAgreementId", $this->stdResult )) {
    				$this->frameworkAgreementId = $this->stdResult->{"frameworkAgreementId"};
    			}
    			    		    				    			    			if (array_key_exists ( "productId", $this->stdResult )) {
    				$this->productId = $this->stdResult->{"productId"};
    			}
    			    		    				    			    			if (array_key_exists ( "firstCategoryName", $this->stdResult )) {
    				$this->firstCategoryName = $this->stdResult->{"firstCategoryName"};
    			}
    			    		    				    			    			if (array_key_exists ( "supplierMemberId", $this->stdResult )) {
    				$this->supplierMemberId = $this->stdResult->{"supplierMemberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "unit", $this->stdResult )) {
    				$this->unit = $this->stdResult->{"unit"};
    			}
    			    		    				    			    			if (array_key_exists ( "productDesc", $this->stdResult )) {
    				$this->productDesc = $this->stdResult->{"productDesc"};
    			}
    			    		    				    			    			if (array_key_exists ( "price", $this->stdResult )) {
    				$this->price = $this->stdResult->{"price"};
    			}
    			    		    				    			    			if (array_key_exists ( "bizType", $this->stdResult )) {
    				$this->bizType = $this->stdResult->{"bizType"};
    			}
    			    		    				    			    			if (array_key_exists ( "productName", $this->stdResult )) {
    				$this->productName = $this->stdResult->{"productName"};
    			}
    			    		    				    			    			if (array_key_exists ( "contractCode", $this->stdResult )) {
    				$this->contractCode = $this->stdResult->{"contractCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "thirdCategoryId", $this->stdResult )) {
    				$this->thirdCategoryId = $this->stdResult->{"thirdCategoryId"};
    			}
    			    		    				    			    			if (array_key_exists ( "startDate", $this->stdResult )) {
    				$this->startDate = $this->stdResult->{"startDate"};
    			}
    			    		    				    			    			if (array_key_exists ( "endDate", $this->stdResult )) {
    				$this->endDate = $this->stdResult->{"endDate"};
    			}
    			    		    				    			    			if (array_key_exists ( "purchasingAppNumber", $this->stdResult )) {
    				$this->purchasingAppNumber = $this->stdResult->{"purchasingAppNumber"};
    			}
    			    		    				    			    			if (array_key_exists ( "purchasingAppRowId", $this->stdResult )) {
    				$this->purchasingAppRowId = $this->stdResult->{"purchasingAppRowId"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "gmtModified", $this->arrayResult )) {
    			$this->gmtModified = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "noTaxPrice", $this->arrayResult )) {
    			$this->noTaxPrice = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerUserId", $this->arrayResult )) {
    			$this->buyerUserId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "purchasingQuantity", $this->arrayResult )) {
    			$this->purchasingQuantity = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "sourceId", $this->arrayResult )) {
    			$this->sourceId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "secondCategoryName", $this->arrayResult )) {
    			$this->secondCategoryName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "thirdCategoryName", $this->arrayResult )) {
    			$this->thirdCategoryName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "purchasedQuantity", $this->arrayResult )) {
    			$this->purchasedQuantity = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "frameworkAgreementNum", $this->arrayResult )) {
    			$this->frameworkAgreementNum = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "firstCategoryId", $this->arrayResult )) {
    			$this->firstCategoryId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "sourceType", $this->arrayResult )) {
    			$this->sourceType = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "supplierUserId", $this->arrayResult )) {
    			$this->supplierUserId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
    			$this->gmtCreate = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "taxRate", $this->arrayResult )) {
    			$this->taxRate = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "productCode", $this->arrayResult )) {
    			$this->productCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "secondCategoryId", $this->arrayResult )) {
    			$this->secondCategoryId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "moq", $this->arrayResult )) {
    			$this->moq = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerMemberId", $this->arrayResult )) {
    			$this->buyerMemberId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "frameworkAgreementId", $this->arrayResult )) {
    			$this->frameworkAgreementId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "productId", $this->arrayResult )) {
    			$this->productId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "firstCategoryName", $this->arrayResult )) {
    			$this->firstCategoryName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "supplierMemberId", $this->arrayResult )) {
    			$this->supplierMemberId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "unit", $this->arrayResult )) {
    			$this->unit = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "productDesc", $this->arrayResult )) {
    			$this->productDesc = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "price", $this->arrayResult )) {
    			$this->price = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "bizType", $this->arrayResult )) {
    			$this->bizType = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "productName", $this->arrayResult )) {
    			$this->productName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "contractCode", $this->arrayResult )) {
    			$this->contractCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "thirdCategoryId", $this->arrayResult )) {
    			$this->thirdCategoryId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "startDate", $this->arrayResult )) {
    			$this->startDate = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "endDate", $this->arrayResult )) {
    			$this->endDate = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "purchasingAppNumber", $this->arrayResult )) {
    			$this->purchasingAppNumber = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "purchasingAppRowId", $this->arrayResult )) {
    			$this->purchasingAppRowId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>