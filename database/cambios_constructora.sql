ALTER TABLE `data_tracking` ADD `inspector_id` INT(11) NULL AFTER `item_id`, ADD INDEX (`inspector_id`);