<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaAgentProductSimpleGetParam/AlibabaProductProductInfo.class.php');
include_once ('AlibabaAgentProductSimpleGetParam/AlibabaProductProductBizGroupInfo.class.php');

class AlibabaAgentProductSimpleGetResult {

        	
    private $productInfo;
    
        /**
    * @return 商品详细信息
    */
        public function getProductInfo() {
        return $this->productInfo;
    }
    
    /**
     * 设置商品详细信息     
     * @param AlibabaProductProductInfo $productInfo     
          
     * 此参数必填     */
    public function setProductInfo(AlibabaProductProductInfo $productInfo) {
        $this->productInfo = $productInfo;
    }
    
        	
    private $bizGroupInfos;
    
        /**
    * @return 产品业务的支持信息,support为false说明不支持.
    */
        public function getBizGroupInfos() {
        return $this->bizGroupInfos;
    }
    
    /**
     * 设置产品业务的支持信息,support为false说明不支持.     
     * @param array include @see AlibabaProductProductBizGroupInfo[] $bizGroupInfos     
          
     * 此参数必填     */
    public function setBizGroupInfos(AlibabaProductProductBizGroupInfo $bizGroupInfos) {
        $this->bizGroupInfos = $bizGroupInfos;
    }
    
        	
    private $errMsg;
    
        /**
    * @return 返回错误信息
    */
        public function getErrMsg() {
        return $this->errMsg;
    }
    
    /**
     * 设置返回错误信息     
     * @param String $errMsg     
          
     * 此参数必填     */
    public function setErrMsg( $errMsg) {
        $this->errMsg = $errMsg;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
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
    			    		    				    			    			if (array_key_exists ( "errMsg", $this->stdResult )) {
    				$this->errMsg = $this->stdResult->{"errMsg"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
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
    		    	    			    		    			if (array_key_exists ( "errMsg", $this->arrayResult )) {
    			$this->errMsg = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>