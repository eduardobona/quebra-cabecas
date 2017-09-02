# Quebra-cabeças PHP
## Material de apoio didático a linguagem PHP
- Declaraço de Variáveis e Constantes
- Estruturas de Controle - Condicionais
- Estruturas de Controle - Laços de Repetição
- Testes Simples
- Manipulação de Arrays
- File get/put contents
- Upload de Arquivos
- Manipulação de Arquivos
- Manipulação de Imagens com biblioteca GD

Ainda tem a fazer:
- Testes dinâmicos prevendo alteração da imagem
- Upload de imagens / alteração de imagem padrão
- Validação de Imagens por tipo
- Validação de Imagens por tamanho e largura
- Separar as responsabilidades em funções
- Estruturar o projeto
- (e o objeto final) criar o jogo - de fato.

Em um futuro:
- Criar a versão 2 orientada a objetos para comparação entre as versões
- Testes automatizados com PHPUnit

Rodando o projeto no IBM Bluemix:

{
	"PHP_VERSION": "{PHP_70_LATEST}",
	"PHP_EXTENSIONS": ["bz2", "zlib", "curl", "mcrypt", "gd"]
}

Para rodar APIs com curl ssl (xampp) resolver da seguinte maneira:
- Baixar o arquivo cacert.pem em https://curl.haxx.se/docs/caextract.html
- Colocar arquivo em php\extras\ssl
- Depois colocar no php.ini a configuração curl.cainfo="C:\tools\xampp\php\extras\ssl\cacert.pem"