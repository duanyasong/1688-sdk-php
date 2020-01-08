<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaSearchCbuGeneralParam/AlibabaSearchProductSearchResultInfo.class.php');

class AlibabaSearchCbuGeneralResult {

        	
    private $resultList;
    
        /**
    * @return 搜索的返回结果
    */
        public function getResultList() {
        return $this->resultList;
    }
    
    /**
     * 设置搜索的返回结果     
     * @param array include @see AlibabaSearchProductSearchResultInfo[] $resultList     
          
     * 此参数必填     */
    public function setResultList(AlibabaSearchProductSearchResultInfo $resultList) {
        $this->resultList = $resultList;
    }
    
        	
    private $totalRecords;
    
        /**
    * @return 总记录数
    */
        public function getTotalRecords() {
        return $this->totalRecords;
    }
    
    /**
     * 设置总记录数     
     * @param Integer $totalRecords     
          
     * 此参数必填     */
    public function setTotalRecords( $totalRecords) {
        $this->totalRecords = $totalRecords;
    }
    
        	
    private $pageIndex;
    
        /**
    * @return 当前页数
    */
        public function getPageIndex() {
        return $this->pageIndex;
    }
    
    /**
     * 设置当前页数     
     * @param Integer $pageIndex     
          
     * 此参数必填     */
    public function setPageIndex( $pageIndex) {
        $this->pageIndex = $pageIndex;
    }
    
        	
    private $sizePerPage;
    
        /**
    * @return 每页的记录数
    */
        public function getSizePerPage() {
        return $this->sizePerPage;
    }
    
    /**
     * 设置每页的记录数     
     * @param Integer $sizePerPage     
          
     * 此参数必填     */
    public function setSizePerPage( $sizePerPage) {
        $this->sizePerPage = $sizePerPage;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "resultList", $this->stdResult )) {
    			$resultListResult=$this->stdResult->{"resultList"};
    				$object = json_decode ( json_encode ( $resultListResult ), true );
					$this->resultList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaSearchProductSearchResultInfoResult=new AlibabaSearchProductSearchResultInfo();
						$AlibabaSearchProductSearchResultInfoResult->setArrayResult($arrayobject );
						$this->resultList [$i] = $AlibabaSearchProductSearchResultInfoResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "totalRecords", $this->stdResult )) {
    				$this->totalRecords = $this->stdResult->{"totalRecords"};
    			}
    			    		    				    			    			if (array_key_exists ( "pageIndex", $this->stdResult )) {
    				$this->pageIndex = $this->stdResult->{"pageIndex"};
    			}
    			    		    				    			    			if (array_key_exists ( "sizePerPage", $this->stdResult )) {
    				$this->sizePerPage = $this->stdResult->{"sizePerPage"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "resultList", $this->arrayResult )) {
    		$resultListResult=$arrayResult['${paramType.paramName}'];
    			$this->resultList = new AlibabaSearchProductSearchResultInfo();
    			$this->resultList->setStdResult ( $resultListResult);
    		}
    		    	    			    		    			if (array_key_exists ( "totalRecords", $this->arrayResult )) {
    			$this->totalRecords = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "pageIndex", $this->arrayResult )) {
    			$this->pageIndex = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "sizePerPage", $this->arrayResult )) {
    			$this->sizePerPage = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>