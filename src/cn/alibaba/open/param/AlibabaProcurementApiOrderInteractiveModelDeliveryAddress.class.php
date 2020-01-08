<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProcurementApiOrderInteractiveModelDeliveryAddress extends SDKDomain {

       	
    private $address;
    
        /**
    * @return 收货地址
    */
        public function getAddress() {
        return $this->address;
    }
    
    /**
     * 设置收货地址     
     * @param String $address     
     * 参数示例：<pre>无</pre>     
     * 此参数必填     */
    public function setAddress( $address) {
        $this->address = $address;
    }
    
        	
    private $addressCode;
    
        /**
    * @return 区域编码
    */
        public function getAddressCode() {
        return $this->addressCode;
    }
    
    /**
     * 设置区域编码     
     * @param String $addressCode     
     * 参数示例：<pre>无</pre>     
     * 此参数必填     */
    public function setAddressCode( $addressCode) {
        $this->addressCode = $addressCode;
    }
    
        	
    private $addressCodeText;
    
        /**
    * @return 区域编码对应的文本（包括国家，省，城市）
    */
        public function getAddressCodeText() {
        return $this->addressCodeText;
    }
    
    /**
     * 设置区域编码对应的文本（包括国家，省，城市）     
     * @param String $addressCodeText     
     * 参数示例：<pre>无</pre>     
     * 此参数必填     */
    public function setAddressCodeText( $addressCodeText) {
        $this->addressCodeText = $addressCodeText;
    }
    
        	
    private $id;
    
        /**
    * @return 收货地址主键ID
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置收货地址主键ID     
     * @param Long $id     
     * 参数示例：<pre>无</pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $mobilePhone;
    
        /**
    * @return 手机
    */
        public function getMobilePhone() {
        return $this->mobilePhone;
    }
    
    /**
     * 设置手机     
     * @param String $mobilePhone     
     * 参数示例：<pre>1233333</pre>     
     * 此参数必填     */
    public function setMobilePhone( $mobilePhone) {
        $this->mobilePhone = $mobilePhone;
    }
    
        	
    private $phone;
    
        /**
    * @return 座机号
    */
        public function getPhone() {
        return $this->phone;
    }
    
    /**
     * 设置座机号     
     * @param String $phone     
     * 参数示例：<pre>0731-123123</pre>     
     * 此参数必填     */
    public function setPhone( $phone) {
        $this->phone = $phone;
    }
    
        	
    private $post;
    
        /**
    * @return 邮编
    */
        public function getPost() {
        return $this->post;
    }
    
    /**
     * 设置邮编     
     * @param String $post     
     * 参数示例：<pre>无</pre>     
     * 此参数必填     */
    public function setPost( $post) {
        $this->post = $post;
    }
    
        	
    private $receiverName;
    
        /**
    * @return 收货人姓名
    */
        public function getReceiverName() {
        return $this->receiverName;
    }
    
    /**
     * 设置收货人姓名     
     * @param String $receiverName     
     * 参数示例：<pre>无</pre>     
     * 此参数必填     */
    public function setReceiverName( $receiverName) {
        $this->receiverName = $receiverName;
    }
    
        	
    private $townCode;
    
        /**
    * @return  街道或镇code
    */
        public function getTownCode() {
        return $this->townCode;
    }
    
    /**
     * 设置 街道或镇code     
     * @param String $townCode     
     * 参数示例：<pre>无</pre>     
     * 此参数必填     */
    public function setTownCode( $townCode) {
        $this->townCode = $townCode;
    }
    
        	
    private $townName;
    
        /**
    * @return  街道或镇名称
    */
        public function getTownName() {
        return $this->townName;
    }
    
    /**
     * 设置 街道或镇名称     
     * @param String $townName     
     * 参数示例：<pre>无</pre>     
     * 此参数必填     */
    public function setTownName( $townName) {
        $this->townName = $townName;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "address", $this->stdResult )) {
    				$this->address = $this->stdResult->{"address"};
    			}
    			    		    				    			    			if (array_key_exists ( "addressCode", $this->stdResult )) {
    				$this->addressCode = $this->stdResult->{"addressCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "addressCodeText", $this->stdResult )) {
    				$this->addressCodeText = $this->stdResult->{"addressCodeText"};
    			}
    			    		    				    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "mobilePhone", $this->stdResult )) {
    				$this->mobilePhone = $this->stdResult->{"mobilePhone"};
    			}
    			    		    				    			    			if (array_key_exists ( "phone", $this->stdResult )) {
    				$this->phone = $this->stdResult->{"phone"};
    			}
    			    		    				    			    			if (array_key_exists ( "post", $this->stdResult )) {
    				$this->post = $this->stdResult->{"post"};
    			}
    			    		    				    			    			if (array_key_exists ( "receiverName", $this->stdResult )) {
    				$this->receiverName = $this->stdResult->{"receiverName"};
    			}
    			    		    				    			    			if (array_key_exists ( "townCode", $this->stdResult )) {
    				$this->townCode = $this->stdResult->{"townCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "townName", $this->stdResult )) {
    				$this->townName = $this->stdResult->{"townName"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "address", $this->arrayResult )) {
    			$this->address = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "addressCode", $this->arrayResult )) {
    			$this->addressCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "addressCodeText", $this->arrayResult )) {
    			$this->addressCodeText = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "mobilePhone", $this->arrayResult )) {
    			$this->mobilePhone = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "phone", $this->arrayResult )) {
    			$this->phone = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "post", $this->arrayResult )) {
    			$this->post = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "receiverName", $this->arrayResult )) {
    			$this->receiverName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "townCode", $this->arrayResult )) {
    			$this->townCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "townName", $this->arrayResult )) {
    			$this->townName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>