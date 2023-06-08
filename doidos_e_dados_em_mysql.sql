
CREATE DATABASE DOIDOS_E_DADOS

USE DOIDOS_E_DADOS

CREATE TABLE tb_usuarios (
cd_usuario INT NOT NULL AUTO_INCREMENT,
usuario_email VARCHAR(50),
usuario_senha VARCHAR(40),
usuario_nome VARCHAR(50),
usuario_apelido VARCHAR(30),
PRIMARY KEY (cd_usuario))


CREATE TABLE tb_ficha_personagem (
cd_personagem INT NOT NULL AUTO_INCREMENT,
cd_usuario INT NOT NULL,
nome_jogador VARCHAR(80) NOT NULL,
nome_personagem VARCHAR(80) NOT NULL,
raca_personagem VARCHAR(25) NOT NULL,
antecedente_personagem VARCHAR(25) NOT NULL,
tendencia_personagem VARCHAR(25) NOT NULL,

atr_forca INT NOT NULL,
atr_destreza INT NOT NULL,
atr_constituicao INT NOT NULL,
atr_inteligencia INT NOT NULL,
atr_sabedoria INT NOT NULL,
atr_carisma INT NOT NULL,

tdr_forca INT,
tdr_destreza INT,
tdr_constituicao INT,
tdr_inteligencia INT,
tdr_sabedoria INT,
tdr_carisma INT,

percp_passiva INT NOT NULL,
bonus_profici INT NOT NULL,
deslocamento INT NOT NULL,
iniciativa INT NOT NULL,
classe_armadura INT NOT NULL,
inspiracao BIT NOT NULL,

vida_maxima INT NOT NULL,
vida_atual INT NOT NULL,
vida_temporaria INT,

per_acrobacia INT,
per_arcanismo INT,
per_atletismo INT,
per_atuacao INT,
per_blefar INT,
per_furtividade INT,
per_historia INT,
per_intimidacao INT,
per_investigacao INT,
per_lidar_animais INT,
per_medicina INT,
per_natureza INT,
per_persuasao INT,
per_prestidigitacao INT,
per_religiao INT,
per_sobrevivencia INT,

armor VARCHAR(50),
armas VARCHAR(50),
ferramentas VARCHAR(50),
linguagens VARCHAR(50),

historia VARCHAR(250),
magias VARCHAR(250),
extras VARCHAR(250),

CONSTRAINT pk_personagem PRIMARY KEY (cd_personagem),
CONSTRAINT fk_usuarios_personagem FOREIGN KEY (cd_usuario) REFERENCES tb_usuarios(cd_usuario) 
)


INSERT INTO `tb_usuarios`(`usuario_email`, `usuario_senha`, `usuario_nome`, `usuario_apelido`) VALUES
('julio.ciscato@gmail.com', 'teste', 'Julio Ciscato', 'xulio'),
('joao.nunes@gmail.com', 'teste', 'João Nunes', 'xoão')


INSERT INTO `tb_ficha_personagem`(`cd_usuario`, `nome_jogador`, `nome_personagem`, `raca_personagem`, `antecedente_personagem`, `tendencia_personagem`, `atr_forca`, `atr_destreza`, `atr_constituicao`, `atr_inteligencia`, `atr_sabedoria`, `atr_carisma`, `tdr_forca`, `tdr_destreza`, `tdr_constituicao`, `tdr_inteligencia`, `tdr_sabedoria`, `tdr_carisma`, `percp_passiva`, `bonus_profici`, `deslocamento`, `iniciativa`, `classe_armadura`, `inspiracao`, `vida_maxima`, `vida_atual`, `vida_temporaria`, `per_acrobacia`, `per_arcanismo`, `per_atletismo`, `per_atuacao`, `per_blefar`, `per_furtividade`, `per_historia`, `per_intimidacao`, `per_investigacao`, `per_lidar_animais`, `per_medicina`, `per_natureza`, `per_persuasao`, `per_prestidigitacao`, `per_religiao`, `per_sobrevivencia`)
VALUES
(1, 'Julio', 'Passarinho', 'Elfo', 'Forasteiro', 'Neutro',
10, 9, 8, 13, 14, 15,
0, -1, -1, 1, 2, 2,
15, 2, 9, -1, 9, 0,
28, 17, 3,
2, 3, 4, 5, 3, 4, 5, 6, 5, 4, 3, 2, 6, 5, 4, 3),
(2, 'João', 'Elizabeth', 'Elfo', 'Criminal', 'Caótico',
14, 9, 8, 13, 10, 11,
3, -1, -1, 1, 0, 0,
15, 2, 9, -1, 9, 0,
28, 17, 3,
2, 3, 4, 5, 3, 4, 5, 6, 5, 4, 3, 2, 6, 5, 4, 3)
