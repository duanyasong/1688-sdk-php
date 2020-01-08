<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ComAlibabaCaigouApiCommonModelAttachment extends SDKDomain {

       	
    private $size;
    
        /**
    * @return 附件大小
    */
        public function getSize() {
        return $this->size;
    }
    
    /**
     * 设置附件大小     
     * @param String $size     
     * 参数示例：<pre>760</pre>     
     * 此参数必填     */
    public function setSize( $size) {
        $this->size = $size;
    }
    
        	
    private $displayName;
    
        /**
    * @return 附件名
    */
        public function getDisplayName() {
        return $this->displayName;
    }
    
    /**
     * 设置附件名     
     * @param String $displayName     
     * 参数示例：<pre>Penguins.jpg</pre>     
     * 此参数必填     */
    public function setDisplayName( $displayName) {
        $this->displayName = $displayName;
    }
    
        	
    private $postfix;
    
        /**
    * @return 后缀名
    */
        public function getPostfix() {
        return $this->postfix;
    }
    
    /**
     * 设置后缀名     
     * @param String $postfix     
     * 参数示例：<pre>jpg</pre>     
     * 此参数必填     */
    public function setPostfix( $postfix) {
        $this->postfix = $postfix;
    }
    
        	
    private $fileUrl;
    
        /**
    * @return 文件下载地址
    */
        public function getFileUrl() {
        return $this->fileUrl;
    }
    
    /**
     * 设置文件下载地址     
     * @param String $fileUrl     
     * 参数示例：<pre>http://down.1688.com/d/wc4BABFr49Xl24FTc2KAcyWNR/W1Vk7dUjrzdok/ajfzO9YANw==</pre>     
     * 此参数必填     */
    public function setFileUrl( $fileUrl) {
        $this->fileUrl = $fileUrl;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "size", $this->stdResult )) {
    				$this->size = $this->stdResult->{"size"};
    			}
    			    		    				    			    			if (array_key_exists ( "displayName", $this->stdResult )) {
    				$this->displayName = $this->stdResult->{"displayName"};
    			}
    			    		    				    			    			if (array_key_exists ( "postfix", $this->stdResult )) {
    				$this->postfix = $this->stdResult->{"postfix"};
    			}
    			    		    				    			    			if (array_key_exists ( "fileUrl", $this->stdResult )) {
    				$this->fileUrl = $this->stdResult->{"fileUrl"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "size", $this->arrayResult )) {
    			$this->size = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "displayName", $this->arrayResult )) {
    			$this->displayName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "postfix", $this->arrayResult )) {
    			$this->postfix = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "fileUrl", $this->arrayResult )) {
    			$this->fileUrl = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>