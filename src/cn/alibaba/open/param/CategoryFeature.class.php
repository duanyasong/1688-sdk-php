<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('CategoryLevelAttrGetParam/CategoryFeatureIdValue.class.php');

class CategoryFeature extends SDKDomain {

       	
    private $fid;
    
        /**
    * @return 属性id
    */
        public function getFid() {
        return $this->fid;
    }
    
    /**
     * 设置属性id     
     * @param Long $fid     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFid( $fid) {
        $this->fid = $fid;
    }
    
        	
    private $parentId;
    
        /**
    * @return 父属性id
    */
        public function getParentId() {
        return $this->parentId;
    }
    
    /**
     * 设置父属性id     
     * @param Long $parentId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setParentId( $parentId) {
        $this->parentId = $parentId;
    }
    
        	
    private $unit;
    
        /**
    * @return 属性单位
    */
        public function getUnit() {
        return $this->unit;
    }
    
    /**
     * 设置属性单位     
     * @param String $unit     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setUnit( $unit) {
        $this->unit = $unit;
    }
    
        	
    private $name;
    
        /**
    * @return 属性名称
    */
        public function getName() {
        return $this->name;
    }
    
    /**
     * 设置属性名称     
     * @param String $name     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->name = $name;
    }
    
        	
    private $fieldType;
    
        /**
    * @return 属性类别
    */
        public function getFieldType() {
        return $this->fieldType;
    }
    
    /**
     * 设置属性类别     
     * @param String $fieldType     
     * 参数示例：<pre>属性值域的类型：
enum 列表类型</pre>     
     * 此参数必填     */
    public function setFieldType( $fieldType) {
        $this->fieldType = $fieldType;
    }
    
        	
    private $order;
    
        /**
    * @return 属性排列顺序
    */
        public function getOrder() {
        return $this->order;
    }
    
    /**
     * 设置属性排列顺序     
     * @param Integer $order     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrder( $order) {
        $this->order = $order;
    }
    
        	
    private $inputType;
    
        /**
    * @return 
    */
        public function getInputType() {
        return $this->inputType;
    }
    
    /**
     * 设置     
     * @param Integer $inputType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInputType( $inputType) {
        $this->inputType = $inputType;
    }
    
        	
    private $isNeeded;
    
        /**
    * @return 是否必填
    */
        public function getIsNeeded() {
        return $this->isNeeded;
    }
    
    /**
     * 设置是否必填     
     * @param String $isNeeded     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIsNeeded( $isNeeded) {
        $this->isNeeded = $isNeeded;
    }
    
        	
    private $isKeyAttr;
    
        /**
    * @return 是否关键属性
    */
        public function getIsKeyAttr() {
        return $this->isKeyAttr;
    }
    
    /**
     * 设置是否关键属性     
     * @param Boolean $isKeyAttr     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIsKeyAttr( $isKeyAttr) {
        $this->isKeyAttr = $isKeyAttr;
    }
    
        	
    private $isSuggestion;
    
        /**
    * @return 是否建议属性
    */
        public function getIsSuggestion() {
        return $this->isSuggestion;
    }
    
    /**
     * 设置是否建议属性     
     * @param Boolean $isSuggestion     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIsSuggestion( $isSuggestion) {
        $this->isSuggestion = $isSuggestion;
    }
    
        	
    private $isSpecAttr;
    
        /**
    * @return 是否特殊属性
    */
        public function getIsSpecAttr() {
        return $this->isSpecAttr;
    }
    
    /**
     * 设置是否特殊属性     
     * @param Boolean $isSpecAttr     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIsSpecAttr( $isSpecAttr) {
        $this->isSpecAttr = $isSpecAttr;
    }
    
        	
    private $isSupportDefinedValues;
    
        /**
    * @return 是否支持预定义值域
    */
        public function getIsSupportDefinedValues() {
        return $this->isSupportDefinedValues;
    }
    
    /**
     * 设置是否支持预定义值域     
     * @param Boolean $isSupportDefinedValues     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIsSupportDefinedValues( $isSupportDefinedValues) {
        $this->isSupportDefinedValues = $isSupportDefinedValues;
    }
    
        	
    private $isSpecExtendedAttr;
    
        /**
    * @return 是否支持扩展属性
    */
        public function getIsSpecExtendedAttr() {
        return $this->isSpecExtendedAttr;
    }
    
    /**
     * 设置是否支持扩展属性     
     * @param Boolean $isSpecExtendedAttr     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIsSpecExtendedAttr( $isSpecExtendedAttr) {
        $this->isSpecExtendedAttr = $isSpecExtendedAttr;
    }
    
        	
    private $isSpecPicAttr;
    
        /**
    * @return 是否图片属性
    */
        public function getIsSpecPicAttr() {
        return $this->isSpecPicAttr;
    }
    
    /**
     * 设置是否图片属性     
     * @param Boolean $isSpecPicAttr     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIsSpecPicAttr( $isSpecPicAttr) {
        $this->isSpecPicAttr = $isSpecPicAttr;
    }
    
        	
    private $featureType;
    
        /**
    * @return 
    */
        public function getFeatureType() {
        return $this->featureType;
    }
    
    /**
     * 设置     
     * @param String $featureType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFeatureType( $featureType) {
        $this->featureType = $featureType;
    }
    
        	
    private $precomment;
    
        /**
    * @return 
    */
        public function getPrecomment() {
        return $this->precomment;
    }
    
    /**
     * 设置     
     * @param String $precomment     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPrecomment( $precomment) {
        $this->precomment = $precomment;
    }
    
        	
    private $attrType;
    
        /**
    * @return 属性类型
    */
        public function getAttrType() {
        return $this->attrType;
    }
    
    /**
     * 设置属性类型     
     * @param Integer $attrType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAttrType( $attrType) {
        $this->attrType = $attrType;
    }
    
        	
    private $standardType;
    
        /**
    * @return 标准类型
    */
        public function getStandardType() {
        return $this->standardType;
    }
    
    /**
     * 设置标准类型     
     * @param String $standardType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStandardType( $standardType) {
        $this->standardType = $standardType;
    }
    
        	
    private $standardUnit;
    
        /**
    * @return 标准单位
    */
        public function getStandardUnit() {
        return $this->standardUnit;
    }
    
    /**
     * 设置标准单位     
     * @param String $standardUnit     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStandardUnit( $standardUnit) {
        $this->standardUnit = $standardUnit;
    }
    
        	
    private $outputType;
    
        /**
    * @return 展示类型
    */
        public function getOutputType() {
        return $this->outputType;
    }
    
    /**
     * 设置展示类型     
     * @param Integer $outputType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOutputType( $outputType) {
        $this->outputType = $outputType;
    }
    
        	
    private $featureIdValues;
    
        /**
    * @return 子属性id和值对
    */
        public function getFeatureIdValues() {
        return $this->featureIdValues;
    }
    
    /**
     * 设置子属性id和值对     
     * @param array include @see CategoryFeatureIdValue[] $featureIdValues     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFeatureIdValues(CategoryFeatureIdValue $featureIdValues) {
        $this->featureIdValues = $featureIdValues;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "fid", $this->stdResult )) {
    				$this->fid = $this->stdResult->{"fid"};
    			}
    			    		    				    			    			if (array_key_exists ( "parentId", $this->stdResult )) {
    				$this->parentId = $this->stdResult->{"parentId"};
    			}
    			    		    				    			    			if (array_key_exists ( "unit", $this->stdResult )) {
    				$this->unit = $this->stdResult->{"unit"};
    			}
    			    		    				    			    			if (array_key_exists ( "name", $this->stdResult )) {
    				$this->name = $this->stdResult->{"name"};
    			}
    			    		    				    			    			if (array_key_exists ( "fieldType", $this->stdResult )) {
    				$this->fieldType = $this->stdResult->{"fieldType"};
    			}
    			    		    				    			    			if (array_key_exists ( "order", $this->stdResult )) {
    				$this->order = $this->stdResult->{"order"};
    			}
    			    		    				    			    			if (array_key_exists ( "inputType", $this->stdResult )) {
    				$this->inputType = $this->stdResult->{"inputType"};
    			}
    			    		    				    			    			if (array_key_exists ( "isNeeded", $this->stdResult )) {
    				$this->isNeeded = $this->stdResult->{"isNeeded"};
    			}
    			    		    				    			    			if (array_key_exists ( "isKeyAttr", $this->stdResult )) {
    				$this->isKeyAttr = $this->stdResult->{"isKeyAttr"};
    			}
    			    		    				    			    			if (array_key_exists ( "isSuggestion", $this->stdResult )) {
    				$this->isSuggestion = $this->stdResult->{"isSuggestion"};
    			}
    			    		    				    			    			if (array_key_exists ( "isSpecAttr", $this->stdResult )) {
    				$this->isSpecAttr = $this->stdResult->{"isSpecAttr"};
    			}
    			    		    				    			    			if (array_key_exists ( "isSupportDefinedValues", $this->stdResult )) {
    				$this->isSupportDefinedValues = $this->stdResult->{"isSupportDefinedValues"};
    			}
    			    		    				    			    			if (array_key_exists ( "isSpecExtendedAttr", $this->stdResult )) {
    				$this->isSpecExtendedAttr = $this->stdResult->{"isSpecExtendedAttr"};
    			}
    			    		    				    			    			if (array_key_exists ( "isSpecPicAttr", $this->stdResult )) {
    				$this->isSpecPicAttr = $this->stdResult->{"isSpecPicAttr"};
    			}
    			    		    				    			    			if (array_key_exists ( "featureType", $this->stdResult )) {
    				$this->featureType = $this->stdResult->{"featureType"};
    			}
    			    		    				    			    			if (array_key_exists ( "precomment", $this->stdResult )) {
    				$this->precomment = $this->stdResult->{"precomment"};
    			}
    			    		    				    			    			if (array_key_exists ( "attrType", $this->stdResult )) {
    				$this->attrType = $this->stdResult->{"attrType"};
    			}
    			    		    				    			    			if (array_key_exists ( "standardType", $this->stdResult )) {
    				$this->standardType = $this->stdResult->{"standardType"};
    			}
    			    		    				    			    			if (array_key_exists ( "standardUnit", $this->stdResult )) {
    				$this->standardUnit = $this->stdResult->{"standardUnit"};
    			}
    			    		    				    			    			if (array_key_exists ( "outputType", $this->stdResult )) {
    				$this->outputType = $this->stdResult->{"outputType"};
    			}
    			    		    				    			    			if (array_key_exists ( "featureIdValues", $this->stdResult )) {
    			$featureIdValuesResult=$this->stdResult->{"featureIdValues"};
    				$object = json_decode ( json_encode ( $featureIdValuesResult ), true );
					$this->featureIdValues = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$CategoryFeatureIdValueResult=new CategoryFeatureIdValue();
						$CategoryFeatureIdValueResult->setArrayResult($arrayobject );
						$this->featureIdValues [$i] = $CategoryFeatureIdValueResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "fid", $this->arrayResult )) {
    			$this->fid = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "parentId", $this->arrayResult )) {
    			$this->parentId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "unit", $this->arrayResult )) {
    			$this->unit = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "name", $this->arrayResult )) {
    			$this->name = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "fieldType", $this->arrayResult )) {
    			$this->fieldType = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "order", $this->arrayResult )) {
    			$this->order = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "inputType", $this->arrayResult )) {
    			$this->inputType = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "isNeeded", $this->arrayResult )) {
    			$this->isNeeded = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "isKeyAttr", $this->arrayResult )) {
    			$this->isKeyAttr = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "isSuggestion", $this->arrayResult )) {
    			$this->isSuggestion = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "isSpecAttr", $this->arrayResult )) {
    			$this->isSpecAttr = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "isSupportDefinedValues", $this->arrayResult )) {
    			$this->isSupportDefinedValues = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "isSpecExtendedAttr", $this->arrayResult )) {
    			$this->isSpecExtendedAttr = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "isSpecPicAttr", $this->arrayResult )) {
    			$this->isSpecPicAttr = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "featureType", $this->arrayResult )) {
    			$this->featureType = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "precomment", $this->arrayResult )) {
    			$this->precomment = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "attrType", $this->arrayResult )) {
    			$this->attrType = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "standardType", $this->arrayResult )) {
    			$this->standardType = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "standardUnit", $this->arrayResult )) {
    			$this->standardUnit = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "outputType", $this->arrayResult )) {
    			$this->outputType = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "featureIdValues", $this->arrayResult )) {
    		$featureIdValuesResult=$arrayResult['${paramType.paramName}'];
    			$this->featureIdValues = new CategoryFeatureIdValue();
    			$this->featureIdValues->setStdResult ( $featureIdValuesResult);
    		}
    		    	    		}
 
   
}
?>