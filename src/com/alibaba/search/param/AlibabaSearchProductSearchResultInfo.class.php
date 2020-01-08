<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaSearchCbuGeneralParam/AlibabaSearchProductBizGroupInfo.class.php');

class AlibabaSearchProductSearchResultInfo extends SDKDomain {

       	
    private $amountOnSale;
    
        /**
    * @return 可售数量
    */
        public function getAmountOnSale() {
        return $this->amountOnSale;
    }
    
    /**
     * 设置可售数量     
     * @param Integer $amountOnSale     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAmountOnSale( $amountOnSale) {
        $this->amountOnSale = $amountOnSale;
    }
    
        	
    private $bookedCount;
    
        /**
    * @return 商品售卖了多少笔(以订单为维度)
    */
        public function getBookedCount() {
        return $this->bookedCount;
    }
    
    /**
     * 设置商品售卖了多少笔(以订单为维度)     
     * @param Double $bookedCount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBookedCount( $bookedCount) {
        $this->bookedCount = $bookedCount;
    }
    
        	
    private $brandBackRate;
    
        /**
    * @return 品牌回头率
    */
        public function getBrandBackRate() {
        return $this->brandBackRate;
    }
    
    /**
     * 设置品牌回头率     
     * @param Double $brandBackRate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBrandBackRate( $brandBackRate) {
        $this->brandBackRate = $brandBackRate;
    }
    
        	
    private $brandBackRateMember;
    
        /**
    * @return 店铺回头率
    */
        public function getBrandBackRateMember() {
        return $this->brandBackRateMember;
    }
    
    /**
     * 设置店铺回头率     
     * @param Double $brandBackRateMember     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBrandBackRateMember( $brandBackRateMember) {
        $this->brandBackRateMember = $brandBackRateMember;
    }
    
        	
    private $categoryID;
    
        /**
    * @return 类目ID，标识商品所属类目
    */
        public function getCategoryID() {
        return $this->categoryID;
    }
    
    /**
     * 设置类目ID，标识商品所属类目     
     * @param Long $categoryID     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCategoryID( $categoryID) {
        $this->categoryID = $categoryID;
    }
    
        	
    private $city;
    
        /**
    * @return 商品发货城市
    */
        public function getCity() {
        return $this->city;
    }
    
    /**
     * 设置商品发货城市     
     * @param String $city     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCity( $city) {
        $this->city = $city;
    }
    
        	
    private $cityCode;
    
        /**
    * @return 商品发货城市码
    */
        public function getCityCode() {
        return $this->cityCode;
    }
    
    /**
     * 设置商品发货城市码     
     * @param String $cityCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCityCode( $cityCode) {
        $this->cityCode = $cityCode;
    }
    
        	
    private $discountedPrice;
    
        /**
    * @return 打折后价格，如果无折扣，折为空
    */
        public function getDiscountedPrice() {
        return $this->discountedPrice;
    }
    
    /**
     * 设置打折后价格，如果无折扣，折为空     
     * @param Double $discountedPrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDiscountedPrice( $discountedPrice) {
        $this->discountedPrice = $discountedPrice;
    }
    
        	
    private $minPurchaseQuantity;
    
        /**
    * @return 最小起批量
    */
        public function getMinPurchaseQuantity() {
        return $this->minPurchaseQuantity;
    }
    
    /**
     * 设置最小起批量     
     * @param Double $minPurchaseQuantity     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMinPurchaseQuantity( $minPurchaseQuantity) {
        $this->minPurchaseQuantity = $minPurchaseQuantity;
    }
    
        	
    private $picUrl;
    
        /**
    * @return 产品的图片地址
    */
        public function getPicUrl() {
        return $this->picUrl;
    }
    
    /**
     * 设置产品的图片地址     
     * @param String $picUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPicUrl( $picUrl) {
        $this->picUrl = $picUrl;
    }
    
        	
    private $price;
    
        /**
    * @return 商品价格
    */
        public function getPrice() {
        return $this->price;
    }
    
    /**
     * 设置商品价格     
     * @param Double $price     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPrice( $price) {
        $this->price = $price;
    }
    
        	
    private $productID;
    
        /**
    * @return 商品ID
    */
        public function getProductID() {
        return $this->productID;
    }
    
    /**
     * 设置商品ID     
     * @param Long $productID     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductID( $productID) {
        $this->productID = $productID;
    }
    
        	
    private $proviceCode;
    
        /**
    * @return 商品发货省份
    */
        public function getProviceCode() {
        return $this->proviceCode;
    }
    
    /**
     * 设置商品发货省份     
     * @param String $proviceCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProviceCode( $proviceCode) {
        $this->proviceCode = $proviceCode;
    }
    
        	
    private $province;
    
        /**
    * @return 商品发货省份码
    */
        public function getProvince() {
        return $this->province;
    }
    
    /**
     * 设置商品发货省份码     
     * @param String $province     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProvince( $province) {
        $this->province = $province;
    }
    
        	
    private $retailPrice;
    
        /**
    * @return 建议零售价
    */
        public function getRetailPrice() {
        return $this->retailPrice;
    }
    
    /**
     * 设置建议零售价     
     * @param Double $retailPrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRetailPrice( $retailPrice) {
        $this->retailPrice = $retailPrice;
    }
    
        	
    private $saleQuantity;
    
        /**
    * @return 该商品售卖了多少件(以商品单位为维度)
    */
        public function getSaleQuantity() {
        return $this->saleQuantity;
    }
    
    /**
     * 设置该商品售卖了多少件(以商品单位为维度)     
     * @param Double $saleQuantity     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSaleQuantity( $saleQuantity) {
        $this->saleQuantity = $saleQuantity;
    }
    
        	
    private $subject;
    
        /**
    * @return 商品标题
    */
        public function getSubject() {
        return $this->subject;
    }
    
    /**
     * 设置商品标题     
     * @param String $subject     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSubject( $subject) {
        $this->subject = $subject;
    }
    
        	
    private $unit;
    
        /**
    * @return 商品单位
    */
        public function getUnit() {
        return $this->unit;
    }
    
    /**
     * 设置商品单位     
     * @param String $unit     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setUnit( $unit) {
        $this->unit = $unit;
    }
    
        	
    private $bizGroupInfos;
    
        /**
    * @return 该产品支持的业务(比如微供，采购)
    */
        public function getBizGroupInfos() {
        return $this->bizGroupInfos;
    }
    
    /**
     * 设置该产品支持的业务(比如微供，采购)     
     * @param array include @see AlibabaSearchProductBizGroupInfo[] $bizGroupInfos     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBizGroupInfos(AlibabaSearchProductBizGroupInfo $bizGroupInfos) {
        $this->bizGroupInfos = $bizGroupInfos;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "amountOnSale", $this->stdResult )) {
    				$this->amountOnSale = $this->stdResult->{"amountOnSale"};
    			}
    			    		    				    			    			if (array_key_exists ( "bookedCount", $this->stdResult )) {
    				$this->bookedCount = $this->stdResult->{"bookedCount"};
    			}
    			    		    				    			    			if (array_key_exists ( "brandBackRate", $this->stdResult )) {
    				$this->brandBackRate = $this->stdResult->{"brandBackRate"};
    			}
    			    		    				    			    			if (array_key_exists ( "brandBackRateMember", $this->stdResult )) {
    				$this->brandBackRateMember = $this->stdResult->{"brandBackRateMember"};
    			}
    			    		    				    			    			if (array_key_exists ( "categoryID", $this->stdResult )) {
    				$this->categoryID = $this->stdResult->{"categoryID"};
    			}
    			    		    				    			    			if (array_key_exists ( "city", $this->stdResult )) {
    				$this->city = $this->stdResult->{"city"};
    			}
    			    		    				    			    			if (array_key_exists ( "cityCode", $this->stdResult )) {
    				$this->cityCode = $this->stdResult->{"cityCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "discountedPrice", $this->stdResult )) {
    				$this->discountedPrice = $this->stdResult->{"discountedPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "minPurchaseQuantity", $this->stdResult )) {
    				$this->minPurchaseQuantity = $this->stdResult->{"minPurchaseQuantity"};
    			}
    			    		    				    			    			if (array_key_exists ( "picUrl", $this->stdResult )) {
    				$this->picUrl = $this->stdResult->{"picUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "price", $this->stdResult )) {
    				$this->price = $this->stdResult->{"price"};
    			}
    			    		    				    			    			if (array_key_exists ( "productID", $this->stdResult )) {
    				$this->productID = $this->stdResult->{"productID"};
    			}
    			    		    				    			    			if (array_key_exists ( "proviceCode", $this->stdResult )) {
    				$this->proviceCode = $this->stdResult->{"proviceCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "province", $this->stdResult )) {
    				$this->province = $this->stdResult->{"province"};
    			}
    			    		    				    			    			if (array_key_exists ( "retailPrice", $this->stdResult )) {
    				$this->retailPrice = $this->stdResult->{"retailPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "saleQuantity", $this->stdResult )) {
    				$this->saleQuantity = $this->stdResult->{"saleQuantity"};
    			}
    			    		    				    			    			if (array_key_exists ( "subject", $this->stdResult )) {
    				$this->subject = $this->stdResult->{"subject"};
    			}
    			    		    				    			    			if (array_key_exists ( "unit", $this->stdResult )) {
    				$this->unit = $this->stdResult->{"unit"};
    			}
    			    		    				    			    			if (array_key_exists ( "bizGroupInfos", $this->stdResult )) {
    			$bizGroupInfosResult=$this->stdResult->{"bizGroupInfos"};
    				$object = json_decode ( json_encode ( $bizGroupInfosResult ), true );
					$this->bizGroupInfos = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaSearchProductBizGroupInfoResult=new AlibabaSearchProductBizGroupInfo();
						$AlibabaSearchProductBizGroupInfoResult->setArrayResult($arrayobject );
						$this->bizGroupInfos [$i] = $AlibabaSearchProductBizGroupInfoResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "amountOnSale", $this->arrayResult )) {
    			$this->amountOnSale = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "bookedCount", $this->arrayResult )) {
    			$this->bookedCount = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "brandBackRate", $this->arrayResult )) {
    			$this->brandBackRate = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "brandBackRateMember", $this->arrayResult )) {
    			$this->brandBackRateMember = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "categoryID", $this->arrayResult )) {
    			$this->categoryID = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "city", $this->arrayResult )) {
    			$this->city = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "cityCode", $this->arrayResult )) {
    			$this->cityCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "discountedPrice", $this->arrayResult )) {
    			$this->discountedPrice = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "minPurchaseQuantity", $this->arrayResult )) {
    			$this->minPurchaseQuantity = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "picUrl", $this->arrayResult )) {
    			$this->picUrl = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "price", $this->arrayResult )) {
    			$this->price = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "productID", $this->arrayResult )) {
    			$this->productID = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "proviceCode", $this->arrayResult )) {
    			$this->proviceCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "province", $this->arrayResult )) {
    			$this->province = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "retailPrice", $this->arrayResult )) {
    			$this->retailPrice = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "saleQuantity", $this->arrayResult )) {
    			$this->saleQuantity = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "subject", $this->arrayResult )) {
    			$this->subject = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "unit", $this->arrayResult )) {
    			$this->unit = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "bizGroupInfos", $this->arrayResult )) {
    		$bizGroupInfosResult=$arrayResult['${paramType.paramName}'];
    			$this->bizGroupInfos = new AlibabaSearchProductBizGroupInfo();
    			$this->bizGroupInfos->setStdResult ( $bizGroupInfosResult);
    		}
    		    	    		}
 
   
}
?>