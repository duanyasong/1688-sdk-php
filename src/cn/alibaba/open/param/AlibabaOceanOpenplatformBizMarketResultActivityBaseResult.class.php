<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaOceanOpenplatformBizMarketResultActivityBaseResult extends SDKDomain {

       	
    private $startTime;
    
        /**
    * @return 开始时间
    */
        public function getStartTime() {
        return $this->startTime;
    }
    
    /**
     * 设置开始时间     
     * @param Date $startTime     
     * 参数示例：<pre>1524499200000</pre>     
     * 此参数必填     */
    public function setStartTime( $startTime) {
        $this->startTime = $startTime;
    }
    
        	
    private $activityId;
    
        /**
    * @return 结束时间
    */
        public function getActivityId() {
        return $this->activityId;
    }
    
    /**
     * 设置结束时间     
     * @param Long $activityId     
     * 参数示例：<pre>50062002</pre>     
     * 此参数必填     */
    public function setActivityId( $activityId) {
        $this->activityId = $activityId;
    }
    
        	
    private $hotTime;
    
        /**
    * @return 预热时间
    */
        public function getHotTime() {
        return $this->hotTime;
    }
    
    /**
     * 设置预热时间     
     * @param Date $hotTime     
     * 参数示例：<pre>1524758400000</pre>     
     * 此参数必填     */
    public function setHotTime( $hotTime) {
        $this->hotTime = $hotTime;
    }
    
        	
    private $marketingScene;
    
        /**
    * @return 活动场景，无需关注
    */
        public function getMarketingScene() {
        return $this->marketingScene;
    }
    
    /**
     * 设置活动场景，无需关注     
     * @param String $marketingScene     
     * 参数示例：<pre>myh</pre>     
     * 此参数必填     */
    public function setMarketingScene( $marketingScene) {
        $this->marketingScene = $marketingScene;
    }
    
        	
    private $promDesc;
    
        /**
    * @return 描述
    */
        public function getPromDesc() {
        return $this->promDesc;
    }
    
    /**
     * 设置描述     
     * @param String $promDesc     
     * 参数示例：<pre>描述内容</pre>     
     * 此参数必填     */
    public function setPromDesc( $promDesc) {
        $this->promDesc = $promDesc;
    }
    
        	
    private $activityStatus;
    
        /**
    * @return 状态，‘NORMAL’、'END'和“DELETE’
    */
        public function getActivityStatus() {
        return $this->activityStatus;
    }
    
    /**
     * 设置状态，‘NORMAL’、'END'和“DELETE’     
     * @param String $activityStatus     
     * 参数示例：<pre>NORMAL</pre>     
     * 此参数必填     */
    public function setActivityStatus( $activityStatus) {
        $this->activityStatus = $activityStatus;
    }
    
        	
    private $endTime;
    
        /**
    * @return 结束时间
    */
        public function getEndTime() {
        return $this->endTime;
    }
    
    /**
     * 设置结束时间     
     * @param Date $endTime     
     * 参数示例：<pre>1524758400000</pre>     
     * 此参数必填     */
    public function setEndTime( $endTime) {
        $this->endTime = $endTime;
    }
    
        	
    private $activityName;
    
        /**
    * @return 活动名
    */
        public function getActivityName() {
        return $this->activityName;
    }
    
    /**
     * 设置活动名     
     * @param String $activityName     
     * 参数示例：<pre>活动名</pre>     
     * 此参数必填     */
    public function setActivityName( $activityName) {
        $this->activityName = $activityName;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "startTime", $this->stdResult )) {
    				$this->startTime = $this->stdResult->{"startTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "activityId", $this->stdResult )) {
    				$this->activityId = $this->stdResult->{"activityId"};
    			}
    			    		    				    			    			if (array_key_exists ( "hotTime", $this->stdResult )) {
    				$this->hotTime = $this->stdResult->{"hotTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "marketingScene", $this->stdResult )) {
    				$this->marketingScene = $this->stdResult->{"marketingScene"};
    			}
    			    		    				    			    			if (array_key_exists ( "promDesc", $this->stdResult )) {
    				$this->promDesc = $this->stdResult->{"promDesc"};
    			}
    			    		    				    			    			if (array_key_exists ( "activityStatus", $this->stdResult )) {
    				$this->activityStatus = $this->stdResult->{"activityStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "endTime", $this->stdResult )) {
    				$this->endTime = $this->stdResult->{"endTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "activityName", $this->stdResult )) {
    				$this->activityName = $this->stdResult->{"activityName"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "startTime", $this->arrayResult )) {
    			$this->startTime = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "activityId", $this->arrayResult )) {
    			$this->activityId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "hotTime", $this->arrayResult )) {
    			$this->hotTime = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "marketingScene", $this->arrayResult )) {
    			$this->marketingScene = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "promDesc", $this->arrayResult )) {
    			$this->promDesc = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "activityStatus", $this->arrayResult )) {
    			$this->activityStatus = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "endTime", $this->arrayResult )) {
    			$this->endTime = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "activityName", $this->arrayResult )) {
    			$this->activityName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>