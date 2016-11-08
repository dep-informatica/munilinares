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
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
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

<!--inicio-->
<div class="post tarjeta">
    <div class="pic" width="1" height="1">    

        <!-- Trigger the Modal -->
        <a href="#" id="paginavista" name="paginavista">
            <img src="#" alt="" />
        </a>

    </div>
    <div class="texto">
        <span class="meta">Enero de 2016</span>
        <h4 class="title"><a href="#">hechos municipales con espectacular festival de fuegos artificiales linares dio la bienvenida al 2016</a></h4>
    </div>
    <div class="clearfix"></div>
</div>
<!--fin-->




<!--The Modal--> 
<div id="myModal" class="modal">
    <span class="close">x</span>
    <!--Modal content--> 
    <div class="modal-content">
        <div id="verPDF"></div>

    </div>

</div>


<script type="text/javascript">
// Get the modal
    var modal = document.getElementById('myModal');

// Get the button that opens the modal
    var btn = document.getElementById("paginavista");

// Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
    btn.onclick = function () {
        vistamebePDF();
        modal.style.display = "block";
    }

// When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

// When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>


<script type="text/javascript">
 
if (navigator.appName == 'Microsoft Internet Explorer' ){
document.write('')
document.write('<center>')
document.write('<object id="browserIcons" classid="clsid:8856F961-340A-11D0-A96B-00C04FD705A2" align="baseline" border="0" width="600" height="300">')
document.write('<param name="Location" value="c:">')
document.write('<param name="AlignLeft" value="1">')
document.write('<param name="AutoSize" value="0">')
document.write('<param name="AutoSizePercentage" value="100">')
document.write('<param name="AutoArrange" value="0">')
document.write('<param name="NoClientEdge" value="false">')
document.write('<param name="ViewMode" value="4">')
document.write('</object>')
document.write('</center>')
}

</script>