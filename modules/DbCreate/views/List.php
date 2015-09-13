<?php
class DbCreate_List_View extends Vtiger_Index_View {

        public function process(Vtiger_Request $request) {
                $viewer = $this->getViewer($request);
				  global $adb; print_r($viewer);
				 
        }

}
?>