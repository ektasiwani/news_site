CREATE TABLE IF NOT EXISTS `announcements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Announcement` text NOT NULL,
  `Submitted` text NOT NULL,
  `heading` text NOT NULL,
  `video` text NOT NULL,
  `Date_time` datetime NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 
