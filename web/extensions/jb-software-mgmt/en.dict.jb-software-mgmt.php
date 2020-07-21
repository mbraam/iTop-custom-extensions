<?php
/**
 * @copyright   Copyright (C) 2019-2020 Jeffrey Bostoen
 * @license     https://www.gnu.org/licenses/gpl-3.0.en.html
 * @version     2020-07-21 19:29:11
 *
 * Localized data
 */

Dict::Add('EN US', 'English', 'English', array(

	//	'Class:SomeClass' => 'Class name',
	//	'Class:SomeClass+' => 'More info on class name',
	//	'Class:SomeClass/Attribute:some_attribute' => 'your translation for the label',
    //	'Class:SomeClass/Attribute:some_attribute/Value:some_value' => 'your translation for a value',
    //	'Class:SomeClass/Attribute:some_attribute/Value:some_value+' => 'your translation for more info on the value',
	
	'Class:IzSoftware' => 'Software',
	'Class:IzSoftware+' => 'Generic name of the software',
	'Class:IzSoftware/Attribute:name' => 'Name of the software',
	'Class:IzSoftware/Attribute:name+' => 'Main name of the software, such as MS Office, MS Windows Server. Does not include version info or a year.',
	'Class:IzSoftware/Attribute:org_id' => 'Organization',
	'Class:IzSoftware/Attribute:org_id+' => 'Organization where this software is used',
	'Class:IzSoftware/Attribute:vendor' => 'Vendor',
	'Class:IzSoftware/Attribute:vendor+' => 'Vendor',
	'Class:IzSoftware/Attribute:type' => 'Type',
	'Class:IzSoftware/Attribute:type+' => 'Type of software',
	'Class:IzSoftware/Attribute:type/Value:client_software' => 'Client software',
	'Class:IzSoftware/Attribute:type/Value:cloud_software' => 'Cloud software',
	'Class:IzSoftware/Attribute:type/Value:operating_system' => 'Operating system',
	'Class:IzSoftware/Attribute:type/Value:server_software' => 'Server software',
	'Class:IzSoftware/Attribute:versions_list' => 'Versions',
	'Class:IzSoftware/Attribute:versions_list+' => 'Versions',
	'Class:IzSoftware/UniquenessRule:unique_software' => 'The name of the software must be unique.',
	
	'Class:IzSoftwareVersion' => 'Software Version',
	'Class:IzSoftwareVersion+' => 'Software version',
	'Class:IzSoftwareVersion/Attribute:org_id' => 'Organization',
	'Class:IzSoftwareVersion/Attribute:org_id+' => 'Organization where this software is used',
	'Class:IzSoftwareVersion/Attribute:software_id' => 'Software',
	'Class:IzSoftwareVersion/Attribute:software_id+' => 'Software name',
	'Class:IzSoftwareVersion/Attribute:version' => 'Version',
	'Class:IzSoftwareVersion/Attribute:version+' => 'Version of this software. Could be a name, major/minor version, build number, ...',
	'Class:IzSoftwareVersion/attribute:installations_list' => 'Installations',
	'Class:IzSoftwareVersion/attribute:installations_list+' => 'Installations of this software version on physical or virtual devices',
	'Class:IzSoftwareVersion/UniquenessRule:unique_software_version' => 'The combination of a software (name) and version must be unique.',
	
	'Class:IzSoftwareInstallation' => 'Software Installation',
	'Class:IzSoftwareInstallation+' => 'Software installation on a physical or virtual device.',
	'Class:IzSoftwareInstallation/Name' => '%1$s | %2$s (%3$s)',
	'Class:IzSoftwareInstallation/Attribute:org_id' => 'Organization',
	'Class:IzSoftwareInstallation/Attribute:org_id+' => 'Organization',
	'Class:IzSoftwareInstallation/Attribute:softwareversion_id' => 'Software version',
	'Class:IzSoftwareInstallation/Attribute:softwareversion_id+' => 'Software version which is installed on the device',
	'Class:IzSoftwareInstallation/Attribute:license_id' => 'License',
	'Class:IzSoftwareInstallation/Attribute:license_id+' => 'License info',
	'Class:IzSoftwareInstallation/Attribute:functionalci_id' => 'Host',
	'Class:IzSoftwareInstallation/Attribute:functionalci_id+' => 'Device on which the software is installed',
	'Class:IzSoftwareInstallation/Attribute:version_details' => 'Version detail',
	'Class:IzSoftwareInstallation/Attribute:version_details+' => 'Detailed version info. Example: build info.',
	'Class:IzSoftwareInstallation/Attribute:status' => 'Status',
	'Class:IzSoftwareInstallation/Attribute:status+' => 'Status of this software installation.',
	'Class:IzSoftwareInstallation/Attribute:status/Value:production' => 'Production',
	'Class:IzSoftwareInstallation/Attribute:status/Value:implementation' => 'Implementation',
	'Class:IzSoftwareInstallation/Attribute:status/Value:obsolete' => 'Obsolete',
	'Class:IzSoftwareInstallation/UniquenessRule:unique_software_installation_per_org' => 'The combination of the software version, functional CI and organization must be unique.',
	
	'Class:IzLicense' => 'License',
	'Class:IzLicense+' => 'License',
	'Class:IzLicense/Attribute:name' => 'Name',
	'Class:IzLicense/Attribute:name+' => 'Short name of this license',
	'Class:IzLicense/Attribute:org_id' => 'Organization',
	'Class:IzLicense/Attribute:org_id+' => 'Organization to which this license belongs',
	'Class:IzLicense/Attribute:provider_org_id' => 'Provider',
	'Class:IzLicense/Attribute:provider_org_id+' => 'Organization providing this license',
	'Class:IzLicense/Attribute:softwareversion_id' => 'Software version',
	'Class:IzLicense/Attribute:softwareversion_id+' => 'Software version',
	'Class:IzLicense/Attribute:comment' => 'Comment',
	'Class:IzLicense/Attribute:comment+' => 'Comment about this license. Could be use cases, special notes, requirements such as a license USB key, ...',
	'Class:IzLicense/Attribute:start_date' => 'Start date',
	'Class:IzLicense/Attribute:start_date+' => 'Start date',
	'Class:IzLicense/Attribute:end_date' => 'End date',
	'Class:IzLicense/Attribute:end_date+' => 'End date',
	'Class:IzLicense/Attribute:reminder_date' => 'Reminder date',
	'Class:IzLicense/Attribute:reminder_date+' => 'Reminder date',
	'Class:IzLicense/Attribute:type' => 'Type',
	'Class:IzLicense/Attribute:type+' => 'License type. Who/what is licensed?',
	'Class:IzLicense/Attribute:type/Value:single_user' => 'Single user',
	'Class:IzLicense/Attribute:type/Value:concurrent_user' => 'Concurrent user',
	'Class:IzLicense/Attribute:type/Value:organization' => 'Organization',
	'Class:IzLicense/Attribute:type/Value:device' => 'Device',
	'Class:IzLicense/Attribute:purchase_type' => 'Purchase type',
	'Class:IzLicense/Attribute:purchase_type+' => 'Chosen purchase formula',
	'Class:IzLicense/Attribute:purchase_type/Value:one_time' => 'One time',
	'Class:IzLicense/Attribute:purchase_type/Value:limited' => 'Limited subscription',
	'Class:IzLicense/Attribute:purchase_type/Value:autorenewal' => 'Automatically renewed',
	'Class:IzLicense/Attribute:amount' => 'Amount',
	'Class:IzLicense/Attribute:amount+' => 'Amount of users, devices, organizations',
	'Class:IzLicense/Attribute:serial' => 'Serial key',
	'Class:IzLicense/Attribute:serial+' => 'Serial key',
	'Class:IzLicense/Attribute:contacts_list' => 'Licensed users',
	'Class:IzLicense/Attribute:contacts_list+' => 'Persons or Teams who use this license',
	'Class:IzLicense/Attribute:documents_list' => 'Documents',
	'Class:IzLicense/Attribute:documents_list+' => 'Documents related to this license',
	'Class:IzLicense/Attribute:installations_list' => 'Licensed devices',
	'Class:IzLicense/Attribute:installations_list+' => 'Devices using this license',
	'Class:IzLicense/Attribute:unique_license_per_org' => 'The combination of the license name and organization must be unique.',
		
	'Class:lnkIzLicenseToContact' => 'Link License / Contact',
	'Class:lnkIzLicenseToContact+' => 'Link between License and Contact',
	'Class:lnkIzLicenseToContact/Name' => '%1$s | %2$s',
	'Class:lnkIzLicenseToContact/attribute:izlicense_id' => 'License',
	'Class:lnkIzLicenseToContact/attribute:izlicense_id+' => 'License',
	'Class:lnkIzLicenseToContact/Attribute:contact_id' => 'Contact',
	'Class:lnkIzLicenseToContact/Attribute:contact_id+' => 'Contact. Likely a Person, but could also be a Team.',
	'Class:lnkIzLicenseToContact/Attribute:comment' => 'Comment',
	'Class:lnkIzLicenseToContact/Attribute:comment+' => 'Comment. Reason of installation, downgrade rights, ... could be logged here.',
		
	'Class:IzDatabaseSchema' => 'Database Schema',
	'Class:IzDatabaseSchema/attribute:izsoftwareinstallation_id' => 'Software installation',
	
	'Class:IzWebApplication' => 'Web Application',
	'Class:IzWebApplication/attribute:izsoftwareinstallation_id' => 'Software installation',
	'Class:IzWebApplication/Attribute:url' => 'URL',
	
	
	// Temporary
	'Class:Software' => 'Software (original)',
	'Class:Middleware' => 'Middleware (original)',
	'Class:MiddlewareInstance' => 'Middleware instance (original)',
	'Class:PCSoftware' => 'PC Software (original)',
	'Class:OtherSoftware' => 'Other Software (original)',
	'Class:DBServer' => 'Database Server (original)',
	'Class:WebServer' => 'Web Server (original)',
	'Class:Licence' => 'License (original)',
	'Class:OSLicence' => 'OS License (original)',
	'Class:SoftwareInstance' => 'Software Instance (original)',
	'Class:SoftwareLicence' => 'Software Licence (original)',
	'Class:lnkSoftwareInstanceToSoftwarePatch' => 'Link Software Instance (original) / Software Patch',
	'Class:DatabaseSchema' => 'Database Schema (original)',
	
));

