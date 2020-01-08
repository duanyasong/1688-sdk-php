<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaOceanMetaDtoOpenApp extends SDKDomain {

       	
    private $description;
    
        /**
    * @return 
    */
        public function getDescription() {
        return $this->description;
    }
    
    /**
     * 设置     
     * @param String $description     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDescription( $description) {
        $this->description = $description;
    }
    
        	
    private $key;
    
        /**
    * @return 
    */
        public function getKey() {
        return $this->key;
    }
    
    /**
     * 设置     
     * @param Integer $key     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setKey( $key) {
        $this->key = $key;
    }
    
        	
    private $name;
    
        /**
    * @return 
    */
        public function getName() {
        return $this->name;
    }
    
    /**
     * 设置     
     * @param String $name     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->name = $name;
    }
    
        	
    private $ownerId;
    
        /**
    * @return 
    */
        public function getOwnerId() {
        return $this->ownerId;
    }
    
    /**
     * 设置     
     * @param String $ownerId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOwnerId( $ownerId) {
        $this->ownerId = $ownerId;
    }
    
        	
    private $status;
    
        /**
    * @return 
    */
        public function getStatus() {
        return $this->status;
    }
    
    /**
     * 设置     
     * @param String $status     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "description", $this->stdResult )) {
    				$this->description = $this->stdResult->{"description"};
    			}
    			    		    				    			    			if (array_key_exists ( "key", $this->stdResult )) {
    				$this->key = $this->stdResult->{"key"};
    			}
    			    		    				    			    			if (array_key_exists ( "name", $this->stdResult )) {
    				$this->name = $this->stdResult->{"name"};
    			}
    			    		    				    			    			if (array_key_exists ( "ownerId", $this->stdResult )) {
    				$this->ownerId = $this->stdResult->{"ownerId"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "description", $this->arrayResult )) {
    			$this->description = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "key", $this->arrayResult )) {
    			$this->key = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "name", $this->arrayResult )) {
    			$this->name = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "ownerId", $this->arrayResult )) {
    			$this->ownerId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>