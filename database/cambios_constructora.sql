ALTER TABLE `project` CHANGE `contract_amount` `contract_amount` DECIMAL(18,2) NULL DEFAULT NULL;

ALTER TABLE `data_tracking`
    CHANGE `total_conc_used` `total_conc_used` DECIMAL(18,2) NULL DEFAULT NULL,
    CHANGE `conc_price` `conc_price` DECIMAL(18,2) NULL DEFAULT NULL,
    CHANGE `total_stamps` `total_stamps` DECIMAL(18,2) NULL DEFAULT NULL,
    CHANGE `total_people` `total_people` DECIMAL(18,2) NOT NULL,
    CHANGE `overhead_price` `overhead_price` DECIMAL(18,2) NOT NULL;


ALTER TABLE `data_tracking_item` CHANGE `quantity` `quantity` DECIMAL(18,2) NULL DEFAULT NULL, CHANGE `price` `price` DECIMAL(18,2) NULL DEFAULT NULL;

ALTER TABLE `data_tracking_labor` CHANGE `hours` `hours` DECIMAL(18,2) NULL DEFAULT NULL, CHANGE `hourly_rate` `hourly_rate` DECIMAL(18,2) NULL DEFAULT NULL;

ALTER TABLE `data_tracking_material` CHANGE `quantity` `quantity` DECIMAL(18,2) NULL DEFAULT NULL, CHANGE `price` `price` DECIMAL(18,2) NULL DEFAULT NULL;

ALTER TABLE `invoice_item`
    CHANGE `quantity_from_previous` `quantity_from_previous` DECIMAL(18,2) NULL DEFAULT NULL,
    CHANGE `quantity` `quantity` DECIMAL(18,2) NULL DEFAULT NULL, CHANGE `price` `price` DECIMAL(18,2) NULL DEFAULT NULL;

ALTER TABLE `project_item` CHANGE `quantity` `quantity` DECIMAL(18,2) NULL DEFAULT NULL, CHANGE `price` `price` DECIMAL(18,2) NULL DEFAULT NULL;