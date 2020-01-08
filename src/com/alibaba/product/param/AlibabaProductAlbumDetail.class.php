<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProductAlbumDetail extends SDKDomain {

       	
    private $usedSpace;
    
        /**
    * @return 已使用空间
    */
        public function getUsedSpace() {
        return $this->usedSpace;
    }
    
    /**
     * 设置已使用空间     
     * @param Long $usedSpace     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setUsedSpace( $usedSpace) {
        $this->usedSpace = $usedSpace;
    }
    
        	
    private $defaultSpace;
    
        /**
    * @return 默认空间大小
    */
        public function getDefaultSpace() {
        return $this->defaultSpace;
    }
    
    /**
     * 设置默认空间大小     
     * @param Long $defaultSpace     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDefaultSpace( $defaultSpace) {
        $this->defaultSpace = $defaultSpace;
    }
    
        	
    private $externalSpace;
    
        /**
    * @return 额外空间
    */
        public function getExternalSpace() {
        return $this->externalSpace;
    }
    
    /**
     * 设置额外空间     
     * @param Long $externalSpace     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setExternalSpace( $externalSpace) {
        $this->externalSpace = $externalSpace;
    }
    
        	
    private $full;
    
        /**
    * @return 是否已经满了
    */
        public function getFull() {
        return $this->full;
    }
    
    /**
     * 设置是否已经满了     
     * @param Boolean $full     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFull( $full) {
        $this->full = $full;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "usedSpace", $this->stdResult )) {
    				$this->usedSpace = $this->stdResult->{"usedSpace"};
    			}
    			    		    				    			    			if (array_key_exists ( "defaultSpace", $this->stdResult )) {
    				$this->defaultSpace = $this->stdResult->{"defaultSpace"};
    			}
    			    		    				    			    			if (array_key_exists ( "externalSpace", $this->stdResult )) {
    				$this->externalSpace = $this->stdResult->{"externalSpace"};
    			}
    			    		    				    			    			if (array_key_exists ( "full", $this->stdResult )) {
    				$this->full = $this->stdResult->{"full"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "usedSpace", $this->arrayResult )) {
    			$this->usedSpace = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "defaultSpace", $this->arrayResult )) {
    			$this->defaultSpace = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "externalSpace", $this->arrayResult )) {
    			$this->externalSpace = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "full", $this->arrayResult )) {
    			$this->full = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>