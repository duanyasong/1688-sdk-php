<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaCaigouDictionaryUpdateFactoryParam/AlibabaCaigouCoopapiProductModelResultData.class.php');

class AlibabaCaigouDictionaryUpdateFactoryResult {

        	
    private $result;
    
        /**
    * @return 结果对象
    */
        public function getResult() {
        return $this->result;
    }
    
    /**
     * 设置结果对象     
     * @param AlibabaCaigouCoopapiProductModelResultData $result     
          
     * 此参数必填     */
    public function setResult(AlibabaCaigouCoopapiProductModelResultData $result) {
        $this->result = $result;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "result", $this->stdResult )) {
    				$resultResult=$this->stdResult->{"result"};
    				$this->result = new AlibabaCaigouCoopapiProductModelResultData();
    				$this->result->setStdResult ( $resultResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "result", $this->arrayResult )) {
    		$resultResult=$arrayResult['${paramType.paramName}'];
    			    			$this->result = new AlibabaCaigouCoopapiProductModelResultData();
    			    			$this->result->setStdResult ( $resultResult);
    		}
    		    	    		}

}
?>