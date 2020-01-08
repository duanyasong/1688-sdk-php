<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaOceanOpenplatformBizVideoResultVideoModelResult extends SDKDomain {

       	
    private $address;
    
        /**
    * @return 视频地址
    */
        public function getAddress() {
        return $this->address;
    }
    
    /**
     * 设置视频地址     
     * @param String $address     
     * 参数示例：<pre>https://xxxx/shirt.mp4</pre>     
     * 此参数必填     */
    public function setAddress( $address) {
        $this->address = $address;
    }
    
        	
    private $createTime;
    
        /**
    * @return 创建时间
    */
        public function getCreateTime() {
        return $this->createTime;
    }
    
    /**
     * 设置创建时间     
     * @param Date $createTime     
     * 参数示例：<pre>15888888888</pre>     
     * 此参数必填     */
    public function setCreateTime( $createTime) {
        $this->createTime = $createTime;
    }
    
        	
    private $description;
    
        /**
    * @return 视频描述
    */
        public function getDescription() {
        return $this->description;
    }
    
    /**
     * 设置视频描述     
     * @param String $description     
     * 参数示例：<pre>T恤衫</pre>     
     * 此参数必填     */
    public function setDescription( $description) {
        $this->description = $description;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "address", $this->stdResult )) {
    				$this->address = $this->stdResult->{"address"};
    			}
    			    		    				    			    			if (array_key_exists ( "createTime", $this->stdResult )) {
    				$this->createTime = $this->stdResult->{"createTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "description", $this->stdResult )) {
    				$this->description = $this->stdResult->{"description"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "address", $this->arrayResult )) {
    			$this->address = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "createTime", $this->arrayResult )) {
    			$this->createTime = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "description", $this->arrayResult )) {
    			$this->description = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>