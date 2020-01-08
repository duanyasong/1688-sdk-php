<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class OssGenerateSignedUploadUrlResult {

        	
    private $uploadUrl;
    
        /**
    * @return 可用于标准的http put 方法上传的 Url
    */
        public function getUploadUrl() {
        return $this->uploadUrl;
    }
    
    /**
     * 设置可用于标准的http put 方法上传的 Url     
     * @param String $uploadUrl     
          
     * 此参数必填     */
    public function setUploadUrl( $uploadUrl) {
        $this->uploadUrl = $uploadUrl;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "uploadUrl", $this->stdResult )) {
    				$this->uploadUrl = $this->stdResult->{"uploadUrl"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "uploadUrl", $this->arrayResult )) {
    			$this->uploadUrl = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>