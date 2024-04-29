ALTER TABLE `project` ADD `manager` VARCHAR(255) NULL AFTER `location`, ADD `status` BOOLEAN NULL AFTER `manager`;
UPDATE `project` SET `status` = '1';


-- 
-- TABLE: project_notes 
--

CREATE TABLE project_notes(
    id            INT     AUTO_INCREMENT,
    notes         TEXT,
    date          DATE,
    project_id    INT,
    PRIMARY KEY (id)
)ENGINE=INNODB
;


CREATE INDEX Ref6678 ON project_notes(project_id)
;


ALTER TABLE project_notes ADD CONSTRAINT Refproject78 
    FOREIGN KEY (project_id)
    REFERENCES project(project_id)
;

RENAME TABLE `project_item_details` TO `data_tracking`;
RENAME TABLE `contractor` TO `company`;
RENAME TABLE `contractor_contact` TO `company_contact`;
UPDATE `function` SET `url` = 'company' WHERE `function`.`function_id` = 8;
UPDATE `function` SET `url` = 'data_tracking' WHERE `function`.`function_id` = 10;
UPDATE `function` SET `description` = 'Data Tracking' WHERE `function`.`function_id` = 10;
UPDATE `function` SET `description` = 'Companies' WHERE `function`.`function_id` = 8;

ALTER TABLE `company` CHANGE `contractor_id` `company_id` INT(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `company_contact` CHANGE `contractor_id` `company_id` INT(11) NULL DEFAULT NULL;
ALTER TABLE `project` CHANGE `contractor_id` `company_id` INT(11) NULL DEFAULT NULL;

ALTER TABLE `project` ADD `owner` VARCHAR(255) NULL AFTER `location`,
 ADD `subcontract` VARCHAR(255) NULL AFTER `owner`,
 ADD `federal_funding` BOOLEAN NULL AFTER `subcontract`,
 ADD `county` VARCHAR(255) NULL AFTER `federal_funding`,
 ADD `resurfacing` BOOLEAN NULL AFTER `county`,
 ADD `invoice_contact` VARCHAR(255) NULL AFTER `resurfacing`,
 ADD `certified_payrolls` BOOLEAN NULL AFTER `invoice_contact`,
 ADD `start_date` DATE NULL AFTER `certified_payrolls`,
 ADD `end_date` DATE NULL AFTER `start_date`;
 
 
 
-- 
-- TABLE: project_item 
--

CREATE TABLE project_item(
    id            INT            AUTO_INCREMENT,
    quantity      FLOAT(8, 2),
    price         FLOAT(8, 2),
    project_id    INT,
    item_id       INT,
    PRIMARY KEY (id)
)ENGINE=INNODB
;


CREATE INDEX Ref6679 ON project_item(project_id)
;
-- 
-- INDEX: Ref6780 
--

CREATE INDEX Ref6780 ON project_item(item_id)
;


ALTER TABLE project_item ADD CONSTRAINT Refproject79 
    FOREIGN KEY (project_id)
    REFERENCES project(project_id)
;

ALTER TABLE project_item ADD CONSTRAINT Refitem80 
    FOREIGN KEY (item_id)
    REFERENCES item(item_id)
;