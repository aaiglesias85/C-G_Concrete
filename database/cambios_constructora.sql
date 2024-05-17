ALTER TABLE `data_tracking` ADD `inspector_id` INT(11) NULL AFTER `item_id`, ADD INDEX (`inspector_id`);
ALTER TABLE `data_tracking` ADD CONSTRAINT `Refinspector158` FOREIGN KEY (`inspector_id`)
 REFERENCES `inspector`(`inspector_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

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
 

ALTER TABLE `project_item` ADD `quantity` FLOAT(8,2) NULL AFTER `id`;


ALTER TABLE data_tracking DROP FOREIGN KEY Refitem76;
ALTER TABLE data_tracking DROP FOREIGN KEY Refproject75;
ALTER TABLE `data_tracking` DROP INDEX `Ref6675`;
ALTER TABLE `data_tracking` DROP INDEX `Ref6776`;
ALTER TABLE `data_tracking`
  DROP `project_id`,
  DROP `item_id`;
  
ALTER TABLE `data_tracking` ADD `project_item_id` INT(11) NULL AFTER `updated_at`, ADD INDEX (`project_item_id`);
ALTER TABLE `data_tracking` ADD CONSTRAINT `Refprojectitem25` FOREIGN KEY (`project_item_id`) REFERENCES `project_item`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
