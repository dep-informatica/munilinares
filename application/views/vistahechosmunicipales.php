<h2>Ebook Hechos Municipales</h2>

<div>
    <?php if ($cantidad == 0): ?>
        <label>No existen Libros Ebook para Mostrar</label>
        <?else:?>

        <?php foreach ($reporte as $fila): ?>

            <div class="post tarjeta">
                <div class="pic">
                    <a href="#">
                        <img id="paginavista" width="180px" height="200px" src="<?php echo base_url(); ?>../hechosmunicipales/portadas/<?= $fila->ruta_img; ?>">
                    </a>
                </div>
                <div class="texto">
                    <span style=" padding-left:15px" class="meta"> Fecha Publicacion: <?= $fila->fecha_publicacion; ?> </span>
                    <h4 style=" padding-left:15px" class="title"><a href="#"> <?= $fila->mencion; ?> </a></h4>
                </div>
                <div class="clearfix"></div>
            </div>
            <div style="padding: 20px"></div>
        <?php endforeach; ?>

    <?php endif; ?>
</div>

<div id="myModal" class="modal">
    <span class="close">X</span>
    <!--Modal content--> 
    <div class="modal-content">
        <div id="verPDF"></div>
    </div>
</div>
<style>
    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.8); /* Black w/ opacity */
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #000000;
        margin: 15% auto; /* 15% from the top and centered */
        padding: 20px;
        border: 1px solid #888;
        width: 90%; /* Could be more or less, depending on screen size */
    }

    /* The Close Button */
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

</style>


<script type="text/javascript">
// Get the modal
    var modal = document.getElementById('myModal');

// Get the button that opens the modal
    var btn = document.getElementById("paginavista");

// Get the <span> element that closes the modal
//    var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
    btn.onclick = function () {
        vistamebePDF();
        modal.style.display = "block";
    }

// When the user clicks on <span> (x), close the modal
//    span.onclick = function () {
//        modal.style.display = "none";
//    }

// When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>