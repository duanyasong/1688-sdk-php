<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaOceanOpenplatformBizMarketParamActivityProductsParam extends SDKDomain {

       	
    private $activityId;
    
        /**
    * @return 活动ID
    */
        public function getActivityId() {
        return $this->activityId;
    }
    
    /**
     * 设置活动ID     
     * @param Long $activityId     
     * 参数示例：<pre>940561312</pre>     
     * 此参数必填     */
    public function setActivityId( $activityId) {
        $this->activityId = $activityId;
    }
    
        	
    private $buyerUserId;
    
        /**
    * @return 买家userId
    */
        public function getBuyerUserId() {
        return $this->buyerUserId;
    }
    
    /**
     * 设置买家userId     
     * @param Long $buyerUserId     
     * 参数示例：<pre>1624961198</pre>     
     * 此参数必填     */
    public function setBuyerUserId( $buyerUserId) {
        $this->buyerUserId = $buyerUserId;
    }
    
        	
    private $buyerLoginId;
    
        /**
    * @return 买家loginId
    */
        public function getBuyerLoginId() {
        return $this->buyerLoginId;
    }
    
    /**
     * 设置买家loginId     
     * @param String $buyerLoginId     
     * 参数示例：<pre>alitestforisv02</pre>     
     * 此参数必填     */
    public function setBuyerLoginId( $buyerLoginId) {
        $this->buyerLoginId = $buyerLoginId;
    }
    
        	
    private $pageSize;
    
        /**
    * @return 每页大小，上限20
    */
        public function getPageSize() {
        return $this->pageSize;
    }
    
    /**
     * 设置每页大小，上限20     
     * @param Integer $pageSize     
     * 参数示例：<pre>20</pre>     
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->pageSize = $pageSize;
    }
    
        	
    private $pageIndex;
    
        /**
    * @return 分页参数，起始页为1
    */
        public function getPageIndex() {
        return $this->pageIndex;
    }
    
    /**
     * 设置分页参数，起始页为1     
     * @param Integer $pageIndex     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setPageIndex( $pageIndex) {
        $this->pageIndex = $pageIndex;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "activityId", $this->stdResult )) {
    				$this->activityId = $this->stdResult->{"activityId"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerUserId", $this->stdResult )) {
    				$this->buyerUserId = $this->stdResult->{"buyerUserId"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerLoginId", $this->stdResult )) {
    				$this->buyerLoginId = $this->stdResult->{"buyerLoginId"};
    			}
    			    		    				    			    			if (array_key_exists ( "pageSize", $this->stdResult )) {
    				$this->pageSize = $this->stdResult->{"pageSize"};
    			}
    			    		    				    			    			if (array_key_exists ( "pageIndex", $this->stdResult )) {
    				$this->pageIndex = $this->stdResult->{"pageIndex"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "activityId", $this->arrayResult )) {
    			$this->activityId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerUserId", $this->arrayResult )) {
    			$this->buyerUserId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerLoginId", $this->arrayResult )) {
    			$this->buyerLoginId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "pageSize", $this->arrayResult )) {
    			$this->pageSize = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "pageIndex", $this->arrayResult )) {
    			$this->pageIndex = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>