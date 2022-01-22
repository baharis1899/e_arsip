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

    <div id=halaman>
        
        
        <h1>SMA Negeri 1 Petang </h1>
        <h3 id=judul>SURAT Disposisi </h3>

        

        <table>
            <tr>
                <td style="width: 30%;">Prihal</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{$disposisi->title}}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Isi Disposisi</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{$disposisi->description}}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Di tujukan pada</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{$disposisi->letter_maker}}</td>
            </tr>
        </table>

        <p>Dengan dipertanggung jawabkan Kepada di bawah sebagai tandatangan dan waktu pembuatans</p>

        <div style="width: 50%; text-align: left; float: right;">{{$disposisi->created_at}}</div><br>
        <div style="width: 50%; text-align: left; float: right;">Yang bertanda tangan,</div><br><br><br><br><br>
        <div style="width: 50%; text-align: left; float: right;">{{Auth::user()->name}}</div>

    </div>
</body>

</html>