<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaProductGetBySellerCargoNumberParam/AlibabaProductItemIDDefinition.class.php');

class AlibabaProductRelateCargoNumberProductRetrieveRequest extends SDKDomain {

       	
    private $supplyUserId;
    
        /**
    * @return 卖家ID
    */
        public function getSupplyUserId() {
        return $this->supplyUserId;
    }
    
    /**
     * 设置卖家ID     
     * @param Long $supplyUserId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSupplyUserId( $supplyUserId) {
        $this->supplyUserId = $supplyUserId;
    }
    
        	
    private $idListOfSupplier;
    
        /**
    * @return 卖家的货号列表
    */
        public function getIdListOfSupplier() {
        return $this->idListOfSupplier;
    }
    
    /**
     * 设置卖家的货号列表     
     * @param array include @see AlibabaProductItemIDDefinition[] $idListOfSupplier     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIdListOfSupplier(AlibabaProductItemIDDefinition $idListOfSupplier) {
        $this->idListOfSupplier = $idListOfSupplier;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "supplyUserId", $this->stdResult )) {
    				$this->supplyUserId = $this->stdResult->{"supplyUserId"};
    			}
    			    		    				    			    			if (array_key_exists ( "idListOfSupplier", $this->stdResult )) {
    			$idListOfSupplierResult=$this->stdResult->{"idListOfSupplier"};
    				$object = json_decode ( json_encode ( $idListOfSupplierResult ), true );
					$this->idListOfSupplier = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaProductItemIDDefinitionResult=new AlibabaProductItemIDDefinition();
						$AlibabaProductItemIDDefinitionResult->setArrayResult($arrayobject );
						$this->idListOfSupplier [$i] = $AlibabaProductItemIDDefinitionResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "supplyUserId", $this->arrayResult )) {
    			$this->supplyUserId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "idListOfSupplier", $this->arrayResult )) {
    		$idListOfSupplierResult=$arrayResult['${paramType.paramName}'];
    			$this->idListOfSupplier = new AlibabaProductItemIDDefinition();
    			$this->idListOfSupplier->setStdResult ( $idListOfSupplierResult);
    		}
    		    	    		}
 
   
}
?>