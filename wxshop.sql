/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : wxshop

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-04-19 15:15:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `hsq_address`
-- ----------------------------
DROP TABLE IF EXISTS `hsq_address`;
CREATE TABLE `hsq_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '地址ID',
  `member_id` int(11) NOT NULL COMMENT '会员ID',
  `contant_person` varchar(20) NOT NULL COMMENT '联系人',
  `tel` varchar(20) NOT NULL COMMENT '联系电话',
  `area_id` varchar(50) NOT NULL COMMENT '省市区县ID,按省市区县排序',
  `address` varchar(300) NOT NULL COMMENT '详细地址',
  `if_default` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否为默认收货地址，1为是，0为否',
  `update_time` int(11) NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hsq_address
-- ----------------------------
INSERT INTO `hsq_address` VALUES ('1', '1', '朱海平', '15882276115', '23,24,25', '天府三街腾讯大厦B座903', '1', '1491894366');
INSERT INTO `hsq_address` VALUES ('2', '1', '黄婷', '15281028835', '23,24,26', '双流白家大市场干杂区106号', '0', '1491980158');

-- ----------------------------
-- Table structure for `hsq_article`
-- ----------------------------
DROP TABLE IF EXISTS `hsq_article`;
CREATE TABLE `hsq_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '文章ID',
  `cateid` int(11) NOT NULL COMMENT '分类ID',
  `title` varchar(200) NOT NULL COMMENT '文章标题',
  `image` varchar(100) DEFAULT NULL COMMENT '封面',
  `info` varchar(255) DEFAULT NULL COMMENT '文章简介',
  `content` text NOT NULL COMMENT '文章内容',
  `update_time` int(11) NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hsq_article
-- ----------------------------
INSERT INTO `hsq_article` VALUES ('2', '3', '政府工作报告7次提及 总理为何再赠4字？', '\\\\uploads\\\\20170411\\\\8f479989026059b0ce14ffd5e81ef89c.jpg', '4月5日的国务院常务会议部署落实2017年经济体制改革重点任务。新闻通稿中有一句话值得注意：要持续深化简政放权、放管结合、优化服务改革，“着力为实体经济升级营造更好环境”。', '<p class=\\\"text\\\" style=\\\"margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: \\\">振兴实体经济是当前一个重要命题。早有媒体关注到，提振实体经济成为今年“<a class=\\\"a-tips-Article-QQ\\\" target=\\\"_blank\\\" href=\\\"http://news.qq.com/zt2015/2015lh/index.htm\\\" style=\\\"text-decoration-line: none; outline: 0px; color: rgb(0, 0, 0); border-bottom: 1px dotted rgb(83, 109, 166);\\\">两会</a>”之强音，李克强总理作政府工作报告7次提及实体经济，此举实属罕见，释放的信号十分强烈。</p><p class=\\\"text\\\" style=\\\"margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: \\\">细读通稿，很明显表达出两层意思：一是要为实体经济营造更优的环境，二是实体经济本身要不断转型升级。事实上，李克强会上对这两点均有精到阐述。</p><p class=\\\"text\\\" style=\\\"margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: \\\">总理指出，现在工业准入门槛还是太多了，一边强调要振兴实体经济、发展先进制造业，但投资制造业的门槛又很多，要办十几张许可证。</p><p class=\\\"text\\\" style=\\\"margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: \\\">“这种情况一定要下决心转变。”李克强明确要求。怎么变?先得“放”。诚如总理所言，现在政府的不少工作重点还是给市场主体发“入场券”，然而除了一些确实需要的行业外，工业制造领域那么多许可证真的有必要吗?只有把不必要的“入场券”清理掉，才能让工业投资保持上升势头，实体经济环境才能更加优化。</p><p class=\\\"text\\\" style=\\\"margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: \\\">同时则要“管”。政府职能要从坐在办公桌后面发许可证的审批，真正转变为到市场一线去进行有效监管。对此，李克强举去年责成有关部门查“地条钢”的例子强调，宏观部门不仅要会审批，更要会监管。切实发挥好政府事中事后监管效用，让市场竞争更加有序公平，实体经济的环境才会逐步得到改善。</p><p class=\\\"text\\\" style=\\\"margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: \\\">以上如果堪称“外因”，振兴实体经济则更须从“内因”发力，挖掘市场主体的内部动力。如果实体经济自身孱弱，是无法硬性要求支持的。只有切实提高实体经济的效率和竞争力，才能根本上改变当前“脱实向虚”的困境。</p><p class=\\\"text\\\" style=\\\"margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: \\\">李克强对振兴实体经济给出4个字：转型升级。</p><p class=\\\"text\\\" style=\\\"margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: \\\">这方面的成功事例数不胜数。共享单车带火了自行车产业、网购和快递让深山特色农产品成功打入大城市，都堪称经典案例。正如总理一再强调的，生产性服务业最终带动了传统实体经济的升级。而这种升级，不是坐在办公室凭空想出来的，是顺应市场和消费者需求应运而生的。</p><p class=\\\"text\\\" style=\\\"margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: \\\">实体经济是国民经济的根基，这一点怎么强调都不为过。但实体经济必须紧跟时代脚步、紧扣消费者需求，不断转型升级，才能在激烈竞争的全球市场上站稳脚跟。不升级，没出路!</p><p class=\\\"text\\\" style=\\\"margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: \\\">诚如总理在《政府工作报告》所言，“以创新引领实体经济转型升级”。唯如此，前景广</p><p><br/></p>', '1492049086');

-- ----------------------------
-- Table structure for `hsq_category`
-- ----------------------------
DROP TABLE IF EXISTS `hsq_category`;
CREATE TABLE `hsq_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '分类ID',
  `catename` varchar(100) NOT NULL COMMENT '分类名称',
  `pid` int(11) DEFAULT '0' COMMENT '父ID',
  `sort` tinyint(1) NOT NULL DEFAULT '0' COMMENT '排序',
  `update_time` int(11) NOT NULL COMMENT '时间',
  `catetype` varchar(100) NOT NULL DEFAULT 'article' COMMENT '分类类型',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hsq_category
-- ----------------------------
INSERT INTO `hsq_category` VALUES ('1', '新闻', '0', '1', '1491559731', 'article');
INSERT INTO `hsq_category` VALUES ('2', '博文', '0', '2', '1491557858', 'article');
INSERT INTO `hsq_category` VALUES ('3', '国内新闻', '1', '0', '1491491407', 'article');
INSERT INTO `hsq_category` VALUES ('4', '新浪博文', '2', '0', '1491491614', 'article');
INSERT INTO `hsq_category` VALUES ('6', '国际新闻', '1', '0', '1491491688', 'article');
INSERT INTO `hsq_category` VALUES ('7', '四川新闻', '3', '0', '1491491705', 'article');
INSERT INTO `hsq_category` VALUES ('8', '重庆新闻', '3', '0', '1491491730', 'article');
INSERT INTO `hsq_category` VALUES ('9', '中国新闻', '6', '0', '1491491758', 'article');
INSERT INTO `hsq_category` VALUES ('10', '成都新闻', '7', '0', '1491491778', 'article');
INSERT INTO `hsq_category` VALUES ('11', '搜狐博文', '2', '0', '1491491870', 'article');
INSERT INTO `hsq_category` VALUES ('12', '热门新闻', '1', '0', '1491557913', 'article');
INSERT INTO `hsq_category` VALUES ('16', '服装', '0', '1', '1491731996', 'product');
INSERT INTO `hsq_category` VALUES ('17', '电器', '0', '2', '1491568931', 'product');
INSERT INTO `hsq_category` VALUES ('18', '男装', '16', '0', '1491568944', 'product');
INSERT INTO `hsq_category` VALUES ('20', '家用电器', '17', '0', '1491568978', 'product');
INSERT INTO `hsq_category` VALUES ('21', '商用电器', '17', '0', '1491568993', 'product');
INSERT INTO `hsq_category` VALUES ('22', '女装', '16', '0', '1491569750', 'product');
INSERT INTO `hsq_category` VALUES ('23', '四川省', '0', '0', '1491794426', 'area');
INSERT INTO `hsq_category` VALUES ('24', '成都市', '23', '0', '1491794455', 'area');
INSERT INTO `hsq_category` VALUES ('25', '高新区', '24', '0', '1491794472', 'area');
INSERT INTO `hsq_category` VALUES ('26', '武侯区', '24', '0', '1491794501', 'area');
INSERT INTO `hsq_category` VALUES ('27', '金牛区', '24', '0', '1491794516', 'area');
INSERT INTO `hsq_category` VALUES ('28', '广元市', '23', '0', '1491794533', 'area');
INSERT INTO `hsq_category` VALUES ('29', '北京市', '0', '0', '1491804324', 'area');
INSERT INTO `hsq_category` VALUES ('30', '朝阳区', '29', '0', '1491804421', 'area');
INSERT INTO `hsq_category` VALUES ('31', '三环以内', '30', '0', '1491804454', 'area');
INSERT INTO `hsq_category` VALUES ('32', '三环到四环之间', '30', '0', '1491804483', 'area');
INSERT INTO `hsq_category` VALUES ('33', '海淀区', '29', '0', '1491804493', 'area');
INSERT INTO `hsq_category` VALUES ('34', '三环以内', '33', '0', '1491804510', 'area');
INSERT INTO `hsq_category` VALUES ('35', '三环到四环之间', '33', '0', '1491804529', 'area');

-- ----------------------------
-- Table structure for `hsq_keyword`
-- ----------------------------
DROP TABLE IF EXISTS `hsq_keyword`;
CREATE TABLE `hsq_keyword` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键Id',
  `uid` int(11) NOT NULL COMMENT '微信用户ID，关联wxapi表的ID',
  `keyword` varchar(100) NOT NULL COMMENT '关键字',
  `token` varchar(20) NOT NULL COMMENT '要验证的Token',
  `module` varchar(30) NOT NULL COMMENT '操作的模型',
  `update_time` int(11) NOT NULL COMMENT '添加/更新时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hsq_keyword
-- ----------------------------

-- ----------------------------
-- Table structure for `hsq_member`
-- ----------------------------
DROP TABLE IF EXISTS `hsq_member`;
CREATE TABLE `hsq_member` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '会员ID',
  `username` varchar(50) NOT NULL COMMENT '会员用户名',
  `password` varchar(40) NOT NULL COMMENT '会员登录密码',
  `openid` char(30) NOT NULL COMMENT '会员微信账号唯一标识ID',
  `nickname` varchar(50) DEFAULT NULL COMMENT '会员昵称',
  `tel` char(20) DEFAULT NULL COMMENT '电话',
  `sex` char(3) DEFAULT NULL COMMENT '性别',
  `birthday` varchar(30) DEFAULT NULL COMMENT '生日',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '会员状态，1为正常，2为锁定，3为冻结',
  `update_time` int(11) NOT NULL COMMENT '注册时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hsq_member
-- ----------------------------
INSERT INTO `hsq_member` VALUES ('1', 'zhp', '96e79218965eb72c92a549dd5a330112', 'fjsdfsfhur9932', '平哥', '15882276115', '男', '1985年2月5日', '1', '1491359837');

-- ----------------------------
-- Table structure for `hsq_order`
-- ----------------------------
DROP TABLE IF EXISTS `hsq_order`;
CREATE TABLE `hsq_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '订单ID',
  `order_number` varchar(30) NOT NULL COMMENT '订单编号',
  `total_amount` float(10,2) NOT NULL COMMENT '总金额',
  `discounted_price` float(10,2) DEFAULT '0.00' COMMENT '优惠金额',
  `amounts_payable` float(10,2) NOT NULL COMMENT '应付金额',
  `pay_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '支付状态：1(未支付),2(已支付)',
  `ship_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '发货状态：1(待发货),2(代收货),3(已收货),4(待评价),5(退货/售后)',
  `contant_person` varchar(30) NOT NULL COMMENT '联系人',
  `tel` char(20) NOT NULL COMMENT '联系电话',
  `address` varchar(400) NOT NULL COMMENT '详细地址',
  `coupon_id` varchar(255) DEFAULT NULL COMMENT '优惠券ID',
  `update_time` int(11) NOT NULL COMMENT '订单生成时间',
  `pay_time` int(11) DEFAULT NULL COMMENT '订单支付时间',
  `ship_time` int(11) DEFAULT NULL COMMENT '发货状态最后一次更新时间',
  `if_del` tinyint(1) DEFAULT '0' COMMENT '是否删除，1为已删除',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hsq_order
-- ----------------------------
INSERT INTO `hsq_order` VALUES ('1', '201704092140119', '1230.00', '30.00', '1200.00', '1', '1', '李晓华', '15882276115', '成都市高新区天府三街腾讯大厦B座903', '1', '1491722745', null, null, '0');

-- ----------------------------
-- Table structure for `hsq_ordergoods`
-- ----------------------------
DROP TABLE IF EXISTS `hsq_ordergoods`;
CREATE TABLE `hsq_ordergoods` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '表ID',
  `orderid` int(11) NOT NULL COMMENT '所属订单ID',
  `productid` int(11) NOT NULL COMMENT '商品ID',
  `product_name` varchar(200) NOT NULL COMMENT '商品名称',
  `price` float(10,2) NOT NULL COMMENT '商品单价',
  `num` int(11) NOT NULL,
  `update_time` int(11) DEFAULT NULL COMMENT '商品加入订单时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hsq_ordergoods
-- ----------------------------
INSERT INTO `hsq_ordergoods` VALUES ('1', '1', '3', '南极人羽绒服', '123.00', '10', '1491722745');

-- ----------------------------
-- Table structure for `hsq_pagesetting`
-- ----------------------------
DROP TABLE IF EXISTS `hsq_pagesetting`;
CREATE TABLE `hsq_pagesetting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL COMMENT '名称',
  `key` varchar(100) DEFAULT NULL COMMENT '键名',
  `type` int(1) DEFAULT NULL COMMENT '类型：0一个值，1多个值',
  `fields` varchar(255) DEFAULT NULL COMMENT '字段',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hsq_pagesetting
-- ----------------------------
INSERT INTO `hsq_pagesetting` VALUES ('1', '四川新闻', '新闻 热点 川内 天府 成都', '0', '[\"content\",\"title\",\"image\",\"info\",\"url\",\"entitle\"]', '1491978334');
INSERT INTO `hsq_pagesetting` VALUES ('2', '国内新闻', '新闻 热点 国内 ', '1', '[\"content\",\"title\",\"image\",\"info\",\"url\",\"entitle\"]', '1491360301');

-- ----------------------------
-- Table structure for `hsq_pagesettingvalue`
-- ----------------------------
DROP TABLE IF EXISTS `hsq_pagesettingvalue`;
CREATE TABLE `hsq_pagesettingvalue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL COMMENT '标题',
  `entitle` varchar(100) DEFAULT NULL COMMENT '副标题',
  `info` varchar(255) DEFAULT NULL COMMENT '简单说明',
  `content` text COMMENT '详细内容带样式',
  `image` varchar(100) DEFAULT NULL COMMENT '图片',
  `url` varchar(255) DEFAULT NULL COMMENT '跳转路径',
  `sort` int(11) DEFAULT NULL COMMENT '排序',
  `pagesettingid` int(11) DEFAULT NULL COMMENT '对应设置id',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hsq_pagesettingvalue
-- ----------------------------
INSERT INTO `hsq_pagesettingvalue` VALUES ('1', '大兴安岭禁伐，森林人的迷惘与希望', '森林人的迷惘与希望', '国最北部有着全国最大的集中连片的明亮针叶原始林，大兴安岭在这里绵延不绝。“兴安”是满语，意为“极寒的地方”；“岭”即满语“阿林”，其意为山。', '<p><span style=\"color: rgb(39, 39, 39); font-family: \">我国最北部有着全国最大的集中连片的明亮针叶原始林，大兴安岭在这里绵延不绝。广袤而丰盛的森林养育了居住在这里的人——300多年前即迁徙至此的使鹿部鄂温克猎人、半个世纪以前林业开发以来居住在此的新中国建设者。随着大兴安岭全面禁伐，这里进入了休养生息的时代。森林人们将带着迷惘与希望，继续探索与森林相处的平衡之道。</span></p>', '\\uploads\\20170405\\867dacb31bed2380b6372e0bc2da6d08.jpg', 'http://news.qq.com/original/eyan/ey130.html', null, '1', '1491978362');
INSERT INTO `hsq_pagesettingvalue` VALUES ('2', '习近平主席向塞尔维亚当选总统武契奇致贺电', '塞尔维亚当选总统武契奇致贺电', '新华社赫尔辛基4月4日电 国家主席习近平4日向塞尔维亚当选总统武契奇致贺电。', '<p class=\"text\" style=\"margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: \">习近平在贺电中指出，塞尔维亚是中国的好朋友、好伙伴。当前，中塞两国关系蓬勃发展、前景广阔。</p><p class=\"text\" style=\"margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: \">习近平强调，我高度重视中塞关系，愿同你一道努力，推动中塞全面战略伙伴关系不断迈上新台阶，更好造福两国和两国人民。</p><p><br/></p>', '', 'http://news.qq.com/a/20170405/007910.htm', '2', '2', '1491375792');
INSERT INTO `hsq_pagesettingvalue` VALUES ('3', '河北雄安新区查处违建行为765起 刑拘7名嫌疑人', '刑拘7名嫌疑人', '河北新闻网4月4日讯（记者郭东）4月1日，中央决定设立河北雄安新区消息发布后，一些房地产中介和部分外地人员涌向雄安新区进行炒房，造成房价“虚高”、道路拥堵等问题。', '<p class=\"text\" style=\"margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: \">河北新闻网4月4日讯（记者郭东）4月1日，中央决定设立河北雄安新区消息发布后，一些房地产中介和部分外地人员涌向雄安新区进行炒房，造成房价“虚高”、道路拥堵等问题。今晚，雄安新区筹备<a target=\"_blank\" href=\"http://time.qq.com/baike/deskclean/20170207.htm?pgv_ref=guanjianews_tips&from=guanjia\" class=\"nameStar gj-nameStar gj-keyword\" style=\"text-decoration-line: none; outline: 0px; color: rgb(81, 112, 166); border-bottom: 1px dotted rgb(83, 109, 166);\">工作</a>委员会提出，将依法严厉打击各种违法售房、购房行为，确保房地产市场管控大局平稳有序。</p><p class=\"text\" style=\"margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: \">进行诚信承诺，对不听劝阻、恶意炒作的房地产企业和个人进行约谈。</p><p class=\"text\" style=\"margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: \">严厉打击黑房地产中介。严禁大宗房地产交易，停止小产权房、新民居的建设和销售。对违规房地产企业和黑房地产中介机构加大整顿力度，对违法违规建设、恶意炒房等行为开展专项整治，对涉及犯罪的，依法从重从速查处。</p><p class=\"text\" style=\"margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: \">严打各种不法行为。对违规流转、违法建设、炒房行为持续保持高压态势，一经发现，公开严肃处理。对在建和拟建违法农村居民住宅小区，依法依规进行严厉查处。</p><p class=\"text\" style=\"margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: \">雄安新区房地产市场专项整治成效明显。截至目前，雄安新区已经查处房地产、建筑领域违法违规行为765起，拆除违建125处，关闭售楼部71家、中介机构35家，清理违规售房广告1597条，严厉查处违规网上售房行为9起，对10家恶意炒作的房地产企业进行约谈，刑事拘留违法犯罪嫌疑人7人。目前，由于雄安新区所属三县并没有存量房源，房地产市场有价无市，尚未发现实际交易情况。</p><p><br/></p>', '\\uploads\\20170405\\66b50434a5774f7c234829dac6519983.jpg', 'http://news.qq.com/a/20170405/007816.htm', '3', '2', '1491375814');

-- ----------------------------
-- Table structure for `hsq_product`
-- ----------------------------
DROP TABLE IF EXISTS `hsq_product`;
CREATE TABLE `hsq_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '产品ID',
  `cateid` int(11) NOT NULL COMMENT '产品分类ID',
  `title` varchar(200) NOT NULL COMMENT '商品名称',
  `image` varchar(100) DEFAULT NULL COMMENT '商品封面图片',
  `info` varchar(255) DEFAULT NULL,
  `price` float(10,2) NOT NULL COMMENT '价格',
  `content` text NOT NULL COMMENT '商品描述',
  `update_time` int(11) NOT NULL COMMENT '商品修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hsq_product
-- ----------------------------
INSERT INTO `hsq_product` VALUES ('3', '18', '南极人羽绒服', '', 'da\'s\'da\'s\'d', '123.00', '<p>品牌名称：<a class=\"J_EbrandLogo\" target=\"_blank\" href=\"https://brand.tmall.com/brandInfo.htm?brandId=148219736&type=0&scm=1048.1.1.4\" style=\"margin: 0px; padding: 0px; text-decoration-line: none; color: rgb(51, 85, 170); outline: 0px;\">黄金琼斯</a></p><p><a class=\"tm-collectBtn j_DetailBrand\" href=\"https://detail.tmall.com/item.htm?id=537317491530&ali_refid=a3_430698_1006:1110557192:N:%E8%BD%BB%E8%96%84%E7%BE%BD%E7%BB%92%20%E7%94%B7:b93adacf8664b0fcea4759d00e7c665a&ali_trackid=1_b93adacf8664b0fcea4759d00e7c665a&spm=a2e1o.8267851.07626516002.2.0PfLTy#\" style=\"margin: 0px; padding: 0px; color: rgb(255, 255, 255); outline: 0px; position: relative; display: inline-block; height: 22px; width: 75px; background-color: rgb(204, 0, 0); border-radius: 11px; line-height: 22px; text-align: center; white-space: nowrap; cursor: pointer; transition: all 0.2s ease-in; text-decoration-line: none !important;\"><em style=\"margin: 0px 0px -2px; padding: 0px; background-image: url(&quot;//img-tmdetail.alicdn.com/tps/i3/T1F05SXB4cXXcGdY6f-38-12.png&quot;); background-repeat: no-repeat; display: inline-block; width: 12px; height: 12px; line-height: 12px; overflow: hidden; transition: none; background-position: 0px 0px;\"></em><span style=\"margin: 0px 0px 0px 4px; padding: 0px;\">关注</span></a></p><p class=\"attr-list-hd tm-clear\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 5px 20px; line-height: 22px; color: rgb(153, 153, 153); font-family: tahoma, arial, 微软雅黑, sans-serif; font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><a class=\"ui-more-nbg tm-MRswitchAttrs\" href=\"https://detail.tmall.com/item.htm?id=537317491530&ali_refid=a3_430698_1006:1110557192:N:%E8%BD%BB%E8%96%84%E7%BE%BD%E7%BB%92%20%E7%94%B7:b93adacf8664b0fcea4759d00e7c665a&ali_trackid=1_b93adacf8664b0fcea4759d00e7c665a&spm=a2e1o.8267851.07626516002.2.0PfLTy#J_Attrs\" style=\"margin: 0px; padding: 0px 28px 0px 10px; text-decoration-line: none; color: rgb(153, 153, 153); outline: 0px; display: inline-block; position: relative; height: 20px; line-height: 22px; float: right;\">更多参数<em class=\"ui-more-nbg-arrow tm-MRswitchAttrs\" style=\"margin: 0px; padding: 0px; background-image: url(&quot;//assets.alicdn.com/apps/tmall/mui/more/img/more.png&quot;); top: 6px; right: 10px; width: 13px; background-repeat: no-repeat; position: absolute; display: inline-block; height: 13px; line-height: 13px; overflow: hidden; background-position: 0px -26px;\"></em></a><span style=\"margin: 0px; padding: 0px; font-weight: 700; float: left;\">产品参数：</span></p><ul style=\"list-style-type: none;\" class=\" list-paddingleft-2\"><li><p>上市年份季节:&nbsp;2016年冬季</p></li><li><p>充绒量:&nbsp;100g以下（不含）</p></li><li><p>含绒量:&nbsp;90%</p></li><li><p>材质成分:&nbsp;聚酰胺纤维(锦纶)100%</p></li><li><p>货号:&nbsp;HJ160821</p></li><li><p>销售渠道类型:&nbsp;纯电商(只在线上销售)</p></li><li><p>面料分类:&nbsp;涂层布</p></li><li><p>品牌:&nbsp;黄金琼斯</p></li><li><p>厚薄:&nbsp;薄</p></li><li><p>填充物:&nbsp;白鸭绒</p></li><li><p>基础风格:&nbsp;青春流行</p></li></ul><table class=\"tm-tableAttr\" width=\"789\" style=\"width: 563px;\"><thead style=\"margin: 0px; padding: 0px; background-color: rgb(238, 238, 238); border-bottom: 1px solid rgb(228, 228, 228); font-weight: 700; font-size: 14px; color: rgb(153, 153, 153);\"><tr style=\"margin: 0px; padding: 0px;\" class=\"firstRow\"><td colspan=\"2\" style=\"margin: 0px; padding-right: 5px; padding-left: 20px; border-bottom-color: rgb(229, 229, 229);\">规格参数</td></tr></thead><tbody style=\"margin: 0px; padding: 0px;\"><tr class=\"tm-tableAttrSub\" style=\"margin: 0px; padding: 0px;\"><th colspan=\"2\" style=\"margin: 0px; padding-right: 5px; padding-left: 20px; text-align: left; width: 763px; border-top-color: rgb(229, 229, 229); border-right-color: rgb(229, 229, 229);\">版型款式</th></tr><tr style=\"margin: 0px; padding: 0px;\"><th style=\"margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);\">穿搭方式</th><td style=\"margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);\">&nbsp;外穿</td></tr><tr style=\"margin: 0px; padding: 0px;\"><th style=\"margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);\">衣长</th><td style=\"margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);\">&nbsp;短款</td></tr><tr style=\"margin: 0px; padding: 0px;\"><th style=\"margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);\">领型</th><td style=\"margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);\">&nbsp;无帽立领</td></tr><tr style=\"margin: 0px; padding: 0px;\"><th style=\"margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);\">款式细节</th><td style=\"margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);\">&nbsp;罗纹底摆</td></tr><tr style=\"margin: 0px; padding: 0px;\"><th style=\"margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);\">袖型</th><td style=\"margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);\">&nbsp;收口袖</td></tr><tr class=\"tm-tableAttrSub\" style=\"margin: 0px; padding: 0px;\"><th colspan=\"2\" style=\"margin: 0px; padding-right: 5px; padding-left: 20px; text-align: left; width: 763px; border-top-color: rgb(229, 229, 229); border-right-color: rgb(229, 229, 229);\">工艺/流行</th></tr><tr style=\"margin: 0px; padding: 0px;\"><th style=\"margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);\">图案</th><td style=\"margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);\">&nbsp;纯色</td></tr><tr style=\"margin: 0px; padding: 0px;\"><th style=\"margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);\">细分风格</th><td style=\"margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);\">&nbsp;商务休闲</td></tr><tr style=\"margin: 0px; padding: 0px;\"><th style=\"margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);\">服饰工艺</th><td style=\"margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);\">&nbsp;其他</td></tr><tr class=\"tm-tableAttrSub\" style=\"margin: 0px; padding: 0px;\"><th colspan=\"2\" style=\"margin: 0px; padding-right: 5px; padding-left: 20px; text-align: left; width: 763px; border-top-color: rgb(229, 229, 229); border-right-color: rgb(229, 229, 229);\">关键信息</th></tr><tr style=\"margin: 0px; padding: 0px;\"><th style=\"margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);\">上市年份季节</th><td style=\"margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);\">&nbsp;2016年冬季</td></tr><tr style=\"margin: 0px; padding: 0px;\"><th style=\"margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);\">充绒量</th><td style=\"margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);\">&nbsp;100g以下（不含）</td></tr><tr style=\"margin: 0px; padding: 0px;\"><th style=\"margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);\">含绒量</th><td style=\"margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);\">&nbsp;90%</td></tr><tr style=\"margin: 0px; padding: 0px;\"><th style=\"margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);\">材质成分</th><td style=\"margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);\">&nbsp;聚酰胺纤维(锦纶)100%</td></tr><tr style=\"margin: 0px; padding: 0px;\"><th style=\"margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);\">货号</th><td style=\"margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);\">&nbsp;HJ160821</td></tr><tr style=\"margin: 0px; padding: 0px;\"><th style=\"margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);\">销售渠道类型</th><td style=\"margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);\">&nbsp;纯电商(只在线上销售)</td></tr><tr style=\"margin: 0px; padding: 0px;\"><th style=\"margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);\">面料分类</th><td style=\"margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);\">&nbsp;涂层布</td></tr><tr style=\"margin: 0px; padding: 0px;\"><th style=\"margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);\">品牌</th><td style=\"margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);\">&nbsp;黄金琼斯</td></tr><tr style=\"margin: 0px; padding: 0px;\"><th style=\"margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);\">厚薄</th><td style=\"margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);\">&nbsp;薄</td></tr><tr style=\"margin: 0px; padding: 0px;\"><th style=\"margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);\">填充物</th><td style=\"margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);\">&nbsp;白鸭绒</td></tr><tr style=\"margin: 0px; padding: 0px;\"><th style=\"margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);\">基础风格</th><td style=\"margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);\">&nbsp;青春流行</td></tr><tr class=\"tm-tableAttrSub\" style=\"margin: 0px; padding: 0px;\"><th colspan=\"2\" style=\"margin: 0px; padding-right: 5px; padding-left: 20px; text-align: left; width: 763px; border-top-color: rgb(229, 229, 229); border-right-color: rgb(229, 229, 229);\">其他</th></tr><tr style=\"margin: 0px; padding: 0px;\"><th style=\"margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);\">适用场景</th><td style=\"margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);\">&nbsp;运动</td></tr><tr style=\"margin: 0px; padding: 0px;\"><th style=\"margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);\">适用对象</th><td style=\"margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);\">&nbsp;大码</td></tr></tbody></table><p><br/></p>', '1491722738');

-- ----------------------------
-- Table structure for `hsq_role`
-- ----------------------------
DROP TABLE IF EXISTS `hsq_role`;
CREATE TABLE `hsq_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL COMMENT '角色名称',
  `remark` varchar(255) DEFAULT NULL COMMENT '备注',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  `auth_access` text COMMENT '权限，数字标识',
  `shop_id` int(11) DEFAULT NULL COMMENT '店铺id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hsq_role
-- ----------------------------
INSERT INTO `hsq_role` VALUES ('1', 'PHP工程师', 'PHP工程师，负责网站后台代码编写与调试。', '1491358585', '[\"1001\",\"1000\",\"10011\",\"10012\",\"10013\",\"1002\",\"1000\",\"10021\",\"10022\",\"10023\",\"2001\",\"2000\",\"20011\",\"20012\",\"20013\",\"20014\",\"2002\",\"2000\",\"20021\",\"20022\",\"20023\",\"20024\",\"3001\",\"3000\",\"30011\",\"30012\",\"30013\",\"30014\",\"30015\",\"30016\",\"30017\",\"30018\",\"4001\",\"4000\",\"5001\",\"5000\",\"50011\",\"50012\",\"50013\",\"5002\",\"5000\",\"50021\",\"50022\",\"50023\",\"50024\"]', null);
INSERT INTO `hsq_role` VALUES ('2', 'JAVA工程师', 'JAVA工程师，负责服务器端代码。', '1491358578', '[\"1001\",\"1000\",\"10011\",\"10012\",\"10013\",\"1002\",\"1000\",\"10021\",\"10022\",\"10023\",\"2001\",\"2000\",\"20011\",\"20012\",\"20013\",\"20014\"]', null);

-- ----------------------------
-- Table structure for `hsq_text`
-- ----------------------------
DROP TABLE IF EXISTS `hsq_text`;
CREATE TABLE `hsq_text` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `uid` int(11) NOT NULL COMMENT '微信用户ID,关联wxapi中的Id',
  `keyword` varchar(100) NOT NULL COMMENT '关键字',
  `content` text NOT NULL COMMENT '相应内容',
  `token` varchar(255) NOT NULL COMMENT '要验证的Token',
  `update_time` int(11) NOT NULL COMMENT '添加/更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hsq_text
-- ----------------------------

-- ----------------------------
-- Table structure for `hsq_user`
-- ----------------------------
DROP TABLE IF EXISTS `hsq_user`;
CREATE TABLE `hsq_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) DEFAULT NULL COMMENT '用户姓名',
  `password` varchar(64) DEFAULT NULL COMMENT '用户密码',
  `role_id` int(11) DEFAULT NULL COMMENT '用户角色',
  `rename` varchar(32) DEFAULT NULL COMMENT '称呼',
  `tel` varchar(20) DEFAULT NULL COMMENT '电话号码',
  `shop_id` int(11) DEFAULT NULL COMMENT '店铺id',
  `state` int(1) DEFAULT NULL COMMENT '状态1开启  0关闭',
  `update_time` int(11) DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hsq_user
-- ----------------------------
INSERT INTO `hsq_user` VALUES ('1', 'admin', '96e79218965eb72c92a549dd5a330112', '0', '黄是', '13885698756', '1', '1', '1482908393');
INSERT INTO `hsq_user` VALUES ('2', 'zhp', '96e79218965eb72c92a549dd5a330112', '1', '朱海平', '15882276115', '1', '1', '1491978902');

-- ----------------------------
-- Table structure for `hsq_wxapi`
-- ----------------------------
DROP TABLE IF EXISTS `hsq_wxapi`;
CREATE TABLE `hsq_wxapi` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `name` varchar(100) NOT NULL COMMENT '公司名称',
  `info` varchar(300) DEFAULT NULL COMMENT '公司或微信账号简介',
  `type` tinyint(1) NOT NULL COMMENT '1为未认证订阅号，2为微信认证订阅号，3为未认证服务号，4为微信认证服务号',
  `token` varchar(20) NOT NULL COMMENT '要验证的Token',
  `appId` varchar(20) NOT NULL COMMENT 'appID',
  `appSecret` varchar(50) NOT NULL COMMENT 'appSecret',
  `encodingAESKey` varchar(200) NOT NULL COMMENT 'EncodingAESKey',
  `access_token` varchar(300) DEFAULT NULL COMMENT 'access_token',
  `token_time` int(11) DEFAULT NULL COMMENT '获得到access_token的时间',
  `expires_in` int(11) DEFAULT NULL COMMENT '有效时间(s)',
  `if_disabled` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否禁用，1为是，',
  `update_time` int(11) NOT NULL COMMENT '添加或修改时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `token` (`token`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hsq_wxapi
-- ----------------------------
INSERT INTO `hsq_wxapi` VALUES ('1', '网酒网', '白酒，红酒，酒庄，生态酒庄', '4', 'wangjiuwang', 'wx7b739a344a69a410', '9296286bb73ac0391d2eaf2b668c668a', 'mtig1MtBdvlFdFqbftyg2xY15N3WOSMDFNW9hcmcbf1', 'I5C-U7-1SqadDBvKh6qj62KaBiOId7suzacOlnzEpSRGIeDNDjZWkGxW6sJDXjif-cSNROSYHTpNDSQUD4RuVtAOkXMlBx8uOpXD8Yto3cpHMyCgPd1y7FreDdWPXFHNRAMcCGAUDP', '1492482218', '7200', '0', '1492482218');
INSERT INTO `hsq_wxapi` VALUES ('2', '佳园物业', '佳园物业，家一样的安全、舒心、放心', '4', 'jiayuanwuye', 'wx7b739a344a69a410', '9296286bb73ac0391d2eaf2b668c668a', 'mtig1MtBdvlFdFqbftyg2xY15N3WOSMDFNW9hcmcbf1', 'yAcVgWyHCL7bmKw-Meaz-NJ5uHkWBie7YuwYmO78w1q6ABoZ26nfSG1kznszXW5nX0DQCo4NXx71UBQytUXtTW4mr1N9jnQ-gnAzYpZtBGXjZBj6ob7DUssCZUo1CiODFSTeCDAREF', '1492412062', '7200', '0', '1492414878');
INSERT INTO `hsq_wxapi` VALUES ('3', '浐灞半岛', '关注浐灞半岛，房价合理，住优上品', '1', 'chanbabandao', 'wxe7cac9fe887686ee', '130ce91519217ded2d1cb9b869d9c2ec', 'QplvRQeLHcZK2COZ04aSLAOfAZRzI93rrjdXpAmDUqf', 'CH6PRyy7BqlvM84-KZrg9nqMJGKKjUXCqfUrWnHHhTpAhd5EvzM2QGiptTpJnHgs8xUFQopVyhNlbFjFnOo1OGs3mYsJq9LHiLFpnrGuajp01cckHNKHIyJkWauBny7zTKXbAGAMDQ', '1492483385', '7200', '0', '1492483385');
