<?php

function VerificaTipoDoArquivo($arquivo)
{
    if (explode(".", $arquivo)[1] == "gif") {
        echo "<a target='_blank' href='uploads/".$arquivo."'><img width='50px' src='uploads/img.png'> $arquivo</a><br>";
    }
    if (explode(".", $arquivo)[1] == "pdf") {
        echo "<a target='_blank' href='uploads/".$arquivo."'><img width='50px' src='uploads/pdf.png'> $arquivo</a><br>";
    }
    if (explode(".", $arquivo)[1] == "html") {
        echo "<a target='_blank' href='uploads/".$arquivo."'><img width='50px' src='uploads/html.png'> $arquivo</a><br>";
    }
    if (explode(".", $arquivo)[1] == "mp4") {
        echo "<a target='_blank' href='uploads/".$arquivo."'><img width='50px' src='uploads/video.png'> $arquivo</a><br>";
    }

    if (explode(".", $arquivo)[1] == "odt" || explode(".", $arquivo)[1] == "doc" || explode(".", $arquivo)[1] == "docx") {
        echo "<a target='_blank' href='uploads/".$arquivo."'><img width='50px' src='uploads/docx.png'> $arquivo</a><br>";
    }
}
