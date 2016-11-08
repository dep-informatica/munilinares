<!DOCTYPE html>

<script src="<?php echo base_url(); ?>../pdf/pdf.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>../pdf/turn.js" type="text/javascript"></script>


<script type="text/javascript">



//    PDFJS.workerSrc = "<?php echo base_url(); ?>../pdf/pdf.worker.js";
//// URL of PDF document
//    var url = "<?php echo base_url(); ?>../pdf/025_enero2016.pdf";
//// Asynchronous download PDF
//
//
//
//    PDFJS.getDocument(url)
//            .then(function (pdf) {
//         
//                return pdf.getPage(i);
//                    })
//            .then(function (page) {
//                // Set scale (zoom) level
//                var scale = 1.5;
//                // Get viewport (dimensions)
//                var viewport = page.getViewport(scale);
//                // Get canvas#the-canvas
//                var canvas = document.getElementById('the-canvas');
//                // Fetch canvas' 2d context
//                var context = canvas.getContext('2d');
//                // Set dimensions to Canvas
//                canvas.height = viewport.height;
//                canvas.width = viewport.width;
//                // Prepare object needed by render method
//                var renderContext = {
//                    canvasContext: context,
//                    viewport: viewport
//                };
//                // Render PDF page
//                page.render(renderContext);
//            });

</script>



<!--
<div id="flipbook">    
    <div class="hard">PORTADA</div>
<canvas id="the-canvas"></canvas>
    
     <div class="hard"></div>
    <div class="hard">FIN</div>
</div>



<script type="text/javascript">
    $("#flipbook").turn({
        width: 1100,
        height: 1100,
        autoCenter: true
    });
</script>



<div id="embePDF">
    <embed src="<?php echo base_url(); ?>../pdf/025_enero2016.pdf" type="application/pdf" width="100%" height="1000"></embed>
</div>

