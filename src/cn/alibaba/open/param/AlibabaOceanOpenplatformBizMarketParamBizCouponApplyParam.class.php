<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaOceanOpenplatformBizMarketParamBizCouponApplyParam extends SDKDomain {

       	
    private $couponId;
    
        /**
    * @return 券ID
    */
        public function getCouponId() {
        return $this->couponId;
    }
    
    /**
     * 设置券ID     
     * @param Long $couponId     
     * 参数示例：<pre>1982666518</pre>     
     * 此参数必填     */
    public function setCouponId( $couponId) {
        $this->couponId = $couponId;
    }
    
        	
    private $couponType;
    
        /**
    * @return 券类型，0：店铺优惠券，1：商品优惠券，8：包邮券
    */
        public function getCouponType() {
        return $this->couponType;
    }
    
    /**
     * 设置券类型，0：店铺优惠券，1：商品优惠券，8：包邮券     
     * @param Integer $couponType     
     * 参数示例：<pre>18</pre>     
     * 此参数必填     */
    public function setCouponType( $couponType) {
        $this->couponType = $couponType;
    }
    
        	
    private $sellerId;
    
        /**
    * @return 卖家ID
    */
        public function getSellerId() {
        return $this->sellerId;
    }
    
    /**
     * 设置卖家ID     
     * @param Long $sellerId     
     * 参数示例：<pre>12323</pre>     
     * 此参数必填     */
    public function setSellerId( $sellerId) {
        $this->sellerId = $sellerId;
    }
    
        	
    private $uuid;
    
        /**
    * @return 卡券领取链接中暴露的券uuid
    */
        public function getUuid() {
        return $this->uuid;
    }
    
    /**
     * 设置卡券领取链接中暴露的券uuid     
     * @param String $uuid     
     * 参数示例：<pre>b05eb2190e0340bcb838bb131d4c9fbf</pre>     
     * 此参数必填     */
    public function setUuid( $uuid) {
        $this->uuid = $uuid;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "couponId", $this->stdResult )) {
    				$this->couponId = $this->stdResult->{"couponId"};
    			}
    			    		    				    			    			if (array_key_exists ( "couponType", $this->stdResult )) {
    				$this->couponType = $this->stdResult->{"couponType"};
    			}
    			    		    				    			    			if (array_key_exists ( "sellerId", $this->stdResult )) {
    				$this->sellerId = $this->stdResult->{"sellerId"};
    			}
    			    		    				    			    			if (array_key_exists ( "uuid", $this->stdResult )) {
    				$this->uuid = $this->stdResult->{"uuid"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "couponId", $this->arrayResult )) {
    			$this->couponId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "couponType", $this->arrayResult )) {
    			$this->couponType = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "sellerId", $this->arrayResult )) {
    			$this->sellerId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "uuid", $this->arrayResult )) {
    			$this->uuid = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>