<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaMarketCouponListParam/ActivityTopicResult.class.php');

class AlibabaOceanOpenplatformCommonPageResult extends SDKDomain {

       	
    private $sizePerPage;
    
        /**
    * @return 当前每页大小
    */
        public function getSizePerPage() {
        return $this->sizePerPage;
    }
    
    /**
     * 设置当前每页大小     
     * @param Integer $sizePerPage     
     * 参数示例：<pre>20</pre>     
     * 此参数必填     */
    public function setSizePerPage( $sizePerPage) {
        $this->sizePerPage = $sizePerPage;
    }
    
        	
    private $errorInfo;
    
        /**
    * @return 错误信息
    */
        public function getErrorInfo() {
        return $this->errorInfo;
    }
    
    /**
     * 设置错误信息     
     * @param String $errorInfo     
     * 参数示例：<pre>system error</pre>     
     * 此参数必填     */
    public function setErrorInfo( $errorInfo) {
        $this->errorInfo = $errorInfo;
    }
    
        	
    private $errorCode;
    
        /**
    * @return 错误码
    */
        public function getErrorCode() {
        return $this->errorCode;
    }
    
    /**
     * 设置错误码     
     * @param String $errorCode     
     * 参数示例：<pre>400_1</pre>     
     * 此参数必填     */
    public function setErrorCode( $errorCode) {
        $this->errorCode = $errorCode;
    }
    
        	
    private $resultList;
    
        /**
    * @return 返回结果
    */
        public function getResultList() {
        return $this->resultList;
    }
    
    /**
     * 设置返回结果     
     * @param array include @see ActivityTopicResult[] $resultList     
     * 参数示例：<pre>{}</pre>     
     * 此参数必填     */
    public function setResultList(ActivityTopicResult $resultList) {
        $this->resultList = $resultList;
    }
    
        	
    private $totalRecords;
    
        /**
    * @return 总数
    */
        public function getTotalRecords() {
        return $this->totalRecords;
    }
    
    /**
     * 设置总数     
     * @param Integer $totalRecords     
     * 参数示例：<pre>200</pre>     
     * 此参数必填     */
    public function setTotalRecords( $totalRecords) {
        $this->totalRecords = $totalRecords;
    }
    
        	
    private $success;
    
        /**
    * @return 是否成功
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置是否成功     
     * @param Boolean $success     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
        	
    private $pageIndex;
    
        /**
    * @return 当时页码
    */
        public function getPageIndex() {
        return $this->pageIndex;
    }
    
    /**
     * 设置当时页码     
     * @param Integer $pageIndex     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setPageIndex( $pageIndex) {
        $this->pageIndex = $pageIndex;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "sizePerPage", $this->stdResult )) {
    				$this->sizePerPage = $this->stdResult->{"sizePerPage"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorInfo", $this->stdResult )) {
    				$this->errorInfo = $this->stdResult->{"errorInfo"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorCode", $this->stdResult )) {
    				$this->errorCode = $this->stdResult->{"errorCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "resultList", $this->stdResult )) {
    			$resultListResult=$this->stdResult->{"resultList"};
    				$object = json_decode ( json_encode ( $resultListResult ), true );
					$this->resultList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$ActivityTopicResultResult=new ActivityTopicResult();
						$ActivityTopicResultResult->setArrayResult($arrayobject );
						$this->resultList [$i] = $ActivityTopicResultResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "totalRecords", $this->stdResult )) {
    				$this->totalRecords = $this->stdResult->{"totalRecords"};
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    				    			    			if (array_key_exists ( "pageIndex", $this->stdResult )) {
    				$this->pageIndex = $this->stdResult->{"pageIndex"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "sizePerPage", $this->arrayResult )) {
    			$this->sizePerPage = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorInfo", $this->arrayResult )) {
    			$this->errorInfo = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorCode", $this->arrayResult )) {
    			$this->errorCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "resultList", $this->arrayResult )) {
    		$resultListResult=$arrayResult['${paramType.paramName}'];
    			$this->resultList = new ActivityTopicResult();
    			$this->resultList->setStdResult ( $resultListResult);
    		}
    		    	    			    		    			if (array_key_exists ( "totalRecords", $this->arrayResult )) {
    			$this->totalRecords = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "pageIndex", $this->arrayResult )) {
    			$this->pageIndex = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>