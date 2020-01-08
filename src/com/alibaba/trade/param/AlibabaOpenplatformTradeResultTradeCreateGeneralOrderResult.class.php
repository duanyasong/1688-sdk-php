<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaTradeSaleproxyCreateOrderParam/AlibabaOpenplatformTradeBizOrderCommitResult.class.php');
include_once ('AlibabaTradeSaleproxyCreateOrderParam/AlibabaOpenplatformTradeBizMutilOrderPublicData.class.php');
include_once ('AlibabaTradeSaleproxyCreateOrderParam/AlibabaOpenplatformTradeResultCodeDef.class.php');
include_once ('AlibabaTradeSaleproxyCreateOrderParam/AlibabaOpenplatformTradeKeyValuePairBizOrderCommitResult.class.php');
include_once ('AlibabaTradeSaleproxyCreateOrderParam/AlibabaOpenplatformTradeKeyValuePairBizOrderCommitResult.class.php');

class AlibabaOpenplatformTradeResultTradeCreateGeneralOrderResult extends SDKDomain {

       	
    private $success;
    
        /**
    * @return 是否成功
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置是否成功     
     * @param Boolean $success     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
        	
    private $totalSuccessAmount;
    
        /**
    * @return 下单成功的订单总金额
    */
        public function getTotalSuccessAmount() {
        return $this->totalSuccessAmount;
    }
    
    /**
     * 设置下单成功的订单总金额     
     * @param Long $totalSuccessAmount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTotalSuccessAmount( $totalSuccessAmount) {
        $this->totalSuccessAmount = $totalSuccessAmount;
    }
    
        	
    private $commitResults;
    
        /**
    * @return 多订单提交后的处理结果.
    */
        public function getCommitResults() {
        return $this->commitResults;
    }
    
    /**
     * 设置多订单提交后的处理结果.     
     * @param array include @see AlibabaOpenplatformTradeBizOrderCommitResult[] $commitResults     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCommitResults(AlibabaOpenplatformTradeBizOrderCommitResult $commitResults) {
        $this->commitResults = $commitResults;
    }
    
        	
    private $mutilOrderPublicData;
    
        /**
    * @return 多订单共有数据属性
    */
        public function getMutilOrderPublicData() {
        return $this->mutilOrderPublicData;
    }
    
    /**
     * 设置多订单共有数据属性     
     * @param AlibabaOpenplatformTradeBizMutilOrderPublicData $mutilOrderPublicData     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMutilOrderPublicData(AlibabaOpenplatformTradeBizMutilOrderPublicData $mutilOrderPublicData) {
        $this->mutilOrderPublicData = $mutilOrderPublicData;
    }
    
        	
    private $resultCode;
    
        /**
    * @return 错误码
    */
        public function getResultCode() {
        return $this->resultCode;
    }
    
    /**
     * 设置错误码     
     * @param AlibabaOpenplatformTradeResultCodeDef $resultCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setResultCode(AlibabaOpenplatformTradeResultCodeDef $resultCode) {
        $this->resultCode = $resultCode;
    }
    
        	
    private $failOrderMap;
    
        /**
    * @return 处理失败的订单块.
    */
        public function getFailOrderMap() {
        return $this->failOrderMap;
    }
    
    /**
     * 设置处理失败的订单块.     
     * @param array include @see AlibabaOpenplatformTradeKeyValuePairBizOrderCommitResult[] $failOrderMap     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFailOrderMap(AlibabaOpenplatformTradeKeyValuePairBizOrderCommitResult $failOrderMap) {
        $this->failOrderMap = $failOrderMap;
    }
    
        	
    private $successOrderMap;
    
        /**
    * @return 处理成功的订单块.
    */
        public function getSuccessOrderMap() {
        return $this->successOrderMap;
    }
    
    /**
     * 设置处理成功的订单块.     
     * @param array include @see AlibabaOpenplatformTradeKeyValuePairBizOrderCommitResult[] $successOrderMap     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSuccessOrderMap(AlibabaOpenplatformTradeKeyValuePairBizOrderCommitResult $successOrderMap) {
        $this->successOrderMap = $successOrderMap;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    				    			    			if (array_key_exists ( "totalSuccessAmount", $this->stdResult )) {
    				$this->totalSuccessAmount = $this->stdResult->{"totalSuccessAmount"};
    			}
    			    		    				    			    			if (array_key_exists ( "commitResults", $this->stdResult )) {
    			$commitResultsResult=$this->stdResult->{"commitResults"};
    				$object = json_decode ( json_encode ( $commitResultsResult ), true );
					$this->commitResults = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaOpenplatformTradeBizOrderCommitResultResult=new AlibabaOpenplatformTradeBizOrderCommitResult();
						$AlibabaOpenplatformTradeBizOrderCommitResultResult->setArrayResult($arrayobject );
						$this->commitResults [$i] = $AlibabaOpenplatformTradeBizOrderCommitResultResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "mutilOrderPublicData", $this->stdResult )) {
    				$mutilOrderPublicDataResult=$this->stdResult->{"mutilOrderPublicData"};
    				$this->mutilOrderPublicData = new AlibabaOpenplatformTradeBizMutilOrderPublicData();
    				$this->mutilOrderPublicData->setStdResult ( $mutilOrderPublicDataResult);
    			}
    			    		    				    			    			if (array_key_exists ( "resultCode", $this->stdResult )) {
    				$resultCodeResult=$this->stdResult->{"resultCode"};
    				$this->resultCode = new AlibabaOpenplatformTradeResultCodeDef();
    				$this->resultCode->setStdResult ( $resultCodeResult);
    			}
    			    		    				    			    			if (array_key_exists ( "failOrderMap", $this->stdResult )) {
    			$failOrderMapResult=$this->stdResult->{"failOrderMap"};
    				$object = json_decode ( json_encode ( $failOrderMapResult ), true );
					$this->failOrderMap = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaOpenplatformTradeKeyValuePairBizOrderCommitResultResult=new AlibabaOpenplatformTradeKeyValuePairBizOrderCommitResult();
						$AlibabaOpenplatformTradeKeyValuePairBizOrderCommitResultResult->setArrayResult($arrayobject );
						$this->failOrderMap [$i] = $AlibabaOpenplatformTradeKeyValuePairBizOrderCommitResultResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "successOrderMap", $this->stdResult )) {
    			$successOrderMapResult=$this->stdResult->{"successOrderMap"};
    				$object = json_decode ( json_encode ( $successOrderMapResult ), true );
					$this->successOrderMap = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaOpenplatformTradeKeyValuePairBizOrderCommitResultResult=new AlibabaOpenplatformTradeKeyValuePairBizOrderCommitResult();
						$AlibabaOpenplatformTradeKeyValuePairBizOrderCommitResultResult->setArrayResult($arrayobject );
						$this->successOrderMap [$i] = $AlibabaOpenplatformTradeKeyValuePairBizOrderCommitResultResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "totalSuccessAmount", $this->arrayResult )) {
    			$this->totalSuccessAmount = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "commitResults", $this->arrayResult )) {
    		$commitResultsResult=$arrayResult['${paramType.paramName}'];
    			$this->commitResults = new AlibabaOpenplatformTradeBizOrderCommitResult();
    			$this->commitResults->setStdResult ( $commitResultsResult);
    		}
    		    	    			    		    		if (array_key_exists ( "mutilOrderPublicData", $this->arrayResult )) {
    		$mutilOrderPublicDataResult=$arrayResult['${paramType.paramName}'];
    			    			$this->mutilOrderPublicData = new AlibabaOpenplatformTradeBizMutilOrderPublicData();
    			    			$this->mutilOrderPublicData->setStdResult ( $mutilOrderPublicDataResult);
    		}
    		    	    			    		    		if (array_key_exists ( "resultCode", $this->arrayResult )) {
    		$resultCodeResult=$arrayResult['${paramType.paramName}'];
    			    			$this->resultCode = new AlibabaOpenplatformTradeResultCodeDef();
    			    			$this->resultCode->setStdResult ( $resultCodeResult);
    		}
    		    	    			    		    		if (array_key_exists ( "failOrderMap", $this->arrayResult )) {
    		$failOrderMapResult=$arrayResult['${paramType.paramName}'];
    			$this->failOrderMap = new AlibabaOpenplatformTradeKeyValuePairBizOrderCommitResult();
    			$this->failOrderMap->setStdResult ( $failOrderMapResult);
    		}
    		    	    			    		    		if (array_key_exists ( "successOrderMap", $this->arrayResult )) {
    		$successOrderMapResult=$arrayResult['${paramType.paramName}'];
    			$this->successOrderMap = new AlibabaOpenplatformTradeKeyValuePairBizOrderCommitResult();
    			$this->successOrderMap->setStdResult ( $successOrderMapResult);
    		}
    		    	    		}
 
   
}
?>