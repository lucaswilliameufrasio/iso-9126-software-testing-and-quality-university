Projeto da disciplina de teste e qualidade de software.

## Como usar

- Clone o repisório com __git clone__
- copie o arquivo __.env.example__ para __.env__ e edite as credenciais do banco de daos
- Rode __composer install__
- Rode __php artisan key:generate__
- Rode __php artisan migrate --seed__ (Já insere alguns dados para teste)
- Agora você pode logar como admin: abra a URL principal e logue com as seguintes credenciais __admin@admin.com__ - __password__
- Preencha o banco de dados com topicos, questões e opções
- Para login com rede social - preencha as credenciais dos seus apps de rede social no arquivo .env (Não testado)
