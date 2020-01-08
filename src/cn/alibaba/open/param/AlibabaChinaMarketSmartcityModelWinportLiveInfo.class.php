<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaChinaMarketSmartcityModelWinportLiveInfo extends SDKDomain {

       	
    private $bannerUrl;
    
        /**
    * @return test
    */
        public function getBannerUrl() {
        return $this->bannerUrl;
    }
    
    /**
     * 设置test     
     * @param String $bannerUrl     
     * 参数示例：<pre>test</pre>     
     * 此参数必填     */
    public function setBannerUrl( $bannerUrl) {
        $this->bannerUrl = $bannerUrl;
    }
    
        	
    private $liveUrl;
    
        /**
    * @return test
    */
        public function getLiveUrl() {
        return $this->liveUrl;
    }
    
    /**
     * 设置test     
     * @param String $liveUrl     
     * 参数示例：<pre>test</pre>     
     * 此参数必填     */
    public function setLiveUrl( $liveUrl) {
        $this->liveUrl = $liveUrl;
    }
    
        	
    private $type;
    
        /**
    * @return test
    */
        public function getType() {
        return $this->type;
    }
    
    /**
     * 设置test     
     * @param String $type     
     * 参数示例：<pre>test</pre>     
     * 此参数必填     */
    public function setType( $type) {
        $this->type = $type;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "bannerUrl", $this->stdResult )) {
    				$this->bannerUrl = $this->stdResult->{"bannerUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "liveUrl", $this->stdResult )) {
    				$this->liveUrl = $this->stdResult->{"liveUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "type", $this->stdResult )) {
    				$this->type = $this->stdResult->{"type"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "bannerUrl", $this->arrayResult )) {
    			$this->bannerUrl = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "liveUrl", $this->arrayResult )) {
    			$this->liveUrl = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "type", $this->arrayResult )) {
    			$this->type = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>