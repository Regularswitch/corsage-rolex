# Corsage Rolex

A area Rolex do site foi feira em formato de plugin de WordPress, 
a função do plugin é adicionar templates de páginas, foi seguido 
as orientações das melhores praticas de desenvolvimento, 
segue link documentação https://developer.wordpress.org/plugins/plugin-basics/

## Motivo por fazer em plugin

O site da Corsage esta desenvolvido no WordPress usando o tema Salient,
temas sempre sofrem upgrades se os código fossem junto com o template
poderiam ser apagado com alguma atualização do mesmo.

## Relógio 

O relógio como teve que ser adicionado ao template, foi incluído por ACTION do WordPress
como esta na documentação oficial do próprio template https://themenectar.com/docs/salient/developer-docs/ e em caso de duvida sobre o uso de action 
segue a referencia https://developer.wordpress.org/reference/functions/add_action/

## Como adicionar novas página

Tendo em mente em mater a integridade das paginas sob qualquer troca de tema ou update do mesmo
a forma mais assertiva e adicionas os template por um plugin, assim também a uma separação entre 
o que é area Rolex e site, os código ficam separados em coso de duvidas separei um video show de bola
com um passa a passo simples https://youtu.be/Rl3HR_vf0Rc


## Base de código

Foi criado um repositório no github com essa documentação e todos arquivos do plugin, se preferir
pode ser fazer um **FORK** segue o link do repositório 
https://github.com/Regularswitch/corsage-rolex.git

## Instalação do plugin

Para Instalar o plugin bastar gera um ZIP da pasta, OBS: remover a pasta oculta **.git** e
renomear a pasta para simplesmente **/rolex** 

![Imagem](https://i.imgur.com/8Fkv5vf.png)

Apos isso abra o painel do WordPress e va em **plugin > adicionar novo**

![Imagem](https://i.imgur.com/AOU6pk2.png)

Depois clique sobre o botão **enviar plugin** escolha seu plugin compactado e depois clique no botão
**instalar agora**

![Imagem](https://i.imgur.com/bEgwWtZ.png)

Apos completa a instalação isso pode levar alguns minutos, basta ativar 

![Imagem](https://i.imgur.com/ZzlR7Ro.png)

E pronto agora no seu painel do WordPress ao criar pagina e postagens vc vai ter dos detalhes da pagina
, na area de modelos todos os modelos inclusos no template

![Imagem](https://i.imgur.com/iGNd4gD.png)

Caso queira colocar direto no instalação local basta vc entrar dentro da para **/wp-content/plugins/rolex**

![Imagem](https://i.imgur.com/4LMVHZn.png)

**OBS**: pode ate clonas dentro da pasta onde fica os plugin so que o nome da pasta tem quer ser **/rolex**


## Botão Orçamento

O botão de orçamento foi adicionado através **HOOK** do WooCommerce segue link da documentação
https://www.businessbloomer.com/woocommerce-visual-hook-guide-single-product-page/

## Adicionar Filtros aos Produtos

O processo par adicionar filtros de tipos de materiais que compões os produtos é nativo do próprio
WooCommerce basta seguir os passos descritos abaixo

Basta logar no painel WordPress acessar o menu **> Personalizar**
![Imagem](https://i.imgur.com/iqlRUVi.png)

Depois acessar a opção **> Widgets**
![Imagem](https://i.imgur.com/mzgAaO1.png)

Em seguida escolher a opção **> WooCommerce Sidebar**
![Imagem](https://i.imgur.com/4uM9R8e.png)

Clicar sobre a botão com sinal de mais e buscar por 
**> filtrar produtos por atributo**
![Imagem](https://i.imgur.com/J9DE2HY.png)

Escolher qual atributo você vai criar o filtro e concluir
![Imagem](https://i.imgur.com/ydzCDzq.png)

Agora dentro do seu painel Administrativo vai em 
**> produtos > Atributos** e cadastre seu Atributo
![Imagem](https://i.imgur.com/uhPUnkC.png)

Apos seu atributo criado basta entrar em **configurar termos**
![Imagem](https://i.imgur.com/3wOm0qS.png)

E agora criar os filtros pelo quais você irar segmentar seu produtos
![Imagem](https://i.imgur.com/uXq1Pmp.png)

Esse termos são o elementos que aparecerão na tela de shop
o nome da seção pode ser personalizado na aba personalização
![Imagem](https://i.imgur.com/yDQbOJ9.png)

Para relacionar o produto com o atributo, na pagina de edição do produto va ate a sessão atributos como na imagem abaixo, escolha no tipo de atributo, clique em adicionar, no campo valores adicione 1 ou mais opção, e depois salve as alterações
![Imagem](https://i.imgur.com/tV6LxW1.png)