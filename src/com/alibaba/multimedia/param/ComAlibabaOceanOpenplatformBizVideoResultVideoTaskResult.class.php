<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaTaosellerVideoTaskQueryParam/ComAlibabaOceanOpenplatformBizVideoResultVideoGenerateResult.class.php');

class ComAlibabaOceanOpenplatformBizVideoResultVideoTaskResult extends SDKDomain {

       	
    private $taskId;
    
        /**
    * @return 标志唯一任务的任务Id，即发起任务时taskId
    */
        public function getTaskId() {
        return $this->taskId;
    }
    
    /**
     * 设置标志唯一任务的任务Id，即发起任务时taskId     
     * @param String $taskId     
     * 参数示例：<pre>b1091c3a-7f46-402e-b548-7c6fd075f35c_genVideo_1545200943613</pre>     
     * 此参数必填     */
    public function setTaskId( $taskId) {
        $this->taskId = $taskId;
    }
    
        	
    private $taskStatus;
    
        /**
    * @return 任务状态
    */
        public function getTaskStatus() {
        return $this->taskStatus;
    }
    
    /**
     * 设置任务状态     
     * @param String $taskStatus     
     * 参数示例：<pre>FAILED,SUCCEED,RUNNING</pre>     
     * 此参数必填     */
    public function setTaskStatus( $taskStatus) {
        $this->taskStatus = $taskStatus;
    }
    
        	
    private $taskErrorCode;
    
        /**
    * @return 错误码
    */
        public function getTaskErrorCode() {
        return $this->taskErrorCode;
    }
    
    /**
     * 设置错误码     
     * @param String $taskErrorCode     
     * 参数示例：<pre>148003，具体值查看API的错误码描述</pre>     
     * 此参数必填     */
    public function setTaskErrorCode( $taskErrorCode) {
        $this->taskErrorCode = $taskErrorCode;
    }
    
        	
    private $businessType;
    
        /**
    * @return 业务字段，即发起任务时的businessType
    */
        public function getBusinessType() {
        return $this->businessType;
    }
    
    /**
     * 设置业务字段，即发起任务时的businessType     
     * @param String $businessType     
     * 参数示例：<pre>douhuo,发起任务时的业务字段</pre>     
     * 此参数必填     */
    public function setBusinessType( $businessType) {
        $this->businessType = $businessType;
    }
    
        	
    private $videoGenerateResult;
    
        /**
    * @return 视频返回的详细结果
    */
        public function getVideoGenerateResult() {
        return $this->videoGenerateResult;
    }
    
    /**
     * 设置视频返回的详细结果     
     * @param ComAlibabaOceanOpenplatformBizVideoResultVideoGenerateResult $videoGenerateResult     
     * 参数示例：<pre>{       "thumbnail": "b1091c3a-7f46-402e-b548-7c6fd075f35c/thumbnail/73a591a6-0357-11e9-851f-02420ba28811.jpg",       "videoUrl": "http://aliwoodvideo.oss-cn-shanghai.aliyuncs.com/73a591a6-0357-11e9-851f-02420ba28811.mp4?Expires=1545356702&OSSAccessKeyId=LTAI8eQPXJfFMkJF&Signature=ZN1O6T6KGnUfWJ8LbWogAUXwBHo%3D",       "videoName": "73a591a6-0357-11e9-851f-02420ba28811.mp4",       "class": "com.alibaba.ocean.openplatform.biz.video.result.VideoGenerateResult",       "thumbnailUrl": "http://aliwoodvideo.oss-cn-shanghai.aliyuncs.com/b1091c3a-7f46-402e-b548-7c6fd075f35c/thumbnail/73a591a6-0357-11e9-851f-02420ba28811.jpg?Expires=1545356702&OSSAccessKeyId=LTAI8eQPXJfFMkJF&Signature=6EWLkdnDsKoYSM6ChnCJCSfSJUE%3D"     }</pre>     
     * 此参数必填     */
    public function setVideoGenerateResult(ComAlibabaOceanOpenplatformBizVideoResultVideoGenerateResult $videoGenerateResult) {
        $this->videoGenerateResult = $videoGenerateResult;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "taskId", $this->stdResult )) {
    				$this->taskId = $this->stdResult->{"taskId"};
    			}
    			    		    				    			    			if (array_key_exists ( "taskStatus", $this->stdResult )) {
    				$this->taskStatus = $this->stdResult->{"taskStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "taskErrorCode", $this->stdResult )) {
    				$this->taskErrorCode = $this->stdResult->{"taskErrorCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "businessType", $this->stdResult )) {
    				$this->businessType = $this->stdResult->{"businessType"};
    			}
    			    		    				    			    			if (array_key_exists ( "videoGenerateResult", $this->stdResult )) {
    				$videoGenerateResultResult=$this->stdResult->{"videoGenerateResult"};
    				$this->videoGenerateResult = new ComAlibabaOceanOpenplatformBizVideoResultVideoGenerateResult();
    				$this->videoGenerateResult->setStdResult ( $videoGenerateResultResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "taskId", $this->arrayResult )) {
    			$this->taskId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "taskStatus", $this->arrayResult )) {
    			$this->taskStatus = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "taskErrorCode", $this->arrayResult )) {
    			$this->taskErrorCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "businessType", $this->arrayResult )) {
    			$this->businessType = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "videoGenerateResult", $this->arrayResult )) {
    		$videoGenerateResultResult=$arrayResult['${paramType.paramName}'];
    			    			$this->videoGenerateResult = new ComAlibabaOceanOpenplatformBizVideoResultVideoGenerateResult();
    			    			$this->videoGenerateResult->setStdResult ( $videoGenerateResultResult);
    		}
    		    	    		}
 
   
}
?>