<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaSearchRelationSupplyParam/AlibabaSearchRelationAccountInfo.class.php');

class AlibabaSearchRelationSupplyResult {

        	
    private $result;
    
        /**
    * @return 返回的卖家信息
    */
        public function getResult() {
        return $this->result;
    }
    
    /**
     * 设置返回的卖家信息     
     * @param array include @see AlibabaSearchRelationAccountInfo[] $result     
          
     * 此参数必填     */
    public function setResult(AlibabaSearchRelationAccountInfo $result) {
        $this->result = $result;
    }
    
        	
    private $errorCode;
    
        /**
    * @return 错误code
    */
        public function getErrorCode() {
        return $this->errorCode;
    }
    
    /**
     * 设置错误code     
     * @param String $errorCode     
          
     * 此参数必填     */
    public function setErrorCode( $errorCode) {
        $this->errorCode = $errorCode;
    }
    
        	
    private $errorMessage;
    
        /**
    * @return 错误描述
    */
        public function getErrorMessage() {
        return $this->errorMessage;
    }
    
    /**
     * 设置错误描述     
     * @param String $errorMessage     
          
     * 此参数必填     */
    public function setErrorMessage( $errorMessage) {
        $this->errorMessage = $errorMessage;
    }
    
        	
    private $pageNum;
    
        /**
    * @return 页数
    */
        public function getPageNum() {
        return $this->pageNum;
    }
    
    /**
     * 设置页数     
     * @param Integer $pageNum     
          
     * 此参数必填     */
    public function setPageNum( $pageNum) {
        $this->pageNum = $pageNum;
    }
    
        	
    private $pageSize;
    
        /**
    * @return 每页返回数
    */
        public function getPageSize() {
        return $this->pageSize;
    }
    
    /**
     * 设置每页返回数     
     * @param Integer $pageSize     
          
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->pageSize = $pageSize;
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
     * @param Long $totalRecords     
          
     * 此参数必填     */
    public function setTotalRecords( $totalRecords) {
        $this->totalRecords = $totalRecords;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "result", $this->stdResult )) {
    			$resultResult=$this->stdResult->{"result"};
    				$object = json_decode ( json_encode ( $resultResult ), true );
					$this->result = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaSearchRelationAccountInfoResult=new AlibabaSearchRelationAccountInfo();
						$AlibabaSearchRelationAccountInfoResult->setArrayResult($arrayobject );
						$this->result [$i] = $AlibabaSearchRelationAccountInfoResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "errorCode", $this->stdResult )) {
    				$this->errorCode = $this->stdResult->{"errorCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorMessage", $this->stdResult )) {
    				$this->errorMessage = $this->stdResult->{"errorMessage"};
    			}
    			    		    				    			    			if (array_key_exists ( "pageNum", $this->stdResult )) {
    				$this->pageNum = $this->stdResult->{"pageNum"};
    			}
    			    		    				    			    			if (array_key_exists ( "pageSize", $this->stdResult )) {
    				$this->pageSize = $this->stdResult->{"pageSize"};
    			}
    			    		    				    			    			if (array_key_exists ( "totalRecords", $this->stdResult )) {
    				$this->totalRecords = $this->stdResult->{"totalRecords"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "result", $this->arrayResult )) {
    		$resultResult=$arrayResult['${paramType.paramName}'];
    			$this->result = new AlibabaSearchRelationAccountInfo();
    			$this->result->setStdResult ( $resultResult);
    		}
    		    	    			    		    			if (array_key_exists ( "errorCode", $this->arrayResult )) {
    			$this->errorCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorMessage", $this->arrayResult )) {
    			$this->errorMessage = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "pageNum", $this->arrayResult )) {
    			$this->pageNum = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "pageSize", $this->arrayResult )) {
    			$this->pageSize = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "totalRecords", $this->arrayResult )) {
    			$this->totalRecords = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>