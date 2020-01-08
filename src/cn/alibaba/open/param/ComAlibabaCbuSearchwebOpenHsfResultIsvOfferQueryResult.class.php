<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaSearchGuessOfferDaixiaoVersion2Param/ComAlibabaCbuSearchwebOpenHsfResultIsvOfferModel.class.php');

class ComAlibabaCbuSearchwebOpenHsfResultIsvOfferQueryResult extends SDKDomain {

       	
    private $count;
    
        /**
    * @return 返回数量
    */
        public function getCount() {
        return $this->count;
    }
    
    /**
     * 设置返回数量     
     * @param Integer $count     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCount( $count) {
        $this->count = $count;
    }
    
        	
    private $currentPage;
    
        /**
    * @return 当前页
    */
        public function getCurrentPage() {
        return $this->currentPage;
    }
    
    /**
     * 设置当前页     
     * @param Integer $currentPage     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCurrentPage( $currentPage) {
        $this->currentPage = $currentPage;
    }
    
        	
    private $pageSize;
    
        /**
    * @return 每页大小
    */
        public function getPageSize() {
        return $this->pageSize;
    }
    
    /**
     * 设置每页大小     
     * @param Integer $pageSize     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->pageSize = $pageSize;
    }
    
        	
    private $moreUrlPc;
    
        /**
    * @return 更多信息的url
    */
        public function getMoreUrlPc() {
        return $this->moreUrlPc;
    }
    
    /**
     * 设置更多信息的url     
     * @param String $moreUrlPc     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMoreUrlPc( $moreUrlPc) {
        $this->moreUrlPc = $moreUrlPc;
    }
    
        	
    private $offerList;
    
        /**
    * @return 商品的列表
    */
        public function getOfferList() {
        return $this->offerList;
    }
    
    /**
     * 设置商品的列表     
     * @param array include @see ComAlibabaCbuSearchwebOpenHsfResultIsvOfferModel[] $offerList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOfferList(ComAlibabaCbuSearchwebOpenHsfResultIsvOfferModel $offerList) {
        $this->offerList = $offerList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "count", $this->stdResult )) {
    				$this->count = $this->stdResult->{"count"};
    			}
    			    		    				    			    			if (array_key_exists ( "currentPage", $this->stdResult )) {
    				$this->currentPage = $this->stdResult->{"currentPage"};
    			}
    			    		    				    			    			if (array_key_exists ( "pageSize", $this->stdResult )) {
    				$this->pageSize = $this->stdResult->{"pageSize"};
    			}
    			    		    				    			    			if (array_key_exists ( "moreUrlPc", $this->stdResult )) {
    				$this->moreUrlPc = $this->stdResult->{"moreUrlPc"};
    			}
    			    		    				    			    			if (array_key_exists ( "offerList", $this->stdResult )) {
    			$offerListResult=$this->stdResult->{"offerList"};
    				$object = json_decode ( json_encode ( $offerListResult ), true );
					$this->offerList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$ComAlibabaCbuSearchwebOpenHsfResultIsvOfferModelResult=new ComAlibabaCbuSearchwebOpenHsfResultIsvOfferModel();
						$ComAlibabaCbuSearchwebOpenHsfResultIsvOfferModelResult->setArrayResult($arrayobject );
						$this->offerList [$i] = $ComAlibabaCbuSearchwebOpenHsfResultIsvOfferModelResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "count", $this->arrayResult )) {
    			$this->count = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "currentPage", $this->arrayResult )) {
    			$this->currentPage = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "pageSize", $this->arrayResult )) {
    			$this->pageSize = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "moreUrlPc", $this->arrayResult )) {
    			$this->moreUrlPc = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "offerList", $this->arrayResult )) {
    		$offerListResult=$arrayResult['${paramType.paramName}'];
    			$this->offerList = new ComAlibabaCbuSearchwebOpenHsfResultIsvOfferModel();
    			$this->offerList->setStdResult ( $offerListResult);
    		}
    		    	    		}
 
   
}
?>