<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaCaigouMallCreateTradeOrderParam/AlibabaCaigouMallOpenInvoiceHeadParam.class.php');
include_once ('AlibabaCaigouMallCreateTradeOrderParam/AlibabaCaigouMallOpenReceiveAddressParam.class.php');

class AlibabaCaigouMallOpenInvoiceParam extends SDKDomain {

       	
    private $invoiceType;
    
        /**
    * @return 发票类型
    */
        public function getInvoiceType() {
        return $this->invoiceType;
    }
    
    /**
     * 设置发票类型     
     * @param String $invoiceType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInvoiceType( $invoiceType) {
        $this->invoiceType = $invoiceType;
    }
    
        	
    private $invoiceHead;
    
        /**
    * @return 发票抬头
    */
        public function getInvoiceHead() {
        return $this->invoiceHead;
    }
    
    /**
     * 设置发票抬头     
     * @param AlibabaCaigouMallOpenInvoiceHeadParam $invoiceHead     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInvoiceHead(AlibabaCaigouMallOpenInvoiceHeadParam $invoiceHead) {
        $this->invoiceHead = $invoiceHead;
    }
    
        	
    private $receiveAddress;
    
        /**
    * @return 临时邮寄地址
    */
        public function getReceiveAddress() {
        return $this->receiveAddress;
    }
    
    /**
     * 设置临时邮寄地址     
     * @param AlibabaCaigouMallOpenReceiveAddressParam $receiveAddress     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setReceiveAddress(AlibabaCaigouMallOpenReceiveAddressParam $receiveAddress) {
        $this->receiveAddress = $receiveAddress;
    }
    
        	
    private $invoiceHeadUseExists;
    
        /**
    * @return 如果发票抬头已经存在（根据title判断）是否使用默认的发票抬头
    */
        public function getInvoiceHeadUseExists() {
        return $this->invoiceHeadUseExists;
    }
    
    /**
     * 设置如果发票抬头已经存在（根据title判断）是否使用默认的发票抬头     
     * @param Boolean $invoiceHeadUseExists     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInvoiceHeadUseExists( $invoiceHeadUseExists) {
        $this->invoiceHeadUseExists = $invoiceHeadUseExists;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "invoiceType", $this->stdResult )) {
    				$this->invoiceType = $this->stdResult->{"invoiceType"};
    			}
    			    		    				    			    			if (array_key_exists ( "invoiceHead", $this->stdResult )) {
    				$invoiceHeadResult=$this->stdResult->{"invoiceHead"};
    				$this->invoiceHead = new AlibabaCaigouMallOpenInvoiceHeadParam();
    				$this->invoiceHead->setStdResult ( $invoiceHeadResult);
    			}
    			    		    				    			    			if (array_key_exists ( "receiveAddress", $this->stdResult )) {
    				$receiveAddressResult=$this->stdResult->{"receiveAddress"};
    				$this->receiveAddress = new AlibabaCaigouMallOpenReceiveAddressParam();
    				$this->receiveAddress->setStdResult ( $receiveAddressResult);
    			}
    			    		    				    			    			if (array_key_exists ( "invoiceHeadUseExists", $this->stdResult )) {
    				$this->invoiceHeadUseExists = $this->stdResult->{"invoiceHeadUseExists"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "invoiceType", $this->arrayResult )) {
    			$this->invoiceType = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "invoiceHead", $this->arrayResult )) {
    		$invoiceHeadResult=$arrayResult['${paramType.paramName}'];
    			    			$this->invoiceHead = new AlibabaCaigouMallOpenInvoiceHeadParam();
    			    			$this->invoiceHead->setStdResult ( $invoiceHeadResult);
    		}
    		    	    			    		    		if (array_key_exists ( "receiveAddress", $this->arrayResult )) {
    		$receiveAddressResult=$arrayResult['${paramType.paramName}'];
    			    			$this->receiveAddress = new AlibabaCaigouMallOpenReceiveAddressParam();
    			    			$this->receiveAddress->setStdResult ( $receiveAddressResult);
    		}
    		    	    			    		    			if (array_key_exists ( "invoiceHeadUseExists", $this->arrayResult )) {
    			$this->invoiceHeadUseExists = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>