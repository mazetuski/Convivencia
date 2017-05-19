/**
 * Created by maze on 24/04/17.
 */

$(document).ready(function () {

    const SANCION_TYPE_HORAS = 5;
    const HORAS_CLASE = {
        '1' : '8:15 - 9:15',
        '2' : '9:15 - 10:15',
        '3' : '10:15 - 11-15',
        '4' : '11:40 - 12:40',
        '5' : '12:40 - 13:40',
        '6' : '13:40 - 14:40'
    };

    //CHOSEN
    $('.chosen-select').chosen();

    //DATEPICKER
    $.datepicker.regional['es'] = {
        closeText: 'Cerrar',
        prevText: '< Ant',
        nextText: 'Sig >',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
        dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
        weekHeader: 'Sm',
        dateFormat: 'dd/mm/yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
    };
    $.datepicker.setDefaults($.datepicker.regional['es']);
    $('.datepicker').datepicker();



    //PARTE FORM, CONDUCTAS MOSTRAR Y OCULTAR
    $.each($('.selectForm input'), function (key, value) {
        if ($(value).prop('checked') == true) {
            ocultarCheckbox();
            return false;
        }
    });

    function ocultarCheckbox() {
        $.each($('.selectForm input'), function (key, value) {
            if ($(value).prop('checked') == false) {
                $(value).next('label').hide();
                $(value).hide();
            }
        });

        $('.selectForm')
            .after('<div id="divAbrir" class="w3-center"><input type="button" class="w3-button w3-margin w3-text-white checkAbrir" value="+"></div>');

    }

    $('body').on('click', '.checkAbrir', function () {
        $.each($('.selectForm input'), function (key, value) {
            if ($(value).prop('checked') == false) {
                $(value).next('label').show(250);
                $(value).show(250);
            }
        });

        $('.checkAbrir').removeClass('checkAbrir').addClass('checkCerrar').val('-');
    })
        .on('click', '.checkCerrar', function () {
            $.each($('.selectForm input[type=checkbox]'), function (key, value) {
                if ($(value).prop('checked') == false) {
                    $(value).next('label').hide(250);
                    $(value).hide(250);
                }
            });

            $('.checkCerrar').removeClass('checkCerrar').addClass('checkAbrir').val('+');
        }).on('click', '.checkNewSancion', function () {
            // Funcionalidad boton añadir Sanción HoraAC
        $(this).before(contenedorNewHoraSancion());
    })
    //PARTE FORM BÚSQUEDA AVANZADA
    .on('click', '.busquedaMas', function () {
        $('#cursos').show(300).css('display', 'flex');
        $(this).removeClass('busquedaMas').addClass('busquedaMenos');
    })
    .on('click', '.busquedaMenos', function () {
        $('#cursos').hide(300);
        $(this).removeClass('busquedaMenos').addClass('busquedaMas');
    });

    // SANCIONES, SI TIPO ES HORAS O JORNADA MOSTRAR NUEVOS INPUTS

    $('#sancion_form_idTipo').on('change', function () {
        $('#checkEditSancion').hide();
        if ($(this).val() == SANCION_TYPE_HORAS) {
            $('.contenedorFlexEdit').css('visibility', 'visible');
            let buttonAdd = '<div class="w3-center w3-block"><input type="button" class="w3-button w3-margin w3-text-white checkNewSancion" value="+"></div>';
            contenedorNewHoraSancion(buttonAdd);
        } else {
            $('.contenedorFlex').hide();
            $('.contenedorFlexEdit').css('visibility', 'hidden');
        }
    });

    /**
     * Función que añade el contenedor HoraAC con los inputs
     * @param text HTML que se puede añadir al final del contenedor
     */
    function contenedorNewHoraSancion(text = '') {
        let fecha = new Date();
        var options = {
            day: "numeric", month: "2-digit", year: "numeric"
        };
        fecha = fecha.toLocaleString('es-Es', options);
        let input = '<div class="contenedorFlex">' +
            '   <div class="contenedorFlexChild">' +
            '       <label class="w3-text-teal">Fecha Hora Sanción</label>' +
            '       <input type="text" class="w3-input w3-border w3-light-grey datepicker" name="fechaHora[]" contenteditable="false" value="'+fecha+'">' +
            '   </div><div class="contenedorFlexChild">' +
            '       <label class="w3-text-teal">Hora</label>' +
            '       <select class="w3-select w3-border w3-light-grey" name="horaAc[]">';
        for(let key in HORAS_CLASE){
           input+='<option value="'+key+'">'+HORAS_CLASE[key]+'</option>';
        }
        input+='</select></div></div>';
        $('#sancion_form_idTipo').after(input);
        $('.contenedorFlex')
            .append(text);
        $('.datepicker').datepicker();
    }

    //ICHECK

    $('.i-checks').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
    });

    $('.wall').css('min-height', $(window).height());
    $('.overlay').css('min-height', $(window).height());

    $(window).on('resize', function () {
        $('.wall').css('min-height', $(window).height());
        $('.overlay').css('min-height', $(window).height());

    })

});