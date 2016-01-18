<?php
function plugin_version_services()
{
return array('name' => 'services',
'version' => '1.0',
'author'=> 'Benoit SARDA, Gilles DUBOIS',
'license' => 'GPLv2',
'verMinOcs' => '2.2');
}

function plugin_init_services()
{
$object = new plugins;
$object -> add_cd_entry("services","software");

// Officepack table creation

$object -> sql_query("CREATE TABLE service (ID INTEGER NOT NULL AUTO_INCREMENT, HARDWARE_ID INTEGER NOT NULL,
SVCNAME VARCHAR(128) NOT NULL, 
SVCDN VARCHAR(255) NOT NULL, 
SVCSTATE VARCHAR(32) DEFAULT NULL, 
SVCDESC VARCHAR(1536) DEFAULT NULL, 
SVCSTARTMODE VARCHAR(32) DEFAULT NULL, 
SVCPATH VARCHAR(512) DEFAULT NULL,
SVCSTARTNAME VARCHAR(128) DEFAULT NULL, 
SVCEXITCODE INTEGER DEFAULT NULL, 
SVCSPECEXITCODE INTEGER DEFAULT NULL, 
PRIMARY KEY (ID,HARDWARE_ID)) ENGINE=INNODB;");

}

function plugin_delete_services()
{
$object = new plugins;
$object -> del_cd_entry("services");

$object -> sql_query("DROP TABLE `service`;");

}

?>
