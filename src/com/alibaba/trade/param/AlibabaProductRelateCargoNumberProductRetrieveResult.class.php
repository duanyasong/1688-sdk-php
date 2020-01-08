<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaProductGetBySellerCargoNumberParam/AlibabaProductItemRelationLine.class.php');

class AlibabaProductRelateCargoNumberProductRetrieveResult extends SDKDomain {

       	
    private $relatedProductItemLines;
    
        /**
    * @return 
    */
        public function getRelatedProductItemLines() {
        return $this->relatedProductItemLines;
    }
    
    /**
     * 设置     
     * @param array include @see AlibabaProductItemRelationLine[] $relatedProductItemLines     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRelatedProductItemLines(AlibabaProductItemRelationLine $relatedProductItemLines) {
        $this->relatedProductItemLines = $relatedProductItemLines;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "relatedProductItemLines", $this->stdResult )) {
    			$relatedProductItemLinesResult=$this->stdResult->{"relatedProductItemLines"};
    				$object = json_decode ( json_encode ( $relatedProductItemLinesResult ), true );
					$this->relatedProductItemLines = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaProductItemRelationLineResult=new AlibabaProductItemRelationLine();
						$AlibabaProductItemRelationLineResult->setArrayResult($arrayobject );
						$this->relatedProductItemLines [$i] = $AlibabaProductItemRelationLineResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "relatedProductItemLines", $this->arrayResult )) {
    		$relatedProductItemLinesResult=$arrayResult['${paramType.paramName}'];
    			$this->relatedProductItemLines = new AlibabaProductItemRelationLine();
    			$this->relatedProductItemLines->setStdResult ( $relatedProductItemLinesResult);
    		}
    		    	    		}
 
   
}
?>