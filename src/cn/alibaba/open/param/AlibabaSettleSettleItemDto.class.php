<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaSettleSettleItemDto extends SDKDomain {

       	
    private $settleAmount;
    
        /**
    * @return 已结算的金额
    */
        public function getSettleAmount() {
        return $this->settleAmount;
    }
    
    /**
     * 设置已结算的金额     
     * @param BigDecimal $settleAmount     
     * 参数示例：<pre>18.11</pre>     
     * 此参数必填     */
    public function setSettleAmount( $settleAmount) {
        $this->settleAmount = $settleAmount;
    }
    
        	
    private $alipayAcount;
    
        /**
    * @return 结算的支付宝账号
    */
        public function getAlipayAcount() {
        return $this->alipayAcount;
    }
    
    /**
     * 设置结算的支付宝账号     
     * @param String $alipayAcount     
     * 参数示例：<pre>dz@fjd***.com</pre>     
     * 此参数必填     */
    public function setAlipayAcount( $alipayAcount) {
        $this->alipayAcount = $alipayAcount;
    }
    
        	
    private $alipayAcountName;
    
        /**
    * @return 结算的支付宝账户名称
    */
        public function getAlipayAcountName() {
        return $this->alipayAcountName;
    }
    
    /**
     * 设置结算的支付宝账户名称     
     * @param String $alipayAcountName     
     * 参数示例：<pre>------</pre>     
     * 此参数必填     */
    public function setAlipayAcountName( $alipayAcountName) {
        $this->alipayAcountName = $alipayAcountName;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "settleAmount", $this->stdResult )) {
    				$this->settleAmount = $this->stdResult->{"settleAmount"};
    			}
    			    		    				    			    			if (array_key_exists ( "alipayAcount", $this->stdResult )) {
    				$this->alipayAcount = $this->stdResult->{"alipayAcount"};
    			}
    			    		    				    			    			if (array_key_exists ( "alipayAcountName", $this->stdResult )) {
    				$this->alipayAcountName = $this->stdResult->{"alipayAcountName"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "settleAmount", $this->arrayResult )) {
    			$this->settleAmount = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "alipayAcount", $this->arrayResult )) {
    			$this->alipayAcount = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "alipayAcountName", $this->arrayResult )) {
    			$this->alipayAcountName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>