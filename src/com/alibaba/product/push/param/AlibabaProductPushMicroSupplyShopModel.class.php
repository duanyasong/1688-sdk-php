<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProductPushMicroSupplyShopModel extends SDKDomain {

       	
    private $partnerId;
    
        /**
    * @return 合作伙伴id,比如APPKEY
    */
        public function getPartnerId() {
        return $this->partnerId;
    }
    
    /**
     * 设置合作伙伴id,比如APPKEY     
     * @param String $partnerId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPartnerId( $partnerId) {
        $this->partnerId = $partnerId;
    }
    
        	
    private $shopName;
    
        /**
    * @return 小店名称
    */
        public function getShopName() {
        return $this->shopName;
    }
    
    /**
     * 设置小店名称     
     * @param String $shopName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setShopName( $shopName) {
        $this->shopName = $shopName;
    }
    
        	
    private $shopDesc;
    
        /**
    * @return 小店描述
    */
        public function getShopDesc() {
        return $this->shopDesc;
    }
    
    /**
     * 设置小店描述     
     * @param String $shopDesc     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setShopDesc( $shopDesc) {
        $this->shopDesc = $shopDesc;
    }
    
        	
    private $authStart;
    
        /**
    * @return 授权开始时间
    */
        public function getAuthStart() {
        return $this->authStart;
    }
    
    /**
     * 设置授权开始时间     
     * @param Date $authStart     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAuthStart( $authStart) {
        $this->authStart = $authStart;
    }
    
        	
    private $authEnd;
    
        /**
    * @return 授权结束时间
    */
        public function getAuthEnd() {
        return $this->authEnd;
    }
    
    /**
     * 设置授权结束时间     
     * @param Date $authEnd     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAuthEnd( $authEnd) {
        $this->authEnd = $authEnd;
    }
    
        	
    private $authState;
    
        /**
    * @return 授权状态
    */
        public function getAuthState() {
        return $this->authState;
    }
    
    /**
     * 设置授权状态     
     * @param String $authState     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAuthState( $authState) {
        $this->authState = $authState;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "partnerId", $this->stdResult )) {
    				$this->partnerId = $this->stdResult->{"partnerId"};
    			}
    			    		    				    			    			if (array_key_exists ( "shopName", $this->stdResult )) {
    				$this->shopName = $this->stdResult->{"shopName"};
    			}
    			    		    				    			    			if (array_key_exists ( "shopDesc", $this->stdResult )) {
    				$this->shopDesc = $this->stdResult->{"shopDesc"};
    			}
    			    		    				    			    			if (array_key_exists ( "authStart", $this->stdResult )) {
    				$this->authStart = $this->stdResult->{"authStart"};
    			}
    			    		    				    			    			if (array_key_exists ( "authEnd", $this->stdResult )) {
    				$this->authEnd = $this->stdResult->{"authEnd"};
    			}
    			    		    				    			    			if (array_key_exists ( "authState", $this->stdResult )) {
    				$this->authState = $this->stdResult->{"authState"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "partnerId", $this->arrayResult )) {
    			$this->partnerId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "shopName", $this->arrayResult )) {
    			$this->shopName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "shopDesc", $this->arrayResult )) {
    			$this->shopDesc = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "authStart", $this->arrayResult )) {
    			$this->authStart = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "authEnd", $this->arrayResult )) {
    			$this->authEnd = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "authState", $this->arrayResult )) {
    			$this->authState = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>