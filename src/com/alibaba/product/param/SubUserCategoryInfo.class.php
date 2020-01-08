<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class SubUserCategoryInfo extends SDKDomain {

       	
    private $id;
    
        /**
    * @return ID
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置ID     
     * @param Long $id     
     * 参数示例：<pre>1001</pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $pid;
    
        /**
    * @return 父自定义分类ID
    */
        public function getPid() {
        return $this->pid;
    }
    
    /**
     * 设置父自定义分类ID     
     * @param Long $pid     
     * 参数示例：<pre>100</pre>     
     * 此参数必填     */
    public function setPid( $pid) {
        $this->pid = $pid;
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
     * 参数示例：<pre>自定义1</pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->name = $name;
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
     * 参数示例：<pre>http://***.png</pre>     
     * 此参数必填     */
    public function setIconUrl( $iconUrl) {
        $this->iconUrl = $iconUrl;
    }
    
        	
    private $sorting;
    
        /**
    * @return 排序
    */
        public function getSorting() {
        return $this->sorting;
    }
    
    /**
     * 设置排序     
     * @param Integer $sorting     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setSorting( $sorting) {
        $this->sorting = $sorting;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "pid", $this->stdResult )) {
    				$this->pid = $this->stdResult->{"pid"};
    			}
    			    		    				    			    			if (array_key_exists ( "name", $this->stdResult )) {
    				$this->name = $this->stdResult->{"name"};
    			}
    			    		    				    			    			if (array_key_exists ( "iconUrl", $this->stdResult )) {
    				$this->iconUrl = $this->stdResult->{"iconUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "sorting", $this->stdResult )) {
    				$this->sorting = $this->stdResult->{"sorting"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "pid", $this->arrayResult )) {
    			$this->pid = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "name", $this->arrayResult )) {
    			$this->name = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "iconUrl", $this->arrayResult )) {
    			$this->iconUrl = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "sorting", $this->arrayResult )) {
    			$this->sorting = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>