# Meu CEP Projeto

Este projeto é um aplicativo web simples que permite aos usuários inserir um CEP e obter informações relacionadas, como rua, bairro, cidade e estado, utilizando a API ViaCEP.

## Tecnologias Utilizadas

- PHP
- HTML
- CSS

## Como Configurar e Executar o Projeto

### Pré-requisitos

- Servidor XAMPP

### Passos para Configuração

1. Clone o repositório para o seu ambiente local:

    ```sh
    git clone https://github.com/DioCmrg/resolucao-case.git
    ```

2. Navegue até o diretório do projeto:

    ```sh
    cd meu-cep-projeto
    ```

3. Certifique-se de que os arquivos `index.php`, `Address.php` e `styles.css` estão no diretório raiz do projeto.

4. Inicie o servidor web e aponte para o diretório do projeto. Por exemplo, se estiver usando o XAMPP, mova o projeto para o diretório `htdocs`.

### Como Usar

1. Abra um navegador web.
2. Acesse o projeto através do endereço configurado no seu servidor web, como `http://localhost/resolucao-case`.
3. Insira um CEP válido no campo fornecido e clique em "Enviar".
4. As informações do endereço correspondente ao CEP serão exibidas na página.

## Estrutura do Projeto

meu-cep-projeto/
├── index.php
├── Address.php
├── styles.css
└── README.md

- `index.php`: Arquivo principal que contém o formulário e exibe os resultados.
- `Address.php`: Classe PHP responsável por buscar os dados do CEP na API ViaCEP.
- `styles.css`: Arquivo CSS para estilização da página.
- `README.md`: Este arquivo de documentação.

---

Projeto desenvolvido por Diovane.