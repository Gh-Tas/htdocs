<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

 $name =$_POST["nome"];
 $email =$_POST["email"];
 $phone = $_POST["telefone"];
 $street =$_POST['idrua'];
 $complement =$_POST['idcomplemento'];
 $city =$_POST['idcidade'];
 $stat =$_POST['idestado'];
 $cep =$_POST['idcep'];


    echo "Nome: $name";
    echo "Email: $email";
    echo "Telefone: $phone";
    echo "Rua: $street";
    echo "Complemento: $complement";
    echo "Cidade: $city";
    echo "Estado: $stat";
    echo "Cep: $cep";
}
?>