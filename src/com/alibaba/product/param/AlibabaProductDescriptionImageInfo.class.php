<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProductDescriptionImageInfo extends SDKDomain {

       	
    private $url;
    
        /**
    * @return URL 地址
    */
        public function getUrl() {
        return $this->url;
    }
    
    /**
     * 设置URL 地址     
     * @param String $url     
     * 参数示例：<pre>http://foo/bar.jpg</pre>     
     * 此参数必填     */
    public function setUrl( $url) {
        $this->url = $url;
    }
    
        	
    private $width;
    
        /**
    * @return 图片宽度，像素单位
    */
        public function getWidth() {
        return $this->width;
    }
    
    /**
     * 设置图片宽度，像素单位     
     * @param Integer $width     
     * 参数示例：<pre>123</pre>     
     * 此参数必填     */
    public function setWidth( $width) {
        $this->width = $width;
    }
    
        	
    private $height;
    
        /**
    * @return 图片高度，像素单位
    */
        public function getHeight() {
        return $this->height;
    }
    
    /**
     * 设置图片高度，像素单位     
     * @param Integer $height     
     * 参数示例：<pre>234</pre>     
     * 此参数必填     */
    public function setHeight( $height) {
        $this->height = $height;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "url", $this->stdResult )) {
    				$this->url = $this->stdResult->{"url"};
    			}
    			    		    				    			    			if (array_key_exists ( "width", $this->stdResult )) {
    				$this->width = $this->stdResult->{"width"};
    			}
    			    		    				    			    			if (array_key_exists ( "height", $this->stdResult )) {
    				$this->height = $this->stdResult->{"height"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "url", $this->arrayResult )) {
    			$this->url = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "width", $this->arrayResult )) {
    			$this->width = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "height", $this->arrayResult )) {
    			$this->height = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>