<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaAitoolsGet3DModelMetaResult {

        	
    private $model;
    
        /**
    * @return 模型文件
    */
        public function getModel() {
        return $this->model;
    }
    
    /**
     * 设置模型文件     
     * @param String $model     
          
     * 此参数必填     */
    public function setModel( $model) {
        $this->model = $model;
    }
    
        	
    private $textures;
    
        /**
    * @return 模型纹理
    */
        public function getTextures() {
        return $this->textures;
    }
    
    /**
     * 设置模型纹理     
     * @param array include @see String[] $textures     
          
     * 此参数必填     */
    public function setTextures( $textures) {
        $this->textures = $textures;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "model", $this->stdResult )) {
    				$this->model = $this->stdResult->{"model"};
    			}
    			    		    				    			    			if (array_key_exists ( "textures", $this->stdResult )) {
    				$this->textures = $this->stdResult->{"textures"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "model", $this->arrayResult )) {
    			$this->model = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "textures", $this->arrayResult )) {
    			$this->textures = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>