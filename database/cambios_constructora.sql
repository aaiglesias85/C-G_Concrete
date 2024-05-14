ALTER TABLE `project` ADD `due_date` DATE NULL AFTER `end_date`;


-- 
-- TABLE: equation 
--

CREATE TABLE equation(
    equation_id    INT             AUTO_INCREMENT,
    description    VARCHAR(255),
    equation       VARCHAR(255),
    status         BOOLEAN,
    PRIMARY KEY (equation_id)
)ENGINE=INNODB
;

ALTER TABLE `item` ADD `yield_calculation` VARCHAR(50) NULL AFTER `price`;

ALTER TABLE `item` ADD `equation_id` INT(11) NULL AFTER `unit_id`, ADD INDEX (`equation_id`);
ALTER TABLE `item` ADD CONSTRAINT `Refequation10` FOREIGN KEY (`equation_id`) REFERENCES `equation`(`equation_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;


ALTER TABLE `project_item` DROP `quantity`;

ALTER TABLE `project_item` ADD `yield_calculation` VARCHAR(50) NULL AFTER `price`;

ALTER TABLE `project_item` ADD `equation_id` INT(11) NULL AFTER `item_id`, ADD INDEX (`equation_id`);
ALTER TABLE `project_item` ADD CONSTRAINT `Refequation11` FOREIGN KEY (`equation_id`) REFERENCES `equation`(`equation_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;