<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaCaigouProcurementOrderCreateProcurementOrderParam/AlibabaProcurementApiIntegrationResultResultData.class.php');

class AlibabaCaigouProcurementOrderCreateProcurementOrderResult {

        	
    private $result;
    
        /**
    * @return 创建订单结果参数
    */
        public function getResult() {
        return $this->result;
    }
    
    /**
     * 设置创建订单结果参数     
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