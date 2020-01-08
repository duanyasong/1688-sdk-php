<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaBulksettlementOpBulkSettlementReceiveGoodsParam/AlibabaBulksettlementOpBulkSettlementSubOrderInfo.class.php');

class AlibabaBulksettlementOpBulkSettlementRefundInfo extends SDKDomain {

       	
    private $refundId;
    
        /**
    * @return 退款单号
    */
        public function getRefundId() {
        return $this->refundId;
    }
    
    /**
     * 设置退款单号     
     * @param String $refundId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRefundId( $refundId) {
        $this->refundId = $refundId;
    }
    
        	
    private $opBulkSettlementSubOrderInfos;
    
        /**
    * @return 退款单中个子订单信息
    */
        public function getOpBulkSettlementSubOrderInfos() {
        return $this->opBulkSettlementSubOrderInfos;
    }
    
    /**
     * 设置退款单中个子订单信息     
     * @param array include @see AlibabaBulksettlementOpBulkSettlementSubOrderInfo[] $opBulkSettlementSubOrderInfos     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOpBulkSettlementSubOrderInfos(AlibabaBulksettlementOpBulkSettlementSubOrderInfo $opBulkSettlementSubOrderInfos) {
        $this->opBulkSettlementSubOrderInfos = $opBulkSettlementSubOrderInfos;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "refundId", $this->stdResult )) {
    				$this->refundId = $this->stdResult->{"refundId"};
    			}
    			    		    				    			    			if (array_key_exists ( "opBulkSettlementSubOrderInfos", $this->stdResult )) {
    			$opBulkSettlementSubOrderInfosResult=$this->stdResult->{"opBulkSettlementSubOrderInfos"};
    				$object = json_decode ( json_encode ( $opBulkSettlementSubOrderInfosResult ), true );
					$this->opBulkSettlementSubOrderInfos = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaBulksettlementOpBulkSettlementSubOrderInfoResult=new AlibabaBulksettlementOpBulkSettlementSubOrderInfo();
						$AlibabaBulksettlementOpBulkSettlementSubOrderInfoResult->setArrayResult($arrayobject );
						$this->opBulkSettlementSubOrderInfos [$i] = $AlibabaBulksettlementOpBulkSettlementSubOrderInfoResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "refundId", $this->arrayResult )) {
    			$this->refundId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "opBulkSettlementSubOrderInfos", $this->arrayResult )) {
    		$opBulkSettlementSubOrderInfosResult=$arrayResult['${paramType.paramName}'];
    			$this->opBulkSettlementSubOrderInfos = new AlibabaBulksettlementOpBulkSettlementSubOrderInfo();
    			$this->opBulkSettlementSubOrderInfos->setStdResult ( $opBulkSettlementSubOrderInfosResult);
    		}
    		    	    		}
 
   
}
?>