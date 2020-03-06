<?php
    include "./vendor/autoload.php";
    use mikehaertl\pdftk\Pdf;

    // Get data
    $pdf = new Pdf('./student_document.pdf');
    $data = $pdf->getData();

    // Get form data fields
    $pdf = new Pdf('./student_document.pdf');
    $data = $pdf->getDataFields();

    // Get data as string
    // echo $data;
    $txt = (string) $data;
    $txt = $data->__toString();

    // Get data as array
    $arr = (array) $data;
    $arr = $data->__toArray();
    var_dump($arr);
    // $field1 = $data[0]['Field1'];
?>