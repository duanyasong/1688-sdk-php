<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('CaigouApiQuotationBuyerGetQuotationDetailParam/ComAlibabaCaigouApiCommonModelAttachment.class.php');
include_once ('CaigouApiQuotationBuyerGetQuotationDetailParam/ComAlibabaCaigouApiCommonModelContactInfo.class.php');
include_once ('CaigouApiQuotationBuyerGetQuotationDetailParam/ComAlibabaCaigouApiCommonModelSupplyNoteItem.class.php');
include_once ('CaigouApiQuotationBuyerGetQuotationDetailParam/ComAlibabaCaigouApiCommonModelPayRequirement.class.php');

class ComAlibabaCaigouApiQuotationModelQuotation extends SDKDomain {

       	
    private $expireDate;
    
        /**
    * @return 报价过期时间
    */
        public function getExpireDate() {
        return $this->expireDate;
    }
    
    /**
     * 设置报价过期时间     
     * @param Date $expireDate     
     * 参数示例：<pre>20140326000000000+0800</pre>     
     * 此参数必填     */
    public function setExpireDate( $expireDate) {
        $this->expireDate = $expireDate;
    }
    
        	
    private $buyOfferId;
    
        /**
    * @return 报价单关联的询价单Id（自主报价时为空）
    */
        public function getBuyOfferId() {
        return $this->buyOfferId;
    }
    
    /**
     * 设置报价单关联的询价单Id（自主报价时为空）     
     * @param Long $buyOfferId     
     * 参数示例：<pre>700023783</pre>     
     * 此参数必填     */
    public function setBuyOfferId( $buyOfferId) {
        $this->buyOfferId = $buyOfferId;
    }
    
        	
    private $attachments;
    
        /**
    * @return 附件信息（没有附件时为空）
    */
        public function getAttachments() {
        return $this->attachments;
    }
    
    /**
     * 设置附件信息（没有附件时为空）     
     * @param array include @see ComAlibabaCaigouApiCommonModelAttachment[] $attachments     
     * 参数示例：<pre>[...]</pre>     
     * 此参数必填     */
    public function setAttachments(ComAlibabaCaigouApiCommonModelAttachment $attachments) {
        $this->attachments = $attachments;
    }
    
        	
    private $supplierMemberId;
    
        /**
    * @return 供应商memberId
    */
        public function getSupplierMemberId() {
        return $this->supplierMemberId;
    }
    
    /**
     * 设置供应商memberId     
     * @param String $supplierMemberId     
     * 参数示例：<pre>zhoulhtest002</pre>     
     * 此参数必填     */
    public function setSupplierMemberId( $supplierMemberId) {
        $this->supplierMemberId = $supplierMemberId;
    }
    
        	
    private $contactInfo;
    
        /**
    * @return 报价联系人信息
    */
        public function getContactInfo() {
        return $this->contactInfo;
    }
    
    /**
     * 设置报价联系人信息     
     * @param ComAlibabaCaigouApiCommonModelContactInfo $contactInfo     
     * 参数示例：<pre>{...}</pre>     
     * 此参数必填     */
    public function setContactInfo(ComAlibabaCaigouApiCommonModelContactInfo $contactInfo) {
        $this->contactInfo = $contactInfo;
    }
    
        	
    private $invoiceType;
    
        /**
    * @return 税务发票类型（common：普通发票，vat：17%增值发票，no：不提供发票）
    */
        public function getInvoiceType() {
        return $this->invoiceType;
    }
    
    /**
     * 设置税务发票类型（common：普通发票，vat：17%增值发票，no：不提供发票）     
     * @param String $invoiceType     
     * 参数示例：<pre>common</pre>     
     * 此参数必填     */
    public function setInvoiceType( $invoiceType) {
        $this->invoiceType = $invoiceType;
    }
    
        	
    private $freight;
    
        /**
    * @return 预计运费总价（单位：分）
    */
        public function getFreight() {
        return $this->freight;
    }
    
    /**
     * 设置预计运费总价（单位：分）     
     * @param Long $freight     
     * 参数示例：<pre>100</pre>     
     * 此参数必填     */
    public function setFreight( $freight) {
        $this->freight = $freight;
    }
    
        	
    private $totalPrice;
    
        /**
    * @return 预计产品总价（单位：分）
    */
        public function getTotalPrice() {
        return $this->totalPrice;
    }
    
    /**
     * 设置预计产品总价（单位：分）     
     * @param Long $totalPrice     
     * 参数示例：<pre>100000</pre>     
     * 此参数必填     */
    public function setTotalPrice( $totalPrice) {
        $this->totalPrice = $totalPrice;
    }
    
        	
    private $specifications;
    
        /**
    * @return 补充说明
    */
        public function getSpecifications() {
        return $this->specifications;
    }
    
    /**
     * 设置补充说明     
     * @param String $specifications     
     * 参数示例：<pre>补充说明文案</pre>     
     * 此参数必填     */
    public function setSpecifications( $specifications) {
        $this->specifications = $specifications;
    }
    
        	
    private $supplyNoteItems;
    
        /**
    * @return 报价单条目列表
    */
        public function getSupplyNoteItems() {
        return $this->supplyNoteItems;
    }
    
    /**
     * 设置报价单条目列表     
     * @param array include @see ComAlibabaCaigouApiCommonModelSupplyNoteItem[] $supplyNoteItems     
     * 参数示例：<pre>[...]</pre>     
     * 此参数必填     */
    public function setSupplyNoteItems(ComAlibabaCaigouApiCommonModelSupplyNoteItem $supplyNoteItems) {
        $this->supplyNoteItems = $supplyNoteItems;
    }
    
        	
    private $payRequirementInfo;
    
        /**
    * @return 报价单付款条件
    */
        public function getPayRequirementInfo() {
        return $this->payRequirementInfo;
    }
    
    /**
     * 设置报价单付款条件     
     * @param ComAlibabaCaigouApiCommonModelPayRequirement $payRequirementInfo     
     * 参数示例：<pre>{...}</pre>     
     * 此参数必填     */
    public function setPayRequirementInfo(ComAlibabaCaigouApiCommonModelPayRequirement $payRequirementInfo) {
        $this->payRequirementInfo = $payRequirementInfo;
    }
    
        	
    private $gmtCreate;
    
        /**
    * @return 报价单创建时间
    */
        public function getGmtCreate() {
        return $this->gmtCreate;
    }
    
    /**
     * 设置报价单创建时间     
     * @param Date $gmtCreate     
     * 参数示例：<pre>20140326000000000+0800</pre>     
     * 此参数必填     */
    public function setGmtCreate( $gmtCreate) {
        $this->gmtCreate = $gmtCreate;
    }
    
        	
    private $prId;
    
        /**
    * @return pr业务标识
    */
        public function getPrId() {
        return $this->prId;
    }
    
    /**
     * 设置pr业务标识     
     * @param String $prId     
     * 参数示例：<pre>1231234</pre>     
     * 此参数必填     */
    public function setPrId( $prId) {
        $this->prId = $prId;
    }
    
        	
    private $id;
    
        /**
    * @return 报价单id
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置报价单id     
     * @param Long $id     
     * 参数示例：<pre>121</pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $status;
    
        /**
    * @return 报价单状态
    */
        public function getStatus() {
        return $this->status;
    }
    
    /**
     * 设置报价单状态     
     * @param String $status     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "expireDate", $this->stdResult )) {
    				$this->expireDate = $this->stdResult->{"expireDate"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyOfferId", $this->stdResult )) {
    				$this->buyOfferId = $this->stdResult->{"buyOfferId"};
    			}
    			    		    				    			    			if (array_key_exists ( "attachments", $this->stdResult )) {
    			$attachmentsResult=$this->stdResult->{"attachments"};
    				$object = json_decode ( json_encode ( $attachmentsResult ), true );
					$this->attachments = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$ComAlibabaCaigouApiCommonModelAttachmentResult=new ComAlibabaCaigouApiCommonModelAttachment();
						$ComAlibabaCaigouApiCommonModelAttachmentResult->setArrayResult($arrayobject );
						$this->attachments [$i] = $ComAlibabaCaigouApiCommonModelAttachmentResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "supplierMemberId", $this->stdResult )) {
    				$this->supplierMemberId = $this->stdResult->{"supplierMemberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "contactInfo", $this->stdResult )) {
    				$contactInfoResult=$this->stdResult->{"contactInfo"};
    				$this->contactInfo = new ComAlibabaCaigouApiCommonModelContactInfo();
    				$this->contactInfo->setStdResult ( $contactInfoResult);
    			}
    			    		    				    			    			if (array_key_exists ( "invoiceType", $this->stdResult )) {
    				$this->invoiceType = $this->stdResult->{"invoiceType"};
    			}
    			    		    				    			    			if (array_key_exists ( "freight", $this->stdResult )) {
    				$this->freight = $this->stdResult->{"freight"};
    			}
    			    		    				    			    			if (array_key_exists ( "totalPrice", $this->stdResult )) {
    				$this->totalPrice = $this->stdResult->{"totalPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "specifications", $this->stdResult )) {
    				$this->specifications = $this->stdResult->{"specifications"};
    			}
    			    		    				    			    			if (array_key_exists ( "supplyNoteItems", $this->stdResult )) {
    			$supplyNoteItemsResult=$this->stdResult->{"supplyNoteItems"};
    				$object = json_decode ( json_encode ( $supplyNoteItemsResult ), true );
					$this->supplyNoteItems = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$ComAlibabaCaigouApiCommonModelSupplyNoteItemResult=new ComAlibabaCaigouApiCommonModelSupplyNoteItem();
						$ComAlibabaCaigouApiCommonModelSupplyNoteItemResult->setArrayResult($arrayobject );
						$this->supplyNoteItems [$i] = $ComAlibabaCaigouApiCommonModelSupplyNoteItemResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "payRequirementInfo", $this->stdResult )) {
    				$payRequirementInfoResult=$this->stdResult->{"payRequirementInfo"};
    				$this->payRequirementInfo = new ComAlibabaCaigouApiCommonModelPayRequirement();
    				$this->payRequirementInfo->setStdResult ( $payRequirementInfoResult);
    			}
    			    		    				    			    			if (array_key_exists ( "gmtCreate", $this->stdResult )) {
    				$this->gmtCreate = $this->stdResult->{"gmtCreate"};
    			}
    			    		    				    			    			if (array_key_exists ( "prId", $this->stdResult )) {
    				$this->prId = $this->stdResult->{"prId"};
    			}
    			    		    				    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "expireDate", $this->arrayResult )) {
    			$this->expireDate = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyOfferId", $this->arrayResult )) {
    			$this->buyOfferId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "attachments", $this->arrayResult )) {
    		$attachmentsResult=$arrayResult['${paramType.paramName}'];
    			$this->attachments = new ComAlibabaCaigouApiCommonModelAttachment();
    			$this->attachments->setStdResult ( $attachmentsResult);
    		}
    		    	    			    		    			if (array_key_exists ( "supplierMemberId", $this->arrayResult )) {
    			$this->supplierMemberId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "contactInfo", $this->arrayResult )) {
    		$contactInfoResult=$arrayResult['${paramType.paramName}'];
    			    			$this->contactInfo = new ComAlibabaCaigouApiCommonModelContactInfo();
    			    			$this->contactInfo->setStdResult ( $contactInfoResult);
    		}
    		    	    			    		    			if (array_key_exists ( "invoiceType", $this->arrayResult )) {
    			$this->invoiceType = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "freight", $this->arrayResult )) {
    			$this->freight = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "totalPrice", $this->arrayResult )) {
    			$this->totalPrice = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "specifications", $this->arrayResult )) {
    			$this->specifications = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "supplyNoteItems", $this->arrayResult )) {
    		$supplyNoteItemsResult=$arrayResult['${paramType.paramName}'];
    			$this->supplyNoteItems = new ComAlibabaCaigouApiCommonModelSupplyNoteItem();
    			$this->supplyNoteItems->setStdResult ( $supplyNoteItemsResult);
    		}
    		    	    			    		    		if (array_key_exists ( "payRequirementInfo", $this->arrayResult )) {
    		$payRequirementInfoResult=$arrayResult['${paramType.paramName}'];
    			    			$this->payRequirementInfo = new ComAlibabaCaigouApiCommonModelPayRequirement();
    			    			$this->payRequirementInfo->setStdResult ( $payRequirementInfoResult);
    		}
    		    	    			    		    			if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
    			$this->gmtCreate = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "prId", $this->arrayResult )) {
    			$this->prId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>