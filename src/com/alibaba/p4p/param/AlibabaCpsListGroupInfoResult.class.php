<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaCpsListGroupInfoParam/AlibabaCpsOpenUnionGroupDTO.class.php');

class AlibabaCpsListGroupInfoResult {

        	
    private $result;
    
        /**
    * @return  
    */
        public function getResult() {
        return $this->result;
    }
    
    /**
     * 设置      
     * @param array include @see AlibabaCpsOpenUnionGroupDTO[] $result     
          
     * 此参数必填     */
    public function setResult(AlibabaCpsOpenUnionGroupDTO $result) {
        $this->result = $result;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "result", $this->stdResult )) {
    			$resultResult=$this->stdResult->{"result"};
    				$object = json_decode ( json_encode ( $resultResult ), true );
					$this->result = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaCpsOpenUnionGroupDTOResult=new AlibabaCpsOpenUnionGroupDTO();
						$AlibabaCpsOpenUnionGroupDTOResult->setArrayResult($arrayobject );
						$this->result [$i] = $AlibabaCpsOpenUnionGroupDTOResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "result", $this->arrayResult )) {
    		$resultResult=$arrayResult['${paramType.paramName}'];
    			$this->result = new AlibabaCpsOpenUnionGroupDTO();
    			$this->result->setStdResult ( $resultResult);
    		}
    		    	    		}

}
?>