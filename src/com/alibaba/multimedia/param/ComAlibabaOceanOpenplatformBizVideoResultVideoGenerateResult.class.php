<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ComAlibabaOceanOpenplatformBizVideoResultVideoGenerateResult extends SDKDomain {

       	
    private $videoName;
    
        /**
    * @return 视频名称
    */
        public function getVideoName() {
        return $this->videoName;
    }
    
    /**
     * 设置视频名称     
     * @param String $videoName     
     * 参数示例：<pre>73a591a6-0357-11e9-851f-02420ba28811.mp4</pre>     
     * 此参数必填     */
    public function setVideoName( $videoName) {
        $this->videoName = $videoName;
    }
    
        	
    private $videoUrl;
    
        /**
    * @return 视频地址
    */
        public function getVideoUrl() {
        return $this->videoUrl;
    }
    
    /**
     * 设置视频地址     
     * @param String $videoUrl     
     * 参数示例：<pre>http://aliwoodvideo.oss-cn-shanghai.aliyuncs.com/73a591a6-0357-11e9-851f-02420ba28811.mp4?Expires=1545356702&OSSAccessKeyId=LTAI8eQPXJfFMkJF&Signature=ZN1O6T6KGnUfWJ8LbWogAUXwBHo%3D</pre>     
     * 此参数必填     */
    public function setVideoUrl( $videoUrl) {
        $this->videoUrl = $videoUrl;
    }
    
        	
    private $thumbnail;
    
        /**
    * @return 缩略图名称
    */
        public function getThumbnail() {
        return $this->thumbnail;
    }
    
    /**
     * 设置缩略图名称     
     * @param String $thumbnail     
     * 参数示例：<pre>b1091c3a-7f46-402e-b548-7c6fd075f35c/thumbnail/73a591a6-0357-11e9-851f-02420ba28811.jpg</pre>     
     * 此参数必填     */
    public function setThumbnail( $thumbnail) {
        $this->thumbnail = $thumbnail;
    }
    
        	
    private $thumbnailUrl;
    
        /**
    * @return 缩略图地址
    */
        public function getThumbnailUrl() {
        return $this->thumbnailUrl;
    }
    
    /**
     * 设置缩略图地址     
     * @param String $thumbnailUrl     
     * 参数示例：<pre>http://aliwoodvideo.oss-cn-shanghai.aliyuncs.com/b1091c3a-7f46-402e-b548-7c6fd075f35c/thumbnail/73a591a6-0357-11e9-851f-02420ba28811.jpg?Expires=1545356702&OSSAccessKeyId=LTAI8eQPXJfFMkJF&Signature=6EWLkdnDsKoYSM6ChnCJCSfSJUE%3D</pre>     
     * 此参数必填     */
    public function setThumbnailUrl( $thumbnailUrl) {
        $this->thumbnailUrl = $thumbnailUrl;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "videoName", $this->stdResult )) {
    				$this->videoName = $this->stdResult->{"videoName"};
    			}
    			    		    				    			    			if (array_key_exists ( "videoUrl", $this->stdResult )) {
    				$this->videoUrl = $this->stdResult->{"videoUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "thumbnail", $this->stdResult )) {
    				$this->thumbnail = $this->stdResult->{"thumbnail"};
    			}
    			    		    				    			    			if (array_key_exists ( "thumbnailUrl", $this->stdResult )) {
    				$this->thumbnailUrl = $this->stdResult->{"thumbnailUrl"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "videoName", $this->arrayResult )) {
    			$this->videoName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "videoUrl", $this->arrayResult )) {
    			$this->videoUrl = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "thumbnail", $this->arrayResult )) {
    			$this->thumbnail = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "thumbnailUrl", $this->arrayResult )) {
    			$this->thumbnailUrl = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>