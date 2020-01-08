<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProductItemIDDefinition extends SDKDomain {

       	
    private $skuId;
    
        /**
    * @return skuId对应平台的skuID
    */
        public function getSkuId() {
        return $this->skuId;
    }
    
    /**
     * 设置skuId对应平台的skuID     
     * @param String $skuId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSkuId( $skuId) {
        $this->skuId = $skuId;
    }
    
        	
    private $spuId;
    
        /**
    * @return spuID, 对应平台的offerId或者productId
    */
        public function getSpuId() {
        return $this->spuId;
    }
    
    /**
     * 设置spuID, 对应平台的offerId或者productId     
     * @param String $spuId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSpuId( $spuId) {
        $this->spuId = $spuId;
    }
    
        	
    private $skuName;
    
        /**
    * @return skuId对应平台的名称
    */
        public function getSkuName() {
        return $this->skuName;
    }
    
    /**
     * 设置skuId对应平台的名称     
     * @param String $skuName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSkuName( $skuName) {
        $this->skuName = $skuName;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "skuId", $this->stdResult )) {
    				$this->skuId = $this->stdResult->{"skuId"};
    			}
    			    		    				    			    			if (array_key_exists ( "spuId", $this->stdResult )) {
    				$this->spuId = $this->stdResult->{"spuId"};
    			}
    			    		    				    			    			if (array_key_exists ( "skuName", $this->stdResult )) {
    				$this->skuName = $this->stdResult->{"skuName"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "skuId", $this->arrayResult )) {
    			$this->skuId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "spuId", $this->arrayResult )) {
    			$this->spuId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "skuName", $this->arrayResult )) {
    			$this->skuName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>