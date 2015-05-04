/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50611
Source Host           : localhost:3306
Source Database       : aixuanxiu

Target Server Type    : MYSQL
Target Server Version : 50611
File Encoding         : 65001

Date: 2015-05-04 20:57:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for comment
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) DEFAULT NULL COMMENT '课程ID',
  `uid` int(11) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `tid` int(11) DEFAULT NULL COMMENT '主题评论',
  `ctime` datetime DEFAULT NULL,
  `good` int(11) NOT NULL DEFAULT '0',
  `bad` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comment
-- ----------------------------
INSERT INTO `comment` VALUES ('1', '1', '1', '老师讲得还不错。', null, '2014-12-22 12:00:00', '10', '3');
INSERT INTO `comment` VALUES ('2', '1', '1', '这个老师讲得还不错。', null, '2014-12-20 12:00:00', '5', '7');
INSERT INTO `comment` VALUES ('3', '1', '1', '这个老师讲得还不错。', null, '2014-12-20 12:00:00', '0', '0');
INSERT INTO `comment` VALUES ('4', '1', '1', '这个老师讲得还不错。', null, '2014-12-18 12:00:00', '0', '0');

-- ----------------------------
-- Table structure for course
-- ----------------------------
DROP TABLE IF EXISTS `course`;
CREATE TABLE `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(255) NOT NULL COMMENT '课程名称',
  `course_cid` varchar(255) DEFAULT NULL COMMENT '课程分类',
  `course_place` varchar(100) DEFAULT NULL COMMENT '上课地点',
  `course_time` varchar(100) DEFAULT NULL COMMENT '上课时间',
  `course_tid` varchar(10) DEFAULT NULL COMMENT '任课老师id',
  `course_intro` text COMMENT '课程简介',
  `comment_times` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of course
-- ----------------------------
INSERT INTO `course` VALUES ('1', '公务员能力基础', '1', '同和楼413(多)', '周二第9,10,11节{第2-9周}', '1', '一、课程目标： \r\r\n\r\r\n\r\r\n\r\r\n1、了解公务员考试的目的、要求和流程，熟悉当前公务员考录的基本政策；\r\r\n\r\r\n\r\r\n\r\r\n2、了解《行政职业能力测试》和《申论》考试的知识、理论及具体要求；\r\r\n\r\r\n\r\r\n\r\r\n3、掌握《行政职业能力测试》和《申论》的基本答题方法和技巧；\r\r\n\r一、课程目标： \r\r\n\r\r\n\r\r\n\r\r\n1、了解公务员考试的目的、要求和流程，熟悉当前公务员考录的基本政策；\r\r\n\r\r\n\r\r\n\r\r\n2、了解《行政职业能力测试》和《申论》考试的知识、理论及具体要求；\r\r\n\r\r\n\r\r\n\r\r\n3、掌握《行政职业能力测试》和《申论》的基本答题方法和技巧；\r\r\n\r4、增设机关公文写作课程，为考生熟悉机关实务打下基础。\r\r\n\r\r\n\r\r\n\r\r\n二、内容：\r\r\n\r\r\n\r\r\n\r\r\n第一讲：申论\r\r\n\r\r\n\r\r\n\r\r\n第二讲：申论\r\r\n\r\r\n\r\r\n\r\r\n第三讲：言语理解\r\r\n\r\r\n\r\r\n\r\r\n第四讲：公文写作\r\r\n\r\r\n\r\r\n\r\r\n第五讲：逻辑\r\r\n\r\r\n\r\r\n\r\r\n第六讲：逻辑\r\r\n\r\r\n\r\r\n\r\r\n第七讲：数量关系和数字推理、图形判断、资料分析\r\r\n\r\r\n\r\r\n\r\r\n第八讲：数量关系和数字推理、图形判断、资料分析\r\r\n\r\r\n\r\r\n\r\r\n第九讲：数量关系和数字推理、图形判断、资料分析\r\r\n\r\r\n\r\r\n\r\r\n第十讲：数量关系和数字推理、图形判断、资料分析', '0');
INSERT INTO `course` VALUES ('2', '乒乓裁判', '4', '仁智楼513(多)', '周一第9,10,11节{第2-9周}', '2', '乒乓规则与打法在不断的变化，所以比赛水平也就越来越高，在欣赏高水平的比赛当中，我们就会发现裁判在这当中发挥的作用也越来越大，裁判的执法水平影响整个比赛的流程以及精彩程度，有时可能主宰比赛。所以我们有必要让所有的乒乓爱好者，在喜欢打球的过程中能知道乒乓裁判的重要性，以及能掌握比赛的规则，和裁判法，能初步组织一场乒乓球的比赛，真正体会乒乓球的快乐。\r\n\r\n教学目标：\r\n\r\n1.培养学生对乒乓球运动的爱好与兴趣；\r\n\r\n2.了解、熟悉乒乓球运动的最新竞赛规则、竞赛方法和裁判方法；\r\n\r\n3.掌握乒乓球比赛的基本编排方法，具有一定的竞赛组织能力', '0');
INSERT INTO `course` VALUES ('3', '健康管理——营养免疫学', null, '同和楼208(多)', '周四第9,10,11节{第2-9周}', '3', '营养免疫学是由杰出的美籍华人陈昭妃博士提出并创立的一门全新的、造福于人类健康的新兴科学。人体大部分疾病都是由免疫系统失调引起的，摄取天然、营养且无副作用的植物性食品，管理好健康，就能提高自身免疫力，自然不怕病来袭\r\n\r\n\r\n\r\n引导学生学习、掌握营养免疫学专业知识，并以健康的饮食习惯、生活习惯而具备的健康体魄，在这个充满挑战、食品不安全、环境污染严重的环境下更具有竞争力，打造具有黄金般的自身免疫力是我开设此课程的目的。', '0');
INSERT INTO `course` VALUES ('4', '交响乐赏析', null, null, null, '4', '第一章.交响音乐概述（3学时）\r\n\r\n第二章.巴罗克时期作品选析（3学时）\r\n\r\n第三章.古典主义时期作品选析（3学时）\r\n\r\n第四章.浪漫主义时期作品选析（3学时）\r\n\r\n第五章.民族乐派作品选析（3学时）\r\n\r\n第六章.20世纪作品选析（3学时）\r\n\r\n第七章.中国作品选析（3学时）\r\n\r\n第八章.精品欣赏（3学时）', '0');
INSERT INTO `course` VALUES ('5', '建筑功能材料', null, '仁智楼315(多)', '周一第9,10,11节{第2-9周}', '5', '隔热保温材料、防水材料、吸声隔声材料、建筑防火材料、建筑光学材料、功能混凝土及其他功能材料。', '0');
INSERT INTO `course` VALUES ('6', '视听语言与创意表达', null, '厚学楼600(多)', '周四第9,10,11节{第2-9周}', '6', '就像我们日常沟通所使用的包括了字词、短语、语法、标点符号等等的语言体系一样，影片和电视节目的视听语言也有着一个整体的&quot;语言&quot;形式，并且和其他的语言体系一样，它可以通过学习和不断地训练来逐步掌握，并最终能够使用这些普遍的规则来与观众进行有效的沟通。&quot;视听语言&quot;中的&quot;语言&quot;一说是对影视艺术的技术表现方式的功能性比喻。任何天马行空的创意表达，任何细致入微的情感刻画都要落实为一帧帧合理运用视听语言的画面。从学习&quot;视听语言&quot;的角度来看，视听语言也是&quot;看电影、电视的艺术&quot;，了解视听语言我们才能更深入地理解影片等视听作品表达内涵的深广与表达方式的高妙。作为一门通识教育课程，作为素质教育的受众，这门课的听众无需关注视听语言实现的技术环节，而是将更多注意力放在理解视听语言与创意表达间的关联，体悟作品主创的奇思妙想与匠心独运。', '0');
INSERT INTO `course` VALUES ('7', '数学建模', null, null, null, '7', '随着科学技术的迅速发展，数学模型越来越多地出现在现代人的生产、工作和社会活动中，对于广大的科学技术人员和应用数学工作者来说，建立数学模型是沟通摆实际问题与数学工具之间联系的一座必不可少的桥梁。课程通过对数学建模基本理论知识的讲授和经典案例的分析，引导数学基础良好的学生理解数学建模、应用数学建模，解决科研实践中的具体问题。吸引更多优秀学生参加全国大学生数学建模竞赛。\r\n\r\n课程内容：第1讲，课程介绍及全国大学生数学建模竞赛介绍；第2讲，数学建模简介及MATLAB入门；第3讲，线性规划；第4讲，无约束优化；第5讲，非线性规划；第6讲，微分方程；第7讲，差分方程；第8讲，数据的统计描述与分析；第9讲，回归分析；第10讲，计算机模拟；第11-12讲，经典案例实验一；第13-14讲，经典案例实验二；第15-16讲，经典案例实验三；第17-18讲，经典案例实验四；第19讲，校内竞赛论文题目。', '0');
INSERT INTO `course` VALUES ('8', '生态环境材料', null, '仁智楼225(多)', '周一第9,10,11节{第2-9周}', '8', null, '0');
INSERT INTO `course` VALUES ('9', '太阳能利用技术', null, '仁智楼418(多)', '周四第9,10,11节{第2-9周}', null, null, '0');
INSERT INTO `course` VALUES ('10', '自动化技术概论', null, '仁智楼416(多)', '周三第9,10,11节{第2-9周}', '8', null, '0');
INSERT INTO `course` VALUES ('11', '土木工程概论', null, '仁智楼402(多)', '周三第9,10,11节{第2-9周}', null, null, '0');
INSERT INTO `course` VALUES ('12', '建筑节能概论', null, '仁智楼516(多)', '周三第9,10,11节{第2-9周}', null, null, '0');
INSERT INTO `course` VALUES ('13', '地球科学概论', null, '仁智楼416(多)', '周四第9,10,11节{第2-9周}', null, null, '0');
INSERT INTO `course` VALUES ('14', '环境保护概论', null, '仁智楼415(多)', '周三第9,10,11节{第2-9周}', null, null, '0');
INSERT INTO `course` VALUES ('15', '水资源管理技术政策与法律', null, '同和楼204(多)', '周四第9,10,11节{第2-9周}', null, null, '0');
INSERT INTO `course` VALUES ('16', '管理学', null, '仁智楼401(多)', '周二第9,10,11节{第2-9周}', null, null, '0');
INSERT INTO `course` VALUES ('17', '法学概论', null, '仁智楼316(多)', '周一第9,10,11节{第2-9周}', null, null, '0');
INSERT INTO `course` VALUES ('18', '多元纠纷解决方式', null, '仁智楼302(多)', '周二第9,10,11节{第2-9周}', null, null, '0');
INSERT INTO `course` VALUES ('19', '中国古典文学名著导读', null, '同和楼313(多)', '周四第9,10,11节{第2-9周}', null, null, '0');

-- ----------------------------
-- Table structure for course_cate
-- ----------------------------
DROP TABLE IF EXISTS `course_cate`;
CREATE TABLE `course_cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL COMMENT '课程分类名称',
  `score` varchar(10) DEFAULT NULL COMMENT '学分',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of course_cate
-- ----------------------------
INSERT INTO `course_cate` VALUES ('1', '创新创业类', '2');
INSERT INTO `course_cate` VALUES ('2', '公共艺术类', '2');
INSERT INTO `course_cate` VALUES ('3', '科学技术类', '2');
INSERT INTO `course_cate` VALUES ('4', '人文社科类', '2');

-- ----------------------------
-- Table structure for course_score
-- ----------------------------
DROP TABLE IF EXISTS `course_score`;
CREATE TABLE `course_score` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL COMMENT '课程ID',
  `s1` int(11) DEFAULT NULL COMMENT '1星',
  `s2` int(11) DEFAULT NULL COMMENT '2星',
  `s3` int(11) DEFAULT NULL COMMENT '3星',
  `s4` int(11) DEFAULT NULL COMMENT '4星',
  `s5` int(11) DEFAULT NULL COMMENT '5星',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of course_score
-- ----------------------------

-- ----------------------------
-- Table structure for course_user
-- ----------------------------
DROP TABLE IF EXISTS `course_user`;
CREATE TABLE `course_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `type` int(1) NOT NULL COMMENT '正在修0/修过1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of course_user
-- ----------------------------

-- ----------------------------
-- Table structure for group
-- ----------------------------
DROP TABLE IF EXISTS `group`;
CREATE TABLE `group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of group
-- ----------------------------

-- ----------------------------
-- Table structure for institute
-- ----------------------------
DROP TABLE IF EXISTS `institute`;
CREATE TABLE `institute` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of institute
-- ----------------------------

-- ----------------------------
-- Table structure for teacher
-- ----------------------------
DROP TABLE IF EXISTS `teacher`;
CREATE TABLE `teacher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of teacher
-- ----------------------------
INSERT INTO `teacher` VALUES ('1', '卞春荣', null);
INSERT INTO `teacher` VALUES ('2', '周爱东/杭华彬', null);
INSERT INTO `teacher` VALUES ('3', '赵素萍', null);
INSERT INTO `teacher` VALUES ('4', '', null);
INSERT INTO `teacher` VALUES ('5', '卢红琴/宋俊美', null);
INSERT INTO `teacher` VALUES ('6', '薛以平/王原', null);
INSERT INTO `teacher` VALUES ('7', '', null);
INSERT INTO `teacher` VALUES ('8', '华苏东/姚晓', null);
INSERT INTO `teacher` VALUES ('9', '陈长春', null);
INSERT INTO `teacher` VALUES ('10', '李俊', null);
INSERT INTO `teacher` VALUES ('11', '杜东升', null);
INSERT INTO `teacher` VALUES ('12', '郭樟根/王滋军', null);
INSERT INTO `teacher` VALUES ('13', '隋志龙', null);
INSERT INTO `teacher` VALUES ('14', '张雪英', null);
INSERT INTO `teacher` VALUES ('15', '夏霆', null);
INSERT INTO `teacher` VALUES ('16', '薛业清', null);
INSERT INTO `teacher` VALUES ('17', '刘亚玲', null);
INSERT INTO `teacher` VALUES ('18', '姚华', null);
INSERT INTO `teacher` VALUES ('19', '李双华', null);

-- ----------------------------
-- Table structure for teacher_score
-- ----------------------------
DROP TABLE IF EXISTS `teacher_score`;
CREATE TABLE `teacher_score` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL,
  `s1` int(11) DEFAULT NULL,
  `s2` int(11) DEFAULT NULL,
  `s3` int(11) DEFAULT NULL,
  `s4` int(11) DEFAULT NULL,
  `s5` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of teacher_score
-- ----------------------------

-- ----------------------------
-- Table structure for topic
-- ----------------------------
DROP TABLE IF EXISTS `topic`;
CREATE TABLE `topic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `ctime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of topic
-- ----------------------------

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(20) DEFAULT NULL COMMENT '人人ID',
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `institute_id` varchar(255) DEFAULT NULL COMMENT '学院',
  `group_id` int(11) DEFAULT NULL COMMENT '分组',
  `topic` int(11) DEFAULT NULL COMMENT '主题数',
  `comment` int(11) DEFAULT NULL COMMENT '评论次数',
  `homepage` varchar(255) DEFAULT NULL COMMENT '个人主页',
  `avatar` varchar(255) DEFAULT NULL COMMENT '头像',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', '353309262', '徐精华.Kevin', null, null, null, null, null, 'http://www.renren.com/353309262', 'http://hdn.xnimg.cn/photos/hdn221/20140902/2240/h_head_NqQi_e0ff00028240195a.jpg');
INSERT INTO `user` VALUES ('2', '505050167', '徐精华', null, null, null, null, null, 'http://www.renren.com/505050167', 'http://head.xiaonei.com/photos/0/0/men_head.gif');

-- ----------------------------
-- Table structure for video_course
-- ----------------------------
DROP TABLE IF EXISTS `video_course`;
CREATE TABLE `video_course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(50) NOT NULL,
  `course_intro` text NOT NULL,
  `course_pic` varchar(255) NOT NULL,
  `tid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of video_course
-- ----------------------------
