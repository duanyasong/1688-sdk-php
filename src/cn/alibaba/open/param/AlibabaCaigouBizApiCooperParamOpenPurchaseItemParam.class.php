<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCaigouBizApiCooperParamOpenPurchaseItemParam extends SDKDomain {

       	
    private $occQuantity;
    
        /**
    * @return 此行物料采购数量
    */
        public function getOccQuantity() {
        return $this->occQuantity;
    }
    
    /**
     * 设置此行物料采购数量     
     * @param String $occQuantity     
     * 参数示例：<pre>123.45</pre>     
     * 此参数必填     */
    public function setOccQuantity( $occQuantity) {
        $this->occQuantity = $occQuantity;
    }
    
        	
    private $purchaseId;
    
        /**
    * @return 招标单行项目Id
    */
        public function getPurchaseId() {
        return $this->purchaseId;
    }
    
    /**
     * 设置招标单行项目Id     
     * @param Long $purchaseId     
     * 参数示例：<pre>123</pre>     
     * 此参数必填     */
    public function setPurchaseId( $purchaseId) {
        $this->purchaseId = $purchaseId;
    }
    
        	
    private $purchaseRootId;
    
        /**
    * @return 招标单Id
    */
        public function getPurchaseRootId() {
        return $this->purchaseRootId;
    }
    
    /**
     * 设置招标单Id     
     * @param Long $purchaseRootId     
     * 参数示例：<pre>123</pre>     
     * 此参数必填     */
    public function setPurchaseRootId( $purchaseRootId) {
        $this->purchaseRootId = $purchaseRootId;
    }
    
        	
    private $requisitionItemId;
    
        /**
    * @return 请购行id
    */
        public function getRequisitionItemId() {
        return $this->requisitionItemId;
    }
    
    /**
     * 设置请购行id     
     * @param Long $requisitionItemId     
     * 参数示例：<pre>123</pre>     
     * 此参数必填     */
    public function setRequisitionItemId( $requisitionItemId) {
        $this->requisitionItemId = $requisitionItemId;
    }
    
        	
    private $erpPurchaseRootId;
    
        /**
    * @return 外部主单据Id
    */
        public function getErpPurchaseRootId() {
        return $this->erpPurchaseRootId;
    }
    
    /**
     * 设置外部主单据Id     
     * @param String $erpPurchaseRootId     
     * 参数示例：<pre>11111</pre>     
     * 此参数必填     */
    public function setErpPurchaseRootId( $erpPurchaseRootId) {
        $this->erpPurchaseRootId = $erpPurchaseRootId;
    }
    
        	
    private $erpPurchaseId;
    
        /**
    * @return 外部子单id
    */
        public function getErpPurchaseId() {
        return $this->erpPurchaseId;
    }
    
    /**
     * 设置外部子单id     
     * @param String $erpPurchaseId     
     * 参数示例：<pre>11111</pre>     
     * 此参数必填     */
    public function setErpPurchaseId( $erpPurchaseId) {
        $this->erpPurchaseId = $erpPurchaseId;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "occQuantity", $this->stdResult )) {
    				$this->occQuantity = $this->stdResult->{"occQuantity"};
    			}
    			    		    				    			    			if (array_key_exists ( "purchaseId", $this->stdResult )) {
    				$this->purchaseId = $this->stdResult->{"purchaseId"};
    			}
    			    		    				    			    			if (array_key_exists ( "purchaseRootId", $this->stdResult )) {
    				$this->purchaseRootId = $this->stdResult->{"purchaseRootId"};
    			}
    			    		    				    			    			if (array_key_exists ( "requisitionItemId", $this->stdResult )) {
    				$this->requisitionItemId = $this->stdResult->{"requisitionItemId"};
    			}
    			    		    				    			    			if (array_key_exists ( "erpPurchaseRootId", $this->stdResult )) {
    				$this->erpPurchaseRootId = $this->stdResult->{"erpPurchaseRootId"};
    			}
    			    		    				    			    			if (array_key_exists ( "erpPurchaseId", $this->stdResult )) {
    				$this->erpPurchaseId = $this->stdResult->{"erpPurchaseId"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "occQuantity", $this->arrayResult )) {
    			$this->occQuantity = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "purchaseId", $this->arrayResult )) {
    			$this->purchaseId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "purchaseRootId", $this->arrayResult )) {
    			$this->purchaseRootId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "requisitionItemId", $this->arrayResult )) {
    			$this->requisitionItemId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "erpPurchaseRootId", $this->arrayResult )) {
    			$this->erpPurchaseRootId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "erpPurchaseId", $this->arrayResult )) {
    			$this->erpPurchaseId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>