<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaAitoolsProductResourceUploadResult {

        	
    private $recogniseID;
    
        /**
    * @return 本次上传生成的识别号，将作为后续所有慧眼识货 AI 能力的参数使用。
    */
        public function getRecogniseID() {
        return $this->recogniseID;
    }
    
    /**
     * 设置本次上传生成的识别号，将作为后续所有慧眼识货 AI 能力的参数使用。     
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