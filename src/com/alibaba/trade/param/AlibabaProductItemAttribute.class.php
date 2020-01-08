<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProductItemAttribute extends SDKDomain {

       	
    private $attributeID;
    
        /**
    * @return 属性
    */
        public function getAttributeID() {
        return $this->attributeID;
    }
    
    /**
     * 设置属性     
     * @param Long $attributeID     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAttributeID( $attributeID) {
        $this->attributeID = $attributeID;
    }
    
        	
    private $attributeName;
    
        /**
    * @return 属性名称
    */
        public function getAttributeName() {
        return $this->attributeName;
    }
    
    /**
     * 设置属性名称     
     * @param String $attributeName     
     * 参数示例：<pre></pre>     
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
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setValueID( $valueID) {
        $this->valueID = $valueID;
    }
    
        	
    private $value;
    
        /**
    * @return 属性值
    */
        public function getValue() {
        return $this->value;
    }
    
    /**
     * 设置属性值     
     * @param String $value     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setValue( $value) {
        $this->value = $value;
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
    		    	    		}
 
   
}
?>