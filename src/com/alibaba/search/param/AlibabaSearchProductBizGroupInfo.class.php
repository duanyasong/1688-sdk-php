<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaSearchProductBizGroupInfo extends SDKDomain {

       	
    private $code;
    
        /**
    * @return 业务唯一标识
    */
        public function getCode() {
        return $this->code;
    }
    
    /**
     * 设置业务唯一标识     
     * @param String $code     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCode( $code) {
        $this->code = $code;
    }
    
        	
    private $description;
    
        /**
    * @return 业务标识描述
    */
        public function getDescription() {
        return $this->description;
    }
    
    /**
     * 设置业务标识描述     
     * @param String $description     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDescription( $description) {
        $this->description = $description;
    }
    
        	
    private $support;
    
        /**
    * @return 商品是否支持该业务
    */
        public function getSupport() {
        return $this->support;
    }
    
    /**
     * 设置商品是否支持该业务     
     * @param Boolean $support     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSupport( $support) {
        $this->support = $support;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "code", $this->stdResult )) {
    				$this->code = $this->stdResult->{"code"};
    			}
    			    		    				    			    			if (array_key_exists ( "description", $this->stdResult )) {
    				$this->description = $this->stdResult->{"description"};
    			}
    			    		    				    			    			if (array_key_exists ( "support", $this->stdResult )) {
    				$this->support = $this->stdResult->{"support"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "code", $this->arrayResult )) {
    			$this->code = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "description", $this->arrayResult )) {
    			$this->description = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "support", $this->arrayResult )) {
    			$this->support = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>