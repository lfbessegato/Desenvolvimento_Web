<!doctype html> => Identifica o conteúdo do documento.

<html> </html> => Tem todas ás páginas, tag principal.

<head></head> => O head de um documento HTML é a parte que não é exibida no 
navegador da Web quando a página é carregada. ... Aprender sobre o cabeçalho HTML,
seu propósito, os itens mais importantes que ele pode conter e que efeito 
isso pode ter no documento HTML. (ex:
	 <title></title> => Título da página
	 <meta charset="utf-8 /> => definir caracter set

<body></body> => é o elemento no nosso documento responsável por ser o container de tudo que é conteúdo do site. 
Diferente do <head>, oque está dentro do <body> é oque fica/ou ficará disponível 
para visualização do visitante
Tags de cabeçalho:

	<h1></h1> 

<p></p> => Paragrafos tem um espaçamento com o texto logo em seguida
<br /> => Pular uma linha.
<hr /> => Regra horizontal (cria uma linha entre os textos)

* Formatar textos
	negrito => <strong></strong>
	itálico => <em></em> (em = ênfase)
	Underline => <u></u>
	Texto errado (com um risco sobre a palavra) => <strike></strike>

* Listas Não ordenadas
	<ul></ul> => Listas não ordenadas
	<li></li> => Itens da Lista - Marcadores

* Lista ordenadas
	<ol></ol> => Lista ordenadas
	<li></li> => Itens da Lista - Numeradas

* Imagens
	<img> => Para imagens e possui os atributos, e para fechar basta colocar /> 
		src (Source) => caminho da imagem no servidor ou de outro link
		width => Largura da imagem em pixels e não é necessário escrever.
		height => Altura da imagem em pixels.

* Links
	<a></a> => Anchor e possui o atributo: 
		href = Hyper link reference, links externos e internos

* Tabelas
	<table></table> => Para criar a Tabela, com os atributos:
		* border 
		* width => largura (pixel ou porcentagem)
		* align => para alinhamento da tabela.

	<tr></tr> => linhas de uma tabela
	<th></th> => Cabeçalhos das colunas
	<td></td> => dados da Tabela (células) => Pode colocar texto, imagens, vídeos, atributos que podem ser utilizados
		colpspan => qtd de colunas que podem ser ocupadas.
		rowspaan => qtd de linhas que podem ser ocupadas.

* Formularios 
	<form></form> => para criar o formulário 
		<input type="text" name="nomedavariavel" /> => Para inputar dados do tipo texto.
		<input type="password" name="nomedavariavel" /> => Para inputar dados do tipo senha (escondido os caracteres)
		<input type="button" value="Login" /> => Input do tipo Botão.
		<input type="submit" value="Login" /> => Input do tipo submit, ao clicar os dados serão enviados.
		<input type="radio" name="nnnn" /> => tipo radio e definir o mesmo name para todas as seleçoes rádio.
		<input type="checkbox" /> => Tipo de seleção em checkBox.
		<select></select> => É um tipo combobox, é combinada com a tag <option></option>
		<textarea></textarea> => Para digitar textos (ex: observação)

* HTML Entities => São códigos utilizados para exibir caracteres especiais.
	https://www.w3schools.com/html/html_entities.asp


