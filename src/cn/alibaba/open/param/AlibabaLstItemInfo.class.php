<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaLstItemInfo extends SDKDomain {

       	
    private $id;
    
        /**
    * @return 商品id
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置商品id     
     * @param Long $id     
     * 参数示例：<pre>565299932347</pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>