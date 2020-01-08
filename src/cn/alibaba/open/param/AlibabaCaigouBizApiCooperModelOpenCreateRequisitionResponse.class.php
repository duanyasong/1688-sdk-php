<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaOpenCaigouApiRequisitionModifyBiddingStatusParam/AlibabaCaigouBizApiCooperModelOpenCreateRequisitionResponseModel.class.php');

class AlibabaCaigouBizApiCooperModelOpenCreateRequisitionResponse extends SDKDomain {

       	
    private $requisitionResponseModels;
    
        /**
    * @return 看文档
    */
        public function getRequisitionResponseModels() {
        return $this->requisitionResponseModels;
    }
    
    /**
     * 设置看文档     
     * @param array include @see AlibabaCaigouBizApiCooperModelOpenCreateRequisitionResponseModel[] $requisitionResponseModels     
     * 参数示例：<pre>看文档</pre>     
     * 此参数必填     */
    public function setRequisitionResponseModels(AlibabaCaigouBizApiCooperModelOpenCreateRequisitionResponseModel $requisitionResponseModels) {
        $this->requisitionResponseModels = $requisitionResponseModels;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "requisitionResponseModels", $this->stdResult )) {
    			$requisitionResponseModelsResult=$this->stdResult->{"requisitionResponseModels"};
    				$object = json_decode ( json_encode ( $requisitionResponseModelsResult ), true );
					$this->requisitionResponseModels = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaCaigouBizApiCooperModelOpenCreateRequisitionResponseModelResult=new AlibabaCaigouBizApiCooperModelOpenCreateRequisitionResponseModel();
						$AlibabaCaigouBizApiCooperModelOpenCreateRequisitionResponseModelResult->setArrayResult($arrayobject );
						$this->requisitionResponseModels [$i] = $AlibabaCaigouBizApiCooperModelOpenCreateRequisitionResponseModelResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "requisitionResponseModels", $this->arrayResult )) {
    		$requisitionResponseModelsResult=$arrayResult['${paramType.paramName}'];
    			$this->requisitionResponseModels = new AlibabaCaigouBizApiCooperModelOpenCreateRequisitionResponseModel();
    			$this->requisitionResponseModels->setStdResult ( $requisitionResponseModelsResult);
    		}
    		    	    		}
 
   
}
?>