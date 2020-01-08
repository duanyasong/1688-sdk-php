<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaUserDefineCategoryAddResult {

        	
    private $catId;
    
        /**
    * @return 新建的类目的id
    */
        public function getCatId() {
        return $this->catId;
    }
    
    /**
     * 设置新建的类目的id     
     * @param Long $catId     
          
     * 此参数必填     */
    public function setCatId( $catId) {
        $this->catId = $catId;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "catId", $this->stdResult )) {
    				$this->catId = $this->stdResult->{"catId"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "catId", $this->arrayResult )) {
    			$this->catId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>