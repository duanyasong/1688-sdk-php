<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ComAlibabaCaigouApiCommonModelContactInfo extends SDKDomain {

       	
    private $email;
    
        /**
    * @return 邮箱
    */
        public function getEmail() {
        return $this->email;
    }
    
    /**
     * 设置邮箱     
     * @param String $email     
     * 参数示例：<pre>aaa@abc.com</pre>     
     * 此参数必填     */
    public function setEmail( $email) {
        $this->email = $email;
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
     * 参数示例：<pre>1398888888</pre>     
     * 此参数必填     */
    public function setMobile( $mobile) {
        $this->mobile = $mobile;
    }
    
        	
    private $phone;
    
        /**
    * @return 电话
    */
        public function getPhone() {
        return $this->phone;
    }
    
    /**
     * 设置电话     
     * @param String $phone     
     * 参数示例：<pre>0517-123456</pre>     
     * 此参数必填     */
    public function setPhone( $phone) {
        $this->phone = $phone;
    }
    
        	
    private $contact;
    
        /**
    * @return 联系人名称
    */
        public function getContact() {
        return $this->contact;
    }
    
    /**
     * 设置联系人名称     
     * @param String $contact     
     * 参数示例：<pre>张三</pre>     
     * 此参数必填     */
    public function setContact( $contact) {
        $this->contact = $contact;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "email", $this->stdResult )) {
    				$this->email = $this->stdResult->{"email"};
    			}
    			    		    				    			    			if (array_key_exists ( "mobile", $this->stdResult )) {
    				$this->mobile = $this->stdResult->{"mobile"};
    			}
    			    		    				    			    			if (array_key_exists ( "phone", $this->stdResult )) {
    				$this->phone = $this->stdResult->{"phone"};
    			}
    			    		    				    			    			if (array_key_exists ( "contact", $this->stdResult )) {
    				$this->contact = $this->stdResult->{"contact"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "email", $this->arrayResult )) {
    			$this->email = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "mobile", $this->arrayResult )) {
    			$this->mobile = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "phone", $this->arrayResult )) {
    			$this->phone = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "contact", $this->arrayResult )) {
    			$this->contact = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>