<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('ComAlibabaProcurementApiIntegrationServicePoSupplierIntegrationServiceParam/AlibabaProcurementApiIntegrationResultResultData.class.php');

class ComAlibabaProcurementApiIntegrationServicePoSupplierIntegrationServiceResult {

        	
    private $result;
    
        /**
    * @return 查询订单出参
    */
        public function getResult() {
        return $this->result;
    }
    
    /**
     * 设置查询订单出参     
     * @param AlibabaProcurementApiIntegrationResultResultData $result     
          
     * 此参数必填     */
    public function setResult(AlibabaProcurementApiIntegrationResultResultData $result) {
        $this->result = $result;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "result", $this->stdResult )) {
    				$resultResult=$this->stdResult->{"result"};
    				$this->result = new AlibabaProcurementApiIntegrationResultResultData();
    				$this->result->setStdResult ( $resultResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "result", $this->arrayResult )) {
    		$resultResult=$arrayResult['${paramType.paramName}'];
    			    			$this->result = new AlibabaProcurementApiIntegrationResultResultData();
    			    			$this->result->setStdResult ( $resultResult);
    		}
    		    	    		}

}
?>