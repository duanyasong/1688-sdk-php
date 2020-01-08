<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaChinaProductApiOpenModelOpenPropertyModel extends SDKDomain {

       	
    private $outerPropertyId;
    
        /**
    * @return 属性外部ID
    */
        public function getOuterPropertyId() {
        return $this->outerPropertyId;
    }
    
    /**
     * 设置属性外部ID     
     * @param String $outerPropertyId     
     * 参数示例：<pre>100001</pre>     
     * 此参数必填     */
    public function setOuterPropertyId( $outerPropertyId) {
        $this->outerPropertyId = $outerPropertyId;
    }
    
        	
    private $outerValueId;
    
        /**
    * @return 属性值外部ID
    */
        public function getOuterValueId() {
        return $this->outerValueId;
    }
    
    /**
     * 设置属性值外部ID     
     * @param String $outerValueId     
     * 参数示例：<pre>200001</pre>     
     * 此参数必填     */
    public function setOuterValueId( $outerValueId) {
        $this->outerValueId = $outerValueId;
    }
    
        	
    private $propertyId;
    
        /**
    * @return 1688属性ID
    */
        public function getPropertyId() {
        return $this->propertyId;
    }
    
    /**
     * 设置1688属性ID     
     * @param Long $propertyId     
     * 参数示例：<pre>2176</pre>     
     * 此参数必填     */
    public function setPropertyId( $propertyId) {
        $this->propertyId = $propertyId;
    }
    
        	
    private $propertyName;
    
        /**
    * @return 1688属性名称
    */
        public function getPropertyName() {
        return $this->propertyName;
    }
    
    /**
     * 设置1688属性名称     
     * @param String $propertyName     
     * 参数示例：<pre>品牌</pre>     
     * 此参数必填     */
    public function setPropertyName( $propertyName) {
        $this->propertyName = $propertyName;
    }
    
        	
    private $valueId;
    
        /**
    * @return 属性值ID
    */
        public function getValueId() {
        return $this->valueId;
    }
    
    /**
     * 设置属性值ID     
     * @param Long $valueId     
     * 参数示例：<pre>32160</pre>     
     * 此参数必填     */
    public function setValueId( $valueId) {
        $this->valueId = $valueId;
    }
    
        	
    private $valueName;
    
        /**
    * @return 1688属性值名称
    */
        public function getValueName() {
        return $this->valueName;
    }
    
    /**
     * 设置1688属性值名称     
     * @param String $valueName     
     * 参数示例：<pre>品牌站测试品牌</pre>     
     * 此参数必填     */
    public function setValueName( $valueName) {
        $this->valueName = $valueName;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "outerPropertyId", $this->stdResult )) {
    				$this->outerPropertyId = $this->stdResult->{"outerPropertyId"};
    			}
    			    		    				    			    			if (array_key_exists ( "outerValueId", $this->stdResult )) {
    				$this->outerValueId = $this->stdResult->{"outerValueId"};
    			}
    			    		    				    			    			if (array_key_exists ( "propertyId", $this->stdResult )) {
    				$this->propertyId = $this->stdResult->{"propertyId"};
    			}
    			    		    				    			    			if (array_key_exists ( "propertyName", $this->stdResult )) {
    				$this->propertyName = $this->stdResult->{"propertyName"};
    			}
    			    		    				    			    			if (array_key_exists ( "valueId", $this->stdResult )) {
    				$this->valueId = $this->stdResult->{"valueId"};
    			}
    			    		    				    			    			if (array_key_exists ( "valueName", $this->stdResult )) {
    				$this->valueName = $this->stdResult->{"valueName"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "outerPropertyId", $this->arrayResult )) {
    			$this->outerPropertyId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "outerValueId", $this->arrayResult )) {
    			$this->outerValueId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "propertyId", $this->arrayResult )) {
    			$this->propertyId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "propertyName", $this->arrayResult )) {
    			$this->propertyName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "valueId", $this->arrayResult )) {
    			$this->valueId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "valueName", $this->arrayResult )) {
    			$this->valueName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>