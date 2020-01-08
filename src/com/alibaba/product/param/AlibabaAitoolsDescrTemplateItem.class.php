<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaAitoolsDescrTemplateItem extends SDKDomain {

       	
    private $id;
    
        /**
    * @return 模板ID
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置模板ID     
     * @param String $id     
     * 参数示例：<pre>001</pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $title;
    
        /**
    * @return 模板名称
    */
        public function getTitle() {
        return $this->title;
    }
    
    /**
     * 设置模板名称     
     * @param String $title     
     * 参数示例：<pre>清新风格模板</pre>     
     * 此参数必填     */
    public function setTitle( $title) {
        $this->title = $title;
    }
    
        	
    private $previewImageUrl;
    
        /**
    * @return 预览图地址
    */
        public function getPreviewImageUrl() {
        return $this->previewImageUrl;
    }
    
    /**
     * 设置预览图地址     
     * @param String $previewImageUrl     
     * 参数示例：<pre>http://foo.bar/baz.jpg</pre>     
     * 此参数必填     */
    public function setPreviewImageUrl( $previewImageUrl) {
        $this->previewImageUrl = $previewImageUrl;
    }
    
        	
    private $vendor;
    
        /**
    * @return 提供者
    */
        public function getVendor() {
        return $this->vendor;
    }
    
    /**
     * 设置提供者     
     * @param String $vendor     
     * 参数示例：<pre>阿里巴巴官方模板</pre>     
     * 此参数必填     */
    public function setVendor( $vendor) {
        $this->vendor = $vendor;
    }
    
        	
    private $editTime;
    
        /**
    * @return 更新时间
    */
        public function getEditTime() {
        return $this->editTime;
    }
    
    /**
     * 设置更新时间     
     * @param Date $editTime     
     * 参数示例：<pre>201811130800000+0800</pre>     
     * 此参数必填     */
    public function setEditTime( $editTime) {
        $this->editTime = $editTime;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "title", $this->stdResult )) {
    				$this->title = $this->stdResult->{"title"};
    			}
    			    		    				    			    			if (array_key_exists ( "previewImageUrl", $this->stdResult )) {
    				$this->previewImageUrl = $this->stdResult->{"previewImageUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "vendor", $this->stdResult )) {
    				$this->vendor = $this->stdResult->{"vendor"};
    			}
    			    		    				    			    			if (array_key_exists ( "editTime", $this->stdResult )) {
    				$this->editTime = $this->stdResult->{"editTime"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "title", $this->arrayResult )) {
    			$this->title = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "previewImageUrl", $this->arrayResult )) {
    			$this->previewImageUrl = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "vendor", $this->arrayResult )) {
    			$this->vendor = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "editTime", $this->arrayResult )) {
    			$this->editTime = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>