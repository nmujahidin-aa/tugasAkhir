@extends("users.master")

@section("content")
<table id="products_table" class="display">
    <thead>
        <tr>
            <th>Judul</th>
            <!-- Kategori: Desain, IPA, Teknologi, dll -->
            <th>Kategori</th>
            <!-- Jenis: Karya tulis ilmiah, jurnal, buku, makalah, dll -->
            <th>Jenis</th>
            <th>Penulis</th>
            <th>Tanggal Upload</th>
        </tr>
    </thead>

    <tbody>
        <?php
        include "config.php";
        $products = mysqli_query($conn, "SELECT * FROM products");
        ?>
        <?php while ($user = mysqli_fetch_assoc($products)) { ?>
            <tr>
                <td><?php echo $user['product_name']; ?></td>
                <td><?php echo $user['product_location']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<div class="container">
    <div class="row" style="text-align:center">
        <div class="col">
            <h4>Menemukan tempat wisata lain?</h4>
        </div>
    </div>
    <div class="row " style="text-align:center">
        <div class="col">
            <a href="updateproduct.php" class="btn btn-primary btn-sm" name="editbtn">Edit</a>
            <a href="deleteproduct.php" class="btn btn-danger btn-sm" name="deletebtn">Hapus</a></br>
            <a name="ttable" class="btn btn-primary mt-2" href="logproduct.php">Tambahkan Wisata!</a>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#products_table').DataTable();
    });
</script>
@endsection