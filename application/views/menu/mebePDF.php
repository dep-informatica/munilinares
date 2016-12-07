<!DOCTYPE html>
<?php foreach ($reporte as $fila): ?>


    <script type="text/javascript">

        PDFJS.workerSrc = "<?php echo base_url(); ?>../pdf/pdf.worker.js";
        var url = "<?php echo base_url(); ?>../hechosmunicipales/pdf/<?= $fila->ruta_pdf; ?>";
            var cantidad =<?= $fila->cantidad_hojas; ?>;
            for (var i = 1; i <= cantidad; i++) {

                elemento1 = document.createElement('canvas');
                elemento1.id = 'pagina' + i;
                elemento2 = document.getElementById('flipbook');
                elemento2.appendChild(elemento1);

                pdfpag(i);
            }

            function pdfpag(x) {
                PDFJS.getDocument(url)
                        .then(function (pdf) {

                            return pdf.getPage(x);

                        })
                        .then(function (page) {
                            // Set scale (zoom) level
                            var scale = 2;

                            // Get viewport (dimensions)
                            var viewport = page.getViewport(scale);

                            // Get canvas#the-canvas
                            var canvas = document.getElementById('pagina' + x);

                            // Fetch canvas' 2d context
                            var context = canvas.getContext('2d');

                            // Set dimensions to Canvas
                            canvas.height = viewport.height;
                            canvas.width = viewport.width;

                            // Prepare object needed by render method
                            var renderContext = {
                                canvasContext: context,
                                viewport: viewport
                            };

                            // Render PDF page
                            page.render(renderContext);
                        });


            }

    </script>

<?php endforeach; ?>


<div id="flipbook">    

</div>



<script type="text/javascript">
    $("#flipbook").turn({
        width: 1200,
        height: 950,
        autoCenter: true
    });
</script>


