<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaTradeGetLogisticsTraceInfoSellerViewParam/AlibabaLogisticsOpenPlatformLogisticsTrace.class.php');

class AlibabaTradeGetLogisticsTraceInfoSellerViewResult {

        	
    private $logisticsTrace;
    
        /**
    * @return []
    */
        public function getLogisticsTrace() {
        return $this->logisticsTrace;
    }
    
    /**
     * 设置[]     
     * @param array include @see AlibabaLogisticsOpenPlatformLogisticsTrace[] $logisticsTrace     
          
     * 此参数必填     */
    public function setLogisticsTrace(AlibabaLogisticsOpenPlatformLogisticsTrace $logisticsTrace) {
        $this->logisticsTrace = $logisticsTrace;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "logisticsTrace", $this->stdResult )) {
    			$logisticsTraceResult=$this->stdResult->{"logisticsTrace"};
    				$object = json_decode ( json_encode ( $logisticsTraceResult ), true );
					$this->logisticsTrace = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaLogisticsOpenPlatformLogisticsTraceResult=new AlibabaLogisticsOpenPlatformLogisticsTrace();
						$AlibabaLogisticsOpenPlatformLogisticsTraceResult->setArrayResult($arrayobject );
						$this->logisticsTrace [$i] = $AlibabaLogisticsOpenPlatformLogisticsTraceResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "logisticsTrace", $this->arrayResult )) {
    		$logisticsTraceResult=$arrayResult['${paramType.paramName}'];
    			$this->logisticsTrace = new AlibabaLogisticsOpenPlatformLogisticsTrace();
    			$this->logisticsTrace->setStdResult ( $logisticsTraceResult);
    		}
    		    	    		}

}
?>