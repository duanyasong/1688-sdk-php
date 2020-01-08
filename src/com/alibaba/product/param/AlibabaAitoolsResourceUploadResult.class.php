<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaAitoolsResourceUploadResult {

        	
    private $recogniseID;
    
        /**
    * @return 全局唯一的识别号，自动生成，作为后续各种 AI 能力的入参使用
    */
        public function getRecogniseID() {
        return $this->recogniseID;
    }
    
    /**
     * 设置全局唯一的识别号，自动生成，作为后续各种 AI 能力的入参使用     
     * @param String $recogniseID     
          
     * 此参数必填     */
    public function setRecogniseID( $recogniseID) {
        $this->recogniseID = $recogniseID;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "recogniseID", $this->stdResult )) {
    				$this->recogniseID = $this->stdResult->{"recogniseID"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "recogniseID", $this->arrayResult )) {
    			$this->recogniseID = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>