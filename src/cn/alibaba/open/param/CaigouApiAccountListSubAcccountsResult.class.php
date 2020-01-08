<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('CaigouApiAccountListSubAcccountsParam/CaigouApiAccountCoopSubAccountModel.class.php');

class CaigouApiAccountListSubAcccountsResult {

        	
    private $subAccountBindingList;
    
        /**
    * @return 返回列表
    */
        public function getSubAccountBindingList() {
        return $this->subAccountBindingList;
    }
    
    /**
     * 设置返回列表     
     * @param array include @see CaigouApiAccountCoopSubAccountModel[] $subAccountBindingList     
          
     * 此参数必填     */
    public function setSubAccountBindingList(CaigouApiAccountCoopSubAccountModel $subAccountBindingList) {
        $this->subAccountBindingList = $subAccountBindingList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "subAccountBindingList", $this->stdResult )) {
    			$subAccountBindingListResult=$this->stdResult->{"subAccountBindingList"};
    				$object = json_decode ( json_encode ( $subAccountBindingListResult ), true );
					$this->subAccountBindingList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$CaigouApiAccountCoopSubAccountModelResult=new CaigouApiAccountCoopSubAccountModel();
						$CaigouApiAccountCoopSubAccountModelResult->setArrayResult($arrayobject );
						$this->subAccountBindingList [$i] = $CaigouApiAccountCoopSubAccountModelResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "subAccountBindingList", $this->arrayResult )) {
    		$subAccountBindingListResult=$arrayResult['${paramType.paramName}'];
    			$this->subAccountBindingList = new CaigouApiAccountCoopSubAccountModel();
    			$this->subAccountBindingList->setStdResult ( $subAccountBindingListResult);
    		}
    		    	    		}

}
?>