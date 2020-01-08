<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCommonUrl extends SDKDomain {

       	
    private $name;
    
        /**
    * @return url的类型，比如是商品详情URL， 商品小图标URL，大图标URL
    */
        public function getName() {
        return $this->name;
    }
    
    /**
     * 设置url的类型，比如是商品详情URL， 商品小图标URL，大图标URL     
     * @param String $name     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->name = $name;
    }
    
        	
    private $value;
    
        /**
    * @return url的值
    */
        public function getValue() {
        return $this->value;
    }
    
    /**
     * 设置url的值     
     * @param String $value     
     * 参数示例：<pre>http://www.1688.com</pre>     
     * 此参数必填     */
    public function setValue( $value) {
        $this->value = $value;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "name", $this->stdResult )) {
    				$this->name = $this->stdResult->{"name"};
    			}
    			    		    				    			    			if (array_key_exists ( "value", $this->stdResult )) {
    				$this->value = $this->stdResult->{"value"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "name", $this->arrayResult )) {
    			$this->name = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "value", $this->arrayResult )) {
    			$this->value = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>