<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaAitoolsResourceDeletePermModel3DResult {

        	
    private $numSuccess;
    
        /**
    * @return 成功删除数量
    */
        public function getNumSuccess() {
        return $this->numSuccess;
    }
    
    /**
     * 设置成功删除数量     
     * @param Integer $numSuccess     
          
     * 此参数必填     */
    public function setNumSuccess( $numSuccess) {
        $this->numSuccess = $numSuccess;
    }
    
        	
    private $numFailure;
    
        /**
    * @return 删除失败数量
    */
        public function getNumFailure() {
        return $this->numFailure;
    }
    
    /**
     * 设置删除失败数量     
     * @param Integer $numFailure     
          
     * 此参数必填     */
    public function setNumFailure( $numFailure) {
        $this->numFailure = $numFailure;
    }
    
        	
    private $failedIDList;
    
        /**
    * @return 如果有删除失败的模型，则此字段包含删除失败的模型识别号列表
    */
        public function getFailedIDList() {
        return $this->failedIDList;
    }
    
    /**
     * 设置如果有删除失败的模型，则此字段包含删除失败的模型识别号列表     
     * @param array include @see String[] $failedIDList     
          
     * 此参数必填     */
    public function setFailedIDList( $failedIDList) {
        $this->failedIDList = $failedIDList;
    }
    
        	
    private $failedReasons;
    
        /**
    * @return 如果有删除失败的模型，则此字段包含删除失败的原因列表，该字段顺序、大小和 failedIDList 相同，一一对应
    */
        public function getFailedReasons() {
        return $this->failedReasons;
    }
    
    /**
     * 设置如果有删除失败的模型，则此字段包含删除失败的原因列表，该字段顺序、大小和 failedIDList 相同，一一对应     
     * @param array include @see String[] $failedReasons     
          
     * 此参数必填     */
    public function setFailedReasons( $failedReasons) {
        $this->failedReasons = $failedReasons;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "numSuccess", $this->stdResult )) {
    				$this->numSuccess = $this->stdResult->{"numSuccess"};
    			}
    			    		    				    			    			if (array_key_exists ( "numFailure", $this->stdResult )) {
    				$this->numFailure = $this->stdResult->{"numFailure"};
    			}
    			    		    				    			    			if (array_key_exists ( "failedIDList", $this->stdResult )) {
    				$this->failedIDList = $this->stdResult->{"failedIDList"};
    			}
    			    		    				    			    			if (array_key_exists ( "failedReasons", $this->stdResult )) {
    				$this->failedReasons = $this->stdResult->{"failedReasons"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "numSuccess", $this->arrayResult )) {
    			$this->numSuccess = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "numFailure", $this->arrayResult )) {
    			$this->numFailure = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "failedIDList", $this->arrayResult )) {
    			$this->failedIDList = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "failedReasons", $this->arrayResult )) {
    			$this->failedReasons = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>