<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaMarketCouponApplyParam/AlibabaOceanOpenplatformCommonResultModel.class.php');

class AlibabaMarketCouponApplyResult {

        	
    private $result;
    
        /**
    * @return 返回结果
    */
        public function getResult() {
        return $this->result;
    }
    
    /**
     * 设置返回结果     
     * @param AlibabaOceanOpenplatformCommonResultModel $result     
          
     * 此参数必填     */
    public function setResult(AlibabaOceanOpenplatformCommonResultModel $result) {
        $this->result = $result;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "result", $this->stdResult )) {
    				$resultResult=$this->stdResult->{"result"};
    				$this->result = new AlibabaOceanOpenplatformCommonResultModel();
    				$this->result->setStdResult ( $resultResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "result", $this->arrayResult )) {
    		$resultResult=$arrayResult['${paramType.paramName}'];
    			    			$this->result = new AlibabaOceanOpenplatformCommonResultModel();
    			    			$this->result->setStdResult ( $resultResult);
    		}
    		    	    		}

}
?>