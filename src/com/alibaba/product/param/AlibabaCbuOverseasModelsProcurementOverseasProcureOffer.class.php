<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCbuOverseasModelsProcurementOverseasProcureOffer extends SDKDomain {

       	
    private $productId;
    
        /**
    * @return 商品id
    */
        public function getProductId() {
        return $this->productId;
    }
    
    /**
     * 设置商品id     
     * @param Long $productId     
     * 参数示例：<pre>550453865151</pre>     
     * 此参数必填     */
    public function setProductId( $productId) {
        $this->productId = $productId;
    }
    
        	
    private $productImage;
    
        /**
    * @return 商品主图的相对路径，前缀需自己添加。大小220x220。
    */
        public function getProductImage() {
        return $this->productImage;
    }
    
    /**
     * 设置商品主图的相对路径，前缀需自己添加。大小220x220。     
     * @param String $productImage     
     * 参数示例：<pre>img/ibank/2017/090/722/4129227090_1519475281.220x220.jpg</pre>     
     * 此参数必填     */
    public function setProductImage( $productImage) {
        $this->productImage = $productImage;
    }
    
        	
    private $productPrice;
    
        /**
    * @return 商品价格
    */
        public function getProductPrice() {
        return $this->productPrice;
    }
    
    /**
     * 设置商品价格     
     * @param String $productPrice     
     * 参数示例：<pre>44.00</pre>     
     * 此参数必填     */
    public function setProductPrice( $productPrice) {
        $this->productPrice = $productPrice;
    }
    
        	
    private $productTitle;
    
        /**
    * @return 商品标题
    */
        public function getProductTitle() {
        return $this->productTitle;
    }
    
    /**
     * 设置商品标题     
     * @param String $productTitle     
     * 参数示例：<pre>2017新款夏季女装短袖连衣裙女夏装韩版修身显瘦淑女高腰a字裙子</pre>     
     * 此参数必填     */
    public function setProductTitle( $productTitle) {
        $this->productTitle = $productTitle;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "productId", $this->stdResult )) {
    				$this->productId = $this->stdResult->{"productId"};
    			}
    			    		    				    			    			if (array_key_exists ( "productImage", $this->stdResult )) {
    				$this->productImage = $this->stdResult->{"productImage"};
    			}
    			    		    				    			    			if (array_key_exists ( "productPrice", $this->stdResult )) {
    				$this->productPrice = $this->stdResult->{"productPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "productTitle", $this->stdResult )) {
    				$this->productTitle = $this->stdResult->{"productTitle"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "productId", $this->arrayResult )) {
    			$this->productId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "productImage", $this->arrayResult )) {
    			$this->productImage = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "productPrice", $this->arrayResult )) {
    			$this->productPrice = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "productTitle", $this->arrayResult )) {
    			$this->productTitle = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>