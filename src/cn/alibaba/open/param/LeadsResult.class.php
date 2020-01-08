<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class LeadsResult extends SDKDomain {

       	
    private $model;
    
        /**
    * @return 店铺名称
    */
        public function getModel() {
        return $this->model;
    }
    
    /**
     * 设置店铺名称     
     * @param String $model     
     * 参数示例：<pre>测试小店</pre>     
     * 此参数必填     */
    public function setModel( $model) {
        $this->model = $model;
    }
    
        	
    private $msgCode;
    
        /**
    * @return 报错码
    */
        public function getMsgCode() {
        return $this->msgCode;
    }
    
    /**
     * 设置报错码     
     * @param String $msgCode     
     * 参数示例：<pre>LST_ORDER_NOT_EXIST</pre>     
     * 此参数必填     */
    public function setMsgCode( $msgCode) {
        $this->msgCode = $msgCode;
    }
    
        	
    private $msgInfo;
    
        /**
    * @return 报错信息
    */
        public function getMsgInfo() {
        return $this->msgInfo;
    }
    
    /**
     * 设置报错信息     
     * @param String $msgInfo     
     * 参数示例：<pre>订单不存在</pre>     
     * 此参数必填     */
    public function setMsgInfo( $msgInfo) {
        $this->msgInfo = $msgInfo;
    }
    
        	
    private $success;
    
        /**
    * @return 是否处理正常
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置是否处理正常     
     * @param Boolean $success     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "model", $this->stdResult )) {
    				$this->model = $this->stdResult->{"model"};
    			}
    			    		    				    			    			if (array_key_exists ( "msgCode", $this->stdResult )) {
    				$this->msgCode = $this->stdResult->{"msgCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "msgInfo", $this->stdResult )) {
    				$this->msgInfo = $this->stdResult->{"msgInfo"};
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "model", $this->arrayResult )) {
    			$this->model = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "msgCode", $this->arrayResult )) {
    			$this->msgCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "msgInfo", $this->arrayResult )) {
    			$this->msgInfo = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>