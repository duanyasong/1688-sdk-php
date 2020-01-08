<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaProductDescrTemplateCreateModel3DParam/AlibabaProductDescriptionImageInfo.class.php');
include_once ('AlibabaProductDescrTemplateCreateModel3DParam/AlibabaAitoolsProductDetailOriginalImageInfo.class.php');

class AlibabaProductDescriptionDetailInfo extends SDKDomain {

       	
    private $title;
    
        /**
    * @return 细节描述标题
    */
        public function getTitle() {
        return $this->title;
    }
    
    /**
     * 设置细节描述标题     
     * @param String $title     
     * 参数示例：<pre>领型细节</pre>     
     * 此参数必填     */
    public function setTitle( $title) {
        $this->title = $title;
    }
    
        	
    private $description;
    
        /**
    * @return 细节描述文案
    */
        public function getDescription() {
        return $this->description;
    }
    
    /**
     * 设置细节描述文案     
     * @param String $description     
     * 参数示例：<pre>一句简短的描述，1-3句话，可能为空</pre>     
     * 此参数必填     */
    public function setDescription( $description) {
        $this->description = $description;
    }
    
        	
    private $image;
    
        /**
    * @return 细节图片信息
    */
        public function getImage() {
        return $this->image;
    }
    
    /**
     * 设置细节图片信息     
     * @param AlibabaProductDescriptionImageInfo $image     
     * 参数示例：<pre>{"url":"http://foo/bar.jpg"}</pre>     
     * 此参数必填     */
    public function setImage(AlibabaProductDescriptionImageInfo $image) {
        $this->image = $image;
    }
    
        	
    private $originalImage;
    
        /**
    * @return 细节切图所在的原图信息，ISV 可根据此信息对默认的切图信息进行调整和定制
    */
        public function getOriginalImage() {
        return $this->originalImage;
    }
    
    /**
     * 设置细节切图所在的原图信息，ISV 可根据此信息对默认的切图信息进行调整和定制     
     * @param AlibabaAitoolsProductDetailOriginalImageInfo $originalImage     
     * 参数示例：<pre>{}</pre>     
     * 此参数必填     */
    public function setOriginalImage(AlibabaAitoolsProductDetailOriginalImageInfo $originalImage) {
        $this->originalImage = $originalImage;
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
    			    		    				    			    			if (array_key_exists ( "image", $this->stdResult )) {
    				$imageResult=$this->stdResult->{"image"};
    				$this->image = new AlibabaProductDescriptionImageInfo();
    				$this->image->setStdResult ( $imageResult);
    			}
    			    		    				    			    			if (array_key_exists ( "originalImage", $this->stdResult )) {
    				$originalImageResult=$this->stdResult->{"originalImage"};
    				$this->originalImage = new AlibabaAitoolsProductDetailOriginalImageInfo();
    				$this->originalImage->setStdResult ( $originalImageResult);
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
    		    	    			    		    		if (array_key_exists ( "image", $this->arrayResult )) {
    		$imageResult=$arrayResult['${paramType.paramName}'];
    			    			$this->image = new AlibabaProductDescriptionImageInfo();
    			    			$this->image->setStdResult ( $imageResult);
    		}
    		    	    			    		    		if (array_key_exists ( "originalImage", $this->arrayResult )) {
    		$originalImageResult=$arrayResult['${paramType.paramName}'];
    			    			$this->originalImage = new AlibabaAitoolsProductDetailOriginalImageInfo();
    			    			$this->originalImage->setStdResult ( $originalImageResult);
    		}
    		    	    		}
 
   
}
?>