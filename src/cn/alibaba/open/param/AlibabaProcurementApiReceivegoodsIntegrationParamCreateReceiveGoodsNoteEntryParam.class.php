<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProcurementApiReceivegoodsIntegrationParamCreateReceiveGoodsNoteEntryParam extends SDKDomain {

       	
    private $entryId;
    
        /**
    * @return 物料ID，“send_goods_entry”就是发货子单id，否则就是采购子订单id
    */
        public function getEntryId() {
        return $this->entryId;
    }
    
    /**
     * 设置物料ID，“send_goods_entry”就是发货子单id，否则就是采购子订单id     
     * @param Long $entryId     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setEntryId( $entryId) {
        $this->entryId = $entryId;
    }
    
        	
    private $quantity;
    
        /**
    * @return 收货量
    */
        public function getQuantity() {
        return $this->quantity;
    }
    
    /**
     * 设置收货量     
     * @param BigDecimal $quantity     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setQuantity( $quantity) {
        $this->quantity = $quantity;
    }
    
        	
    private $storehouseCode;
    
        /**
    * @return 仓库编码
    */
        public function getStorehouseCode() {
        return $this->storehouseCode;
    }
    
    /**
     * 设置仓库编码     
     * @param String $storehouseCode     
     * 参数示例：<pre>s-f01</pre>     
     * 此参数必填     */
    public function setStorehouseCode( $storehouseCode) {
        $this->storehouseCode = $storehouseCode;
    }
    
        	
    private $storehouseName;
    
        /**
    * @return 仓库名
    */
        public function getStorehouseName() {
        return $this->storehouseName;
    }
    
    /**
     * 设置仓库名     
     * @param String $storehouseName     
     * 参数示例：<pre>城西仓库</pre>     
     * 此参数必填     */
    public function setStorehouseName( $storehouseName) {
        $this->storehouseName = $storehouseName;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "entryId", $this->stdResult )) {
    				$this->entryId = $this->stdResult->{"entryId"};
    			}
    			    		    				    			    			if (array_key_exists ( "quantity", $this->stdResult )) {
    				$this->quantity = $this->stdResult->{"quantity"};
    			}
    			    		    				    			    			if (array_key_exists ( "storehouseCode", $this->stdResult )) {
    				$this->storehouseCode = $this->stdResult->{"storehouseCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "storehouseName", $this->stdResult )) {
    				$this->storehouseName = $this->stdResult->{"storehouseName"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "entryId", $this->arrayResult )) {
    			$this->entryId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "quantity", $this->arrayResult )) {
    			$this->quantity = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "storehouseCode", $this->arrayResult )) {
    			$this->storehouseCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "storehouseName", $this->arrayResult )) {
    			$this->storehouseName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>