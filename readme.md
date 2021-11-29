
## Sistema de gestão de usuários

Projeto desenvolvido para a avaliação técnica.


## Instalação

Depois de fazer o clone, executar os seguintes comandos:

```bash
  composer install
```
```bash
  comopser run post-root-package-install
  comopser run post-create-project-cmd
  comopser run post-autoload-dump
```
Criar um banco de dados local e configurar com o arquivo .env que foi criado. Após a conexão com o banco de dados, rodas as migrations e os seeders:

```bash
  php artisan migrate --seed
```