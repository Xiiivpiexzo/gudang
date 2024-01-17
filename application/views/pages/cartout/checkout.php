<style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,600);

    *,
    *:before,
    *:after {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background: #fff;
        font-family: 'Open Sans', sans-serif;
    }

    table {
        background: #fff;
        border-radius: 0.25em;
        border-collapse: collapse;
        margin: 1em;
    }

    th {
        border: 1px solid black;
        color: #000;
        font-size: 0.85em;
        font-weight: 600;
        padding: 0.5em 1em;
        text-align: left;
    }

    td {
        border: 1px solid black;
        color: #000;
        font-weight: 400;
        padding: 0.65em 1em;
    }

    .disabled td {
        color: #000;
    }

    tbody tr {
        transition: background 0.25s ease;
    }

    /* tbody tr:hover {
  background: #0056;
} */
</style>
<div class="container-fluid">
    <div class="row" id="printBukti">
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-header bg-success text-white">Pengeluaran Barang Selesai </div>
                <table class="table-responsive mb-3 no-wrap">
                    <thead>
                        <tr>
                            <th>No.
                            <th>Nama/Kelompok Alat
                            <th>Merek
                            <th>Tipe
                            <th>No.Seri
                            <th>Pemohon
                            <th>Tanggal Keluar
                            <th>Kondisi Keluar
                            <th>Mengetahui
                            <th>Tanggal Masuk
                            <th>Kondisi Masuk
                            <th>Mengetahui
                    </thead>
                    <tbody>
                        <?php foreach ($list_barang as $barang): ?>
                            <tr>
                                <td>
                                    <?= $barang_keluar->id_barang_keluar ?>
                                </td>
                                <td>
                                    <?= $barang->nama ?>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <?= date('d/m/Y', strtotime($barang_keluar->waktu)) ?>
                                </td>
                                <td></td>
                                <td></td>
                            <tr>
                            <?php endforeach ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>