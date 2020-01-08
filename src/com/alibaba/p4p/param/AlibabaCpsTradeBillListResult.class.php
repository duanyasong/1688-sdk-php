<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaCpsTradeBillListParam/AlibabaCpsOpenTradeBillDTO.class.php');

class AlibabaCpsTradeBillListResult {

        	
    private $tradeBillList;
    
        /**
    * @return cps交易列表
    */
        public function getTradeBillList() {
        return $this->tradeBillList;
    }
    
    /**
     * 设置cps交易列表     
     * @param array include @see AlibabaCpsOpenTradeBillDTO[] $tradeBillList     
          
     * 此参数必填     */
    public function setTradeBillList(AlibabaCpsOpenTradeBillDTO $tradeBillList) {
        $this->tradeBillList = $tradeBillList;
    }
    
        	
    private $totalRow;
    
        /**
    * @return 总记录数
    */
        public function getTotalRow() {
        return $this->totalRow;
    }
    
    /**
     * 设置总记录数     
     * @param Integer $totalRow     
          
     * 此参数必填     */
    public function setTotalRow( $totalRow) {
        $this->totalRow = $totalRow;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "tradeBillList", $this->stdResult )) {
    			$tradeBillListResult=$this->stdResult->{"tradeBillList"};
    				$object = json_decode ( json_encode ( $tradeBillListResult ), true );
					$this->tradeBillList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaCpsOpenTradeBillDTOResult=new AlibabaCpsOpenTradeBillDTO();
						$AlibabaCpsOpenTradeBillDTOResult->setArrayResult($arrayobject );
						$this->tradeBillList [$i] = $AlibabaCpsOpenTradeBillDTOResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "totalRow", $this->stdResult )) {
    				$this->totalRow = $this->stdResult->{"totalRow"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "tradeBillList", $this->arrayResult )) {
    		$tradeBillListResult=$arrayResult['${paramType.paramName}'];
    			$this->tradeBillList = new AlibabaCpsOpenTradeBillDTO();
    			$this->tradeBillList->setStdResult ( $tradeBillListResult);
    		}
    		    	    			    		    			if (array_key_exists ( "totalRow", $this->arrayResult )) {
    			$this->totalRow = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>