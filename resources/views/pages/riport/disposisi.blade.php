<!DOCTYPE html>
<head>
    <title>Contoh Surat Pernyataan</title>
    <meta charset="utf-8">
    <style>
        #judul{
            text-align:center;
        }

        #halaman{
            width: auto; 
            height: auto; 
            position: absolute; 
            border: 1px solid; 
            padding-top: 30px; 
            padding-left: 30px; 
            padding-right: 30px; 
            padding-bottom: 80px;
        }

    </style>

</head>

<body>
    {{$disposisi}}
    <div id=halaman>
        <h3 id=judul>SURAT PERNYATAAN</h3>

        <p>{{$disposisi->title}}</p>

        <table>
            <tr>
                <td style="width: 30%;">Nama</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">Arbrian Abdul Jamal</td>
            </tr>
            <tr>
                <td style="width: 30%;">Tempat, tanggal lahir</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">Grobogan, 3 Maret 1993</td>
            </tr>
            <tr>
                <td style="width: 30%; vertical-align: top;">Alamat</td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;">Kampung Sambak RT 01 RW 09 Kelurahan Danyang 
                    Kecamatan Purwodadi Kabupaten Grobogan</td>
            </tr>
            <tr>
                <td style="width: 30%;">Pekerjaan</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">Guru</td>
            </tr>
        </table>

        <p>menyatakan dengan sebenar-benarnya akan bersungguh-sungguh belajar dan bekerja.</p>

        <div style="width: 50%; text-align: left; float: right;">Purwodadi, 20 Januari 2020</div><br>
        <div style="width: 50%; text-align: left; float: right;">Yang bertanda tangan,</div><br><br><br><br><br>
        <div style="width: 50%; text-align: left; float: right;">Arbrian Abdul Jamal</div>

    </div>
</body>

</html>