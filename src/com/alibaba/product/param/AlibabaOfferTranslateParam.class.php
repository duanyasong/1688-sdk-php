<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaOfferTranslateParam {

        
        /**
    * @return 源文本，长度不超过2000
    */
        public function getSourceText() {
        $tempResult = $this->sdkStdResult["sourceText"];
        return $tempResult;
    }
    
    /**
     * 设置源文本，长度不超过2000     
     * @param String $sourceText     
     * 参数示例：<pre>连衣裙</pre>     
     * 此参数必填     */
    public function setSourceText( $sourceText) {
        $this->sdkStdResult["sourceText"] = $sourceText;
    }
    
        
        /**
    * @return 翻译业务类型。offer：商品详情；title：商品标题
    */
        public function getFiledType() {
        $tempResult = $this->sdkStdResult["filedType"];
        return $tempResult;
    }
    
    /**
     * 设置翻译业务类型。offer：商品详情；title：商品标题     
     * @param String $filedType     
     * 参数示例：<pre>title</pre>     
     * 此参数必填     */
    public function setFiledType( $filedType) {
        $this->sdkStdResult["filedType"] = $filedType;
    }
    
        
        /**
    * @return 源语言，值为：fr(法语),es(西班牙语),de(德语),it(意大利语),pt(葡萄牙语),ru(俄语),ja(日语),ko(韩语),ar(阿拉伯语),nl(荷兰语),zh(简体中文),zt(繁体中文),en(英语),vi(越南语),th(泰语),tr(土耳其语),he(希伯来语),id(印尼语),pl(波兰语),hi(印地语)
    */
        public function getSourceLanguage() {
        $tempResult = $this->sdkStdResult["sourceLanguage"];
        return $tempResult;
    }
    
    /**
     * 设置源语言，值为：fr(法语),es(西班牙语),de(德语),it(意大利语),pt(葡萄牙语),ru(俄语),ja(日语),ko(韩语),ar(阿拉伯语),nl(荷兰语),zh(简体中文),zt(繁体中文),en(英语),vi(越南语),th(泰语),tr(土耳其语),he(希伯来语),id(印尼语),pl(波兰语),hi(印地语)     
     * @param String $sourceLanguage     
     * 参数示例：<pre>cn</pre>     
     * 此参数必填     */
    public function setSourceLanguage( $sourceLanguage) {
        $this->sdkStdResult["sourceLanguage"] = $sourceLanguage;
    }
    
        
        /**
    * @return 目标语言，值为：fr(法语),es(西班牙语),de(德语),it(意大利语),pt(葡萄牙语),ru(俄语),ja(日语),ko(韩语),ar(阿拉伯语),nl(荷兰语),zh(简体中文),zt(繁体中文),en(英语),vi(越南语),th(泰语),tr(土耳其语),he(希伯来语),id(印尼语),pl(波兰语),hi(印地语)
    */
        public function getTargetLanguage() {
        $tempResult = $this->sdkStdResult["targetLanguage"];
        return $tempResult;
    }
    
    /**
     * 设置目标语言，值为：fr(法语),es(西班牙语),de(德语),it(意大利语),pt(葡萄牙语),ru(俄语),ja(日语),ko(韩语),ar(阿拉伯语),nl(荷兰语),zh(简体中文),zt(繁体中文),en(英语),vi(越南语),th(泰语),tr(土耳其语),he(希伯来语),id(印尼语),pl(波兰语),hi(印地语)     
     * @param String $targetLanguage     
     * 参数示例：<pre>en</pre>     
     * 此参数必填     */
    public function setTargetLanguage( $targetLanguage) {
        $this->sdkStdResult["targetLanguage"] = $targetLanguage;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>