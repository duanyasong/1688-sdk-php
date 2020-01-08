<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('ComAlibabaProcurementBuyerReturnGoodsServiceCreateReturnGoodsNoteParam/AlibabaProcurementApiReturngoodsIntegrationResultCreateReceiveGoodsNoteEntryResult.class.php');

class AlibabaProcurementApiReturngoodsIntegrationResultCreateReturnGoodsNoteResult extends SDKDomain {

       	
    private $createEntryResults;
    
        /**
    * @return 退货子单处理结果列表
    */
        public function getCreateEntryResults() {
        return $this->createEntryResults;
    }
    
    /**
     * 设置退货子单处理结果列表     
     * @param array include @see AlibabaProcurementApiReturngoodsIntegrationResultCreateReceiveGoodsNoteEntryResult[] $createEntryResults     
     * 参数示例：<pre>null</pre>     
     * 此参数必填     */
    public function setCreateEntryResults(AlibabaProcurementApiReturngoodsIntegrationResultCreateReceiveGoodsNoteEntryResult $createEntryResults) {
        $this->createEntryResults = $createEntryResults;
    }
    
        	
    private $returnGoodsNoteCode;
    
        /**
    * @return 退货单编号
    */
        public function getReturnGoodsNoteCode() {
        return $this->returnGoodsNoteCode;
    }
    
    /**
     * 设置退货单编号     
     * @param String $returnGoodsNoteCode     
     * 参数示例：<pre>2018100100001</pre>     
     * 此参数必填     */
    public function setReturnGoodsNoteCode( $returnGoodsNoteCode) {
        $this->returnGoodsNoteCode = $returnGoodsNoteCode;
    }
    
        	
    private $returnGoodsNoteId;
    
        /**
    * @return 退货单id
    */
        public function getReturnGoodsNoteId() {
        return $this->returnGoodsNoteId;
    }
    
    /**
     * 设置退货单id     
     * @param Long $returnGoodsNoteId     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setReturnGoodsNoteId( $returnGoodsNoteId) {
        $this->returnGoodsNoteId = $returnGoodsNoteId;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "createEntryResults", $this->stdResult )) {
    			$createEntryResultsResult=$this->stdResult->{"createEntryResults"};
    				$object = json_decode ( json_encode ( $createEntryResultsResult ), true );
					$this->createEntryResults = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaProcurementApiReturngoodsIntegrationResultCreateReceiveGoodsNoteEntryResultResult=new AlibabaProcurementApiReturngoodsIntegrationResultCreateReceiveGoodsNoteEntryResult();
						$AlibabaProcurementApiReturngoodsIntegrationResultCreateReceiveGoodsNoteEntryResultResult->setArrayResult($arrayobject );
						$this->createEntryResults [$i] = $AlibabaProcurementApiReturngoodsIntegrationResultCreateReceiveGoodsNoteEntryResultResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "returnGoodsNoteCode", $this->stdResult )) {
    				$this->returnGoodsNoteCode = $this->stdResult->{"returnGoodsNoteCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "returnGoodsNoteId", $this->stdResult )) {
    				$this->returnGoodsNoteId = $this->stdResult->{"returnGoodsNoteId"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "createEntryResults", $this->arrayResult )) {
    		$createEntryResultsResult=$arrayResult['${paramType.paramName}'];
    			$this->createEntryResults = new AlibabaProcurementApiReturngoodsIntegrationResultCreateReceiveGoodsNoteEntryResult();
    			$this->createEntryResults->setStdResult ( $createEntryResultsResult);
    		}
    		    	    			    		    			if (array_key_exists ( "returnGoodsNoteCode", $this->arrayResult )) {
    			$this->returnGoodsNoteCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "returnGoodsNoteId", $this->arrayResult )) {
    			$this->returnGoodsNoteId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>