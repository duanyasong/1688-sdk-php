<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaTranslateResult extends SDKDomain {

       	
    private $sourceText;
    
        /**
    * @return 待翻译文本
    */
        public function getSourceText() {
        return $this->sourceText;
    }
    
    /**
     * 设置待翻译文本     
     * @param String $sourceText     
     * 参数示例：<pre>连衣裙</pre>     
     * 此参数必填     */
    public function setSourceText( $sourceText) {
        $this->sourceText = $sourceText;
    }
    
        	
    private $translateText;
    
        /**
    * @return 翻译结果
    */
        public function getTranslateText() {
        return $this->translateText;
    }
    
    /**
     * 设置翻译结果     
     * @param String $translateText     
     * 参数示例：<pre>dress</pre>     
     * 此参数必填     */
    public function setTranslateText( $translateText) {
        $this->translateText = $translateText;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "sourceText", $this->stdResult )) {
    				$this->sourceText = $this->stdResult->{"sourceText"};
    			}
    			    		    				    			    			if (array_key_exists ( "translateText", $this->stdResult )) {
    				$this->translateText = $this->stdResult->{"translateText"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "sourceText", $this->arrayResult )) {
    			$this->sourceText = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "translateText", $this->arrayResult )) {
    			$this->translateText = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>