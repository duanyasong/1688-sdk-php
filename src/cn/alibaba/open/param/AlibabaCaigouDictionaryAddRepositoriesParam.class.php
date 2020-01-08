<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaCaigouDictionaryAddRepositoriesParam/AlibabaCaigouCoopapiDictionaryParamAddRepositoryParam.class.php');

class AlibabaCaigouDictionaryAddRepositoriesParam {

        
        /**
    * @return 新增仓库参数
    */
        public function getAddRepositoryParams() {
        $tempResult = $this->sdkStdResult["addRepositoryParams"];
        return $tempResult;
    }
    
    /**
     * 设置新增仓库参数     
     * @param array include @see AlibabaCaigouCoopapiDictionaryParamAddRepositoryParam[] $addRepositoryParams     
     * 参数示例：<pre>{"code":"1000101002","name":"原材料仓库","domainCode":"SYS_ERP","factoryCode":"1000101"}</pre>     
     * 此参数必填     */
    public function setAddRepositoryParams(AlibabaCaigouCoopapiDictionaryParamAddRepositoryParam $addRepositoryParams) {
        $this->sdkStdResult["addRepositoryParams"] = $addRepositoryParams;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>