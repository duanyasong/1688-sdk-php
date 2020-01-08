<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaOceanOpenplatformBizMarketParamActivityTopicParam extends SDKDomain {

       	
    private $promotionCode;
    
        /**
    * @return 优惠编码，无需关注
    */
        public function getPromotionCode() {
        return $this->promotionCode;
    }
    
    /**
     * 设置优惠编码，无需关注     
     * @param String $promotionCode     
     * 参数示例：<pre>promotionCode</pre>     
     * 此参数必填     */
    public function setPromotionCode( $promotionCode) {
        $this->promotionCode = $promotionCode;
    }
    
        	
    private $status;
    
        /**
    * @return 主题状态，EDITING:编辑中,IN_PROCESS:正常（对应返回：NORMAL）,CANCEL:取消,END:结束,NOT_START:未开始
    */
        public function getStatus() {
        return $this->status;
    }
    
    /**
     * 设置主题状态，EDITING:编辑中,IN_PROCESS:正常（对应返回：NORMAL）,CANCEL:取消,END:结束,NOT_START:未开始     
     * @param String $status     
     * 参数示例：<pre>IN_PROCESS</pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
    }
    
        	
    private $pageSize;
    
        /**
    * @return 分页参数，最大上限50
    */
        public function getPageSize() {
        return $this->pageSize;
    }
    
    /**
     * 设置分页参数，最大上限50     
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
					    			    			if (array_key_exists ( "promotionCode", $this->stdResult )) {
    				$this->promotionCode = $this->stdResult->{"promotionCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
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
				    		    			if (array_key_exists ( "promotionCode", $this->arrayResult )) {
    			$this->promotionCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['${paramType.paramName}'];
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