<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProcurementApiSettlementIntegrationParamSettleEntryModel extends SDKDomain {

       	
    private $modifyPrice;
    
        /**
    * @return 是否修改价格
    */
        public function getModifyPrice() {
        return $this->modifyPrice;
    }
    
    /**
     * 设置是否修改价格     
     * @param Boolean $modifyPrice     
     * 参数示例：<pre>false</pre>     
     * 此参数必填     */
    public function setModifyPrice( $modifyPrice) {
        $this->modifyPrice = $modifyPrice;
    }
    
        	
    private $receiveEntryId;
    
        /**
    * @return 子收货单id
    */
        public function getReceiveEntryId() {
        return $this->receiveEntryId;
    }
    
    /**
     * 设置子收货单id     
     * @param Long $receiveEntryId     
     * 参数示例：<pre>123</pre>     
     * 此参数必填     */
    public function setReceiveEntryId( $receiveEntryId) {
        $this->receiveEntryId = $receiveEntryId;
    }
    
        	
    private $rowAmount;
    
        /**
    * @return 行含税总价
    */
        public function getRowAmount() {
        return $this->rowAmount;
    }
    
    /**
     * 设置行含税总价     
     * @param BigDecimal $rowAmount     
     * 参数示例：<pre>123.45</pre>     
     * 此参数必填     */
    public function setRowAmount( $rowAmount) {
        $this->rowAmount = $rowAmount;
    }
    
        	
    private $settlePrice;
    
        /**
    * @return 结算价格
    */
        public function getSettlePrice() {
        return $this->settlePrice;
    }
    
    /**
     * 设置结算价格     
     * @param BigDecimal $settlePrice     
     * 参数示例：<pre>23.45</pre>     
     * 此参数必填     */
    public function setSettlePrice( $settlePrice) {
        $this->settlePrice = $settlePrice;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "modifyPrice", $this->stdResult )) {
    				$this->modifyPrice = $this->stdResult->{"modifyPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "receiveEntryId", $this->stdResult )) {
    				$this->receiveEntryId = $this->stdResult->{"receiveEntryId"};
    			}
    			    		    				    			    			if (array_key_exists ( "rowAmount", $this->stdResult )) {
    				$this->rowAmount = $this->stdResult->{"rowAmount"};
    			}
    			    		    				    			    			if (array_key_exists ( "settlePrice", $this->stdResult )) {
    				$this->settlePrice = $this->stdResult->{"settlePrice"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "modifyPrice", $this->arrayResult )) {
    			$this->modifyPrice = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "receiveEntryId", $this->arrayResult )) {
    			$this->receiveEntryId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "rowAmount", $this->arrayResult )) {
    			$this->rowAmount = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "settlePrice", $this->arrayResult )) {
    			$this->settlePrice = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>