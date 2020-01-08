<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaCouponReadParam/AlibabaCouponOpenProductCoupon.class.php');

class AlibabaCouponReadResult {

        	
    private $couponResource;
    
        /**
    * @return 优惠券信息
    */
        public function getCouponResource() {
        return $this->couponResource;
    }
    
    /**
     * 设置优惠券信息     
     * @param array include @see AlibabaCouponOpenProductCoupon[] $couponResource     
          
     * 此参数必填     */
    public function setCouponResource(AlibabaCouponOpenProductCoupon $couponResource) {
        $this->couponResource = $couponResource;
    }
    
        	
    private $sizePerPage;
    
        /**
    * @return 每页大小
    */
        public function getSizePerPage() {
        return $this->sizePerPage;
    }
    
    /**
     * 设置每页大小     
     * @param Integer $sizePerPage     
          
     * 此参数必填     */
    public function setSizePerPage( $sizePerPage) {
        $this->sizePerPage = $sizePerPage;
    }
    
        	
    private $pageIndex;
    
        /**
    * @return 当前页从0开始
    */
        public function getPageIndex() {
        return $this->pageIndex;
    }
    
    /**
     * 设置当前页从0开始     
     * @param Integer $pageIndex     
          
     * 此参数必填     */
    public function setPageIndex( $pageIndex) {
        $this->pageIndex = $pageIndex;
    }
    
        	
    private $totalRecords;
    
        /**
    * @return 记录总数
    */
        public function getTotalRecords() {
        return $this->totalRecords;
    }
    
    /**
     * 设置记录总数     
     * @param Integer $totalRecords     
          
     * 此参数必填     */
    public function setTotalRecords( $totalRecords) {
        $this->totalRecords = $totalRecords;
    }
    
        	
    private $success;
    
        /**
    * @return 是否查询成功
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置是否查询成功     
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
          
     * 此参数必填     */
    public function setErrorInfo( $errorInfo) {
        $this->errorInfo = $errorInfo;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "couponResource", $this->stdResult )) {
    			$couponResourceResult=$this->stdResult->{"couponResource"};
    				$object = json_decode ( json_encode ( $couponResourceResult ), true );
					$this->couponResource = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaCouponOpenProductCouponResult=new AlibabaCouponOpenProductCoupon();
						$AlibabaCouponOpenProductCouponResult->setArrayResult($arrayobject );
						$this->couponResource [$i] = $AlibabaCouponOpenProductCouponResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "sizePerPage", $this->stdResult )) {
    				$this->sizePerPage = $this->stdResult->{"sizePerPage"};
    			}
    			    		    				    			    			if (array_key_exists ( "pageIndex", $this->stdResult )) {
    				$this->pageIndex = $this->stdResult->{"pageIndex"};
    			}
    			    		    				    			    			if (array_key_exists ( "totalRecords", $this->stdResult )) {
    				$this->totalRecords = $this->stdResult->{"totalRecords"};
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorCode", $this->stdResult )) {
    				$this->errorCode = $this->stdResult->{"errorCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorInfo", $this->stdResult )) {
    				$this->errorInfo = $this->stdResult->{"errorInfo"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "couponResource", $this->arrayResult )) {
    		$couponResourceResult=$arrayResult['${paramType.paramName}'];
    			$this->couponResource = new AlibabaCouponOpenProductCoupon();
    			$this->couponResource->setStdResult ( $couponResourceResult);
    		}
    		    	    			    		    			if (array_key_exists ( "sizePerPage", $this->arrayResult )) {
    			$this->sizePerPage = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "pageIndex", $this->arrayResult )) {
    			$this->pageIndex = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "totalRecords", $this->arrayResult )) {
    			$this->totalRecords = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorCode", $this->arrayResult )) {
    			$this->errorCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorInfo", $this->arrayResult )) {
    			$this->errorInfo = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>