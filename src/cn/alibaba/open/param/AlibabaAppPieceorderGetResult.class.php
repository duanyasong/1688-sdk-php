<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaAppPieceorderGetParam/IsvOrderItemDto.class.php');

class AlibabaAppPieceorderGetResult {

        	
    private $isvOrderItemDto;
    
        /**
    * @return isv订单信息
    */
        public function getIsvOrderItemDto() {
        return $this->isvOrderItemDto;
    }
    
    /**
     * 设置isv订单信息     
     * @param array include @see IsvOrderItemDto[] $isvOrderItemDto     
          
     * 此参数必填     */
    public function setIsvOrderItemDto(IsvOrderItemDto $isvOrderItemDto) {
        $this->isvOrderItemDto = $isvOrderItemDto;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "isvOrderItemDto", $this->stdResult )) {
    			$isvOrderItemDtoResult=$this->stdResult->{"isvOrderItemDto"};
    				$object = json_decode ( json_encode ( $isvOrderItemDtoResult ), true );
					$this->isvOrderItemDto = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$IsvOrderItemDtoResult=new IsvOrderItemDto();
						$IsvOrderItemDtoResult->setArrayResult($arrayobject );
						$this->isvOrderItemDto [$i] = $IsvOrderItemDtoResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "isvOrderItemDto", $this->arrayResult )) {
    		$isvOrderItemDtoResult=$arrayResult['${paramType.paramName}'];
    			$this->isvOrderItemDto = new IsvOrderItemDto();
    			$this->isvOrderItemDto->setStdResult ( $isvOrderItemDtoResult);
    		}
    		    	    		}

}
?>