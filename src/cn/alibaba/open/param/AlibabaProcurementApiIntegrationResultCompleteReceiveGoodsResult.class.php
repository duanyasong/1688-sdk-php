<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProcurementApiIntegrationResultCompleteReceiveGoodsResult extends SDKDomain {

       	
    private $needSellerAccept;
    
        /**
    * @return 是否还需要卖家确认
    */
        public function getNeedSellerAccept() {
        return $this->needSellerAccept;
    }
    
    /**
     * 设置是否还需要卖家确认     
     * @param Boolean $needSellerAccept     
     * 参数示例：<pre>false</pre>     
     * 此参数必填     */
    public function setNeedSellerAccept( $needSellerAccept) {
        $this->needSellerAccept = $needSellerAccept;
    }
    
        	
    private $success;
    
        /**
    * @return 是否处理成功
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置是否处理成功     
     * @param Boolean $success     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
        	
    private $waitAcceptReceiveNote;
    
        /**
    * @return 待卖家确认的收货单数量
    */
        public function getWaitAcceptReceiveNote() {
        return $this->waitAcceptReceiveNote;
    }
    
    /**
     * 设置待卖家确认的收货单数量     
     * @param Integer $waitAcceptReceiveNote     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setWaitAcceptReceiveNote( $waitAcceptReceiveNote) {
        $this->waitAcceptReceiveNote = $waitAcceptReceiveNote;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "needSellerAccept", $this->stdResult )) {
    				$this->needSellerAccept = $this->stdResult->{"needSellerAccept"};
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    				    			    			if (array_key_exists ( "waitAcceptReceiveNote", $this->stdResult )) {
    				$this->waitAcceptReceiveNote = $this->stdResult->{"waitAcceptReceiveNote"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "needSellerAccept", $this->arrayResult )) {
    			$this->needSellerAccept = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "waitAcceptReceiveNote", $this->arrayResult )) {
    			$this->waitAcceptReceiveNote = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>