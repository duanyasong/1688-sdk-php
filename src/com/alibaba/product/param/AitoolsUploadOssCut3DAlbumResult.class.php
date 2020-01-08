<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AitoolsUploadOssCut3DAlbumParam/AngleImage.class.php');
include_once ('AitoolsUploadOssCut3DAlbumParam/SizeInfo.class.php');

class AitoolsUploadOssCut3DAlbumResult {

        	
    private $angleImages;
    
        /**
    * @return 6张多角度图结果
    */
        public function getAngleImages() {
        return $this->angleImages;
    }
    
    /**
     * 设置6张多角度图结果     
     * @param array include @see AngleImage[] $angleImages     
          
     * 此参数必填     */
    public function setAngleImages(AngleImage $angleImages) {
        $this->angleImages = $angleImages;
    }
    
        	
    private $mainImages;
    
        /**
    * @return 5张主图列表
    */
        public function getMainImages() {
        return $this->mainImages;
    }
    
    /**
     * 设置5张主图列表     
     * @param array include @see String[] $mainImages     
          
     * 此参数必填     */
    public function setMainImages( $mainImages) {
        $this->mainImages = $mainImages;
    }
    
        	
    private $mainImageUrl;
    
        /**
    * @return 一张主图
    */
        public function getMainImageUrl() {
        return $this->mainImageUrl;
    }
    
    /**
     * 设置一张主图     
     * @param String $mainImageUrl     
          
     * 此参数必填     */
    public function setMainImageUrl( $mainImageUrl) {
        $this->mainImageUrl = $mainImageUrl;
    }
    
        	
    private $sizeInfo;
    
        /**
    * @return 尺寸规格信息
    */
        public function getSizeInfo() {
        return $this->sizeInfo;
    }
    
    /**
     * 设置尺寸规格信息     
     * @param SizeInfo $sizeInfo     
          
     * 此参数必填     */
    public function setSizeInfo(SizeInfo $sizeInfo) {
        $this->sizeInfo = $sizeInfo;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "angleImages", $this->stdResult )) {
    			$angleImagesResult=$this->stdResult->{"angleImages"};
    				$object = json_decode ( json_encode ( $angleImagesResult ), true );
					$this->angleImages = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AngleImageResult=new AngleImage();
						$AngleImageResult->setArrayResult($arrayobject );
						$this->angleImages [$i] = $AngleImageResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "mainImages", $this->stdResult )) {
    				$this->mainImages = $this->stdResult->{"mainImages"};
    			}
    			    		    				    			    			if (array_key_exists ( "mainImageUrl", $this->stdResult )) {
    				$this->mainImageUrl = $this->stdResult->{"mainImageUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "sizeInfo", $this->stdResult )) {
    				$sizeInfoResult=$this->stdResult->{"sizeInfo"};
    				$this->sizeInfo = new SizeInfo();
    				$this->sizeInfo->setStdResult ( $sizeInfoResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "angleImages", $this->arrayResult )) {
    		$angleImagesResult=$arrayResult['${paramType.paramName}'];
    			$this->angleImages = new AngleImage();
    			$this->angleImages->setStdResult ( $angleImagesResult);
    		}
    		    	    			    		    			if (array_key_exists ( "mainImages", $this->arrayResult )) {
    			$this->mainImages = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "mainImageUrl", $this->arrayResult )) {
    			$this->mainImageUrl = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "sizeInfo", $this->arrayResult )) {
    		$sizeInfoResult=$arrayResult['${paramType.paramName}'];
    			    			$this->sizeInfo = new SizeInfo();
    			    			$this->sizeInfo->setStdResult ( $sizeInfoResult);
    		}
    		    	    		}

}
?>