<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaProductDescrTemplateCreateModel3DParam/AlibabaProductDescriptionImageInfo.class.php');
include_once ('AlibabaProductDescrTemplateCreateModel3DParam/AlibabaProductDescriptionMultiImageInfo.class.php');
include_once ('AlibabaProductDescrTemplateCreateModel3DParam/AlibabaProductDescriptionDetailInfo.class.php');

class AlibabaProductDescriptionDescriptionInfo extends SDKDomain {

       	
    private $mainImage;
    
        /**
    * @return 主图图片信息
    */
        public function getMainImage() {
        return $this->mainImage;
    }
    
    /**
     * 设置主图图片信息     
     * @param AlibabaProductDescriptionImageInfo $mainImage     
     * 参数示例：<pre>{}</pre>     
     * 此参数必填     */
    public function setMainImage(AlibabaProductDescriptionImageInfo $mainImage) {
        $this->mainImage = $mainImage;
    }
    
        	
    private $mainDescriptionText;
    
        /**
    * @return 商品总体描述，可能为空
    */
        public function getMainDescriptionText() {
        return $this->mainDescriptionText;
    }
    
    /**
     * 设置商品总体描述，可能为空     
     * @param String $mainDescriptionText     
     * 参数示例：<pre>百搭T恤，衬托你的女神气质</pre>     
     * 此参数必填     */
    public function setMainDescriptionText( $mainDescriptionText) {
        $this->mainDescriptionText = $mainDescriptionText;
    }
    
        	
    private $multiImageParts;
    
        /**
    * @return 商品详情的多图部分，可能为空。注意，在精美版场景下，该字段中第一个元素默认为 3D 模型的多角度图部分，images.title 代表该角度名称。3D 多角度图片的角度名称根据常规物品摆放规则输出，如用户未按要求摆放则角度名称可能有误，建议以文案形式提示用户。
    */
        public function getMultiImageParts() {
        return $this->multiImageParts;
    }
    
    /**
     * 设置商品详情的多图部分，可能为空。注意，在精美版场景下，该字段中第一个元素默认为 3D 模型的多角度图部分，images.title 代表该角度名称。3D 多角度图片的角度名称根据常规物品摆放规则输出，如用户未按要求摆放则角度名称可能有误，建议以文案形式提示用户。     
     * @param array include @see AlibabaProductDescriptionMultiImageInfo[] $multiImageParts     
     * 参数示例：<pre>[{}]</pre>     
     * 此参数必填     */
    public function setMultiImageParts(AlibabaProductDescriptionMultiImageInfo $multiImageParts) {
        $this->multiImageParts = $multiImageParts;
    }
    
        	
    private $details;
    
        /**
    * @return 
    */
        public function getDetails() {
        return $this->details;
    }
    
    /**
     * 设置     
     * @param array include @see AlibabaProductDescriptionDetailInfo[] $details     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDetails(AlibabaProductDescriptionDetailInfo $details) {
        $this->details = $details;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "mainImage", $this->stdResult )) {
    				$mainImageResult=$this->stdResult->{"mainImage"};
    				$this->mainImage = new AlibabaProductDescriptionImageInfo();
    				$this->mainImage->setStdResult ( $mainImageResult);
    			}
    			    		    				    			    			if (array_key_exists ( "mainDescriptionText", $this->stdResult )) {
    				$this->mainDescriptionText = $this->stdResult->{"mainDescriptionText"};
    			}
    			    		    				    			    			if (array_key_exists ( "multiImageParts", $this->stdResult )) {
    			$multiImagePartsResult=$this->stdResult->{"multiImageParts"};
    				$object = json_decode ( json_encode ( $multiImagePartsResult ), true );
					$this->multiImageParts = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaProductDescriptionMultiImageInfoResult=new AlibabaProductDescriptionMultiImageInfo();
						$AlibabaProductDescriptionMultiImageInfoResult->setArrayResult($arrayobject );
						$this->multiImageParts [$i] = $AlibabaProductDescriptionMultiImageInfoResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "details", $this->stdResult )) {
    			$detailsResult=$this->stdResult->{"details"};
    				$object = json_decode ( json_encode ( $detailsResult ), true );
					$this->details = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaProductDescriptionDetailInfoResult=new AlibabaProductDescriptionDetailInfo();
						$AlibabaProductDescriptionDetailInfoResult->setArrayResult($arrayobject );
						$this->details [$i] = $AlibabaProductDescriptionDetailInfoResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "mainImage", $this->arrayResult )) {
    		$mainImageResult=$arrayResult['${paramType.paramName}'];
    			    			$this->mainImage = new AlibabaProductDescriptionImageInfo();
    			    			$this->mainImage->setStdResult ( $mainImageResult);
    		}
    		    	    			    		    			if (array_key_exists ( "mainDescriptionText", $this->arrayResult )) {
    			$this->mainDescriptionText = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "multiImageParts", $this->arrayResult )) {
    		$multiImagePartsResult=$arrayResult['${paramType.paramName}'];
    			$this->multiImageParts = new AlibabaProductDescriptionMultiImageInfo();
    			$this->multiImageParts->setStdResult ( $multiImagePartsResult);
    		}
    		    	    			    		    		if (array_key_exists ( "details", $this->arrayResult )) {
    		$detailsResult=$arrayResult['${paramType.paramName}'];
    			$this->details = new AlibabaProductDescriptionDetailInfo();
    			$this->details->setStdResult ( $detailsResult);
    		}
    		    	    		}
 
   
}
?>