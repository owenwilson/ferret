









CREATE TABLE usuario_login(
usuario varchar(30) PRIMARY KEY,
contrasena enum ('texto', 'sha1', 'md5'),
metodo varchar(40)
);
