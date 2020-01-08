<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('ComAlibabaProcurementBuyerReceiveGoodsServiceQueryReceiveGoodsNoteParam/AlibabaProcurementApiReceivegoodsBasicModelReceiveGoodsNoteEntryModel.class.php');

class AlibabaProcurementApiReceivegoodsIntegrationResultIntegrationReceiveGoodsNoteModel extends SDKDomain {

       	
    private $buyerInsideRemark;
    
        /**
    * @return 买家对内备注
    */
        public function getBuyerInsideRemark() {
        return $this->buyerInsideRemark;
    }
    
    /**
     * 设置买家对内备注     
     * @param String $buyerInsideRemark     
     * 参数示例：<pre>买家自己人看</pre>     
     * 此参数必填     */
    public function setBuyerInsideRemark( $buyerInsideRemark) {
        $this->buyerInsideRemark = $buyerInsideRemark;
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
     * 参数示例：<pre>b2b-1234</pre>     
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
     * 参数示例：<pre>苹果北京分公司</pre>     
     * 此参数必填     */
    public function setBuyerName( $buyerName) {
        $this->buyerName = $buyerName;
    }
    
        	
    private $buyerOutsideRemark;
    
        /**
    * @return 买家给卖家备注
    */
        public function getBuyerOutsideRemark() {
        return $this->buyerOutsideRemark;
    }
    
    /**
     * 设置买家给卖家备注     
     * @param String $buyerOutsideRemark     
     * 参数示例：<pre>请于15日前能发货</pre>     
     * 此参数必填     */
    public function setBuyerOutsideRemark( $buyerOutsideRemark) {
        $this->buyerOutsideRemark = $buyerOutsideRemark;
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
     * 参数示例：<pre>s-01</pre>     
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
     * 参数示例：<pre>大中华区中国北京分公司</pre>     
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
     * 参数示例：<pre>张三</pre>     
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
     * 参数示例：<pre>张三</pre>     
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
     * 参数示例：<pre>2018-10-01</pre>     
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
     * 参数示例：<pre>2018-10-01</pre>     
     * 此参数必填     */
    public function setGmtModified( $gmtModified) {
        $this->gmtModified = $gmtModified;
    }
    
        	
    private $id;
    
        /**
    * @return 收货单id
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置收货单id     
     * @param Long $id     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
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
     * 参数示例：<pre>李四</pre>     
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
     * 参数示例：<pre>李四</pre>     
     * 此参数必填     */
    public function setOperatorName( $operatorName) {
        $this->operatorName = $operatorName;
    }
    
        	
    private $receiveDate;
    
        /**
    * @return 收货日期
    */
        public function getReceiveDate() {
        return $this->receiveDate;
    }
    
    /**
     * 设置收货日期     
     * @param Date $receiveDate     
     * 参数示例：<pre>2018-10-01</pre>     
     * 此参数必填     */
    public function setReceiveDate( $receiveDate) {
        $this->receiveDate = $receiveDate;
    }
    
        	
    private $receiveGoodsNoteEntries;
    
        /**
    * @return 收货子单列表
    */
        public function getReceiveGoodsNoteEntries() {
        return $this->receiveGoodsNoteEntries;
    }
    
    /**
     * 设置收货子单列表     
     * @param array include @see AlibabaProcurementApiReceivegoodsBasicModelReceiveGoodsNoteEntryModel[] $receiveGoodsNoteEntries     
     * 参数示例：<pre>null</pre>     
     * 此参数必填     */
    public function setReceiveGoodsNoteEntries(AlibabaProcurementApiReceivegoodsBasicModelReceiveGoodsNoteEntryModel $receiveGoodsNoteEntries) {
        $this->receiveGoodsNoteEntries = $receiveGoodsNoteEntries;
    }
    
        	
    private $rnCode;
    
        /**
    * @return 收货单号
    */
        public function getRnCode() {
        return $this->rnCode;
    }
    
    /**
     * 设置收货单号     
     * @param String $rnCode     
     * 参数示例：<pre>123456</pre>     
     * 此参数必填     */
    public function setRnCode( $rnCode) {
        $this->rnCode = $rnCode;
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
     * 参数示例：<pre>approved</pre>     
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
     * 参数示例：<pre>s-1234</pre>     
     * 此参数必填     */
    public function setSupplierCode( $supplierCode) {
        $this->supplierCode = $supplierCode;
    }
    
        	
    private $supplierLoginName;
    
        /**
    * @return 供应商登陆名
    */
        public function getSupplierLoginName() {
        return $this->supplierLoginName;
    }
    
    /**
     * 设置供应商登陆名     
     * @param String $supplierLoginName     
     * 参数示例：<pre>富士康成都分公司</pre>     
     * 此参数必填     */
    public function setSupplierLoginName( $supplierLoginName) {
        $this->supplierLoginName = $supplierLoginName;
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
     * 参数示例：<pre>b2b-5678</pre>     
     * 此参数必填     */
    public function setSupplierMemberId( $supplierMemberId) {
        $this->supplierMemberId = $supplierMemberId;
    }
    
        	
    private $supplierMobile;
    
        /**
    * @return 供应商手机号
    */
        public function getSupplierMobile() {
        return $this->supplierMobile;
    }
    
    /**
     * 设置供应商手机号     
     * @param String $supplierMobile     
     * 参数示例：<pre>12345678901</pre>     
     * 此参数必填     */
    public function setSupplierMobile( $supplierMobile) {
        $this->supplierMobile = $supplierMobile;
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
     * 参数示例：<pre>富士康中国区成都分公司</pre>     
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
     * 参数示例：<pre>15日前会到货</pre>     
     * 此参数必填     */
    public function setSupplierRemark( $supplierRemark) {
        $this->supplierRemark = $supplierRemark;
    }
    
        	
    private $supplierTel;
    
        /**
    * @return 供应商联系电话
    */
        public function getSupplierTel() {
        return $this->supplierTel;
    }
    
    /**
     * 设置供应商联系电话     
     * @param String $supplierTel     
     * 参数示例：<pre>1234567890</pre>     
     * 此参数必填     */
    public function setSupplierTel( $supplierTel) {
        $this->supplierTel = $supplierTel;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "buyerInsideRemark", $this->stdResult )) {
    				$this->buyerInsideRemark = $this->stdResult->{"buyerInsideRemark"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerMemberId", $this->stdResult )) {
    				$this->buyerMemberId = $this->stdResult->{"buyerMemberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerName", $this->stdResult )) {
    				$this->buyerName = $this->stdResult->{"buyerName"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerOutsideRemark", $this->stdResult )) {
    				$this->buyerOutsideRemark = $this->stdResult->{"buyerOutsideRemark"};
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
    			    		    				    			    			if (array_key_exists ( "creatorMobile", $this->stdResult )) {
    				$this->creatorMobile = $this->stdResult->{"creatorMobile"};
    			}
    			    		    				    			    			if (array_key_exists ( "creatorName", $this->stdResult )) {
    				$this->creatorName = $this->stdResult->{"creatorName"};
    			}
    			    		    				    			    			if (array_key_exists ( "creatorTel", $this->stdResult )) {
    				$this->creatorTel = $this->stdResult->{"creatorTel"};
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
    			    		    				    			    			if (array_key_exists ( "operatorLoginId", $this->stdResult )) {
    				$this->operatorLoginId = $this->stdResult->{"operatorLoginId"};
    			}
    			    		    				    			    			if (array_key_exists ( "operatorName", $this->stdResult )) {
    				$this->operatorName = $this->stdResult->{"operatorName"};
    			}
    			    		    				    			    			if (array_key_exists ( "receiveDate", $this->stdResult )) {
    				$this->receiveDate = $this->stdResult->{"receiveDate"};
    			}
    			    		    				    			    			if (array_key_exists ( "receiveGoodsNoteEntries", $this->stdResult )) {
    			$receiveGoodsNoteEntriesResult=$this->stdResult->{"receiveGoodsNoteEntries"};
    				$object = json_decode ( json_encode ( $receiveGoodsNoteEntriesResult ), true );
					$this->receiveGoodsNoteEntries = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaProcurementApiReceivegoodsBasicModelReceiveGoodsNoteEntryModelResult=new AlibabaProcurementApiReceivegoodsBasicModelReceiveGoodsNoteEntryModel();
						$AlibabaProcurementApiReceivegoodsBasicModelReceiveGoodsNoteEntryModelResult->setArrayResult($arrayobject );
						$this->receiveGoodsNoteEntries [$i] = $AlibabaProcurementApiReceivegoodsBasicModelReceiveGoodsNoteEntryModelResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "rnCode", $this->stdResult )) {
    				$this->rnCode = $this->stdResult->{"rnCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    				    			    			if (array_key_exists ( "supplierCode", $this->stdResult )) {
    				$this->supplierCode = $this->stdResult->{"supplierCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "supplierLoginName", $this->stdResult )) {
    				$this->supplierLoginName = $this->stdResult->{"supplierLoginName"};
    			}
    			    		    				    			    			if (array_key_exists ( "supplierMemberId", $this->stdResult )) {
    				$this->supplierMemberId = $this->stdResult->{"supplierMemberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "supplierMobile", $this->stdResult )) {
    				$this->supplierMobile = $this->stdResult->{"supplierMobile"};
    			}
    			    		    				    			    			if (array_key_exists ( "supplierName", $this->stdResult )) {
    				$this->supplierName = $this->stdResult->{"supplierName"};
    			}
    			    		    				    			    			if (array_key_exists ( "supplierRemark", $this->stdResult )) {
    				$this->supplierRemark = $this->stdResult->{"supplierRemark"};
    			}
    			    		    				    			    			if (array_key_exists ( "supplierTel", $this->stdResult )) {
    				$this->supplierTel = $this->stdResult->{"supplierTel"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "buyerInsideRemark", $this->arrayResult )) {
    			$this->buyerInsideRemark = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerMemberId", $this->arrayResult )) {
    			$this->buyerMemberId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerName", $this->arrayResult )) {
    			$this->buyerName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerOutsideRemark", $this->arrayResult )) {
    			$this->buyerOutsideRemark = $arrayResult['${paramType.paramName}'];
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
    		    	    			    		    			if (array_key_exists ( "creatorMobile", $this->arrayResult )) {
    			$this->creatorMobile = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "creatorName", $this->arrayResult )) {
    			$this->creatorName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "creatorTel", $this->arrayResult )) {
    			$this->creatorTel = $arrayResult['${paramType.paramName}'];
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
    		    	    			    		    			if (array_key_exists ( "operatorLoginId", $this->arrayResult )) {
    			$this->operatorLoginId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "operatorName", $this->arrayResult )) {
    			$this->operatorName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "receiveDate", $this->arrayResult )) {
    			$this->receiveDate = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "receiveGoodsNoteEntries", $this->arrayResult )) {
    		$receiveGoodsNoteEntriesResult=$arrayResult['${paramType.paramName}'];
    			$this->receiveGoodsNoteEntries = new AlibabaProcurementApiReceivegoodsBasicModelReceiveGoodsNoteEntryModel();
    			$this->receiveGoodsNoteEntries->setStdResult ( $receiveGoodsNoteEntriesResult);
    		}
    		    	    			    		    			if (array_key_exists ( "rnCode", $this->arrayResult )) {
    			$this->rnCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "supplierCode", $this->arrayResult )) {
    			$this->supplierCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "supplierLoginName", $this->arrayResult )) {
    			$this->supplierLoginName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "supplierMemberId", $this->arrayResult )) {
    			$this->supplierMemberId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "supplierMobile", $this->arrayResult )) {
    			$this->supplierMobile = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "supplierName", $this->arrayResult )) {
    			$this->supplierName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "supplierRemark", $this->arrayResult )) {
    			$this->supplierRemark = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "supplierTel", $this->arrayResult )) {
    			$this->supplierTel = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>