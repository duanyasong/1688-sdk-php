<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaCaigouProcurementOrderCreateProcurementOrderParam/AlibabaProcurementApiOrderInteractiveModelDeliveryAddress.class.php');

class AlibabaProcurementApiOrderInteractiveModelLogisticsInfo extends SDKDomain {

       	
    private $address;
    
        /**
    * @return 收货地址
    */
        public function getAddress() {
        return $this->address;
    }
    
    /**
     * 设置收货地址     
     * @param AlibabaProcurementApiOrderInteractiveModelDeliveryAddress $address     
     * 参数示例：<pre> 无</pre>     
     * 此参数必填     */
    public function setAddress(AlibabaProcurementApiOrderInteractiveModelDeliveryAddress $address) {
        $this->address = $address;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "address", $this->stdResult )) {
    				$addressResult=$this->stdResult->{"address"};
    				$this->address = new AlibabaProcurementApiOrderInteractiveModelDeliveryAddress();
    				$this->address->setStdResult ( $addressResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "address", $this->arrayResult )) {
    		$addressResult=$arrayResult['${paramType.paramName}'];
    			    			$this->address = new AlibabaProcurementApiOrderInteractiveModelDeliveryAddress();
    			    			$this->address->setStdResult ( $addressResult);
    		}
    		    	    		}
 
   
}
?>