INSERT INTO `function` (`function_id`, `url`, `description`) VALUES ('14', 'employees', 'Employees'), ('15', 'materials', 'Materials');

INSERT INTO `rol_permission` (`id`, `view_permission`, `add_permission`, `edit_permission`, `delete_permission`, `rol_id`, `function_id`) VALUES
(NULL, '1', '1', '1', '1', '1', '14'), (NULL, '1', '1', '1', '1', '1', '15');

INSERT INTO `user_permission` (`id`, `view_permission`, `add_permission`, `edit_permission`, `delete_permission`, `user_id`, `function_id`) VALUES
(NULL, '1', '1', '1', '1', '1', '14'), (NULL, '1', '1', '1', '1', '1', '15');


CREATE TABLE `employee` (
    `employee_id` int(11) NOT NULL,
    `name` varchar(255) NOT NULL,
    `hourly_rate` float(8,2) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `employee` CHANGE `employee_id` `employee_id` INT(11) NOT NULL AUTO_INCREMENT;

CREATE TABLE `material` (
`material_id` int(11) NOT NULL,
`name` varchar(255) DEFAULT NULL,
`price` float(8,2) DEFAULT NULL,
  `unit_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `material` CHANGE `material_id` `material_id` INT(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `employee`
    ADD PRIMARY KEY (`employee_id`);

ALTER TABLE `material`
    ADD PRIMARY KEY (`material_id`),
  ADD KEY `fk_material_unit` (`unit_id`);


ALTER TABLE `material`
    ADD CONSTRAINT `fk_material_unit` FOREIGN KEY (`unit_id`) REFERENCES `unit` (`unit_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

ALTER TABLE `data_tracking` ADD `total_people` FLOAT(18,2) NOT NULL AFTER `total_stamps`, ADD `overhead_price` FLOAT(18,2) NOT NULL AFTER `total_people`;


CREATE TABLE `data_tracking_labor` (
    `id` int(11) NOT NULL,
    `hours` float(8,2) DEFAULT NULL,
  `hourly_rate` float(8,2) DEFAULT NULL,
  `data_tracking_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `data_tracking_material` (
  `id` int(11) NOT NULL,
  `quantity` float(8,2) DEFAULT NULL,
  `price` float(8,2) DEFAULT NULL,
  `data_tracking_id` int(11) NOT NULL,
  `material_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE `data_tracking_labor`
    ADD PRIMARY KEY (`id`),
  ADD KEY `fk_data_tracking_labor` (`data_tracking_id`),
  ADD KEY `fk_data_tracking_labor_employee` (`employee_id`);


ALTER TABLE `data_tracking_material`
    ADD PRIMARY KEY (`id`),
  ADD KEY `fk_data_tracking_material` (`data_tracking_id`),
  ADD KEY `fk_data_tracking_material_2` (`material_id`);


ALTER TABLE `data_tracking_labor`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `data_tracking_material`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `data_tracking_labor`
    ADD CONSTRAINT `fk_data_tracking_labor` FOREIGN KEY (`data_tracking_id`) REFERENCES `data_tracking` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_data_tracking_labor_employee` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `data_tracking_material`
    ADD CONSTRAINT `fk_data_tracking_material` FOREIGN KEY (`data_tracking_id`) REFERENCES `data_tracking` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_data_tracking_material_2` FOREIGN KEY (`material_id`) REFERENCES `material` (`material_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;


ALTER TABLE `data_tracking`
DROP `total_labor`,
DROP `labor_price`;