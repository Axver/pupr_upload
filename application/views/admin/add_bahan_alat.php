<!-- Modal -->
<div class="modal fade" id="add_mingguan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Bahan Alat</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				Id Lap Perencanaan:
				<input type="text" id="id_mingguan" class="form form-control" placeholder="id_mingguan">
				Id Paket:
				<input type="text" id="id_paket" class="form form-control" placeholder="id_paket" value="<?php echo $this->uri->segment('3'); ?>" disabled>
				Tahun:
				<input type="text" id="tahun" class="form form-control" placeholder="tahun">
				Id Detail Bahan Alat:
				<input type="text" id="tahun" class="form form-control" placeholder="detail">
				Id Jenis Bahan Alat:
				<input type="text" id="tahun" class="form form-control" placeholder="jenis">
				Id Satuan:
				<input type="text" id="tahun" class="form form-control" placeholder="satuan">
				Jumlah:
				<input type="text" id="tahun" class="form form-control" placeholder="jumlah">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" onclick="simpan_detail()">Simpan</button>
			</div>
		</div>
	</div>
</div>

<script>
    function simpan_mingguan()
    {
        let id_mingguan=document.getElementById("id_mingguan").value;
        let id_paket=document.getElementById("id_paket").value;
        let tahun=document.getElementById("tahun").value;



        $.ajax({url: "http://localhost/pupr/detil_paket/add_mingguan/"+id_mingguan+"/"+id_paket+"/"+tahun, success: function(result){
                alert(result);
            }});
        // alert("test");
    }

	function simpan_detail()
	{

	}

</script>
