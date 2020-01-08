<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaLstShiporderQueryParam/TmallLstorderClientOpenModelLstThirdPartMainShipOrderDTO.class.php');

class TmallLstorderClientCommonModelBaseResult extends SDKDomain {

       	
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
     * 参数示例：<pre>errorCode</pre>     
     * 此参数必填     */
    public function setErrorCode( $errorCode) {
        $this->errorCode = $errorCode;
    }
    
        	
    private $errorMessage;
    
        /**
    * @return 错误信息
    */
        public function getErrorMessage() {
        return $this->errorMessage;
    }
    
    /**
     * 设置错误信息     
     * @param String $errorMessage     
     * 参数示例：<pre>errorMessage</pre>     
     * 此参数必填     */
    public function setErrorMessage( $errorMessage) {
        $this->errorMessage = $errorMessage;
    }
    
        	
    private $model;
    
        /**
    * @return 发货单模型
    */
        public function getModel() {
        return $this->model;
    }
    
    /**
     * 设置发货单模型     
     * @param TmallLstorderClientOpenModelLstThirdPartMainShipOrderDTO $model     
     * 参数示例：<pre>shipOrder</pre>     
     * 此参数必填     */
    public function setModel(TmallLstorderClientOpenModelLstThirdPartMainShipOrderDTO $model) {
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
     * 参数示例：<pre>true</pre>     
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
    			    		    				    			    			if (array_key_exists ( "errorMessage", $this->stdResult )) {
    				$this->errorMessage = $this->stdResult->{"errorMessage"};
    			}
    			    		    				    			    			if (array_key_exists ( "model", $this->stdResult )) {
    				$modelResult=$this->stdResult->{"model"};
    				$this->model = new TmallLstorderClientOpenModelLstThirdPartMainShipOrderDTO();
    				$this->model->setStdResult ( $modelResult);
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
    		    	    			    		    			if (array_key_exists ( "errorMessage", $this->arrayResult )) {
    			$this->errorMessage = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "model", $this->arrayResult )) {
    		$modelResult=$arrayResult['${paramType.paramName}'];
    			    			$this->model = new TmallLstorderClientOpenModelLstThirdPartMainShipOrderDTO();
    			    			$this->model->setStdResult ( $modelResult);
    		}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>