<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCaigouMallOpenReceiveAddressParam extends SDKDomain {

       	
    private $userName;
    
        /**
    * @return 收货人姓名
    */
        public function getUserName() {
        return $this->userName;
    }
    
    /**
     * 设置收货人姓名     
     * @param String $userName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setUserName( $userName) {
        $this->userName = $userName;
    }
    
        	
    private $phone;
    
        /**
    * @return 收货人固定电话
    */
        public function getPhone() {
        return $this->phone;
    }
    
    /**
     * 设置收货人固定电话     
     * @param String $phone     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPhone( $phone) {
        $this->phone = $phone;
    }
    
        	
    private $mobile;
    
        /**
    * @return 收货人手机
    */
        public function getMobile() {
        return $this->mobile;
    }
    
    /**
     * 设置收货人手机     
     * @param String $mobile     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMobile( $mobile) {
        $this->mobile = $mobile;
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
    
        	
    private $county;
    
        /**
    * @return 县、区
    */
        public function getCounty() {
        return $this->county;
    }
    
    /**
     * 设置县、区     
     * @param String $county     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCounty( $county) {
        $this->county = $county;
    }
    
        	
    private $street;
    
        /**
    * @return 街道地址
    */
        public function getStreet() {
        return $this->street;
    }
    
    /**
     * 设置街道地址     
     * @param String $street     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStreet( $street) {
        $this->street = $street;
    }
    
        	
    private $postCode;
    
        /**
    * @return 邮编
    */
        public function getPostCode() {
        return $this->postCode;
    }
    
    /**
     * 设置邮编     
     * @param String $postCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPostCode( $postCode) {
        $this->postCode = $postCode;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "userName", $this->stdResult )) {
    				$this->userName = $this->stdResult->{"userName"};
    			}
    			    		    				    			    			if (array_key_exists ( "phone", $this->stdResult )) {
    				$this->phone = $this->stdResult->{"phone"};
    			}
    			    		    				    			    			if (array_key_exists ( "mobile", $this->stdResult )) {
    				$this->mobile = $this->stdResult->{"mobile"};
    			}
    			    		    				    			    			if (array_key_exists ( "province", $this->stdResult )) {
    				$this->province = $this->stdResult->{"province"};
    			}
    			    		    				    			    			if (array_key_exists ( "city", $this->stdResult )) {
    				$this->city = $this->stdResult->{"city"};
    			}
    			    		    				    			    			if (array_key_exists ( "county", $this->stdResult )) {
    				$this->county = $this->stdResult->{"county"};
    			}
    			    		    				    			    			if (array_key_exists ( "street", $this->stdResult )) {
    				$this->street = $this->stdResult->{"street"};
    			}
    			    		    				    			    			if (array_key_exists ( "postCode", $this->stdResult )) {
    				$this->postCode = $this->stdResult->{"postCode"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "userName", $this->arrayResult )) {
    			$this->userName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "phone", $this->arrayResult )) {
    			$this->phone = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "mobile", $this->arrayResult )) {
    			$this->mobile = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "province", $this->arrayResult )) {
    			$this->province = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "city", $this->arrayResult )) {
    			$this->city = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "county", $this->arrayResult )) {
    			$this->county = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "street", $this->arrayResult )) {
    			$this->street = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "postCode", $this->arrayResult )) {
    			$this->postCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>