<?php 



/*
if (isset($_FILES['croppedImage'])) {
    $uploads_dir = 'uploads';

    $tmp_name = $_FILES['croppedImage']['tmp_name'];
    $unique_name = uniqid() . '.jpg';
    $save_path = "$uploads_dir/$unique_name";

    // Crea una imagen a partir del archivo subido
    $sourceImage = imagecreatefromjpeg($tmp_name);

    // Obtiene las dimensiones originales
    list($sourceWidth, $sourceHeight) = getimagesize($tmp_name);

    // Calcula las nuevas dimensiones para el 90%
    $newWidth = $sourceWidth * 0.9;
    $newHeight = $sourceHeight * 0.9;

    // Crea un lienzo del tamaño original
    $canvas = imagecreatetruecolor($sourceWidth, $sourceHeight);

    // Establece un color de fondo blanco (puedes cambiar esto si lo deseas)
    $white = imagecolorallocate($canvas, 255, 255, 255);
    imagefill($canvas, 0, 0, $white);

    // Copia y reescala la imagen original al nuevo lienzo en top 0 y left 0
    imagecopyresampled($canvas, $sourceImage, 0, 0, 0, 0, $newWidth, $newHeight, $sourceWidth, $sourceHeight);
    imagedestroy($sourceImage);
    $sourceImage = $canvas;

    // Continúa con la parte de la marca de agua...

    // Descarga y crea una imagen a partir de la marca de agua
    $watermarkData = file_get_contents('http://localhost/proyectos/firmas/img/loop2.gif');
    $watermarkPath = tempnam(sys_get_temp_dir(), 'watermark');
    file_put_contents($watermarkPath, $watermarkData);
    $watermarkImage = imagecreatefromgif($watermarkPath);

    list($watermarkWidth, $watermarkHeight) = getimagesize($watermarkPath);

    // Define la posición de la marca de agua.
    $watermarkPosX = ($sourceWidth - $watermarkWidth);
    $watermarkPosY = ($sourceHeight - $watermarkHeight);

    imagecopy($sourceImage, $watermarkImage, $watermarkPosX, $watermarkPosY, 0, 0, $watermarkWidth, $watermarkHeight);
    imagejpeg($sourceImage, $save_path, 100);

    // Libera recursos
    imagedestroy($sourceImage);
    imagedestroy($watermarkImage);
    unlink($watermarkPath);

    echo json_encode(['status' => 'success', 'path' => "crop/js/".$save_path]);

} else {
    echo json_encode(['status' => 'error', 'message' => "No se recibió ninguna imagen."]);
}


*/





if (!isset($_FILES['croppedImage'])) {
    echo json_encode(['status' => 'error', 'message' => "No se recibió ninguna imagen."]);
    exit;
}

$tmp_name = $_FILES['croppedImage']['tmp_name'];
$unique_name = uniqid() . '.gif';

if (empty($unique_name)) {
    echo json_encode(['status' => 'error', 'message' => 'El nombre de archivo generado está vacío.']);
    exit;
}


$save_path = __DIR__ . '/uploads/' . $unique_name;




if (!is_uploaded_file($tmp_name)) {
    echo json_encode(['status' => 'error', 'message' => 'El archivo no fue subido correctamente.']);
    exit;
}

try {
    
    $original = new Imagick();
    $original->readImage($tmp_name);

    if (!$original) {
        echo json_encode(['status' => 'error', 'message' => 'Error al cargar la imagen original.']);
        exit;
    }

    $originalWidth = $original->getImageWidth();
    $originalHeight = $original->getImageHeight();

    if ($originalWidth > 150 || $originalHeight > 150) {
        $original->resizeImage(150, 150, Imagick::FILTER_LANCZOS, 1, true);
        $originalWidth = $original->getImageWidth();
        $originalHeight = $original->getImageHeight();
    }

    $newWidth = $originalWidth * 0.9;
    $newHeight = $originalHeight * 0.9;
    $original->resizeImage($newWidth, $newHeight, Imagick::FILTER_LANCZOS, 1);

    $background = new Imagick();
    $background->newImage($originalWidth, $originalHeight, 'white');
    $background->compositeImage($original, Imagick::COMPOSITE_OVER, 0, 0);

    if (!$background) {
        echo json_encode(['status' => 'error', 'message' => 'Error al crear el fondo blanco.']);
        exit;
    }

    
    $watermarkImage = new Imagick( __DIR__ . '\uploads\loop2.gif');

    if (!$watermarkImage) {
        echo json_encode(['status' => 'error', 'message' => 'Error al cargar la marca de agua.']);
        exit;
    }

    $watermarkImage->resizeImage(20, 0, Imagick::FILTER_LANCZOS, 1);

    $newGIF = new Imagick();
    $watermark_frames = $watermarkImage->getNumberImages();

    for ($i = 0; $i < $watermark_frames; $i++) {
        $watermarkImage->setIteratorIndex($i);
        $frame = $watermarkImage->getImage();

        if (!$frame) {
            echo json_encode(['status' => 'error', 'message' => 'Error al obtener un fotograma de la marca de agua.']);
            exit;
        }

        $combined = clone $background;
        $combined->compositeImage($frame, Imagick::COMPOSITE_OVER, $originalWidth - $frame->getImageWidth(), $originalHeight - $frame->getImageHeight());

        if (!$combined) {
            echo json_encode(['status' => 'error', 'message' => 'Error al combinar fondo con marca de agua.']);
            exit;
        }

        $newGIF->addImage($combined);
        $newGIF->setImageDelay($frame->getImageDelay());
    }

    $newGIF->writeImages("$save_path", true);

    if (!file_exists($save_path)) {
        echo json_encode(['status' => 'error', 'message' => 'Error al guardar la imagen en el servidor.']);
        exit;
    }

    echo json_encode(['status' => 'success', 'fileName' => $unique_name]);
    
} catch (Exception $e) {
    echo json_encode(['status' => 'error', 'message' => 'Excepción capturada: ' . $e->getMessage()]);
    exit;
}

?>