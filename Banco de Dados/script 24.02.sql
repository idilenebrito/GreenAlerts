create database green_alert;



CREATE TABLE `cliente_empresa` (
  `id_empresa` int NOT NULL AUTO_INCREMENT,
  `razaoSocial_empresa` varchar(100) NOT NULL,
  `nomeFantasia_empresa` varchar(100) NOT NULL,
  `cnpj_empresa` int(20) NOT NULL,
  `numero_empresa` int(12) NOT NULL,
  `email_empresa` varchar(100) NOT NULL,
  `responsavel_empresa` varchar(100) NOT NULL,
  `telefone_empresa` int(15) NOT NULL,
  `telefoneOpc_empresa` int(15) DEFAULT NULL,
  `descricao_empresa` varchar(100) DEFAULT NULL,
  `rua_endereco` varchar(100) NOT NULL,
  `numero_endereco` int(5) NOT NULL,
  `bairro_endereco` varchar(100) NOT NULL,
  `cidade_endereco` varchar(100) NOT NULL,
  `cep_endereco` int(12) NOT NULL,
  `uf_endereco` varchar(2) NOT NULL,
  `senha_empresa` varchar(12) NOT NULL,
  `confSenha_empresa` varchar(12) NOT NULL,
  PRIMARY KEY (`id_empresa`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

    
    create table empresas_cadastradas (
    id_empresasCadastradas int not null auto_increment,
    id_empresaFK int,
    primary key (id_empresasCadastradas),
    foreign key (id_empresaFK) references cliente_empresa (id_empresa)
    )ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
    
    create table notificacao(
    id_notificacao int not null auto_increment,
    id_empresaFK int,
    nomeDoc_noti varchar(100) not null,
    url_noti varchar(100) not null,
    dataVencimento_noti date not null,
    dataNotificacao_noti date not null,
    observacoes_noti varchar(100),
    primary key (id_notificacao),
    foreign key (id_empresaFK) references cliente_empresa (id_empresa)
    )ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
    
    create table login (
    id_login int not null auto_increment ,
    usuario_login int ,
    senha_login int ,
    primary key (id_login),
    
    foreign key (usuario_login) references cliente_empresa (id_empresa),
    foreign key (senha_login) references cliente_empresa (id_empresa)
   
    )ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
    
    create table status_noti (
    id_statusNoti int not null auto_increment,
    tipo_statusNot varchar(100),
    primary key (id_statusNoti)
    )ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
    
    create table noti_cadastradas (
    id_notiCadastradas int not null auto_increment ,
    id_notiFK int ,
    id_statusNotiFK int,
    primary key (id_notiCadastradas),
    
    foreign key (id_notiFK) references notificacao (id_notificacao),
    foreign key (id_statusNotiFK) references status_noti (id_statusNoti)
    )ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
    
    create table documento(
    id_documento int not null auto_increment ,
    nome_documento varchar(100) not null,
    id_empresaFK int,
    dataElaboracao_documento int (8) not null,
    tipo_documento varchar(100) not null,
    responavel_documento varchar(100) not null,
    primary key (id_documento),
    
    foreign key (id_empresaFK) references cliente_empresa (id_empresa)
    )ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
    
    create table documentos_cadastrados (
    id_documentosCadastrados int not null auto_increment ,
    id_documentoFK int,
    
    primary key (id_documentosCadastrados),
    foreign key (id_documentoFK) references documento (id_documento)
    )ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;




