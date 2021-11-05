<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Document</title>
    <style>
#area
{
  position:relative;
  left:37%;
  top:29%;
  width:320px;
  height:270px;
}
    </style>
</head>
<body>
<font color='#9549ed'>
<div style='background:#d6e8f9;'>
<form name="cadastro" method="get" action="cadastro.php">
 <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbspEste é o formulário</h1><br/><br/>
&nbsp;&nbsp;&nbsp;&nbsp; <b>O que você achou deste site?</b><br/><br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="op" value="mb"/>
Muito Bom 
<input type="radio" name="op" value="b"/>
Bom 
<input type="radio" name="op" value="r"/>
Regular 
<input type="radio" name="op" value="i"/>
Insuficiente <br/><br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Qual seleção você mais gostou?</b><br/><br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="sel">
    <option>Bolinhas</option>
    <option>Quadrados</option>
    <option>Caixas de texto</option>
    <option>O design</option>
</select>
Outro: <input type="text" name="out"> <br/>
<br/><br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Digite seus comentários no espaço abaixo:</b><br/><br/>
<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea name="msg" cols="50" rows="8">
</textarea>
<br/><br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Diga-nos como entrar em contato com você:</b><br/><br/>
<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nome:&nbsp;  <input type="text" name="nome" size="40"> <br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-mail: <input type="text" name="nome"size="40"> <br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fone:&nbsp;&nbsp;&nbsp;   <input type="text" name="nome"size="40"> <br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fax:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="nome"size="40"> <br/>
<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="quero" value="novidades"/>
<b>Quero receber novidades do site via E-mail</b> <br/><br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="Enviar">
</div>
</font>
</form>
</body>
</html>