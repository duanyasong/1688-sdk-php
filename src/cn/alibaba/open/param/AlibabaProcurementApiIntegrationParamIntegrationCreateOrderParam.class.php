<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaCaigouProcurementOrderCreateProcurementOrderParam/AlibabaProcurementApiOrderInteractiveModelBuyerInfo.class.php');
include_once ('AlibabaCaigouProcurementOrderCreateProcurementOrderParam/AlibabaProcurementApiOrderInteractiveModelLogisticsInfo.class.php');

class AlibabaProcurementApiIntegrationParamIntegrationCreateOrderParam extends SDKDomain {

       	
    private $bizScene;
    
        /**
    * @return 业务场景
    */
        public function getBizScene() {
        return $this->bizScene;
    }
    
    /**
     * 设置业务场景     
     * @param String $bizScene     
     * 参数示例：<pre>outersystem</pre>     
     * 此参数必填     */
    public function setBizScene( $bizScene) {
        $this->bizScene = $bizScene;
    }
    
        	
    private $buyerInfo;
    
        /**
    * @return 买家信息
    */
        public function getBuyerInfo() {
        return $this->buyerInfo;
    }
    
    /**
     * 设置买家信息     
     * @param AlibabaProcurementApiOrderInteractiveModelBuyerInfo $buyerInfo     
     * 参数示例：<pre> 无</pre>     
     * 此参数必填     */
    public function setBuyerInfo(AlibabaProcurementApiOrderInteractiveModelBuyerInfo $buyerInfo) {
        $this->buyerInfo = $buyerInfo;
    }
    
        	
    private $buyerMainUserId;
    
        /**
    * @return 买家主账号USER ID
    */
        public function getBuyerMainUserId() {
        return $this->buyerMainUserId;
    }
    
    /**
     * 设置买家主账号USER ID     
     * @param Long $buyerMainUserId     
     * 参数示例：<pre> 无</pre>     
     * 此参数必填     */
    public function setBuyerMainUserId( $buyerMainUserId) {
        $this->buyerMainUserId = $buyerMainUserId;
    }
    
        	
    private $logisticsInfo;
    
        /**
    * @return 物流信息
    */
        public function getLogisticsInfo() {
        return $this->logisticsInfo;
    }
    
    /**
     * 设置物流信息     
     * @param AlibabaProcurementApiOrderInteractiveModelLogisticsInfo $logisticsInfo     
     * 参数示例：<pre> 无</pre>     
     * 此参数必填     */
    public function setLogisticsInfo(AlibabaProcurementApiOrderInteractiveModelLogisticsInfo $logisticsInfo) {
        $this->logisticsInfo = $logisticsInfo;
    }
    
        	
    private $operatorLoginId;
    
        /**
    * @return 操作者登陆账号
    */
        public function getOperatorLoginId() {
        return $this->operatorLoginId;
    }
    
    /**
     * 设置操作者登陆账号     
     * @param String $operatorLoginId     
     * 参数示例：<pre>无 </pre>     
     * 此参数必填     */
    public function setOperatorLoginId( $operatorLoginId) {
        $this->operatorLoginId = $operatorLoginId;
    }
    
        	
    private $operatorName;
    
        /**
    * @return 操作者名称
    */
        public function getOperatorName() {
        return $this->operatorName;
    }
    
    /**
     * 设置操作者名称     
     * @param String $operatorName     
     * 参数示例：<pre> 无</pre>     
     * 此参数必填     */
    public function setOperatorName( $operatorName) {
        $this->operatorName = $operatorName;
    }
    
        	
    private $operatorUserId;
    
        /**
    * @return 操作者USER ID
    */
        public function getOperatorUserId() {
        return $this->operatorUserId;
    }
    
    /**
     * 设置操作者USER ID     
     * @param Long $operatorUserId     
     * 参数示例：<pre> 无</pre>     
     * 此参数必填     */
    public function setOperatorUserId( $operatorUserId) {
        $this->operatorUserId = $operatorUserId;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "bizScene", $this->stdResult )) {
    				$this->bizScene = $this->stdResult->{"bizScene"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerInfo", $this->stdResult )) {
    				$buyerInfoResult=$this->stdResult->{"buyerInfo"};
    				$this->buyerInfo = new AlibabaProcurementApiOrderInteractiveModelBuyerInfo();
    				$this->buyerInfo->setStdResult ( $buyerInfoResult);
    			}
    			    		    				    			    			if (array_key_exists ( "buyerMainUserId", $this->stdResult )) {
    				$this->buyerMainUserId = $this->stdResult->{"buyerMainUserId"};
    			}
    			    		    				    			    			if (array_key_exists ( "logisticsInfo", $this->stdResult )) {
    				$logisticsInfoResult=$this->stdResult->{"logisticsInfo"};
    				$this->logisticsInfo = new AlibabaProcurementApiOrderInteractiveModelLogisticsInfo();
    				$this->logisticsInfo->setStdResult ( $logisticsInfoResult);
    			}
    			    		    				    			    			if (array_key_exists ( "operatorLoginId", $this->stdResult )) {
    				$this->operatorLoginId = $this->stdResult->{"operatorLoginId"};
    			}
    			    		    				    			    			if (array_key_exists ( "operatorName", $this->stdResult )) {
    				$this->operatorName = $this->stdResult->{"operatorName"};
    			}
    			    		    				    			    			if (array_key_exists ( "operatorUserId", $this->stdResult )) {
    				$this->operatorUserId = $this->stdResult->{"operatorUserId"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "bizScene", $this->arrayResult )) {
    			$this->bizScene = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "buyerInfo", $this->arrayResult )) {
    		$buyerInfoResult=$arrayResult['${paramType.paramName}'];
    			    			$this->buyerInfo = new AlibabaProcurementApiOrderInteractiveModelBuyerInfo();
    			    			$this->buyerInfo->setStdResult ( $buyerInfoResult);
    		}
    		    	    			    		    			if (array_key_exists ( "buyerMainUserId", $this->arrayResult )) {
    			$this->buyerMainUserId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "logisticsInfo", $this->arrayResult )) {
    		$logisticsInfoResult=$arrayResult['${paramType.paramName}'];
    			    			$this->logisticsInfo = new AlibabaProcurementApiOrderInteractiveModelLogisticsInfo();
    			    			$this->logisticsInfo->setStdResult ( $logisticsInfoResult);
    		}
    		    	    			    		    			if (array_key_exists ( "operatorLoginId", $this->arrayResult )) {
    			$this->operatorLoginId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "operatorName", $this->arrayResult )) {
    			$this->operatorName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "operatorUserId", $this->arrayResult )) {
    			$this->operatorUserId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>