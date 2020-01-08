<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ComAlibabaProcurementBuyerReceiveGoodsServiceCloseReceiveGoodsParam {

        
        /**
    * @return 收货单id
    */
        public function getRgNoteId() {
        $tempResult = $this->sdkStdResult["rgNoteId"];
        return $tempResult;
    }
    
    /**
     * 设置收货单id     
     * @param Long $rgNoteId     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setRgNoteId( $rgNoteId) {
        $this->sdkStdResult["rgNoteId"] = $rgNoteId;
    }
    
        
        /**
    * @return 收货子单id列表	
    */
        public function getRgEntryNoteIds() {
        $tempResult = $this->sdkStdResult["rgEntryNoteIds"];
        return $tempResult;
    }
    
    /**
     * 设置收货子单id列表	     
     * @param array include @see Long[] $rgEntryNoteIds     
     * 参数示例：<pre>null</pre>     
     * 此参数必填     */
    public function setRgEntryNoteIds( $rgEntryNoteIds) {
        $this->sdkStdResult["rgEntryNoteIds"] = $rgEntryNoteIds;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>