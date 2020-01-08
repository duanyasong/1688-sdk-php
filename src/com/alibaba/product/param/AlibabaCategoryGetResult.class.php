<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaCategoryGetParam/AlibabaCategoryCategoryInfo.class.php');

class AlibabaCategoryGetResult {

        	
    private $succes;
    
        /**
    * @return 是否成功
    */
        public function getSucces() {
        return $this->succes;
    }
    
    /**
     * 设置是否成功     
     * @param String $succes     
          
     * 此参数必填     */
    public function setSucces( $succes) {
        $this->succes = $succes;
    }
    
        	
    private $categoryInfo;
    
        /**
    * @return 类目列表
    */
        public function getCategoryInfo() {
        return $this->categoryInfo;
    }
    
    /**
     * 设置类目列表     
     * @param array include @see AlibabaCategoryCategoryInfo[] $categoryInfo     
          
     * 此参数必填     */
    public function setCategoryInfo(AlibabaCategoryCategoryInfo $categoryInfo) {
        $this->categoryInfo = $categoryInfo;
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
          
     * 此参数必填     */
    public function setErrorMsg( $errorMsg) {
        $this->errorMsg = $errorMsg;
    }
    
        	
    private $errorCode;
    
        /**
    * @return 错误码
    */
        public function getErrorCode() {
        return $this->errorCode;
    }
    
    /**
     * 设置错误码     
     * @param String $errorCode     
          
     * 此参数必填     */
    public function setErrorCode( $errorCode) {
        $this->errorCode = $errorCode;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "succes", $this->stdResult )) {
    				$this->succes = $this->stdResult->{"succes"};
    			}
    			    		    				    			    			if (array_key_exists ( "categoryInfo", $this->stdResult )) {
    			$categoryInfoResult=$this->stdResult->{"categoryInfo"};
    				$object = json_decode ( json_encode ( $categoryInfoResult ), true );
					$this->categoryInfo = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaCategoryCategoryInfoResult=new AlibabaCategoryCategoryInfo();
						$AlibabaCategoryCategoryInfoResult->setArrayResult($arrayobject );
						$this->categoryInfo [$i] = $AlibabaCategoryCategoryInfoResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "errorMsg", $this->stdResult )) {
    				$this->errorMsg = $this->stdResult->{"errorMsg"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorCode", $this->stdResult )) {
    				$this->errorCode = $this->stdResult->{"errorCode"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "succes", $this->arrayResult )) {
    			$this->succes = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "categoryInfo", $this->arrayResult )) {
    		$categoryInfoResult=$arrayResult['${paramType.paramName}'];
    			$this->categoryInfo = new AlibabaCategoryCategoryInfo();
    			$this->categoryInfo->setStdResult ( $categoryInfoResult);
    		}
    		    	    			    		    			if (array_key_exists ( "errorMsg", $this->arrayResult )) {
    			$this->errorMsg = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorCode", $this->arrayResult )) {
    			$this->errorCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>