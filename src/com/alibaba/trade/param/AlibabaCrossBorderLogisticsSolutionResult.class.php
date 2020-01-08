<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaCrossBorderLogisticsSolutionParam/ComAlibabaOceanOpenplatformBizLogisticsResultCainiaoSolutionInfoModel.class.php');

class AlibabaCrossBorderLogisticsSolutionResult {

        	
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
    
        	
    private $solutionList;
    
        /**
    * @return 可使用的路线列表
    */
        public function getSolutionList() {
        return $this->solutionList;
    }
    
    /**
     * 设置可使用的路线列表     
     * @param array include @see ComAlibabaOceanOpenplatformBizLogisticsResultCainiaoSolutionInfoModel[] $solutionList     
          
     * 此参数必填     */
    public function setSolutionList(ComAlibabaOceanOpenplatformBizLogisticsResultCainiaoSolutionInfoModel $solutionList) {
        $this->solutionList = $solutionList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorCode", $this->stdResult )) {
    				$this->errorCode = $this->stdResult->{"errorCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorMsg", $this->stdResult )) {
    				$this->errorMsg = $this->stdResult->{"errorMsg"};
    			}
    			    		    				    			    			if (array_key_exists ( "solutionList", $this->stdResult )) {
    			$solutionListResult=$this->stdResult->{"solutionList"};
    				$object = json_decode ( json_encode ( $solutionListResult ), true );
					$this->solutionList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$ComAlibabaOceanOpenplatformBizLogisticsResultCainiaoSolutionInfoModelResult=new ComAlibabaOceanOpenplatformBizLogisticsResultCainiaoSolutionInfoModel();
						$ComAlibabaOceanOpenplatformBizLogisticsResultCainiaoSolutionInfoModelResult->setArrayResult($arrayobject );
						$this->solutionList [$i] = $ComAlibabaOceanOpenplatformBizLogisticsResultCainiaoSolutionInfoModelResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorCode", $this->arrayResult )) {
    			$this->errorCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorMsg", $this->arrayResult )) {
    			$this->errorMsg = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "solutionList", $this->arrayResult )) {
    		$solutionListResult=$arrayResult['${paramType.paramName}'];
    			$this->solutionList = new ComAlibabaOceanOpenplatformBizLogisticsResultCainiaoSolutionInfoModel();
    			$this->solutionList->setStdResult ( $solutionListResult);
    		}
    		    	    		}

}
?>