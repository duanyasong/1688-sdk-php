<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class TmallLstorderClientOpenParamLstThirdPartDetailShipOrderCreateDTO extends SDKDomain {

       	
    private $detailOrderId;
    
        /**
    * @return 订单明细id，可用来标注唯一的订单明细行。当其他无法唯一标识的时候，可用此字段。
    */
        public function getDetailOrderId() {
        return $this->detailOrderId;
    }
    
    /**
     * 设置订单明细id，可用来标注唯一的订单明细行。当其他无法唯一标识的时候，可用此字段。     
     * @param String $detailOrderId     
     * 参数示例：<pre>12211</pre>     
     * 此参数必填     */
    public function setDetailOrderId( $detailOrderId) {
        $this->detailOrderId = $detailOrderId;
    }
    
        	
    private $payFee;
    
        /**
    * @return 货品实付金额，单位为分
    */
        public function getPayFee() {
        return $this->payFee;
    }
    
    /**
     * 设置货品实付金额，单位为分     
     * @param Long $payFee     
     * 参数示例：<pre>30000</pre>     
     * 此参数必填     */
    public function setPayFee( $payFee) {
        $this->payFee = $payFee;
    }
    
        	
    private $saleQuantity;
    
        /**
    * @return 购买数量
    */
        public function getSaleQuantity() {
        return $this->saleQuantity;
    }
    
    /**
     * 设置购买数量     
     * @param Integer $saleQuantity     
     * 参数示例：<pre>10</pre>     
     * 此参数必填     */
    public function setSaleQuantity( $saleQuantity) {
        $this->saleQuantity = $saleQuantity;
    }
    
        	
    private $skuBrand;
    
        /**
    * @return 品牌
    */
        public function getSkuBrand() {
        return $this->skuBrand;
    }
    
    /**
     * 设置品牌     
     * @param String $skuBrand     
     * 参数示例：<pre>金龙鱼	</pre>     
     * 此参数必填     */
    public function setSkuBrand( $skuBrand) {
        $this->skuBrand = $skuBrand;
    }
    
        	
    private $skuCode;
    
        /**
    * @return 国标条码
    */
        public function getSkuCode() {
        return $this->skuCode;
    }
    
    /**
     * 设置国标条码     
     * @param String $skuCode     
     * 参数示例：<pre>6948195800460	</pre>     
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
    
        	
    private $skuPrice;
    
        /**
    * @return 单价，单位为分
    */
        public function getSkuPrice() {
        return $this->skuPrice;
    }
    
    /**
     * 设置单价，单位为分     
     * @param Long $skuPrice     
     * 参数示例：<pre>3000	</pre>     
     * 此参数必填     */
    public function setSkuPrice( $skuPrice) {
        $this->skuPrice = $skuPrice;
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
     * 参数示例：<pre>5L	</pre>     
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
     * 参数示例：<pre>瓶	</pre>     
     * 此参数必填     */
    public function setSkuUnit( $skuUnit) {
        $this->skuUnit = $skuUnit;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "detailOrderId", $this->stdResult )) {
    				$this->detailOrderId = $this->stdResult->{"detailOrderId"};
    			}
    			    		    				    			    			if (array_key_exists ( "payFee", $this->stdResult )) {
    				$this->payFee = $this->stdResult->{"payFee"};
    			}
    			    		    				    			    			if (array_key_exists ( "saleQuantity", $this->stdResult )) {
    				$this->saleQuantity = $this->stdResult->{"saleQuantity"};
    			}
    			    		    				    			    			if (array_key_exists ( "skuBrand", $this->stdResult )) {
    				$this->skuBrand = $this->stdResult->{"skuBrand"};
    			}
    			    		    				    			    			if (array_key_exists ( "skuCode", $this->stdResult )) {
    				$this->skuCode = $this->stdResult->{"skuCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "skuName", $this->stdResult )) {
    				$this->skuName = $this->stdResult->{"skuName"};
    			}
    			    		    				    			    			if (array_key_exists ( "skuPrice", $this->stdResult )) {
    				$this->skuPrice = $this->stdResult->{"skuPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "skuSpec", $this->stdResult )) {
    				$this->skuSpec = $this->stdResult->{"skuSpec"};
    			}
    			    		    				    			    			if (array_key_exists ( "skuUnit", $this->stdResult )) {
    				$this->skuUnit = $this->stdResult->{"skuUnit"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "detailOrderId", $this->arrayResult )) {
    			$this->detailOrderId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "payFee", $this->arrayResult )) {
    			$this->payFee = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "saleQuantity", $this->arrayResult )) {
    			$this->saleQuantity = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "skuBrand", $this->arrayResult )) {
    			$this->skuBrand = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "skuCode", $this->arrayResult )) {
    			$this->skuCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "skuName", $this->arrayResult )) {
    			$this->skuName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "skuPrice", $this->arrayResult )) {
    			$this->skuPrice = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "skuSpec", $this->arrayResult )) {
    			$this->skuSpec = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "skuUnit", $this->arrayResult )) {
    			$this->skuUnit = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>