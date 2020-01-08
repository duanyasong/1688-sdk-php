<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCaigouBizApiCooperParamOpenModifySolutionStatusParam extends SDKDomain {

       	
    private $operatorLoginId;
    
        /**
    * @return 操作人loginId
    */
        public function getOperatorLoginId() {
        return $this->operatorLoginId;
    }
    
    /**
     * 设置操作人loginId     
     * @param String $operatorLoginId     
     * 参数示例：<pre>xiahui</pre>     
     * 此参数必填     */
    public function setOperatorLoginId( $operatorLoginId) {
        $this->operatorLoginId = $operatorLoginId;
    }
    
        	
    private $solutionId;
    
        /**
    * @return 1688采购方案id
    */
        public function getSolutionId() {
        return $this->solutionId;
    }
    
    /**
     * 设置1688采购方案id     
     * @param Long $solutionId     
     * 参数示例：<pre>123456</pre>     
     * 此参数必填     */
    public function setSolutionId( $solutionId) {
        $this->solutionId = $solutionId;
    }
    
        	
    private $status;
    
        /**
    * @return 审批状态
    */
        public function getStatus() {
        return $this->status;
    }
    
    /**
     * 设置审批状态     
     * @param String $status     
     * 参数示例：<pre>pass</pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "operatorLoginId", $this->stdResult )) {
    				$this->operatorLoginId = $this->stdResult->{"operatorLoginId"};
    			}
    			    		    				    			    			if (array_key_exists ( "solutionId", $this->stdResult )) {
    				$this->solutionId = $this->stdResult->{"solutionId"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "operatorLoginId", $this->arrayResult )) {
    			$this->operatorLoginId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "solutionId", $this->arrayResult )) {
    			$this->solutionId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>