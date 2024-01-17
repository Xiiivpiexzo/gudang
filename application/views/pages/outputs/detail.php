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
                <div class="card-header bg-primary text-white">
                    Detail Pengeluaran Barang
                </div>
                <div class="card-body">
                    <div class="card-body">
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
                        <!-- <table class="table-responsive mb-3 no-wrap">
                        <tr>
                            <td>Nomor Pengeluaran</td>
                            <td>:</td>
                            <td>
                                <?= $barang_keluar->id_barang_keluar ?>
                            </td>
                        </tr>
                        <tr>
                            <td>NIP Staff</td>
                            <td>:</td>
                            <td>
                                <?= $barang_keluar->id_user ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Staff</td>
                            <td>:</td>
                            <td>
                                <?= $barang_keluar->nama ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Waktu</td>
                            <td>:</td>
                            <td>
                                <?= date('d/m/Y H:i:s', strtotime($barang_keluar->waktu)) ?>
                            </td>
                        </tr>
                    </table>
                    <table class="table table-responsive w-100 d-block d-md-table">
                        <thead>
                            <tr>
                                <th>Barang</th>
                                <th class="text-center">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($list_barang as $barang): ?>
                                <tr>
                                    <td>
                                        <strong>
                                            <?= $barang->nama ?>
                                        </strong>
                                    </td>
                                    <td class="text-center">
                                        <?= $barang->qty ?>
                                        <small>
                                            <?= ucfirst(getUnitName($barang->id_satuan)) ?>
                                        </small>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table> 
                    </div>-->
                        <div class="card-footer bg-white">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-2">
                                    <a href="<?= base_url('outputs') ?>"
                                        class="btn btn-primary btn-rounded text-white"><i class="fas fa-angle-left"></i>
                                        List Pengeluaran barang</a>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-2">
                                    <button class="btn btn-success btn-rounded float-right"
                                        onclick="printDiv('printBukti')">Cetak Bukti <i
                                            class="fas fa-angle-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>