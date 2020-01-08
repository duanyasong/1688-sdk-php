<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ComAlibabaCaigouApiCommonModelSupplyNoteItem extends SDKDomain {

       	
    private $subject;
    
        /**
    * @return 报价产品名称
    */
        public function getSubject() {
        return $this->subject;
    }
    
    /**
     * 设置报价产品名称     
     * @param String $subject     
     * 参数示例：<pre>连衣裙</pre>     
     * 此参数必填     */
    public function setSubject( $subject) {
        $this->subject = $subject;
    }
    
        	
    private $productId;
    
        /**
    * @return 采购产品库产品ID
    */
        public function getProductId() {
        return $this->productId;
    }
    
    /**
     * 设置采购产品库产品ID     
     * @param Long $productId     
     * 参数示例：<pre>12341234</pre>     
     * 此参数必填     */
    public function setProductId( $productId) {
        $this->productId = $productId;
    }
    
        	
    private $amount;
    
        /**
    * @return 计划采购量
    */
        public function getAmount() {
        return $this->amount;
    }
    
    /**
     * 设置计划采购量     
     * @param Integer $amount     
     * 参数示例：<pre>1000</pre>     
     * 此参数必填     */
    public function setAmount( $amount) {
        $this->amount = $amount;
    }
    
        	
    private $unit;
    
        /**
    * @return 货品单位
    */
        public function getUnit() {
        return $this->unit;
    }
    
    /**
     * 设置货品单位     
     * @param String $unit     
     * 参数示例：<pre>件</pre>     
     * 此参数必填     */
    public function setUnit( $unit) {
        $this->unit = $unit;
    }
    
        	
    private $price;
    
        /**
    * @return 货品单价（单位：分）
    */
        public function getPrice() {
        return $this->price;
    }
    
    /**
     * 设置货品单价（单位：分）     
     * @param Long $price     
     * 参数示例：<pre>10000</pre>     
     * 此参数必填     */
    public function setPrice( $price) {
        $this->price = $price;
    }
    
        	
    private $prItemId;
    
        /**
    * @return pr行标识
    */
        public function getPrItemId() {
        return $this->prItemId;
    }
    
    /**
     * 设置pr行标识     
     * @param String $prItemId     
     * 参数示例：<pre>123123</pre>     
     * 此参数必填     */
    public function setPrItemId( $prItemId) {
        $this->prItemId = $prItemId;
    }
    
        	
    private $id;
    
        /**
    * @return 报价项id
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置报价项id     
     * @param Long $id     
     * 参数示例：<pre>700234</pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $productCode;
    
        /**
    * @return 外部产品code
    */
        public function getProductCode() {
        return $this->productCode;
    }
    
    /**
     * 设置外部产品code     
     * @param String $productCode     
     * 参数示例：<pre>productCode</pre>     
     * 此参数必填     */
    public function setProductCode( $productCode) {
        $this->productCode = $productCode;
    }
    
        	
    private $taxRate;
    
        /**
    * @return 税率.税率,-2未知,-1不含税，其他含税,对应的值为对应的税率
    */
        public function getTaxRate() {
        return $this->taxRate;
    }
    
    /**
     * 设置税率.税率,-2未知,-1不含税，其他含税,对应的值为对应的税率     
     * @param String $taxRate     
     * 参数示例：<pre>13</pre>     
     * 此参数必填     */
    public function setTaxRate( $taxRate) {
        $this->taxRate = $taxRate;
    }
    
        	
    private $itemCount;
    
        /**
    * @return 计划采购量(最多支持三位小数)
    */
        public function getItemCount() {
        return $this->itemCount;
    }
    
    /**
     * 设置计划采购量(最多支持三位小数)     
     * @param Double $itemCount     
     * 参数示例：<pre>4.892</pre>     
     * 此参数必填     */
    public function setItemCount( $itemCount) {
        $this->itemCount = $itemCount;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "subject", $this->stdResult )) {
    				$this->subject = $this->stdResult->{"subject"};
    			}
    			    		    				    			    			if (array_key_exists ( "productId", $this->stdResult )) {
    				$this->productId = $this->stdResult->{"productId"};
    			}
    			    		    				    			    			if (array_key_exists ( "amount", $this->stdResult )) {
    				$this->amount = $this->stdResult->{"amount"};
    			}
    			    		    				    			    			if (array_key_exists ( "unit", $this->stdResult )) {
    				$this->unit = $this->stdResult->{"unit"};
    			}
    			    		    				    			    			if (array_key_exists ( "price", $this->stdResult )) {
    				$this->price = $this->stdResult->{"price"};
    			}
    			    		    				    			    			if (array_key_exists ( "prItemId", $this->stdResult )) {
    				$this->prItemId = $this->stdResult->{"prItemId"};
    			}
    			    		    				    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "productCode", $this->stdResult )) {
    				$this->productCode = $this->stdResult->{"productCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "taxRate", $this->stdResult )) {
    				$this->taxRate = $this->stdResult->{"taxRate"};
    			}
    			    		    				    			    			if (array_key_exists ( "itemCount", $this->stdResult )) {
    				$this->itemCount = $this->stdResult->{"itemCount"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "subject", $this->arrayResult )) {
    			$this->subject = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "productId", $this->arrayResult )) {
    			$this->productId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "amount", $this->arrayResult )) {
    			$this->amount = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "unit", $this->arrayResult )) {
    			$this->unit = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "price", $this->arrayResult )) {
    			$this->price = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "prItemId", $this->arrayResult )) {
    			$this->prItemId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "productCode", $this->arrayResult )) {
    			$this->productCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "taxRate", $this->arrayResult )) {
    			$this->taxRate = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "itemCount", $this->arrayResult )) {
    			$this->itemCount = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>