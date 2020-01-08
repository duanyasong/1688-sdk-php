<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaProductGetBySellerCargoNumberParam/AlibabaCommonUrl.class.php');
include_once ('AlibabaProductGetBySellerCargoNumberParam/AlibabaCommonUrl.class.php');
include_once ('AlibabaProductGetBySellerCargoNumberParam/AlibabaProductUnitPrice.class.php');

class AlibabaProductItemDetail extends SDKDomain {

       	
    private $itemName;
    
        /**
    * @return 单品名字
    */
        public function getItemName() {
        return $this->itemName;
    }
    
    /**
     * 设置单品名字     
     * @param String $itemName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setItemName( $itemName) {
        $this->itemName = $itemName;
    }
    
        	
    private $unitOfMeasure;
    
        /**
    * @return 单位
    */
        public function getUnitOfMeasure() {
        return $this->unitOfMeasure;
    }
    
    /**
     * 设置单位     
     * @param String $unitOfMeasure     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setUnitOfMeasure( $unitOfMeasure) {
        $this->unitOfMeasure = $unitOfMeasure;
    }
    
        	
    private $imgUrl;
    
        /**
    * @return 单品URL地址
    */
        public function getImgUrl() {
        return $this->imgUrl;
    }
    
    /**
     * 设置单品URL地址     
     * @param array include @see AlibabaCommonUrl[] $imgUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setImgUrl(AlibabaCommonUrl $imgUrl) {
        $this->imgUrl = $imgUrl;
    }
    
        	
    private $url;
    
        /**
    * @return 单品URL地址
    */
        public function getUrl() {
        return $this->url;
    }
    
    /**
     * 设置单品URL地址     
     * @param AlibabaCommonUrl $url     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setUrl(AlibabaCommonUrl $url) {
        $this->url = $url;
    }
    
        	
    private $unitPrice;
    
        /**
    * @return 单品价格
    */
        public function getUnitPrice() {
        return $this->unitPrice;
    }
    
    /**
     * 设置单品价格     
     * @param AlibabaProductUnitPrice $unitPrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setUnitPrice(AlibabaProductUnitPrice $unitPrice) {
        $this->unitPrice = $unitPrice;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "itemName", $this->stdResult )) {
    				$this->itemName = $this->stdResult->{"itemName"};
    			}
    			    		    				    			    			if (array_key_exists ( "unitOfMeasure", $this->stdResult )) {
    				$this->unitOfMeasure = $this->stdResult->{"unitOfMeasure"};
    			}
    			    		    				    			    			if (array_key_exists ( "imgUrl", $this->stdResult )) {
    			$imgUrlResult=$this->stdResult->{"imgUrl"};
    				$object = json_decode ( json_encode ( $imgUrlResult ), true );
					$this->imgUrl = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaCommonUrlResult=new AlibabaCommonUrl();
						$AlibabaCommonUrlResult->setArrayResult($arrayobject );
						$this->imgUrl [$i] = $AlibabaCommonUrlResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "url", $this->stdResult )) {
    				$urlResult=$this->stdResult->{"url"};
    				$this->url = new AlibabaCommonUrl();
    				$this->url->setStdResult ( $urlResult);
    			}
    			    		    				    			    			if (array_key_exists ( "unitPrice", $this->stdResult )) {
    				$unitPriceResult=$this->stdResult->{"unitPrice"};
    				$this->unitPrice = new AlibabaProductUnitPrice();
    				$this->unitPrice->setStdResult ( $unitPriceResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "itemName", $this->arrayResult )) {
    			$this->itemName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "unitOfMeasure", $this->arrayResult )) {
    			$this->unitOfMeasure = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "imgUrl", $this->arrayResult )) {
    		$imgUrlResult=$arrayResult['${paramType.paramName}'];
    			$this->imgUrl = new AlibabaCommonUrl();
    			$this->imgUrl->setStdResult ( $imgUrlResult);
    		}
    		    	    			    		    		if (array_key_exists ( "url", $this->arrayResult )) {
    		$urlResult=$arrayResult['${paramType.paramName}'];
    			    			$this->url = new AlibabaCommonUrl();
    			    			$this->url->setStdResult ( $urlResult);
    		}
    		    	    			    		    		if (array_key_exists ( "unitPrice", $this->arrayResult )) {
    		$unitPriceResult=$arrayResult['${paramType.paramName}'];
    			    			$this->unitPrice = new AlibabaProductUnitPrice();
    			    			$this->unitPrice->setStdResult ( $unitPriceResult);
    		}
    		    	    		}
 
   
}
?>