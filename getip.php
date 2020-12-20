<?PHP
if(!isSet($_POST["host"]) || $_POST["host"] === ""){
  echo("Brak danych w formularzu!");
}
else{
  $ip = gethostbyname($_POST["host"]);
  if($ip != $_POST["host"]){
    echo("Adres IP komputera ".$_POST["host"]." to $ip");
  }
  else{
    echo("Nie można uzyskać adresu IP komputera ".$_POST["host"]);
  }
}
