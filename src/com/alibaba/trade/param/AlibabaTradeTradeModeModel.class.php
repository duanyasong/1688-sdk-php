<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaTradeSaleproxyPreorderParam/AlibabaTradeTrademode.class.php');
include_once ('AlibabaTradeSaleproxyPreorderParam/AlibabaTradeTrademode.class.php');

class AlibabaTradeTradeModeModel extends SDKDomain {

       	
    private $canModifyTradeMode;
    
        /**
    * @return 是否能够修改交易方式
    */
        public function getCanModifyTradeMode() {
        return $this->canModifyTradeMode;
    }
    
    /**
     * 设置是否能够修改交易方式     
     * @param Boolean $canModifyTradeMode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCanModifyTradeMode( $canModifyTradeMode) {
        $this->canModifyTradeMode = $canModifyTradeMode;
    }
    
        	
    private $curSelectedTradeMode;
    
        /**
    * @return 默认选择交易模型
    */
        public function getCurSelectedTradeMode() {
        return $this->curSelectedTradeMode;
    }
    
    /**
     * 设置默认选择交易模型     
     * @param AlibabaTradeTrademode $curSelectedTradeMode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCurSelectedTradeMode(AlibabaTradeTrademode $curSelectedTradeMode) {
        $this->curSelectedTradeMode = $curSelectedTradeMode;
    }
    
        	
    private $tradeModes;
    
        /**
    * @return 可选交易模型
    */
        public function getTradeModes() {
        return $this->tradeModes;
    }
    
    /**
     * 设置可选交易模型     
     * @param array include @see AlibabaTradeTrademode[] $tradeModes     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTradeModes(AlibabaTradeTrademode $tradeModes) {
        $this->tradeModes = $tradeModes;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "canModifyTradeMode", $this->stdResult )) {
    				$this->canModifyTradeMode = $this->stdResult->{"canModifyTradeMode"};
    			}
    			    		    				    			    			if (array_key_exists ( "curSelectedTradeMode", $this->stdResult )) {
    				$curSelectedTradeModeResult=$this->stdResult->{"curSelectedTradeMode"};
    				$this->curSelectedTradeMode = new AlibabaTradeTrademode();
    				$this->curSelectedTradeMode->setStdResult ( $curSelectedTradeModeResult);
    			}
    			    		    				    			    			if (array_key_exists ( "tradeModes", $this->stdResult )) {
    			$tradeModesResult=$this->stdResult->{"tradeModes"};
    				$object = json_decode ( json_encode ( $tradeModesResult ), true );
					$this->tradeModes = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaTradeTrademodeResult=new AlibabaTradeTrademode();
						$AlibabaTradeTrademodeResult->setArrayResult($arrayobject );
						$this->tradeModes [$i] = $AlibabaTradeTrademodeResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "canModifyTradeMode", $this->arrayResult )) {
    			$this->canModifyTradeMode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "curSelectedTradeMode", $this->arrayResult )) {
    		$curSelectedTradeModeResult=$arrayResult['${paramType.paramName}'];
    			    			$this->curSelectedTradeMode = new AlibabaTradeTrademode();
    			    			$this->curSelectedTradeMode->setStdResult ( $curSelectedTradeModeResult);
    		}
    		    	    			    		    		if (array_key_exists ( "tradeModes", $this->arrayResult )) {
    		$tradeModesResult=$arrayResult['${paramType.paramName}'];
    			$this->tradeModes = new AlibabaTradeTrademode();
    			$this->tradeModes->setStdResult ( $tradeModesResult);
    		}
    		    	    		}
 
   
}
?>