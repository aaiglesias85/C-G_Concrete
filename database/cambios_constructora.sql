ALTER TABLE `company` ADD `address` TEXT NULL AFTER `phone`;
ALTER TABLE `project` CHANGE `status` `status` INT(1) NULL DEFAULT NULL;
ALTER TABLE `project` ADD `contract_amount` FLOAT(18,2) NULL AFTER `subcontract`;
ALTER TABLE `project` ADD `proposal_number` VARCHAR(255) NULL AFTER `project_number`;
ALTER TABLE `project` ADD `project_id_number` VARCHAR(50) NULL AFTER `project_id`;