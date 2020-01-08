<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaProductSimpleAddParam/AlibabaProductSimpleProductCreateResultModel.class.php');

class AlibabaProductSimpleAddResult {

        	
    private $simpleProductCreateResultModel;
    
        /**
    * @return 返回结果
    */
        public function getSimpleProductCreateResultModel() {
        return $this->simpleProductCreateResultModel;
    }
    
    /**
     * 设置返回结果     
     * @param AlibabaProductSimpleProductCreateResultModel $simpleProductCreateResultModel     
          
     * 此参数必填     */
    public function setSimpleProductCreateResultModel(AlibabaProductSimpleProductCreateResultModel $simpleProductCreateResultModel) {
        $this->simpleProductCreateResultModel = $simpleProductCreateResultModel;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "simpleProductCreateResultModel", $this->stdResult )) {
    				$simpleProductCreateResultModelResult=$this->stdResult->{"simpleProductCreateResultModel"};
    				$this->simpleProductCreateResultModel = new AlibabaProductSimpleProductCreateResultModel();
    				$this->simpleProductCreateResultModel->setStdResult ( $simpleProductCreateResultModelResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "simpleProductCreateResultModel", $this->arrayResult )) {
    		$simpleProductCreateResultModelResult=$arrayResult['${paramType.paramName}'];
    			    			$this->simpleProductCreateResultModel = new AlibabaProductSimpleProductCreateResultModel();
    			    			$this->simpleProductCreateResultModel->setStdResult ( $simpleProductCreateResultModelResult);
    		}
    		    	    		}

}
?>