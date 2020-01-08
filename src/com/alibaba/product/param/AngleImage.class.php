<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AngleImage extends SDKDomain {

       	
    private $url;
    
        /**
    * @return 图地址
    */
        public function getUrl() {
        return $this->url;
    }
    
    /**
     * 设置图地址     
     * @param String $url     
     * 参数示例：<pre>xxx.jpg</pre>     
     * 此参数必填     */
    public function setUrl( $url) {
        $this->url = $url;
    }
    
        	
    private $title;
    
        /**
    * @return 图名称
    */
        public function getTitle() {
        return $this->title;
    }
    
    /**
     * 设置图名称     
     * @param String $title     
     * 参数示例：<pre>左侧图</pre>     
     * 此参数必填     */
    public function setTitle( $title) {
        $this->title = $title;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "url", $this->stdResult )) {
    				$this->url = $this->stdResult->{"url"};
    			}
    			    		    				    			    			if (array_key_exists ( "title", $this->stdResult )) {
    				$this->title = $this->stdResult->{"title"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "url", $this->arrayResult )) {
    			$this->url = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "title", $this->arrayResult )) {
    			$this->title = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>