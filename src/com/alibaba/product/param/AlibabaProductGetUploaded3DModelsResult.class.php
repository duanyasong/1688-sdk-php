<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaProductGetUploaded3DModelsParam/AlibabaProductProductThreeDimModel.class.php');

class AlibabaProductGetUploaded3DModelsResult {

        	
    private $product3DModels;
    
        /**
    * @return 已经上传的精美模型列表
    */
        public function getProduct3DModels() {
        return $this->product3DModels;
    }
    
    /**
     * 设置已经上传的精美模型列表     
     * @param array include @see AlibabaProductProductThreeDimModel[] $product3DModels     
          
     * 此参数必填     */
    public function setProduct3DModels(AlibabaProductProductThreeDimModel $product3DModels) {
        $this->product3DModels = $product3DModels;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "product3DModels", $this->stdResult )) {
    			$product3DModelsResult=$this->stdResult->{"product3DModels"};
    				$object = json_decode ( json_encode ( $product3DModelsResult ), true );
					$this->product3DModels = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaProductProductThreeDimModelResult=new AlibabaProductProductThreeDimModel();
						$AlibabaProductProductThreeDimModelResult->setArrayResult($arrayobject );
						$this->product3DModels [$i] = $AlibabaProductProductThreeDimModelResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "product3DModels", $this->arrayResult )) {
    		$product3DModelsResult=$arrayResult['${paramType.paramName}'];
    			$this->product3DModels = new AlibabaProductProductThreeDimModel();
    			$this->product3DModels->setStdResult ( $product3DModelsResult);
    		}
    		    	    		}

}
?>