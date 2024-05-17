ALTER TABLE `data_tracking` ADD `inspector_id` INT(11) NULL AFTER `item_id`, ADD INDEX (`inspector_id`);

ALTER TABLE `data_tracking` ADD `station_number` VARCHAR(255) NULL AFTER `date`,
 ADD `measured_by` VARCHAR(255) NULL AFTER `station_number`,
 ADD `conc_vendor` VARCHAR(255) NULL AFTER `measured_by`,
 ADD `crew_lead` VARCHAR(255) NULL AFTER `conc_vendor`,
 ADD `notes` TEXT NULL AFTER `crew_lead`,
 ADD `other_materials` TEXT NULL AFTER `notes`,
 ADD `created_at` DATETIME NULL AFTER `other_materials`,
 ADD `updated_at` DATETIME NULL AFTER `created_at`;
 
ALTER TABLE `data_tracking` ADD `total_conc_used` FLOAT(8,2) NULL AFTER `other_materials`,
 ADD `total_labor` FLOAT(8,2) NULL AFTER `total_conc_used`,
 ADD `total_stamps` FLOAT(8,2) NULL AFTER `total_labor`;
