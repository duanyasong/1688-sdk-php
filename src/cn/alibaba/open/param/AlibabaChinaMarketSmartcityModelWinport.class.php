<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaMobileWinportGetParam/AlibabaChinaMarketSmartcityModelWinportLiveInfo.class.php');

class AlibabaChinaMarketSmartcityModelWinport extends SDKDomain {

       	
    private $loginId;
    
        /**
    * @return test
    */
        public function getLoginId() {
        return $this->loginId;
    }
    
    /**
     * 设置test     
     * @param String $loginId     
     * 参数示例：<pre>test</pre>     
     * 此参数必填     */
    public function setLoginId( $loginId) {
        $this->loginId = $loginId;
    }
    
        	
    private $h5WinportUrl;
    
        /**
    * @return test
    */
        public function getH5WinportUrl() {
        return $this->h5WinportUrl;
    }
    
    /**
     * 设置test     
     * @param String $h5WinportUrl     
     * 参数示例：<pre>test</pre>     
     * 此参数必填     */
    public function setH5WinportUrl( $h5WinportUrl) {
        $this->h5WinportUrl = $h5WinportUrl;
    }
    
        	
    private $h5CouponUrl;
    
        /**
    * @return test
    */
        public function getH5CouponUrl() {
        return $this->h5CouponUrl;
    }
    
    /**
     * 设置test     
     * @param String $h5CouponUrl     
     * 参数示例：<pre>test</pre>     
     * 此参数必填     */
    public function setH5CouponUrl( $h5CouponUrl) {
        $this->h5CouponUrl = $h5CouponUrl;
    }
    
        	
    private $liveInfoList;
    
        /**
    * @return test
    */
        public function getLiveInfoList() {
        return $this->liveInfoList;
    }
    
    /**
     * 设置test     
     * @param array include @see AlibabaChinaMarketSmartcityModelWinportLiveInfo[] $liveInfoList     
     * 参数示例：<pre>test</pre>     
     * 此参数必填     */
    public function setLiveInfoList(AlibabaChinaMarketSmartcityModelWinportLiveInfo $liveInfoList) {
        $this->liveInfoList = $liveInfoList;
    }
    
        	
    private $winportName;
    
        /**
    * @return test
    */
        public function getWinportName() {
        return $this->winportName;
    }
    
    /**
     * 设置test     
     * @param String $winportName     
     * 参数示例：<pre>test</pre>     
     * 此参数必填     */
    public function setWinportName( $winportName) {
        $this->winportName = $winportName;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "loginId", $this->stdResult )) {
    				$this->loginId = $this->stdResult->{"loginId"};
    			}
    			    		    				    			    			if (array_key_exists ( "h5WinportUrl", $this->stdResult )) {
    				$this->h5WinportUrl = $this->stdResult->{"h5WinportUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "h5CouponUrl", $this->stdResult )) {
    				$this->h5CouponUrl = $this->stdResult->{"h5CouponUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "liveInfoList", $this->stdResult )) {
    			$liveInfoListResult=$this->stdResult->{"liveInfoList"};
    				$object = json_decode ( json_encode ( $liveInfoListResult ), true );
					$this->liveInfoList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaChinaMarketSmartcityModelWinportLiveInfoResult=new AlibabaChinaMarketSmartcityModelWinportLiveInfo();
						$AlibabaChinaMarketSmartcityModelWinportLiveInfoResult->setArrayResult($arrayobject );
						$this->liveInfoList [$i] = $AlibabaChinaMarketSmartcityModelWinportLiveInfoResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "winportName", $this->stdResult )) {
    				$this->winportName = $this->stdResult->{"winportName"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "loginId", $this->arrayResult )) {
    			$this->loginId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "h5WinportUrl", $this->arrayResult )) {
    			$this->h5WinportUrl = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "h5CouponUrl", $this->arrayResult )) {
    			$this->h5CouponUrl = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "liveInfoList", $this->arrayResult )) {
    		$liveInfoListResult=$arrayResult['${paramType.paramName}'];
    			$this->liveInfoList = new AlibabaChinaMarketSmartcityModelWinportLiveInfo();
    			$this->liveInfoList->setStdResult ( $liveInfoListResult);
    		}
    		    	    			    		    			if (array_key_exists ( "winportName", $this->arrayResult )) {
    			$this->winportName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>