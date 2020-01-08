<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class VideoResponse extends SDKDomain {

       	
    private $videoId;
    
        /**
    * @return 1688视频id
    */
        public function getVideoId() {
        return $this->videoId;
    }
    
    /**
     * 设置1688视频id     
     * @param Long $videoId     
     * 参数示例：<pre>123123</pre>     
     * 此参数必填     */
    public function setVideoId( $videoId) {
        $this->videoId = $videoId;
    }
    
        	
    private $videoURL;
    
        /**
    * @return 视频预览URL
    */
        public function getVideoURL() {
        return $this->videoURL;
    }
    
    /**
     * 设置视频预览URL     
     * @param String $videoURL     
     * 参数示例：<pre>http://xxx</pre>     
     * 此参数必填     */
    public function setVideoURL( $videoURL) {
        $this->videoURL = $videoURL;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "videoId", $this->stdResult )) {
    				$this->videoId = $this->stdResult->{"videoId"};
    			}
    			    		    				    			    			if (array_key_exists ( "videoURL", $this->stdResult )) {
    				$this->videoURL = $this->stdResult->{"videoURL"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "videoId", $this->arrayResult )) {
    			$this->videoId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "videoURL", $this->arrayResult )) {
    			$this->videoURL = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>