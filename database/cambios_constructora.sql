ALTER TABLE `project_item` CHANGE `quantity` `quantity` DECIMAL(18,6) NULL DEFAULT NULL;
ALTER TABLE `data_tracking_item` CHANGE `quantity` `quantity` DECIMAL(18,6) NULL DEFAULT NULL;
ALTER TABLE `invoice_item`
    CHANGE `quantity_from_previous` `quantity_from_previous` DECIMAL(18,6) NULL DEFAULT NULL,
    CHANGE `quantity` `quantity` DECIMAL(18,6) NULL DEFAULT NULL;