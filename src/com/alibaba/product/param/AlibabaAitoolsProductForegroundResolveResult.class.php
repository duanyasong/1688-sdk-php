<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaAitoolsProductForegroundResolveResult {

        	
    private $xRate;
    
        /**
    * @return 主体所在方形区域左上角顶点 x 坐标比例（相对于图片宽度），取值 [0, 1]
    */
        public function getXRate() {
        return $this->xRate;
    }
    
    /**
     * 设置主体所在方形区域左上角顶点 x 坐标比例（相对于图片宽度），取值 [0, 1]     
     * @param Double $xRate     
          
     * 此参数必填     */
    public function setXRate( $xRate) {
        $this->xRate = $xRate;
    }
    
        	
    private $yRate;
    
        /**
    * @return 主体所在方形区域左上角顶点 y 坐标比例（相对于图片高度），取值 [0, 1]
    */
        public function getYRate() {
        return $this->yRate;
    }
    
    /**
     * 设置主体所在方形区域左上角顶点 y 坐标比例（相对于图片高度），取值 [0, 1]     
     * @param Double $yRate     
          
     * 此参数必填     */
    public function setYRate( $yRate) {
        $this->yRate = $yRate;
    }
    
        	
    private $widthRate;
    
        /**
    * @return 主体所在方形区域宽度比例（相对于图片宽度），取值 [0, 1]
    */
        public function getWidthRate() {
        return $this->widthRate;
    }
    
    /**
     * 设置主体所在方形区域宽度比例（相对于图片宽度），取值 [0, 1]     
     * @param Double $widthRate     
          
     * 此参数必填     */
    public function setWidthRate( $widthRate) {
        $this->widthRate = $widthRate;
    }
    
        	
    private $heightRate;
    
        /**
    * @return 主体所在方形区域高度比例（相对于图片高度），取值 [0, 1]
    */
        public function getHeightRate() {
        return $this->heightRate;
    }
    
    /**
     * 设置主体所在方形区域高度比例（相对于图片高度），取值 [0, 1]     
     * @param Double $heightRate     
          
     * 此参数必填     */
    public function setHeightRate( $heightRate) {
        $this->heightRate = $heightRate;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "xRate", $this->stdResult )) {
    				$this->xRate = $this->stdResult->{"xRate"};
    			}
    			    		    				    			    			if (array_key_exists ( "yRate", $this->stdResult )) {
    				$this->yRate = $this->stdResult->{"yRate"};
    			}
    			    		    				    			    			if (array_key_exists ( "widthRate", $this->stdResult )) {
    				$this->widthRate = $this->stdResult->{"widthRate"};
    			}
    			    		    				    			    			if (array_key_exists ( "heightRate", $this->stdResult )) {
    				$this->heightRate = $this->stdResult->{"heightRate"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "xRate", $this->arrayResult )) {
    			$this->xRate = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "yRate", $this->arrayResult )) {
    			$this->yRate = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "widthRate", $this->arrayResult )) {
    			$this->widthRate = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "heightRate", $this->arrayResult )) {
    			$this->heightRate = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>