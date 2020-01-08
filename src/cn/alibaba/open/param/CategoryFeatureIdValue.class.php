<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CategoryFeatureIdValue extends SDKDomain {

       	
    private $vid;
    
        /**
    * @return 属性键
    */
        public function getVid() {
        return $this->vid;
    }
    
    /**
     * 设置属性键     
     * @param Long $vid     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setVid( $vid) {
        $this->vid = $vid;
    }
    
        	
    private $value;
    
        /**
    * @return 属性值
    */
        public function getValue() {
        return $this->value;
    }
    
    /**
     * 设置属性值     
     * @param String $value     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setValue( $value) {
        $this->value = $value;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "vid", $this->stdResult )) {
    				$this->vid = $this->stdResult->{"vid"};
    			}
    			    		    				    			    			if (array_key_exists ( "value", $this->stdResult )) {
    				$this->value = $this->stdResult->{"value"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "vid", $this->arrayResult )) {
    			$this->vid = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "value", $this->arrayResult )) {
    			$this->value = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>