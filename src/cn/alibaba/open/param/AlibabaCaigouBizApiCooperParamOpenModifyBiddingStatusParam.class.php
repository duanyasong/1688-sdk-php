<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaOpenCaigouApiRequisitionModifyBiddingStatusParam/AlibabaCaigouBizApiCooperParamOpenPurchaseItemParam.class.php');

class AlibabaCaigouBizApiCooperParamOpenModifyBiddingStatusParam extends SDKDomain {

       	
    private $bizType;
    
        /**
    * @return 业务类型
    */
        public function getBizType() {
        return $this->bizType;
    }
    
    /**
     * 设置业务类型     
     * @param String $bizType     
     * 参数示例：<pre>solution</pre>     
     * 此参数必填     */
    public function setBizType( $bizType) {
        $this->bizType = $bizType;
    }
    
        	
    private $operatorLoginId;
    
        /**
    * @return 登录id
    */
        public function getOperatorLoginId() {
        return $this->operatorLoginId;
    }
    
    /**
     * 设置登录id     
     * @param String $operatorLoginId     
     * 参数示例：<pre>foxtest001</pre>     
     * 此参数必填     */
    public function setOperatorLoginId( $operatorLoginId) {
        $this->operatorLoginId = $operatorLoginId;
    }
    
        	
    private $purchaseItemList;
    
        /**
    * @return 行列表
    */
        public function getPurchaseItemList() {
        return $this->purchaseItemList;
    }
    
    /**
     * 设置行列表     
     * @param array include @see AlibabaCaigouBizApiCooperParamOpenPurchaseItemParam[] $purchaseItemList     
     * 参数示例：<pre>null</pre>     
     * 此参数必填     */
    public function setPurchaseItemList(AlibabaCaigouBizApiCooperParamOpenPurchaseItemParam $purchaseItemList) {
        $this->purchaseItemList = $purchaseItemList;
    }
    
        	
    private $purchaseType;
    
        /**
    * @return 采购类型
    */
        public function getPurchaseType() {
        return $this->purchaseType;
    }
    
    /**
     * 设置采购类型     
     * @param String $purchaseType     
     * 参数示例：<pre>bid_item</pre>     
     * 此参数必填     */
    public function setPurchaseType( $purchaseType) {
        $this->purchaseType = $purchaseType;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "bizType", $this->stdResult )) {
    				$this->bizType = $this->stdResult->{"bizType"};
    			}
    			    		    				    			    			if (array_key_exists ( "operatorLoginId", $this->stdResult )) {
    				$this->operatorLoginId = $this->stdResult->{"operatorLoginId"};
    			}
    			    		    				    			    			if (array_key_exists ( "purchaseItemList", $this->stdResult )) {
    			$purchaseItemListResult=$this->stdResult->{"purchaseItemList"};
    				$object = json_decode ( json_encode ( $purchaseItemListResult ), true );
					$this->purchaseItemList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaCaigouBizApiCooperParamOpenPurchaseItemParamResult=new AlibabaCaigouBizApiCooperParamOpenPurchaseItemParam();
						$AlibabaCaigouBizApiCooperParamOpenPurchaseItemParamResult->setArrayResult($arrayobject );
						$this->purchaseItemList [$i] = $AlibabaCaigouBizApiCooperParamOpenPurchaseItemParamResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "purchaseType", $this->stdResult )) {
    				$this->purchaseType = $this->stdResult->{"purchaseType"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "bizType", $this->arrayResult )) {
    			$this->bizType = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "operatorLoginId", $this->arrayResult )) {
    			$this->operatorLoginId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "purchaseItemList", $this->arrayResult )) {
    		$purchaseItemListResult=$arrayResult['${paramType.paramName}'];
    			$this->purchaseItemList = new AlibabaCaigouBizApiCooperParamOpenPurchaseItemParam();
    			$this->purchaseItemList->setStdResult ( $purchaseItemListResult);
    		}
    		    	    			    		    			if (array_key_exists ( "purchaseType", $this->arrayResult )) {
    			$this->purchaseType = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>