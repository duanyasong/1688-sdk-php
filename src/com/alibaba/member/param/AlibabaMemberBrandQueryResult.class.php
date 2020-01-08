<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaMemberBrandQueryParam/BrandMemberResult.class.php');

class AlibabaMemberBrandQueryResult {

        	
    private $success;
    
        /**
    * @return 请求是否成功
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置请求是否成功     
     * @param Boolean $success     
          
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
        	
    private $code;
    
        /**
    * @return 错误code
    */
        public function getCode() {
        return $this->code;
    }
    
    /**
     * 设置错误code     
     * @param String $code     
          
     * 此参数必填     */
    public function setCode( $code) {
        $this->code = $code;
    }
    
        	
    private $message;
    
        /**
    * @return 错误消息内容
    */
        public function getMessage() {
        return $this->message;
    }
    
    /**
     * 设置错误消息内容     
     * @param String $message     
          
     * 此参数必填     */
    public function setMessage( $message) {
        $this->message = $message;
    }
    
        	
    private $result;
    
        /**
    * @return 授权品牌查询结果
    */
        public function getResult() {
        return $this->result;
    }
    
    /**
     * 设置授权品牌查询结果     
     * @param array include @see BrandMemberResult[] $result     
          
     * 此参数必填     */
    public function setResult(BrandMemberResult $result) {
        $this->result = $result;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    				    			    			if (array_key_exists ( "code", $this->stdResult )) {
    				$this->code = $this->stdResult->{"code"};
    			}
    			    		    				    			    			if (array_key_exists ( "message", $this->stdResult )) {
    				$this->message = $this->stdResult->{"message"};
    			}
    			    		    				    			    			if (array_key_exists ( "result", $this->stdResult )) {
    			$resultResult=$this->stdResult->{"result"};
    				$object = json_decode ( json_encode ( $resultResult ), true );
					$this->result = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$BrandMemberResultResult=new BrandMemberResult();
						$BrandMemberResultResult->setArrayResult($arrayobject );
						$this->result [$i] = $BrandMemberResultResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "code", $this->arrayResult )) {
    			$this->code = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "message", $this->arrayResult )) {
    			$this->message = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "result", $this->arrayResult )) {
    		$resultResult=$arrayResult['${paramType.paramName}'];
    			$this->result = new BrandMemberResult();
    			$this->result->setStdResult ( $resultResult);
    		}
    		    	    		}

}
?>