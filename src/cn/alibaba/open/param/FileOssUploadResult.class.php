<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class FileOssUploadResult {

        	
    private $objectUrl;
    
        /**
    * @return 生成的文件url
    */
        public function getObjectUrl() {
        return $this->objectUrl;
    }
    
    /**
     * 设置生成的文件url     
     * @param String $objectUrl     
          
     * 此参数必填     */
    public function setObjectUrl( $objectUrl) {
        $this->objectUrl = $objectUrl;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "objectUrl", $this->stdResult )) {
    				$this->objectUrl = $this->stdResult->{"objectUrl"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "objectUrl", $this->arrayResult )) {
    			$this->objectUrl = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>