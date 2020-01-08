<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class OssGenerateSignedUploadUrlParam {

        
        /**
    * @return 指定上传的文件名，最后生成的文件URL包含此文件名，支持目录
    */
        public function getFileName() {
        $tempResult = $this->sdkStdResult["fileName"];
        return $tempResult;
    }
    
    /**
     * 设置指定上传的文件名，最后生成的文件URL包含此文件名，支持目录     
     * @param String $fileName     
     * 参数示例：<pre>testFile.xls，user/testFile.xls</pre>     
     * 此参数必填     */
    public function setFileName( $fileName) {
        $this->sdkStdResult["fileName"] = $fileName;
    }
    
        
        /**
    * @return 指定文件下载时的HTTP的ContentType，如果没有指定则根据文件名的后缀自动生成
    */
        public function getContentType() {
        $tempResult = $this->sdkStdResult["contentType"];
        return $tempResult;
    }
    
    /**
     * 设置指定文件下载时的HTTP的ContentType，如果没有指定则根据文件名的后缀自动生成     
     * @param String $contentType     
     * 参数示例：<pre>application/vnd.ms-excel</pre>     
     * 此参数必填     */
    public function setContentType( $contentType) {
        $this->sdkStdResult["contentType"] = $contentType;
    }
    
        
        /**
    * @return 指定文件的MD5值，包含此值时，在上传文件时也需要包含 Content-MD5 的头部字段
    */
        public function getContentMd5() {
        $tempResult = $this->sdkStdResult["contentMd5"];
        return $tempResult;
    }
    
    /**
     * 设置指定文件的MD5值，包含此值时，在上传文件时也需要包含 Content-MD5 的头部字段     
     * @param String $contentMd5     
     * 参数示例：<pre>B59C67BF196A4758191E42F76670CEBA</pre>     
     * 此参数必填     */
    public function setContentMd5( $contentMd5) {
        $this->sdkStdResult["contentMd5"] = $contentMd5;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>