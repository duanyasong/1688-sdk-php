<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProductSimpleTemplateCreateParam {

        
        /**
    * @return 商品图片，最大2MB，建议使用500*500像素以上，支持jpg/jpeg/png格式，纯色背景图片，推荐白色；图片比例为正方形，商品居中，识别主体的在图片中占比大于80%； 调用方注意图片的方向，该 API 只能比较准确地识别正向的图片（比如，由于手持设备引起的图片旋转 90 度后，会造成识别结果的不准确，甚至出错）；另外调用方上传图片前可自由美化图片； 请求向服务端提交文件即可 (商品图片二进制文件数组 PHP 的话，用 base64_encode 转换 ，JAVA 是 通过 IOUtils.toByteArray 转换)
    */
        public function getImageBytes() {
        $tempResult = $this->sdkStdResult["imageBytes"];
        return $tempResult;
    }
    
    /**
     * 设置商品图片，最大2MB，建议使用500*500像素以上，支持jpg/jpeg/png格式，纯色背景图片，推荐白色；图片比例为正方形，商品居中，识别主体的在图片中占比大于80%； 调用方注意图片的方向，该 API 只能比较准确地识别正向的图片（比如，由于手持设备引起的图片旋转 90 度后，会造成识别结果的不准确，甚至出错）；另外调用方上传图片前可自由美化图片； 请求向服务端提交文件即可 (商品图片二进制文件数组 PHP 的话，用 base64_encode 转换 ，JAVA 是 通过 IOUtils.toByteArray 转换)     
     * @param array include @see Byte[] $imageBytes     
     * 参数示例：<pre>[1,2,3,4]</pre>     
     * 此参数必填     */
    public function setImageBytes( $imageBytes) {
        $this->sdkStdResult["imageBytes"] = $imageBytes;
    }
    
        
        /**
    * @return 非必填，商品吊牌图片，用于辅助生成更加准确的商品属性，最大2MB，建议使用500*500像素以上，支持jpg/jpeg/png格式；调用方注意图片的方向，该 API 只能比较准确地识别正向的图片（比如，由于手持设备引起的图片旋转 90 度后，会造成识别结果的不准确，甚至出错）；请求向服务端提交文件即可 (图片二进制文件数组 PHP 的话，用 base64_encode 转换 ，JAVA 是 通过 IOUtils.toByteArray 转换)
    */
        public function getTagBytes() {
        $tempResult = $this->sdkStdResult["tagBytes"];
        return $tempResult;
    }
    
    /**
     * 设置非必填，商品吊牌图片，用于辅助生成更加准确的商品属性，最大2MB，建议使用500*500像素以上，支持jpg/jpeg/png格式；调用方注意图片的方向，该 API 只能比较准确地识别正向的图片（比如，由于手持设备引起的图片旋转 90 度后，会造成识别结果的不准确，甚至出错）；请求向服务端提交文件即可 (图片二进制文件数组 PHP 的话，用 base64_encode 转换 ，JAVA 是 通过 IOUtils.toByteArray 转换)     
     * @param array include @see Byte[] $tagBytes     
     * 参数示例：<pre>[1,2,3,4]</pre>     
     * 此参数必填     */
    public function setTagBytes( $tagBytes) {
        $this->sdkStdResult["tagBytes"] = $tagBytes;
    }
    
        
        /**
    * @return 一级类目ID
    */
        public function getCategoryID() {
        $tempResult = $this->sdkStdResult["categoryID"];
        return $tempResult;
    }
    
    /**
     * 设置一级类目ID     
     * @param Long $categoryID     
     * 参数示例：<pre>10166</pre>     
     * 此参数必填     */
    public function setCategoryID( $categoryID) {
        $this->sdkStdResult["categoryID"] = $categoryID;
    }
    
        
        /**
    * @return 商品标志，名称
    */
        public function getName() {
        $tempResult = $this->sdkStdResult["name"];
        return $tempResult;
    }
    
    /**
     * 设置商品标志，名称     
     * @param String $name     
     * 参数示例：<pre>pictureName</pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->sdkStdResult["name"] = $name;
    }
    
        
        /**
    * @return 商品描述
    */
        public function getDescription() {
        $tempResult = $this->sdkStdResult["description"];
        return $tempResult;
    }
    
    /**
     * 设置商品描述     
     * @param String $description     
     * 参数示例：<pre>测试</pre>     
     * 此参数必填     */
    public function setDescription( $description) {
        $this->sdkStdResult["description"] = $description;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>