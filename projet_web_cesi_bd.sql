/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  23/03/2022 11:32:25                      */
/*==============================================================*/


drop table if exists appartenir_;

drop table if exists candidature;

drop table if exists dispose;

drop table if exists entreprise;

drop table if exists etre;

drop table if exists evaluation;

drop table if exists favoris;

drop table if exists localite;

drop table if exists offre_de_stage;

drop table if exists permission;

drop table if exists promotion;

drop table if exists type_utilisateur;

drop table if exists utlisateur;

/*==============================================================*/
/* Table : appartenir_                                          */
/*==============================================================*/
create table appartenir_
(
   id_promotion         int not null ,
   id_users             int not null ,
   primary key (id_promotion, id_users)
);
/*==============================================================*/
/* Table : posseder_                                          */
/*==============================================================*/
create table posseder_
(
   id_permission        int not null ,
   id_users             int not null ,
   primary key (id_permission, id_users)
);

/*==============================================================*/
/* Table : candidature                                          */
/*==============================================================*/
create table candidature
(
   id_candidature       int not null auto_increment,
   id_users             int not null,
   id_offre             int not null,
   lm                   char(255),
   cv                   char(255),
   fiche_validation     char(255),
   convetion_stage      char(255),
   primary key (id_candidature)
);

/*==============================================================*/
/* Table : dispose                                              */
/*==============================================================*/
create table dispose
(
   id_localite          int not null,
   id_entreprise        int not null,
   primary key (id_localite, id_entreprise)
);

/*==============================================================*/
/* Table : entreprise                                           */
/*==============================================================*/
create table entreprise
(
   id_entreprise        int not null auto_increment,
   nom_entreprise       char(255),
   secteur_act_entreprise char(255),
   nbre_stagiaire_accepte int,
   evaluation_stagiare  int,
   confiance_pilote     int,
   primary key (id_entreprise)
);

/*==============================================================*/
/* Table : etre                                                 */
/*==============================================================*/
create table etre
(
   id_type_user         int not null,
   id_users             int not null,
   primary key (id_type_user, id_users)
);

/*==============================================================*/
/* Table : evaluation                                           */
/*==============================================================*/
create table evaluation
(
   id_evaluation        int not null auto_increment,
   id_users             int not null ,
   id_entreprise        int not null ,
   note                 char(255),
   commentaire          char(255),
   primary key (id_evaluation)
);

/*==============================================================*/
/* Table : favoris                                              */
/*==============================================================*/
create table favoris
(
   id_favoris           int not null auto_increment,
   id_offre             int not null ,
   id_users             int not null ,
   primary key (id_favoris)
);

/*==============================================================*/
/* Table : localite                                             */
/*==============================================================*/
create table localite
(
   id_localite          int not null auto_increment,
   code_postal          int,
   ville                char(255),
   num_rue              int,
   nom_rue              char(255),
   primary key (id_localite)
);

/*==============================================================*/
/* Table : offre_de_stage                                       */
/*==============================================================*/
create table offre_de_stage
(
   id_offre             int not null auto_increment,
   id_entreprise        int not null ,
   competences          longtext,
   entreprise           longtext,
   duree_du_stage       int,
   remuneration         float,
   date_offre           date,
   nombre_place_cesi    int,
   primary key (id_offre)
);

/*==============================================================*/
/* Table : permission                                           */
/*==============================================================*/
create table permission
(
   id_permission        int not null auto_increment,
   nom_permission       char(255),
   primary key (id_permission)
);

/*==============================================================*/
/* Table : promotion                                            */
/*==============================================================*/
create table promotion
(
   id_promotion         int not null auto_increment,
   nom_promotion        char(255),
   primary key (id_promotion)
);

/*==============================================================*/
/* Table : type_utilisateur                                     */
/*==============================================================*/
create table type_utilisateur
(
   id_type_user         int not null auto_increment,
   role_user             char(255) not null,
   primary key (id_type_user)
);

/*==============================================================*/
/* Table : utlisateur                                           */
/*==============================================================*/
create table utlisateur
(
   id_users             int not null auto_increment,
   nom_user             char(255),
   prenom_user         char(255),
   centre_user          char(255),
   email_user          char(255),
   telephone_user       float,
   password_user        char(255),
   primary key (id_users)
);

alter table appartenir_ add constraint fk_appartenir_ foreign key (id_promotion)
      references promotion (id_promotion) on delete restrict on update restrict;

alter table appartenir_ add constraint fk_appartenir_2 foreign key (id_users)
      references utlisateur (id_users) on delete restrict on update restrict;

alter table posseder_ add constraint fk_posseder_ foreign key (id_permission)
      references permission (id_permission) on delete restrict on update restrict;

alter table posseder_ add constraint fk_posseder_2 foreign key (id_users)
      references utlisateur (id_users) on delete restrict on update restrict;

alter table candidature add constraint fk_comporter foreign key (id_offre)
      references offre_de_stage (id_offre) on delete restrict on update restrict;

alter table candidature add constraint fk_creer foreign key (id_users)
      references utlisateur (id_users) on delete restrict on update restrict;

alter table dispose add constraint fk_dispose foreign key (id_localite)
      references localite (id_localite) on delete restrict on update restrict;

alter table dispose add constraint fk_dispose2 foreign key (id_entreprise)
      references entreprise (id_entreprise) on delete restrict on update restrict;

alter table etre add constraint fk_etre foreign key (id_type_user)
      references type_utilisateur (id_type_user) on delete restrict on update restrict;

alter table etre add constraint fk_etre2 foreign key (id_users)
      references utlisateur (id_users) on delete restrict on update restrict;

alter table evaluation add constraint fk_concerne foreign key (id_entreprise)
      references entreprise (id_entreprise) on delete restrict on update restrict;

alter table evaluation add constraint fk_faire foreign key (id_users)
      references utlisateur (id_users) on delete restrict on update restrict;

alter table favoris add constraint fk_ajouter foreign key (id_users)
      references utlisateur (id_users) on delete restrict on update restrict;

alter table favoris add constraint fk_appartenir foreign key (id_offre)
      references offre_de_stage (id_offre) on delete restrict on update restrict;

alter table offre_de_stage add constraint fk_publier foreign key (id_entreprise)
      references entreprise (id_entreprise) on delete restrict on update restrict;

