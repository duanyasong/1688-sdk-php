<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProductImageOperateBean extends SDKDomain {

       	
    private $imageId;
    
        /**
    * @return 图片ID
    */
        public function getImageId() {
        return $this->imageId;
    }
    
    /**
     * 设置图片ID     
     * @param Long $imageId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setImageId( $imageId) {
        $this->imageId = $imageId;
    }
    
        	
    private $result;
    
        /**
    * @return 操作结果
    */
        public function getResult() {
        return $this->result;
    }
    
    /**
     * 设置操作结果     
     * @param Boolean $result     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setResult( $result) {
        $this->result = $result;
    }
    
        	
    private $code;
    
        /**
    * @return 操作结果错误码
    */
        public function getCode() {
        return $this->code;
    }
    
    /**
     * 设置操作结果错误码     
     * @param String $code     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCode( $code) {
        $this->code = $code;
    }
    
        	
    private $desc;
    
        /**
    * @return 操作结果错误描述
    */
        public function getDesc() {
        return $this->desc;
    }
    
    /**
     * 设置操作结果错误描述     
     * @param String $desc     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDesc( $desc) {
        $this->desc = $desc;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "imageId", $this->stdResult )) {
    				$this->imageId = $this->stdResult->{"imageId"};
    			}
    			    		    				    			    			if (array_key_exists ( "result", $this->stdResult )) {
    				$this->result = $this->stdResult->{"result"};
    			}
    			    		    				    			    			if (array_key_exists ( "code", $this->stdResult )) {
    				$this->code = $this->stdResult->{"code"};
    			}
    			    		    				    			    			if (array_key_exists ( "desc", $this->stdResult )) {
    				$this->desc = $this->stdResult->{"desc"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "imageId", $this->arrayResult )) {
    			$this->imageId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "result", $this->arrayResult )) {
    			$this->result = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "code", $this->arrayResult )) {
    			$this->code = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "desc", $this->arrayResult )) {
    			$this->desc = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>