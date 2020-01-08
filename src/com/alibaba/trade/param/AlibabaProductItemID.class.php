<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaProductGetBySellerCargoNumberParam/AlibabaProductItemIDDefinition.class.php');
include_once ('AlibabaProductGetBySellerCargoNumberParam/AlibabaProductItemIDDefinition.class.php');
include_once ('AlibabaProductGetBySellerCargoNumberParam/AlibabaProductItemIDDefinition.class.php');

class AlibabaProductItemID extends SDKDomain {

       	
    private $idOfSupplier;
    
        /**
    * @return 供应商端的ID详情
    */
        public function getIdOfSupplier() {
        return $this->idOfSupplier;
    }
    
    /**
     * 设置供应商端的ID详情     
     * @param AlibabaProductItemIDDefinition $idOfSupplier     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIdOfSupplier(AlibabaProductItemIDDefinition $idOfSupplier) {
        $this->idOfSupplier = $idOfSupplier;
    }
    
        	
    private $idOfPlatform;
    
        /**
    * @return 平台端的ID详情
    */
        public function getIdOfPlatform() {
        return $this->idOfPlatform;
    }
    
    /**
     * 设置平台端的ID详情     
     * @param AlibabaProductItemIDDefinition $idOfPlatform     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIdOfPlatform(AlibabaProductItemIDDefinition $idOfPlatform) {
        $this->idOfPlatform = $idOfPlatform;
    }
    
        	
    private $idOfBuyer;
    
        /**
    * @return 买家端的ID详情
    */
        public function getIdOfBuyer() {
        return $this->idOfBuyer;
    }
    
    /**
     * 设置买家端的ID详情     
     * @param AlibabaProductItemIDDefinition $idOfBuyer     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIdOfBuyer(AlibabaProductItemIDDefinition $idOfBuyer) {
        $this->idOfBuyer = $idOfBuyer;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "idOfSupplier", $this->stdResult )) {
    				$idOfSupplierResult=$this->stdResult->{"idOfSupplier"};
    				$this->idOfSupplier = new AlibabaProductItemIDDefinition();
    				$this->idOfSupplier->setStdResult ( $idOfSupplierResult);
    			}
    			    		    				    			    			if (array_key_exists ( "idOfPlatform", $this->stdResult )) {
    				$idOfPlatformResult=$this->stdResult->{"idOfPlatform"};
    				$this->idOfPlatform = new AlibabaProductItemIDDefinition();
    				$this->idOfPlatform->setStdResult ( $idOfPlatformResult);
    			}
    			    		    				    			    			if (array_key_exists ( "idOfBuyer", $this->stdResult )) {
    				$idOfBuyerResult=$this->stdResult->{"idOfBuyer"};
    				$this->idOfBuyer = new AlibabaProductItemIDDefinition();
    				$this->idOfBuyer->setStdResult ( $idOfBuyerResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "idOfSupplier", $this->arrayResult )) {
    		$idOfSupplierResult=$arrayResult['${paramType.paramName}'];
    			    			$this->idOfSupplier = new AlibabaProductItemIDDefinition();
    			    			$this->idOfSupplier->setStdResult ( $idOfSupplierResult);
    		}
    		    	    			    		    		if (array_key_exists ( "idOfPlatform", $this->arrayResult )) {
    		$idOfPlatformResult=$arrayResult['${paramType.paramName}'];
    			    			$this->idOfPlatform = new AlibabaProductItemIDDefinition();
    			    			$this->idOfPlatform->setStdResult ( $idOfPlatformResult);
    		}
    		    	    			    		    		if (array_key_exists ( "idOfBuyer", $this->arrayResult )) {
    		$idOfBuyerResult=$arrayResult['${paramType.paramName}'];
    			    			$this->idOfBuyer = new AlibabaProductItemIDDefinition();
    			    			$this->idOfBuyer->setStdResult ( $idOfBuyerResult);
    		}
    		    	    		}
 
   
}
?>