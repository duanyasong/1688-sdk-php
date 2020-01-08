<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaProductDescrTmplListParam/AlibabaAitoolsDescrTemplateItem.class.php');

class AlibabaProductDescrTmplListResult {

        	
    private $total;
    
        /**
    * @return 检索到的模板总数
    */
        public function getTotal() {
        return $this->total;
    }
    
    /**
     * 设置检索到的模板总数     
     * @param String $total     
          
     * 此参数必填     */
    public function setTotal( $total) {
        $this->total = $total;
    }
    
        	
    private $page;
    
        /**
    * @return 页码，从 1 开始
    */
        public function getPage() {
        return $this->page;
    }
    
    /**
     * 设置页码，从 1 开始     
     * @param String $page     
          
     * 此参数必填     */
    public function setPage( $page) {
        $this->page = $page;
    }
    
        	
    private $pageSize;
    
        /**
    * @return 页大小
    */
        public function getPageSize() {
        return $this->pageSize;
    }
    
    /**
     * 设置页大小     
     * @param String $pageSize     
          
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->pageSize = $pageSize;
    }
    
        	
    private $resultList;
    
        /**
    * @return 结果模板列表
    */
        public function getResultList() {
        return $this->resultList;
    }
    
    /**
     * 设置结果模板列表     
     * @param array include @see AlibabaAitoolsDescrTemplateItem[] $resultList     
          
     * 此参数必填     */
    public function setResultList(AlibabaAitoolsDescrTemplateItem $resultList) {
        $this->resultList = $resultList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "total", $this->stdResult )) {
    				$this->total = $this->stdResult->{"total"};
    			}
    			    		    				    			    			if (array_key_exists ( "page", $this->stdResult )) {
    				$this->page = $this->stdResult->{"page"};
    			}
    			    		    				    			    			if (array_key_exists ( "pageSize", $this->stdResult )) {
    				$this->pageSize = $this->stdResult->{"pageSize"};
    			}
    			    		    				    			    			if (array_key_exists ( "resultList", $this->stdResult )) {
    			$resultListResult=$this->stdResult->{"resultList"};
    				$object = json_decode ( json_encode ( $resultListResult ), true );
					$this->resultList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaAitoolsDescrTemplateItemResult=new AlibabaAitoolsDescrTemplateItem();
						$AlibabaAitoolsDescrTemplateItemResult->setArrayResult($arrayobject );
						$this->resultList [$i] = $AlibabaAitoolsDescrTemplateItemResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "total", $this->arrayResult )) {
    			$this->total = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "page", $this->arrayResult )) {
    			$this->page = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "pageSize", $this->arrayResult )) {
    			$this->pageSize = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "resultList", $this->arrayResult )) {
    		$resultListResult=$arrayResult['${paramType.paramName}'];
    			$this->resultList = new AlibabaAitoolsDescrTemplateItem();
    			$this->resultList->setStdResult ( $resultListResult);
    		}
    		    	    		}

}
?>