<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCaigouMallOpenInvoiceHeadParam extends SDKDomain {

       	
    private $title;
    
        /**
    * @return 发票抬头
    */
        public function getTitle() {
        return $this->title;
    }
    
    /**
     * 设置发票抬头     
     * @param String $title     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTitle( $title) {
        $this->title = $title;
    }
    
        	
    private $taxpayerIdentify;
    
        /**
    * @return 纳税人识别号
    */
        public function getTaxpayerIdentify() {
        return $this->taxpayerIdentify;
    }
    
    /**
     * 设置纳税人识别号     
     * @param String $taxpayerIdentify     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTaxpayerIdentify( $taxpayerIdentify) {
        $this->taxpayerIdentify = $taxpayerIdentify;
    }
    
        	
    private $streetAddress;
    
        /**
    * @return 街道地址信息（不包括包括省市）
    */
        public function getStreetAddress() {
        return $this->streetAddress;
    }
    
    /**
     * 设置街道地址信息（不包括包括省市）     
     * @param String $streetAddress     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStreetAddress( $streetAddress) {
        $this->streetAddress = $streetAddress;
    }
    
        	
    private $province;
    
        /**
    * @return 省
    */
        public function getProvince() {
        return $this->province;
    }
    
    /**
     * 设置省     
     * @param String $province     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProvince( $province) {
        $this->province = $province;
    }
    
        	
    private $city;
    
        /**
    * @return 市
    */
        public function getCity() {
        return $this->city;
    }
    
    /**
     * 设置市     
     * @param String $city     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCity( $city) {
        $this->city = $city;
    }
    
        	
    private $country;
    
        /**
    * @return 县、区
    */
        public function getCountry() {
        return $this->country;
    }
    
    /**
     * 设置县、区     
     * @param String $country     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCountry( $country) {
        $this->country = $country;
    }
    
        	
    private $phone;
    
        /**
    * @return 注册电话（固定）
    */
        public function getPhone() {
        return $this->phone;
    }
    
    /**
     * 设置注册电话（固定）     
     * @param String $phone     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPhone( $phone) {
        $this->phone = $phone;
    }
    
        	
    private $bank;
    
        /**
    * @return 开户银行
    */
        public function getBank() {
        return $this->bank;
    }
    
    /**
     * 设置开户银行     
     * @param String $bank     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBank( $bank) {
        $this->bank = $bank;
    }
    
        	
    private $accountId;
    
        /**
    * @return 银行账号
    */
        public function getAccountId() {
        return $this->accountId;
    }
    
    /**
     * 设置银行账号     
     * @param String $accountId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAccountId( $accountId) {
        $this->accountId = $accountId;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "title", $this->stdResult )) {
    				$this->title = $this->stdResult->{"title"};
    			}
    			    		    				    			    			if (array_key_exists ( "taxpayerIdentify", $this->stdResult )) {
    				$this->taxpayerIdentify = $this->stdResult->{"taxpayerIdentify"};
    			}
    			    		    				    			    			if (array_key_exists ( "streetAddress", $this->stdResult )) {
    				$this->streetAddress = $this->stdResult->{"streetAddress"};
    			}
    			    		    				    			    			if (array_key_exists ( "province", $this->stdResult )) {
    				$this->province = $this->stdResult->{"province"};
    			}
    			    		    				    			    			if (array_key_exists ( "city", $this->stdResult )) {
    				$this->city = $this->stdResult->{"city"};
    			}
    			    		    				    			    			if (array_key_exists ( "country", $this->stdResult )) {
    				$this->country = $this->stdResult->{"country"};
    			}
    			    		    				    			    			if (array_key_exists ( "phone", $this->stdResult )) {
    				$this->phone = $this->stdResult->{"phone"};
    			}
    			    		    				    			    			if (array_key_exists ( "bank", $this->stdResult )) {
    				$this->bank = $this->stdResult->{"bank"};
    			}
    			    		    				    			    			if (array_key_exists ( "accountId", $this->stdResult )) {
    				$this->accountId = $this->stdResult->{"accountId"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "title", $this->arrayResult )) {
    			$this->title = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "taxpayerIdentify", $this->arrayResult )) {
    			$this->taxpayerIdentify = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "streetAddress", $this->arrayResult )) {
    			$this->streetAddress = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "province", $this->arrayResult )) {
    			$this->province = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "city", $this->arrayResult )) {
    			$this->city = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "country", $this->arrayResult )) {
    			$this->country = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "phone", $this->arrayResult )) {
    			$this->phone = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "bank", $this->arrayResult )) {
    			$this->bank = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "accountId", $this->arrayResult )) {
    			$this->accountId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>