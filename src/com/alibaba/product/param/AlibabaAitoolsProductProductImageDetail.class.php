<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaAitoolsProductProductImageDetail extends SDKDomain {

       	
    private $title;
    
        /**
    * @return 细节部位名称
    */
        public function getTitle() {
        return $this->title;
    }
    
    /**
     * 设置细节部位名称     
     * @param String $title     
     * 参数示例：<pre>领型</pre>     
     * 此参数必填     */
    public function setTitle( $title) {
        $this->title = $title;
    }
    
        	
    private $description;
    
        /**
    * @return 细节部位智能描述文案
    */
        public function getDescription() {
        return $this->description;
    }
    
    /**
     * 设置细节部位智能描述文案     
     * @param String $description     
     * 参数示例：<pre>性感V领，魅力四射</pre>     
     * 此参数必填     */
    public function setDescription( $description) {
        $this->description = $description;
    }
    
        	
    private $widthRate;
    
        /**
    * @return 0~1 之间的浮点数，细节部位图片宽度占原图的比例
    */
        public function getWidthRate() {
        return $this->widthRate;
    }
    
    /**
     * 设置0~1 之间的浮点数，细节部位图片宽度占原图的比例     
     * @param Double $widthRate     
     * 参数示例：<pre>0.5</pre>     
     * 此参数必填     */
    public function setWidthRate( $widthRate) {
        $this->widthRate = $widthRate;
    }
    
        	
    private $heightRate;
    
        /**
    * @return 0~1 之间的浮点数，细节部位图片高度占原图的比例
    */
        public function getHeightRate() {
        return $this->heightRate;
    }
    
    /**
     * 设置0~1 之间的浮点数，细节部位图片高度占原图的比例     
     * @param Double $heightRate     
     * 参数示例：<pre>0.5</pre>     
     * 此参数必填     */
    public function setHeightRate( $heightRate) {
        $this->heightRate = $heightRate;
    }
    
        	
    private $xRate;
    
        /**
    * @return 0~1 之间的浮点数，细节部位图片左上角 x 坐标在原图中的位置比例
    */
        public function getXRate() {
        return $this->xRate;
    }
    
    /**
     * 设置0~1 之间的浮点数，细节部位图片左上角 x 坐标在原图中的位置比例     
     * @param Double $xRate     
     * 参数示例：<pre>0.5</pre>     
     * 此参数必填     */
    public function setXRate( $xRate) {
        $this->xRate = $xRate;
    }
    
        	
    private $yRate;
    
        /**
    * @return 0~1 之间的浮点数，细节部位图片左上角 y 坐标在原图中的位置比例
    */
        public function getYRate() {
        return $this->yRate;
    }
    
    /**
     * 设置0~1 之间的浮点数，细节部位图片左上角 y 坐标在原图中的位置比例     
     * @param Double $yRate     
     * 参数示例：<pre>0.5</pre>     
     * 此参数必填     */
    public function setYRate( $yRate) {
        $this->yRate = $yRate;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "title", $this->stdResult )) {
    				$this->title = $this->stdResult->{"title"};
    			}
    			    		    				    			    			if (array_key_exists ( "description", $this->stdResult )) {
    				$this->description = $this->stdResult->{"description"};
    			}
    			    		    				    			    			if (array_key_exists ( "widthRate", $this->stdResult )) {
    				$this->widthRate = $this->stdResult->{"widthRate"};
    			}
    			    		    				    			    			if (array_key_exists ( "heightRate", $this->stdResult )) {
    				$this->heightRate = $this->stdResult->{"heightRate"};
    			}
    			    		    				    			    			if (array_key_exists ( "xRate", $this->stdResult )) {
    				$this->xRate = $this->stdResult->{"xRate"};
    			}
    			    		    				    			    			if (array_key_exists ( "yRate", $this->stdResult )) {
    				$this->yRate = $this->stdResult->{"yRate"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "title", $this->arrayResult )) {
    			$this->title = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "description", $this->arrayResult )) {
    			$this->description = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "widthRate", $this->arrayResult )) {
    			$this->widthRate = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "heightRate", $this->arrayResult )) {
    			$this->heightRate = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "xRate", $this->arrayResult )) {
    			$this->xRate = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "yRate", $this->arrayResult )) {
    			$this->yRate = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>