
CREATE DATABASE DOIDOS_E_DADOS

USE DOIDOS_E_DADOS

CREATE TABLE tb_ficha_personagem (
cd_personagem INT NOT NULL AUTO_INCREMENT,
cd_usuario INT NOT NULL,
nome_jogador VARCHAR(80) NOT NULL,
nome_personagem VARCHAR(80) NOT NULL,
raca_personagem VARCHAR(25) NOT NULL,
nivel_personagem INT NOT NULL,
classe_personagem VARCHAR(50) NOT NULL,
antecedente_personagem VARCHAR(25) NOT NULL,
tendencia_personagem VARCHAR(25) NOT NULL,

atr_forca INT  NOT NULL,
atr_destreza INT  NOT NULL,
atr_constituicao INT NOT NULL,
atr_inteligencia INT NOT NULL,
atr_sabedoria INT  NOT NULL,
atr_carisma INT NOT NULL,

tdr_forca INT NOT NULL,
tdr_destreza INT  NOT NULL,
tdr_constituicao INT NOT NULL,
tdr_inteligencia INT NOT NULL,
tdr_sabedoria INT NOT NULL,
tdr_carisma INT NOT NULL,

percp_passiva INT NOT NULL,
inves_passiva INT NOT NULL,
intui_passiva INT NOT NULL,

bonus_profici INT NOT NULL,
deslocamento INT NOT NULL,
iniciativa INT NOT NULL,
classe_armadura INT NOT NULL,
inspiracao BIT,

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
per_intuicao INT,
per_investigacao INT,
per_lidar_animais INT,
per_medicina INT,
per_natureza INT,
per_percepcao INT,
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
