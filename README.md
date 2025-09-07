# 🌐 Projeto Laravel – Apresentação IFRN

Este projeto foi desenvolvido para fins de apresentação na disciplina de **Backend**, com datas de apresentação **11 e 12 de junho de 2025**.  
O objetivo é demonstrar o uso do **framework Laravel** na construção de aplicações web, explorando suas funcionalidades, padrões de projeto e implementação prática.

---

## 🎯 Objetivo

O projeto apresenta os conceitos do **Laravel** aplicados em um sistema web funcional, inspirado no site institucional do **IFRN**, com pelo menos **3 telas navegáveis**.  
A apresentação aborda:

- Introdução ao Laravel.  
- Características principais do framework.  
- Padrões de projeto utilizados.  
- Linguagens suportadas.  
- Empresas que utilizam Laravel.  
- Demonstração prática da implementação.

---

## ⚙️ Funcionalidades do Projeto

- **Rotas e navegação**: telas navegáveis implementando páginas do site do IFRN.  
- **Templates e layouts reutilizáveis** com Blade.  
- **Integração com arquivos estáticos** (CSS, JS, imagens).  
- **Uso de componentes** para menus, rodapés e elementos repetitivos.  
- **Exemplo de implementação** fiel às páginas institucionais do IFRN.

---

## 📌 Páginas Implementadas

Links de referência para a construção das páginas:

- [Portal IFRN – Institucional](https://portal.ifrn.edu.br/acesso-a-informacao/institucional/)  
- [Notícias IFRN](https://portal.ifrn.edu.br/campus/reitoria/noticias/ifrn-adere-ao-programa-pe-de-meia-licenciatura-e-oferece-incentivo-a-futuros-professores/)  

O projeto conta com pelo menos **3 telas navegáveis**, simulando a estrutura do site oficial do IFRN.

---

## 📂 Estrutura do Projeto Laravel

```bash
ifrn-laravel/
│
├── app/
│   ├── Http/
│   │   └── Controllers/   # Controladores das páginas
│   ├── Models/            # Modelos (se necessário)
│   └── ...
│
├── resources/
│   ├── views/
│   │   ├── layouts/       # Templates base (Blade)
│   │   ├── home.blade.php
│   │   ├── institucional.blade.php
│   │   └── noticias.blade.php
│   └── ...
│
├── public/
│   ├── css/
│   ├── js/
│   └── images/
│
├── routes/
│   └── web.php            # Rotas principais
│
└── composer.json          # Dependências do Laravel
