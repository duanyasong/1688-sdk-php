<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCaigouBizApiCooperModelOpenCreateRequisitionResponseModel extends SDKDomain {

       	
    private $erpReqItemNo;
    
        /**
    * @return 外部单行号
    */
        public function getErpReqItemNo() {
        return $this->erpReqItemNo;
    }
    
    /**
     * 设置外部单行号     
     * @param String $erpReqItemNo     
     * 参数示例：<pre>11</pre>     
     * 此参数必填     */
    public function setErpReqItemNo( $erpReqItemNo) {
        $this->erpReqItemNo = $erpReqItemNo;
    }
    
        	
    private $erpReqNo;
    
        /**
    * @return 外部单号
    */
        public function getErpReqNo() {
        return $this->erpReqNo;
    }
    
    /**
     * 设置外部单号     
     * @param String $erpReqNo     
     * 参数示例：<pre>11111</pre>     
     * 此参数必填     */
    public function setErpReqNo( $erpReqNo) {
        $this->erpReqNo = $erpReqNo;
    }
    
        	
    private $requisitionId;
    
        /**
    * @return 请购单id
    */
        public function getRequisitionId() {
        return $this->requisitionId;
    }
    
    /**
     * 设置请购单id     
     * @param Long $requisitionId     
     * 参数示例：<pre>11111</pre>     
     * 此参数必填     */
    public function setRequisitionId( $requisitionId) {
        $this->requisitionId = $requisitionId;
    }
    
        	
    private $requisitionItemId;
    
        /**
    * @return 请购单id
    */
        public function getRequisitionItemId() {
        return $this->requisitionItemId;
    }
    
    /**
     * 设置请购单id     
     * @param Long $requisitionItemId     
     * 参数示例：<pre>1111</pre>     
     * 此参数必填     */
    public function setRequisitionItemId( $requisitionItemId) {
        $this->requisitionItemId = $requisitionItemId;
    }
    
        	
    private $requisitionItemNo;
    
        /**
    * @return 请购单行序号
    */
        public function getRequisitionItemNo() {
        return $this->requisitionItemNo;
    }
    
    /**
     * 设置请购单行序号     
     * @param String $requisitionItemNo     
     * 参数示例：<pre>11</pre>     
     * 此参数必填     */
    public function setRequisitionItemNo( $requisitionItemNo) {
        $this->requisitionItemNo = $requisitionItemNo;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "erpReqItemNo", $this->stdResult )) {
    				$this->erpReqItemNo = $this->stdResult->{"erpReqItemNo"};
    			}
    			    		    				    			    			if (array_key_exists ( "erpReqNo", $this->stdResult )) {
    				$this->erpReqNo = $this->stdResult->{"erpReqNo"};
    			}
    			    		    				    			    			if (array_key_exists ( "requisitionId", $this->stdResult )) {
    				$this->requisitionId = $this->stdResult->{"requisitionId"};
    			}
    			    		    				    			    			if (array_key_exists ( "requisitionItemId", $this->stdResult )) {
    				$this->requisitionItemId = $this->stdResult->{"requisitionItemId"};
    			}
    			    		    				    			    			if (array_key_exists ( "requisitionItemNo", $this->stdResult )) {
    				$this->requisitionItemNo = $this->stdResult->{"requisitionItemNo"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "erpReqItemNo", $this->arrayResult )) {
    			$this->erpReqItemNo = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "erpReqNo", $this->arrayResult )) {
    			$this->erpReqNo = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "requisitionId", $this->arrayResult )) {
    			$this->requisitionId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "requisitionItemId", $this->arrayResult )) {
    			$this->requisitionItemId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "requisitionItemNo", $this->arrayResult )) {
    			$this->requisitionItemNo = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>