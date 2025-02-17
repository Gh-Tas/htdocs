<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

 $name =$_POST["nome"];
 $email =$_POST["email"];
 $phone = $_POST["telefone"];
 $street =$_POST["rua"];
 $complement =$_POST["complemento"];
 $city =$_POST["cidade"];
 $stat =$_POST["estado"];
 $cep =$_POST["cep"];


    echo "Nome: $name";
    echo "Email: $email";
    echo "Telefone: $phone";
    echo "Rua: $street";
    echo "Complemento: $complement";
    echo "Cidade : $city";
    echo "Estado: $stat";
    echo "Cep : $cep";
}
?>