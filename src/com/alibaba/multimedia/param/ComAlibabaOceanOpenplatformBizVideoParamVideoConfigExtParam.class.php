<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ComAlibabaOceanOpenplatformBizVideoParamVideoConfigExtParam extends SDKDomain {

       	
    private $containsTitle;
    
        /**
    * @return 是否需要标题
    */
        public function getContainsTitle() {
        return $this->containsTitle;
    }
    
    /**
     * 设置是否需要标题     
     * @param Boolean $containsTitle     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setContainsTitle( $containsTitle) {
        $this->containsTitle = $containsTitle;
    }
    
        	
    private $containsVideoFragment;
    
        /**
    * @return 是否包含视频片段
    */
        public function getContainsVideoFragment() {
        return $this->containsVideoFragment;
    }
    
    /**
     * 设置是否包含视频片段     
     * @param Boolean $containsVideoFragment     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setContainsVideoFragment( $containsVideoFragment) {
        $this->containsVideoFragment = $containsVideoFragment;
    }
    
        	
    private $containsSubTitle;
    
        /**
    * @return 是否包含字幕
    */
        public function getContainsSubTitle() {
        return $this->containsSubTitle;
    }
    
    /**
     * 设置是否包含字幕     
     * @param Boolean $containsSubTitle     
     * 参数示例：<pre>false</pre>     
     * 此参数必填     */
    public function setContainsSubTitle( $containsSubTitle) {
        $this->containsSubTitle = $containsSubTitle;
    }
    
        	
    private $logoEnding;
    
        /**
    * @return 是否使用logo图作为ending
    */
        public function getLogoEnding() {
        return $this->logoEnding;
    }
    
    /**
     * 设置是否使用logo图作为ending     
     * @param Boolean $logoEnding     
     * 参数示例：<pre>false</pre>     
     * 此参数必填     */
    public function setLogoEnding( $logoEnding) {
        $this->logoEnding = $logoEnding;
    }
    
        	
    private $visualization;
    
        /**
    * @return 是否使用可视化特效
    */
        public function getVisualization() {
        return $this->visualization;
    }
    
    /**
     * 设置是否使用可视化特效     
     * @param Boolean $visualization     
     * 参数示例：<pre>fasle</pre>     
     * 此参数必填     */
    public function setVisualization( $visualization) {
        $this->visualization = $visualization;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "containsTitle", $this->stdResult )) {
    				$this->containsTitle = $this->stdResult->{"containsTitle"};
    			}
    			    		    				    			    			if (array_key_exists ( "containsVideoFragment", $this->stdResult )) {
    				$this->containsVideoFragment = $this->stdResult->{"containsVideoFragment"};
    			}
    			    		    				    			    			if (array_key_exists ( "containsSubTitle", $this->stdResult )) {
    				$this->containsSubTitle = $this->stdResult->{"containsSubTitle"};
    			}
    			    		    				    			    			if (array_key_exists ( "logoEnding", $this->stdResult )) {
    				$this->logoEnding = $this->stdResult->{"logoEnding"};
    			}
    			    		    				    			    			if (array_key_exists ( "visualization", $this->stdResult )) {
    				$this->visualization = $this->stdResult->{"visualization"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "containsTitle", $this->arrayResult )) {
    			$this->containsTitle = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "containsVideoFragment", $this->arrayResult )) {
    			$this->containsVideoFragment = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "containsSubTitle", $this->arrayResult )) {
    			$this->containsSubTitle = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "logoEnding", $this->arrayResult )) {
    			$this->logoEnding = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "visualization", $this->arrayResult )) {
    			$this->visualization = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>