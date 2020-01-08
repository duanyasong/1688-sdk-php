<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('BrandProductAddParam/AlibabaChinaProductApiOpenModelOpenPropertyModel.class.php');

class AlibabaChinaProductApiOpenModelOpenProductModel extends SDKDomain {

       	
    private $brandId;
    
        /**
    * @return 1688品牌ID
    */
        public function getBrandId() {
        return $this->brandId;
    }
    
    /**
     * 设置1688品牌ID     
     * @param Long $brandId     
     * 参数示例：<pre>32160</pre>     
     * 此参数必填     */
    public function setBrandId( $brandId) {
        $this->brandId = $brandId;
    }
    
        	
    private $brandName;
    
        /**
    * @return 1688品牌名称
    */
        public function getBrandName() {
        return $this->brandName;
    }
    
    /**
     * 设置1688品牌名称     
     * @param String $brandName     
     * 参数示例：<pre>品牌站测试品牌</pre>     
     * 此参数必填     */
    public function setBrandName( $brandName) {
        $this->brandName = $brandName;
    }
    
        	
    private $imgUrl;
    
        /**
    * @return 产品图片地址
    */
        public function getImgUrl() {
        return $this->imgUrl;
    }
    
    /**
     * 设置产品图片地址     
     * @param String $imgUrl     
     * 参数示例：<pre>http://cbu01.alicdn.com/xxx.jpg</pre>     
     * 此参数必填     */
    public function setImgUrl( $imgUrl) {
        $this->imgUrl = $imgUrl;
    }
    
        	
    private $marketPrice;
    
        /**
    * @return 产品面价
    */
        public function getMarketPrice() {
        return $this->marketPrice;
    }
    
    /**
     * 设置产品面价     
     * @param String $marketPrice     
     * 参数示例：<pre>168.8</pre>     
     * 此参数必填     */
    public function setMarketPrice( $marketPrice) {
        $this->marketPrice = $marketPrice;
    }
    
        	
    private $name;
    
        /**
    * @return 产品名称
    */
        public function getName() {
        return $this->name;
    }
    
    /**
     * 设置产品名称     
     * @param String $name     
     * 参数示例：<pre>测试产品</pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->name = $name;
    }
    
        	
    private $outerId;
    
        /**
    * @return 产品外部ID
    */
        public function getOuterId() {
        return $this->outerId;
    }
    
    /**
     * 设置产品外部ID     
     * @param String $outerId     
     * 参数示例：<pre>10001</pre>     
     * 此参数必填     */
    public function setOuterId( $outerId) {
        $this->outerId = $outerId;
    }
    
        	
    private $productGroupId;
    
        /**
    * @return 产品组ID
    */
        public function getProductGroupId() {
        return $this->productGroupId;
    }
    
    /**
     * 设置产品组ID     
     * @param Long $productGroupId     
     * 参数示例：<pre>2012</pre>     
     * 此参数必填     */
    public function setProductGroupId( $productGroupId) {
        $this->productGroupId = $productGroupId;
    }
    
        	
    private $productNumber;
    
        /**
    * @return 型号
    */
        public function getProductNumber() {
        return $this->productNumber;
    }
    
    /**
     * 设置型号     
     * @param String $productNumber     
     * 参数示例：<pre>test-01</pre>     
     * 此参数必填     */
    public function setProductNumber( $productNumber) {
        $this->productNumber = $productNumber;
    }
    
        	
    private $properties;
    
        /**
    * @return 产品属性
    */
        public function getProperties() {
        return $this->properties;
    }
    
    /**
     * 设置产品属性     
     * @param array include @see AlibabaChinaProductApiOpenModelOpenPropertyModel[] $properties     
     * 参数示例：<pre>properties</pre>     
     * 此参数必填     */
    public function setProperties(AlibabaChinaProductApiOpenModelOpenPropertyModel $properties) {
        $this->properties = $properties;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "brandId", $this->stdResult )) {
    				$this->brandId = $this->stdResult->{"brandId"};
    			}
    			    		    				    			    			if (array_key_exists ( "brandName", $this->stdResult )) {
    				$this->brandName = $this->stdResult->{"brandName"};
    			}
    			    		    				    			    			if (array_key_exists ( "imgUrl", $this->stdResult )) {
    				$this->imgUrl = $this->stdResult->{"imgUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "marketPrice", $this->stdResult )) {
    				$this->marketPrice = $this->stdResult->{"marketPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "name", $this->stdResult )) {
    				$this->name = $this->stdResult->{"name"};
    			}
    			    		    				    			    			if (array_key_exists ( "outerId", $this->stdResult )) {
    				$this->outerId = $this->stdResult->{"outerId"};
    			}
    			    		    				    			    			if (array_key_exists ( "productGroupId", $this->stdResult )) {
    				$this->productGroupId = $this->stdResult->{"productGroupId"};
    			}
    			    		    				    			    			if (array_key_exists ( "productNumber", $this->stdResult )) {
    				$this->productNumber = $this->stdResult->{"productNumber"};
    			}
    			    		    				    			    			if (array_key_exists ( "properties", $this->stdResult )) {
    			$propertiesResult=$this->stdResult->{"properties"};
    				$object = json_decode ( json_encode ( $propertiesResult ), true );
					$this->properties = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaChinaProductApiOpenModelOpenPropertyModelResult=new AlibabaChinaProductApiOpenModelOpenPropertyModel();
						$AlibabaChinaProductApiOpenModelOpenPropertyModelResult->setArrayResult($arrayobject );
						$this->properties [$i] = $AlibabaChinaProductApiOpenModelOpenPropertyModelResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "brandId", $this->arrayResult )) {
    			$this->brandId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "brandName", $this->arrayResult )) {
    			$this->brandName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "imgUrl", $this->arrayResult )) {
    			$this->imgUrl = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "marketPrice", $this->arrayResult )) {
    			$this->marketPrice = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "name", $this->arrayResult )) {
    			$this->name = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "outerId", $this->arrayResult )) {
    			$this->outerId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "productGroupId", $this->arrayResult )) {
    			$this->productGroupId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "productNumber", $this->arrayResult )) {
    			$this->productNumber = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "properties", $this->arrayResult )) {
    		$propertiesResult=$arrayResult['${paramType.paramName}'];
    			$this->properties = new AlibabaChinaProductApiOpenModelOpenPropertyModel();
    			$this->properties->setStdResult ( $propertiesResult);
    		}
    		    	    		}
 
   
}
?>