<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaProductGetBySellerCargoNumberParam/AlibabaProductRelateCargoNumberProductRetrieveResult.class.php');

class AlibabaProductGetBySellerCargoNumberResult {

        	
    private $result;
    
        /**
    * @return 商品信息
    */
        public function getResult() {
        return $this->result;
    }
    
    /**
     * 设置商品信息     
     * @param array include @see AlibabaProductRelateCargoNumberProductRetrieveResult[] $result     
          
     * 此参数必填     */
    public function setResult(AlibabaProductRelateCargoNumberProductRetrieveResult $result) {
        $this->result = $result;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "result", $this->stdResult )) {
    			$resultResult=$this->stdResult->{"result"};
    				$object = json_decode ( json_encode ( $resultResult ), true );
					$this->result = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaProductRelateCargoNumberProductRetrieveResultResult=new AlibabaProductRelateCargoNumberProductRetrieveResult();
						$AlibabaProductRelateCargoNumberProductRetrieveResultResult->setArrayResult($arrayobject );
						$this->result [$i] = $AlibabaProductRelateCargoNumberProductRetrieveResultResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "result", $this->arrayResult )) {
    		$resultResult=$arrayResult['${paramType.paramName}'];
    			$this->result = new AlibabaProductRelateCargoNumberProductRetrieveResult();
    			$this->result->setStdResult ( $resultResult);
    		}
    		    	    		}

}
?>