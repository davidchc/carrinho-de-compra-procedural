# Carrinho de Compra Procedural

Existe uma videoaula minha que foi feita em 2009 sobre carrinho de compra. Ela era totalmente procedural. E utilizava as extensões mysql_*, as quais
hoje não estão mais disponiveis.

Então atualizei o código, que não está igual da videoaula, continua sendo procedural, mas com uma organização melhor.

Na versão da videoaula, está tudo junto, e nessa nova versão está separado em responsabilidade.

Dentro da pasta functions, tem os arquivos:

*functions/cart.php*

*functions/product.php* 

cart.php são funções do carrinho, como adicionar, alterar, excluir e exibir os produtos do carrinho.
product.php são funções relacionado a tabela produtos.

A conexão com banco de dados está no arquivo *connection.php*, onde tem constantes onde os valores serão substituidos pelos os dados do seu
banco de dados.

*index.php* é onde exibida os produtos
*carrinho.php* é onde está o carrinho de compras.





