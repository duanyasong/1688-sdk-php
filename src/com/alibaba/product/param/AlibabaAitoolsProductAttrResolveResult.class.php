<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaAitoolsProductAttrResolveParam/AlibabaProductProductAttribute.class.php');

class AlibabaAitoolsProductAttrResolveResult {

        	
    private $categoryID;
    
        /**
    * @return AI 识别出的二三级类目ID
    */
        public function getCategoryID() {
        return $this->categoryID;
    }
    
    /**
     * 设置AI 识别出的二三级类目ID     
     * @param String $categoryID     
          
     * 此参数必填     */
    public function setCategoryID( $categoryID) {
        $this->categoryID = $categoryID;
    }
    
        	
    private $attributes;
    
        /**
    * @return 属性列表。如果同一个属性包含多个识别出的属性值，那么属性值会按照识别评分从高到低排列（识别度越高的属性值排名越靠前）
    */
        public function getAttributes() {
        return $this->attributes;
    }
    
    /**
     * 设置属性列表。如果同一个属性包含多个识别出的属性值，那么属性值会按照识别评分从高到低排列（识别度越高的属性值排名越靠前）     
     * @param array include @see AlibabaProductProductAttribute[] $attributes     
          
     * 此参数必填     */
    public function setAttributes(AlibabaProductProductAttribute $attributes) {
        $this->attributes = $attributes;
    }
    
        	
    private $articleNumber;
    
        /**
    * @return 自动生成的货号
    */
        public function getArticleNumber() {
        return $this->articleNumber;
    }
    
    /**
     * 设置自动生成的货号     
     * @param String $articleNumber     
          
     * 此参数必填     */
    public function setArticleNumber( $articleNumber) {
        $this->articleNumber = $articleNumber;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "categoryID", $this->stdResult )) {
    				$this->categoryID = $this->stdResult->{"categoryID"};
    			}
    			    		    				    			    			if (array_key_exists ( "attributes", $this->stdResult )) {
    			$attributesResult=$this->stdResult->{"attributes"};
    				$object = json_decode ( json_encode ( $attributesResult ), true );
					$this->attributes = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaProductProductAttributeResult=new AlibabaProductProductAttribute();
						$AlibabaProductProductAttributeResult->setArrayResult($arrayobject );
						$this->attributes [$i] = $AlibabaProductProductAttributeResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "articleNumber", $this->stdResult )) {
    				$this->articleNumber = $this->stdResult->{"articleNumber"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "categoryID", $this->arrayResult )) {
    			$this->categoryID = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "attributes", $this->arrayResult )) {
    		$attributesResult=$arrayResult['${paramType.paramName}'];
    			$this->attributes = new AlibabaProductProductAttribute();
    			$this->attributes->setStdResult ( $attributesResult);
    		}
    		    	    			    		    			if (array_key_exists ( "articleNumber", $this->arrayResult )) {
    			$this->articleNumber = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>