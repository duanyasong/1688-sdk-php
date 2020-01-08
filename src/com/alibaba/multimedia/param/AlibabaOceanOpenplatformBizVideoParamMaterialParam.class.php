<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaOceanOpenplatformBizVideoParamMaterialParam extends SDKDomain {

       	
    private $content;
    
        /**
    * @return 素材内容，主要是针对文字型素材
    */
        public function getContent() {
        return $this->content;
    }
    
    /**
     * 设置素材内容，主要是针对文字型素材     
     * @param String $content     
     * 参数示例：<pre>null</pre>     
     * 此参数必填     */
    public function setContent( $content) {
        $this->content = $content;
    }
    
        	
    private $label;
    
        /**
    * @return 素材标签
    */
        public function getLabel() {
        return $this->label;
    }
    
    /**
     * 设置素材标签     
     * @param String $label     
     * 参数示例：<pre>null</pre>     
     * 此参数必填     */
    public function setLabel( $label) {
        $this->label = $label;
    }
    
        	
    private $linkToIndex;
    
        /**
    * @return 素材在列表中的排序，从0开始
    */
        public function getLinkToIndex() {
        return $this->linkToIndex;
    }
    
    /**
     * 设置素材在列表中的排序，从0开始     
     * @param Integer $linkToIndex     
     * 参数示例：<pre>0</pre>     
     * 此参数必填     */
    public function setLinkToIndex( $linkToIndex) {
        $this->linkToIndex = $linkToIndex;
    }
    
        	
    private $src;
    
        /**
    * @return 素材链接
    */
        public function getSrc() {
        return $this->src;
    }
    
    /**
     * 设置素材链接     
     * @param String $src     
     * 参数示例：<pre>https://xxx/shoes/001.jpg</pre>     
     * 此参数必填     */
    public function setSrc( $src) {
        $this->src = $src;
    }
    
        	
    private $style;
    
        /**
    * @return 文字样式
    */
        public function getStyle() {
        return $this->style;
    }
    
    /**
     * 设置文字样式     
     * @param String $style     
     * 参数示例：<pre>null</pre>     
     * 此参数必填     */
    public function setStyle( $style) {
        $this->style = $style;
    }
    
        	
    private $type;
    
        /**
    * @return 素材类型
    */
        public function getType() {
        return $this->type;
    }
    
    /**
     * 设置素材类型     
     * @param String $type     
     * 参数示例：<pre>image</pre>     
     * 此参数必填     */
    public function setType( $type) {
        $this->type = $type;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "content", $this->stdResult )) {
    				$this->content = $this->stdResult->{"content"};
    			}
    			    		    				    			    			if (array_key_exists ( "label", $this->stdResult )) {
    				$this->label = $this->stdResult->{"label"};
    			}
    			    		    				    			    			if (array_key_exists ( "linkToIndex", $this->stdResult )) {
    				$this->linkToIndex = $this->stdResult->{"linkToIndex"};
    			}
    			    		    				    			    			if (array_key_exists ( "src", $this->stdResult )) {
    				$this->src = $this->stdResult->{"src"};
    			}
    			    		    				    			    			if (array_key_exists ( "style", $this->stdResult )) {
    				$this->style = $this->stdResult->{"style"};
    			}
    			    		    				    			    			if (array_key_exists ( "type", $this->stdResult )) {
    				$this->type = $this->stdResult->{"type"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "content", $this->arrayResult )) {
    			$this->content = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "label", $this->arrayResult )) {
    			$this->label = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "linkToIndex", $this->arrayResult )) {
    			$this->linkToIndex = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "src", $this->arrayResult )) {
    			$this->src = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "style", $this->arrayResult )) {
    			$this->style = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "type", $this->arrayResult )) {
    			$this->type = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>