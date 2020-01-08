<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('CaigouApiQuotationBuyerGetQuotationListByBuyOfferIdParam/ComAlibabaCaigouApiQuotationModelQuotation.class.php');

class CaigouApiQuotationBuyerGetQuotationListByBuyOfferIdResult {

        	
    private $quotationList;
    
        /**
    * @return 报价
    */
        public function getQuotationList() {
        return $this->quotationList;
    }
    
    /**
     * 设置报价     
     * @param array include @see ComAlibabaCaigouApiQuotationModelQuotation[] $quotationList     
          
     * 此参数必填     */
    public function setQuotationList(ComAlibabaCaigouApiQuotationModelQuotation $quotationList) {
        $this->quotationList = $quotationList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "quotationList", $this->stdResult )) {
    			$quotationListResult=$this->stdResult->{"quotationList"};
    				$object = json_decode ( json_encode ( $quotationListResult ), true );
					$this->quotationList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$ComAlibabaCaigouApiQuotationModelQuotationResult=new ComAlibabaCaigouApiQuotationModelQuotation();
						$ComAlibabaCaigouApiQuotationModelQuotationResult->setArrayResult($arrayobject );
						$this->quotationList [$i] = $ComAlibabaCaigouApiQuotationModelQuotationResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "quotationList", $this->arrayResult )) {
    		$quotationListResult=$arrayResult['${paramType.paramName}'];
    			$this->quotationList = new ComAlibabaCaigouApiQuotationModelQuotation();
    			$this->quotationList->setStdResult ( $quotationListResult);
    		}
    		    	    		}

}
?>