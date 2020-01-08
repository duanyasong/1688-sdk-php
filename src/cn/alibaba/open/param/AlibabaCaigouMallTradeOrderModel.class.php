<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaCaigouMallCreateTradeOrderParam/AlibabaCaigouMallTradeOfferModel.class.php');

class AlibabaCaigouMallTradeOrderModel extends SDKDomain {

       	
    private $tradeOrderId;
    
        /**
    * @return 交易订单ID
    */
        public function getTradeOrderId() {
        return $this->tradeOrderId;
    }
    
    /**
     * 设置交易订单ID     
     * @param Long $tradeOrderId     
     * 参数示例：<pre>20195498762225</pre>     
     * 此参数必填     */
    public function setTradeOrderId( $tradeOrderId) {
        $this->tradeOrderId = $tradeOrderId;
    }
    
        	
    private $successOfferList;
    
        /**
    * @return 下单成功商品列表
    */
        public function getSuccessOfferList() {
        return $this->successOfferList;
    }
    
    /**
     * 设置下单成功商品列表     
     * @param array include @see AlibabaCaigouMallTradeOfferModel[] $successOfferList     
     * 参数示例：<pre>[]</pre>     
     * 此参数必填     */
    public function setSuccessOfferList(AlibabaCaigouMallTradeOfferModel $successOfferList) {
        $this->successOfferList = $successOfferList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "tradeOrderId", $this->stdResult )) {
    				$this->tradeOrderId = $this->stdResult->{"tradeOrderId"};
    			}
    			    		    				    			    			if (array_key_exists ( "successOfferList", $this->stdResult )) {
    			$successOfferListResult=$this->stdResult->{"successOfferList"};
    				$object = json_decode ( json_encode ( $successOfferListResult ), true );
					$this->successOfferList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaCaigouMallTradeOfferModelResult=new AlibabaCaigouMallTradeOfferModel();
						$AlibabaCaigouMallTradeOfferModelResult->setArrayResult($arrayobject );
						$this->successOfferList [$i] = $AlibabaCaigouMallTradeOfferModelResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "tradeOrderId", $this->arrayResult )) {
    			$this->tradeOrderId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "successOfferList", $this->arrayResult )) {
    		$successOfferListResult=$arrayResult['${paramType.paramName}'];
    			$this->successOfferList = new AlibabaCaigouMallTradeOfferModel();
    			$this->successOfferList->setStdResult ( $successOfferListResult);
    		}
    		    	    		}
 
   
}
?>