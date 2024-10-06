<?php

use Hefestos\Database\Tabela;

return 'CREATE TABLE Receita (
    id_receita INT AUTO_INCREMENT PRIMARY KEY,
    id_conta INT NOT NULL,
    id_categoria INT NOT NULL,
    valor DECIMAL(10, 2) NOT NULL,
    data DATETIME NOT NULL,
    descricao VARCHAR(255),
    data_criacao DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_conta) REFERENCES Conta(id_conta),
    FOREIGN KEY (id_categoria) REFERENCES Categoria(id_categoria)
);';