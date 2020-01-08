<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class MaterialType extends SDKDomain {

       	
    private $model3DEnable;
    
        /**
    * @return 是否包含3D模型素材包
    */
        public function getModel3DEnable() {
        return $this->model3DEnable;
    }
    
    /**
     * 设置是否包含3D模型素材包     
     * @param Boolean $model3DEnable     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setModel3DEnable( $model3DEnable) {
        $this->model3DEnable = $model3DEnable;
    }
    
        	
    private $pictureEnable;
    
        /**
    * @return 是否包含图片素材包
    */
        public function getPictureEnable() {
        return $this->pictureEnable;
    }
    
    /**
     * 设置是否包含图片素材包     
     * @param Boolean $pictureEnable     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setPictureEnable( $pictureEnable) {
        $this->pictureEnable = $pictureEnable;
    }
    
        	
    private $videoEnable;
    
        /**
    * @return 是否是否包含视频素材包
    */
        public function getVideoEnable() {
        return $this->videoEnable;
    }
    
    /**
     * 设置是否是否包含视频素材包     
     * @param Boolean $videoEnable     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setVideoEnable( $videoEnable) {
        $this->videoEnable = $videoEnable;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "model3DEnable", $this->stdResult )) {
    				$this->model3DEnable = $this->stdResult->{"model3DEnable"};
    			}
    			    		    				    			    			if (array_key_exists ( "pictureEnable", $this->stdResult )) {
    				$this->pictureEnable = $this->stdResult->{"pictureEnable"};
    			}
    			    		    				    			    			if (array_key_exists ( "videoEnable", $this->stdResult )) {
    				$this->videoEnable = $this->stdResult->{"videoEnable"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "model3DEnable", $this->arrayResult )) {
    			$this->model3DEnable = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "pictureEnable", $this->arrayResult )) {
    			$this->pictureEnable = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "videoEnable", $this->arrayResult )) {
    			$this->videoEnable = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>