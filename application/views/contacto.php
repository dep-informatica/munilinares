<script>
    $(function () {
        var tabs = $("#tabs").tabs();
        tabs.find(".ui-tabs-nav").sortable({
            axis: "x",
            stop: function () {
                tabs.tabs("refresh");
            }
        });
    });
    
    
        $("#enviar").button({icons: {primary: "ui-icon-circle-arrow-e"}}).click(function () {
        enviar();
    });
</script>
<div class="widget">
    <img src=""/>

    <h1></h1>
    <fieldset>
        <legend><h2>Formulario de Contacto</h2></legend>
        <div class="controlgroup">
            <div id="tabs">
                <ul>
                    <li><a href="#tabs-1">Contacto: </a></li>
                </ul>
                <div id="tabs-1">

                    <table>
                        <tr>
                            <td>NOMBRE</td>
                            <td><input type="text" id="txtnombre" placeholder="Juan Antonio Salgado" maxlength="30" size="30"/></td>
                        </tr>
                        <tr>
                            <td>TU EMAIL</td>
                            <td><input type="text" id="txtmail" placeholder="Juan@gmail.com" maxlength="30" size="30"/></td>
                        </tr>
                        <tr>
                            <td>ASUNTO</td>
                            <td><input type="text" id="txtasunto" placeholder="solicitar" maxlength="30" size="30" /></td>
                        </tr>
                        <tr>
                            <td>MENSAJE .</td>
                            <td><textarea rows="4" cols="30" id="txtmensaje" placeholder="su mensaje aqui" maxlength="250" size="250"></textarea></td>
                        </tr>
                        <tr>
                            <td>Departamento</td>
                            <td><select id="depart"name="depart">
                                    <option value="estebanpizarro@munilinares.cl">Direccion de obras</option>
                                    <option value="esteban6.0@gmail.com">Tesoreria</option>
                                    <option value="epizarro@audiolive.cl">Finazas</option>
                                    <option value="#">RRHH</option>
                                    <option value="#">Transito</option>
                                    <option value="#">Transito</option>
                                </select></td>
                        </tr>
                        <tr>


                            <td> Igrese el codigo de Verificacion  <span style = "background-color: #3399ff; color: #FFF;"  id="txtCaptchaDiv" ></span></td>
                        <input type="hidden" id="txtCaptcha" />
                        <td><input    type="text" name="txtInput" id="txtInput" size="30" placeholder="123..."/></td>


                        <script type="text/javascript">


                            //Generates the captcha function
                            var a = Math.ceil(Math.random() * 9) + '';
                            var b = Math.ceil(Math.random() * 9) + '';
                            var c = Math.ceil(Math.random() * 9) + '';
                            var d = Math.ceil(Math.random() * 9) + '';
                            var e = Math.ceil(Math.random() * 9) + '';

                            var code = a + b + c + d + e;
                            document.getElementById("txtCaptcha").value = code;
                            document.getElementById("txtCaptchaDiv").innerHTML = code;

                            // Validate the Entered input aganist the generated security code function
                            function ValidCaptcha() {
                                var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
                                var str2 = removeSpaces(document.getElementById('txtInput').value);
                                if (str1 == str2) {
                                    return true;
                                } else {
                                    return false;
                                }
                            }

                            // Remove the spaces from the entered and generated code
                            function removeSpaces(string) {
                                return string.split(' ').join('');
                            }
                        </script>



                        </tr>
                        <tr>
                            <td><button id="enviar">ENVIAR EMAIL</button></td>
                        </tr>

                    </table>
                </div>
            </div>
    </fieldset>

</div>