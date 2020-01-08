<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('CategoryLevelAttrGetParam/CategoryFeature.class.php');

class CategoryLevelAttrGetResult {

        	
    private $categoryFeatures;
    
        /**
    * @return 类目属性
    */
        public function getCategoryFeatures() {
        return $this->categoryFeatures;
    }
    
    /**
     * 设置类目属性     
     * @param array include @see CategoryFeature[] $categoryFeatures     
          
     * 此参数必填     */
    public function setCategoryFeatures(CategoryFeature $categoryFeatures) {
        $this->categoryFeatures = $categoryFeatures;
    }
    
        	
    private $success;
    
        /**
    * @return 是否成功
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置是否成功     
     * @param Boolean $success     
          
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "categoryFeatures", $this->stdResult )) {
    			$categoryFeaturesResult=$this->stdResult->{"categoryFeatures"};
    				$object = json_decode ( json_encode ( $categoryFeaturesResult ), true );
					$this->categoryFeatures = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$CategoryFeatureResult=new CategoryFeature();
						$CategoryFeatureResult->setArrayResult($arrayobject );
						$this->categoryFeatures [$i] = $CategoryFeatureResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "categoryFeatures", $this->arrayResult )) {
    		$categoryFeaturesResult=$arrayResult['${paramType.paramName}'];
    			$this->categoryFeatures = new CategoryFeature();
    			$this->categoryFeatures->setStdResult ( $categoryFeaturesResult);
    		}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>