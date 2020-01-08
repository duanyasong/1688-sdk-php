<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaProductSellerGetParam/AlibabaProductSellerInfo.class.php');

class AlibabaProductSellerGetResult {

        	
    private $sellerInfoList;
    
        /**
    * @return 卖家信息列表
    */
        public function getSellerInfoList() {
        return $this->sellerInfoList;
    }
    
    /**
     * 设置卖家信息列表     
     * @param array include @see AlibabaProductSellerInfo[] $sellerInfoList     
          
     * 此参数必填     */
    public function setSellerInfoList(AlibabaProductSellerInfo $sellerInfoList) {
        $this->sellerInfoList = $sellerInfoList;
    }
    
        	
    private $success;
    
        /**
    * @return 是否调用成功
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置是否调用成功     
     * @param Boolean $success     
          
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
        	
    private $errMsg;
    
        /**
    * @return 错误信息
    */
        public function getErrMsg() {
        return $this->errMsg;
    }
    
    /**
     * 设置错误信息     
     * @param String $errMsg     
          
     * 此参数必填     */
    public function setErrMsg( $errMsg) {
        $this->errMsg = $errMsg;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "sellerInfoList", $this->stdResult )) {
    			$sellerInfoListResult=$this->stdResult->{"sellerInfoList"};
    				$object = json_decode ( json_encode ( $sellerInfoListResult ), true );
					$this->sellerInfoList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaProductSellerInfoResult=new AlibabaProductSellerInfo();
						$AlibabaProductSellerInfoResult->setArrayResult($arrayobject );
						$this->sellerInfoList [$i] = $AlibabaProductSellerInfoResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    				    			    			if (array_key_exists ( "errMsg", $this->stdResult )) {
    				$this->errMsg = $this->stdResult->{"errMsg"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "sellerInfoList", $this->arrayResult )) {
    		$sellerInfoListResult=$arrayResult['${paramType.paramName}'];
    			$this->sellerInfoList = new AlibabaProductSellerInfo();
    			$this->sellerInfoList->setStdResult ( $sellerInfoListResult);
    		}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "errMsg", $this->arrayResult )) {
    			$this->errMsg = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>