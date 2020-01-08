<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ComAlibabaCbuSearchwebOpenHsfResultIsvOfferModel extends SDKDomain {

       	
    private $id;
    
        /**
    * @return 商品的Id
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置商品的Id     
     * @param Long $id     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $subject;
    
        /**
    * @return 商品的标题
    */
        public function getSubject() {
        return $this->subject;
    }
    
    /**
     * 设置商品的标题     
     * @param String $subject     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSubject( $subject) {
        $this->subject = $subject;
    }
    
        	
    private $price;
    
        /**
    * @return 商品的价格
    */
        public function getPrice() {
        return $this->price;
    }
    
    /**
     * 设置商品的价格     
     * @param Double $price     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPrice( $price) {
        $this->price = $price;
    }
    
        	
    private $detailUrl;
    
        /**
    * @return 商品的详情地址（PC上商品详情页地址）
    */
        public function getDetailUrl() {
        return $this->detailUrl;
    }
    
    /**
     * 设置商品的详情地址（PC上商品详情页地址）     
     * @param String $detailUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDetailUrl( $detailUrl) {
        $this->detailUrl = $detailUrl;
    }
    
        	
    private $imageUrl;
    
        /**
    * @return 商品的图片地址（PC上的图片地址）
    */
        public function getImageUrl() {
        return $this->imageUrl;
    }
    
    /**
     * 设置商品的图片地址（PC上的图片地址）     
     * @param String $imageUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setImageUrl( $imageUrl) {
        $this->imageUrl = $imageUrl;
    }
    
        	
    private $memberId;
    
        /**
    * @return 会员id
    */
        public function getMemberId() {
        return $this->memberId;
    }
    
    /**
     * 设置会员id     
     * @param String $memberId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMemberId( $memberId) {
        $this->memberId = $memberId;
    }
    
        	
    private $companyName;
    
        /**
    * @return 公司名
    */
        public function getCompanyName() {
        return $this->companyName;
    }
    
    /**
     * 设置公司名     
     * @param String $companyName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCompanyName( $companyName) {
        $this->companyName = $companyName;
    }
    
        	
    private $bookedCount;
    
        /**
    * @return 90天成交笔数
    */
        public function getBookedCount() {
        return $this->bookedCount;
    }
    
    /**
     * 设置90天成交笔数     
     * @param Integer $bookedCount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBookedCount( $bookedCount) {
        $this->bookedCount = $bookedCount;
    }
    
        	
    private $gmtPost;
    
        /**
    * @return 发布时间
    */
        public function getGmtPost() {
        return $this->gmtPost;
    }
    
    /**
     * 设置发布时间     
     * @param String $gmtPost     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtPost( $gmtPost) {
        $this->gmtPost = $gmtPost;
    }
    
        	
    private $alg;
    
        /**
    * @return 打点信息
    */
        public function getAlg() {
        return $this->alg;
    }
    
    /**
     * 设置打点信息     
     * @param String $alg     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAlg( $alg) {
        $this->alg = $alg;
    }
    
        	
    private $imageUrlMobile;
    
        /**
    * @return 无线上的商品图片地址，返回值如http://XXX.jpg，无线前端可自行设置图片大小，如设置取270图片地址变为：http://XXX.jpg_270x270xzq60.jpg
    */
        public function getImageUrlMobile() {
        return $this->imageUrlMobile;
    }
    
    /**
     * 设置无线上的商品图片地址，返回值如http://XXX.jpg，无线前端可自行设置图片大小，如设置取270图片地址变为：http://XXX.jpg_270x270xzq60.jpg     
     * @param String $imageUrlMobile     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setImageUrlMobile( $imageUrlMobile) {
        $this->imageUrlMobile = $imageUrlMobile;
    }
    
        	
    private $agentPrice;
    
        /**
    * @return 代销价格
    */
        public function getAgentPrice() {
        return $this->agentPrice;
    }
    
    /**
     * 设置代销价格     
     * @param Double $agentPrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAgentPrice( $agentPrice) {
        $this->agentPrice = $agentPrice;
    }
    
        	
    private $quantitySumMonth;
    
        /**
    * @return 月销售件数
    */
        public function getQuantitySumMonth() {
        return $this->quantitySumMonth;
    }
    
    /**
     * 设置月销售件数     
     * @param Integer $quantitySumMonth     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setQuantitySumMonth( $quantitySumMonth) {
        $this->quantitySumMonth = $quantitySumMonth;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "subject", $this->stdResult )) {
    				$this->subject = $this->stdResult->{"subject"};
    			}
    			    		    				    			    			if (array_key_exists ( "price", $this->stdResult )) {
    				$this->price = $this->stdResult->{"price"};
    			}
    			    		    				    			    			if (array_key_exists ( "detailUrl", $this->stdResult )) {
    				$this->detailUrl = $this->stdResult->{"detailUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "imageUrl", $this->stdResult )) {
    				$this->imageUrl = $this->stdResult->{"imageUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "memberId", $this->stdResult )) {
    				$this->memberId = $this->stdResult->{"memberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "companyName", $this->stdResult )) {
    				$this->companyName = $this->stdResult->{"companyName"};
    			}
    			    		    				    			    			if (array_key_exists ( "bookedCount", $this->stdResult )) {
    				$this->bookedCount = $this->stdResult->{"bookedCount"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtPost", $this->stdResult )) {
    				$this->gmtPost = $this->stdResult->{"gmtPost"};
    			}
    			    		    				    			    			if (array_key_exists ( "alg", $this->stdResult )) {
    				$this->alg = $this->stdResult->{"alg"};
    			}
    			    		    				    			    			if (array_key_exists ( "imageUrlMobile", $this->stdResult )) {
    				$this->imageUrlMobile = $this->stdResult->{"imageUrlMobile"};
    			}
    			    		    				    			    			if (array_key_exists ( "agentPrice", $this->stdResult )) {
    				$this->agentPrice = $this->stdResult->{"agentPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "quantitySumMonth", $this->stdResult )) {
    				$this->quantitySumMonth = $this->stdResult->{"quantitySumMonth"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "subject", $this->arrayResult )) {
    			$this->subject = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "price", $this->arrayResult )) {
    			$this->price = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "detailUrl", $this->arrayResult )) {
    			$this->detailUrl = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "imageUrl", $this->arrayResult )) {
    			$this->imageUrl = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "memberId", $this->arrayResult )) {
    			$this->memberId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "companyName", $this->arrayResult )) {
    			$this->companyName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "bookedCount", $this->arrayResult )) {
    			$this->bookedCount = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtPost", $this->arrayResult )) {
    			$this->gmtPost = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "alg", $this->arrayResult )) {
    			$this->alg = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "imageUrlMobile", $this->arrayResult )) {
    			$this->imageUrlMobile = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "agentPrice", $this->arrayResult )) {
    			$this->agentPrice = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "quantitySumMonth", $this->arrayResult )) {
    			$this->quantitySumMonth = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>