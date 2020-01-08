<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class SizeInfo extends SDKDomain {

       	
    private $sampleImageUrl;
    
        /**
    * @return 示例图片地址
    */
        public function getSampleImageUrl() {
        return $this->sampleImageUrl;
    }
    
    /**
     * 设置示例图片地址     
     * @param String $sampleImageUrl     
     * 参数示例：<pre>xxx.jpg</pre>     
     * 此参数必填     */
    public function setSampleImageUrl( $sampleImageUrl) {
        $this->sampleImageUrl = $sampleImageUrl;
    }
    
        	
    private $widthMM;
    
        /**
    * @return 宽距
    */
        public function getWidthMM() {
        return $this->widthMM;
    }
    
    /**
     * 设置宽距     
     * @param Double $widthMM     
     * 参数示例：<pre>200</pre>     
     * 此参数必填     */
    public function setWidthMM( $widthMM) {
        $this->widthMM = $widthMM;
    }
    
        	
    private $heightMM;
    
        /**
    * @return 高距
    */
        public function getHeightMM() {
        return $this->heightMM;
    }
    
    /**
     * 设置高距     
     * @param Double $heightMM     
     * 参数示例：<pre>200</pre>     
     * 此参数必填     */
    public function setHeightMM( $heightMM) {
        $this->heightMM = $heightMM;
    }
    
        	
    private $depthMM;
    
        /**
    * @return 纵深距
    */
        public function getDepthMM() {
        return $this->depthMM;
    }
    
    /**
     * 设置纵深距     
     * @param Double $depthMM     
     * 参数示例：<pre>200</pre>     
     * 此参数必填     */
    public function setDepthMM( $depthMM) {
        $this->depthMM = $depthMM;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "sampleImageUrl", $this->stdResult )) {
    				$this->sampleImageUrl = $this->stdResult->{"sampleImageUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "widthMM", $this->stdResult )) {
    				$this->widthMM = $this->stdResult->{"widthMM"};
    			}
    			    		    				    			    			if (array_key_exists ( "heightMM", $this->stdResult )) {
    				$this->heightMM = $this->stdResult->{"heightMM"};
    			}
    			    		    				    			    			if (array_key_exists ( "depthMM", $this->stdResult )) {
    				$this->depthMM = $this->stdResult->{"depthMM"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "sampleImageUrl", $this->arrayResult )) {
    			$this->sampleImageUrl = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "widthMM", $this->arrayResult )) {
    			$this->widthMM = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "heightMM", $this->arrayResult )) {
    			$this->heightMM = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "depthMM", $this->arrayResult )) {
    			$this->depthMM = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>