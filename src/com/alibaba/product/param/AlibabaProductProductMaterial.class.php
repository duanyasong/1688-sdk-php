<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaProductGetUploadedMaterialPackageParam/MaterialType.class.php');

class AlibabaProductProductMaterial extends SDKDomain {

       	
    private $id;
    
        /**
    * @return 素材ID，同recogniseId
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置素材ID，同recogniseId     
     * @param String $id     
     * 参数示例：<pre>xxx-xx</pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $name;
    
        /**
    * @return 素材包名称
    */
        public function getName() {
        return $this->name;
    }
    
    /**
     * 设置素材包名称     
     * @param String $name     
     * 参数示例：<pre>用户自定义包名称</pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->name = $name;
    }
    
        	
    private $url;
    
        /**
    * @return 素材包预览图URL
    */
        public function getUrl() {
        return $this->url;
    }
    
    /**
     * 设置素材包预览图URL     
     * @param String $url     
     * 参数示例：<pre>https://hello.com/hello.jpg</pre>     
     * 此参数必填     */
    public function setUrl( $url) {
        $this->url = $url;
    }
    
        	
    private $createTime;
    
        /**
    * @return 素材包上传时间
    */
        public function getCreateTime() {
        return $this->createTime;
    }
    
    /**
     * 设置素材包上传时间     
     * @param Date $createTime     
     * 参数示例：<pre>20180901000000000+0800</pre>     
     * 此参数必填     */
    public function setCreateTime( $createTime) {
        $this->createTime = $createTime;
    }
    
        	
    private $materialType;
    
        /**
    * @return 素材包类型
    */
        public function getMaterialType() {
        return $this->materialType;
    }
    
    /**
     * 设置素材包类型     
     * @param MaterialType $materialType     
     * 参数示例：<pre>{}</pre>     
     * 此参数必填     */
    public function setMaterialType(MaterialType $materialType) {
        $this->materialType = $materialType;
    }
    
        	
    private $itemNumber;
    
        /**
    * @return 商家商品货号
    */
        public function getItemNumber() {
        return $this->itemNumber;
    }
    
    /**
     * 设置商家商品货号     
     * @param String $itemNumber     
     * 参数示例：<pre>2019020300001</pre>     
     * 此参数必填     */
    public function setItemNumber( $itemNumber) {
        $this->itemNumber = $itemNumber;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "name", $this->stdResult )) {
    				$this->name = $this->stdResult->{"name"};
    			}
    			    		    				    			    			if (array_key_exists ( "url", $this->stdResult )) {
    				$this->url = $this->stdResult->{"url"};
    			}
    			    		    				    			    			if (array_key_exists ( "createTime", $this->stdResult )) {
    				$this->createTime = $this->stdResult->{"createTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "materialType", $this->stdResult )) {
    				$materialTypeResult=$this->stdResult->{"materialType"};
    				$this->materialType = new MaterialType();
    				$this->materialType->setStdResult ( $materialTypeResult);
    			}
    			    		    				    			    			if (array_key_exists ( "itemNumber", $this->stdResult )) {
    				$this->itemNumber = $this->stdResult->{"itemNumber"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "name", $this->arrayResult )) {
    			$this->name = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "url", $this->arrayResult )) {
    			$this->url = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "createTime", $this->arrayResult )) {
    			$this->createTime = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "materialType", $this->arrayResult )) {
    		$materialTypeResult=$arrayResult['${paramType.paramName}'];
    			    			$this->materialType = new MaterialType();
    			    			$this->materialType->setStdResult ( $materialTypeResult);
    		}
    		    	    			    		    			if (array_key_exists ( "itemNumber", $this->arrayResult )) {
    			$this->itemNumber = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>