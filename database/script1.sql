/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de cr�ation :  14/03/2026 06:31:05                      */
/*==============================================================*/


drop table if exists MESSAGES;

drop table if exists TACHES;

drop table if exists USERS;

/*==============================================================*/
/* Table : MESSAGES                                             */
/*==============================================================*/
create table MESSAGES
(
   IDMESSAGE            int not null AUTO_INCREMENT,
   IDUSERSEND           int not null,
   IDUSERRECEIVER       int not null,
   MESSAGE              varchar(256) not null,
   DATEENVOIE           date not null default CURRENT_TIMESTAMP,
   ETATMESSAGE          boolean not null default true,
   primary key (IDMESSAGE)
);

/*==============================================================*/
/* Table : TACHES                                               */
/*==============================================================*/
create table TACHES
(
   IDTACHE              int not null AUTO_INCREMENT,
   IDUSER               int not null not null,
   LIBELLETACHE         varchar(50) not null,
   DESCTACHE            varchar(100) not null,
   DATEDEBUT            date not null,
   DATEFIN              date not null,
   IMPORTANCE           ENUM("OBLIGATOIRE", "MOYEN", "FACULTATIF") NOT NULL DEFAULT "MOYEN",
   ETATTACHE            boolean not null default true,
   niveau               ENUM("INITIAL", "ENCOURS", "TERMINEE") NOT NULL DEFAULT "INITIAL",
   primary key (IDTACHE)
);

/*==============================================================*/
/* Table : USERS                                                */
/*==============================================================*/
create table USERS
(
   IDUSER               int not null AUTO_INCREMENT,
   NOMUSER              varchar(20) not null,
   PRENOMUSER           varchar(40) not null,
   LOGIN                varchar(20) not null unique,
   PASSWORD             varchar(20) not null,
   EMAIL                varchar(50) not null unique,
   NUMERO               varchar(20) not null unique,
   primary key (IDUSER)
);

alter table MESSAGES add constraint FK_ENVOYER foreign key (IDUSERSEND)
      references USERS (IDUSER) on delete restrict on update restrict;

alter table MESSAGES add constraint FK_RECEVOIR foreign key (IDUSERRECEIVER)
      references USERS (IDUSER) on delete restrict on update restrict;

alter table TACHES add constraint FK_ENREGISTRER foreign key (IDUSER)
      references USERS (IDUSER) on delete restrict on update restrict;

