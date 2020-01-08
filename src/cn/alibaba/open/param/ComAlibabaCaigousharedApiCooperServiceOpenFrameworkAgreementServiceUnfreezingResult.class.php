<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('ComAlibabaCaigousharedApiCooperServiceOpenFrameworkAgreementServiceUnfreezingParam/AlibabaCaigousharedApiCommonModelResultData.class.php');

class ComAlibabaCaigousharedApiCooperServiceOpenFrameworkAgreementServiceUnfreezingResult {

        	
    private $result;
    
        /**
    * @return 1
    */
        public function getResult() {
        return $this->result;
    }
    
    /**
     * 设置1     
     * @param AlibabaCaigousharedApiCommonModelResultData $result     
          
     * 此参数必填     */
    public function setResult(AlibabaCaigousharedApiCommonModelResultData $result) {
        $this->result = $result;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "result", $this->stdResult )) {
    				$resultResult=$this->stdResult->{"result"};
    				$this->result = new AlibabaCaigousharedApiCommonModelResultData();
    				$this->result->setStdResult ( $resultResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "result", $this->arrayResult )) {
    		$resultResult=$arrayResult['${paramType.paramName}'];
    			    			$this->result = new AlibabaCaigousharedApiCommonModelResultData();
    			    			$this->result->setStdResult ( $resultResult);
    		}
    		    	    		}

}
?>