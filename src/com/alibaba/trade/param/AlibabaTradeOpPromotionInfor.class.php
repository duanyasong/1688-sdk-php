<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaTradeOpPromotionInfor extends SDKDomain {

       	
    private $promotionId;
    
        /**
    * @return 优惠Id
    */
        public function getPromotionId() {
        return $this->promotionId;
    }
    
    /**
     * 设置优惠Id     
     * @param String $promotionId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPromotionId( $promotionId) {
        $this->promotionId = $promotionId;
    }
    
        	
    private $instanceStr;
    
        /**
    * @return 优惠实例id串
    */
        public function getInstanceStr() {
        return $this->instanceStr;
    }
    
    /**
     * 设置优惠实例id串     
     * @param String $instanceStr     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInstanceStr( $instanceStr) {
        $this->instanceStr = $instanceStr;
    }
    
        	
    private $chooseFreeFreight;
    
        /**
    * @return 1代表选中,0代表没有选中
    */
        public function getChooseFreeFreight() {
        return $this->chooseFreeFreight;
    }
    
    /**
     * 设置1代表选中,0代表没有选中     
     * @param Integer $chooseFreeFreight     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setChooseFreeFreight( $chooseFreeFreight) {
        $this->chooseFreeFreight = $chooseFreeFreight;
    }
    
        	
    private $marketingScene;
    
        /**
    * @return 市场
    */
        public function getMarketingScene() {
        return $this->marketingScene;
    }
    
    /**
     * 设置市场     
     * @param String $marketingScene     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMarketingScene( $marketingScene) {
        $this->marketingScene = $marketingScene;
    }
    
        	
    private $promotionType;
    
        /**
    * @return 跨店优惠类型key
    */
        public function getPromotionType() {
        return $this->promotionType;
    }
    
    /**
     * 设置跨店优惠类型key     
     * @param String $promotionType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPromotionType( $promotionType) {
        $this->promotionType = $promotionType;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "promotionId", $this->stdResult )) {
    				$this->promotionId = $this->stdResult->{"promotionId"};
    			}
    			    		    				    			    			if (array_key_exists ( "instanceStr", $this->stdResult )) {
    				$this->instanceStr = $this->stdResult->{"instanceStr"};
    			}
    			    		    				    			    			if (array_key_exists ( "chooseFreeFreight", $this->stdResult )) {
    				$this->chooseFreeFreight = $this->stdResult->{"chooseFreeFreight"};
    			}
    			    		    				    			    			if (array_key_exists ( "marketingScene", $this->stdResult )) {
    				$this->marketingScene = $this->stdResult->{"marketingScene"};
    			}
    			    		    				    			    			if (array_key_exists ( "promotionType", $this->stdResult )) {
    				$this->promotionType = $this->stdResult->{"promotionType"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "promotionId", $this->arrayResult )) {
    			$this->promotionId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "instanceStr", $this->arrayResult )) {
    			$this->instanceStr = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "chooseFreeFreight", $this->arrayResult )) {
    			$this->chooseFreeFreight = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "marketingScene", $this->arrayResult )) {
    			$this->marketingScene = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "promotionType", $this->arrayResult )) {
    			$this->promotionType = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>