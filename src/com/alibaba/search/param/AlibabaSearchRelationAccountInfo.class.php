<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaSearchRelationSupplyParam/AlibabaSearchRelationGroupInfo.class.php');

class AlibabaSearchRelationAccountInfo extends SDKDomain {

       	
    private $userId;
    
        /**
    * @return 关联人ID
    */
        public function getUserId() {
        return $this->userId;
    }
    
    /**
     * 设置关联人ID     
     * @param Long $userId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setUserId( $userId) {
        $this->userId = $userId;
    }
    
        	
    private $companyName;
    
        /**
    * @return 关联人所在公司名
    */
        public function getCompanyName() {
        return $this->companyName;
    }
    
    /**
     * 设置关联人所在公司名     
     * @param String $companyName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCompanyName( $companyName) {
        $this->companyName = $companyName;
    }
    
        	
    private $relationDesc;
    
        /**
    * @return 关联的信息描述
    */
        public function getRelationDesc() {
        return $this->relationDesc;
    }
    
    /**
     * 设置关联的信息描述     
     * @param array include @see AlibabaSearchRelationGroupInfo[] $relationDesc     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRelationDesc(AlibabaSearchRelationGroupInfo $relationDesc) {
        $this->relationDesc = $relationDesc;
    }
    
        	
    private $domainInPlatforms;
    
        /**
    * @return 卖家在平台上的旺铺域名
    */
        public function getDomainInPlatforms() {
        return $this->domainInPlatforms;
    }
    
    /**
     * 设置卖家在平台上的旺铺域名     
     * @param array include @see String[] $domainInPlatforms     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDomainInPlatforms( $domainInPlatforms) {
        $this->domainInPlatforms = $domainInPlatforms;
    }
    
        	
    private $loginId;
    
        /**
    * @return 关联人昵称信息
    */
        public function getLoginId() {
        return $this->loginId;
    }
    
    /**
     * 设置关联人昵称信息     
     * @param String $loginId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLoginId( $loginId) {
        $this->loginId = $loginId;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "userId", $this->stdResult )) {
    				$this->userId = $this->stdResult->{"userId"};
    			}
    			    		    				    			    			if (array_key_exists ( "companyName", $this->stdResult )) {
    				$this->companyName = $this->stdResult->{"companyName"};
    			}
    			    		    				    			    			if (array_key_exists ( "relationDesc", $this->stdResult )) {
    			$relationDescResult=$this->stdResult->{"relationDesc"};
    				$object = json_decode ( json_encode ( $relationDescResult ), true );
					$this->relationDesc = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaSearchRelationGroupInfoResult=new AlibabaSearchRelationGroupInfo();
						$AlibabaSearchRelationGroupInfoResult->setArrayResult($arrayobject );
						$this->relationDesc [$i] = $AlibabaSearchRelationGroupInfoResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "domainInPlatforms", $this->stdResult )) {
    				$this->domainInPlatforms = $this->stdResult->{"domainInPlatforms"};
    			}
    			    		    				    			    			if (array_key_exists ( "loginId", $this->stdResult )) {
    				$this->loginId = $this->stdResult->{"loginId"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "userId", $this->arrayResult )) {
    			$this->userId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "companyName", $this->arrayResult )) {
    			$this->companyName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "relationDesc", $this->arrayResult )) {
    		$relationDescResult=$arrayResult['${paramType.paramName}'];
    			$this->relationDesc = new AlibabaSearchRelationGroupInfo();
    			$this->relationDesc->setStdResult ( $relationDescResult);
    		}
    		    	    			    		    			if (array_key_exists ( "domainInPlatforms", $this->arrayResult )) {
    			$this->domainInPlatforms = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "loginId", $this->arrayResult )) {
    			$this->loginId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>