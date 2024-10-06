<?php

use Hefestos\Database\Tabela;

return 'CREATE TABLE Orcamento (
    id_orcamento INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT NOT NULL,
    id_categoria INT NOT NULL,
    valor_planejado DECIMAL(10, 2) NOT NULL,
    data_inicio DATETIME NOT NULL,
    data_fim DATETIME NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES Usuario(id_usuario),
    FOREIGN KEY (id_categoria) REFERENCES Categoria(id_categoria)
);';