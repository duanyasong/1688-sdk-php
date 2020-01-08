<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProcurementApiOrderInteractiveModelBuyerInfo extends SDKDomain {

       	
    private $buyerName;
    
        /**
    * @return 买家名称
    */
        public function getBuyerName() {
        return $this->buyerName;
    }
    
    /**
     * 设置买家名称     
     * @param String $buyerName     
     * 参数示例：<pre> 无</pre>     
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
     * 参数示例：<pre> 无 </pre>     
     * 此参数必填     */
    public function setCompanyCode( $companyCode) {
        $this->companyCode = $companyCode;
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
     * 参数示例：<pre>  无</pre>     
     * 此参数必填     */
    public function setCompanyName( $companyName) {
        $this->companyName = $companyName;
    }
    
        	
    private $groupCode;
    
        /**
    * @return 采购组编码 
    */
        public function getGroupCode() {
        return $this->groupCode;
    }
    
    /**
     * 设置采购组编码      
     * @param String $groupCode     
     * 参数示例：<pre> 无 </pre>     
     * 此参数必填     */
    public function setGroupCode( $groupCode) {
        $this->groupCode = $groupCode;
    }
    
        	
    private $groupName;
    
        /**
    * @return 采购组名称
    */
        public function getGroupName() {
        return $this->groupName;
    }
    
    /**
     * 设置采购组名称     
     * @param String $groupName     
     * 参数示例：<pre>  无</pre>     
     * 此参数必填     */
    public function setGroupName( $groupName) {
        $this->groupName = $groupName;
    }
    
        	
    private $loginId;
    
        /**
    * @return 买家登陆账号名称
    */
        public function getLoginId() {
        return $this->loginId;
    }
    
    /**
     * 设置买家登陆账号名称     
     * @param String $loginId     
     * 参数示例：<pre> bolinetest003</pre>     
     * 此参数必填     */
    public function setLoginId( $loginId) {
        $this->loginId = $loginId;
    }
    
        	
    private $memberId;
    
        /**
    * @return 买家 MEMBER ID 
    */
        public function getMemberId() {
        return $this->memberId;
    }
    
    /**
     * 设置买家 MEMBER ID      
     * @param String $memberId     
     * 参数示例：<pre>  无</pre>     
     * 此参数必填     */
    public function setMemberId( $memberId) {
        $this->memberId = $memberId;
    }
    
        	
    private $organizationCode;
    
        /**
    * @return 采购组织编码
    */
        public function getOrganizationCode() {
        return $this->organizationCode;
    }
    
    /**
     * 设置采购组织编码     
     * @param String $organizationCode     
     * 参数示例：<pre>  无</pre>     
     * 此参数必填     */
    public function setOrganizationCode( $organizationCode) {
        $this->organizationCode = $organizationCode;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "buyerName", $this->stdResult )) {
    				$this->buyerName = $this->stdResult->{"buyerName"};
    			}
    			    		    				    			    			if (array_key_exists ( "companyCode", $this->stdResult )) {
    				$this->companyCode = $this->stdResult->{"companyCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "companyName", $this->stdResult )) {
    				$this->companyName = $this->stdResult->{"companyName"};
    			}
    			    		    				    			    			if (array_key_exists ( "groupCode", $this->stdResult )) {
    				$this->groupCode = $this->stdResult->{"groupCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "groupName", $this->stdResult )) {
    				$this->groupName = $this->stdResult->{"groupName"};
    			}
    			    		    				    			    			if (array_key_exists ( "loginId", $this->stdResult )) {
    				$this->loginId = $this->stdResult->{"loginId"};
    			}
    			    		    				    			    			if (array_key_exists ( "memberId", $this->stdResult )) {
    				$this->memberId = $this->stdResult->{"memberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "organizationCode", $this->stdResult )) {
    				$this->organizationCode = $this->stdResult->{"organizationCode"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "buyerName", $this->arrayResult )) {
    			$this->buyerName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "companyCode", $this->arrayResult )) {
    			$this->companyCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "companyName", $this->arrayResult )) {
    			$this->companyName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "groupCode", $this->arrayResult )) {
    			$this->groupCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "groupName", $this->arrayResult )) {
    			$this->groupName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "loginId", $this->arrayResult )) {
    			$this->loginId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "memberId", $this->arrayResult )) {
    			$this->memberId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "organizationCode", $this->arrayResult )) {
    			$this->organizationCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>