<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaSearchGuessOfferDaixiaoVersion2Param/ComAlibabaCbuSearchwebOpenHsfResultIsvOfferQueryResult.class.php');

class AlibabaCbuSearchwebOpenHsfResultIsvOfferQueryCommonResult extends SDKDomain {

       	
    private $isSuccess;
    
        /**
    * @return 是否调用成功
    */
        public function getIsSuccess() {
        return $this->isSuccess;
    }
    
    /**
     * 设置是否调用成功     
     * @param Boolean $isSuccess     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIsSuccess( $isSuccess) {
        $this->isSuccess = $isSuccess;
    }
    
        	
    private $errorMsg;
    
        /**
    * @return 错误信息
    */
        public function getErrorMsg() {
        return $this->errorMsg;
    }
    
    /**
     * 设置错误信息     
     * @param String $errorMsg     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setErrorMsg( $errorMsg) {
        $this->errorMsg = $errorMsg;
    }
    
        	
    private $result;
    
        /**
    * @return offer查询的信息
    */
        public function getResult() {
        return $this->result;
    }
    
    /**
     * 设置offer查询的信息     
     * @param ComAlibabaCbuSearchwebOpenHsfResultIsvOfferQueryResult $result     
     * 参数示例：<pre>{
        moreUrl:'更多信息url',
        offerList:[
            {
                offerId：123，
                subject:'标题',
                price:123,// 价格
                detailUrl:'详情url',
                imageUrl:'图片url',
                companyName:'公司名'，
                bookedCount:10//月成交笔数
            }
        }
    }</pre>     
     * 此参数必填     */
    public function setResult(ComAlibabaCbuSearchwebOpenHsfResultIsvOfferQueryResult $result) {
        $this->result = $result;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "isSuccess", $this->stdResult )) {
    				$this->isSuccess = $this->stdResult->{"isSuccess"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorMsg", $this->stdResult )) {
    				$this->errorMsg = $this->stdResult->{"errorMsg"};
    			}
    			    		    				    			    			if (array_key_exists ( "result", $this->stdResult )) {
    				$resultResult=$this->stdResult->{"result"};
    				$this->result = new ComAlibabaCbuSearchwebOpenHsfResultIsvOfferQueryResult();
    				$this->result->setStdResult ( $resultResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "isSuccess", $this->arrayResult )) {
    			$this->isSuccess = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorMsg", $this->arrayResult )) {
    			$this->errorMsg = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "result", $this->arrayResult )) {
    		$resultResult=$arrayResult['${paramType.paramName}'];
    			    			$this->result = new ComAlibabaCbuSearchwebOpenHsfResultIsvOfferQueryResult();
    			    			$this->result->setStdResult ( $resultResult);
    		}
    		    	    		}
 
   
}
?>