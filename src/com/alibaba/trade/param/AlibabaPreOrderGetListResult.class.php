<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaPreOrderGetListParam/AlibabaPreOrderInfo.class.php');

class AlibabaPreOrderGetListResult {

        	
    private $orderList;
    
        /**
    * @return 预订单列表
    */
        public function getOrderList() {
        return $this->orderList;
    }
    
    /**
     * 设置预订单列表     
     * @param array include @see AlibabaPreOrderInfo[] $orderList     
          
     * 此参数必填     */
    public function setOrderList(AlibabaPreOrderInfo $orderList) {
        $this->orderList = $orderList;
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
          
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
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
          
     * 此参数必填     */
    public function setErrorCode( $errorCode) {
        $this->errorCode = $errorCode;
    }
    
        	
    private $errorMsg;
    
        /**
    * @return 错误信息
    */
        public function getErrorMsg() {
        return $this->errorMsg;
    }
    
    /**
     * 设置错误信息     
     * @param String $errorMsg     
          
     * 此参数必填     */
    public function setErrorMsg( $errorMsg) {
        $this->errorMsg = $errorMsg;
    }
    
        	
    private $totalCount;
    
        /**
    * @return 总数量
    */
        public function getTotalCount() {
        return $this->totalCount;
    }
    
    /**
     * 设置总数量     
     * @param Integer $totalCount     
          
     * 此参数必填     */
    public function setTotalCount( $totalCount) {
        $this->totalCount = $totalCount;
    }
    
        	
    private $pageIndex;
    
        /**
    * @return 当前页码
    */
        public function getPageIndex() {
        return $this->pageIndex;
    }
    
    /**
     * 设置当前页码     
     * @param Integer $pageIndex     
          
     * 此参数必填     */
    public function setPageIndex( $pageIndex) {
        $this->pageIndex = $pageIndex;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "orderList", $this->stdResult )) {
    			$orderListResult=$this->stdResult->{"orderList"};
    				$object = json_decode ( json_encode ( $orderListResult ), true );
					$this->orderList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaPreOrderInfoResult=new AlibabaPreOrderInfo();
						$AlibabaPreOrderInfoResult->setArrayResult($arrayobject );
						$this->orderList [$i] = $AlibabaPreOrderInfoResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorCode", $this->stdResult )) {
    				$this->errorCode = $this->stdResult->{"errorCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorMsg", $this->stdResult )) {
    				$this->errorMsg = $this->stdResult->{"errorMsg"};
    			}
    			    		    				    			    			if (array_key_exists ( "totalCount", $this->stdResult )) {
    				$this->totalCount = $this->stdResult->{"totalCount"};
    			}
    			    		    				    			    			if (array_key_exists ( "pageIndex", $this->stdResult )) {
    				$this->pageIndex = $this->stdResult->{"pageIndex"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "orderList", $this->arrayResult )) {
    		$orderListResult=$arrayResult['${paramType.paramName}'];
    			$this->orderList = new AlibabaPreOrderInfo();
    			$this->orderList->setStdResult ( $orderListResult);
    		}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorCode", $this->arrayResult )) {
    			$this->errorCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorMsg", $this->arrayResult )) {
    			$this->errorMsg = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "totalCount", $this->arrayResult )) {
    			$this->totalCount = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "pageIndex", $this->arrayResult )) {
    			$this->pageIndex = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>