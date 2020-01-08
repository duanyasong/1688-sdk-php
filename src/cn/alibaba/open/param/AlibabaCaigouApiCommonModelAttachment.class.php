<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCaigouApiCommonModelAttachment extends SDKDomain {

       	
    private $id;
    
        /**
    * @return 附件主健id
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置附件主健id     
     * @param Long $id     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $displayName;
    
        /**
    * @return 展示名
    */
        public function getDisplayName() {
        return $this->displayName;
    }
    
    /**
     * 设置展示名     
     * @param String $displayName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDisplayName( $displayName) {
        $this->displayName = $displayName;
    }
    
        	
    private $fileUrl;
    
        /**
    * @return 下载链接
    */
        public function getFileUrl() {
        return $this->fileUrl;
    }
    
    /**
     * 设置下载链接     
     * @param String $fileUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFileUrl( $fileUrl) {
        $this->fileUrl = $fileUrl;
    }
    
        	
    private $attachmentType;
    
        /**
    * @return 附件类型
    */
        public function getAttachmentType() {
        return $this->attachmentType;
    }
    
    /**
     * 设置附件类型     
     * @param String $attachmentType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAttachmentType( $attachmentType) {
        $this->attachmentType = $attachmentType;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "displayName", $this->stdResult )) {
    				$this->displayName = $this->stdResult->{"displayName"};
    			}
    			    		    				    			    			if (array_key_exists ( "fileUrl", $this->stdResult )) {
    				$this->fileUrl = $this->stdResult->{"fileUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "attachmentType", $this->stdResult )) {
    				$this->attachmentType = $this->stdResult->{"attachmentType"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "displayName", $this->arrayResult )) {
    			$this->displayName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "fileUrl", $this->arrayResult )) {
    			$this->fileUrl = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "attachmentType", $this->arrayResult )) {
    			$this->attachmentType = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>