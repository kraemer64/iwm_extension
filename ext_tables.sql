CREATE TABLE tx_iwmextension_domain_model_formular (
   firstname varchar(30) DEFAULT '',
   lastname varchar(30) DEFAULT '',
   email varchar(40) DEFAULT '' NOT NULL,
   profilepicture varchar(255) DEFAULT '',
   password varchar(20) DEFAULT '' NOT NULL,
   birthdate varchar(30) DEFAULT '' NOT NULL,
);

CREATE TABLE tx_iwmextension_user (
   firstname varchar(30) DEFAULT '',
   lastname varchar(30) DEFAULT '',
   email varchar(40) DEFAULT '' NOT NULL,
   profilepicture varchar(255) DEFAULT '',
   password varchar(20) DEFAULT '' NOT NULL,
   birthdate date DEFAULT '' NOT NULL,
);

CREATE TABLE tx_iwmextension_login (
   email varchar(40) DEFAULT '' NOT NULL,
   password varchar(20) DEFAULT '' NOT NULL,
);

