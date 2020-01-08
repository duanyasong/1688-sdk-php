<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCouponOpenProductCoupon extends SDKDomain {

       	
    private $buyerId;
    
        /**
    * @return 买家的userId
    */
        public function getBuyerId() {
        return $this->buyerId;
    }
    
    /**
     * 设置买家的userId     
     * @param Long $buyerId     
     * 参数示例：<pre>4234234</pre>     
     * 此参数必填     */
    public function setBuyerId( $buyerId) {
        $this->buyerId = $buyerId;
    }
    
        	
    private $couponId;
    
        /**
    * @return 优惠券id
    */
        public function getCouponId() {
        return $this->couponId;
    }
    
    /**
     * 设置优惠券id     
     * @param Long $couponId     
     * 参数示例：<pre>435</pre>     
     * 此参数必填     */
    public function setCouponId( $couponId) {
        $this->couponId = $couponId;
    }
    
        	
    private $couponName;
    
        /**
    * @return 优惠券名称
    */
        public function getCouponName() {
        return $this->couponName;
    }
    
    /**
     * 设置优惠券名称     
     * @param String $couponName     
     * 参数示例：<pre>慢100减50券</pre>     
     * 此参数必填     */
    public function setCouponName( $couponName) {
        $this->couponName = $couponName;
    }
    
        	
    private $startFee;
    
        /**
    * @return 优惠券使用条件,满多少钱,单位为分
    */
        public function getStartFee() {
        return $this->startFee;
    }
    
    /**
     * 设置优惠券使用条件,满多少钱,单位为分     
     * @param Long $startFee     
     * 参数示例：<pre>1214</pre>     
     * 此参数必填     */
    public function setStartFee( $startFee) {
        $this->startFee = $startFee;
    }
    
        	
    private $discountFee;
    
        /**
    * @return 优惠券面额,单位为分
    */
        public function getDiscountFee() {
        return $this->discountFee;
    }
    
    /**
     * 设置优惠券面额,单位为分     
     * @param Long $discountFee     
     * 参数示例：<pre>1000</pre>     
     * 此参数必填     */
    public function setDiscountFee( $discountFee) {
        $this->discountFee = $discountFee;
    }
    
        	
    private $status;
    
        /**
    * @return 买家拥有的优惠券状态，1正常，0是过期，-1删除
    */
        public function getStatus() {
        return $this->status;
    }
    
    /**
     * 设置买家拥有的优惠券状态，1正常，0是过期，-1删除     
     * @param Integer $status     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
    }
    
        	
    private $source;
    
        /**
    * @return 优惠券来源,如果该优惠券是买家自己领取的，则source=3;如果是别人转赠给他的，则source=14;如果是卖家定向发放的，则source=2
    */
        public function getSource() {
        return $this->source;
    }
    
    /**
     * 设置优惠券来源,如果该优惠券是买家自己领取的，则source=3;如果是别人转赠给他的，则source=14;如果是卖家定向发放的，则source=2     
     * @param Integer $source     
     * 参数示例：<pre>3</pre>     
     * 此参数必填     */
    public function setSource( $source) {
        $this->source = $source;
    }
    
        	
    private $gmtCreate;
    
        /**
    * @return 创建时间
    */
        public function getGmtCreate() {
        return $this->gmtCreate;
    }
    
    /**
     * 设置创建时间     
     * @param Date $gmtCreate     
     * 参数示例：<pre>2018-01-10</pre>     
     * 此参数必填     */
    public function setGmtCreate( $gmtCreate) {
        $this->gmtCreate = $gmtCreate;
    }
    
        	
    private $couponType;
    
        /**
    * @return 优惠券类型
    */
        public function getCouponType() {
        return $this->couponType;
    }
    
    /**
     * 设置优惠券类型     
     * @param Integer $couponType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCouponType( $couponType) {
        $this->couponType = $couponType;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "buyerId", $this->stdResult )) {
    				$this->buyerId = $this->stdResult->{"buyerId"};
    			}
    			    		    				    			    			if (array_key_exists ( "couponId", $this->stdResult )) {
    				$this->couponId = $this->stdResult->{"couponId"};
    			}
    			    		    				    			    			if (array_key_exists ( "couponName", $this->stdResult )) {
    				$this->couponName = $this->stdResult->{"couponName"};
    			}
    			    		    				    			    			if (array_key_exists ( "startFee", $this->stdResult )) {
    				$this->startFee = $this->stdResult->{"startFee"};
    			}
    			    		    				    			    			if (array_key_exists ( "discountFee", $this->stdResult )) {
    				$this->discountFee = $this->stdResult->{"discountFee"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    				    			    			if (array_key_exists ( "source", $this->stdResult )) {
    				$this->source = $this->stdResult->{"source"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtCreate", $this->stdResult )) {
    				$this->gmtCreate = $this->stdResult->{"gmtCreate"};
    			}
    			    		    				    			    			if (array_key_exists ( "couponType", $this->stdResult )) {
    				$this->couponType = $this->stdResult->{"couponType"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "buyerId", $this->arrayResult )) {
    			$this->buyerId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "couponId", $this->arrayResult )) {
    			$this->couponId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "couponName", $this->arrayResult )) {
    			$this->couponName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "startFee", $this->arrayResult )) {
    			$this->startFee = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "discountFee", $this->arrayResult )) {
    			$this->discountFee = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "source", $this->arrayResult )) {
    			$this->source = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
    			$this->gmtCreate = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "couponType", $this->arrayResult )) {
    			$this->couponType = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>