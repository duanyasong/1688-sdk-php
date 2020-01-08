<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaOceanOpenplatformBizMarketParamActivityBaseParam extends SDKDomain {

       	
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
     * 参数示例：<pre>50062002</pre>     
     * 此参数必填     */
    public function setActivityId( $activityId) {
        $this->activityId = $activityId;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "activityId", $this->stdResult )) {
    				$this->activityId = $this->stdResult->{"activityId"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "activityId", $this->arrayResult )) {
    			$this->activityId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>