<!DOCTYPE html>
<?php include_once 'conexao.php'?>
<?php include_once 'head.php'?>
<?php
	session_start();
	include_once('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Relatório de Estoque</title>
		<style>
			table {
				width: 100%;
				border-collapse: collapse;
			}
			td, th {
				border: 1px solid #dddddd;
				text-align: left;
				padding: 8px;
			}
			th {
				background-color: #f2f2f2;
			}
			.center {
				text-align: center;
			}
		</style>
	<head>
	<body>
		<?php
		// Obtém a data atual no formato desejado
		$data_atual = date('dmY'); // Exemplo: 20240508 para 8 de maio de 2024

		// Define o nome do arquivo com a data atual
		$arquivo = 'Relatorio_Estoque_' . $data_atual . '.xls';

		// Criamos uma tabela HTML com o formato da planilha
		$html = '';
		$html .= '<table>';
		$html .= '<tr>';
		$html .= '<th colspan="6" class="center">Relatório de Estoque</th>';
		$html .= '</tr>';

		$html .= '<tr>';
		$html .= '<th>ID Produto</th>';
		$html .= '<th>Numero</th>';
		$html .= '<th>Nome</th>';
		$html .= '<th>Quantidade</th>';
		$html .= '<th>Categoria</th>';
		$html .= '<th>Fornecedor</th>';
		$html .= '</tr>';

		//Selecionar todos os itens da tabela 
		$result_estoque = "SELECT IdProduto, Nome, Numero, Quantidade, Categoria, Fornecedor FROM estoque";
		$resultado_estoque = mysqli_query($conexao , $result_estoque);

		while($row_estoque = mysqli_fetch_assoc($resultado_estoque)){
			$html .= '<tr>';
			$html .= '<td>'.$row_estoque["IdProduto"].'</td>';
			$html .= '<td>'.$row_estoque["Numero"].'</td>';
			$html .= '<td>'.$row_estoque["Nome"].'</td>';
			$html .= '<td>'.$row_estoque["Quantidade"].'</td>';
			$html .= '<td>'.$row_estoque["Categoria"].'</td>';
			$html .= '<td>'.$row_estoque["Fornecedor"].'</td>';
			$html .= '</tr>';
		}
		// Configurações header para forçar o download
		header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );
		// Envia o conteúdo do arquivo
		echo $html;
		exit; ?>
	</body>
</html>
