<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaTradeQuotationOrderCreateParam/AlibabaOpenplatformTradeBizReceiveAddressGroup.class.php');
include_once ('AlibabaTradeQuotationOrderCreateParam/AlibabaOpenplatformTradeBizInvoiceGroup.class.php');
include_once ('AlibabaTradeQuotationOrderCreateParam/AlibabaOpenplatformTradeBizSimpleOtherInfoGroup.class.php');

class AlibabaOpenplatformTradeBizMakeSingleOrderGroup extends SDKDomain {

       	
    private $receiveAddressGroup;
    
        /**
    * @return 收货地址信息
    */
        public function getReceiveAddressGroup() {
        return $this->receiveAddressGroup;
    }
    
    /**
     * 设置收货地址信息     
     * @param AlibabaOpenplatformTradeBizReceiveAddressGroup $receiveAddressGroup     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setReceiveAddressGroup(AlibabaOpenplatformTradeBizReceiveAddressGroup $receiveAddressGroup) {
        $this->receiveAddressGroup = $receiveAddressGroup;
    }
    
        	
    private $invoiceGroup;
    
        /**
    * @return 发票信息
    */
        public function getInvoiceGroup() {
        return $this->invoiceGroup;
    }
    
    /**
     * 设置发票信息     
     * @param AlibabaOpenplatformTradeBizInvoiceGroup $invoiceGroup     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInvoiceGroup(AlibabaOpenplatformTradeBizInvoiceGroup $invoiceGroup) {
        $this->invoiceGroup = $invoiceGroup;
    }
    
        	
    private $otherInfoGroup;
    
        /**
    * @return 其他信息
    */
        public function getOtherInfoGroup() {
        return $this->otherInfoGroup;
    }
    
    /**
     * 设置其他信息     
     * @param AlibabaOpenplatformTradeBizSimpleOtherInfoGroup $otherInfoGroup     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOtherInfoGroup(AlibabaOpenplatformTradeBizSimpleOtherInfoGroup $otherInfoGroup) {
        $this->otherInfoGroup = $otherInfoGroup;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "receiveAddressGroup", $this->stdResult )) {
    				$receiveAddressGroupResult=$this->stdResult->{"receiveAddressGroup"};
    				$this->receiveAddressGroup = new AlibabaOpenplatformTradeBizReceiveAddressGroup();
    				$this->receiveAddressGroup->setStdResult ( $receiveAddressGroupResult);
    			}
    			    		    				    			    			if (array_key_exists ( "invoiceGroup", $this->stdResult )) {
    				$invoiceGroupResult=$this->stdResult->{"invoiceGroup"};
    				$this->invoiceGroup = new AlibabaOpenplatformTradeBizInvoiceGroup();
    				$this->invoiceGroup->setStdResult ( $invoiceGroupResult);
    			}
    			    		    				    			    			if (array_key_exists ( "otherInfoGroup", $this->stdResult )) {
    				$otherInfoGroupResult=$this->stdResult->{"otherInfoGroup"};
    				$this->otherInfoGroup = new AlibabaOpenplatformTradeBizSimpleOtherInfoGroup();
    				$this->otherInfoGroup->setStdResult ( $otherInfoGroupResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "receiveAddressGroup", $this->arrayResult )) {
    		$receiveAddressGroupResult=$arrayResult['${paramType.paramName}'];
    			    			$this->receiveAddressGroup = new AlibabaOpenplatformTradeBizReceiveAddressGroup();
    			    			$this->receiveAddressGroup->setStdResult ( $receiveAddressGroupResult);
    		}
    		    	    			    		    		if (array_key_exists ( "invoiceGroup", $this->arrayResult )) {
    		$invoiceGroupResult=$arrayResult['${paramType.paramName}'];
    			    			$this->invoiceGroup = new AlibabaOpenplatformTradeBizInvoiceGroup();
    			    			$this->invoiceGroup->setStdResult ( $invoiceGroupResult);
    		}
    		    	    			    		    		if (array_key_exists ( "otherInfoGroup", $this->arrayResult )) {
    		$otherInfoGroupResult=$arrayResult['${paramType.paramName}'];
    			    			$this->otherInfoGroup = new AlibabaOpenplatformTradeBizSimpleOtherInfoGroup();
    			    			$this->otherInfoGroup->setStdResult ( $otherInfoGroupResult);
    		}
    		    	    		}
 
   
}
?>