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
   
   3.3 - Liberado todas as permissões do container`

   `3.4 - Lembrando que essa permissão e apenas para fins de teste, e não em sistema de produção`

   ```bash
      chmod -R 775 storage
      ou
      chmod -R 775 bootstrap/cache
   ```
   `  3.4.1 - Caso o comando acima do item 3.4 não funcioner, Rode o comando abaixo. embrando que essa permissão e apenas para fins de teste, e não em sistema de produção`

```bash
    chmod -R 777 ./
```
4. Após isso, será necessário executar o composer install. No entanto, o framework utilizado **não possui dependências, pois ainda está em desenvolvimento. Ele precisou ser atualizado recentemente para garantir que pudesse ser utilizado neste projeto, já que anteriormente apresentava conflitos com o Docker.**
   
      `Nota: Certifique-se de que o framework foi atualizado recentemente para garantir compatibilidade com o projeto. Esta retornando erro no comando php forja migrar Na linha: 403, mas o proprio criador do framework falou nessa linha (// são 3 da manhã, dá um desconto) então né`