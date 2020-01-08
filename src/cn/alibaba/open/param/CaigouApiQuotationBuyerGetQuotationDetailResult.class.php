<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('CaigouApiQuotationBuyerGetQuotationDetailParam/ComAlibabaCaigouApiQuotationModelQuotation.class.php');

class CaigouApiQuotationBuyerGetQuotationDetailResult {

        	
    private $quotation;
    
        /**
    * @return 报价详情
    */
        public function getQuotation() {
        return $this->quotation;
    }
    
    /**
     * 设置报价详情     
     * @param ComAlibabaCaigouApiQuotationModelQuotation $quotation     
          
     * 此参数必填     */
    public function setQuotation(ComAlibabaCaigouApiQuotationModelQuotation $quotation) {
        $this->quotation = $quotation;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "quotation", $this->stdResult )) {
    				$quotationResult=$this->stdResult->{"quotation"};
    				$this->quotation = new ComAlibabaCaigouApiQuotationModelQuotation();
    				$this->quotation->setStdResult ( $quotationResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "quotation", $this->arrayResult )) {
    		$quotationResult=$arrayResult['${paramType.paramName}'];
    			    			$this->quotation = new ComAlibabaCaigouApiQuotationModelQuotation();
    			    			$this->quotation->setStdResult ( $quotationResult);
    		}
    		    	    		}

}
?>