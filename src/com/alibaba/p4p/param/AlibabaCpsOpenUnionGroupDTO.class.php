<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCpsOpenUnionGroupDTO extends SDKDomain {

       	
    private $id;
    
        /**
    * @return 组id
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置组id     
     * @param Long $id     
     * 参数示例：<pre> </pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $tkId;
    
        /**
    * @return 推客id
    */
        public function getTkId() {
        return $this->tkId;
    }
    
    /**
     * 设置推客id     
     * @param Long $tkId     
     * 参数示例：<pre> </pre>     
     * 此参数必填     */
    public function setTkId( $tkId) {
        $this->tkId = $tkId;
    }
    
        	
    private $title;
    
        /**
    * @return 标题
    */
        public function getTitle() {
        return $this->title;
    }
    
    /**
     * 设置标题     
     * @param String $title     
     * 参数示例：<pre> </pre>     
     * 此参数必填     */
    public function setTitle( $title) {
        $this->title = $title;
    }
    
        	
    private $feedCount;
    
        /**
    * @return 组内包含offer总数
    */
        public function getFeedCount() {
        return $this->feedCount;
    }
    
    /**
     * 设置组内包含offer总数     
     * @param Integer $feedCount     
     * 参数示例：<pre> </pre>     
     * 此参数必填     */
    public function setFeedCount( $feedCount) {
        $this->feedCount = $feedCount;
    }
    
        	
    private $invalidFeedCount;
    
        /**
    * @return 组内包含无效offer数（不在推品池）
    */
        public function getInvalidFeedCount() {
        return $this->invalidFeedCount;
    }
    
    /**
     * 设置组内包含无效offer数（不在推品池）     
     * @param Integer $invalidFeedCount     
     * 参数示例：<pre> </pre>     
     * 此参数必填     */
    public function setInvalidFeedCount( $invalidFeedCount) {
        $this->invalidFeedCount = $invalidFeedCount;
    }
    
        	
    private $invalidFeedIds;
    
        /**
    * @return 有效offer id列表
    */
        public function getInvalidFeedIds() {
        return $this->invalidFeedIds;
    }
    
    /**
     * 设置有效offer id列表     
     * @param array include @see Long[] $invalidFeedIds     
     * 参数示例：<pre> </pre>     
     * 此参数必填     */
    public function setInvalidFeedIds( $invalidFeedIds) {
        $this->invalidFeedIds = $invalidFeedIds;
    }
    
        	
    private $validFeedIds;
    
        /**
    * @return 无效offer id列表
    */
        public function getValidFeedIds() {
        return $this->validFeedIds;
    }
    
    /**
     * 设置无效offer id列表     
     * @param array include @see Long[] $validFeedIds     
     * 参数示例：<pre> </pre>     
     * 此参数必填     */
    public function setValidFeedIds( $validFeedIds) {
        $this->validFeedIds = $validFeedIds;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "tkId", $this->stdResult )) {
    				$this->tkId = $this->stdResult->{"tkId"};
    			}
    			    		    				    			    			if (array_key_exists ( "title", $this->stdResult )) {
    				$this->title = $this->stdResult->{"title"};
    			}
    			    		    				    			    			if (array_key_exists ( "feedCount", $this->stdResult )) {
    				$this->feedCount = $this->stdResult->{"feedCount"};
    			}
    			    		    				    			    			if (array_key_exists ( "invalidFeedCount", $this->stdResult )) {
    				$this->invalidFeedCount = $this->stdResult->{"invalidFeedCount"};
    			}
    			    		    				    			    			if (array_key_exists ( "invalidFeedIds", $this->stdResult )) {
    				$this->invalidFeedIds = $this->stdResult->{"invalidFeedIds"};
    			}
    			    		    				    			    			if (array_key_exists ( "validFeedIds", $this->stdResult )) {
    				$this->validFeedIds = $this->stdResult->{"validFeedIds"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "tkId", $this->arrayResult )) {
    			$this->tkId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "title", $this->arrayResult )) {
    			$this->title = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "feedCount", $this->arrayResult )) {
    			$this->feedCount = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "invalidFeedCount", $this->arrayResult )) {
    			$this->invalidFeedCount = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "invalidFeedIds", $this->arrayResult )) {
    			$this->invalidFeedIds = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "validFeedIds", $this->arrayResult )) {
    			$this->validFeedIds = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>