<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('ComAlibabaCaigouBizApiCooperServiceOpenRequisitionServiceCreateMallRequisitionParam/ComAlibabaCaigouBizApiCooperModelOpenCreateRequisitionResponseModel.class.php');

class ComAlibabaCaigouBizApiCooperModelOpenCreateRequisitionResponse extends SDKDomain {

       	
    private $requisitionResponseModels;
    
        /**
    * @return 参考文档
    */
        public function getRequisitionResponseModels() {
        return $this->requisitionResponseModels;
    }
    
    /**
     * 设置参考文档     
     * @param array include @see ComAlibabaCaigouBizApiCooperModelOpenCreateRequisitionResponseModel[] $requisitionResponseModels     
     * 参数示例：<pre>参考文档</pre>     
     * 此参数必填     */
    public function setRequisitionResponseModels(ComAlibabaCaigouBizApiCooperModelOpenCreateRequisitionResponseModel $requisitionResponseModels) {
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
						$ComAlibabaCaigouBizApiCooperModelOpenCreateRequisitionResponseModelResult=new ComAlibabaCaigouBizApiCooperModelOpenCreateRequisitionResponseModel();
						$ComAlibabaCaigouBizApiCooperModelOpenCreateRequisitionResponseModelResult->setArrayResult($arrayobject );
						$this->requisitionResponseModels [$i] = $ComAlibabaCaigouBizApiCooperModelOpenCreateRequisitionResponseModelResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "requisitionResponseModels", $this->arrayResult )) {
    		$requisitionResponseModelsResult=$arrayResult['${paramType.paramName}'];
    			$this->requisitionResponseModels = new ComAlibabaCaigouBizApiCooperModelOpenCreateRequisitionResponseModel();
    			$this->requisitionResponseModels->setStdResult ( $requisitionResponseModelsResult);
    		}
    		    	    		}
 
   
}
?>