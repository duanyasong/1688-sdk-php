<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class NativeLogisticsInfo extends SDKDomain {

       	
    private $address;
    
        /**
    * @return 详细地址
    */
        public function getAddress() {
        return $this->address;
    }
    
    /**
     * 设置详细地址     
     * @param String $address     
     * 参数示例：<pre>网商路699号</pre>     
     * 此参数必填     */
    public function setAddress( $address) {
        $this->address = $address;
    }
    
        	
    private $area;
    
        /**
    * @return 县，区
    */
        public function getArea() {
        return $this->area;
    }
    
    /**
     * 设置县，区     
     * @param String $area     
     * 参数示例：<pre>滨江区</pre>     
     * 此参数必填     */
    public function setArea( $area) {
        $this->area = $area;
    }
    
        	
    private $areaCode;
    
        /**
    * @return 省市区编码
    */
        public function getAreaCode() {
        return $this->areaCode;
    }
    
    /**
     * 设置省市区编码     
     * @param String $areaCode     
     * 参数示例：<pre>3100</pre>     
     * 此参数必填     */
    public function setAreaCode( $areaCode) {
        $this->areaCode = $areaCode;
    }
    
        	
    private $city;
    
        /**
    * @return 城市
    */
        public function getCity() {
        return $this->city;
    }
    
    /**
     * 设置城市     
     * @param String $city     
     * 参数示例：<pre>杭州市</pre>     
     * 此参数必填     */
    public function setCity( $city) {
        $this->city = $city;
    }
    
        	
    private $contactPerson;
    
        /**
    * @return 联系人姓名
    */
        public function getContactPerson() {
        return $this->contactPerson;
    }
    
    /**
     * 设置联系人姓名     
     * @param String $contactPerson     
     * 参数示例：<pre>姓名</pre>     
     * 此参数必填     */
    public function setContactPerson( $contactPerson) {
        $this->contactPerson = $contactPerson;
    }
    
        	
    private $mobile;
    
        /**
    * @return 手机
    */
        public function getMobile() {
        return $this->mobile;
    }
    
    /**
     * 设置手机     
     * @param String $mobile     
     * 参数示例：<pre>13344445555</pre>     
     * 此参数必填     */
    public function setMobile( $mobile) {
        $this->mobile = $mobile;
    }
    
        	
    private $province;
    
        /**
    * @return 省份
    */
        public function getProvince() {
        return $this->province;
    }
    
    /**
     * 设置省份     
     * @param String $province     
     * 参数示例：<pre>浙江省</pre>     
     * 此参数必填     */
    public function setProvince( $province) {
        $this->province = $province;
    }
    
        	
    private $zip;
    
        /**
    * @return 邮编
    */
        public function getZip() {
        return $this->zip;
    }
    
    /**
     * 设置邮编     
     * @param String $zip     
     * 参数示例：<pre>310008</pre>     
     * 此参数必填     */
    public function setZip( $zip) {
        $this->zip = $zip;
    }
    
        	
    private $townCode;
    
        /**
    * @return 镇，街道地址码
    */
        public function getTownCode() {
        return $this->townCode;
    }
    
    /**
     * 设置镇，街道地址码     
     * @param String $townCode     
     * 参数示例：<pre>310008001</pre>     
     * 此参数必填     */
    public function setTownCode( $townCode) {
        $this->townCode = $townCode;
    }
    
        	
    private $town;
    
        /**
    * @return 镇，街道
    */
        public function getTown() {
        return $this->town;
    }
    
    /**
     * 设置镇，街道     
     * @param String $town     
     * 参数示例：<pre>长河街道</pre>     
     * 此参数必填     */
    public function setTown( $town) {
        $this->town = $town;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "address", $this->stdResult )) {
    				$this->address = $this->stdResult->{"address"};
    			}
    			    		    				    			    			if (array_key_exists ( "area", $this->stdResult )) {
    				$this->area = $this->stdResult->{"area"};
    			}
    			    		    				    			    			if (array_key_exists ( "areaCode", $this->stdResult )) {
    				$this->areaCode = $this->stdResult->{"areaCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "city", $this->stdResult )) {
    				$this->city = $this->stdResult->{"city"};
    			}
    			    		    				    			    			if (array_key_exists ( "contactPerson", $this->stdResult )) {
    				$this->contactPerson = $this->stdResult->{"contactPerson"};
    			}
    			    		    				    			    			if (array_key_exists ( "mobile", $this->stdResult )) {
    				$this->mobile = $this->stdResult->{"mobile"};
    			}
    			    		    				    			    			if (array_key_exists ( "province", $this->stdResult )) {
    				$this->province = $this->stdResult->{"province"};
    			}
    			    		    				    			    			if (array_key_exists ( "zip", $this->stdResult )) {
    				$this->zip = $this->stdResult->{"zip"};
    			}
    			    		    				    			    			if (array_key_exists ( "townCode", $this->stdResult )) {
    				$this->townCode = $this->stdResult->{"townCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "town", $this->stdResult )) {
    				$this->town = $this->stdResult->{"town"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "address", $this->arrayResult )) {
    			$this->address = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "area", $this->arrayResult )) {
    			$this->area = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "areaCode", $this->arrayResult )) {
    			$this->areaCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "city", $this->arrayResult )) {
    			$this->city = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "contactPerson", $this->arrayResult )) {
    			$this->contactPerson = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "mobile", $this->arrayResult )) {
    			$this->mobile = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "province", $this->arrayResult )) {
    			$this->province = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "zip", $this->arrayResult )) {
    			$this->zip = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "townCode", $this->arrayResult )) {
    			$this->townCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "town", $this->arrayResult )) {
    			$this->town = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>