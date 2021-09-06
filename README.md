# YouTube-Data-API
Upload videos to YouTube using Data API & PHP

# Database Table Creation

CREATE TABLE `youtube_oauth` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `provider` varchar(255) NOT NULL,
 `provider_value` text NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
