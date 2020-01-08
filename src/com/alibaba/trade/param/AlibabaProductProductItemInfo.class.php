<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaProductGetBySellerCargoNumberParam/AlibabaCommonUrl.class.php');
include_once ('AlibabaProductGetBySellerCargoNumberParam/AlibabaProductRelateRelationGroupInfo.class.php');
include_once ('AlibabaProductGetBySellerCargoNumberParam/AlibabaCommonUrl.class.php');
include_once ('AlibabaProductGetBySellerCargoNumberParam/AlibabaTradeItemIn.class.php');

class AlibabaProductProductItemInfo extends SDKDomain {

       	
    private $description;
    
        /**
    * @return 商品描述
    */
        public function getDescription() {
        return $this->description;
    }
    
    /**
     * 设置商品描述     
     * @param String $description     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDescription( $description) {
        $this->description = $description;
    }
    
        	
    private $name;
    
        /**
    * @return 商品名称
    */
        public function getName() {
        return $this->name;
    }
    
    /**
     * 设置商品名称     
     * @param String $name     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->name = $name;
    }
    
        	
    private $spuId;
    
        /**
    * @return 商品的ID
    */
        public function getSpuId() {
        return $this->spuId;
    }
    
    /**
     * 设置商品的ID     
     * @param String $spuId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSpuId( $spuId) {
        $this->spuId = $spuId;
    }
    
        	
    private $url;
    
        /**
    * @return 商品URL
    */
        public function getUrl() {
        return $this->url;
    }
    
    /**
     * 设置商品URL     
     * @param AlibabaCommonUrl $url     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setUrl(AlibabaCommonUrl $url) {
        $this->url = $url;
    }
    
        	
    private $relationGroupInfos;
    
        /**
    * @return 商品关联信息
    */
        public function getRelationGroupInfos() {
        return $this->relationGroupInfos;
    }
    
    /**
     * 设置商品关联信息     
     * @param AlibabaProductRelateRelationGroupInfo $relationGroupInfos     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRelationGroupInfos(AlibabaProductRelateRelationGroupInfo $relationGroupInfos) {
        $this->relationGroupInfos = $relationGroupInfos;
    }
    
        	
    private $imgUrls;
    
        /**
    * @return 图片地址
    */
        public function getImgUrls() {
        return $this->imgUrls;
    }
    
    /**
     * 设置图片地址     
     * @param array include @see AlibabaCommonUrl[] $imgUrls     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setImgUrls(AlibabaCommonUrl $imgUrls) {
        $this->imgUrls = $imgUrls;
    }
    
        	
    private $relatedItems;
    
        /**
    * @return 关联的单品信息
    */
        public function getRelatedItems() {
        return $this->relatedItems;
    }
    
    /**
     * 设置关联的单品信息     
     * @param array include @see AlibabaTradeItemIn[] $relatedItems     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRelatedItems(AlibabaTradeItemIn $relatedItems) {
        $this->relatedItems = $relatedItems;
    }
    
        	
    private $sellerId;
    
        /**
    * @return 供应商userId
    */
        public function getSellerId() {
        return $this->sellerId;
    }
    
    /**
     * 设置供应商userId     
     * @param String $sellerId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSellerId( $sellerId) {
        $this->sellerId = $sellerId;
    }
    
        	
    private $sellerMemberId;
    
        /**
    * @return 供应商memberId
    */
        public function getSellerMemberId() {
        return $this->sellerMemberId;
    }
    
    /**
     * 设置供应商memberId     
     * @param String $sellerMemberId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSellerMemberId( $sellerMemberId) {
        $this->sellerMemberId = $sellerMemberId;
    }
    
        	
    private $sellerLoginId;
    
        /**
    * @return 供应商旺旺Id
    */
        public function getSellerLoginId() {
        return $this->sellerLoginId;
    }
    
    /**
     * 设置供应商旺旺Id     
     * @param String $sellerLoginId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSellerLoginId( $sellerLoginId) {
        $this->sellerLoginId = $sellerLoginId;
    }
    
        	
    private $buyAlone;
    
        /**
    * @return 商品是否只能单独创建一个订单
    */
        public function getBuyAlone() {
        return $this->buyAlone;
    }
    
    /**
     * 设置商品是否只能单独创建一个订单     
     * @param Boolean $buyAlone     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyAlone( $buyAlone) {
        $this->buyAlone = $buyAlone;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "description", $this->stdResult )) {
    				$this->description = $this->stdResult->{"description"};
    			}
    			    		    				    			    			if (array_key_exists ( "name", $this->stdResult )) {
    				$this->name = $this->stdResult->{"name"};
    			}
    			    		    				    			    			if (array_key_exists ( "spuId", $this->stdResult )) {
    				$this->spuId = $this->stdResult->{"spuId"};
    			}
    			    		    				    			    			if (array_key_exists ( "url", $this->stdResult )) {
    				$urlResult=$this->stdResult->{"url"};
    				$this->url = new AlibabaCommonUrl();
    				$this->url->setStdResult ( $urlResult);
    			}
    			    		    				    			    			if (array_key_exists ( "relationGroupInfos", $this->stdResult )) {
    				$relationGroupInfosResult=$this->stdResult->{"relationGroupInfos"};
    				$this->relationGroupInfos = new AlibabaProductRelateRelationGroupInfo();
    				$this->relationGroupInfos->setStdResult ( $relationGroupInfosResult);
    			}
    			    		    				    			    			if (array_key_exists ( "imgUrls", $this->stdResult )) {
    			$imgUrlsResult=$this->stdResult->{"imgUrls"};
    				$object = json_decode ( json_encode ( $imgUrlsResult ), true );
					$this->imgUrls = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaCommonUrlResult=new AlibabaCommonUrl();
						$AlibabaCommonUrlResult->setArrayResult($arrayobject );
						$this->imgUrls [$i] = $AlibabaCommonUrlResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "relatedItems", $this->stdResult )) {
    			$relatedItemsResult=$this->stdResult->{"relatedItems"};
    				$object = json_decode ( json_encode ( $relatedItemsResult ), true );
					$this->relatedItems = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaTradeItemInResult=new AlibabaTradeItemIn();
						$AlibabaTradeItemInResult->setArrayResult($arrayobject );
						$this->relatedItems [$i] = $AlibabaTradeItemInResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "sellerId", $this->stdResult )) {
    				$this->sellerId = $this->stdResult->{"sellerId"};
    			}
    			    		    				    			    			if (array_key_exists ( "sellerMemberId", $this->stdResult )) {
    				$this->sellerMemberId = $this->stdResult->{"sellerMemberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "sellerLoginId", $this->stdResult )) {
    				$this->sellerLoginId = $this->stdResult->{"sellerLoginId"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyAlone", $this->stdResult )) {
    				$this->buyAlone = $this->stdResult->{"buyAlone"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "description", $this->arrayResult )) {
    			$this->description = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "name", $this->arrayResult )) {
    			$this->name = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "spuId", $this->arrayResult )) {
    			$this->spuId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "url", $this->arrayResult )) {
    		$urlResult=$arrayResult['${paramType.paramName}'];
    			    			$this->url = new AlibabaCommonUrl();
    			    			$this->url->setStdResult ( $urlResult);
    		}
    		    	    			    		    		if (array_key_exists ( "relationGroupInfos", $this->arrayResult )) {
    		$relationGroupInfosResult=$arrayResult['${paramType.paramName}'];
    			    			$this->relationGroupInfos = new AlibabaProductRelateRelationGroupInfo();
    			    			$this->relationGroupInfos->setStdResult ( $relationGroupInfosResult);
    		}
    		    	    			    		    		if (array_key_exists ( "imgUrls", $this->arrayResult )) {
    		$imgUrlsResult=$arrayResult['${paramType.paramName}'];
    			$this->imgUrls = new AlibabaCommonUrl();
    			$this->imgUrls->setStdResult ( $imgUrlsResult);
    		}
    		    	    			    		    		if (array_key_exists ( "relatedItems", $this->arrayResult )) {
    		$relatedItemsResult=$arrayResult['${paramType.paramName}'];
    			$this->relatedItems = new AlibabaTradeItemIn();
    			$this->relatedItems->setStdResult ( $relatedItemsResult);
    		}
    		    	    			    		    			if (array_key_exists ( "sellerId", $this->arrayResult )) {
    			$this->sellerId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "sellerMemberId", $this->arrayResult )) {
    			$this->sellerMemberId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "sellerLoginId", $this->arrayResult )) {
    			$this->sellerLoginId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyAlone", $this->arrayResult )) {
    			$this->buyAlone = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>