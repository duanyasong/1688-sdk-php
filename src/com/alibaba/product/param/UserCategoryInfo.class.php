<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaUserCategoryListGetParam/SubUserCategoryInfo.class.php');

class UserCategoryInfo extends SDKDomain {

       	
    private $subCategoryList;
    
        /**
    * @return 111
    */
        public function getSubCategoryList() {
        return $this->subCategoryList;
    }
    
    /**
     * 设置111     
     * @param array include @see SubUserCategoryInfo[] $subCategoryList     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setSubCategoryList(SubUserCategoryInfo $subCategoryList) {
        $this->subCategoryList = $subCategoryList;
    }
    
        	
    private $iconUrl;
    
        /**
    * @return 图标
    */
        public function getIconUrl() {
        return $this->iconUrl;
    }
    
    /**
     * 设置图标     
     * @param String $iconUrl     
     * 参数示例：<pre>http://</pre>     
     * 此参数必填     */
    public function setIconUrl( $iconUrl) {
        $this->iconUrl = $iconUrl;
    }
    
        	
    private $id;
    
        /**
    * @return Id
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置Id     
     * @param Long $id     
     * 参数示例：<pre>100</pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
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
     * 参数示例：<pre>自定义1	</pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->name = $name;
    }
    
        	
    private $ordering;
    
        /**
    * @return 排序Id
    */
        public function getOrdering() {
        return $this->ordering;
    }
    
    /**
     * 设置排序Id     
     * @param Integer $ordering     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setOrdering( $ordering) {
        $this->ordering = $ordering;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "subCategoryList", $this->stdResult )) {
    			$subCategoryListResult=$this->stdResult->{"subCategoryList"};
    				$object = json_decode ( json_encode ( $subCategoryListResult ), true );
					$this->subCategoryList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$SubUserCategoryInfoResult=new SubUserCategoryInfo();
						$SubUserCategoryInfoResult->setArrayResult($arrayobject );
						$this->subCategoryList [$i] = $SubUserCategoryInfoResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "iconUrl", $this->stdResult )) {
    				$this->iconUrl = $this->stdResult->{"iconUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "name", $this->stdResult )) {
    				$this->name = $this->stdResult->{"name"};
    			}
    			    		    				    			    			if (array_key_exists ( "ordering", $this->stdResult )) {
    				$this->ordering = $this->stdResult->{"ordering"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "subCategoryList", $this->arrayResult )) {
    		$subCategoryListResult=$arrayResult['${paramType.paramName}'];
    			$this->subCategoryList = new SubUserCategoryInfo();
    			$this->subCategoryList->setStdResult ( $subCategoryListResult);
    		}
    		    	    			    		    			if (array_key_exists ( "iconUrl", $this->arrayResult )) {
    			$this->iconUrl = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "name", $this->arrayResult )) {
    			$this->name = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "ordering", $this->arrayResult )) {
    			$this->ordering = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>