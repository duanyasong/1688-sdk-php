<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCpsOpenUnionShopDTO extends SDKDomain {

       	
    private $sellerId;
    
        /**
    * @return 卖家id
    */
        public function getSellerId() {
        return $this->sellerId;
    }
    
    /**
     * 设置卖家id     
     * @param Long $sellerId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSellerId( $sellerId) {
        $this->sellerId = $sellerId;
    }
    
        	
    private $loginId;
    
        /**
    * @return 商家loginId
    */
        public function getLoginId() {
        return $this->loginId;
    }
    
    /**
     * 设置商家loginId     
     * @param String $loginId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLoginId( $loginId) {
        $this->loginId = $loginId;
    }
    
        	
    private $companyName;
    
        /**
    * @return 店铺名称
    */
        public function getCompanyName() {
        return $this->companyName;
    }
    
    /**
     * 设置店铺名称     
     * @param String $companyName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCompanyName( $companyName) {
        $this->companyName = $companyName;
    }
    
        	
    private $tradeGrade;
    
        /**
    * @return 交易勋章
    */
        public function getTradeGrade() {
        return $this->tradeGrade;
    }
    
    /**
     * 设置交易勋章     
     * @param Double $tradeGrade     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTradeGrade( $tradeGrade) {
        $this->tradeGrade = $tradeGrade;
    }
    
        	
    private $ratio;
    
        /**
    * @return 平均佣金比例
    */
        public function getRatio() {
        return $this->ratio;
    }
    
    /**
     * 设置平均佣金比例     
     * @param Double $ratio     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRatio( $ratio) {
        $this->ratio = $ratio;
    }
    
        	
    private $productCnt;
    
        /**
    * @return 商品数量
    */
        public function getProductCnt() {
        return $this->productCnt;
    }
    
    /**
     * 设置商品数量     
     * @param Integer $productCnt     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductCnt( $productCnt) {
        $this->productCnt = $productCnt;
    }
    
        	
    private $tkCnt;
    
        /**
    * @return 30天推广量
    */
        public function getTkCnt() {
        return $this->tkCnt;
    }
    
    /**
     * 设置30天推广量     
     * @param Integer $tkCnt     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTkCnt( $tkCnt) {
        $this->tkCnt = $tkCnt;
    }
    
        	
    private $linkUrl;
    
        /**
    * @return 店铺首页
    */
        public function getLinkUrl() {
        return $this->linkUrl;
    }
    
    /**
     * 设置店铺首页     
     * @param String $linkUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLinkUrl( $linkUrl) {
        $this->linkUrl = $linkUrl;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "sellerId", $this->stdResult )) {
    				$this->sellerId = $this->stdResult->{"sellerId"};
    			}
    			    		    				    			    			if (array_key_exists ( "loginId", $this->stdResult )) {
    				$this->loginId = $this->stdResult->{"loginId"};
    			}
    			    		    				    			    			if (array_key_exists ( "companyName", $this->stdResult )) {
    				$this->companyName = $this->stdResult->{"companyName"};
    			}
    			    		    				    			    			if (array_key_exists ( "tradeGrade", $this->stdResult )) {
    				$this->tradeGrade = $this->stdResult->{"tradeGrade"};
    			}
    			    		    				    			    			if (array_key_exists ( "ratio", $this->stdResult )) {
    				$this->ratio = $this->stdResult->{"ratio"};
    			}
    			    		    				    			    			if (array_key_exists ( "productCnt", $this->stdResult )) {
    				$this->productCnt = $this->stdResult->{"productCnt"};
    			}
    			    		    				    			    			if (array_key_exists ( "tkCnt", $this->stdResult )) {
    				$this->tkCnt = $this->stdResult->{"tkCnt"};
    			}
    			    		    				    			    			if (array_key_exists ( "linkUrl", $this->stdResult )) {
    				$this->linkUrl = $this->stdResult->{"linkUrl"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "sellerId", $this->arrayResult )) {
    			$this->sellerId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "loginId", $this->arrayResult )) {
    			$this->loginId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "companyName", $this->arrayResult )) {
    			$this->companyName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "tradeGrade", $this->arrayResult )) {
    			$this->tradeGrade = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "ratio", $this->arrayResult )) {
    			$this->ratio = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "productCnt", $this->arrayResult )) {
    			$this->productCnt = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "tkCnt", $this->arrayResult )) {
    			$this->tkCnt = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "linkUrl", $this->arrayResult )) {
    			$this->linkUrl = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>