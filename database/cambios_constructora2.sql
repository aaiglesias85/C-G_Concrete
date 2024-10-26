ALTER TABLE `company_contact`
    ADD `role`  VARCHAR(255) NULL AFTER `phone`,
    ADD `notes` TEXT         NULL AFTER `role`;

CREATE TABLE project_contact
(
    contact_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name       VARCHAR(255),
    email      VARCHAR(255),
    phone      VARCHAR(50),
    role       VARCHAR(255),
    notes      TEXT,
    project_id INT
) ENGINE = InnoDB
  AUTO_INCREMENT = 1
  DEFAULT CHARSET = utf8mb4;

CREATE INDEX `Ref6475` ON project_contact (project_id);

ALTER TABLE project_contact
    ADD CONSTRAINT `Refcontractor75` FOREIGN KEY (project_id) REFERENCES project (project_id) ON DELETE NO ACTION ON UPDATE NO ACTION;
