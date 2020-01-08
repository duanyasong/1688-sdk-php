<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaTradeSaleproxyPreorderParam/AlibabaTradeSimpleBuyer.class.php');
include_once ('AlibabaTradeSaleproxyPreorderParam/AlibabaTradeOrderViewModel.class.php');
include_once ('AlibabaTradeSaleproxyPreorderParam/AlibabaTradeReceiveAddress.class.php');
include_once ('AlibabaTradeSaleproxyPreorderParam/AlibabaTradeResultCodeDef.class.php');

class AlibabaTradeOrderMutilViewResult extends SDKDomain {

       	
    private $buyer;
    
        /**
    * @return 
    */
        public function getBuyer() {
        return $this->buyer;
    }
    
    /**
     * 设置     
     * @param AlibabaTradeSimpleBuyer $buyer     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyer(AlibabaTradeSimpleBuyer $buyer) {
        $this->buyer = $buyer;
    }
    
        	
    private $orderModels;
    
        /**
    * @return 
    */
        public function getOrderModels() {
        return $this->orderModels;
    }
    
    /**
     * 设置     
     * @param array include @see AlibabaTradeOrderViewModel[] $orderModels     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderModels(AlibabaTradeOrderViewModel $orderModels) {
        $this->orderModels = $orderModels;
    }
    
        	
    private $receiveAddress;
    
        /**
    * @return 
    */
        public function getReceiveAddress() {
        return $this->receiveAddress;
    }
    
    /**
     * 设置     
     * @param AlibabaTradeReceiveAddress $receiveAddress     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setReceiveAddress(AlibabaTradeReceiveAddress $receiveAddress) {
        $this->receiveAddress = $receiveAddress;
    }
    
        	
    private $resultCode;
    
        /**
    * @return 
    */
        public function getResultCode() {
        return $this->resultCode;
    }
    
    /**
     * 设置     
     * @param AlibabaTradeResultCodeDef $resultCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setResultCode(AlibabaTradeResultCodeDef $resultCode) {
        $this->resultCode = $resultCode;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "buyer", $this->stdResult )) {
    				$buyerResult=$this->stdResult->{"buyer"};
    				$this->buyer = new AlibabaTradeSimpleBuyer();
    				$this->buyer->setStdResult ( $buyerResult);
    			}
    			    		    				    			    			if (array_key_exists ( "orderModels", $this->stdResult )) {
    			$orderModelsResult=$this->stdResult->{"orderModels"};
    				$object = json_decode ( json_encode ( $orderModelsResult ), true );
					$this->orderModels = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaTradeOrderViewModelResult=new AlibabaTradeOrderViewModel();
						$AlibabaTradeOrderViewModelResult->setArrayResult($arrayobject );
						$this->orderModels [$i] = $AlibabaTradeOrderViewModelResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "receiveAddress", $this->stdResult )) {
    				$receiveAddressResult=$this->stdResult->{"receiveAddress"};
    				$this->receiveAddress = new AlibabaTradeReceiveAddress();
    				$this->receiveAddress->setStdResult ( $receiveAddressResult);
    			}
    			    		    				    			    			if (array_key_exists ( "resultCode", $this->stdResult )) {
    				$resultCodeResult=$this->stdResult->{"resultCode"};
    				$this->resultCode = new AlibabaTradeResultCodeDef();
    				$this->resultCode->setStdResult ( $resultCodeResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "buyer", $this->arrayResult )) {
    		$buyerResult=$arrayResult['${paramType.paramName}'];
    			    			$this->buyer = new AlibabaTradeSimpleBuyer();
    			    			$this->buyer->setStdResult ( $buyerResult);
    		}
    		    	    			    		    		if (array_key_exists ( "orderModels", $this->arrayResult )) {
    		$orderModelsResult=$arrayResult['${paramType.paramName}'];
    			$this->orderModels = new AlibabaTradeOrderViewModel();
    			$this->orderModels->setStdResult ( $orderModelsResult);
    		}
    		    	    			    		    		if (array_key_exists ( "receiveAddress", $this->arrayResult )) {
    		$receiveAddressResult=$arrayResult['${paramType.paramName}'];
    			    			$this->receiveAddress = new AlibabaTradeReceiveAddress();
    			    			$this->receiveAddress->setStdResult ( $receiveAddressResult);
    		}
    		    	    			    		    		if (array_key_exists ( "resultCode", $this->arrayResult )) {
    		$resultCodeResult=$arrayResult['${paramType.paramName}'];
    			    			$this->resultCode = new AlibabaTradeResultCodeDef();
    			    			$this->resultCode->setStdResult ( $resultCodeResult);
    		}
    		    	    		}
 
   
}
?>