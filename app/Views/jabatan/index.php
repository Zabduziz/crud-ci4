<?= $this->extend('layouts/main') ;?>

<?= $this->section('content') ;?>
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <div class="d-flex justify-content-between border-bottom py-2">
        <h3 class="pb-2 mb-0">Data Jabatan</h3>
    </div>
    <div class="pt-3">
        <table class="table table-bordered table-stripep">
            <tr>
                <th>No.</th>
                <th>Nama Jabatan</th>
                <th>Deskripsi</th>
            </tr>
        </table>
    </div>
</div>
<?= $this->endsection() ;?>