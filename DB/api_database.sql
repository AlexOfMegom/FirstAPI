DROP TABLE IF EXISTS `api`.`client`;
CREATE TABLE  `api`.`client` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  -- `age` int(10) unsigned NOT NULL,
  -- `gender` char(1) NOT NULL,
  `company` varchar(200) NOT NULL,
  `telnumber` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `brdate` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;
-- DEFAULT CHARSET=latin1;

