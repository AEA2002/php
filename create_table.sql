drop database `phpschema`
CREATE DATABASE `phpschema` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
use phpschema;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `lastname` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `pswd` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO users (firstname, lastname, email, pswd)
    VALUES
      ('Clara',    'Oswald', 'coswald@bbctv.co.uk', 'tardis'    ),
      ('River',    'Song',   'rsong@bbctv.co.uk',   'tardis'    ),
      ('Sherlock', 'Holmes', 'holmes@bbctv.co.uk',  'elementary'),
      ('James',    'Watson', 'watson@bbctv.co.uk',  'bollocks'  );
