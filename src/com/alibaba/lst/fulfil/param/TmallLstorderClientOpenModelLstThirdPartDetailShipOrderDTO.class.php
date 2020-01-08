<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class TmallLstorderClientOpenModelLstThirdPartDetailShipOrderDTO extends SDKDomain {

       	
    private $detailOrderId;
    
        /**
    * @return 明细订单ID
    */
        public function getDetailOrderId() {
        return $this->detailOrderId;
    }
    
    /**
     * 设置明细订单ID     
     * @param String $detailOrderId     
     * 参数示例：<pre>121212</pre>     
     * 此参数必填     */
    public function setDetailOrderId( $detailOrderId) {
        $this->detailOrderId = $detailOrderId;
    }
    
        	
    private $loadQuantity;
    
        /**
    * @return 装车数量	
    */
        public function getLoadQuantity() {
        return $this->loadQuantity;
    }
    
    /**
     * 设置装车数量	     
     * @param Integer $loadQuantity     
     * 参数示例：<pre>10</pre>     
     * 此参数必填     */
    public function setLoadQuantity( $loadQuantity) {
        $this->loadQuantity = $loadQuantity;
    }
    
        	
    private $saleQuantity;
    
        /**
    * @return 销售数量	
    */
        public function getSaleQuantity() {
        return $this->saleQuantity;
    }
    
    /**
     * 设置销售数量	     
     * @param Integer $saleQuantity     
     * 参数示例：<pre>10</pre>     
     * 此参数必填     */
    public function setSaleQuantity( $saleQuantity) {
        $this->saleQuantity = $saleQuantity;
    }
    
        	
    private $signQuantity;
    
        /**
    * @return 签收数量	
    */
        public function getSignQuantity() {
        return $this->signQuantity;
    }
    
    /**
     * 设置签收数量	     
     * @param Integer $signQuantity     
     * 参数示例：<pre>10</pre>     
     * 此参数必填     */
    public function setSignQuantity( $signQuantity) {
        $this->signQuantity = $signQuantity;
    }
    
        	
    private $skuCode;
    
        /**
    * @return 条码
    */
        public function getSkuCode() {
        return $this->skuCode;
    }
    
    /**
     * 设置条码     
     * @param String $skuCode     
     * 参数示例：<pre>6948195800460</pre>     
     * 此参数必填     */
    public function setSkuCode( $skuCode) {
        $this->skuCode = $skuCode;
    }
    
        	
    private $skuName;
    
        /**
    * @return 商品名称	
    */
        public function getSkuName() {
        return $this->skuName;
    }
    
    /**
     * 设置商品名称	     
     * @param String $skuName     
     * 参数示例：<pre>金龙鱼优选一级大豆油5L	</pre>     
     * 此参数必填     */
    public function setSkuName( $skuName) {
        $this->skuName = $skuName;
    }
    
        	
    private $skuSpec;
    
        /**
    * @return 规格	
    */
        public function getSkuSpec() {
        return $this->skuSpec;
    }
    
    /**
     * 设置规格	     
     * @param String $skuSpec     
     * 参数示例：<pre>5L</pre>     
     * 此参数必填     */
    public function setSkuSpec( $skuSpec) {
        $this->skuSpec = $skuSpec;
    }
    
        	
    private $skuUnit;
    
        /**
    * @return 销售单位	
    */
        public function getSkuUnit() {
        return $this->skuUnit;
    }
    
    /**
     * 设置销售单位	     
     * @param String $skuUnit     
     * 参数示例：<pre>瓶</pre>     
     * 此参数必填     */
    public function setSkuUnit( $skuUnit) {
        $this->skuUnit = $skuUnit;
    }
    
        	
    private $status;
    
        /**
    * @return 子发货单状态	
    */
        public function getStatus() {
        return $this->status;
    }
    
    /**
     * 设置子发货单状态	     
     * @param String $status     
     * 参数示例：<pre>CANCEL</pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "detailOrderId", $this->stdResult )) {
    				$this->detailOrderId = $this->stdResult->{"detailOrderId"};
    			}
    			    		    				    			    			if (array_key_exists ( "loadQuantity", $this->stdResult )) {
    				$this->loadQuantity = $this->stdResult->{"loadQuantity"};
    			}
    			    		    				    			    			if (array_key_exists ( "saleQuantity", $this->stdResult )) {
    				$this->saleQuantity = $this->stdResult->{"saleQuantity"};
    			}
    			    		    				    			    			if (array_key_exists ( "signQuantity", $this->stdResult )) {
    				$this->signQuantity = $this->stdResult->{"signQuantity"};
    			}
    			    		    				    			    			if (array_key_exists ( "skuCode", $this->stdResult )) {
    				$this->skuCode = $this->stdResult->{"skuCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "skuName", $this->stdResult )) {
    				$this->skuName = $this->stdResult->{"skuName"};
    			}
    			    		    				    			    			if (array_key_exists ( "skuSpec", $this->stdResult )) {
    				$this->skuSpec = $this->stdResult->{"skuSpec"};
    			}
    			    		    				    			    			if (array_key_exists ( "skuUnit", $this->stdResult )) {
    				$this->skuUnit = $this->stdResult->{"skuUnit"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "detailOrderId", $this->arrayResult )) {
    			$this->detailOrderId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "loadQuantity", $this->arrayResult )) {
    			$this->loadQuantity = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "saleQuantity", $this->arrayResult )) {
    			$this->saleQuantity = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "signQuantity", $this->arrayResult )) {
    			$this->signQuantity = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "skuCode", $this->arrayResult )) {
    			$this->skuCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "skuName", $this->arrayResult )) {
    			$this->skuName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "skuSpec", $this->arrayResult )) {
    			$this->skuSpec = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "skuUnit", $this->arrayResult )) {
    			$this->skuUnit = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>