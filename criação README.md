# Sistema de Autenticação de Usuário
Este projeto é um sistema de autenticação de usuário desenvolvido em PHP. O objetivo principal é permitir que os usuários se cadastrem, façam login, visualizem uma página personalizada e efetuem logout de forma segura.

## Funcionalidades

**Cadastro de usuário:** Os usuários podem se cadastrar fornecendo um nome, um email válido e uma senha. O sistema verifica se todos os campos estão preenchidos corretamente e valida o formato do email antes de permitir o cadastro.

**Login de usuário:** Após o cadastro, os usuários podem efetuar login utilizando seu email e senha. O sistema valida as credenciais fornecidas e, se autenticadas com sucesso, redireciona o usuário para uma página personalizada de boas-vindas.

**Página personalizada:** Após o login bem-sucedido, os usuários são redirecionados para uma página onde são recebidos com uma mensagem de boas-vindas, que inclui o seu nome. Nesta página, os usuários também têm a opção de efetuar logout, que irá encerrar a sessão atual.

**Conexão com o banco de dados:** O sistema utiliza a extensão PDO (PHP Data Objects) para se conectar a um banco de dados MySQL. Isso permite que as informações de usuário, como nome, email e senha criptografada, sejam armazenadas de forma segura.

## Configurações Personalizadas

### **Aviso: Configurações personalizadas podem ser necessárias!**
**Arquivo de conexão com o banco de dados:** O projeto utiliza um arquivo para estabelecer a conexão com o banco de dados MySQL por meio da extensão PDO. Por favor, revise e atualize as configurações desse arquivo de acordo com as credenciais do seu próprio banco de dados.

**Função redirect():** No projeto, é utilizada a função redirect() para redirecionar os usuários para diferentes páginas. Certifique-se de adicionar a URL correta do seu projeto no início da função, substituindo 'url_site'. Por exemplo, se o seu projeto estiver hospedado em https://www.exemplo.com, a função ficaria assim:
```
function redirect($url) {
    $link = 'https://www.exemplo.com' . $url;
    header("Location: $link");
    exit;
}
```
## Tecnologias utilizadas
**PHP:** Linguagem de programação principal para o desenvolvimento do sistema.

**MySQL:** Banco de dados relacional utilizado para armazenar as informações dos usuários.

**PDO (PHP Data Objects):** Interface de acesso a banco de dados utilizada para realizar a conexão segura com o banco de dados MySQL.

**HTML/CSS:** Linguagens de marcação e estilo utilizadas para a criação das páginas e interfaces do sistema. 
