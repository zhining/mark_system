/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     2013/4/16 15:14:33                           */
/*==============================================================*/


drop table if exists sp_company;

drop table if exists sp_company_attachment;

drop table if exists sp_mark_rule;

drop table if exists sp_mark_rule_detail;

drop table if exists sp_option;

drop table if exists sp_user;

/*==============================================================*/
/* Table: sp_company                                            */
/*==============================================================*/
create table sp_company
(
   company_id           numeric(11,0) not null comment '公司ID',
   name                 varchar(255) comment '公司名称',
   info                 text comment '公司介绍',
   primary key (company_id)
);

alter table sp_company comment '公司资料表';

/*==============================================================*/
/* Table: sp_company_attachment                                 */
/*==============================================================*/
create table sp_company_attachment
(
   attachment_id        numeric(11,0) not null comment '附件ID',
   company_id           numeric(11,0) comment '公司ID',
   path                 varchar(255) comment 'path',
   type                 varchar(30) comment 'type',
   create_time          numeric(11,0) comment 'create_time',
   primary key (attachment_id)
);

alter table sp_company_attachment comment '附件表';

/*==============================================================*/
/* Table: sp_mark_rule                                          */
/*==============================================================*/
create table sp_mark_rule
(
   rule_id              numeric(11,0) not null comment '指标ID',
   title                varchar(255) comment '指标标题',
   content              text comment '指标内容',
   group_id             numeric(8,0) comment '指标分组ID',
   rank                 numeric(8,0) comment '指标权重',
   primary key (rule_id)
);

alter table sp_mark_rule comment '评分指标表';

/*==============================================================*/
/* Table: sp_mark_rule_detail                                   */
/*==============================================================*/
create table sp_mark_rule_detail
(
   rule_detail_id       numeric(11,0) not null comment '指标评分ID',
   rule_id              numeric(11,0) not null comment '指标ID',
   user_id              numeric(11,0) not null comment '评分人ID',
   company_id           numeric(11,0) not null comment '评分公司ID',
   grade                numeric(8,0) comment '指标得分',
   remark               varchar(255) comment '备注',
   primary key (rule_detail_id)
);

alter table sp_mark_rule_detail comment '评分细节表';

/*==============================================================*/
/* Table: sp_option                                             */
/*==============================================================*/
create table sp_option
(
   option_id            numeric(11,0) comment '设置ID',
   varname              varchar(64) comment '设置变量名',
   value                varchar(255) comment '设置值',
   remark               varchar(255) comment '备注'
);

alter table sp_option comment '全局系统设置项';

/*==============================================================*/
/* Table: sp_user                                               */
/*==============================================================*/
create table sp_user
(
   user_id              numeric(11,0) not null comment '用户ID',
   company_id           numeric(11,0) comment '公司ID',
   username             varchar(64) comment '用户名',
   password             varchar(128) comment '密码',
   nickname             varchar(64) comment '呢称',
   last_login_time      numeric(11,0) comment '上次登陆时间',
   last_login_ip        varchar(40) comment '上次登陆IP',
   login_count          numeric(8,0) comment '登陆次数',
   email                varchar(64) comment '电子邮件',
   info                 varchar(255) comment '个人介绍',
   remark               varchar(255) comment '备注',
   create_time          numeric(11,0) comment '创建时间',
   update_time          numeric(11,0) comment '更新时间',
   status               numeric(1,0) comment '状态（是否激活）',
   primary key (user_id)
);

alter table sp_user comment '用户表';

alter table sp_company_attachment add constraint FK_Relationship_2 foreign key (company_id)
      references sp_company (company_id) on delete restrict on update restrict;

alter table sp_mark_rule_detail add constraint FK_Relationship_3 foreign key (rule_id)
      references sp_mark_rule (rule_id) on delete restrict on update restrict;

alter table sp_mark_rule_detail add constraint FK_Relationship_4 foreign key (user_id)
      references sp_user (user_id) on delete restrict on update restrict;

alter table sp_mark_rule_detail add constraint FK_Relationship_5 foreign key (company_id)
      references sp_company (company_id) on delete restrict on update restrict;

alter table sp_user add constraint FK_Relationship_6 foreign key (company_id)
      references sp_company (company_id) on delete restrict on update restrict;

