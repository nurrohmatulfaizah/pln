<!DOCTYPE html>
<html>

<head>
    <!-- <title>contoh surat pengunguman</title> -->
    <style type="text/css">
        table {
            border-style: double;
            border-width: 3px;
            border-color: white;
        }

        table tr .text2 {
            text-align: right;
            font-size: 13px;
        }

        table tr .text {
            text-align: center;
            font-size: 13px;
        }

        table tr td {
            font-size: 13px;
        }

        @page {
            size: auto;
            margin: 0;
        }
    </style>
</head>

<body>
    <br><br><br>
    <center>
        <table width="625">
            <tr>
                <td><img src="<?= base_url('img/logo.png') ?>" width="70" height="90"></td>
                <td>
                    <center>
                        <font size="4">PLN<br>NUR ROHMATUL FAIZAH</font><br>

                        <font size="2">Alamat : Jl. Raya Taman No. 48-D Sidoarjo<br>Nur Rohmatul Faizah<br>Email : nurrohmatulfaizah@gmail.com</font><br>

                    </center>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                    <br>
                    <center>
                        <font size="4"><b>BIODATA INFORMASI PELANGGAN</b></font>
                    </center>
                </td>
            </tr>

        </table>
        <br>
        <table width="625">
            <tr>
                <td>
                    <font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan di bawah ini PLN Nur Rohmatul Faizah, dengan ini menerangkan bahwa :</font>
                </td>
            </tr>
        </table>
        <br>
        </table>
        <table width="555">
            <tr class="text2">
                <td width="150">Nama Pelanggan</td>
                <td>: <?= $user->nama; ?></td>
            </tr>
            <tr>
                <td width="150">Email</td>
                <td>: <?= $user->email; ?></td>
            </tr>
            <tr>
                <td width="150">Alamat</td>
                <td>: <?= $user->alamat; ?></td>
            </tr>
            <tr>
                <td width="150">No. Telp</td>
                <td>: <?= $user->no_telp; ?></td>
            </tr>
            <tr>
                <td width="150">Rayon</td>
                <td>: <?= $user->rayon; ?></td>
            </tr>
            <tr>
                <td width="150">Golongan</td>
                <td>: <?= $user->golongan ?></td>
            </tr>
            <tr>
                <td width="150">Tarif / Per Kwh</td>
                <td>: <?= $user->tarif; ?></td>
            </tr>
            <tr>
                <td width="150">Daya</td>
                <td>: <?= $user->daya; ?></td>
            </tr>
        </table>
        <br>
        <table width="625">
            <tr>
                <td>
                    <font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Orang tersebut diatas adalah benar – benar pelanggan PLN Nur Rohmatul Faizah
                        <br><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian biodata informasi pelanggan ini dibuat agar dapat dipergunakan sebagaimana mestinya.
                    </font>
                </td>
            </tr>
        </table>
        <br>
        <table width="625">
            <tr>
                <td width="430"><br><br><br><br></td>
                <?php
                $now = date("Y-m-d");

                ?>
                <td>Kenteng, <?php echo date_indo($now); ?><br>Kepala Kantor PLN<br><br><br><br>Nur Rohmatul Faizah</td>
            </tr>
        </table>
    </center>
    <script>
        window.print();
    </script>
</body>

</html>