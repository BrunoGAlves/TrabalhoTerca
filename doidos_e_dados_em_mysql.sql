CREATE DATABASE DOIDOS_E_DADOS

USE DOIDOS_E_DADOS

CREATE TABLE tb_usuarios (
cd_usuario INT NOT NULL AUTO_INCREMENT,
usuario_login VARCHAR(30),
usuario_senha VARCHAR(40),
PRIMARY KEY (cd_usuario))


CREATE TABLE tb_ficha_personagem (
cd_personagem INT AUTO_INCREMENT,
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

mod_forca INT NOT NULL,
mod_destreza INT NOT NULL,
mod_constituicao INT NOT NULL,
mod_inteligencia INT NOT NULL,
mod_sabedoria INT NOT NULL,
mod_carisma INT NOT NULL,

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

armor VARCHAR(50),
armas VARCHAR(50),
ferramentos VARCHAR(50),
linguagens VARCHAR(50),

historia VARCHAR(250),
magias VARCHAR(250),
extras VARCHAR(250),

per_acrobacia INT NOT NULL,
per_arcanismo INT NOT NULL,
per_atletismo INT NOT NULL,
per_atuacao INT NOT NULL,
per_blefar INT NOT NULL,
per_furtividade INT NOT NULL,
per_historia INT NOT NULL,
per_intimidacao INT NOT NULL,
per_investigacao INT NOT NULL,
per_lidar_animais INT NOT NULL,
per_medicina INT NOT NULL,
per_natureza INT NOT NULL,
per_persuasao INT NOT NULL,
per_prestidigitacao INT NOT NULL,
per_religiao INT NOT NULL,
per_sobrevivencia INT NOT NULL,

CONSTRAINT pk_personagem PRIMARY KEY (cd_personagem),
CONSTRAINT fk_usuarios_personagem FOREIGN KEY (cd_usuario) REFERENCES tb_usuarios(cd_usuario) 
)

INSERT INTO  `tb_ficha_personagem`(`cd_usuario`,`nome_jogador`,`nome_personagem`, `raca_personagem`, `antecedente_personagem`, `tendencia_personagem`, `nome_personagem``atr_forca`, `atr_destreza`, 
`atr_constituicao`, `atr_inteligencia`,`atr_sabedoria`, `atr_carisma`, 
    `tdr_forca`, `tdr_destreza`, `tdr_constituicao`, `tdr_inteligencia`,`tdr_sabedoria`, `tdr_carisma`, 
    `percp_passiva`, `bonus_profici`, `deslocamento`, `iniciativa` , `classe_armadura` , `inspiracao`, 
    `vida_maxima`, `vida_atual`, `vida_temporaria`, `armor`, `armas`, `ferramentos`, `linguagens`, `historia`,
    `magias`, `extras`, `per_acrobacia`, `per_arcanismo`, `per_atletismo`, `per_atuacao`, `per_blefar`, `per_furtividade`,
    `per_historia`, `per_intimidacao`, `per_investigacao`, `per_lidar_animais`, `per_medicina`, `per_natureza`, 
    `per_persuasao`, `per_prestidigitacao`, `per_religiao`, `per_sobrevivencia`)VALUES(1,"Joao Vitor", "Beatrice", "Elfa", "Forasteiro", 
    "Caotic Evil", 10, 15, 13, 14, 20, 20, 0, 2, 1, 2 ,5 ,5 ,0 ,2 ,1 ,2 ,7 ,7 ,20 ,2 ,9 ,2 ,18 ,1 ,20 ,5 ,0 ,"Armaduras medias", "Nenhuma", "Kit de alquimia(prof)",
     "Comum, draconico demoniaco", "Nula", "Não fucionaria assim.", " Bruxas", 1, 4, 0, 7, 7, 3, 4, 5, 4, 6, 7, 8, 5,5,6,7);