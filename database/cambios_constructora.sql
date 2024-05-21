TRUNCATE TABLE `data_tracking`;

ALTER TABLE data_tracking DROP FOREIGN KEY Refprojectitem25;
ALTER TABLE `data_tracking` DROP INDEX `project_item_id`;

ALTER TABLE `data_tracking`
  DROP `quantity`,
  DROP `price`;
  
ALTER TABLE `data_tracking` DROP `project_item_id`;

ALTER TABLE `data_tracking` ADD `project_id` INT(11) NULL AFTER `updated_at`, ADD INDEX (`project_id`);
ALTER TABLE `data_tracking` ADD CONSTRAINT `Refproject25` FOREIGN KEY (`project_id`) REFERENCES `project`(`project_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;


-- 
-- TABLE: data_tracking_item 
--

CREATE TABLE data_tracking_item(
    id                  INT            AUTO_INCREMENT,
    quantity            FLOAT(8, 2),
    price               FLOAT(8, 2),
    data_tracking_id    INT,
    project_item_id     INT,
    PRIMARY KEY (id)
)ENGINE=INNODB
;


CREATE INDEX Ref7185 ON data_tracking_item(data_tracking_id)
;
-- 
-- INDEX: Ref7686 
--

CREATE INDEX Ref7686 ON data_tracking_item(project_item_id)
;


ALTER TABLE data_tracking_item ADD CONSTRAINT Refdata_tracking85 
    FOREIGN KEY (data_tracking_id)
    REFERENCES data_tracking(id)
;

ALTER TABLE data_tracking_item ADD CONSTRAINT Refproject_item86 
    FOREIGN KEY (project_item_id)
    REFERENCES project_item(id)
;