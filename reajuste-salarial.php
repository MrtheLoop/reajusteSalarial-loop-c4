<?php
include 'conexao.php';

$conexao = new Conexao(); 
$conexao->open();

$sql = "SELECT * FROM todos_funcionarios ORDER BY id";

$sql2 = "SELECT * FROM todos_funcionarios WHERE entregas_dia > 50 ORDER BY id;";

$result = pg_query($sql);

echo "Todos os funcionários \n";

while ($row = pg_fetch_row($result)) {
    if(isset($row[0]) && isset($row[1]) && isset($row[2]) && isset($row[3])) {
        $ids[] = $row[0];
        $nomes[] = $row[1];
        $entregas[] = $row[2];
        $salarios[] = $row[3];
    } else {
        echo "Algo está errado";
    }
}

for ($i = 0; $i < count($ids); $i++) {
    echo "ID: " . $ids[$i] . " Nome: " . $nomes[$i] . ", Entregas: " . $entregas[$i] . ", Salário: R$" . $salarios[$i] . "\n";
}

echo "\n Funcionarios que terão o salário aumentado:";

$resultado_entregas = pg_query($sql2);

$ids_aumento = array();
$nomes_aumento = array();
$entregas_aumento = array();
$salarios_aumentos = array();


while ($row = pg_fetch_row($resultado_entregas)) {

    $ids_aumento[] = $row[0];
    $nomes_aumento[] = $row[1];
    $entregas_aumento[] = $row[2];
    $salarios_aumento[] = $row[3]+ ($row[3]/100); 
}

for ($i = 0; $i < count($ids_aumento); $i++) {
    echo "ID: " . $ids_aumento[$i] . " Nome: " . $nomes_aumento[$i] . ", Entregas: " . $entregas_aumento[$i] . ", Salário: R$" . $salarios_aumento[$i] . "\n";
}


$conexao->close();
?>