<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProductProductAttributeParam extends SDKDomain {

       	
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
     * 参数示例：<pre>123456</pre>     
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
     * 参数示例：<pre>color</pre>     
     * 此参数必填     */
    public function setAttributeName( $attributeName) {
        $this->attributeName = $attributeName;
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
     * 参数示例：<pre>grey</pre>     
     * 此参数必填     */
    public function setValue( $value) {
        $this->value = $value;
    }
    
        	
    private $isCustom;
    
        /**
    * @return 是否为自定义属性
    */
        public function getIsCustom() {
        return $this->isCustom;
    }
    
    /**
     * 设置是否为自定义属性     
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
    		    	    			    		    			if (array_key_exists ( "value", $this->arrayResult )) {
    			$this->value = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "isCustom", $this->arrayResult )) {
    			$this->isCustom = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>