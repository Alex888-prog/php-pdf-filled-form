<?php
    include "./vendor/autoload.php";

    use mikehaertl\pdftk\Pdf;

    // Fill form with data array
    $pdf = new Pdf('./student_document.pdf');
    $pdf->fillForm([
        'student_name' => 'Tyler Durdon',
        'student_main_id'=>'AA',
        'sub_id' => 'BB-00',
        'en_title'=>'Main Document'
    ])
    ->needAppearances()
    ->saveAs('filled.pdf');

    //execute the pdf file.
    $file = 'filled.pdf'; 
    $filename = 'filled.pdf'; 

    // Header content type 
    header('Content-type: application/pdf'); 

    header('Content-Disposition: inline; filename="' . $filename . '"'); 

    header('Content-Transfer-Encoding: binary'); 

    header('Accept-Ranges: bytes'); 

    // Read the file 
    @readfile($file); 
    

    // Check for errors
    if (!$pdf->saveAs('filled.pdf')) {
        $error = $pdf->getError();
    }
?>