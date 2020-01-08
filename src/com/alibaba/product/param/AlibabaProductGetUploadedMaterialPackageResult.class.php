<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaProductGetUploadedMaterialPackageParam/AlibabaProductProductMaterial.class.php');

class AlibabaProductGetUploadedMaterialPackageResult {

        	
    private $productMaterial;
    
        /**
    * @return 已经上传的素材包列表
    */
        public function getProductMaterial() {
        return $this->productMaterial;
    }
    
    /**
     * 设置已经上传的素材包列表     
     * @param array include @see AlibabaProductProductMaterial[] $productMaterial     
          
     * 此参数必填     */
    public function setProductMaterial(AlibabaProductProductMaterial $productMaterial) {
        $this->productMaterial = $productMaterial;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "productMaterial", $this->stdResult )) {
    			$productMaterialResult=$this->stdResult->{"productMaterial"};
    				$object = json_decode ( json_encode ( $productMaterialResult ), true );
					$this->productMaterial = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaProductProductMaterialResult=new AlibabaProductProductMaterial();
						$AlibabaProductProductMaterialResult->setArrayResult($arrayobject );
						$this->productMaterial [$i] = $AlibabaProductProductMaterialResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "productMaterial", $this->arrayResult )) {
    		$productMaterialResult=$arrayResult['${paramType.paramName}'];
    			$this->productMaterial = new AlibabaProductProductMaterial();
    			$this->productMaterial->setStdResult ( $productMaterialResult);
    		}
    		    	    		}

}
?>