<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaProductTemplateCreateModel3DParam/AlibabaProductDescriptionImageInfo.class.php');

class AlibabaProductDescriptionMultiImageInfo extends SDKDomain {

       	
    private $title;
    
        /**
    * @return 多图部分的标题
    */
        public function getTitle() {
        return $this->title;
    }
    
    /**
     * 设置多图部分的标题     
     * @param String $title     
     * 参数示例：<pre>多种颜色</pre>     
     * 此参数必填     */
    public function setTitle( $title) {
        $this->title = $title;
    }
    
        	
    private $description;
    
        /**
    * @return 多图部分的描述，可能为空
    */
        public function getDescription() {
        return $this->description;
    }
    
    /**
     * 设置多图部分的描述，可能为空     
     * @param String $description     
     * 参数示例：<pre>包含红色、蓝色、黄色等多种选择</pre>     
     * 此参数必填     */
    public function setDescription( $description) {
        $this->description = $description;
    }
    
        	
    private $images;
    
        /**
    * @return 多个图片信息
    */
        public function getImages() {
        return $this->images;
    }
    
    /**
     * 设置多个图片信息     
     * @param array include @see AlibabaProductDescriptionImageInfo[] $images     
     * 参数示例：<pre>[{}]</pre>     
     * 此参数必填     */
    public function setImages(AlibabaProductDescriptionImageInfo $images) {
        $this->images = $images;
    }
    
        	
    private $subTitle;
    
        /**
    * @return 多图部分副标题
    */
        public function getSubTitle() {
        return $this->subTitle;
    }
    
    /**
     * 设置多图部分副标题     
     * @param String $subTitle     
     * 参数示例：<pre>Different Colors</pre>     
     * 此参数必填     */
    public function setSubTitle( $subTitle) {
        $this->subTitle = $subTitle;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "title", $this->stdResult )) {
    				$this->title = $this->stdResult->{"title"};
    			}
    			    		    				    			    			if (array_key_exists ( "description", $this->stdResult )) {
    				$this->description = $this->stdResult->{"description"};
    			}
    			    		    				    			    			if (array_key_exists ( "images", $this->stdResult )) {
    			$imagesResult=$this->stdResult->{"images"};
    				$object = json_decode ( json_encode ( $imagesResult ), true );
					$this->images = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaProductDescriptionImageInfoResult=new AlibabaProductDescriptionImageInfo();
						$AlibabaProductDescriptionImageInfoResult->setArrayResult($arrayobject );
						$this->images [$i] = $AlibabaProductDescriptionImageInfoResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "subTitle", $this->stdResult )) {
    				$this->subTitle = $this->stdResult->{"subTitle"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "title", $this->arrayResult )) {
    			$this->title = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "description", $this->arrayResult )) {
    			$this->description = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "images", $this->arrayResult )) {
    		$imagesResult=$arrayResult['${paramType.paramName}'];
    			$this->images = new AlibabaProductDescriptionImageInfo();
    			$this->images->setStdResult ( $imagesResult);
    		}
    		    	    			    		    			if (array_key_exists ( "subTitle", $this->arrayResult )) {
    			$this->subTitle = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>