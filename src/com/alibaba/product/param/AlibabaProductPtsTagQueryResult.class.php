<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaProductPtsTagQueryParam/ComAlibabaOceanOpenplatformBizPtsResultPtsModelResult.class.php');

class AlibabaProductPtsTagQueryResult {

        	
    private $result;
    
        /**
    * @return 买家保障服务列表
    */
        public function getResult() {
        return $this->result;
    }
    
    /**
     * 设置买家保障服务列表     
     * @param ComAlibabaOceanOpenplatformBizPtsResultPtsModelResult $result     
          
     * 此参数必填     */
    public function setResult(ComAlibabaOceanOpenplatformBizPtsResultPtsModelResult $result) {
        $this->result = $result;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "result", $this->stdResult )) {
    				$resultResult=$this->stdResult->{"result"};
    				$this->result = new ComAlibabaOceanOpenplatformBizPtsResultPtsModelResult();
    				$this->result->setStdResult ( $resultResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "result", $this->arrayResult )) {
    		$resultResult=$arrayResult['${paramType.paramName}'];
    			    			$this->result = new ComAlibabaOceanOpenplatformBizPtsResultPtsModelResult();
    			    			$this->result->setStdResult ( $resultResult);
    		}
    		    	    		}

}
?>