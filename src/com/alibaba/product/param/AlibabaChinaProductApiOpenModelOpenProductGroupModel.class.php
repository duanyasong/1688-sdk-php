<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaChinaProductApiOpenModelOpenProductGroupModel extends SDKDomain {

       	
    private $brandId;
    
        /**
    * @return 1688品牌ID
    */
        public function getBrandId() {
        return $this->brandId;
    }
    
    /**
     * 设置1688品牌ID     
     * @param String $brandId     
     * 参数示例：<pre>23506</pre>     
     * 此参数必填     */
    public function setBrandId( $brandId) {
        $this->brandId = $brandId;
    }
    
        	
    private $brandName;
    
        /**
    * @return 1688品牌名称
    */
        public function getBrandName() {
        return $this->brandName;
    }
    
    /**
     * 设置1688品牌名称     
     * @param String $brandName     
     * 参数示例：<pre>测试品牌</pre>     
     * 此参数必填     */
    public function setBrandName( $brandName) {
        $this->brandName = $brandName;
    }
    
        	
    private $detail;
    
        /**
    * @return 产品组详情
    */
        public function getDetail() {
        return $this->detail;
    }
    
    /**
     * 设置产品组详情     
     * @param String $detail     
     * 参数示例：<pre>这是产品组详情</pre>     
     * 此参数必填     */
    public function setDetail( $detail) {
        $this->detail = $detail;
    }
    
        	
    private $imgUrls;
    
        /**
    * @return 图片地址
    */
        public function getImgUrls() {
        return $this->imgUrls;
    }
    
    /**
     * 设置图片地址     
     * @param array include @see String[] $imgUrls     
     * 参数示例：<pre>http://cbu01.alicdn.com</pre>     
     * 此参数必填     */
    public function setImgUrls( $imgUrls) {
        $this->imgUrls = $imgUrls;
    }
    
        	
    private $name;
    
        /**
    * @return 产品组名称
    */
        public function getName() {
        return $this->name;
    }
    
    /**
     * 设置产品组名称     
     * @param String $name     
     * 参数示例：<pre>测试产品组</pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->name = $name;
    }
    
        	
    private $outerId;
    
        /**
    * @return 外部ID
    */
        public function getOuterId() {
        return $this->outerId;
    }
    
    /**
     * 设置外部ID     
     * @param String $outerId     
     * 参数示例：<pre>1001</pre>     
     * 此参数必填     */
    public function setOuterId( $outerId) {
        $this->outerId = $outerId;
    }
    
        	
    private $parentGroupId;
    
        /**
    * @return 产品组父ID
    */
        public function getParentGroupId() {
        return $this->parentGroupId;
    }
    
    /**
     * 设置产品组父ID     
     * @param Long $parentGroupId     
     * 参数示例：<pre>0</pre>     
     * 此参数必填     */
    public function setParentGroupId( $parentGroupId) {
        $this->parentGroupId = $parentGroupId;
    }
    
        	
    private $videoId;
    
        /**
    * @return 视频ID
    */
        public function getVideoId() {
        return $this->videoId;
    }
    
    /**
     * 设置视频ID     
     * @param String $videoId     
     * 参数示例：<pre>adbcd</pre>     
     * 此参数必填     */
    public function setVideoId( $videoId) {
        $this->videoId = $videoId;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "brandId", $this->stdResult )) {
    				$this->brandId = $this->stdResult->{"brandId"};
    			}
    			    		    				    			    			if (array_key_exists ( "brandName", $this->stdResult )) {
    				$this->brandName = $this->stdResult->{"brandName"};
    			}
    			    		    				    			    			if (array_key_exists ( "detail", $this->stdResult )) {
    				$this->detail = $this->stdResult->{"detail"};
    			}
    			    		    				    			    			if (array_key_exists ( "imgUrls", $this->stdResult )) {
    				$this->imgUrls = $this->stdResult->{"imgUrls"};
    			}
    			    		    				    			    			if (array_key_exists ( "name", $this->stdResult )) {
    				$this->name = $this->stdResult->{"name"};
    			}
    			    		    				    			    			if (array_key_exists ( "outerId", $this->stdResult )) {
    				$this->outerId = $this->stdResult->{"outerId"};
    			}
    			    		    				    			    			if (array_key_exists ( "parentGroupId", $this->stdResult )) {
    				$this->parentGroupId = $this->stdResult->{"parentGroupId"};
    			}
    			    		    				    			    			if (array_key_exists ( "videoId", $this->stdResult )) {
    				$this->videoId = $this->stdResult->{"videoId"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "brandId", $this->arrayResult )) {
    			$this->brandId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "brandName", $this->arrayResult )) {
    			$this->brandName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "detail", $this->arrayResult )) {
    			$this->detail = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "imgUrls", $this->arrayResult )) {
    			$this->imgUrls = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "name", $this->arrayResult )) {
    			$this->name = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "outerId", $this->arrayResult )) {
    			$this->outerId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "parentGroupId", $this->arrayResult )) {
    			$this->parentGroupId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "videoId", $this->arrayResult )) {
    			$this->videoId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>