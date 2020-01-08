<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaCaigouFrameworkAgreementGetParam/AlibabaCaigousharedApiPricelistModelAgreementPriceModel.class.php');
include_once ('AlibabaCaigouFrameworkAgreementGetParam/AlibabaCaigouApiCommonModelAttachment.class.php');

class AlibabaCaigousharedApiFrameworkagreementModelFrameworkAgreementModel extends SDKDomain {

       	
    private $gmtModified;
    
        /**
    * @return 修改日期
    */
        public function getGmtModified() {
        return $this->gmtModified;
    }
    
    /**
     * 设置修改日期     
     * @param Date $gmtModified     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtModified( $gmtModified) {
        $this->gmtModified = $gmtModified;
    }
    
        	
    private $tradeType;
    
        /**
    * @return 交易方式
    */
        public function getTradeType() {
        return $this->tradeType;
    }
    
    /**
     * 设置交易方式     
     * @param String $tradeType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTradeType( $tradeType) {
        $this->tradeType = $tradeType;
    }
    
        	
    private $supplierName;
    
        /**
    * @return 供应商名称
    */
        public function getSupplierName() {
        return $this->supplierName;
    }
    
    /**
     * 设置供应商名称     
     * @param String $supplierName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSupplierName( $supplierName) {
        $this->supplierName = $supplierName;
    }
    
        	
    private $cumulativeTotalAmount;
    
        /**
    * @return 累计协议总金额
    */
        public function getCumulativeTotalAmount() {
        return $this->cumulativeTotalAmount;
    }
    
    /**
     * 设置累计协议总金额     
     * @param String $cumulativeTotalAmount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCumulativeTotalAmount( $cumulativeTotalAmount) {
        $this->cumulativeTotalAmount = $cumulativeTotalAmount;
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
    
        	
    private $buyerAdminUserId;
    
        /**
    * @return 主账号userId
    */
        public function getBuyerAdminUserId() {
        return $this->buyerAdminUserId;
    }
    
    /**
     * 设置主账号userId     
     * @param Long $buyerAdminUserId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerAdminUserId( $buyerAdminUserId) {
        $this->buyerAdminUserId = $buyerAdminUserId;
    }
    
        	
    private $operatorUserId;
    
        /**
    * @return 操作人userId
    */
        public function getOperatorUserId() {
        return $this->operatorUserId;
    }
    
    /**
     * 设置操作人userId     
     * @param Long $operatorUserId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOperatorUserId( $operatorUserId) {
        $this->operatorUserId = $operatorUserId;
    }
    
        	
    private $type;
    
        /**
    * @return 框架协议类型
    */
        public function getType() {
        return $this->type;
    }
    
    /**
     * 设置框架协议类型     
     * @param String $type     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setType( $type) {
        $this->type = $type;
    }
    
        	
    private $endTime;
    
        /**
    * @return 结束日期
    */
        public function getEndTime() {
        return $this->endTime;
    }
    
    /**
     * 设置结束日期     
     * @param Date $endTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setEndTime( $endTime) {
        $this->endTime = $endTime;
    }
    
        	
    private $creatorUserName;
    
        /**
    * @return 创建者用户名
    */
        public function getCreatorUserName() {
        return $this->creatorUserName;
    }
    
    /**
     * 设置创建者用户名     
     * @param String $creatorUserName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCreatorUserName( $creatorUserName) {
        $this->creatorUserName = $creatorUserName;
    }
    
        	
    private $version;
    
        /**
    * @return 版本号
    */
        public function getVersion() {
        return $this->version;
    }
    
    /**
     * 设置版本号     
     * @param Integer $version     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setVersion( $version) {
        $this->version = $version;
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
    
        	
    private $creatorUserId;
    
        /**
    * @return 创建者UserId
    */
        public function getCreatorUserId() {
        return $this->creatorUserId;
    }
    
    /**
     * 设置创建者UserId     
     * @param Long $creatorUserId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCreatorUserId( $creatorUserId) {
        $this->creatorUserId = $creatorUserId;
    }
    
        	
    private $title;
    
        /**
    * @return 标题
    */
        public function getTitle() {
        return $this->title;
    }
    
    /**
     * 设置标题     
     * @param String $title     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTitle( $title) {
        $this->title = $title;
    }
    
        	
    private $totalAmount;
    
        /**
    * @return 协议总金额
    */
        public function getTotalAmount() {
        return $this->totalAmount;
    }
    
    /**
     * 设置协议总金额     
     * @param String $totalAmount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTotalAmount( $totalAmount) {
        $this->totalAmount = $totalAmount;
    }
    
        	
    private $frameworkAgreementNum;
    
        /**
    * @return 价格协议编号
    */
        public function getFrameworkAgreementNum() {
        return $this->frameworkAgreementNum;
    }
    
    /**
     * 设置价格协议编号     
     * @param String $frameworkAgreementNum     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFrameworkAgreementNum( $frameworkAgreementNum) {
        $this->frameworkAgreementNum = $frameworkAgreementNum;
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
    * @return 创建日期
    */
        public function getGmtCreate() {
        return $this->gmtCreate;
    }
    
    /**
     * 设置创建日期     
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
     * @param String $status     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
    }
    
        	
    private $childPayType;
    
        /**
    * @return 支付方式子类型
    */
        public function getChildPayType() {
        return $this->childPayType;
    }
    
    /**
     * 设置支付方式子类型     
     * @param String $childPayType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setChildPayType( $childPayType) {
        $this->childPayType = $childPayType;
    }
    
        	
    private $beginTime;
    
        /**
    * @return 开始日期
    */
        public function getBeginTime() {
        return $this->beginTime;
    }
    
    /**
     * 设置开始日期     
     * @param Date $beginTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBeginTime( $beginTime) {
        $this->beginTime = $beginTime;
    }
    
        	
    private $supplierCode;
    
        /**
    * @return 供应商编码
    */
        public function getSupplierCode() {
        return $this->supplierCode;
    }
    
    /**
     * 设置供应商编码     
     * @param String $supplierCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSupplierCode( $supplierCode) {
        $this->supplierCode = $supplierCode;
    }
    
        	
    private $companyName;
    
        /**
    * @return 公司名称
    */
        public function getCompanyName() {
        return $this->companyName;
    }
    
    /**
     * 设置公司名称     
     * @param String $companyName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCompanyName( $companyName) {
        $this->companyName = $companyName;
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
    
        	
    private $childTradeType;
    
        /**
    * @return 交易方式子类型
    */
        public function getChildTradeType() {
        return $this->childTradeType;
    }
    
    /**
     * 设置交易方式子类型     
     * @param String $childTradeType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setChildTradeType( $childTradeType) {
        $this->childTradeType = $childTradeType;
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
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCompanyCode( $companyCode) {
        $this->companyCode = $companyCode;
    }
    
        	
    private $invoiceRequire;
    
        /**
    * @return 发票要求
    */
        public function getInvoiceRequire() {
        return $this->invoiceRequire;
    }
    
    /**
     * 设置发票要求     
     * @param String $invoiceRequire     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInvoiceRequire( $invoiceRequire) {
        $this->invoiceRequire = $invoiceRequire;
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
    
        	
    private $outSysNum;
    
        /**
    * @return 外部系统编号
    */
        public function getOutSysNum() {
        return $this->outSysNum;
    }
    
    /**
     * 设置外部系统编号     
     * @param String $outSysNum     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOutSysNum( $outSysNum) {
        $this->outSysNum = $outSysNum;
    }
    
        	
    private $buyerGroupCode;
    
        /**
    * @return 采购组编码
    */
        public function getBuyerGroupCode() {
        return $this->buyerGroupCode;
    }
    
    /**
     * 设置采购组编码     
     * @param String $buyerGroupCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerGroupCode( $buyerGroupCode) {
        $this->buyerGroupCode = $buyerGroupCode;
    }
    
        	
    private $payType;
    
        /**
    * @return 付款方式
    */
        public function getPayType() {
        return $this->payType;
    }
    
    /**
     * 设置付款方式     
     * @param String $payType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPayType( $payType) {
        $this->payType = $payType;
    }
    
        	
    private $buyerGroupName;
    
        /**
    * @return 采购组名称
    */
        public function getBuyerGroupName() {
        return $this->buyerGroupName;
    }
    
    /**
     * 设置采购组名称     
     * @param String $buyerGroupName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerGroupName( $buyerGroupName) {
        $this->buyerGroupName = $buyerGroupName;
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
    
        	
    private $agreementPriceList;
    
        /**
    * @return 物料行数据list
    */
        public function getAgreementPriceList() {
        return $this->agreementPriceList;
    }
    
    /**
     * 设置物料行数据list     
     * @param array include @see AlibabaCaigousharedApiPricelistModelAgreementPriceModel[] $agreementPriceList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAgreementPriceList(AlibabaCaigousharedApiPricelistModelAgreementPriceModel $agreementPriceList) {
        $this->agreementPriceList = $agreementPriceList;
    }
    
        	
    private $attachmentList;
    
        /**
    * @return 附件列表
    */
        public function getAttachmentList() {
        return $this->attachmentList;
    }
    
    /**
     * 设置附件列表     
     * @param array include @see AlibabaCaigouApiCommonModelAttachment[] $attachmentList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAttachmentList(AlibabaCaigouApiCommonModelAttachment $attachmentList) {
        $this->attachmentList = $attachmentList;
    }
    
        	
    private $purchasingOrgCode;
    
        /**
    * @return 采购组织
    */
        public function getPurchasingOrgCode() {
        return $this->purchasingOrgCode;
    }
    
    /**
     * 设置采购组织     
     * @param String $purchasingOrgCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPurchasingOrgCode( $purchasingOrgCode) {
        $this->purchasingOrgCode = $purchasingOrgCode;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "gmtModified", $this->stdResult )) {
    				$this->gmtModified = $this->stdResult->{"gmtModified"};
    			}
    			    		    				    			    			if (array_key_exists ( "tradeType", $this->stdResult )) {
    				$this->tradeType = $this->stdResult->{"tradeType"};
    			}
    			    		    				    			    			if (array_key_exists ( "supplierName", $this->stdResult )) {
    				$this->supplierName = $this->stdResult->{"supplierName"};
    			}
    			    		    				    			    			if (array_key_exists ( "cumulativeTotalAmount", $this->stdResult )) {
    				$this->cumulativeTotalAmount = $this->stdResult->{"cumulativeTotalAmount"};
    			}
    			    		    				    			    			if (array_key_exists ( "remark", $this->stdResult )) {
    				$this->remark = $this->stdResult->{"remark"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerAdminUserId", $this->stdResult )) {
    				$this->buyerAdminUserId = $this->stdResult->{"buyerAdminUserId"};
    			}
    			    		    				    			    			if (array_key_exists ( "operatorUserId", $this->stdResult )) {
    				$this->operatorUserId = $this->stdResult->{"operatorUserId"};
    			}
    			    		    				    			    			if (array_key_exists ( "type", $this->stdResult )) {
    				$this->type = $this->stdResult->{"type"};
    			}
    			    		    				    			    			if (array_key_exists ( "endTime", $this->stdResult )) {
    				$this->endTime = $this->stdResult->{"endTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "creatorUserName", $this->stdResult )) {
    				$this->creatorUserName = $this->stdResult->{"creatorUserName"};
    			}
    			    		    				    			    			if (array_key_exists ( "version", $this->stdResult )) {
    				$this->version = $this->stdResult->{"version"};
    			}
    			    		    				    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "creatorUserId", $this->stdResult )) {
    				$this->creatorUserId = $this->stdResult->{"creatorUserId"};
    			}
    			    		    				    			    			if (array_key_exists ( "title", $this->stdResult )) {
    				$this->title = $this->stdResult->{"title"};
    			}
    			    		    				    			    			if (array_key_exists ( "totalAmount", $this->stdResult )) {
    				$this->totalAmount = $this->stdResult->{"totalAmount"};
    			}
    			    		    				    			    			if (array_key_exists ( "frameworkAgreementNum", $this->stdResult )) {
    				$this->frameworkAgreementNum = $this->stdResult->{"frameworkAgreementNum"};
    			}
    			    		    				    			    			if (array_key_exists ( "supplierUserId", $this->stdResult )) {
    				$this->supplierUserId = $this->stdResult->{"supplierUserId"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtCreate", $this->stdResult )) {
    				$this->gmtCreate = $this->stdResult->{"gmtCreate"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    				    			    			if (array_key_exists ( "childPayType", $this->stdResult )) {
    				$this->childPayType = $this->stdResult->{"childPayType"};
    			}
    			    		    				    			    			if (array_key_exists ( "beginTime", $this->stdResult )) {
    				$this->beginTime = $this->stdResult->{"beginTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "supplierCode", $this->stdResult )) {
    				$this->supplierCode = $this->stdResult->{"supplierCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "companyName", $this->stdResult )) {
    				$this->companyName = $this->stdResult->{"companyName"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerMemberId", $this->stdResult )) {
    				$this->buyerMemberId = $this->stdResult->{"buyerMemberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "childTradeType", $this->stdResult )) {
    				$this->childTradeType = $this->stdResult->{"childTradeType"};
    			}
    			    		    				    			    			if (array_key_exists ( "companyCode", $this->stdResult )) {
    				$this->companyCode = $this->stdResult->{"companyCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "invoiceRequire", $this->stdResult )) {
    				$this->invoiceRequire = $this->stdResult->{"invoiceRequire"};
    			}
    			    		    				    			    			if (array_key_exists ( "supplierMemberId", $this->stdResult )) {
    				$this->supplierMemberId = $this->stdResult->{"supplierMemberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "outSysNum", $this->stdResult )) {
    				$this->outSysNum = $this->stdResult->{"outSysNum"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerGroupCode", $this->stdResult )) {
    				$this->buyerGroupCode = $this->stdResult->{"buyerGroupCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "payType", $this->stdResult )) {
    				$this->payType = $this->stdResult->{"payType"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerGroupName", $this->stdResult )) {
    				$this->buyerGroupName = $this->stdResult->{"buyerGroupName"};
    			}
    			    		    				    			    			if (array_key_exists ( "contractCode", $this->stdResult )) {
    				$this->contractCode = $this->stdResult->{"contractCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "agreementPriceList", $this->stdResult )) {
    			$agreementPriceListResult=$this->stdResult->{"agreementPriceList"};
    				$object = json_decode ( json_encode ( $agreementPriceListResult ), true );
					$this->agreementPriceList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaCaigousharedApiPricelistModelAgreementPriceModelResult=new AlibabaCaigousharedApiPricelistModelAgreementPriceModel();
						$AlibabaCaigousharedApiPricelistModelAgreementPriceModelResult->setArrayResult($arrayobject );
						$this->agreementPriceList [$i] = $AlibabaCaigousharedApiPricelistModelAgreementPriceModelResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "attachmentList", $this->stdResult )) {
    			$attachmentListResult=$this->stdResult->{"attachmentList"};
    				$object = json_decode ( json_encode ( $attachmentListResult ), true );
					$this->attachmentList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaCaigouApiCommonModelAttachmentResult=new AlibabaCaigouApiCommonModelAttachment();
						$AlibabaCaigouApiCommonModelAttachmentResult->setArrayResult($arrayobject );
						$this->attachmentList [$i] = $AlibabaCaigouApiCommonModelAttachmentResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "purchasingOrgCode", $this->stdResult )) {
    				$this->purchasingOrgCode = $this->stdResult->{"purchasingOrgCode"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "gmtModified", $this->arrayResult )) {
    			$this->gmtModified = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "tradeType", $this->arrayResult )) {
    			$this->tradeType = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "supplierName", $this->arrayResult )) {
    			$this->supplierName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "cumulativeTotalAmount", $this->arrayResult )) {
    			$this->cumulativeTotalAmount = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "remark", $this->arrayResult )) {
    			$this->remark = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerAdminUserId", $this->arrayResult )) {
    			$this->buyerAdminUserId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "operatorUserId", $this->arrayResult )) {
    			$this->operatorUserId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "type", $this->arrayResult )) {
    			$this->type = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "endTime", $this->arrayResult )) {
    			$this->endTime = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "creatorUserName", $this->arrayResult )) {
    			$this->creatorUserName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "version", $this->arrayResult )) {
    			$this->version = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "creatorUserId", $this->arrayResult )) {
    			$this->creatorUserId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "title", $this->arrayResult )) {
    			$this->title = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "totalAmount", $this->arrayResult )) {
    			$this->totalAmount = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "frameworkAgreementNum", $this->arrayResult )) {
    			$this->frameworkAgreementNum = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "supplierUserId", $this->arrayResult )) {
    			$this->supplierUserId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
    			$this->gmtCreate = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "childPayType", $this->arrayResult )) {
    			$this->childPayType = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "beginTime", $this->arrayResult )) {
    			$this->beginTime = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "supplierCode", $this->arrayResult )) {
    			$this->supplierCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "companyName", $this->arrayResult )) {
    			$this->companyName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerMemberId", $this->arrayResult )) {
    			$this->buyerMemberId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "childTradeType", $this->arrayResult )) {
    			$this->childTradeType = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "companyCode", $this->arrayResult )) {
    			$this->companyCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "invoiceRequire", $this->arrayResult )) {
    			$this->invoiceRequire = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "supplierMemberId", $this->arrayResult )) {
    			$this->supplierMemberId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "outSysNum", $this->arrayResult )) {
    			$this->outSysNum = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerGroupCode", $this->arrayResult )) {
    			$this->buyerGroupCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "payType", $this->arrayResult )) {
    			$this->payType = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerGroupName", $this->arrayResult )) {
    			$this->buyerGroupName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "contractCode", $this->arrayResult )) {
    			$this->contractCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "agreementPriceList", $this->arrayResult )) {
    		$agreementPriceListResult=$arrayResult['${paramType.paramName}'];
    			$this->agreementPriceList = new AlibabaCaigousharedApiPricelistModelAgreementPriceModel();
    			$this->agreementPriceList->setStdResult ( $agreementPriceListResult);
    		}
    		    	    			    		    		if (array_key_exists ( "attachmentList", $this->arrayResult )) {
    		$attachmentListResult=$arrayResult['${paramType.paramName}'];
    			$this->attachmentList = new AlibabaCaigouApiCommonModelAttachment();
    			$this->attachmentList->setStdResult ( $attachmentListResult);
    		}
    		    	    			    		    			if (array_key_exists ( "purchasingOrgCode", $this->arrayResult )) {
    			$this->purchasingOrgCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>