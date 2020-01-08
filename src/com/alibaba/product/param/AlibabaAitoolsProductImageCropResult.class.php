<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaAitoolsProductImageCropParam/AlibabaAitoolsProductProductImageDetail.class.php');

class AlibabaAitoolsProductImageCropResult {

        	
    private $productDetails;
    
        /**
    * @return 慧眼识货商品图片细节列表。其中细节部位的图片区域大小和位置按照 0~1 之间的比例进行描述，比如原图为 800 x 600 像素大小的图片，widthRate = 0.5 / heightRate = 0.5 / xRate = 0.5 / yRate = 0.5，则细节图为原图的右下角 1/4 的部分。
    */
        public function getProductDetails() {
        return $this->productDetails;
    }
    
    /**
     * 设置慧眼识货商品图片细节列表。其中细节部位的图片区域大小和位置按照 0~1 之间的比例进行描述，比如原图为 800 x 600 像素大小的图片，widthRate = 0.5 / heightRate = 0.5 / xRate = 0.5 / yRate = 0.5，则细节图为原图的右下角 1/4 的部分。     
     * @param array include @see AlibabaAitoolsProductProductImageDetail[] $productDetails     
          
     * 此参数必填     */
    public function setProductDetails(AlibabaAitoolsProductProductImageDetail $productDetails) {
        $this->productDetails = $productDetails;
    }
    
        	
    private $imageWidth;
    
        /**
    * @return 原图宽度，像素为单位
    */
        public function getImageWidth() {
        return $this->imageWidth;
    }
    
    /**
     * 设置原图宽度，像素为单位     
     * @param Integer $imageWidth     
          
     * 此参数必填     */
    public function setImageWidth( $imageWidth) {
        $this->imageWidth = $imageWidth;
    }
    
        	
    private $imageHeight;
    
        /**
    * @return 原图高度，像素为单位
    */
        public function getImageHeight() {
        return $this->imageHeight;
    }
    
    /**
     * 设置原图高度，像素为单位     
     * @param Integer $imageHeight     
          
     * 此参数必填     */
    public function setImageHeight( $imageHeight) {
        $this->imageHeight = $imageHeight;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "productDetails", $this->stdResult )) {
    			$productDetailsResult=$this->stdResult->{"productDetails"};
    				$object = json_decode ( json_encode ( $productDetailsResult ), true );
					$this->productDetails = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaAitoolsProductProductImageDetailResult=new AlibabaAitoolsProductProductImageDetail();
						$AlibabaAitoolsProductProductImageDetailResult->setArrayResult($arrayobject );
						$this->productDetails [$i] = $AlibabaAitoolsProductProductImageDetailResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "imageWidth", $this->stdResult )) {
    				$this->imageWidth = $this->stdResult->{"imageWidth"};
    			}
    			    		    				    			    			if (array_key_exists ( "imageHeight", $this->stdResult )) {
    				$this->imageHeight = $this->stdResult->{"imageHeight"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "productDetails", $this->arrayResult )) {
    		$productDetailsResult=$arrayResult['${paramType.paramName}'];
    			$this->productDetails = new AlibabaAitoolsProductProductImageDetail();
    			$this->productDetails->setStdResult ( $productDetailsResult);
    		}
    		    	    			    		    			if (array_key_exists ( "imageWidth", $this->arrayResult )) {
    			$this->imageWidth = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "imageHeight", $this->arrayResult )) {
    			$this->imageHeight = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>