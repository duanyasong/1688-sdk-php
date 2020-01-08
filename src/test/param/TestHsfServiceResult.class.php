<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('TestHsfServiceParam/AlibabaOceanMetaDtoOpenApp.class.php');

class TestHsfServiceResult {

        	
    private $openApp;
    
        /**
    * @return App
    */
        public function getOpenApp() {
        return $this->openApp;
    }
    
    /**
     * 设置App     
     * @param AlibabaOceanMetaDtoOpenApp $openApp     
          
     * 此参数必填     */
    public function setOpenApp(AlibabaOceanMetaDtoOpenApp $openApp) {
        $this->openApp = $openApp;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "openApp", $this->stdResult )) {
    				$openAppResult=$this->stdResult->{"openApp"};
    				$this->openApp = new AlibabaOceanMetaDtoOpenApp();
    				$this->openApp->setStdResult ( $openAppResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "openApp", $this->arrayResult )) {
    		$openAppResult=$arrayResult['${paramType.paramName}'];
    			    			$this->openApp = new AlibabaOceanMetaDtoOpenApp();
    			    			$this->openApp->setStdResult ( $openAppResult);
    		}
    		    	    		}

}
?>