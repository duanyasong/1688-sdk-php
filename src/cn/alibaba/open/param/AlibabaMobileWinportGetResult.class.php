<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaMobileWinportGetParam/AlibabaChinaMarketCommonResultResultModelWinport.class.php');

class AlibabaMobileWinportGetResult {

        	
    private $result;
    
        /**
    * @return 调用结果
    */
        public function getResult() {
        return $this->result;
    }
    
    /**
     * 设置调用结果     
     * @param AlibabaChinaMarketCommonResultResultModelWinport $result     
          
     * 此参数必填     */
    public function setResult(AlibabaChinaMarketCommonResultResultModelWinport $result) {
        $this->result = $result;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "result", $this->stdResult )) {
    				$resultResult=$this->stdResult->{"result"};
    				$this->result = new AlibabaChinaMarketCommonResultResultModelWinport();
    				$this->result->setStdResult ( $resultResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "result", $this->arrayResult )) {
    		$resultResult=$arrayResult['${paramType.paramName}'];
    			    			$this->result = new AlibabaChinaMarketCommonResultResultModelWinport();
    			    			$this->result->setStdResult ( $resultResult);
    		}
    		    	    		}

}
?>