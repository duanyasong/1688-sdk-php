<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProductPushTaTradeBillModel extends SDKDomain {

       	
    private $gmtCreate;
    
        /**
    * @return 账单时间
    */
        public function getGmtCreate() {
        return $this->gmtCreate;
    }
    
    /**
     * 设置账单时间     
     * @param Date $gmtCreate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtCreate( $gmtCreate) {
        $this->gmtCreate = $gmtCreate;
    }
    
        	
    private $payFee;
    
        /**
    * @return 收支金额,（分为单位）--实付款
    */
        public function getPayFee() {
        return $this->payFee;
    }
    
    /**
     * 设置收支金额,（分为单位）--实付款     
     * @param Long $payFee     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPayFee( $payFee) {
        $this->payFee = $payFee;
    }
    
        	
    private $gmtReceived;
    
        /**
    * @return 到账时间
    */
        public function getGmtReceived() {
        return $this->gmtReceived;
    }
    
    /**
     * 设置到账时间     
     * @param Date $gmtReceived     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtReceived( $gmtReceived) {
        $this->gmtReceived = $gmtReceived;
    }
    
        	
    private $serialId;
    
        /**
    * @return 账务流水号
    */
        public function getSerialId() {
        return $this->serialId;
    }
    
    /**
     * 设置账务流水号     
     * @param String $serialId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSerialId( $serialId) {
        $this->serialId = $serialId;
    }
    
        	
    private $queryStr;
    
        /**
    * @return 查询账单明细字符串,作为查询账单明细接口的入参
    */
        public function getQueryStr() {
        return $this->queryStr;
    }
    
    /**
     * 设置查询账单明细字符串,作为查询账单明细接口的入参     
     * @param String $queryStr     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setQueryStr( $queryStr) {
        $this->queryStr = $queryStr;
    }
    
        	
    private $bizTypeName;
    
        /**
    * @return 财务类型名称
    */
        public function getBizTypeName() {
        return $this->bizTypeName;
    }
    
    /**
     * 设置财务类型名称     
     * @param String $bizTypeName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBizTypeName( $bizTypeName) {
        $this->bizTypeName = $bizTypeName;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "gmtCreate", $this->stdResult )) {
    				$this->gmtCreate = $this->stdResult->{"gmtCreate"};
    			}
    			    		    				    			    			if (array_key_exists ( "payFee", $this->stdResult )) {
    				$this->payFee = $this->stdResult->{"payFee"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtReceived", $this->stdResult )) {
    				$this->gmtReceived = $this->stdResult->{"gmtReceived"};
    			}
    			    		    				    			    			if (array_key_exists ( "serialId", $this->stdResult )) {
    				$this->serialId = $this->stdResult->{"serialId"};
    			}
    			    		    				    			    			if (array_key_exists ( "queryStr", $this->stdResult )) {
    				$this->queryStr = $this->stdResult->{"queryStr"};
    			}
    			    		    				    			    			if (array_key_exists ( "bizTypeName", $this->stdResult )) {
    				$this->bizTypeName = $this->stdResult->{"bizTypeName"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
    			$this->gmtCreate = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "payFee", $this->arrayResult )) {
    			$this->payFee = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtReceived", $this->arrayResult )) {
    			$this->gmtReceived = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "serialId", $this->arrayResult )) {
    			$this->serialId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "queryStr", $this->arrayResult )) {
    			$this->queryStr = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "bizTypeName", $this->arrayResult )) {
    			$this->bizTypeName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>