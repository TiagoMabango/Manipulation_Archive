<!-- 

    Data_15/12/2020
    We are PHP
    Dev Tiago Mabango

    LinkDin Tiago Mabango
    Facebook Tiago Mabango
    Intagram @tiagomabango
-->

<?php
//verificando se o arquivo existe
$file = __DIR__."/file.php";
if(file_exists($file) && is_file($file)){
    echo "<p>Existe!</p>";
}else{
    echo "<p>Não existe!</p>";
}

echo "<p style='color:green; font-size:20px;'>" ." leitura e gravação <span style='color:#088'> de arquivo </span>" ."</p>";

if(!file_exists($file) && !is_file($file)){

    $fileOpen = fopen($file,"w");
    fwrite($fileOpen," We are PHP".PHP_EOL);
    fwrite($fileOpen," #BoraProgramar".PHP_EOL);
    fwrite($fileOpen," Vamoooooo".PHP_EOL);
    fwrite($fileOpen,"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum blanditiis aut quos repudiandae doloribus quae optio ullam laboriosam laudantium, quam commodi, deserunt aperiam praesentium consectetur ad omnis impedit quaerat illo? ".PHP_EOL);
    fclose($fileOpen);

}else{
    
    var_dump(
        file($file),
        pathinfo($file)
    );
}

echo  "<br>";
echo  "<br>";
echo file($file)[3];

$open = fopen($file,"r");
while(!feof($open)){ 
    echo "<p>". fgets($open) ."</p>";    
}

fclose($open);

echo "<p style='color:green; font-size:20px;'>" ."Usando  <span style='color:#088'> get, put content </span>" ."</p>";

$getsContents = __DIR__."/texte2.txt";
if(file_exists($getsContents) && is_file($getsContents)){
    echo file_get_contents($getsContents);
}else{
    $data = "<article><h1>We are PHP</h1><p>#BoraProgramar</p> <b>tiagomabango@gmail.como</article>";
    echo file_put_contents($getsContents,$data);
    echo file_get_contents($getsContents);
}
// unlink eliminar arquivos
//unlink($getsContents);
//unlink($file);
?>