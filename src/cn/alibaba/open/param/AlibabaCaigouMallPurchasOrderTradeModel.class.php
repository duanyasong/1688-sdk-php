<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaCaigouMallCreateTradeOrderParam/AlibabaCaigouMallTradeOrderModel.class.php');
include_once ('AlibabaCaigouMallCreateTradeOrderParam/AlibabaCaigouMallFailTradeOfferModel.class.php');

class AlibabaCaigouMallPurchasOrderTradeModel extends SDKDomain {

       	
    private $purchaseOrderId;
    
        /**
    * @return 采购单ID
    */
        public function getPurchaseOrderId() {
        return $this->purchaseOrderId;
    }
    
    /**
     * 设置采购单ID     
     * @param String $purchaseOrderId     
     * 参数示例：<pre>20193763853</pre>     
     * 此参数必填     */
    public function setPurchaseOrderId( $purchaseOrderId) {
        $this->purchaseOrderId = $purchaseOrderId;
    }
    
        	
    private $title;
    
        /**
    * @return 采购单标题
    */
        public function getTitle() {
        return $this->title;
    }
    
    /**
     * 设置采购单标题     
     * @param String $title     
     * 参数示例：<pre>我是标题</pre>     
     * 此参数必填     */
    public function setTitle( $title) {
        $this->title = $title;
    }
    
        	
    private $successOrderList;
    
        /**
    * @return 订单成功列表
    */
        public function getSuccessOrderList() {
        return $this->successOrderList;
    }
    
    /**
     * 设置订单成功列表     
     * @param array include @see AlibabaCaigouMallTradeOrderModel[] $successOrderList     
     * 参数示例：<pre>[]</pre>     
     * 此参数必填     */
    public function setSuccessOrderList(AlibabaCaigouMallTradeOrderModel $successOrderList) {
        $this->successOrderList = $successOrderList;
    }
    
        	
    private $failOrderList;
    
        /**
    * @return 订单失败列表
    */
        public function getFailOrderList() {
        return $this->failOrderList;
    }
    
    /**
     * 设置订单失败列表     
     * @param array include @see AlibabaCaigouMallFailTradeOfferModel[] $failOrderList     
     * 参数示例：<pre>[]</pre>     
     * 此参数必填     */
    public function setFailOrderList(AlibabaCaigouMallFailTradeOfferModel $failOrderList) {
        $this->failOrderList = $failOrderList;
    }
    
        	
    private $userId;
    
        /**
    * @return 下单用户ID
    */
        public function getUserId() {
        return $this->userId;
    }
    
    /**
     * 设置下单用户ID     
     * @param String $userId     
     * 参数示例：<pre>245464132</pre>     
     * 此参数必填     */
    public function setUserId( $userId) {
        $this->userId = $userId;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "purchaseOrderId", $this->stdResult )) {
    				$this->purchaseOrderId = $this->stdResult->{"purchaseOrderId"};
    			}
    			    		    				    			    			if (array_key_exists ( "title", $this->stdResult )) {
    				$this->title = $this->stdResult->{"title"};
    			}
    			    		    				    			    			if (array_key_exists ( "successOrderList", $this->stdResult )) {
    			$successOrderListResult=$this->stdResult->{"successOrderList"};
    				$object = json_decode ( json_encode ( $successOrderListResult ), true );
					$this->successOrderList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaCaigouMallTradeOrderModelResult=new AlibabaCaigouMallTradeOrderModel();
						$AlibabaCaigouMallTradeOrderModelResult->setArrayResult($arrayobject );
						$this->successOrderList [$i] = $AlibabaCaigouMallTradeOrderModelResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "failOrderList", $this->stdResult )) {
    			$failOrderListResult=$this->stdResult->{"failOrderList"};
    				$object = json_decode ( json_encode ( $failOrderListResult ), true );
					$this->failOrderList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaCaigouMallFailTradeOfferModelResult=new AlibabaCaigouMallFailTradeOfferModel();
						$AlibabaCaigouMallFailTradeOfferModelResult->setArrayResult($arrayobject );
						$this->failOrderList [$i] = $AlibabaCaigouMallFailTradeOfferModelResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "userId", $this->stdResult )) {
    				$this->userId = $this->stdResult->{"userId"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "purchaseOrderId", $this->arrayResult )) {
    			$this->purchaseOrderId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "title", $this->arrayResult )) {
    			$this->title = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "successOrderList", $this->arrayResult )) {
    		$successOrderListResult=$arrayResult['${paramType.paramName}'];
    			$this->successOrderList = new AlibabaCaigouMallTradeOrderModel();
    			$this->successOrderList->setStdResult ( $successOrderListResult);
    		}
    		    	    			    		    		if (array_key_exists ( "failOrderList", $this->arrayResult )) {
    		$failOrderListResult=$arrayResult['${paramType.paramName}'];
    			$this->failOrderList = new AlibabaCaigouMallFailTradeOfferModel();
    			$this->failOrderList->setStdResult ( $failOrderListResult);
    		}
    		    	    			    		    			if (array_key_exists ( "userId", $this->arrayResult )) {
    			$this->userId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>