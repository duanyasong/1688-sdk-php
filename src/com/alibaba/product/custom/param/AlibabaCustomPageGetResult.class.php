<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCustomPageGetResult {

        	
    private $redirectUrl;
    
        /**
    * @return 重定向地址
    */
        public function getRedirectUrl() {
        return $this->redirectUrl;
    }
    
    /**
     * 设置重定向地址     
     * @param String $redirectUrl     
          
     * 此参数必填     */
    public function setRedirectUrl( $redirectUrl) {
        $this->redirectUrl = $redirectUrl;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "redirectUrl", $this->stdResult )) {
    				$this->redirectUrl = $this->stdResult->{"redirectUrl"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "redirectUrl", $this->arrayResult )) {
    			$this->redirectUrl = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>