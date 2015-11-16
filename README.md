# flexy-teste-tecnico
Teste Técnico Programador PHP Pleno

Intruções para testar aplicação:
-----------------------------------

1. git clone https://github.com/dimiantoni/flexy-teste-tecnico.git flexy
2. cd flexy
3. chmod 777 -R storage/ (permissão para o laravel gravar dados na pasta de cache)
4. crie um banco de dados com o nome flexy
5. Execute o dump do arquivo database.sql que se encontra na pasta raiz do projeto, ele deverá criar e já selecionar para uso o banco de dados denomidado flexy.
6. No arquivo .env que se encontra na raiz da pasta do projeto edite a senha o usuário e o host do banco de dados para as credenciais do mysql da máquina onde o teste está sendo realizado.
7. Uma vez que o DB estiver configurado rode o seguinte comando:

```php
php artisan serve
```

Após o comando o laravel irá iniciar o servidor apache integrado do PHP na porta 8000 abra o navegador e acesse
http://localhost:8000/

no banco de dados já há algumas faixas de cep cadastradas, e duas transportadoras de teste e as faixas de peso, já com os devidos relacionamentos.

#Importante:
Não foi implementado ainda um tratamento dos inputs na tela de consultar opções de frete (home), então insira o cep sem nenhum caracter de separação ex: 88099001 e o peso do produto a ser entregue utilize a unidade de Kilos separado da unidade de gramas pelo caracter ponto, pois é assim que está persistido as faixas no banco de dados ex: 2.500

caso contrário o sistema não conseguirá realizar a consulta e apenas retornará uma validação de erro.