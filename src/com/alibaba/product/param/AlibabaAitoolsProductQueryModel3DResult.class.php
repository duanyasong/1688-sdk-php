<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaAitoolsProductQueryModel3DResult {

        	
    private $recogniseID;
    
        /**
    * @return 3D 模型的识别号
    */
        public function getRecogniseID() {
        return $this->recogniseID;
    }
    
    /**
     * 设置3D 模型的识别号     
     * @param String $recogniseID     
          
     * 此参数必填     */
    public function setRecogniseID( $recogniseID) {
        $this->recogniseID = $recogniseID;
    }
    
        	
    private $viewUrl;
    
        /**
    * @return 3D模型预览URL
    */
        public function getViewUrl() {
        return $this->viewUrl;
    }
    
    /**
     * 设置3D模型预览URL     
     * @param String $viewUrl     
          
     * 此参数必填     */
    public function setViewUrl( $viewUrl) {
        $this->viewUrl = $viewUrl;
    }
    
        	
    private $imageUrl;
    
        /**
    * @return 3D模型封面图URL
    */
        public function getImageUrl() {
        return $this->imageUrl;
    }
    
    /**
     * 设置3D模型封面图URL     
     * @param String $imageUrl     
          
     * 此参数必填     */
    public function setImageUrl( $imageUrl) {
        $this->imageUrl = $imageUrl;
    }
    
        	
    private $is3DOffer;
    
        /**
    * @return 商品是否包含3D
    */
        public function getIs3DOffer() {
        return $this->is3DOffer;
    }
    
    /**
     * 设置商品是否包含3D     
     * @param Boolean $is3DOffer     
          
     * 此参数必填     */
    public function setIs3DOffer( $is3DOffer) {
        $this->is3DOffer = $is3DOffer;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "recogniseID", $this->stdResult )) {
    				$this->recogniseID = $this->stdResult->{"recogniseID"};
    			}
    			    		    				    			    			if (array_key_exists ( "viewUrl", $this->stdResult )) {
    				$this->viewUrl = $this->stdResult->{"viewUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "imageUrl", $this->stdResult )) {
    				$this->imageUrl = $this->stdResult->{"imageUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "is3DOffer", $this->stdResult )) {
    				$this->is3DOffer = $this->stdResult->{"is3DOffer"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "recogniseID", $this->arrayResult )) {
    			$this->recogniseID = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "viewUrl", $this->arrayResult )) {
    			$this->viewUrl = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "imageUrl", $this->arrayResult )) {
    			$this->imageUrl = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "is3DOffer", $this->arrayResult )) {
    			$this->is3DOffer = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>