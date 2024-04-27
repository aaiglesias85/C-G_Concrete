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