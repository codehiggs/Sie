<?php

/*
 * **
 *  ** █ ---------------------------------------------------------------------------------------------------------------------
 *  ** █ ░FRAMEWORK                                  2024-08-06 15:53:48
 *  ** █ ░█▀▀█ █▀▀█ █▀▀▄ █▀▀ ░█─░█ ─▀─ █▀▀▀ █▀▀▀ █▀▀ [App\Modules\Account\Views\Processes\Creator\deny.php]
 *  ** █ ░█─── █──█ █──█ █▀▀ ░█▀▀█ ▀█▀ █─▀█ █─▀█ ▀▀█ Copyright 2024 - CloudEngine S.A.S., Inc. <admin@cgine.com>
 *  ** █ ░█▄▄█ ▀▀▀▀ ▀▀▀─ ▀▀▀ ░█─░█ ▀▀▀ ▀▀▀▀ ▀▀▀▀ ▀▀▀ Para obtener información completa sobre derechos de autor y licencia,
 *  ** █                                             consulte la LICENCIA archivo que se distribuyó con este código fuente.
 *  ** █ ---------------------------------------------------------------------------------------------------------------------
 *  ** █ EL SOFTWARE SE PROPORCIONA -TAL CUAL-, SIN GARANTÍA DE NINGÚN TIPO, EXPRESA O
 *  ** █ IMPLÍCITA, INCLUYENDO PERO NO LIMITADO A LAS GARANTÍAS DE COMERCIABILIDAD,
 *  ** █ APTITUD PARA UN PROPÓSITO PARTICULAR Y NO INFRACCIÓN. EN NINGÚN CASO SERÁ
 *  ** █ LOS AUTORES O TITULARES DE LOS DERECHOS DE AUTOR SERÁN RESPONSABLES DE CUALQUIER
 *  ** █ RECLAMO, DAÑOS U OTROS RESPONSABILIDAD, YA SEA EN UNA ACCIÓN DE CONTRATO,
 *  ** █ AGRAVIO O DE OTRO MODO, QUE SURJA DESDE, FUERA O EN RELACIÓN CON EL SOFTWARE
 *  ** █ O EL USO U OTROS NEGOCIACIONES EN EL SOFTWARE.
 *  ** █ ---------------------------------------------------------------------------------------------------------------------
 *  ** █ @Author Jose Alexis Correa Valencia <jalexiscv@gmail.com>
 *  ** █ @Editor Jhon Alejandro Martinez Potes <jalejandromp1@hotmail.com>
 *  ** █ @link https://www.codehiggs.com
 *  ** █ @Version 1.5.0 @since PHP 7, PHP 8
 *  ** █ ---------------------------------------------------------------------------------------------------------------------
 *  ** █ Datos recibidos desde el controlador - @ModuleController
 *  ** █ ---------------------------------------------------------------------------------------------------------------------
 *  ** █ @authentication, @request, @dates, @parent, @component, @view, @oid, @views, @prefix
 *  ** █ ---------------------------------------------------------------------------------------------------------------------
 *  **
 */
//[services]------------------------------------------------------------------------------------------------------------
$b = service("bootstrap");
$f = service("forms", array("lang" => "Sie_Registrations."));
//[models]--------------------------------------------------------------------------------------------------------------
$mregistrations = model("App\Modules\Sie\Models\Sie_Registrations");
$mprogams = model("App\Modules\Sie\Models\Sie_Programs");
//[vars]----------------------------------------------------------------------------------------------------------------
$f = service("forms", array("lang" => "Registrations."));
$registration = $f->get_Value("registration");
$row_registration = $mregistrations->get_Registration($registration);
$back = (($oid == "fullscreen") ? "/sie/registrations/cancel/fullscreen" : "/sie/agreements/list/" . lpk());
$r["registration"] = $f->get_Value("registration");
$f->add_HiddenField("step", "2");
$f->add_HiddenField("registration", $r["registration"]);


$card = $b->get_Card("create", array(
    "title" => "Datos complementarios",
    "content" => $f,
    "header-back" => $back
));
echo($card);
?>
<!-- Modal -->
<div class="modal" id="exampleModal" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Opciones de pago</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img src="/themes/assets/images/start.png" style="height: 100px;" alt=""/i>
                <div class="pt-4">
                    <p class="m-0">¡Ya puedes inscribirte! Puedes realizar el pago a través de AvalPay, usando como
                        "número de desprendible" el código de la orden de pago, que te damos a continuación. Además, te
                        recordamos el valor de la inscripción.</p>
                    <p class="m-0 fs-3 m-1">$91.000</p>
                    <p class="m-0">Su numero de orden de pago:</p>
                    <p class="m-0 fs-3 m-1"><?php echo(@$row_registration['ticket']); ?> </p>
                    <p class="m-0">También puedes descargar la orden, ver en ella otros métodos de pago para
                        inscribirte. Además, hemos enviado un correo electrónico con la misma orden a la dirección que
                        registraste. ¡Revisa tu bandeja de entrada y prepárate para comenzar esta nueva etapa en
                        Utedé!</p>
                </div>
            </div>
            <div class="modal-footer mx-5 flex-column border-0 pb-4">
                <a href="/sie/pdf/registration/billing/<?php echo($registration); ?>"
                   target="_blank" class="btn btn-lg btn-primary w-100">Descargar</a>
                <a href="https://www.avalpaycenter.com/wps/portal/portal-de-pagos/web/banco-bogota/resultado-busqueda/realizar-pago?idConv=00005667&origen=buscar"
                   target="_blank" class="btn btn-lg btn-danger w-100">
                    <img src="/themes/assets/images/avalpay.png" style="height: 30px;" alt=""/>
                </a>
                <a id="continue" href="#" class="btn btn-lg btn-secondary w-100">Continuar</a>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById('continue').addEventListener('click', function (e) {
        e.preventDefault();
        document.getElementById('<?php echo($f->get_fid());?>').submit();
    });
</script>
<style>
    #exampleModal {
        display: block; /* Mostrar el modal */
    }

    #exampleModal .modal-backdrop {
        display: block; /* Mostrar el fondo opaco */
    }

</style>
