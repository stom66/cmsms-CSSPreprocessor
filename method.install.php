<?php
if (!isset($gCms)) exit;

$this->AddEventHandler('Core', 'StylesheetPreCompile', false);
$this->SetPreference('recompile_for_admin', 0);




?>
