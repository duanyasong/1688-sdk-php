<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class SkuPriceInfo extends SDKDomain {

       	
    private $skuId;
    
        /**
    * @return SKUID，必须为存在的SKUID
    */
        public function getSkuId() {
        return $this->skuId;
    }
    
    /**
     * 设置SKUID，必须为存在的SKUID     
     * @param Long $skuId     
     * 参数示例：<pre>412311233</pre>     
     * 此参数必填     */
    public function setSkuId( $skuId) {
        $this->skuId = $skuId;
    }
    
        	
    private $price;
    
        /**
    * @return 价格，单位分
    */
        public function getPrice() {
        return $this->price;
    }
    
    /**
     * 设置价格，单位分     
     * @param Long $price     
     * 参数示例：<pre>100</pre>     
     * 此参数必填     */
    public function setPrice( $price) {
        $this->price = $price;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "skuId", $this->stdResult )) {
    				$this->skuId = $this->stdResult->{"skuId"};
    			}
    			    		    				    			    			if (array_key_exists ( "price", $this->stdResult )) {
    				$this->price = $this->stdResult->{"price"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "skuId", $this->arrayResult )) {
    			$this->skuId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "price", $this->arrayResult )) {
    			$this->price = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>