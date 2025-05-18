CREATE TABLE `users` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(255) UNIQUE NOT NULL,
  `password` varchar(255) NOT NULL,
  `email_verified_at` datetime,
  `role` ENUM ('admin', 'user', 'guest') DEFAULT 'user',
  `created_at` datetime DEFAULT (CURRENT_TIMESTAMP),
  `updated_at` datetime DEFAULT (CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)
);

CREATE TABLE `login_logs` (
  `id` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `user_id` int COMMENT 'ON DELETE SET NULL ON UPDATE CASCADE',
  `ip_address` varchar(45),
  `user_agent` text,
  `success` boolean,
  `created_at` datetime DEFAULT (CURRENT_TIMESTAMP)
);

ALTER TABLE `login_logs` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
