<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaPaymentOrderBankCreateParam/AlibabaPaymentBankAccountInfo.class.php');

class AlibabaPaymentChannelPreparePayResult extends SDKDomain {

       	
    private $paymentCode;
    
        /**
    * @return 付款识别码
    */
        public function getPaymentCode() {
        return $this->paymentCode;
    }
    
    /**
     * 设置付款识别码     
     * @param String $paymentCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPaymentCode( $paymentCode) {
        $this->paymentCode = $paymentCode;
    }
    
        	
    private $sellerBankAccountInfo;
    
        /**
    * @return 卖家收款银行账号信息
    */
        public function getSellerBankAccountInfo() {
        return $this->sellerBankAccountInfo;
    }
    
    /**
     * 设置卖家收款银行账号信息     
     * @param AlibabaPaymentBankAccountInfo $sellerBankAccountInfo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSellerBankAccountInfo(AlibabaPaymentBankAccountInfo $sellerBankAccountInfo) {
        $this->sellerBankAccountInfo = $sellerBankAccountInfo;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "paymentCode", $this->stdResult )) {
    				$this->paymentCode = $this->stdResult->{"paymentCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "sellerBankAccountInfo", $this->stdResult )) {
    				$sellerBankAccountInfoResult=$this->stdResult->{"sellerBankAccountInfo"};
    				$this->sellerBankAccountInfo = new AlibabaPaymentBankAccountInfo();
    				$this->sellerBankAccountInfo->setStdResult ( $sellerBankAccountInfoResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "paymentCode", $this->arrayResult )) {
    			$this->paymentCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "sellerBankAccountInfo", $this->arrayResult )) {
    		$sellerBankAccountInfoResult=$arrayResult['${paramType.paramName}'];
    			    			$this->sellerBankAccountInfo = new AlibabaPaymentBankAccountInfo();
    			    			$this->sellerBankAccountInfo->setStdResult ( $sellerBankAccountInfoResult);
    		}
    		    	    		}
 
   
}
?>