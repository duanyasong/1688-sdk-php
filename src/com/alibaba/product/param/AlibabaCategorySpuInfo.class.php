<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaCategoryGetSPUInfoParam/AlibabaCategoryFeatureAttribute.class.php');

class AlibabaCategorySpuInfo extends SDKDomain {

       	
    private $spuId;
    
        /**
    * @return spu ID
    */
        public function getSpuId() {
        return $this->spuId;
    }
    
    /**
     * 设置spu ID     
     * @param Long $spuId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSpuId( $spuId) {
        $this->spuId = $spuId;
    }
    
        	
    private $categoryId;
    
        /**
    * @return 类目ID
    */
        public function getCategoryId() {
        return $this->categoryId;
    }
    
    /**
     * 设置类目ID     
     * @param Long $categoryId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCategoryId( $categoryId) {
        $this->categoryId = $categoryId;
    }
    
        	
    private $name;
    
        /**
    * @return spu名称
    */
        public function getName() {
        return $this->name;
    }
    
    /**
     * 设置spu名称     
     * @param String $name     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->name = $name;
    }
    
        	
    private $standardSpuAttrValues;
    
        /**
    * @return spu的属性值对
    */
        public function getStandardSpuAttrValues() {
        return $this->standardSpuAttrValues;
    }
    
    /**
     * 设置spu的属性值对     
     * @param array include @see AlibabaCategoryFeatureAttribute[] $standardSpuAttrValues     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStandardSpuAttrValues(AlibabaCategoryFeatureAttribute $standardSpuAttrValues) {
        $this->standardSpuAttrValues = $standardSpuAttrValues;
    }
    
        	
    private $details;
    
        /**
    * @return SPU的详细说明
    */
        public function getDetails() {
        return $this->details;
    }
    
    /**
     * 设置SPU的详细说明     
     * @param String $details     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDetails( $details) {
        $this->details = $details;
    }
    
        	
    private $table;
    
        /**
    * @return 
    */
        public function getTable() {
        return $this->table;
    }
    
    /**
     * 设置     
     * @param String $table     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTable( $table) {
        $this->table = $table;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "spuId", $this->stdResult )) {
    				$this->spuId = $this->stdResult->{"spuId"};
    			}
    			    		    				    			    			if (array_key_exists ( "categoryId", $this->stdResult )) {
    				$this->categoryId = $this->stdResult->{"categoryId"};
    			}
    			    		    				    			    			if (array_key_exists ( "name", $this->stdResult )) {
    				$this->name = $this->stdResult->{"name"};
    			}
    			    		    				    			    			if (array_key_exists ( "standardSpuAttrValues", $this->stdResult )) {
    			$standardSpuAttrValuesResult=$this->stdResult->{"standardSpuAttrValues"};
    				$object = json_decode ( json_encode ( $standardSpuAttrValuesResult ), true );
					$this->standardSpuAttrValues = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaCategoryFeatureAttributeResult=new AlibabaCategoryFeatureAttribute();
						$AlibabaCategoryFeatureAttributeResult->setArrayResult($arrayobject );
						$this->standardSpuAttrValues [$i] = $AlibabaCategoryFeatureAttributeResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "details", $this->stdResult )) {
    				$this->details = $this->stdResult->{"details"};
    			}
    			    		    				    			    			if (array_key_exists ( "table", $this->stdResult )) {
    				$this->table = $this->stdResult->{"table"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "spuId", $this->arrayResult )) {
    			$this->spuId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "categoryId", $this->arrayResult )) {
    			$this->categoryId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "name", $this->arrayResult )) {
    			$this->name = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "standardSpuAttrValues", $this->arrayResult )) {
    		$standardSpuAttrValuesResult=$arrayResult['${paramType.paramName}'];
    			$this->standardSpuAttrValues = new AlibabaCategoryFeatureAttribute();
    			$this->standardSpuAttrValues->setStdResult ( $standardSpuAttrValuesResult);
    		}
    		    	    			    		    			if (array_key_exists ( "details", $this->arrayResult )) {
    			$this->details = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "table", $this->arrayResult )) {
    			$this->table = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>