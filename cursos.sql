CREATE TABLE cursos (
    cursos_id SERIAL PRIMARY KEY NOT NULL ,
    cursos_nombre VARCHAR(50) NOT NULL,
    cursos_cantidad_per INT NOT NULL,
    cursos_fase VARCHAR (50) NOT NULL,
    cursos_instructor VARCHAR(50) NOT NULL,
    cursos_creditos INT NOT NULL
);
