<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaProductPtsTagQueryParam/ComAlibabaOceanOpenplatformBizPtsResultPtsTagModel.class.php');
include_once ('AlibabaProductPtsTagQueryParam/ComAlibabaOceanOpenplatformBizPtsResultPtsTagGroup.class.php');

class ComAlibabaOceanOpenplatformBizPtsResultPtsModelResult extends SDKDomain {

       	
    private $openLink;
    
        /**
    * @return 开通保障服务的链接
    */
        public function getOpenLink() {
        return $this->openLink;
    }
    
    /**
     * 设置开通保障服务的链接     
     * @param String $openLink     
     * 参数示例：<pre>http://bao.1688.com/pts/index.htm</pre>     
     * 此参数必填     */
    public function setOpenLink( $openLink) {
        $this->openLink = $openLink;
    }
    
        	
    private $detailLink;
    
        /**
    * @return 保障服务详情链接
    */
        public function getDetailLink() {
        return $this->detailLink;
    }
    
    /**
     * 设置保障服务详情链接     
     * @param String $detailLink     
     * 参数示例：<pre>http://bao.1688.com/pts/index.htm</pre>     
     * 此参数必填     */
    public function setDetailLink( $detailLink) {
        $this->detailLink = $detailLink;
    }
    
        	
    private $isBpsOpen;
    
        /**
    * @return 标示是否已经开通买家保障服务,true标示开通
    */
        public function getIsBpsOpen() {
        return $this->isBpsOpen;
    }
    
    /**
     * 设置标示是否已经开通买家保障服务,true标示开通     
     * @param Boolean $isBpsOpen     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setIsBpsOpen( $isBpsOpen) {
        $this->isBpsOpen = $isBpsOpen;
    }
    
        	
    private $balance;
    
        /**
    * @return 保证金金额
    */
        public function getBalance() {
        return $this->balance;
    }
    
    /**
     * 设置保证金金额     
     * @param Long $balance     
     * 参数示例：<pre>3000</pre>     
     * 此参数必填     */
    public function setBalance( $balance) {
        $this->balance = $balance;
    }
    
        	
    private $ptsTagModels;
    
        /**
    * @return 保障服务
    */
        public function getPtsTagModels() {
        return $this->ptsTagModels;
    }
    
    /**
     * 设置保障服务     
     * @param array include @see ComAlibabaOceanOpenplatformBizPtsResultPtsTagModel[] $ptsTagModels     
     * 参数示例：<pre>[]</pre>     
     * 此参数必填     */
    public function setPtsTagModels(ComAlibabaOceanOpenplatformBizPtsResultPtsTagModel $ptsTagModels) {
        $this->ptsTagModels = $ptsTagModels;
    }
    
        	
    private $ptsTagGroups;
    
        /**
    * @return 保障服务组
    */
        public function getPtsTagGroups() {
        return $this->ptsTagGroups;
    }
    
    /**
     * 设置保障服务组     
     * @param array include @see ComAlibabaOceanOpenplatformBizPtsResultPtsTagGroup[] $ptsTagGroups     
     * 参数示例：<pre>[]</pre>     
     * 此参数必填     */
    public function setPtsTagGroups(ComAlibabaOceanOpenplatformBizPtsResultPtsTagGroup $ptsTagGroups) {
        $this->ptsTagGroups = $ptsTagGroups;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "openLink", $this->stdResult )) {
    				$this->openLink = $this->stdResult->{"openLink"};
    			}
    			    		    				    			    			if (array_key_exists ( "detailLink", $this->stdResult )) {
    				$this->detailLink = $this->stdResult->{"detailLink"};
    			}
    			    		    				    			    			if (array_key_exists ( "isBpsOpen", $this->stdResult )) {
    				$this->isBpsOpen = $this->stdResult->{"isBpsOpen"};
    			}
    			    		    				    			    			if (array_key_exists ( "balance", $this->stdResult )) {
    				$this->balance = $this->stdResult->{"balance"};
    			}
    			    		    				    			    			if (array_key_exists ( "ptsTagModels", $this->stdResult )) {
    			$ptsTagModelsResult=$this->stdResult->{"ptsTagModels"};
    				$object = json_decode ( json_encode ( $ptsTagModelsResult ), true );
					$this->ptsTagModels = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$ComAlibabaOceanOpenplatformBizPtsResultPtsTagModelResult=new ComAlibabaOceanOpenplatformBizPtsResultPtsTagModel();
						$ComAlibabaOceanOpenplatformBizPtsResultPtsTagModelResult->setArrayResult($arrayobject );
						$this->ptsTagModels [$i] = $ComAlibabaOceanOpenplatformBizPtsResultPtsTagModelResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "ptsTagGroups", $this->stdResult )) {
    			$ptsTagGroupsResult=$this->stdResult->{"ptsTagGroups"};
    				$object = json_decode ( json_encode ( $ptsTagGroupsResult ), true );
					$this->ptsTagGroups = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$ComAlibabaOceanOpenplatformBizPtsResultPtsTagGroupResult=new ComAlibabaOceanOpenplatformBizPtsResultPtsTagGroup();
						$ComAlibabaOceanOpenplatformBizPtsResultPtsTagGroupResult->setArrayResult($arrayobject );
						$this->ptsTagGroups [$i] = $ComAlibabaOceanOpenplatformBizPtsResultPtsTagGroupResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "openLink", $this->arrayResult )) {
    			$this->openLink = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "detailLink", $this->arrayResult )) {
    			$this->detailLink = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "isBpsOpen", $this->arrayResult )) {
    			$this->isBpsOpen = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "balance", $this->arrayResult )) {
    			$this->balance = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "ptsTagModels", $this->arrayResult )) {
    		$ptsTagModelsResult=$arrayResult['${paramType.paramName}'];
    			$this->ptsTagModels = new ComAlibabaOceanOpenplatformBizPtsResultPtsTagModel();
    			$this->ptsTagModels->setStdResult ( $ptsTagModelsResult);
    		}
    		    	    			    		    		if (array_key_exists ( "ptsTagGroups", $this->arrayResult )) {
    		$ptsTagGroupsResult=$arrayResult['${paramType.paramName}'];
    			$this->ptsTagGroups = new ComAlibabaOceanOpenplatformBizPtsResultPtsTagGroup();
    			$this->ptsTagGroups->setStdResult ( $ptsTagGroupsResult);
    		}
    		    	    		}
 
   
}
?>