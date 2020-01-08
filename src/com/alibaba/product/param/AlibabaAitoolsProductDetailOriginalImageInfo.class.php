<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaAitoolsProductDetailOriginalImageInfo extends SDKDomain {

       	
    private $url;
    
        /**
    * @return 原图上传到图片相册后的地址
    */
        public function getUrl() {
        return $this->url;
    }
    
    /**
     * 设置原图上传到图片相册后的地址     
     * @param String $url     
     * 参数示例：<pre>http://foo.bar/baz.jpg</pre>     
     * 此参数必填     */
    public function setUrl( $url) {
        $this->url = $url;
    }
    
        	
    private $width;
    
        /**
    * @return 原图宽度，单位：像素。注意，这里的图片尺寸并不是上传到图片相册后的尺寸，图片相册可能会对图片进行压缩。
    */
        public function getWidth() {
        return $this->width;
    }
    
    /**
     * 设置原图宽度，单位：像素。注意，这里的图片尺寸并不是上传到图片相册后的尺寸，图片相册可能会对图片进行压缩。     
     * @param Integer $width     
     * 参数示例：<pre>1024</pre>     
     * 此参数必填     */
    public function setWidth( $width) {
        $this->width = $width;
    }
    
        	
    private $height;
    
        /**
    * @return 原图高度，单位：像素。注意，这里的图片尺寸并不是上传到图片相册后的尺寸，图片相册可能会对图片进行压缩。
    */
        public function getHeight() {
        return $this->height;
    }
    
    /**
     * 设置原图高度，单位：像素。注意，这里的图片尺寸并不是上传到图片相册后的尺寸，图片相册可能会对图片进行压缩。     
     * @param Integer $height     
     * 参数示例：<pre>768</pre>     
     * 此参数必填     */
    public function setHeight( $height) {
        $this->height = $height;
    }
    
        	
    private $detailXRate;
    
        /**
    * @return 细节切图所在原图中的 x 坐标比例，取值为 0.0 ~ 1.0，由 width * x 可得出 x 坐标的像素值
    */
        public function getDetailXRate() {
        return $this->detailXRate;
    }
    
    /**
     * 设置细节切图所在原图中的 x 坐标比例，取值为 0.0 ~ 1.0，由 width * x 可得出 x 坐标的像素值     
     * @param Double $detailXRate     
     * 参数示例：<pre>0.5</pre>     
     * 此参数必填     */
    public function setDetailXRate( $detailXRate) {
        $this->detailXRate = $detailXRate;
    }
    
        	
    private $detailYRate;
    
        /**
    * @return 细节切图所在原图中的 y 坐标比例，取值为 0.0 ~ 1.0，由 height * y 可得出 y 坐标的像素值
    */
        public function getDetailYRate() {
        return $this->detailYRate;
    }
    
    /**
     * 设置细节切图所在原图中的 y 坐标比例，取值为 0.0 ~ 1.0，由 height * y 可得出 y 坐标的像素值     
     * @param Double $detailYRate     
     * 参数示例：<pre>0.5</pre>     
     * 此参数必填     */
    public function setDetailYRate( $detailYRate) {
        $this->detailYRate = $detailYRate;
    }
    
        	
    private $detailWidthRate;
    
        /**
    * @return 细节切图占原图的宽度比例，取值为 0.0 ~ 1.0，由 width * w 可得出实际像素宽度
    */
        public function getDetailWidthRate() {
        return $this->detailWidthRate;
    }
    
    /**
     * 设置细节切图占原图的宽度比例，取值为 0.0 ~ 1.0，由 width * w 可得出实际像素宽度     
     * @param Double $detailWidthRate     
     * 参数示例：<pre>0.5</pre>     
     * 此参数必填     */
    public function setDetailWidthRate( $detailWidthRate) {
        $this->detailWidthRate = $detailWidthRate;
    }
    
        	
    private $detailHeightRate;
    
        /**
    * @return 细节切图占原图的高度比例，取值为 0.0 ~ 1.0，由 height * h 可得出实际像素高度
    */
        public function getDetailHeightRate() {
        return $this->detailHeightRate;
    }
    
    /**
     * 设置细节切图占原图的高度比例，取值为 0.0 ~ 1.0，由 height * h 可得出实际像素高度     
     * @param Double $detailHeightRate     
     * 参数示例：<pre>0.5</pre>     
     * 此参数必填     */
    public function setDetailHeightRate( $detailHeightRate) {
        $this->detailHeightRate = $detailHeightRate;
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
    			    		    				    			    			if (array_key_exists ( "detailXRate", $this->stdResult )) {
    				$this->detailXRate = $this->stdResult->{"detailXRate"};
    			}
    			    		    				    			    			if (array_key_exists ( "detailYRate", $this->stdResult )) {
    				$this->detailYRate = $this->stdResult->{"detailYRate"};
    			}
    			    		    				    			    			if (array_key_exists ( "detailWidthRate", $this->stdResult )) {
    				$this->detailWidthRate = $this->stdResult->{"detailWidthRate"};
    			}
    			    		    				    			    			if (array_key_exists ( "detailHeightRate", $this->stdResult )) {
    				$this->detailHeightRate = $this->stdResult->{"detailHeightRate"};
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
    		    	    			    		    			if (array_key_exists ( "detailXRate", $this->arrayResult )) {
    			$this->detailXRate = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "detailYRate", $this->arrayResult )) {
    			$this->detailYRate = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "detailWidthRate", $this->arrayResult )) {
    			$this->detailWidthRate = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "detailHeightRate", $this->arrayResult )) {
    			$this->detailHeightRate = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>