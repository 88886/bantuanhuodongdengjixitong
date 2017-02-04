#班团活动登记系统
这套系统是当时在四川理工学院黄岭学院组织组任职时，为了方便各个团支书申报班团活动开展时间而做个一个小功能。主要的难点就是一个时间限制和班级联合举办班团活动的控制问题，具体的我也不想多说。  
这个系统的开发时间也只有几天，我全栈开发，前台使用的是妹子UI，后台使用的是自己写的一个很渣、很不成熟的框架（主要是为了自己熟悉MVC）。这个系统使用过一个月就放假了，从使用效果来说，肯定是比传统的方式更加方便，但是遗憾的是由于时间太短以及工作的原因，用户的接受程度有限，然后又放假，后来就搁置了这个系统。  
我是不推荐将这个系统用于生产环境。学习使用的话，请将vote.sql导入数据库，修改config.php里面的数据库配置，基本上就可以了。  
目录结构如下  
data-----------数据缓存目录  
libs-----------前台和后台的控制方法  
public---------公共资源目录里面是妹子UI  
tpl------------VIEW文件  
ueditor--------百度编辑器  
xsdhyphp-------自己写的MVC框架  
admin.php------后台入口文件  
config.php-----数据库配置文件  
index.php------前台入口文件  
set.conf-------站点配置文件  
vote.sql-------数据库语句  
