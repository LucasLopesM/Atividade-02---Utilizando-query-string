<html>
<head>
<title>Produtos</title>

</head>
<body> 
<?php 

$produtos = array(

array("ID"=>"264895","Categoria"=>"Bebidas","Tipo"=>"Fefrigerante","Peso"=>"2L","Validade"=>"10/10/23"),

array("ID"=>"698458","Categoria"=>"Limpeza","Tipo"=>"Sabão em Pó","Peso"=>"500g","Validade"=>"11/11/23"),

array("ID"=>"325489","Categoria"=>"Laticínios","Tipo"=>"Iogurte","Peso"=>"200g","Validade"=>"15/11/22"),

array("ID"=>"369748","Categoria"=>"Hortifruti","Tipo"=>"Uva","Peso"=>"100g","Validade"=>"18/12/24"),

array("ID"=>"365894","Categoria"=>"Padaria","Tipo"=>"Coxinha","Peso"=>"100g","Validade"=>"15/12/23"),


);


?>
<h1>Produtos </h1>
<table border align = "left">

<tr>
<th> ID </th>
<th> Categoria </th>
<th> Tipo </th>
<th> Peso </th>
<th> Validade </th>

</tr>


<?php
foreach ($produtos as $produtos){
	
?>

<tr> 
<td ALIGN = "center"> <?php echo $produtos['ID']; ?>  </td>
<td ALIGN = "center"> <?php echo $produtos['Categoria']; ?> </td>
<td ALIGN = "center"> <?php echo $produtos['Tipo'];?></td>
<td ALIGN = "center"> <?php echo $produtos['Peso'];?></td>
<td ALIGN = "center"> <?php echo $produtos['Validade'];?></td>

</tr>

<?php } ?>
</table>

</body>
</html>