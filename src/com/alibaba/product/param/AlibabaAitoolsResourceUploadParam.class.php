<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaAitoolsResourceUploadParam {

        
        /**
    * @return 商品主图数据，最大2MB，建议500*500像素以上，支持jpg/jpeg/png格式，白底图或其他纯色背景图片效果最佳；商品应占据图片主体位置，主体的在图片中占比建议大于80%；ISV 还应提示用户注意图片的方向，引导用户将旋转过的图片调整为自上而下的方向后，才能正常使用后续的识别能力，得到更加准确的识别结果；ISV 可以引导用户对图片进行美化后再上传；所有图片数据可以使用 base64 编码传输，也可以通过 HTTP Multipart Form 将文件直接提交到服务器（文件参数名与 API 参数名相对应）。
    */
        public function getImageBytes() {
        $tempResult = $this->sdkStdResult["imageBytes"];
        return $tempResult;
    }
    
    /**
     * 设置商品主图数据，最大2MB，建议500*500像素以上，支持jpg/jpeg/png格式，白底图或其他纯色背景图片效果最佳；商品应占据图片主体位置，主体的在图片中占比建议大于80%；ISV 还应提示用户注意图片的方向，引导用户将旋转过的图片调整为自上而下的方向后，才能正常使用后续的识别能力，得到更加准确的识别结果；ISV 可以引导用户对图片进行美化后再上传；所有图片数据可以使用 base64 编码传输，也可以通过 HTTP Multipart Form 将文件直接提交到服务器（文件参数名与 API 参数名相对应）。     
     * @param array include @see Byte[] $imageBytes     
     * 参数示例：<pre>Base64 数据或 Multipart Form 文件</pre>     
     * 此参数必填     */
    public function setImageBytes( $imageBytes) {
        $this->sdkStdResult["imageBytes"] = $imageBytes;
    }
    
        
        /**
    * @return 商品吊牌图片数据，最大2MB，建议500*500像素以上，支持jpg/jpeg/png格式；吊牌要求字迹清晰，吊牌本身在图片中占比建议大于80%；ISV 还应提示用户注意图片的方向，引导用户将旋转过的图片调整为自上而下的方向后，才能正常使用后续的识别能力，得到更加准确的识别结果；所有图片数据可以使用 base64 编码传输，也可以通过 HTTP Multipart Form 将文件直接提交到服务器（文件参数名与 API 参数名相对应）。
    */
        public function getTagBytes() {
        $tempResult = $this->sdkStdResult["tagBytes"];
        return $tempResult;
    }
    
    /**
     * 设置商品吊牌图片数据，最大2MB，建议500*500像素以上，支持jpg/jpeg/png格式；吊牌要求字迹清晰，吊牌本身在图片中占比建议大于80%；ISV 还应提示用户注意图片的方向，引导用户将旋转过的图片调整为自上而下的方向后，才能正常使用后续的识别能力，得到更加准确的识别结果；所有图片数据可以使用 base64 编码传输，也可以通过 HTTP Multipart Form 将文件直接提交到服务器（文件参数名与 API 参数名相对应）。     
     * @param array include @see Byte[] $tagBytes     
     * 参数示例：<pre>Base64 数据或 Multipart Form 文件</pre>     
     * 此参数必填     */
    public function setTagBytes( $tagBytes) {
        $this->sdkStdResult["tagBytes"] = $tagBytes;
    }
    
        
        /**
    * @return 商品条形码图片数据，最大2MB，建议500*500像素以上，支持jpg/jpeg/png格式；要求条形码清晰可见，不模糊，条码下方的数字清晰可辨，条形码本身在图片中占比建议大于80%；ISV 还应提示用户注意图片的方向，引导用户将旋转过的图片调整为自上而下的方向后，才能正常使用后续的识别能力，得到更加准确的识别结果；所有图片数据可以使用 base64 编码传输，也可以通过 HTTP Multipart Form 将文件直接提交到服务器（文件参数名与 API 参数名相对应）。
    */
        public function getBarcodeBytes() {
        $tempResult = $this->sdkStdResult["barcodeBytes"];
        return $tempResult;
    }
    
    /**
     * 设置商品条形码图片数据，最大2MB，建议500*500像素以上，支持jpg/jpeg/png格式；要求条形码清晰可见，不模糊，条码下方的数字清晰可辨，条形码本身在图片中占比建议大于80%；ISV 还应提示用户注意图片的方向，引导用户将旋转过的图片调整为自上而下的方向后，才能正常使用后续的识别能力，得到更加准确的识别结果；所有图片数据可以使用 base64 编码传输，也可以通过 HTTP Multipart Form 将文件直接提交到服务器（文件参数名与 API 参数名相对应）。     
     * @param array include @see Byte[] $barcodeBytes     
     * 参数示例：<pre>Base64 数据或 Multipart Form 文件</pre>     
     * 此参数必填     */
    public function setBarcodeBytes( $barcodeBytes) {
        $this->sdkStdResult["barcodeBytes"] = $barcodeBytes;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>