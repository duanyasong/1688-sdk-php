<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaBulksettlementOpBulkSettlementQueryReceiveNoteListParam/AlibabaBulksettlementOpReceiveNoteModel.class.php');

class AlibabaBulksettlementOpReceiveNoteModels extends SDKDomain {

       	
    private $totalCount;
    
        /**
    * @return 
    */
        public function getTotalCount() {
        return $this->totalCount;
    }
    
    /**
     * 设置     
     * @param Integer $totalCount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTotalCount( $totalCount) {
        $this->totalCount = $totalCount;
    }
    
        	
    private $realPrePageSize;
    
        /**
    * @return 
    */
        public function getRealPrePageSize() {
        return $this->realPrePageSize;
    }
    
    /**
     * 设置     
     * @param Integer $realPrePageSize     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRealPrePageSize( $realPrePageSize) {
        $this->realPrePageSize = $realPrePageSize;
    }
    
        	
    private $lastStartRow;
    
        /**
    * @return 
    */
        public function getLastStartRow() {
        return $this->lastStartRow;
    }
    
    /**
     * 设置     
     * @param String $lastStartRow     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLastStartRow( $lastStartRow) {
        $this->lastStartRow = $lastStartRow;
    }
    
        	
    private $modelList;
    
        /**
    * @return 收货单列表
    */
        public function getModelList() {
        return $this->modelList;
    }
    
    /**
     * 设置收货单列表     
     * @param array include @see AlibabaBulksettlementOpReceiveNoteModel[] $modelList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setModelList(AlibabaBulksettlementOpReceiveNoteModel $modelList) {
        $this->modelList = $modelList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "totalCount", $this->stdResult )) {
    				$this->totalCount = $this->stdResult->{"totalCount"};
    			}
    			    		    				    			    			if (array_key_exists ( "realPrePageSize", $this->stdResult )) {
    				$this->realPrePageSize = $this->stdResult->{"realPrePageSize"};
    			}
    			    		    				    			    			if (array_key_exists ( "lastStartRow", $this->stdResult )) {
    				$this->lastStartRow = $this->stdResult->{"lastStartRow"};
    			}
    			    		    				    			    			if (array_key_exists ( "modelList", $this->stdResult )) {
    			$modelListResult=$this->stdResult->{"modelList"};
    				$object = json_decode ( json_encode ( $modelListResult ), true );
					$this->modelList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaBulksettlementOpReceiveNoteModelResult=new AlibabaBulksettlementOpReceiveNoteModel();
						$AlibabaBulksettlementOpReceiveNoteModelResult->setArrayResult($arrayobject );
						$this->modelList [$i] = $AlibabaBulksettlementOpReceiveNoteModelResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "totalCount", $this->arrayResult )) {
    			$this->totalCount = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "realPrePageSize", $this->arrayResult )) {
    			$this->realPrePageSize = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "lastStartRow", $this->arrayResult )) {
    			$this->lastStartRow = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "modelList", $this->arrayResult )) {
    		$modelListResult=$arrayResult['${paramType.paramName}'];
    			$this->modelList = new AlibabaBulksettlementOpReceiveNoteModel();
    			$this->modelList->setStdResult ( $modelListResult);
    		}
    		    	    		}
 
   
}
?>