# Lista de Projetos PHP

Este projeto PHP exibe uma lista de subprojetos armazenados em uma pasta específica, mostrando o nome de cada projeto e um ícone personalizado, caso disponível. É uma forma de organizar e acessar rapidamente diferentes projetos PHP.

## Funcionalidades

- Exibe uma lista de projetos a partir de uma pasta.
- Substitui os `hífens` e `underscores` no nome da pasta por espaços ao exibir o nome do projeto.
- Exibe um ícone personalizado de cada projeto, caso o ícone esteja presente na pasta `img` de cada projeto.
- Interface simples e responsiva.

<h2 align="center">Capturas de Tela</h2>

<p align="center">
  <img src="https://blogger.googleusercontent.com/img/a/AVvXsEhDCjazqritrnAYbZY1Cxf4Xj2GyZ89j49-9IilpZXtUibm5_3i2TfsYCFfwoaZjE8SBo2MFW-C3ki6JmE46AC5Y35Y8wDp9w8NN0fQSMoqSEALigg4RBFzT9XEngEt_eBKi3KnM5tda-9bMs_WWFZ-YoZ-D6jgjwONzbcBCHzy4vMosspWTzksnLuuqRm-" width="800">
</p>

## Estrutura do Projeto

```plaintext
|-- index.php # Arquivo principal que exibe a lista de projetos 
|-- funcoes.php # Funções PHP para manipular e listar projetos 
|-- style.css # Arquivo de estilo CSS 
|-- /projetos # Pasta que contém os subprojetos 
    |-- /meu-projeto-1 # Exemplo de subprojeto 
        |-- index.php # Arquivo principal do subprojeto 
        |-- /img |-- icone.png # Ícone do subprojeto 
    |-- /meu-projeto-2 # Outro subprojeto 
     |-- index.php 
     |-- /img 
         |-- icone.png
```
## Instalação

1. Clone este repositório para o seu ambiente local:

```bash
git clone https://github.com/JM7087/lista-de-projetos-php.git
```
Coloque seus projetos na pasta projetos/. Cada projeto deve ter, opcionalmente, uma pasta img/ com o ícone chamado icone.png.

Certifique-se de que o servidor web (ex: Apache ou Nginx) esteja configurado corretamente para rodar o projeto.

Acesse o projeto no seu navegador através do endereço:
```bash
http://localhost/seu-projeto
```
## Como Adicionar um Novo Projeto

1. Crie uma nova pasta dentro do diretório `projetos/` com o nome do seu novo projeto.

2. Adicione os arquivos do seu projeto na nova pasta.

3. Caso deseje adicionar um ícone personalizado para o projeto, crie uma pasta `img/` dentro do diretório do projeto e coloque um arquivo `icone.png` dentro dela.

4. O nome do projeto será exibido na lista, com hífens substituídos por espaços.

## Tecnologias Utilizadas

- **PHP**: Para listar diretórios e exibir a interface.

- **HTML/CSS**: Para estruturar e estilizar a página.

- **JavaScript**: Para exibir o ano atual no rodapé.

## Contribuições

Sinta-se à vontade para contribuir com o projeto! Basta seguir os passos abaixo:

1. Faça um fork do projeto.
2. Crie uma branch para sua feature (`git checkout -b minha-feature`).
3. Faça commit das suas mudanças (`git commit -m 'Adiciona nova feature'`).
4. Faça push para a branch (`git push origin minha-feature`).
5. Abra um Pull Request.

## Licença

Este projeto está licenciado sob a Licença MIT - consulte o arquivo [LICENSE](LICENSE) para mais detalhes.

## Créditos

- Desenvolvido por [João Marcos](https://links.jm7087.com)
