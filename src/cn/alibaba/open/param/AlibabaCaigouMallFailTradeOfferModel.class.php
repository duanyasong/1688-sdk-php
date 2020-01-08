<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaCaigouMallCreateTradeOrderParam/AlibabaCaigouMallTradeOfferModel.class.php');

class AlibabaCaigouMallFailTradeOfferModel extends SDKDomain {

       	
    private $failOfferList;
    
        /**
    * @return 失败商品列表
    */
        public function getFailOfferList() {
        return $this->failOfferList;
    }
    
    /**
     * 设置失败商品列表     
     * @param array include @see AlibabaCaigouMallTradeOfferModel[] $failOfferList     
     * 参数示例：<pre>[]</pre>     
     * 此参数必填     */
    public function setFailOfferList(AlibabaCaigouMallTradeOfferModel $failOfferList) {
        $this->failOfferList = $failOfferList;
    }
    
        	
    private $errorCode;
    
        /**
    * @return 错误代码
    */
        public function getErrorCode() {
        return $this->errorCode;
    }
    
    /**
     * 设置错误代码     
     * @param String $errorCode     
     * 参数示例：<pre>500</pre>     
     * 此参数必填     */
    public function setErrorCode( $errorCode) {
        $this->errorCode = $errorCode;
    }
    
        	
    private $errorMessage;
    
        /**
    * @return 错误信息
    */
        public function getErrorMessage() {
        return $this->errorMessage;
    }
    
    /**
     * 设置错误信息     
     * @param String $errorMessage     
     * 参数示例：<pre>系统异常</pre>     
     * 此参数必填     */
    public function setErrorMessage( $errorMessage) {
        $this->errorMessage = $errorMessage;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "failOfferList", $this->stdResult )) {
    			$failOfferListResult=$this->stdResult->{"failOfferList"};
    				$object = json_decode ( json_encode ( $failOfferListResult ), true );
					$this->failOfferList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaCaigouMallTradeOfferModelResult=new AlibabaCaigouMallTradeOfferModel();
						$AlibabaCaigouMallTradeOfferModelResult->setArrayResult($arrayobject );
						$this->failOfferList [$i] = $AlibabaCaigouMallTradeOfferModelResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "errorCode", $this->stdResult )) {
    				$this->errorCode = $this->stdResult->{"errorCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorMessage", $this->stdResult )) {
    				$this->errorMessage = $this->stdResult->{"errorMessage"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "failOfferList", $this->arrayResult )) {
    		$failOfferListResult=$arrayResult['${paramType.paramName}'];
    			$this->failOfferList = new AlibabaCaigouMallTradeOfferModel();
    			$this->failOfferList->setStdResult ( $failOfferListResult);
    		}
    		    	    			    		    			if (array_key_exists ( "errorCode", $this->arrayResult )) {
    			$this->errorCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorMessage", $this->arrayResult )) {
    			$this->errorMessage = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>