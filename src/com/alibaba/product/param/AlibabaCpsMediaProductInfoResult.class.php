<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaCpsMediaProductInfoParam/AlibabaProductProductInfo.class.php');
include_once ('AlibabaCpsMediaProductInfoParam/AlibabaProductProductBizGroupInfo.class.php');

class AlibabaCpsMediaProductInfoResult {

        	
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
    
        	
    private $productInfo;
    
        /**
    * @return 商品详情
    */
        public function getProductInfo() {
        return $this->productInfo;
    }
    
    /**
     * 设置商品详情     
     * @param AlibabaProductProductInfo $productInfo     
          
     * 此参数必填     */
    public function setProductInfo(AlibabaProductProductInfo $productInfo) {
        $this->productInfo = $productInfo;
    }
    
        	
    private $bizGroupInfos;
    
        /**
    * @return 业务信息
    */
        public function getBizGroupInfos() {
        return $this->bizGroupInfos;
    }
    
    /**
     * 设置业务信息     
     * @param array include @see AlibabaProductProductBizGroupInfo[] $bizGroupInfos     
          
     * 此参数必填     */
    public function setBizGroupInfos(AlibabaProductProductBizGroupInfo $bizGroupInfos) {
        $this->bizGroupInfos = $bizGroupInfos;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorCode", $this->stdResult )) {
    				$this->errorCode = $this->stdResult->{"errorCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorMsg", $this->stdResult )) {
    				$this->errorMsg = $this->stdResult->{"errorMsg"};
    			}
    			    		    				    			    			if (array_key_exists ( "productInfo", $this->stdResult )) {
    				$productInfoResult=$this->stdResult->{"productInfo"};
    				$this->productInfo = new AlibabaProductProductInfo();
    				$this->productInfo->setStdResult ( $productInfoResult);
    			}
    			    		    				    			    			if (array_key_exists ( "bizGroupInfos", $this->stdResult )) {
    			$bizGroupInfosResult=$this->stdResult->{"bizGroupInfos"};
    				$object = json_decode ( json_encode ( $bizGroupInfosResult ), true );
					$this->bizGroupInfos = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaProductProductBizGroupInfoResult=new AlibabaProductProductBizGroupInfo();
						$AlibabaProductProductBizGroupInfoResult->setArrayResult($arrayobject );
						$this->bizGroupInfos [$i] = $AlibabaProductProductBizGroupInfoResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorCode", $this->arrayResult )) {
    			$this->errorCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorMsg", $this->arrayResult )) {
    			$this->errorMsg = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "productInfo", $this->arrayResult )) {
    		$productInfoResult=$arrayResult['${paramType.paramName}'];
    			    			$this->productInfo = new AlibabaProductProductInfo();
    			    			$this->productInfo->setStdResult ( $productInfoResult);
    		}
    		    	    			    		    		if (array_key_exists ( "bizGroupInfos", $this->arrayResult )) {
    		$bizGroupInfosResult=$arrayResult['${paramType.paramName}'];
    			$this->bizGroupInfos = new AlibabaProductProductBizGroupInfo();
    			$this->bizGroupInfos->setStdResult ( $bizGroupInfosResult);
    		}
    		    	    		}

}
?>