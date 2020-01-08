<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaLstItemGetListParam/AlibabaLstItemInfo.class.php');

class AlibabaLstItemGetListResult {

        	
    private $itemInfos;
    
        /**
    * @return 商品信息列表
    */
        public function getItemInfos() {
        return $this->itemInfos;
    }
    
    /**
     * 设置商品信息列表     
     * @param array include @see AlibabaLstItemInfo[] $itemInfos     
          
     * 此参数必填     */
    public function setItemInfos(AlibabaLstItemInfo $itemInfos) {
        $this->itemInfos = $itemInfos;
    }
    
        	
    private $totalCount;
    
        /**
    * @return 查询总数
    */
        public function getTotalCount() {
        return $this->totalCount;
    }
    
    /**
     * 设置查询总数     
     * @param Long $totalCount     
          
     * 此参数必填     */
    public function setTotalCount( $totalCount) {
        $this->totalCount = $totalCount;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "itemInfos", $this->stdResult )) {
    			$itemInfosResult=$this->stdResult->{"itemInfos"};
    				$object = json_decode ( json_encode ( $itemInfosResult ), true );
					$this->itemInfos = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaLstItemInfoResult=new AlibabaLstItemInfo();
						$AlibabaLstItemInfoResult->setArrayResult($arrayobject );
						$this->itemInfos [$i] = $AlibabaLstItemInfoResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "totalCount", $this->stdResult )) {
    				$this->totalCount = $this->stdResult->{"totalCount"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "itemInfos", $this->arrayResult )) {
    		$itemInfosResult=$arrayResult['${paramType.paramName}'];
    			$this->itemInfos = new AlibabaLstItemInfo();
    			$this->itemInfos->setStdResult ( $itemInfosResult);
    		}
    		    	    			    		    			if (array_key_exists ( "totalCount", $this->arrayResult )) {
    			$this->totalCount = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>