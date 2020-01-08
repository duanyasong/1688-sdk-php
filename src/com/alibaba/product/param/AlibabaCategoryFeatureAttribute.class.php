<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCategoryFeatureAttribute extends SDKDomain {

       	
    private $attrID;
    
        /**
    * @return 规格属性id
    */
        public function getAttrID() {
        return $this->attrID;
    }
    
    /**
     * 设置规格属性id     
     * @param Long $attrID     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAttrID( $attrID) {
        $this->attrID = $attrID;
    }
    
        	
    private $name;
    
        /**
    * @return 名称
    */
        public function getName() {
        return $this->name;
    }
    
    /**
     * 设置名称     
     * @param String $name     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->name = $name;
    }
    
        	
    private $valueId;
    
        /**
    * @return 规格属性值ID，可以从 类目属性中获取
    */
        public function getValueId() {
        return $this->valueId;
    }
    
    /**
     * 设置规格属性值ID，可以从 类目属性中获取     
     * @param Long $valueId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setValueId( $valueId) {
        $this->valueId = $valueId;
    }
    
        	
    private $value;
    
        /**
    * @return 规格属性值
    */
        public function getValue() {
        return $this->value;
    }
    
    /**
     * 设置规格属性值     
     * @param String $value     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setValue( $value) {
        $this->value = $value;
    }
    
        	
    private $unit;
    
        /**
    * @return 单位
    */
        public function getUnit() {
        return $this->unit;
    }
    
    /**
     * 设置单位     
     * @param String $unit     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setUnit( $unit) {
        $this->unit = $unit;
    }
    
        	
    private $ordering;
    
        /**
    * @return 排序信息
    */
        public function getOrdering() {
        return $this->ordering;
    }
    
    /**
     * 设置排序信息     
     * @param String $ordering     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrdering( $ordering) {
        $this->ordering = $ordering;
    }
    
        	
    private $isKey;
    
        /**
    * @return 是否是关键属性
    */
        public function getIsKey() {
        return $this->isKey;
    }
    
    /**
     * 设置是否是关键属性     
     * @param String $isKey     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIsKey( $isKey) {
        $this->isKey = $isKey;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "attrID", $this->stdResult )) {
    				$this->attrID = $this->stdResult->{"attrID"};
    			}
    			    		    				    			    			if (array_key_exists ( "name", $this->stdResult )) {
    				$this->name = $this->stdResult->{"name"};
    			}
    			    		    				    			    			if (array_key_exists ( "valueId", $this->stdResult )) {
    				$this->valueId = $this->stdResult->{"valueId"};
    			}
    			    		    				    			    			if (array_key_exists ( "value", $this->stdResult )) {
    				$this->value = $this->stdResult->{"value"};
    			}
    			    		    				    			    			if (array_key_exists ( "unit", $this->stdResult )) {
    				$this->unit = $this->stdResult->{"unit"};
    			}
    			    		    				    			    			if (array_key_exists ( "ordering", $this->stdResult )) {
    				$this->ordering = $this->stdResult->{"ordering"};
    			}
    			    		    				    			    			if (array_key_exists ( "isKey", $this->stdResult )) {
    				$this->isKey = $this->stdResult->{"isKey"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "attrID", $this->arrayResult )) {
    			$this->attrID = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "name", $this->arrayResult )) {
    			$this->name = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "valueId", $this->arrayResult )) {
    			$this->valueId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "value", $this->arrayResult )) {
    			$this->value = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "unit", $this->arrayResult )) {
    			$this->unit = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "ordering", $this->arrayResult )) {
    			$this->ordering = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "isKey", $this->arrayResult )) {
    			$this->isKey = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>