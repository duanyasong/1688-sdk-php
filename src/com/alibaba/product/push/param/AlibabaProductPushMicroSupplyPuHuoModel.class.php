<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProductPushMicroSupplyPuHuoModel extends SDKDomain {

       	
    private $productId;
    
        /**
    * @return 1688商品ID
    */
        public function getProductId() {
        return $this->productId;
    }
    
    /**
     * 设置1688商品ID     
     * @param String $productId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductId( $productId) {
        $this->productId = $productId;
    }
    
        	
    private $shopName;
    
        /**
    * @return 下游店铺名称
    */
        public function getShopName() {
        return $this->shopName;
    }
    
    /**
     * 设置下游店铺名称     
     * @param String $shopName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setShopName( $shopName) {
        $this->shopName = $shopName;
    }
    
        	
    private $imgUrl;
    
        /**
    * @return 铺货首图链接
    */
        public function getImgUrl() {
        return $this->imgUrl;
    }
    
    /**
     * 设置铺货首图链接     
     * @param String $imgUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setImgUrl( $imgUrl) {
        $this->imgUrl = $imgUrl;
    }
    
        	
    private $productUrlInShop;
    
        /**
    * @return 商品在下游店铺的连接地址，方便用户从平台查看。
    */
        public function getProductUrlInShop() {
        return $this->productUrlInShop;
    }
    
    /**
     * 设置商品在下游店铺的连接地址，方便用户从平台查看。     
     * @param String $productUrlInShop     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductUrlInShop( $productUrlInShop) {
        $this->productUrlInShop = $productUrlInShop;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "productId", $this->stdResult )) {
    				$this->productId = $this->stdResult->{"productId"};
    			}
    			    		    				    			    			if (array_key_exists ( "shopName", $this->stdResult )) {
    				$this->shopName = $this->stdResult->{"shopName"};
    			}
    			    		    				    			    			if (array_key_exists ( "imgUrl", $this->stdResult )) {
    				$this->imgUrl = $this->stdResult->{"imgUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "productUrlInShop", $this->stdResult )) {
    				$this->productUrlInShop = $this->stdResult->{"productUrlInShop"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "productId", $this->arrayResult )) {
    			$this->productId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "shopName", $this->arrayResult )) {
    			$this->shopName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "imgUrl", $this->arrayResult )) {
    			$this->imgUrl = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "productUrlInShop", $this->arrayResult )) {
    			$this->productUrlInShop = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>