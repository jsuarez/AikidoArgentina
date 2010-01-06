<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Aikido Argentina - Contactenos - Consultas</title>
    <?php include("includes/head.php");?>
</head>

<body>

    <div class="container">
        <div class="span-24 last header">
            <?php include("includes/header.php");?>
        </div>
        <!--end header-->

        <div class="clear span-24 last container-center">
            <div class="span-15">
                <div class="titles span-5"><h1>Contacto</h1></div>
                <div class="form-contact">
                    <form id="form1" name="form1" method="post" action="">
                        <div class="form-left">
                            <span class="t3 t2">Nombre:</span><br /><div class="input-textfield"><input type="text" name="txtName" /></div>
                            <span class="t3 t2">E-mail:</span><br /><div class="input-textfield"><input type="text" name="txtEmail" /></div>
                            <span class="t3 t2">Motivo:</span><br /><div class="input-textfield"><input type="text" name="txtMotive" /></div>
                        </div>

                        <div class="form-right">
                            <span class="t3 t2">Consulta:</span><br />
                            <div class="input-textarea"><textarea name="txtConsult" cols="20" rows="10"></textarea></div>
                        </div>

                        <input class="button-form text-button" type="submit" value="Enviar" />
                    </form>
                </div>
            </div>

            <div class="span-7 prepend-1 append-1 last column-contact-right">
                <div class="span-7 last content2">
                    <?php include("includes/google.php");?>
                </div>
            </div>
        </div>
        <!--end .container-center-->
    </div>
    <!--end container-->

    <div class="clear span-24 last footer">
        <?php include("includes/footer.php");?>
    </div>
    <!--end footer-->

</body>
</html>
