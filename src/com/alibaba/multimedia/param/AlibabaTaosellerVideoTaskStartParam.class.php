<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaTaosellerVideoTaskStartParam/AlibabaOceanOpenplatformBizVideoParamMaterialParam.class.php');
include_once ('AlibabaTaosellerVideoTaskStartParam/ComAlibabaOceanOpenplatformBizVideoParamVideoConfigExtParam.class.php');

class AlibabaTaosellerVideoTaskStartParam {

        
        /**
    * @return 淘卖用户在淘宝的userId
    */
        public function getTaoSellerUserId() {
        $tempResult = $this->sdkStdResult["taoSellerUserId"];
        return $tempResult;
    }
    
    /**
     * 设置淘卖用户在淘宝的userId     
     * @param String $taoSellerUserId     
     * 参数示例：<pre>12345678</pre>     
     * 此参数必填     */
    public function setTaoSellerUserId( $taoSellerUserId) {
        $this->sdkStdResult["taoSellerUserId"] = $taoSellerUserId;
    }
    
        
        /**
    * @return 素材列表
    */
        public function getMaterials() {
        $tempResult = $this->sdkStdResult["materials"];
        return $tempResult;
    }
    
    /**
     * 设置素材列表     
     * @param array include @see AlibabaOceanOpenplatformBizVideoParamMaterialParam[] $materials     
     * 参数示例：<pre>[]</pre>     
     * 此参数必填     */
    public function setMaterials(AlibabaOceanOpenplatformBizVideoParamMaterialParam $materials) {
        $this->sdkStdResult["materials"] = $materials;
    }
    
        
        /**
    * @return 用户自定义可扩展字段
    */
        public function getVideoConfigExt() {
        $tempResult = $this->sdkStdResult["videoConfigExt"];
        return $tempResult;
    }
    
    /**
     * 设置用户自定义可扩展字段     
     * @param ComAlibabaOceanOpenplatformBizVideoParamVideoConfigExtParam $videoConfigExt     
     * 参数示例：<pre>{}</pre>     
     * 此参数必填     */
    public function setVideoConfigExt(ComAlibabaOceanOpenplatformBizVideoParamVideoConfigExtParam $videoConfigExt) {
        $this->sdkStdResult["videoConfigExt"] = $videoConfigExt;
    }
    
        
        /**
    * @return 生成视频的长度，单位为秒，默认值20
    */
        public function getDuration() {
        $tempResult = $this->sdkStdResult["duration"];
        return $tempResult;
    }
    
    /**
     * 设置生成视频的长度，单位为秒，默认值20     
     * @param Integer $duration     
     * 参数示例：<pre>20</pre>     
     * 此参数必填     */
    public function setDuration( $duration) {
        $this->sdkStdResult["duration"] = $duration;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>