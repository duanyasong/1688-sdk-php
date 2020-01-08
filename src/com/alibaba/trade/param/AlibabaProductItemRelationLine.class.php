<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaProductGetBySellerCargoNumberParam/AlibabaProductProductItemInfo.class.php');
include_once ('AlibabaProductGetBySellerCargoNumberParam/AlibabaProductItemIDDefinition.class.php');

class AlibabaProductItemRelationLine extends SDKDomain {

       	
    private $productItemInfos;
    
        /**
    * @return 
    */
        public function getProductItemInfos() {
        return $this->productItemInfos;
    }
    
    /**
     * 设置     
     * @param array include @see AlibabaProductProductItemInfo[] $productItemInfos     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductItemInfos(AlibabaProductProductItemInfo $productItemInfos) {
        $this->productItemInfos = $productItemInfos;
    }
    
        	
    private $idOfSupplier;
    
        /**
    * @return 
    */
        public function getIdOfSupplier() {
        return $this->idOfSupplier;
    }
    
    /**
     * 设置     
     * @param AlibabaProductItemIDDefinition $idOfSupplier     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIdOfSupplier(AlibabaProductItemIDDefinition $idOfSupplier) {
        $this->idOfSupplier = $idOfSupplier;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "productItemInfos", $this->stdResult )) {
    			$productItemInfosResult=$this->stdResult->{"productItemInfos"};
    				$object = json_decode ( json_encode ( $productItemInfosResult ), true );
					$this->productItemInfos = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaProductProductItemInfoResult=new AlibabaProductProductItemInfo();
						$AlibabaProductProductItemInfoResult->setArrayResult($arrayobject );
						$this->productItemInfos [$i] = $AlibabaProductProductItemInfoResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "idOfSupplier", $this->stdResult )) {
    				$idOfSupplierResult=$this->stdResult->{"idOfSupplier"};
    				$this->idOfSupplier = new AlibabaProductItemIDDefinition();
    				$this->idOfSupplier->setStdResult ( $idOfSupplierResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "productItemInfos", $this->arrayResult )) {
    		$productItemInfosResult=$arrayResult['${paramType.paramName}'];
    			$this->productItemInfos = new AlibabaProductProductItemInfo();
    			$this->productItemInfos->setStdResult ( $productItemInfosResult);
    		}
    		    	    			    		    		if (array_key_exists ( "idOfSupplier", $this->arrayResult )) {
    		$idOfSupplierResult=$arrayResult['${paramType.paramName}'];
    			    			$this->idOfSupplier = new AlibabaProductItemIDDefinition();
    			    			$this->idOfSupplier->setStdResult ( $idOfSupplierResult);
    		}
    		    	    		}
 
   
}
?>