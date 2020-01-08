<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProductProductThreeDimModel extends SDKDomain {

       	
    private $id;
    
        /**
    * @return 模型ID
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置模型ID     
     * @param String $id     
     * 参数示例：<pre>xxx-xx</pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $url;
    
        /**
    * @return 模型预览图URL
    */
        public function getUrl() {
        return $this->url;
    }
    
    /**
     * 设置模型预览图URL     
     * @param String $url     
     * 参数示例：<pre>https://hello.com/hello.jpg</pre>     
     * 此参数必填     */
    public function setUrl( $url) {
        $this->url = $url;
    }
    
        	
    private $createTime;
    
        /**
    * @return 模型上传时间
    */
        public function getCreateTime() {
        return $this->createTime;
    }
    
    /**
     * 设置模型上传时间     
     * @param Date $createTime     
     * 参数示例：<pre>20180901000000000+0800</pre>     
     * 此参数必填     */
    public function setCreateTime( $createTime) {
        $this->createTime = $createTime;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "url", $this->stdResult )) {
    				$this->url = $this->stdResult->{"url"};
    			}
    			    		    				    			    			if (array_key_exists ( "createTime", $this->stdResult )) {
    				$this->createTime = $this->stdResult->{"createTime"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "url", $this->arrayResult )) {
    			$this->url = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "createTime", $this->arrayResult )) {
    			$this->createTime = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>