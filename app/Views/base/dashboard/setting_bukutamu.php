<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
        <div>
        
        <a href="<?= SITE_BUKUTAMU ?>/<?= $order[0]->domain ?>" class="btn btn-primary btn-sm">Lihat Website</a>
        
        </div>
    </div> 
    
    <?php 
    clearstatcache();
        $kunci = $data[0]->kunci;
        $slider1 = "/assets/users/".$kunci."/slider1.png";
        $slider2 = "/assets/users/".$kunci."/slider2.png";
        $slider3 = "/assets/users/".$kunci."/slider3.png";

    ?>

    <div class="row mb-3">
        <!--<div class="col-xl-6 col-lg-6 mb-4">-->
        <!--    <div class="card mb-4">-->
        <!--        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">-->
        <!--            <h6 class="m-0 font-weight-bold text-primary">Data Mempelai Wanita</h6>-->
        <!--        </div>-->
        <!--        <div class="card-body">-->
                    <!-- CONTENT DISINI -->
                   
        <!--            <div class="col mt-2">-->
        <!--                <label>Nama Acara</label>-->
        <!--                <input id="nama_lengkap_wanita" type="text" class="form-control" placeholder="Contoh : Fatimah Az Zahra" value="<?= $mempelai[0]->nama_wanita ?>" required>-->
        <!--            </div>-->

        <!--            <div class="col mt-2">-->
        <!--                <label>Tanggal Acara</label>-->
        <!--                <input id="nama_panggilan_wanita" type="text" class="form-control" placeholder="Contoh : Fatimah" value="<?=  $mempelai[0]->nama_panggilan_wanita ?>" required>-->
        <!--            </div>-->

                    
        <!--            <div class="col mt-3">-->
        <!--                <button class="btn btn-primary" data-toggle="modal" data-target="#modalWanita">Simpan</button>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        
        <div class="col-xl-12 col-lg-12 mb-4">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Slider Halaman Buku Tamu</h6>
                </div>
                
                <div class="card-body">
                    <!-- CONTENT DISINI -->
                    <div class="upload-area-bg" style="text-align: center;">
                        <div class="col">
                            <div class="row">
                                <div class="col-12 col-md-8 col-lg-8 d-flex align-items-center justify-content-center">
                                    <div class="upload-area" style="height: 100%;padding: 5px 5px;">
                                    <img src="<?php echo base_url() ?><?= $slider1 ?>" id="img-slider-1" style='border-radius: 5px;height: 150px;width: 300px;'>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-lg-4 d-flex align-items-center justify-content-center mt-3">
                                    <div class="btn btn-primary">
                                        <input type="file" class="file-upload" id="slider1"  name="profile_picture" accept="image/*"> Upload Foto
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>
                    <hr>
                    <div class="upload-area-bg" style="text-align: center;">
                        <div class="col">
                            <div class="row">
                                <div class="col-12 col-md-8 col-lg-8 d-flex align-items-center justify-content-center">
                                    <div class="upload-area" style="height: 100%;padding: 5px 5px;">
                                    <img src="<?php echo base_url() ?><?= $slider2 ?>" id="img-slider-2" style='border-radius: 5px;height: 130px;width: 300px;'>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-lg-4 d-flex align-items-center justify-content-center mt-3">
                                    <div class="btn btn-primary">
                                        <input type="file" class="file-upload" id="slider2"  name="profile_picture" accept="image/*"> Upload Foto
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>
                    <hr>
                    <div class="upload-area-bg" style="text-align: center;">
                        <div class="col">
                            <div class="row">
                                <div class="col-12 col-md-8 col-lg-8 d-flex align-items-center justify-content-center">
                                    <div class="upload-area" style="height: 100%;padding: 5px 5px;">
                                    <img src="<?php echo base_url() ?><?= $slider3 ?>" id="img-slider-3" style='border-radius: 5px;height: 150px;width: 300px;'>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-lg-4 d-flex align-items-center justify-content-center mt-3">
                                    <div class="btn btn-primary">
                                        <input type="file" class="file-upload" id="slider3"  name="profile_picture" accept="image/*"> Upload Foto
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>

                    <hr>
                </div>
            </div>
        </div>

    </div>
    <!--Row-->
</div>
<script src="<?php echo base_url() ?>/assets/base/js/croppie.min.js"></script>
<script>

$(document).ready(function () {
         /** croppie shareurcodes.com **/
        var croppie = null;
        var el = document.getElementById('resizer2');

        $.base64ImageToBlob = function(str) {
            /** extract content type and base64 payload from original string **/
            var pos = str.indexOf(';base64,');
            var type = str.substring(5, pos);
            var b64 = str.substr(pos + 8);
        
            /* decode base64 */
            var imageContent = atob(b64);
        
            /* create an ArrayBuffer and a view (as unsigned 8-bit) */
            var buffer = new ArrayBuffer(imageContent.length);
            var view = new Uint8Array(buffer);
        
            /* fill the view, using the decoded base64 */
            for (var n = 0; n < imageContent.length; n++) {
            view[n] = imageContent.charCodeAt(n);
            }
        
            /* convert ArrayBuffer to Blob */
            var blob = new Blob([buffer], { type: type });
        
            return blob;
        }

        $.getImage = function(input, croppie) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {  
                    croppie.bind({
                        url: e.target.result,
                    });
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        var fotonyasiapa = '';
        $(".file-upload").on("change", function(event) {
            $("#myModal2").modal();
            fotonyasiapa = $(this).attr("id");
            console.log("foto_"+fotonyasiapa);
            /* Initailize croppie instance and assign it to global variable */
            croppie = new Croppie(el, {
                    viewport: {
                        width: 300,
                        height: 130,
                        type: 'square'
                    },
                    boundary: {
                        width: 350,
                        height: 180
                    },
                    
                    enableOrientation: true
                });
            $.getImage(event.target, croppie); 
        });

        $("#upload2").on("click", function() {
            croppie.result('base64').then(function(base64) {
                $("#myModal2").modal("hide"); 
                $("#img-slider").attr("src","/images/ajax-loader.gif");

                var url = "<?php echo base_url('user/update_slider_bukutamu') ?>";
                var formData = new FormData();
                formData.append("foto_"+fotonyasiapa, $.base64ImageToBlob(base64));
                formData.append("kunci", "<?= $kunci ?>");


                $.ajax({
                    type: 'POST',
                    url: url,
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(data) {
                    console.log(data);
                        if (data == "uploadedslider1") {
                            $("#img-slider-1").attr("src", base64); 
                        } else if(data == "uploadedslider2"){
                            $("#img-slider-2").attr("src", base64); 
                        } else if(data == "uploadedslider3"){
                            $("#img-slider-3").attr("src", base64); 
                        } else {
                            $("#img-slider").attr("src","/images/icon-cam.png"); 
                            console.log(data['img-slider']);
                        }
                    },
                    error: function(error) {
                        console.log(error);
                        $("#img-slider").attr("src","/images/icon-cam.png"); 
                    }
                });
            });
        });

        /* To Rotate Image Left or Right */
        $(".rotate").on("click", function() {
            croppie.rotate(parseInt($(this).data('deg'))); 
        });

        $('#myModal2').on('hidden.bs.modal', function (e) {
            /* This function will call immediately after model close */
            /* To ensure that old croppie instance is destroyed on every model close */
            setTimeout(function() { croppie.destroy(); }, 100);
        });

});


    $('#simpanWanita').on('click', function(event) {

        var datanyaSiapa = 'wanita';
        var nama = $('#nama_lengkap_wanita').val();
        var nama_panggilan = $('#nama_panggilan_wanita').val();
        var nama_ayah = $('#nama_ayah_wanita').val();
        var nama_ibu = $('#nama_ibu_wanita').val();
        console.log(nama);
        $.ajax({
            url : "<?= base_url('user/update_mempelai') ?>",
            method : "POST",
            data : {nama: nama,nama_panggilan: nama_panggilan, nama_ayah: nama_ayah, nama_ibu: nama_ibu, datanyaSiapa: datanyaSiapa},
            async : true,
            dataType : 'html',
            success: function($hasil){
                if($hasil == 'sukses'){
                    location.reload();
                }
            }
        });

    });

    $('#simpanPria').on('click', function(event) {

        var datanyaSiapa = 'pria';
        var nama = $('#nama_lengkap_pria').val();
        var nama_panggilan = $('#nama_panggilan_pria').val();
        var nama_ayah = $('#nama_ayah_pria').val();
        var nama_ibu = $('#nama_ibu_pria').val();

        $.ajax({
            url : "<?= base_url('user/update_mempelai') ?>",
            method : "POST",
            data : {nama: nama,nama_panggilan: nama_panggilan, nama_ayah: nama_ayah, nama_ibu: nama_ibu, datanyaSiapa: datanyaSiapa},
            async : true,
            dataType : 'html',
            success: function($hasil){
                if($hasil == 'sukses'){
                    location.reload();
                }
            }
        });

    });

</script>
