PRAGMA foreign_keys=OFF;
BEGIN TRANSACTION;
CREATE TABLE usuario (
id INTEGER PRIMARY KEY,
nome TEXT,
email TEXT,
senha TEXT
);
INSERT INTO usuario VALUES(1,'Ana','ana@gmail.com','123');
INSERT INTO usuario VALUES(2,'Amanda','amanda@gmai.com','1234');
CREATE TABLE noticia(
id INTEGER PRIMARY KEY,
titulo TEXT,
conteudo TEXT,
id_usuario INTEGER,
FOREIGN KEY (id_usuario) REFERENCES usuario(id)
);
CREATE TABLE comentario (
id INTEGER PRIMARY KEY,
id_usuario INTEGER,
id_noticia INTEGER,
conteudo TEXT,
data BLOB,
FOREIGN KEY (id_usuario) REFERENCES usuario(id),
FOREIGN KEY (id_noticia) REFERENCES noticia(id)
);
COMMIT;
