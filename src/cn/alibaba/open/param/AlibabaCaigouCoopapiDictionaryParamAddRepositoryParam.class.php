<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCaigouCoopapiDictionaryParamAddRepositoryParam extends SDKDomain {

       	
    private $code;
    
        /**
    * @return 仓库编码
    */
        public function getCode() {
        return $this->code;
    }
    
    /**
     * 设置仓库编码     
     * @param String $code     
     * 参数示例：<pre>1000101002</pre>     
     * 此参数必填     */
    public function setCode( $code) {
        $this->code = $code;
    }
    
        	
    private $name;
    
        /**
    * @return 仓库名称
    */
        public function getName() {
        return $this->name;
    }
    
    /**
     * 设置仓库名称     
     * @param String $name     
     * 参数示例：<pre>原材料仓库</pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->name = $name;
    }
    
        	
    private $domainCode;
    
        /**
    * @return 系统域编码
    */
        public function getDomainCode() {
        return $this->domainCode;
    }
    
    /**
     * 设置系统域编码     
     * @param String $domainCode     
     * 参数示例：<pre>SYS_ERP</pre>     
     * 此参数必填     */
    public function setDomainCode( $domainCode) {
        $this->domainCode = $domainCode;
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
     * 参数示例：<pre>1000101</pre>     
     * 此参数必填     */
    public function setFactoryCode( $factoryCode) {
        $this->factoryCode = $factoryCode;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "code", $this->stdResult )) {
    				$this->code = $this->stdResult->{"code"};
    			}
    			    		    				    			    			if (array_key_exists ( "name", $this->stdResult )) {
    				$this->name = $this->stdResult->{"name"};
    			}
    			    		    				    			    			if (array_key_exists ( "domainCode", $this->stdResult )) {
    				$this->domainCode = $this->stdResult->{"domainCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "factoryCode", $this->stdResult )) {
    				$this->factoryCode = $this->stdResult->{"factoryCode"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "code", $this->arrayResult )) {
    			$this->code = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "name", $this->arrayResult )) {
    			$this->name = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "domainCode", $this->arrayResult )) {
    			$this->domainCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "factoryCode", $this->arrayResult )) {
    			$this->factoryCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>