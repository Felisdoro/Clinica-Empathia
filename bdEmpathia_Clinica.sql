USE master IF EXISTS(select * from sys.databases where name='bdEmpathiaClinica') 
DROP DATABASE bdCrudModelo
GO 
-- CRIAR UM BANCO DE DADOS
CREATE DATABASE bdCrudModelo
GO
-- ACESSAR O BANCO DE DADOS
USE bdEmpathiaClinica
GO

-- TABELA USUÁRIO
CREATE TABLE Usuario
( 
   id            INT IDENTITY PRIMARY KEY,
   nome          VARCHAR(100)	NOT NULL,
   email         VARCHAR(100)	NOT NULL,
   senha         VARCHAR(100)	NOT NULL,
   nivelAcesso   VARCHAR(10)    NULL, -- ADMIN, ATENDENTE, PSICANALISTA/PSICOLOGO/PSIQUIATRA ou USER
   foto			 VARBINARY(MAX) NULL,
   statusUsuario VARCHAR(20)    NOT NULL, -- ATIVO ou INATIVO ou TROCAR_SENHA

)

CREATE TABLE Paciente
( 
   id					 INT IDENTITY PRIMARY KEY,
   usuario_id			 INT, 
   nome					 VARCHAR(100) NOT NULL,
   rg					 VARCHAR(11)  NOT NULL, 
   cpf					 VARCHAR(11)  NOT NULL,
   sexo					 VARCHAR(10)	  NULL,
   data_nasc			 VARCHAR(11)  NOT NULL,
   telefone				 VARCHAR(20)  NOT NULL,
   email				 VARCHAR(150) NOT NULL,
   logradouro			 VARCHAR(100) NOT NULL,
   numero				 VARCHAR(5) NOT NULL,
   complemento			 VARCHAR(100) NOT NULL,
   bairro				 VARCHAR(100) NOT NULL,
   cidade				 VARCHAR(100) NOT NULL,
   estado				 VARCHAR(100) NOT NULL, 
   cep					 VARCHAR(10) NOT NULL,
   servico_modalidade	 VARCHAR(100) NOT NULL,
   servico_seguimento	 VARCHAR(100) NOT NULL,
   
   FOREIGN KEY (usuario_id) REFERENCES Usuario (id)
)
GO

CREATE TABLE Funcionario
(
   id			 INT IDENTITY PRIMARY KEY,
   usuario_id	 INT,
   nome          VARCHAR(100) NOT NULL,
   rg			 VARCHAR(11)  NOT NULL, 
   cpf			 VARCHAR(11)  NOT NULL,
   sexo			 VARCHAR(10)	  NULL,
   data_nasc	 VARCHAR(11)  NOT NULL,
   telefone		 VARCHAR(20)  NOT NULL,
   email		 VARCHAR(150) NOT NULL,
   logradouro    VARCHAR(100) NOT NULL,
   numero        VARCHAR(5)   NOT NULL,
   complemento   VARCHAR(100) NOT NULL,
   bairro        VARCHAR(100) NOT NULL,
   cidade        VARCHAR(100) NOT NULL,
   estado        VARCHAR(100) NOT NULL, 
   cep           VARCHAR(10)  NOT NULL,
   cargo_id		 VARCHAR(100) NOT NULL,
   cargo_func    VARCHAR(100) NOT NULL, -- Atendente, Psicologo, Psiquiatra, Psicanalista
   modalidade	 VARCHAR(100) NOT NULL,
   seguimento	 VARCHAR(100) NOT NULL,
   salario		 VARCHAR(50)  NOT NULL

   FOREIGN KEY (usuario_id) REFERENCES Usuario (id),
   FOREIGN KEY (cargo_id) REFERENCES Cargo (id),
   FOREIGN KEY (cargo_func) REFERENCES Cargo (func)

)
GO

CREATE TABLE Cargo 
(
	id					INT IDENTITY PRIMARY KEY,
	func				VARCHAR(100) NOT NULL,
	status_func			VARCHAR(50) NOT NULL, -- ATIVO/CONTRATADO/ATUANDO E INATVIO/DEMITIDO/DESCONTRATADO
	crm					VARCHAR(50) NOT NULL, --APENAS PSIQUIATRA
	crp					VARCHAR(50) NOT NULL, --APENAS PSICOLOGO
	servico_modalidade	VARCHAR(100) NOT NULL,
	servico_seguimento	VARCHAR(100) NOT NULL


)
GO

CREATE TABLE Mensalidade 
(
	id						INT IDENTITY PRIMARY KEY,
	servico_modalidade		VARCHAR(100) NOT NULL,
	servico_tipo			VARCHAR(150) NOT NULL,
)

CREATE TABLE Servico 
(
	id				INT IDENTITY PRIMARY KEY,
	tipo			VARCHAR(150) NOT NULL,
	profissional	VARCHAR(100) NOT NULL,

)