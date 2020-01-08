<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaProcureSearchParam/AlibabaCbuOverseasModelsProcurementOverseasProcureOffer.class.php');

class AlibabaProcureSearchResult {

        	
    private $model;
    
        /**
    * @return 商品摘要列表
    */
        public function getModel() {
        return $this->model;
    }
    
    /**
     * 设置商品摘要列表     
     * @param array include @see AlibabaCbuOverseasModelsProcurementOverseasProcureOffer[] $model     
          
     * 此参数必填     */
    public function setModel(AlibabaCbuOverseasModelsProcurementOverseasProcureOffer $model) {
        $this->model = $model;
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
     * @param Boolean $success     
          
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
        	
    private $errorMsg;
    
        /**
    * @return 错误描述
    */
        public function getErrorMsg() {
        return $this->errorMsg;
    }
    
    /**
     * 设置错误描述     
     * @param String $errorMsg     
          
     * 此参数必填     */
    public function setErrorMsg( $errorMsg) {
        $this->errorMsg = $errorMsg;
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
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "model", $this->stdResult )) {
    			$modelResult=$this->stdResult->{"model"};
    				$object = json_decode ( json_encode ( $modelResult ), true );
					$this->model = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaCbuOverseasModelsProcurementOverseasProcureOfferResult=new AlibabaCbuOverseasModelsProcurementOverseasProcureOffer();
						$AlibabaCbuOverseasModelsProcurementOverseasProcureOfferResult->setArrayResult($arrayobject );
						$this->model [$i] = $AlibabaCbuOverseasModelsProcurementOverseasProcureOfferResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorMsg", $this->stdResult )) {
    				$this->errorMsg = $this->stdResult->{"errorMsg"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorCode", $this->stdResult )) {
    				$this->errorCode = $this->stdResult->{"errorCode"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "model", $this->arrayResult )) {
    		$modelResult=$arrayResult['${paramType.paramName}'];
    			$this->model = new AlibabaCbuOverseasModelsProcurementOverseasProcureOffer();
    			$this->model->setStdResult ( $modelResult);
    		}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorMsg", $this->arrayResult )) {
    			$this->errorMsg = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorCode", $this->arrayResult )) {
    			$this->errorCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>