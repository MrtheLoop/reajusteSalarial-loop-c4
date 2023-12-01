CREATE DATABASE funcionarios;

CREATE TABLE todos_funcionarios (
id SERIAL,
nome varchar(40),
entregas_dia int,
salario NUMERIC
);

INSERT INTO todos_funcionarios (nome, entregas_dia, salario)
VALUES 
('Jose da Silva', 54, 1970.00),
('Ananias de Jesus', 54, 1970.00),
('Edson brito', 44, 1972.30),
('Palin Habbar', 54, 1850.10),
('Olavo Pinto', 49, 1770.00),
('Jacinto Leite Aquino Rego', 54, 1900.30),
('Kevin Mahmar', 84, 1570.00)
;



