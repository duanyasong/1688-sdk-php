<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ComAlibabaOceanOpenplatformBizLogisticsResultCainiaoSolutionInfoModel extends SDKDomain {

       	
    private $name;
    
        /**
    * @return 路线名称
    */
        public function getName() {
        return $this->name;
    }
    
    /**
     * 设置路线名称     
     * @param String $name     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->name = $name;
    }
    
        	
    private $solutionCode;
    
        /**
    * @return 路线方案编码，下单时需要传入
    */
        public function getSolutionCode() {
        return $this->solutionCode;
    }
    
    /**
     * 设置路线方案编码，下单时需要传入     
     * @param String $solutionCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSolutionCode( $solutionCode) {
        $this->solutionCode = $solutionCode;
    }
    
        	
    private $totalFee;
    
        /**
    * @return 预估费用，单位 分
    */
        public function getTotalFee() {
        return $this->totalFee;
    }
    
    /**
     * 设置预估费用，单位 分     
     * @param String $totalFee     
     * 参数示例：<pre>1200</pre>     
     * 此参数必填     */
    public function setTotalFee( $totalFee) {
        $this->totalFee = $totalFee;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "name", $this->stdResult )) {
    				$this->name = $this->stdResult->{"name"};
    			}
    			    		    				    			    			if (array_key_exists ( "solutionCode", $this->stdResult )) {
    				$this->solutionCode = $this->stdResult->{"solutionCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "totalFee", $this->stdResult )) {
    				$this->totalFee = $this->stdResult->{"totalFee"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "name", $this->arrayResult )) {
    			$this->name = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "solutionCode", $this->arrayResult )) {
    			$this->solutionCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "totalFee", $this->arrayResult )) {
    			$this->totalFee = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>