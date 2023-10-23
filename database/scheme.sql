CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `paternal` varchar(100) DEFAULT NULL,
  `maternal` varchar(100) DEFAULT NULL,
  `telephone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- VISTAS SQL
SELECT
    `contacts`.`id` AS `id`,
    `contacts`.`name` AS `name`,
    `contacts`.`paternal` AS `paternal`,
    `contacts`.`maternal` AS `maternal`,
    `contacts`.`telephone` AS `telephone`,
    `contacts`.`email` AS `email`,
    `contacts`.`category` AS `id_category`,
    `categories`.`name` AS `name_category`
FROM
    `contacts`
INNER JOIN
    `categories`
ON
    `contacts`.`category` = `categories`.`id`
ORDER BY
    `contacts`.`id`;
