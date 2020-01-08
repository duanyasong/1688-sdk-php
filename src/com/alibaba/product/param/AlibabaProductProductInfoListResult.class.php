<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaProductListGetParam/AlibabaProductPageResult.class.php');

class AlibabaProductProductInfoListResult extends SDKDomain {

       	
    private $pageResult;
    
        /**
    * @return 查询结果
    */
        public function getPageResult() {
        return $this->pageResult;
    }
    
    /**
     * 设置查询结果     
     * @param AlibabaProductPageResult $pageResult     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPageResult(AlibabaProductPageResult $pageResult) {
        $this->pageResult = $pageResult;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "pageResult", $this->stdResult )) {
    				$pageResultResult=$this->stdResult->{"pageResult"};
    				$this->pageResult = new AlibabaProductPageResult();
    				$this->pageResult->setStdResult ( $pageResultResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "pageResult", $this->arrayResult )) {
    		$pageResultResult=$arrayResult['${paramType.paramName}'];
    			    			$this->pageResult = new AlibabaProductPageResult();
    			    			$this->pageResult->setStdResult ( $pageResultResult);
    		}
    		    	    		}
 
   
}
?>