# ------------------------------------------------------------------------------------------------------------------- #
# Inserir administradores na tabela usuario                                                                           #
# ------------------------------------------------------------------------------------------------------------------- #
INSERT INTO usuario (usu_login, usu_senha, usu_email) values ('erikamunniz', 'munniz','erika@meucardapiofacil.com.br');
INSERT INTO usuario (usu_login, usu_senha, usu_email) values ('herojose', 'opabom','heron@meucardapiofacil.com.br');
INSERT INTO usuario (usu_login, usu_senha, usu_email) values ('mailson', 'henrique','mailson@meucardapiofacil.com.br');
INSERT INTO usuario (usu_login, usu_senha, usu_email) values ('luan', 'reis','luan@meucardapiofacil.com.br');
INSERT INTO usuario (usu_login, usu_senha, usu_email) values ('ramon', 'hupp','ramon@meucardapiofacil.com.br');
INSERT INTO usuario (usu_login, usu_senha, usu_email) values ('marcelinhoshow', 'reidelas','marcelo@meucardapiofacil.com.br');

# ------------------------------------------------------------------------------------------------------------------- #
# Inserir administradores na tabela pessoas                                                                           #
# ------------------------------------------------------------------------------------------------------------------- #
INSERT INTO pessoas (pes_nome, pes_sobrenome, pes_nascimento, pes_cpf, pes_rg, pes_sexo) 
values ('Marcelo Augusto', 'Delgado Jordão', '2001-03-03', null, null,'Masculino');
INSERT INTO pessoas (pes_nome, pes_sobrenome, pes_nascimento, pes_cpf, pes_rg, pes_sexo) 
values ('Heron José', 'Bueno De Oliveira Almeida', '2001-18-04', null, null,'Masculino');
INSERT INTO pessoas (pes_nome, pes_sobrenome, pes_nascimento, pes_cpf, pes_rg, pes_sexo) 
values ('Érika Munniz', 'Regina Da Silva', '1999-03-12', null, null,'Feminino');
INSERT INTO pessoas (pes_nome, pes_sobrenome, pes_nascimento, pes_cpf, pes_rg, pes_sexo) 
values ('Mailson Henrique', 'Da Silva', '1988-07-15', null, null,'Masculino');
INSERT INTO pessoas (pes_nome, pes_sobrenome, pes_nascimento, pes_cpf, pes_rg, pes_sexo) 
values ('Ramon Hupp', 'Ferreira', '2000-08-18', null, null,'Masculino');
INSERT INTO pessoas (pes_nome, pes_sobrenome, pes_nascimento, pes_cpf, pes_rg, pes_sexo) 
values ('Luan Reis', 'Monstro', '2001-03-12', null, null,'Masculino');

# ------------------------------------------------------------------------------------------------------------------- #
# Inserir administradores na tabela restricao                                                                         #
# ------------------------------------------------------------------------------------------------------------------- #
INSERT INTO restricao (res_cod,, usu_email) values ('erikamunniz', 'munniz','erika@meucardapiofacil.com.br');
INSERT INTO restricao (res_cod,, usu_email) values ('herojose', 'opabom','heron@meucardapiofacil.com.br');
INSERT INTO restricao (res_cod,, usu_email) values ('mailson', 'henrique','mailson@meucardapiofacil.com.br');
INSERT INTO restricao (res_cod,, usu_email) values ('luan', 'reis','luan@meucardapiofacil.com.br');
INSERT INTO restricao res_cod, , usu_email) values ('ramon', 'hupp','ramon@meucardapiofacil.com.br');
INSERT INTO restricao (res_cod,, usu_email) values ('marcelinhoshow', 'reidelas','marcelo@meucardapiofacil.com.br');