<?php

/**
 * This function is called on installation and is used to create database schema for the plugin
 */
function extension_install_services()
{
    $commonObject = new ExtensionCommon;

    $commonObject -> sqlQuery("CREATE TABLE service (ID INTEGER NOT NULL AUTO_INCREMENT, HARDWARE_ID INTEGER NOT NULL,
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

/**
 * This function is called on removal and is used to destroy database schema for the plugin
 */
function extension_delete_services()
{
    $commonObject = new ExtensionCommon;
    $commonObject -> sqlQuery("DROP TABLE IF EXISTS `service`");
}

/**
 * This function is called on plugin upgrade
 */
function extension_upgrade_services()
{

}
