<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaAitoolsProductSmartTextResult {

        	
    private $subject;
    
        /**
    * @return 自动生成的商品标题
    */
        public function getSubject() {
        return $this->subject;
    }
    
    /**
     * 设置自动生成的商品标题     
     * @param String $subject     
          
     * 此参数必填     */
    public function setSubject( $subject) {
        $this->subject = $subject;
    }
    
        	
    private $descriptionText;
    
        /**
    * @return 自动生成的商品详情描述文案，包含若干短句，几十字左右
    */
        public function getDescriptionText() {
        return $this->descriptionText;
    }
    
    /**
     * 设置自动生成的商品详情描述文案，包含若干短句，几十字左右     
     * @param String $descriptionText     
          
     * 此参数必填     */
    public function setDescriptionText( $descriptionText) {
        $this->descriptionText = $descriptionText;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "subject", $this->stdResult )) {
    				$this->subject = $this->stdResult->{"subject"};
    			}
    			    		    				    			    			if (array_key_exists ( "descriptionText", $this->stdResult )) {
    				$this->descriptionText = $this->stdResult->{"descriptionText"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "subject", $this->arrayResult )) {
    			$this->subject = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "descriptionText", $this->arrayResult )) {
    			$this->descriptionText = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>