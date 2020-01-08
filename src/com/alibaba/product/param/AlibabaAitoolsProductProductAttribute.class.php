<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaAitoolsProductProductAttribute extends SDKDomain {

       	
    private $attributeID;
    
        /**
    * @return 属性ID
    */
        public function getAttributeID() {
        return $this->attributeID;
    }
    
    /**
     * 设置属性ID     
     * @param Long $attributeID     
     * 参数示例：<pre>123</pre>     
     * 此参数必填     */
    public function setAttributeID( $attributeID) {
        $this->attributeID = $attributeID;
    }
    
        	
    private $attributeName;
    
        /**
    * @return 属性名
    */
        public function getAttributeName() {
        return $this->attributeName;
    }
    
    /**
     * 设置属性名     
     * @param String $attributeName     
     * 参数示例：<pre>领型</pre>     
     * 此参数必填     */
    public function setAttributeName( $attributeName) {
        $this->attributeName = $attributeName;
    }
    
        	
    private $valueID;
    
        /**
    * @return 属性值ID
    */
        public function getValueID() {
        return $this->valueID;
    }
    
    /**
     * 设置属性值ID     
     * @param Long $valueID     
     * 参数示例：<pre>1234</pre>     
     * 此参数必填     */
    public function setValueID( $valueID) {
        $this->valueID = $valueID;
    }
    
        	
    private $value;
    
        /**
    * @return 属性值名
    */
        public function getValue() {
        return $this->value;
    }
    
    /**
     * 设置属性值名     
     * @param String $value     
     * 参数示例：<pre>V领</pre>     
     * 此参数必填     */
    public function setValue( $value) {
        $this->value = $value;
    }
    
        	
    private $isCustom;
    
        /**
    * @return 是否自定义属性
    */
        public function getIsCustom() {
        return $this->isCustom;
    }
    
    /**
     * 设置是否自定义属性     
     * @param Boolean $isCustom     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setIsCustom( $isCustom) {
        $this->isCustom = $isCustom;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "attributeID", $this->stdResult )) {
    				$this->attributeID = $this->stdResult->{"attributeID"};
    			}
    			    		    				    			    			if (array_key_exists ( "attributeName", $this->stdResult )) {
    				$this->attributeName = $this->stdResult->{"attributeName"};
    			}
    			    		    				    			    			if (array_key_exists ( "valueID", $this->stdResult )) {
    				$this->valueID = $this->stdResult->{"valueID"};
    			}
    			    		    				    			    			if (array_key_exists ( "value", $this->stdResult )) {
    				$this->value = $this->stdResult->{"value"};
    			}
    			    		    				    			    			if (array_key_exists ( "isCustom", $this->stdResult )) {
    				$this->isCustom = $this->stdResult->{"isCustom"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "attributeID", $this->arrayResult )) {
    			$this->attributeID = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "attributeName", $this->arrayResult )) {
    			$this->attributeName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "valueID", $this->arrayResult )) {
    			$this->valueID = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "value", $this->arrayResult )) {
    			$this->value = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "isCustom", $this->arrayResult )) {
    			$this->isCustom = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>