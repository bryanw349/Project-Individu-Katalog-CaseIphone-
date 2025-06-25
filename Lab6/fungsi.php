<?php
function card($kolom, $idx_gbr="gambar", $id="nim"): void {
    $nomor = 0;
    $kunci = $kolom[$id]; // Kuncinya ada di array dengan label apa
    $rowspan = count($kolom);
    echo "<table border='1'>";
    foreach ($kolom as $k => $v) {
        if($nomor%2== 0)
        $warna = "#FFDDDD";
        else
        $warna = "#FFFFDD";
        if ($nomor == 0) {
            echo "<tr><td rowspan='$rowspan'>
                    <img src=\"" . $kolom[$idx_gbr]. "\" height=\"150\" width=\"100\"><br>
                    <table>
                        <tr>
                            <td>
                                <form action='form_ubah_mhs.php'>
                                    <input type='hidden' value='$kunci'>
                                    <input type='submit' value='Ubah'>
                                </form>
                            </td>
                            <td>
                                <form action='hapus_mhs.php'>
                                    <input type='hidden' value='$kunci'>
                                    <input type='submit' value='Hapus'>
                                </form>
                            </td>
                        </tr>
                    </table>
                </td><td>" . ucwords($k) . "</td><td with=\"300\">$v</td></tr>";
        } else {
            echo "<tr><td>" . ucwords($k) . "</td><td>$v</td></tr>";
        }
        $nomor++;
    }
    echo "</table>";
}
