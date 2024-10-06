<?php

use Hefestos\Database\Tabela;

return 'CREATE TABLE MetaFinanceira (
    id_meta INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT NOT NULL,
    descricao VARCHAR(255),
    valor_alvo DECIMAL(10, 2) NOT NULL,
    data_meta DATETIME NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES Usuario(id_usuario)
);';