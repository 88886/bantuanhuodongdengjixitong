--
-- 表的结构 `bthd_user`
-- 用户表
-- 用户id、学号、姓名、学院、专业、班级、剩余投票数
CREATE TABLE `bthd_tzs` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `uxh` varchar(12) NOT NULL,
  `upassword` varchar(12) NOT NULL,
  `uname` varchar(64) NOT NULL,
  `uclass` varchar(100) NOT NULL,
  `utel` varchar(100) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE `bthd_xgz` (
  `xid` int(11) NOT NULL AUTO_INCREMENT,
  `xxh` varchar(12) NOT NULL,
  `xpassword` varchar(12) NOT NULL,
  `xname` varchar(64) NOT NULL,
  `xbm` varchar(64) NOT NULL,
  `xqx` int(3) NOT NULL,
  `xcishu` int(3) NOT NULL,
  `xtel` varchar(100) NOT NULL,
  PRIMARY KEY (`xid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE `bthd_xgz2` (
  `x2id` int(11) NOT NULL AUTO_INCREMENT,
  `x2xh` varchar(12) NOT NULL,
  `x2password` varchar(12) NOT NULL,
  `x2name` varchar(64) NOT NULL,
  `x2bm` varchar(64) NOT NULL,
  `x2qx` int(3) NOT NULL,
  `x2cishu` int(3) NOT NULL,
  `x2tel` varchar(100) NOT NULL,
  PRIMARY KEY (`x2id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;