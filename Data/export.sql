DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
                           `id` int(11) NOT NULL AUTO_INCREMENT,
                           `name` varchar(100) NOT NULL,
                           `email` varchar(100) NOT NULL,
                           `class` int(11) NOT NULL,
                           PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `teacher`;
CREATE TABLE `teacher` (
                           `id` int(11) NOT NULL AUTO_INCREMENT,
                           `name` varchar(100) NOT NULL,
                           `class` int(11) NOT NULL,
                           PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `group`;
CREATE TABLE `group` (
                         `id` int(11) NOT NULL AUTO_INCREMENT,
                         `name` varchar(100) NOT NULL,
                         `location` varchar(100) NOT NULL,
                         PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;