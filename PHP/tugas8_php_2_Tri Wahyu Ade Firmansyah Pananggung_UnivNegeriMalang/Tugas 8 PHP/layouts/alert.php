<button style="display:none;" type="button" id="alert" class="btn btn-primary" data-bs-toggle="modal"
    data-bs-target="#exampleModal">
    Error
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ERROR URL</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Maaf URL Salah, Silahkan Masukkan URL yang Benar.
            </div>
            <button type="button" class="btn btn-primary" id="tombol" onclick="history.go(-1)">Oke</button>
        </div>
    </div>
</div>
<script>
window.onload = function() {
    document.getElementById("alert").click();
}
</script>