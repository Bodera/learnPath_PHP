# Softwares de edição de imagens para desenvolvedores

* Figma
* Adobe XD
* Photoshop CS6
* Gimp

## Ferramentas de manipulação de imagens para desenvolvedores

* Camadas
Camadas agrupam diferentes elementos gráficos que compõem uma imagem, é um recurso de organização de layout que propicia ao designer ter controle individual sobre cada pilha.

* Mouse ou selecionar
Para poder navegar pelo documento, sem realizar alterações.

* Seleção
Para selecionar uma região da imagem em um formato geométrico (bola, quadrado ou triângulo)

* Corte ou Recorte
Para remover uma região da imagem copiando-a para área de tranferência.

* Seleção livre ou manual
Para selecionar uma região da imagem em um formato definido pelo mouse.

* Conta-gotas
Ao clicar em uma região da imagem apresenta o código hexadecimal exato daquela cor.

* Texto
Ao clicar em uma região da imagem irá instanciar um campo de texto.

### Notação de cores

* __Pixel__ - Por definição é a menor e mais básica unidade lógica de uma imagem ou gráfico, sendo que a combinação de vários pixels em uma matriz compõem a imagem digital. Esse nome tem um porquê: é a junção das palavras em inglês *Picture* e *Element*. Cada pixel pode assumir uma única cor por vez, e a variação de cores que ele pode suportar dependerá do total de __bits__ utilizados para representar aquela cor. Seu propósito é definir as dimensões de uma imagem.

* __PPI__ e __DPI__ - Um pixel não possui tamanho fixo, mas fazemos a abstração de um pixel na forma geométrica de um quadrado, e sua percepção é influenciada pela qualidade de resolução, __P__ixels __P__or __P__olegada. Todavia para atividades de impressão os Pontos Por Polegada são uma medida de maior relevância, tendo em vista que impacta na definição, nitidez e qualidade da imagem.

* O __vetor__ - Gráficos vetorizados possuem uma enorme vantagem sobre imagens *raster* (a.k.a. bitmap), eles não têm sua resolução degradada conforme são ampliados e podem ser manipulados e animados utilizando CSS. Um bom software para se trabalhar com SVG é o [Inkscape](https://inkscape.org/pt-br/).

* __CMYK__ - Trabalhado principalmente em atividades de impressão, por padrão trabalha com um plano de fundo na cor branco, baseando-se em um método *subtrativo*, assim quanto mais cores são combinadas mais próximo se chegará da cor preto. Utiliza as cores ciano, magenta, amarelo e o preto para gerar as demais cores, pois se combinarmos as três primeiras não alcançaremos um nível de saturação aceitável para a cor preto.

* __RGB__ - Notação de cor baseada em um método *aditivo*, na qual a adição de mais cores é a premissa para se alcançar a cor branco, sendo assim, a ausência de cores resulta na cor preto, e quando os valores forem muito próximos obtêm-se uma tonalidade mais pálida. É um esquema comumente utilizado em telas de aparelhos eletrônicos como câmeras, celulares, televisores e monitores. Utiliza as cores vermelho, verde e azul, em níveis que variam de 0 a 255, para gerar as demais cores. Já que cada cor suporta até 1 byte, o código RGB opera com 24 bits.

* __RGBA__ - Notação de cor idêntica ao __RGB__, com a diferença de introduzir um novo byte para o *canal alfa*, valor responsável por indicar nível de transparência, portanto opera com 32 bits. Arquivos de imagem `.png` e a API do OpenGL utilizam esta notação.

Existe uma diversidade de metodologias de cores (__HSB__, __Lab__ etc), para saber mais sobre eles comece visitando [esta referência aqui](https://www.designersinsights.com/designer-resources/understanding-color-models/). Todas as cores geradas pelas notações citadas aqui têm seu código único de referência em hexadecimal!

### Otimizando imagens para a web

Tamanhos, tipos de arquivo, resolução, SEO, nesta seção esses detalhes parecerão bem menos incoerentes no decorrer dos tópicos a seguir.

#### Resolução e tamanho de imagens

Para imagens que serão impressas recomenda-se utilizar entre 300dpi a 720dpi de resolução.

Para visualiação em telas e monitores utilize (1920 x 1080)pixels para qualidade Full HD ou (2560 x 1440)pixels para qualidade Quad HD, comum em smartphones, e (3840 x 2160)pixels para qualidade Ultra HDTV.

É útil saber também sobre a proporção da tela em que o conteúdo será visualizado, essa medida determina a largura das telas em que o conteúdo será exibido. Os formatos mais comuns de *aspect ratio* são 16:9, chamado de formato panorâmico, 17:9, 4:3, 5:4 e 21:9.

Uma tela é medida do canto inferior esquerdo até o canto superior direito, na diagonal, e geralmente é apresentada em polegadas, cada polegada equivale a 2.54 centímetros.

Confira essa [calculadora de DPI, PPI e MP](https://www.sven.de/dpi/). Pode vir a ser útil.

Aqui estão alguns links que abordam o tópico de maneira mais aprofundada:

* [Flothemes](https://flothemes.com/flothemes-image-sizes/)
* [Squarespace](https://support.squarespace.com/hc/en-us/articles/206542517-Formatting-your-images-for-display-on-the-web)
* [Foregroundweb](https://www.foregroundweb.com/image-size/)

#### Tipos de arquivos

Os 4 tipos de formatos de imagem suportados para Web mais populares são: *JPEG/JPG*, *PNG*, *GIF*, *SVG*.

![lbrandy-webcomic-xkcd](http://lbrandy.com/assets/jpg_vs_png2.png)

Você irá usar *Joint Photographic Experts Group* quando se preocupa em reduzir o tamanho original da imagem porque ele trabalha com o método *lossy compressed*, sua utilização é recomendada para fotografias, pois seu arquivo original consome muita memória e você está disposto a perder um pouco de qualidade para reduzir espaço.

Você irá usar *Portable Network Graphics* para apresentar imagens que contenham texto ou que não podem perder sofrer perda de qualidade comparadas ao arquivo original porque usa o método *lossless compression*, assim como o *GIF*. É suportado na maioria dos navegadores mas não em todos, também possui o recurso de trabalhar a opacidade da imagem.

Você irá usar *Graphics Interchange Format* para animações, e tão somente para este fim.

Você irá usar *Scalable Vector Graphics* quando não quiser trabalhar com imagens bitmap, portanto abandonando os pixels você abandona a preocupação com qualidade e resolução das imagens. Exemplos práticos são ícones, realismo, cartoons e outros efeitos gráficos de design. É com sem sombra de dúvidas a tecnologia do futuro. Você pode inclusive criar animações usando *SVG*.

O tamanho máximo tolerado para um arquivo de imagem é de 20Mb, mas recomenda-se manter suas imagens com menos de 800Kb.

#### Search engine optimization

Entenda como *SEO* (pronuncia-se tal qual a palavra *seal*), o emprego de metodologias para alavancar o alcance e acesso de uma página ou site pelos usuários buscando atender diretrizes de boas práticas convencionadas por mecanismos de busca da internet, entidades como a W3C, e inclusive patentes e pesquisas científicas.

É um assunto que requer uma leitura mais aprofundada e foge ao escopo deste documento, por isso serão listados alguns links abaixo para melhor entendimento deste tópico:

* [Moz: Guide to SEO](https://moz.com/beginners-guide-to-seo)

* [Mozila glossary for SEO](https://developer.mozilla.org/en-US/docs/Glossary/SEO)

* [Compliance matters](https://trafficbox.org/w3c_seo/)

* [SEO browser plugins](https://www.searchenginejournal.com/seo-tools/browser-extensions-plugins/)
