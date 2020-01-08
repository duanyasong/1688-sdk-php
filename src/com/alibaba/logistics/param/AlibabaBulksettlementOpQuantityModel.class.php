<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaBulksettlementOpQuantityModel extends SDKDomain {

       	
    private $realAmount;
    
        /**
    * @return 真实购买数量，浮点型标识，可直接用于外部展示使用，比如0.001吨，在原有的quantity字段中记录的是1
    */
        public function getRealAmount() {
        return $this->realAmount;
    }
    
    /**
     * 设置真实购买数量，浮点型标识，可直接用于外部展示使用，比如0.001吨，在原有的quantity字段中记录的是1     
     * @param Double $realAmount     
     * 参数示例：<pre>0.001</pre>     
     * 此参数必填     */
    public function setRealAmount( $realAmount) {
        $this->realAmount = $realAmount;
    }
    
        	
    private $amountFactor;
    
        /**
    * @return 数量精度系数，比如0.001吨，此时精度系数为1000
    */
        public function getAmountFactor() {
        return $this->amountFactor;
    }
    
    /**
     * 设置数量精度系数，比如0.001吨，此时精度系数为1000     
     * @param Double $amountFactor     
     * 参数示例：<pre>1000</pre>     
     * 此参数必填     */
    public function setAmountFactor( $amountFactor) {
        $this->amountFactor = $amountFactor;
    }
    
        	
    private $calAmount;
    
        /**
    * @return 整数购买数，数值上等于realAmount*amoutFactor，与原有模型中的quantity字段数值相等
    */
        public function getCalAmount() {
        return $this->calAmount;
    }
    
    /**
     * 设置整数购买数，数值上等于realAmount*amoutFactor，与原有模型中的quantity字段数值相等     
     * @param Long $calAmount     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setCalAmount( $calAmount) {
        $this->calAmount = $calAmount;
    }
    
        	
    private $realAmountStr;
    
        /**
    * @return 真实购买数，字符型
    */
        public function getRealAmountStr() {
        return $this->realAmountStr;
    }
    
    /**
     * 设置真实购买数，字符型     
     * @param String $realAmountStr     
     * 参数示例：<pre>0.001</pre>     
     * 此参数必填     */
    public function setRealAmountStr( $realAmountStr) {
        $this->realAmountStr = $realAmountStr;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "realAmount", $this->stdResult )) {
    				$this->realAmount = $this->stdResult->{"realAmount"};
    			}
    			    		    				    			    			if (array_key_exists ( "amountFactor", $this->stdResult )) {
    				$this->amountFactor = $this->stdResult->{"amountFactor"};
    			}
    			    		    				    			    			if (array_key_exists ( "calAmount", $this->stdResult )) {
    				$this->calAmount = $this->stdResult->{"calAmount"};
    			}
    			    		    				    			    			if (array_key_exists ( "realAmountStr", $this->stdResult )) {
    				$this->realAmountStr = $this->stdResult->{"realAmountStr"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "realAmount", $this->arrayResult )) {
    			$this->realAmount = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "amountFactor", $this->arrayResult )) {
    			$this->amountFactor = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "calAmount", $this->arrayResult )) {
    			$this->calAmount = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "realAmountStr", $this->arrayResult )) {
    			$this->realAmountStr = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>