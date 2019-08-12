# Como funciona um site

## Bug não é bagunça
Apesar de algumas funcionalidades apresentarem comportamento impróprio quando há conflitos semânticos ou de incompatibilidade entre tecnologias. Existe a World Wide Web Consortium (W3C), uma organização internacional comprometida com o aprimoramento da web. É composto por várias centenas de organizações membros de uma variedade de indústrias de TI relacionadas. O W3C define padrões para a World Wide Web para facilitar a interoperabilidade e a cooperação entre todas as partes interessadas da web. Foi criado em 1994 pelo criador do WWW, Tim Berners-Lee. Para aprender mais sobre os padrões da web acesse [a página em português da W3C.](http://www.w3c.br/Padroes/)

A Web, formalmente chamada de World Wide Web, é uma coleção de um monte de arquivos de texto e gráficos (mais algumas outras coisas) que compõem as páginas da Web. A base da Web é a Internet. A Web depende da Internet para conectar seus diversos arquivos e permitir que as pessoas acessem a Web. O e-mail, por exemplo, é uma função separada que também depende da Internet.

## Dando nome aos bois

A Web é definida por duas especificações: HyperText Transfer Protocol (HTTP) e HyperText Markup Language (HTML). A ideia subjacente
por trás da Web é hipertexto - texto que pode conter links para outras partes do texto armazenado em qualquer lugar na Internet. A Web recebeu esse nome pelo modo como todos os links conectam os pedaços de texto juntos como uma enorme teia de aranha.

A Internet é a gigantesca rede de computadores que conecta outras redes de computadores ao redor do mundo. Na sua base, a Internet é apenas um mecanismo gigante para mover arquivos de um computador para outro.

__Cliente:__ quaisquer dispositivos conectados a Internet ou os programas com permissões de acesso à rede. Ao realizar uma requisição o Cliente realiza um download da cópia do arquivo original disponível no Servidor. Clientes são caracterizados por realizarem requisições aos Servidores.

__Servidor:__ computadores com alta capacidade de processamento e armazenamento de dados. Mantém armazenados páginas ou sistemas web, aplicações ou pacotes, serviços ou outras máquinas virtuais. Servidores são caracterizados por prestarem respostas aos Clientes.


__Web page__: um documento de texto publicado
em um servidor da Web, tem tags HTML nele, quase
sempre inclui links de hipertexto e geralmente
inclui gráficos. Quando você clica no ícone "Retornar" do botão no seu navegador da Web, você passa para a página da Web anterior que você visitou.

__Web site:__ uma coleção de páginas da Web que
compartilham um tema comum e propósito e que os usuários geralmente acessam através da página principal do sítio eletrônico (homepage).

O acesso aos sítios eletrônicos é feito por meio de uma interface chamada de *navegador web*, existem vários destes navegadores disponibilizados sob diferentes nomes comerciais, sendo mais populares: Firefox da Mozilla Corp., Chrome da Google LLC, Edge da Microsoft Corp.  Um navegador da web usa HTTP para solicitar uma página da Web de um servidor da Web. A página da Web, por sua vez, usa HTTP para solicitar outros arquivos, como imagens gráficas ou anúncios, que fazem parte da página da Web. Depois de solicitar uma página da Web, seu navegador Web puxa os arquivos que compõem a página da Web de um ou mais servidores e monta esses arquivos em uma página em sua máquina.

Para conseguir aceder a essas páginas ou recursos alocados nos servidores conectados a Internet, existem identificadores únicos informados na requisão servindo de índice ou critério para a resposta do servidor.

__URI:__ significa Identificador Uniforme de Recurso. é uma cadeia de caracteres compacta usada para identificar ou denominar um recurso na Internet. 

__URL:__ significa Localizador Padrão de Recursos. É o endereço de um recurso na internet. Ele identifica a identificação de um recurso, bem como o protocolo usado para acessa-lo. Um URL tem a seguinte estrutura:  
1. O nome do protocolo
2. Identificador e palavra-passe
3. A identificação do servidor (seu endereço IP ou o nome DNS do host)
4. O número de porta
5. O caminho de acesso ao recurso

__URN:__ significa Nome Uniforme de Recurso. É um tipo de URI que usa o URN Scheme e que tem por objetivo a identificação única do recurso, de forma persistente e independente da sua localização. A ideia básica dos URNs como identificadores persistentes é permitir a separação estrita entre identificação (nome único) e localização (endereços URL que podem oferecer o recurso identificado). Os requisitos funcionais do padrão URN encontra-se fixados na norma RFC 1737, a sua sintaxe na RFC 2141.

>Ocorrerão casos em que Identificador e Localizador serão o mesmo. Mas essa não é uma regra.

__Domínio:__ endereço localizado na URL de sítios eletrônicos que aponta para um servidor específico.

__Sub-domínio:__ é um local exato no servidor do domínio.

As linguagens de programação mais comuns nos sítios eletrônicos têm suas instruções processadas pelo seu próprio computador quando visita esses endereços.

__HTML:__ a camada que apresenta o conteúdo. Podemos dizer que o HTML é a primeira camada. É nesta camada que atribuímos semântica ao conteúdo. É onde podemos dizer que determinada informação é um parágrafo, que determinado texto é um artigo, etc. O HTML é responsável por exibir o conteúdo dando-lhe significado

__CSS:__  a camada que dá forma aos elementos do HTML. O CSS é uma linguagem de estilização, formatação. Quando você vê um texto com determinada estilo, uma página com determinada cor de fundo ou um bloco envolto a uma borda saiba que tudo isso foi obtido com CSS. O CSS seleciona um elemento do HTML para estilizá-lo e apresentá-lo como nova forma no navegador.

__JavaScript:__ a camada que adiciona comportamentos dinâmicos. Quando o usuário está em contato com a interface de uma página pode a qualquer momento executar uma ação que resulte em um comportamento na página. Muitos desses resultados devem-se a acionamentos de scripts criado pela linguagem Javascript.

## Mas cadê o PHP?
Ao acessar o código-fonte das páginas web em sua máquina poderá identificar alguns elementos em HTML e CSS, talvez até em JavaScript, tão somente porquê essas linguagens são processadas na sua máquina, que que fez a requisição.

O PHP é uma linguagem que é processada no servidor, e somente após esse processamento que o servidor responde a solicitação já com o resultado pronto, renderizando-o no lado do cliente.