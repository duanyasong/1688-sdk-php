<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaSearchSupplyProductParam/AlibabaSearchRelationGroupInfo.class.php');

class AlibabaSearchRelationProductInfo extends SDKDomain {

       	
    private $productId;
    
        /**
    * @return 商品ID
    */
        public function getProductId() {
        return $this->productId;
    }
    
    /**
     * 设置商品ID     
     * @param Long $productId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductId( $productId) {
        $this->productId = $productId;
    }
    
        	
    private $relationDesc;
    
        /**
    * @return 查询商品结果中的关联描述
    */
        public function getRelationDesc() {
        return $this->relationDesc;
    }
    
    /**
     * 设置查询商品结果中的关联描述     
     * @param array include @see AlibabaSearchRelationGroupInfo[] $relationDesc     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRelationDesc(AlibabaSearchRelationGroupInfo $relationDesc) {
        $this->relationDesc = $relationDesc;
    }
    
        	
    private $offerPublishTime;
    
        /**
    * @return 商品发布时间
    */
        public function getOfferPublishTime() {
        return $this->offerPublishTime;
    }
    
    /**
     * 设置商品发布时间     
     * @param Date $offerPublishTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOfferPublishTime( $offerPublishTime) {
        $this->offerPublishTime = $offerPublishTime;
    }
    
        	
    private $saleCounts;
    
        /**
    * @return 售卖数量
    */
        public function getSaleCounts() {
        return $this->saleCounts;
    }
    
    /**
     * 设置售卖数量     
     * @param Integer $saleCounts     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSaleCounts( $saleCounts) {
        $this->saleCounts = $saleCounts;
    }
    
        	
    private $saleScore;
    
        /**
    * @return 售卖分数
    */
        public function getSaleScore() {
        return $this->saleScore;
    }
    
    /**
     * 设置售卖分数     
     * @param Integer $saleScore     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSaleScore( $saleScore) {
        $this->saleScore = $saleScore;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "productId", $this->stdResult )) {
    				$this->productId = $this->stdResult->{"productId"};
    			}
    			    		    				    			    			if (array_key_exists ( "relationDesc", $this->stdResult )) {
    			$relationDescResult=$this->stdResult->{"relationDesc"};
    				$object = json_decode ( json_encode ( $relationDescResult ), true );
					$this->relationDesc = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaSearchRelationGroupInfoResult=new AlibabaSearchRelationGroupInfo();
						$AlibabaSearchRelationGroupInfoResult->setArrayResult($arrayobject );
						$this->relationDesc [$i] = $AlibabaSearchRelationGroupInfoResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "offerPublishTime", $this->stdResult )) {
    				$this->offerPublishTime = $this->stdResult->{"offerPublishTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "saleCounts", $this->stdResult )) {
    				$this->saleCounts = $this->stdResult->{"saleCounts"};
    			}
    			    		    				    			    			if (array_key_exists ( "saleScore", $this->stdResult )) {
    				$this->saleScore = $this->stdResult->{"saleScore"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "productId", $this->arrayResult )) {
    			$this->productId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "relationDesc", $this->arrayResult )) {
    		$relationDescResult=$arrayResult['${paramType.paramName}'];
    			$this->relationDesc = new AlibabaSearchRelationGroupInfo();
    			$this->relationDesc->setStdResult ( $relationDescResult);
    		}
    		    	    			    		    			if (array_key_exists ( "offerPublishTime", $this->arrayResult )) {
    			$this->offerPublishTime = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "saleCounts", $this->arrayResult )) {
    			$this->saleCounts = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "saleScore", $this->arrayResult )) {
    			$this->saleScore = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>