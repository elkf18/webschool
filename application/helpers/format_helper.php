<?php
function format_rupiah($harga)
{
    return "Rp. " . number_format($harga) . ".00";
}

function format_admin($nama)
{
    return "Admin " . $nama;
}
