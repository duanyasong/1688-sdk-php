<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaProductGetBySellerCargoNumberParam/AlibabaCommonMoney.class.php');

class AlibabaProductUnitPrice extends SDKDomain {

       	
    private $price;
    
        /**
    * @return 单个商品的值
    */
        public function getPrice() {
        return $this->price;
    }
    
    /**
     * 设置单个商品的值     
     * @param AlibabaCommonMoney $price     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPrice(AlibabaCommonMoney $price) {
        $this->price = $price;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "price", $this->stdResult )) {
    				$priceResult=$this->stdResult->{"price"};
    				$this->price = new AlibabaCommonMoney();
    				$this->price->setStdResult ( $priceResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "price", $this->arrayResult )) {
    		$priceResult=$arrayResult['${paramType.paramName}'];
    			    			$this->price = new AlibabaCommonMoney();
    			    			$this->price->setStdResult ( $priceResult);
    		}
    		    	    		}
 
   
}
?>