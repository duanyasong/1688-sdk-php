<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class TradeTermsInfo extends SDKDomain {

       	
    private $payStatus;
    
        /**
    * @return 支付状态
    */
        public function getPayStatus() {
        return $this->payStatus;
    }
    
    /**
     * 设置支付状态     
     * @param String $payStatus     
     * 参数示例：<pre>2</pre>     
     * 此参数必填     */
    public function setPayStatus( $payStatus) {
        $this->payStatus = $payStatus;
    }
    
        	
    private $payStatusDesc;
    
        /**
    * @return 支付状态描述
    */
        public function getPayStatusDesc() {
        return $this->payStatusDesc;
    }
    
    /**
     * 设置支付状态描述     
     * @param String $payStatusDesc     
     * 参数示例：<pre>已付款</pre>     
     * 此参数必填     */
    public function setPayStatusDesc( $payStatusDesc) {
        $this->payStatusDesc = $payStatusDesc;
    }
    
        	
    private $payTime;
    
        /**
    * @return 完成阶段支付时间
    */
        public function getPayTime() {
        return $this->payTime;
    }
    
    /**
     * 设置完成阶段支付时间     
     * @param String $payTime     
     * 参数示例：<pre>20190424145347000+0800</pre>     
     * 此参数必填     */
    public function setPayTime( $payTime) {
        $this->payTime = $payTime;
    }
    
        	
    private $payWay;
    
        /**
    * @return 支付方式
    */
        public function getPayWay() {
        return $this->payWay;
    }
    
    /**
     * 设置支付方式     
     * @param String $payWay     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setPayWay( $payWay) {
        $this->payWay = $payWay;
    }
    
        	
    private $payWayDesc;
    
        /**
    * @return 支付方式描述
    */
        public function getPayWayDesc() {
        return $this->payWayDesc;
    }
    
    /**
     * 设置支付方式描述     
     * @param String $payWayDesc     
     * 参数示例：<pre>支付宝</pre>     
     * 此参数必填     */
    public function setPayWayDesc( $payWayDesc) {
        $this->payWayDesc = $payWayDesc;
    }
    
        	
    private $phasAmount;
    
        /**
    * @return 阶段金额
    */
        public function getPhasAmount() {
        return $this->phasAmount;
    }
    
    /**
     * 设置阶段金额     
     * @param Double $phasAmount     
     * 参数示例：<pre>12.34</pre>     
     * 此参数必填     */
    public function setPhasAmount( $phasAmount) {
        $this->phasAmount = $phasAmount;
    }
    
        	
    private $phase;
    
        /**
    * @return 阶段
    */
        public function getPhase() {
        return $this->phase;
    }
    
    /**
     * 设置阶段     
     * @param Long $phase     
     * 参数示例：<pre>1234567</pre>     
     * 此参数必填     */
    public function setPhase( $phase) {
        $this->phase = $phase;
    }
    
        	
    private $expressPay;
    
        /**
    * @return 支付类型
    */
        public function getExpressPay() {
        return $this->expressPay;
    }
    
    /**
     * 设置支付类型     
     * @param Boolean $expressPay     
     * 参数示例：<pre>false</pre>     
     * 此参数必填     */
    public function setExpressPay( $expressPay) {
        $this->expressPay = $expressPay;
    }
    
        	
    private $cardPay;
    
        /**
    * @return 支付类型
    */
        public function getCardPay() {
        return $this->cardPay;
    }
    
    /**
     * 设置支付类型     
     * @param Boolean $cardPay     
     * 参数示例：<pre>false</pre>     
     * 此参数必填     */
    public function setCardPay( $cardPay) {
        $this->cardPay = $cardPay;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "payStatus", $this->stdResult )) {
    				$this->payStatus = $this->stdResult->{"payStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "payStatusDesc", $this->stdResult )) {
    				$this->payStatusDesc = $this->stdResult->{"payStatusDesc"};
    			}
    			    		    				    			    			if (array_key_exists ( "payTime", $this->stdResult )) {
    				$this->payTime = $this->stdResult->{"payTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "payWay", $this->stdResult )) {
    				$this->payWay = $this->stdResult->{"payWay"};
    			}
    			    		    				    			    			if (array_key_exists ( "payWayDesc", $this->stdResult )) {
    				$this->payWayDesc = $this->stdResult->{"payWayDesc"};
    			}
    			    		    				    			    			if (array_key_exists ( "phasAmount", $this->stdResult )) {
    				$this->phasAmount = $this->stdResult->{"phasAmount"};
    			}
    			    		    				    			    			if (array_key_exists ( "phase", $this->stdResult )) {
    				$this->phase = $this->stdResult->{"phase"};
    			}
    			    		    				    			    			if (array_key_exists ( "expressPay", $this->stdResult )) {
    				$this->expressPay = $this->stdResult->{"expressPay"};
    			}
    			    		    				    			    			if (array_key_exists ( "cardPay", $this->stdResult )) {
    				$this->cardPay = $this->stdResult->{"cardPay"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "payStatus", $this->arrayResult )) {
    			$this->payStatus = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "payStatusDesc", $this->arrayResult )) {
    			$this->payStatusDesc = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "payTime", $this->arrayResult )) {
    			$this->payTime = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "payWay", $this->arrayResult )) {
    			$this->payWay = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "payWayDesc", $this->arrayResult )) {
    			$this->payWayDesc = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "phasAmount", $this->arrayResult )) {
    			$this->phasAmount = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "phase", $this->arrayResult )) {
    			$this->phase = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "expressPay", $this->arrayResult )) {
    			$this->expressPay = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "cardPay", $this->arrayResult )) {
    			$this->cardPay = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>