<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaGlobalAddressCountryListParam/AlibabaOceanOpenplatformBizLogisticsResultCainiaoCountryInfoModel.class.php');

class AlibabaGlobalAddressCountryListResult {

        	
    private $errorCode;
    
        /**
    * @return 错误码	
    */
        public function getErrorCode() {
        return $this->errorCode;
    }
    
    /**
     * 设置错误码	     
     * @param String $errorCode     
          
     * 此参数必填     */
    public function setErrorCode( $errorCode) {
        $this->errorCode = $errorCode;
    }
    
        	
    private $errorMsg;
    
        /**
    * @return 错误信息	
    */
        public function getErrorMsg() {
        return $this->errorMsg;
    }
    
    /**
     * 设置错误信息	     
     * @param String $errorMsg     
          
     * 此参数必填     */
    public function setErrorMsg( $errorMsg) {
        $this->errorMsg = $errorMsg;
    }
    
        	
    private $countryList;
    
        /**
    * @return 国家列表	
    */
        public function getCountryList() {
        return $this->countryList;
    }
    
    /**
     * 设置国家列表	     
     * @param array include @see AlibabaOceanOpenplatformBizLogisticsResultCainiaoCountryInfoModel[] $countryList     
          
     * 此参数必填     */
    public function setCountryList(AlibabaOceanOpenplatformBizLogisticsResultCainiaoCountryInfoModel $countryList) {
        $this->countryList = $countryList;
    }
    
        	
    private $success;
    
        /**
    * @return 是否成功	
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置是否成功	     
     * @param String $success     
          
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "errorCode", $this->stdResult )) {
    				$this->errorCode = $this->stdResult->{"errorCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorMsg", $this->stdResult )) {
    				$this->errorMsg = $this->stdResult->{"errorMsg"};
    			}
    			    		    				    			    			if (array_key_exists ( "countryList", $this->stdResult )) {
    			$countryListResult=$this->stdResult->{"countryList"};
    				$object = json_decode ( json_encode ( $countryListResult ), true );
					$this->countryList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaOceanOpenplatformBizLogisticsResultCainiaoCountryInfoModelResult=new AlibabaOceanOpenplatformBizLogisticsResultCainiaoCountryInfoModel();
						$AlibabaOceanOpenplatformBizLogisticsResultCainiaoCountryInfoModelResult->setArrayResult($arrayobject );
						$this->countryList [$i] = $AlibabaOceanOpenplatformBizLogisticsResultCainiaoCountryInfoModelResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "errorCode", $this->arrayResult )) {
    			$this->errorCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorMsg", $this->arrayResult )) {
    			$this->errorMsg = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "countryList", $this->arrayResult )) {
    		$countryListResult=$arrayResult['${paramType.paramName}'];
    			$this->countryList = new AlibabaOceanOpenplatformBizLogisticsResultCainiaoCountryInfoModel();
    			$this->countryList->setStdResult ( $countryListResult);
    		}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>