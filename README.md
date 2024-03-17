# HDC Events
Consiste em uma aplicação web com CRUD para criação de ventos e usúarios.

![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)
![HTML5](https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white)
![Bootstrap](https://img.shields.io/badge/bootstrap-%23563D7C.svg?style=for-the-badge&logo=bootstrap&logoColor=white)
![MySQL](https://img.shields.io/badge/mysql-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white)
<a href="https://git-scm.com/" target="_blank"><img src="https://img.shields.io/badge/Git-F05032?style=for-the-badge&logo=git&logoColor=white" alt="Git"></a>
<a href="https://github.com/" target="_blank"><img src="https://img.shields.io/badge/GitHub-181717?style=for-the-badge&logo=github&logoColor=white" alt="GitHub"></a>

# 💻 Pré-requisitos
- PHP com a versão 8.3.2

- Laravel com a versão 10.10

- Composer com a versão 2.6.6

- Mysql com a versão 8.2

Para instalar o HDC Events, siga estas etapas:

Clone o repositorio:
```bash
git clone https://github.com/BrunoHoinacki/hdcevents.git
```

gerando chave
```bash
composer install
php artisan generate:key
```

Sevidor
```bash
php artisan serve
```
ou
```bash
link_valet
```
Abra http://localhost:8000 no seu navegador favorito para ver o sistema funcionado.

Migration
```bash
php artisan migrate:fresh
```

Pronto agora você pode utilizar o projeto e adicionar seus eventos.
