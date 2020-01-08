<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('ComAlibabaCaigouBizApiCooperServiceOpenRequisitionServiceCreateMallRequisitionParam/ComAlibabaCaigouBizApiCooperModelOpenCreateRequisitionResponse.class.php');

class ComAlibabaCaigouBizApiCommonModelResultData extends SDKDomain {

       	
    private $data;
    
        /**
    * @return 参考文档
    */
        public function getData() {
        return $this->data;
    }
    
    /**
     * 设置参考文档     
     * @param ComAlibabaCaigouBizApiCooperModelOpenCreateRequisitionResponse $data     
     * 参数示例：<pre>参考文档</pre>     
     * 此参数必填     */
    public function setData(ComAlibabaCaigouBizApiCooperModelOpenCreateRequisitionResponse $data) {
        $this->data = $data;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "data", $this->stdResult )) {
    				$dataResult=$this->stdResult->{"data"};
    				$this->data = new ComAlibabaCaigouBizApiCooperModelOpenCreateRequisitionResponse();
    				$this->data->setStdResult ( $dataResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "data", $this->arrayResult )) {
    		$dataResult=$arrayResult['${paramType.paramName}'];
    			    			$this->data = new ComAlibabaCaigouBizApiCooperModelOpenCreateRequisitionResponse();
    			    			$this->data->setStdResult ( $dataResult);
    		}
    		    	    		}
 
   
}
?>