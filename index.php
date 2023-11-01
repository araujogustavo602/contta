<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="">
    
        <label for="nome">numero</label>
        <input type="text" nome="numero">
        <br>
        <label for="nome">agência</label>
        <input type="text"nome="agência">
        <br>        
        <label for="nome">proprietário</label>
        <input type="text" name="proprietário">
        <br>        
        <label for="nome">saldo</label>
        <input type="text" name="saldo">
        <br>        
        <label for="nome"> limite</label>
        <input type="text" name=" limite">
        <br>
       
        <input type="submit" value="Salvar">
    </form>

    <?php
        include("conta.php");

        // $dog = new Cachorro(); //instanciando um objeto da classe Cachorro
        // $dog->create("Spike", "Vira Lata", "Caramelo", 5, 6, "Diogo");

        // $dog->latir();

        // $dog2 = new Cachorro();
        // $dog2->create("Tobias", "Shiba Inu", "Amarelo", 3, 1, "Moises");

        // $dog2->latir();
        
        // $dog->rosnar("Diogo");
        // $dog->rosnar("Luiz");

        // $dog2->rosnar("Moises");
        // $dog2->rosnar("Julia");

        if (isset($_GET["nome"]))
        {
            $dog3 = new conta();
            
            $dog3->create($_GET["numero"], $_GET["agência"], $_GET["proprietário"], 
                            $_GET["saldo"], $_GET["limite"]);

            $dog3->latir();

            $dog3->set_Nome("");
            $dog3->latir();https://github.com/araujogustavo602/contta.git
            
            echo "<ul><li>" . $dog3->get_Raca() . "</li></ul>";
        }

    ?>
    
</body>
</html>