<?php
$array1 = array ("Arman","Bayu","Feri"); echo"array awal
ialah:<br/>";
for ($i=0; $i<count($array1); $i++){
echo"data ke-",$i," : ",$array1[$i],"<br/>";
}
echo "<br/>Setelah ditambahkan \"Herni, Gita & Dewi\"
menggunakan fungsi array_push():<br/>";
array_push($array1,"Herni","Gita","Dewi"); for ($i=0;
$i<count($array1); $i++){
echo"data ke-",$i," : ",$array1[$i],"<br/>";
}
echo "<br/>Setelah bagian awal array dihapus menggunakan fungsi
array_shift():<br/>";
array_shift($array1);
for ($i=0; $i<count($array1); $i++){
echo"data ke-",$i," : ",$array1[$i],"<br/>";
}
echo "<br/>Dan setelah isi array diurutkan menggunakan fungsi
sort():<br/>";
sort($array1);
for ($i=0; $i<count($array1); $i++){
echo"data ke-",$i," : ",$array1[$i],"<br/>";
}
?>