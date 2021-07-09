<html>

<head>

    <meta http-equiv="refresh" content="0; url='index.html'">
</head>

<body> <?php include_once "config.php";

        $pizz = $_POST["nr_pizza"];
        $nom = $_POST["nome"];
        $tel = $_POST["telefone"];
        $hamb = $_POST["nr_hamburguer"];
        $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
        mysqli_select_db($conn, $dbname);
        $sql = "INSERT INTO tbpedidos (`nome`,`telefone`,`nr_pizza`,`nr_hamburguer`) VALUES ('$nom','$tel','$pizz','$hamb')";
        if (mysqli_query($conn, $sql)) {

            echo "<script language='javascript'> alert('Pedido recebido! Direcionando para pagina de pedidos');</script>";
        } else {
            echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
        ?> </body>

</html>