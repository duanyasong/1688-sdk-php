<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaLstPosTradeQueryParam/OrderBaseInfo.class.php');
include_once ('AlibabaLstPosTradeQueryParam/NativeLogisticsInfo.class.php');
include_once ('AlibabaLstPosTradeQueryParam/ProductItemInfo.class.php');
include_once ('AlibabaLstPosTradeQueryParam/TradeTermsInfo.class.php');
include_once ('AlibabaLstPosTradeQueryParam/KeyValuePair.class.php');

class TradeInfo extends SDKDomain {

       	
    private $baseInfo;
    
        /**
    * @return 订单基础信息
    */
        public function getBaseInfo() {
        return $this->baseInfo;
    }
    
    /**
     * 设置订单基础信息     
     * @param OrderBaseInfo $baseInfo     
     * 参数示例：<pre>{}</pre>     
     * 此参数必填     */
    public function setBaseInfo(OrderBaseInfo $baseInfo) {
        $this->baseInfo = $baseInfo;
    }
    
        	
    private $nativeLogistics;
    
        /**
    * @return 物流信息
    */
        public function getNativeLogistics() {
        return $this->nativeLogistics;
    }
    
    /**
     * 设置物流信息     
     * @param NativeLogisticsInfo $nativeLogistics     
     * 参数示例：<pre>{}</pre>     
     * 此参数必填     */
    public function setNativeLogistics(NativeLogisticsInfo $nativeLogistics) {
        $this->nativeLogistics = $nativeLogistics;
    }
    
        	
    private $productItems;
    
        /**
    * @return 子订单信息
    */
        public function getProductItems() {
        return $this->productItems;
    }
    
    /**
     * 设置子订单信息     
     * @param array include @see ProductItemInfo[] $productItems     
     * 参数示例：<pre>[]</pre>     
     * 此参数必填     */
    public function setProductItems(ProductItemInfo $productItems) {
        $this->productItems = $productItems;
    }
    
        	
    private $tradeTerms;
    
        /**
    * @return 交易条款信息
    */
        public function getTradeTerms() {
        return $this->tradeTerms;
    }
    
    /**
     * 设置交易条款信息     
     * @param array include @see TradeTermsInfo[] $tradeTerms     
     * 参数示例：<pre>[]</pre>     
     * 此参数必填     */
    public function setTradeTerms(TradeTermsInfo $tradeTerms) {
        $this->tradeTerms = $tradeTerms;
    }
    
        	
    private $extAttributes;
    
        /**
    * @return 扩展信息
    */
        public function getExtAttributes() {
        return $this->extAttributes;
    }
    
    /**
     * 设置扩展信息     
     * @param array include @see KeyValuePair[] $extAttributes     
     * 参数示例：<pre>[]</pre>     
     * 此参数必填     */
    public function setExtAttributes(KeyValuePair $extAttributes) {
        $this->extAttributes = $extAttributes;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "baseInfo", $this->stdResult )) {
    				$baseInfoResult=$this->stdResult->{"baseInfo"};
    				$this->baseInfo = new OrderBaseInfo();
    				$this->baseInfo->setStdResult ( $baseInfoResult);
    			}
    			    		    				    			    			if (array_key_exists ( "nativeLogistics", $this->stdResult )) {
    				$nativeLogisticsResult=$this->stdResult->{"nativeLogistics"};
    				$this->nativeLogistics = new NativeLogisticsInfo();
    				$this->nativeLogistics->setStdResult ( $nativeLogisticsResult);
    			}
    			    		    				    			    			if (array_key_exists ( "productItems", $this->stdResult )) {
    			$productItemsResult=$this->stdResult->{"productItems"};
    				$object = json_decode ( json_encode ( $productItemsResult ), true );
					$this->productItems = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$ProductItemInfoResult=new ProductItemInfo();
						$ProductItemInfoResult->setArrayResult($arrayobject );
						$this->productItems [$i] = $ProductItemInfoResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "tradeTerms", $this->stdResult )) {
    			$tradeTermsResult=$this->stdResult->{"tradeTerms"};
    				$object = json_decode ( json_encode ( $tradeTermsResult ), true );
					$this->tradeTerms = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$TradeTermsInfoResult=new TradeTermsInfo();
						$TradeTermsInfoResult->setArrayResult($arrayobject );
						$this->tradeTerms [$i] = $TradeTermsInfoResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "extAttributes", $this->stdResult )) {
    			$extAttributesResult=$this->stdResult->{"extAttributes"};
    				$object = json_decode ( json_encode ( $extAttributesResult ), true );
					$this->extAttributes = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$KeyValuePairResult=new KeyValuePair();
						$KeyValuePairResult->setArrayResult($arrayobject );
						$this->extAttributes [$i] = $KeyValuePairResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "baseInfo", $this->arrayResult )) {
    		$baseInfoResult=$arrayResult['${paramType.paramName}'];
    			    			$this->baseInfo = new OrderBaseInfo();
    			    			$this->baseInfo->setStdResult ( $baseInfoResult);
    		}
    		    	    			    		    		if (array_key_exists ( "nativeLogistics", $this->arrayResult )) {
    		$nativeLogisticsResult=$arrayResult['${paramType.paramName}'];
    			    			$this->nativeLogistics = new NativeLogisticsInfo();
    			    			$this->nativeLogistics->setStdResult ( $nativeLogisticsResult);
    		}
    		    	    			    		    		if (array_key_exists ( "productItems", $this->arrayResult )) {
    		$productItemsResult=$arrayResult['${paramType.paramName}'];
    			$this->productItems = new ProductItemInfo();
    			$this->productItems->setStdResult ( $productItemsResult);
    		}
    		    	    			    		    		if (array_key_exists ( "tradeTerms", $this->arrayResult )) {
    		$tradeTermsResult=$arrayResult['${paramType.paramName}'];
    			$this->tradeTerms = new TradeTermsInfo();
    			$this->tradeTerms->setStdResult ( $tradeTermsResult);
    		}
    		    	    			    		    		if (array_key_exists ( "extAttributes", $this->arrayResult )) {
    		$extAttributesResult=$arrayResult['${paramType.paramName}'];
    			$this->extAttributes = new KeyValuePair();
    			$this->extAttributes->setStdResult ( $extAttributesResult);
    		}
    		    	    		}
 
   
}
?>