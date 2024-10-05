# Gerenciamento Financeiro
O Gerenciamento Financeiro é um sistema que facilita o controle e organização de finanças. O projeto usa Docker para facilitar a configuração e o gerenciamento do ambiente back-end.

## Framework Utilizado
Este projeto foi desenvolvido utilizando o **HefestosPHP**.  
Você pode conferir mais detalhes no repositório oficial: [Link do Repositório](https://github.com/brunoggdev/hefestosphp.git)



## Inicialização do Back-end

**AVISO IMPORTANTE:** É necessário ter o Docker Engine instalado no seu computador local.

1. Acesse o diretório do projeto:  
   `cd Gerenciamento_financeiro`

2. Execute o comando para construir e iniciar o container:  
   `docker compose up -d`

3. Após o comando acima, libere a permissão para o container:

   3.1 Obtenha os IDs dos containers:  
   `docker ps`

   3.2 Acesse o terminal do container PHP, substituindo `<container-api-php>` pelo ID obtido:  
   `docker exec -it <container-api-php> /bin/bash`
