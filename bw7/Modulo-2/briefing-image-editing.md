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

Tamanhos, tipos de arquivo, resolução, SEO, nesta seção esses detalhes parecerão bem menos incoerentes.

Aula #28 minuto 7:47

https://flothemes.com/flothemes-image-sizes/

https://support.squarespace.com/hc/en-us/articles/206542517-Formatting-your-images-for-display-on-the-web

https://www.foregroundweb.com/image-size/
