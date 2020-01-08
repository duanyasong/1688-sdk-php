<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ActivityTopicResult extends SDKDomain {

       	
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
     * 参数示例：<pre>1527782400000</pre>     
     * 此参数必填     */
    public function setStartTime( $startTime) {
        $this->startTime = $startTime;
    }
    
        	
    private $templateId;
    
        /**
    * @return 模板ID
    */
        public function getTemplateId() {
        return $this->templateId;
    }
    
    /**
     * 设置模板ID     
     * @param Long $templateId     
     * 参数示例：<pre>1001</pre>     
     * 此参数必填     */
    public function setTemplateId( $templateId) {
        $this->templateId = $templateId;
    }
    
        	
    private $gmtModified;
    
        /**
    * @return 修改时间
    */
        public function getGmtModified() {
        return $this->gmtModified;
    }
    
    /**
     * 设置修改时间     
     * @param Date $gmtModified     
     * 参数示例：<pre>1527586477000</pre>     
     * 此参数必填     */
    public function setGmtModified( $gmtModified) {
        $this->gmtModified = $gmtModified;
    }
    
        	
    private $id;
    
        /**
    * @return 主题ID
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置主题ID     
     * @param Long $id     
     * 参数示例：<pre>4861015</pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $gmtCreate;
    
        /**
    * @return 创建时间
    */
        public function getGmtCreate() {
        return $this->gmtCreate;
    }
    
    /**
     * 设置创建时间     
     * @param Date $gmtCreate     
     * 参数示例：<pre>1527586446000</pre>     
     * 此参数必填     */
    public function setGmtCreate( $gmtCreate) {
        $this->gmtCreate = $gmtCreate;
    }
    
        	
    private $status;
    
        /**
    * @return 状态，主题状态，‘NORMAL’和“DELETE’两种状态
    */
        public function getStatus() {
        return $this->status;
    }
    
    /**
     * 设置状态，主题状态，‘NORMAL’和“DELETE’两种状态     
     * @param String $status     
     * 参数示例：<pre>NORMAL</pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
    }
    
        	
    private $sellerId;
    
        /**
    * @return 卖家USERID
    */
        public function getSellerId() {
        return $this->sellerId;
    }
    
    /**
     * 设置卖家USERID     
     * @param array include @see Long[] $sellerId     
     * 参数示例：<pre>2248564064</pre>     
     * 此参数必填     */
    public function setSellerId( $sellerId) {
        $this->sellerId = $sellerId;
    }
    
        	
    private $name;
    
        /**
    * @return 主题名称
    */
        public function getName() {
        return $this->name;
    }
    
    /**
     * 设置主题名称     
     * @param String $name     
     * 参数示例：<pre>isv</pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->name = $name;
    }
    
        	
    private $templateCode;
    
        /**
    * @return 模板编码
    */
        public function getTemplateCode() {
        return $this->templateCode;
    }
    
    /**
     * 设置模板编码     
     * @param String $templateCode     
     * 参数示例：<pre>clearance_0</pre>     
     * 此参数必填     */
    public function setTemplateCode( $templateCode) {
        $this->templateCode = $templateCode;
    }
    
        	
    private $activityIds;
    
        /**
    * @return 活动ID列表
    */
        public function getActivityIds() {
        return $this->activityIds;
    }
    
    /**
     * 设置活动ID列表     
     * @param array include @see Long[] $activityIds     
     * 参数示例：<pre>[940561312]</pre>     
     * 此参数必填     */
    public function setActivityIds( $activityIds) {
        $this->activityIds = $activityIds;
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
     * 参数示例：<pre>1530633600000</pre>     
     * 此参数必填     */
    public function setEndTime( $endTime) {
        $this->endTime = $endTime;
    }
    
        	
    private $templateName;
    
        /**
    * @return 模板名
    */
        public function getTemplateName() {
        return $this->templateName;
    }
    
    /**
     * 设置模板名     
     * @param String $templateName     
     * 参数示例：<pre>清仓特卖</pre>     
     * 此参数必填     */
    public function setTemplateName( $templateName) {
        $this->templateName = $templateName;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "startTime", $this->stdResult )) {
    				$this->startTime = $this->stdResult->{"startTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "templateId", $this->stdResult )) {
    				$this->templateId = $this->stdResult->{"templateId"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtModified", $this->stdResult )) {
    				$this->gmtModified = $this->stdResult->{"gmtModified"};
    			}
    			    		    				    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtCreate", $this->stdResult )) {
    				$this->gmtCreate = $this->stdResult->{"gmtCreate"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    				    			    			if (array_key_exists ( "sellerId", $this->stdResult )) {
    				$this->sellerId = $this->stdResult->{"sellerId"};
    			}
    			    		    				    			    			if (array_key_exists ( "name", $this->stdResult )) {
    				$this->name = $this->stdResult->{"name"};
    			}
    			    		    				    			    			if (array_key_exists ( "templateCode", $this->stdResult )) {
    				$this->templateCode = $this->stdResult->{"templateCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "activityIds", $this->stdResult )) {
    				$this->activityIds = $this->stdResult->{"activityIds"};
    			}
    			    		    				    			    			if (array_key_exists ( "endTime", $this->stdResult )) {
    				$this->endTime = $this->stdResult->{"endTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "templateName", $this->stdResult )) {
    				$this->templateName = $this->stdResult->{"templateName"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "startTime", $this->arrayResult )) {
    			$this->startTime = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "templateId", $this->arrayResult )) {
    			$this->templateId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtModified", $this->arrayResult )) {
    			$this->gmtModified = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
    			$this->gmtCreate = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "sellerId", $this->arrayResult )) {
    			$this->sellerId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "name", $this->arrayResult )) {
    			$this->name = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "templateCode", $this->arrayResult )) {
    			$this->templateCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "activityIds", $this->arrayResult )) {
    			$this->activityIds = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "endTime", $this->arrayResult )) {
    			$this->endTime = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "templateName", $this->arrayResult )) {
    			$this->templateName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>