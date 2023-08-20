

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Advocacia</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container" id="header">
        <h3 class="mb-3 mt-4">Página de Cadastro de Escritório de Advocacia</h3>
        <form action="pag-adv-processos.php" method="POST">
            <div class="mb-3 mt-4 col-6">
                <label for="n_processo" class="form-label">Número do Processo:</label>
                    <input type="text" class="form-control" id="n_processo" />
            </div>
            <div class="mb-3">Processo:
                <select name="processo" class="form-label">
                    <option class="form-control" value="p_eletronico">Eletrônico</option>
                    <option class="form-control" value="p_fisico">Físico</option>
                </select>
            </div>
            <div class="mb-3" id="t_processo">Tipo de Processo:
                <select name="t_processo">
                    <option value="civel">Cível</option>
                    <option value="penal">Penal</option>
                    <option value="trabalhista">Trabalhista</option>
                    <option value="administrativo">Administrativo</option>
                </select>
            </div>
            <div id="adv" class="mb-3 col-6">
                <label for="nome_adv" class="form-label">Nome do Advogado:</label>
                <input type="text" id="nome_adv" class="form-control">
            </div>
            <div id="oab" class="mb-3 col-6">
                <label class="form-label" for="n_oab">OAB:</label>
                <input type="number" id="n_oab" class="form-control">
            </div>
            <div id="adv_area" class="mb-3">Área:
                <select name="adv_area">
                    <option value="civel">Cível</option>
                    <option value="penal">Penal</option>
                    <option value="trabalhista">Trabalhista</option>
                    <option value="administrativo">Administrativo</option>
                </select>
            </div>
            <div id="vara" class="mb-3 col-6">
                <label class="form-label" for="nome_vara">Nome da Vara:</label>
                <input type="text" id="nome_vara" class="form-control">
            </div>
            <div id="regiao" class="mb-3">Região:
                <select name="regiao">
                    <option value="RS">RS</option>
                    <option value="SC">SC</option>
                    <option value="PR">PR</option>
                    <option value="SP">SP</option>
                </select>
            </div>
            <div class="mb-3 col-5" id="juiz">
                <label class="form-label" for="nome_juiz">Juiz:</label>
                <input type="text" id="nome_juiz" class="form-control">
            </div>
            <div id="cliente" class="mb-3 col-5">
                <label for="nome_cli" class="form-label">Nome do Cliente:</label>
                <input class="form-control" type="text" id="nome_cli" class="form-control">
            </div>
        <div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <footer> <a href="#header"> Voltar para o topo.</a>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
<php
    $_POST = $processo [n_processo]
    $_POST = $ADV [nome_adv]
    $_POST = $OAB [n_oab]
    $_POST = $Cliente [nome_cli]
    $_POST = $Juiz [nome_juiz]
    $_POST = $Vara [nome_vara]
    $_POST = $Area [adv_area]
    $_POST = $Type_proc [t_processo]
    $_POST = $Regiao [regiao]
    
    $servername = "localhost";
    $username = "seu_usuario";
    $password = "sua_senha"; 
    $dbname = "seu_banco_de_dados";     
    $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn-connect_error) {
        die(Erro na conexão com o banco de dados:  . $conn- connect_error);
    }
       
        $conn-close();

    
     $sql = "insert into Cliente" ($Cliente .$Area. $ADV. $processo) Values (REU.AREA.ADVOGADO.PROCESSO);
     $sql = "insert into ADV"($nome_adv. $OAB .$Area) Values (NOME.OAB.AREA);
     $sql = "insret into processo"($processo .$ADV. $Cliente. $Vara. $Type_proc) Values (IdProcesso.ADVOGADO.CLIENTE.VARA.TIPOPROCESSO);
     $sql = "insert into vara"($Regiao. $Area. $Juiz) Values (REGIAO.AREA.JUIZ);
     $sql = "insert into juiz"($Vara. $Area. $OAB) Values (VARA.AREA.OAB);
?>