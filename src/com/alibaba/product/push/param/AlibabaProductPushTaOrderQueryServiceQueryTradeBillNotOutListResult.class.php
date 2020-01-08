<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaProductPushTaOrderQueryServiceQueryTradeBillNotOutListParam/AlibabaProductPushTaTradeBillModel.class.php');

class AlibabaProductPushTaOrderQueryServiceQueryTradeBillNotOutListResult {

        	
    private $modelList;
    
        /**
    * @return 结果列表
    */
        public function getModelList() {
        return $this->modelList;
    }
    
    /**
     * 设置结果列表     
     * @param array include @see AlibabaProductPushTaTradeBillModel[] $modelList     
          
     * 此参数必填     */
    public function setModelList(AlibabaProductPushTaTradeBillModel $modelList) {
        $this->modelList = $modelList;
    }
    
        	
    private $hasLast;
    
        /**
    * @return 是否有上一页
    */
        public function getHasLast() {
        return $this->hasLast;
    }
    
    /**
     * 设置是否有上一页     
     * @param Boolean $hasLast     
          
     * 此参数必填     */
    public function setHasLast( $hasLast) {
        $this->hasLast = $hasLast;
    }
    
        	
    private $hasNext;
    
        /**
    * @return 是否有下一页
    */
        public function getHasNext() {
        return $this->hasNext;
    }
    
    /**
     * 设置是否有下一页     
     * @param Boolean $hasNext     
          
     * 此参数必填     */
    public function setHasNext( $hasNext) {
        $this->hasNext = $hasNext;
    }
    
        	
    private $thisPage;
    
        /**
    * @return 当前页码，从1开始。1,2,3...
    */
        public function getThisPage() {
        return $this->thisPage;
    }
    
    /**
     * 设置当前页码，从1开始。1,2,3...     
     * @param Integer $thisPage     
          
     * 此参数必填     */
    public function setThisPage( $thisPage) {
        $this->thisPage = $thisPage;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "modelList", $this->stdResult )) {
    			$modelListResult=$this->stdResult->{"modelList"};
    				$object = json_decode ( json_encode ( $modelListResult ), true );
					$this->modelList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaProductPushTaTradeBillModelResult=new AlibabaProductPushTaTradeBillModel();
						$AlibabaProductPushTaTradeBillModelResult->setArrayResult($arrayobject );
						$this->modelList [$i] = $AlibabaProductPushTaTradeBillModelResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "hasLast", $this->stdResult )) {
    				$this->hasLast = $this->stdResult->{"hasLast"};
    			}
    			    		    				    			    			if (array_key_exists ( "hasNext", $this->stdResult )) {
    				$this->hasNext = $this->stdResult->{"hasNext"};
    			}
    			    		    				    			    			if (array_key_exists ( "thisPage", $this->stdResult )) {
    				$this->thisPage = $this->stdResult->{"thisPage"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "modelList", $this->arrayResult )) {
    		$modelListResult=$arrayResult['${paramType.paramName}'];
    			$this->modelList = new AlibabaProductPushTaTradeBillModel();
    			$this->modelList->setStdResult ( $modelListResult);
    		}
    		    	    			    		    			if (array_key_exists ( "hasLast", $this->arrayResult )) {
    			$this->hasLast = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "hasNext", $this->arrayResult )) {
    			$this->hasNext = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "thisPage", $this->arrayResult )) {
    			$this->thisPage = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>