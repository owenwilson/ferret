CREATE TABLE usuario(
    Id SERIAL,
    Usuario VARCHAR (15) NOT NULL,
    Contrasena VARCHAR (12) NOT NULL,
    Email VARCHAR (30) NOT NULL,
    TipoUsuario VARCHAR (15) NOT NULL,
    CONSTRAINT pk_id_usuario PRIMARY KEY (Id)
);
