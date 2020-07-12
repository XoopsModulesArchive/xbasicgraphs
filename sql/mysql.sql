# phpMyAdmin MySQL-Dump
# version 2.2.5
# http://phpwizard.net/phpMyAdmin/
# http://phpmyadmin.sourceforge.net/ (download page)
# --------------------------------------------------------

#
# Table structure for table used in X Basic Graphs
#

CREATE TABLE voterinfo (
  refid int(11) NOT NULL auto_increment,
  dist_id int(11) NOT NULL default '0',
  dist_name varchar(30) NOT NULL,
  votes_count int(11) NOT NULL default '0',
  voters_tot int(11) NOT NULL default '0',
  PRIMARY KEY  (refid)
) TYPE=MyISAM;

INSERT INTO `voterinfo` (`refid`, `dist_id`, `dist_name`, `votes_count`, `voters_tot`) VALUES
(1, 10, 'Tenth District', 5346, 10998),
(2, 12, 'Twelfth District', 3245, 7034),
(3, 15, 'Fifteenth District', 2267, 6386),
(4, 18, 'Eighteenth District', 5887, 9550),
(5, 20, 'Twentieth District', 1557, 4377);
