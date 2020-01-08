<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('ComAlibabaCaigouBizApiCooperServiceRequisitionOpenRequisitionServiceCreateMallRequisitionParam/AlibabaCaigouBizApiCooperParamOpenCreateRequisitionItemParam.class.php');

class AlibabaCaigouBizApiCooperParamOpenCreateRequisitionParam extends SDKDomain {

       	
    private $adminUserId;
    
        /**
    * @return 看文档
    */
        public function getAdminUserId() {
        return $this->adminUserId;
    }
    
    /**
     * 设置看文档     
     * @param Long $adminUserId     
     * 参数示例：<pre>看文档</pre>     
     * 此参数必填     */
    public function setAdminUserId( $adminUserId) {
        $this->adminUserId = $adminUserId;
    }
    
        	
    private $attachmentList;
    
        /**
    * @return 看文档
    */
        public function getAttachmentList() {
        return $this->attachmentList;
    }
    
    /**
     * 设置看文档     
     * @param array include @see Long[] $attachmentList     
     * 参数示例：<pre>看文档</pre>     
     * 此参数必填     */
    public function setAttachmentList( $attachmentList) {
        $this->attachmentList = $attachmentList;
    }
    
        	
    private $companyCode;
    
        /**
    * @return 看文档
    */
        public function getCompanyCode() {
        return $this->companyCode;
    }
    
    /**
     * 设置看文档     
     * @param String $companyCode     
     * 参数示例：<pre>看文档</pre>     
     * 此参数必填     */
    public function setCompanyCode( $companyCode) {
        $this->companyCode = $companyCode;
    }
    
        	
    private $createUserId;
    
        /**
    * @return 看文档
    */
        public function getCreateUserId() {
        return $this->createUserId;
    }
    
    /**
     * 设置看文档     
     * @param Long $createUserId     
     * 参数示例：<pre>看文档</pre>     
     * 此参数必填     */
    public function setCreateUserId( $createUserId) {
        $this->createUserId = $createUserId;
    }
    
        	
    private $describeNote;
    
        /**
    * @return 看文档
    */
        public function getDescribeNote() {
        return $this->describeNote;
    }
    
    /**
     * 设置看文档     
     * @param String $describeNote     
     * 参数示例：<pre>看文档</pre>     
     * 此参数必填     */
    public function setDescribeNote( $describeNote) {
        $this->describeNote = $describeNote;
    }
    
        	
    private $dueDate;
    
        /**
    * @return 看文档
    */
        public function getDueDate() {
        return $this->dueDate;
    }
    
    /**
     * 设置看文档     
     * @param String $dueDate     
     * 参数示例：<pre>看文档</pre>     
     * 此参数必填     */
    public function setDueDate( $dueDate) {
        $this->dueDate = $dueDate;
    }
    
        	
    private $erpMovementType;
    
        /**
    * @return 看文档
    */
        public function getErpMovementType() {
        return $this->erpMovementType;
    }
    
    /**
     * 设置看文档     
     * @param String $erpMovementType     
     * 参数示例：<pre>看文档</pre>     
     * 此参数必填     */
    public function setErpMovementType( $erpMovementType) {
        $this->erpMovementType = $erpMovementType;
    }
    
        	
    private $isPingKu;
    
        /**
    * @return 看文档
    */
        public function getIsPingKu() {
        return $this->isPingKu;
    }
    
    /**
     * 设置看文档     
     * @param String $isPingKu     
     * 参数示例：<pre>看文档</pre>     
     * 此参数必填     */
    public function setIsPingKu( $isPingKu) {
        $this->isPingKu = $isPingKu;
    }
    
        	
    private $itemList;
    
        /**
    * @return 看文档
    */
        public function getItemList() {
        return $this->itemList;
    }
    
    /**
     * 设置看文档     
     * @param array include @see AlibabaCaigouBizApiCooperParamOpenCreateRequisitionItemParam[] $itemList     
     * 参数示例：<pre>看文档</pre>     
     * 此参数必填     */
    public function setItemList(AlibabaCaigouBizApiCooperParamOpenCreateRequisitionItemParam $itemList) {
        $this->itemList = $itemList;
    }
    
        	
    private $memberId;
    
        /**
    * @return 看文档
    */
        public function getMemberId() {
        return $this->memberId;
    }
    
    /**
     * 设置看文档     
     * @param String $memberId     
     * 参数示例：<pre>看文档</pre>     
     * 此参数必填     */
    public function setMemberId( $memberId) {
        $this->memberId = $memberId;
    }
    
        	
    private $receiveAddress;
    
        /**
    * @return 看文档
    */
        public function getReceiveAddress() {
        return $this->receiveAddress;
    }
    
    /**
     * 设置看文档     
     * @param String $receiveAddress     
     * 参数示例：<pre>看文档</pre>     
     * 此参数必填     */
    public function setReceiveAddress( $receiveAddress) {
        $this->receiveAddress = $receiveAddress;
    }
    
        	
    private $reqDepartmentId;
    
        /**
    * @return 看文档
    */
        public function getReqDepartmentId() {
        return $this->reqDepartmentId;
    }
    
    /**
     * 设置看文档     
     * @param Long $reqDepartmentId     
     * 参数示例：<pre>看文档</pre>     
     * 此参数必填     */
    public function setReqDepartmentId( $reqDepartmentId) {
        $this->reqDepartmentId = $reqDepartmentId;
    }
    
        	
    private $reqType;
    
        /**
    * @return 看文档
    */
        public function getReqType() {
        return $this->reqType;
    }
    
    /**
     * 设置看文档     
     * @param String $reqType     
     * 参数示例：<pre>看文档</pre>     
     * 此参数必填     */
    public function setReqType( $reqType) {
        $this->reqType = $reqType;
    }
    
        	
    private $reqUserEmail;
    
        /**
    * @return 看文档
    */
        public function getReqUserEmail() {
        return $this->reqUserEmail;
    }
    
    /**
     * 设置看文档     
     * @param String $reqUserEmail     
     * 参数示例：<pre>看文档</pre>     
     * 此参数必填     */
    public function setReqUserEmail( $reqUserEmail) {
        $this->reqUserEmail = $reqUserEmail;
    }
    
        	
    private $reqUserId;
    
        /**
    * @return 看文档
    */
        public function getReqUserId() {
        return $this->reqUserId;
    }
    
    /**
     * 设置看文档     
     * @param Long $reqUserId     
     * 参数示例：<pre>看文档</pre>     
     * 此参数必填     */
    public function setReqUserId( $reqUserId) {
        $this->reqUserId = $reqUserId;
    }
    
        	
    private $reqUserMobile;
    
        /**
    * @return 看文档
    */
        public function getReqUserMobile() {
        return $this->reqUserMobile;
    }
    
    /**
     * 设置看文档     
     * @param String $reqUserMobile     
     * 参数示例：<pre>看文档</pre>     
     * 此参数必填     */
    public function setReqUserMobile( $reqUserMobile) {
        $this->reqUserMobile = $reqUserMobile;
    }
    
        	
    private $reqUserPhone;
    
        /**
    * @return 看文档
    */
        public function getReqUserPhone() {
        return $this->reqUserPhone;
    }
    
    /**
     * 设置看文档     
     * @param String $reqUserPhone     
     * 参数示例：<pre>看文档</pre>     
     * 此参数必填     */
    public function setReqUserPhone( $reqUserPhone) {
        $this->reqUserPhone = $reqUserPhone;
    }
    
        	
    private $title;
    
        /**
    * @return 看文档
    */
        public function getTitle() {
        return $this->title;
    }
    
    /**
     * 设置看文档     
     * @param String $title     
     * 参数示例：<pre>看文档</pre>     
     * 此参数必填     */
    public function setTitle( $title) {
        $this->title = $title;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "adminUserId", $this->stdResult )) {
    				$this->adminUserId = $this->stdResult->{"adminUserId"};
    			}
    			    		    				    			    			if (array_key_exists ( "attachmentList", $this->stdResult )) {
    				$this->attachmentList = $this->stdResult->{"attachmentList"};
    			}
    			    		    				    			    			if (array_key_exists ( "companyCode", $this->stdResult )) {
    				$this->companyCode = $this->stdResult->{"companyCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "createUserId", $this->stdResult )) {
    				$this->createUserId = $this->stdResult->{"createUserId"};
    			}
    			    		    				    			    			if (array_key_exists ( "describeNote", $this->stdResult )) {
    				$this->describeNote = $this->stdResult->{"describeNote"};
    			}
    			    		    				    			    			if (array_key_exists ( "dueDate", $this->stdResult )) {
    				$this->dueDate = $this->stdResult->{"dueDate"};
    			}
    			    		    				    			    			if (array_key_exists ( "erpMovementType", $this->stdResult )) {
    				$this->erpMovementType = $this->stdResult->{"erpMovementType"};
    			}
    			    		    				    			    			if (array_key_exists ( "isPingKu", $this->stdResult )) {
    				$this->isPingKu = $this->stdResult->{"isPingKu"};
    			}
    			    		    				    			    			if (array_key_exists ( "itemList", $this->stdResult )) {
    			$itemListResult=$this->stdResult->{"itemList"};
    				$object = json_decode ( json_encode ( $itemListResult ), true );
					$this->itemList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaCaigouBizApiCooperParamOpenCreateRequisitionItemParamResult=new AlibabaCaigouBizApiCooperParamOpenCreateRequisitionItemParam();
						$AlibabaCaigouBizApiCooperParamOpenCreateRequisitionItemParamResult->setArrayResult($arrayobject );
						$this->itemList [$i] = $AlibabaCaigouBizApiCooperParamOpenCreateRequisitionItemParamResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "memberId", $this->stdResult )) {
    				$this->memberId = $this->stdResult->{"memberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "receiveAddress", $this->stdResult )) {
    				$this->receiveAddress = $this->stdResult->{"receiveAddress"};
    			}
    			    		    				    			    			if (array_key_exists ( "reqDepartmentId", $this->stdResult )) {
    				$this->reqDepartmentId = $this->stdResult->{"reqDepartmentId"};
    			}
    			    		    				    			    			if (array_key_exists ( "reqType", $this->stdResult )) {
    				$this->reqType = $this->stdResult->{"reqType"};
    			}
    			    		    				    			    			if (array_key_exists ( "reqUserEmail", $this->stdResult )) {
    				$this->reqUserEmail = $this->stdResult->{"reqUserEmail"};
    			}
    			    		    				    			    			if (array_key_exists ( "reqUserId", $this->stdResult )) {
    				$this->reqUserId = $this->stdResult->{"reqUserId"};
    			}
    			    		    				    			    			if (array_key_exists ( "reqUserMobile", $this->stdResult )) {
    				$this->reqUserMobile = $this->stdResult->{"reqUserMobile"};
    			}
    			    		    				    			    			if (array_key_exists ( "reqUserPhone", $this->stdResult )) {
    				$this->reqUserPhone = $this->stdResult->{"reqUserPhone"};
    			}
    			    		    				    			    			if (array_key_exists ( "title", $this->stdResult )) {
    				$this->title = $this->stdResult->{"title"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "adminUserId", $this->arrayResult )) {
    			$this->adminUserId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "attachmentList", $this->arrayResult )) {
    			$this->attachmentList = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "companyCode", $this->arrayResult )) {
    			$this->companyCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "createUserId", $this->arrayResult )) {
    			$this->createUserId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "describeNote", $this->arrayResult )) {
    			$this->describeNote = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "dueDate", $this->arrayResult )) {
    			$this->dueDate = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "erpMovementType", $this->arrayResult )) {
    			$this->erpMovementType = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "isPingKu", $this->arrayResult )) {
    			$this->isPingKu = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "itemList", $this->arrayResult )) {
    		$itemListResult=$arrayResult['${paramType.paramName}'];
    			$this->itemList = new AlibabaCaigouBizApiCooperParamOpenCreateRequisitionItemParam();
    			$this->itemList->setStdResult ( $itemListResult);
    		}
    		    	    			    		    			if (array_key_exists ( "memberId", $this->arrayResult )) {
    			$this->memberId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "receiveAddress", $this->arrayResult )) {
    			$this->receiveAddress = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "reqDepartmentId", $this->arrayResult )) {
    			$this->reqDepartmentId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "reqType", $this->arrayResult )) {
    			$this->reqType = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "reqUserEmail", $this->arrayResult )) {
    			$this->reqUserEmail = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "reqUserId", $this->arrayResult )) {
    			$this->reqUserId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "reqUserMobile", $this->arrayResult )) {
    			$this->reqUserMobile = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "reqUserPhone", $this->arrayResult )) {
    			$this->reqUserPhone = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "title", $this->arrayResult )) {
    			$this->title = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>