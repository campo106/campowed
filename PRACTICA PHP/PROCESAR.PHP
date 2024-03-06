<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["Nombre"];
    $fecha = $_POST["Fecha"];
    $ciudad = $_POST["Ciudad"];
    $aplicarRetencion = $_POST["aplicarRetencion"];
    $valorHora = $_POST["ValorH"];
    $horasTrabajadas = $_POST["Horas"];

    // Verificar si se aplicará retención
    $retencion = ($aplicarRetencion == 1) ? true : false;

    // Calcular horas extras y total ganado por 40 horas
    $horasExtras = max(0, $horasTrabajadas - 40);
    $porcentajeRecargo = 0.30;
    $valorHorasExtras = $valorHora * (1 + $porcentajeRecargo);
    $recargoHorasExtras = $horasExtras * $valorHorasExtras;
    $totalGanado40Horas = 40 * $valorHora;

    // Calcular retención del 8% si está contratado por el SRI
    $porcentajeRetencion = 0.08;
    $retencionImpuesto = ($retencion) ? ($totalGanado40Horas + $recargoHorasExtras) * $porcentajeRetencion : 0;

    // Calcular el total final ganado por el empleado después de la retención
    $totalFinalGanado = $totalGanado40Horas + $recargoHorasExtras - $retencionImpuesto;

    // Imprimir resultados o realizar acciones adicionales según tus necesidades
    echo "Nombre: $nombre<br>";
    echo "Fecha: $fecha<br>";
    echo "Ciudad: $ciudad<br>";
    echo "Valor por Hora: $valorHora<br>";
    echo "Horas Trabajadas: $horasTrabajadas<br>";
    echo "Retención: " . ($retencion ? "Sí" : "No") . "<br>";
    echo "Horas Extras: $horasExtras<br>";
    echo "Valor Horas Extras: $valorHorasExtras<br>";
    echo "Recargo Horas Extras: $recargoHorasExtras<br>";
    echo "Total Ganado por 40 Horas: $totalGanado40Horas<br>";
    echo "Retención Impuesto: $retencionImpuesto<br>";
    echo "Total Final Ganado: $totalFinalGanado<br>";
} else {
    // Si el formulario no ha sido enviado, redirigir o realizar otras acciones según tus necesidades
    echo "Error: El formulario no ha sido enviado.";
}
?>
