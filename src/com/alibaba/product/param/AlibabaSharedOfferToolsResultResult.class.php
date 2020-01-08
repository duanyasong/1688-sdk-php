<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaSharedOfferToolsResultResult extends SDKDomain {

       	
    private $data;
    
        /**
    * @return 具体结果
    */
        public function getData() {
        return $this->data;
    }
    
    /**
     * 设置具体结果     
     * @param Long $data     
     * 参数示例：<pre>1001</pre>     
     * 此参数必填     */
    public function setData( $data) {
        $this->data = $data;
    }
    
        	
    private $msgCode;
    
        /**
    * @return 错误码
    */
        public function getMsgCode() {
        return $this->msgCode;
    }
    
    /**
     * 设置错误码     
     * @param String $msgCode     
     * 参数示例：<pre>ERR_001</pre>     
     * 此参数必填     */
    public function setMsgCode( $msgCode) {
        $this->msgCode = $msgCode;
    }
    
        	
    private $msgInfo;
    
        /**
    * @return 错误信息
    */
        public function getMsgInfo() {
        return $this->msgInfo;
    }
    
    /**
     * 设置错误信息     
     * @param String $msgInfo     
     * 参数示例：<pre>系统错误</pre>     
     * 此参数必填     */
    public function setMsgInfo( $msgInfo) {
        $this->msgInfo = $msgInfo;
    }
    
        	
    private $success;
    
        /**
    * @return 调用是否成功
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置调用是否成功     
     * @param Boolean $success     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "data", $this->stdResult )) {
    				$this->data = $this->stdResult->{"data"};
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
				    		    			if (array_key_exists ( "data", $this->arrayResult )) {
    			$this->data = $arrayResult['${paramType.paramName}'];
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