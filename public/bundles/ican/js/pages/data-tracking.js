var DataTracking = function () {

    var oTable;
    var rowDelete = null;
    var items = [];

    //Inicializar table
    var initTable = function () {
        MyApp.block('#data-tracking-table-editable');

        var table = $('#data-tracking-table-editable');

        var aoColumns = [];

        if (permiso.eliminar) {
            aoColumns.push({
                field: "id",
                title: "#",
                sortable: false, // disable sort for this column
                width: 40,
                textAlign: 'center',
                selector: {class: 'm-checkbox--solid m-checkbox--brand'}
            });
        }

        aoColumns.push(
            {
                field: "acciones",
                width: 80,
                title: "Actions",
                sortable: false,
                overflow: 'visible',
                textAlign: 'center'
            },
            {
                field: "date",
                title: "Date",
                width: 100,
                textAlign: 'center'
            },
            {
                field: "stationNumber",
                title: "Station Number(s)",
                width: 140,
            },
            {
                field: "measuredBy",
                title: "Measured By",
                width: 180,
            },
            {
                field: "totalConcUsed",
                title: "Total Conc Used",
                width: 120,
                textAlign: 'center',
                template: function (row) {
                    return `<span>${MyApp.formatearNumero(row.totalConcUsed, 2, '.', ',')}</span>`;
                }
            },
            {
                field: "lostConcrete",
                title: "Lost Concrete",
                width: 100,
                textAlign: 'center',
                template: function (row) {
                    return `<span>${MyApp.formatearNumero(row.lostConcrete, 2, '.', ',')}</span>`;
                }
            },
            {
                field: "totalLabor",
                title: "Total Labor",
                width: 100,
                textAlign: 'center',
                template: function (row) {
                    return `<span>${MyApp.formatearNumero(row.totalLabor, 2, '.', ',')}</span>`;
                }
            },
            {
                field: "totalStamps",
                title: "Total Stamps",
                width: 100,
                textAlign: 'center',
                template: function (row) {
                    return `<span>${MyApp.formatearNumero(row.totalStamps, 2, '.', ',')}</span>`;
                }
            },
            {
                field: "concVendor",
                title: "Conc Vendor",
            },
            {
                field: "inspector",
                title: "Inspector",
                width: 150,
            },
            {
                field: "inspectorNumber",
                title: "Inspector Number",
                width: 140,
            },
            {
                field: "crewLead",
                title: "Crew Lead",
            },
            {
                field: "item",
                title: "Item",
            },
            {
                field: "unit",
                title: "Unit",
                width: 100,
            },
            {
                field: "quantity",
                title: "Quatity",
                width: 100,
                textAlign: 'center',
            },
            {
                field: "yieldCalculationName",
                title: "Yield Calculation",
                width: 140,
            },
            {
                field: "price",
                title: "Price",
                width: 100,
                textAlign: 'center',
                template: function (row) {
                    return `<span>${MyApp.formatearNumero(row.price, 2, '.', ',')}</span>`;
                }
            },
            {
                field: "total",
                title: "Total",
                width: 100,
                textAlign: 'center',
                template: function (row) {
                    return `<span>${MyApp.formatearNumero(row.total, 2, '.', ',')}</span>`;
                }
            },
            {
                field: "notes",
                title: "Notes",
            },
            {
                field: "otherMaterials",
                title: "Other Materials"
            }
        );
        oTable = table.mDatatable({
            // datasource definition
            data: {
                type: 'remote',
                source: {
                    read: {
                        url: 'data-tracking/listarDataTracking',
                    }
                },
                pageSize: 10,
                saveState: {
                    cookie: false,
                    webstorage: false
                },
                serverPaging: true,
                serverFiltering: true,
                serverSorting: true
            },
            // layout definition
            layout: {
                theme: 'default', // datatable theme
                class: '', // custom wrapper class
                scroll: true, // enable/disable datatable scroll both horizontal and vertical when needed.
                //height: '550', // datatable's body's fixed height
                footer: false // display/hide footer
            },
            // column sorting
            sortable: true,
            pagination: true,
            // columns definition
            columns: aoColumns,
            // toolbar
            toolbar: {
                // toolbar items
                items: {
                    // pagination
                    pagination: {
                        // page size select
                        pageSizeSelect: [10, 25, 30, 50, -1] // display dropdown to select pagination size. -1 is used for "ALl" option
                    }
                }
            },
        });

        //Events
        oTable
            .on('m-datatable--on-ajax-done', function () {
                mApp.unblock('#data-tracking-table-editable');
            })
            .on('m-datatable--on-ajax-fail', function (e, jqXHR) {
                mApp.unblock('#data-tracking-table-editable');
            })
            .on('m-datatable--on-goto-page', function (e, args) {
                MyApp.block('#data-tracking-table-editable');
            })
            .on('m-datatable--on-reloaded', function (e) {
                MyApp.block('#data-tracking-table-editable');
            })
            .on('m-datatable--on-sort', function (e, args) {
                MyApp.block('#data-tracking-table-editable');
            })
            .on('m-datatable--on-check', function (e, args) {
                //eventsWriter('Checkbox active: ' + args.toString());
            })
            .on('m-datatable--on-uncheck', function (e, args) {
                //eventsWriter('Checkbox inactive: ' + args.toString());
            });
    };

    //Filtrar
    var initAccionFiltrar = function () {

        $(document).off('click', "#btn-filtrar");
        $(document).on('click', "#btn-filtrar", function (e) {
            btnClickFiltrar();
        });

    };
    var btnClickFiltrar = function () {
        var query = oTable.getDataSourceQuery();

        query.generalSearch = '';

        var project_id = $('#project').val();
        query.project_id = project_id;

        var item_id = $('#filtro-item').val();
        query.item_id = item_id;

        var fechaInicial = $('#filtro-fecha-inicial-item').val();
        query.fechaInicial = fechaInicial;

        var fechaFin = $('#filtro-fecha-fin-item').val();
        query.fechaFin = fechaFin;

        oTable.setDataSourceQuery(query);
        oTable.load();
    }

    //Reset forms
    var resetForms = function () {
        $('#data-tracking-form input').each(function (e) {
            $element = $(this);
            $element.val('');

            $element.data("title", "").removeClass("has-error").tooltip("dispose");
            $element.closest('.form-group').removeClass('has-error').addClass('success');
        });

        $('#data-tracking-form textarea').each(function (e) {
            $element = $(this);
            $element.val('');

            $element.data("title", "").removeClass("has-error").tooltip("dispose");
            $element.closest('.form-group').removeClass('has-error').addClass('success');
        });

        $('#item-data-tracking').val($('#filtro-item').val());
        $('#item-data-tracking').trigger('change');

        var fecha_actual = new Date();
        $('#data-tracking-date').val(fecha_actual.format('m/d/Y'));

        $('#inspector').val('');
        $('#inspector').trigger('change');

        var $element = $('.select2');
        $element.removeClass('has-error').tooltip("dispose");

        $('#div-yield-calculation').removeClass('m--hide').addClass('m--hide');

    };

    //Validacion
    var initForm = function () {
        //Validacion
        $("#data-tracking-form").validate({
            rules: {
                date: {
                    required: true
                },
                quantity: {
                    required: true,
                },
                price: {
                    required: true
                },
            },
            showErrors: function (errorMap, errorList) {
                // Clean up any tooltips for valid elements
                $.each(this.validElements(), function (index, element) {
                    var $element = $(element);

                    $element.data("title", "") // Clear the title - there is no error associated anymore
                        .removeClass("has-error")
                        .tooltip("dispose");

                    $element
                        .closest('.form-group')
                        .removeClass('has-error').addClass('success');
                });

                // Create new tooltips for invalid elements
                $.each(errorList, function (index, error) {
                    var $element = $(error.element);

                    $element.tooltip("dispose") // Destroy any pre-existing tooltip so we can repopulate with new tooltip content
                        .data("title", error.message)
                        .addClass("has-error")
                        .tooltip({
                            placement: 'bottom'
                        }); // Create a new tooltip based on the error messsage we just set in the title

                    $element.closest('.form-group')
                        .removeClass('has-success').addClass('has-error');

                });
            },
        });

    };

    //Nuevo
    var initAccionNuevo = function () {
        $(document).off('click', "#btn-nuevo-project");
        $(document).on('click', "#btn-nuevo-project", function (e) {
            btnClickNuevo();
        });

        function btnClickNuevo() {

            // validar que haya seleccionado un proyecto
            var project_id = $('#project').val();
            if (project_id == '') {

                toastr.error('Select the project in the side panel', "");

                var $element = $('#select-project .select2');
                $element.tooltip("dispose") // Destroy any pre-existing tooltip so we can repopulate with new tooltip content
                    .data("title", "This field is required")
                    .addClass("has-error")
                    .tooltip({
                        placement: 'bottom'
                    }); // Create a new tooltip based on the error messsage we just set in the title

                $element.closest('.form-group')
                    .removeClass('has-success').addClass('has-error');

                return;
            }

            resetForms();

            $('#modal-data-tracking').modal({
                'show': true
            });
        };
    };
    //Salvar
    var initAccionSalvar = function () {
        $(document).off('click', "#btn-salvar-data-tracking");
        $(document).on('click', "#btn-salvar-data-tracking", function (e) {
            btnClickSalvarForm();
        });

        function btnClickSalvarForm() {

            var project_item_id = $('#item-data-tracking').val();
            var project_id = $('#project').val();
            if ($('#data-tracking-form').valid() && project_item_id != '' && project_id != '') {

                var data_tracking_id = $('#data_tracking_id').val();

                var quantity = $('#data-tracking-quantity').val();
                var price = $('#data-tracking-price').val();
                var date = $('#data-tracking-date').val();
                var inspector_id = $('#inspector').val();
                var station_number = $('#station_number').val();
                var measured_by = $('#measured_by').val();
                var conc_vendor = $('#conc_vendor').val();
                var crew_lead = $('#crew_lead').val();
                var notes = $('#notes').val();
                var other_materials = $('#other_materials').val();
                var total_conc_used = $('#total_conc_used').val();
                var total_labor = $('#total_labor').val();
                var total_stamps = $('#total_stamps').val();

                MyApp.block('#modal-data-tracking .modal-content');

                $.ajax({
                    type: "POST",
                    url: "data-tracking/salvarDataTracking",
                    dataType: "json",
                    data: {
                        'data_tracking_id': data_tracking_id,
                        'project_item_id': project_item_id,
                        'quantity': quantity,
                        'price': price,
                        'date': date,
                        'inspector_id': inspector_id,
                        'station_number': station_number,
                        'measured_by': measured_by,
                        'conc_vendor': conc_vendor,
                        'crew_lead': crew_lead,
                        'notes': notes,
                        'other_materials': other_materials,
                        'total_conc_used': total_conc_used,
                        'total_labor': total_labor,
                        'total_stamps': total_stamps
                    },
                    success: function (response) {
                        mApp.unblock('#modal-data-tracking .modal-content');
                        if (response.success) {

                            toastr.success(response.message, "Success");

                            // reset
                            resetForms();

                            // cerrar modal solo si estoy editando
                            if (data_tracking_id != '') {
                                $('#modal-data-tracking').modal('hide');
                            }


                            //actualizar lista
                            btnClickFiltrar();

                        } else {
                            toastr.error(response.error, "");
                        }
                    },
                    failure: function (response) {
                        mApp.unblock('#modal-data-tracking .modal-content');

                        toastr.error(response.error, "");
                    }
                });
            } else {
                if (project_item_id == "") {
                    var $element = $('#select-item-data-tracking .select2');
                    $element.tooltip("dispose") // Destroy any pre-existing tooltip so we can repopulate with new tooltip content
                        .data("title", "This field is required")
                        .addClass("has-error")
                        .tooltip({
                            placement: 'bottom'
                        }); // Create a new tooltip based on the error messsage we just set in the title

                    $element.closest('.form-group')
                        .removeClass('has-success').addClass('has-error');
                }
            }
        };
    }

    //Editar
    var initAccionEditar = function () {
        $(document).off('click', "#data-tracking-table-editable a.edit");
        $(document).on('click', "#data-tracking-table-editable a.edit", function (e) {
            e.preventDefault();
            resetForms();

            $('#modal-data-tracking').modal({
                'show': true
            });

            var data_tracking_id = $(this).data('id');
            $('#data_tracking_id').val(data_tracking_id);

            editRow(data_tracking_id);
        });

        function editRow(data_tracking_id) {

            MyApp.block('#modal-data-tracking .modal-content');

            $.ajax({
                type: "POST",
                url: "data-tracking/cargarDatos",
                dataType: "json",
                data: {
                    'data_tracking_id': data_tracking_id
                },
                success: function (response) {
                    mApp.unblock('#modal-data-tracking .modal-content');
                    if (response.success) {
                        //Datos project

                        $('#data-tracking-date').val(response.data_tracking.date);

                        $('#item-data-tracking').off('change', changeItemDataTracking);
                        $('#data-tracking-quantity').off('change', calcularTotalItem);
                        $('#data-tracking-price').off('change', calcularTotalItem);

                        $('#item-data-tracking').val(response.data_tracking.project_item_id);
                        $('#item-data-tracking').trigger('change');

                        $('#data-tracking-quantity').val(response.data_tracking.quantity);
                        $('#data-tracking-price').val(response.data_tracking.price);

                        mostrarYieldCalculation();
                        calcularTotalItem();

                        $('#item-data-tracking').on('change', changeItemDataTracking);
                        $('#data-tracking-quantity').on('change', calcularTotalItem);
                        $('#data-tracking-price').on('change', calcularTotalItem);

                        $('#inspector').val(response.data_tracking.inspector_id);
                        $('#inspector').trigger('change');

                        $('#station_number').val(response.data_tracking.station_number);
                        $('#measured_by').val(response.data_tracking.measured_by);
                        $('#conc_vendor').val(response.data_tracking.conc_vendor);
                        $('#crew_lead').val(response.data_tracking.crew_lead);
                        $('#notes').val(response.data_tracking.notes);
                        $('#other_materials').val(response.data_tracking.other_materials);
                        $('#total_conc_used').val(response.data_tracking.total_conc_used);
                        $('#total_labor').val(response.data_tracking.total_labor);
                        $('#total_stamps').val(response.data_tracking.total_stamps);

                        calcularLostConcrete();

                    } else {
                        toastr.error(response.error, "");
                    }
                },
                failure: function (response) {
                    mApp.unblock('#modal-data-tracking .modal-content');

                    toastr.error(response.error, "");
                }
            });

        }
    };
    //Eliminar
    var initAccionEliminar = function () {
        $(document).off('click', "#data-tracking-table-editable a.delete");
        $(document).on('click', "#data-tracking-table-editable a.delete", function (e) {
            e.preventDefault();

            rowDelete = $(this).data('id');
            $('#modal-eliminar').modal({
                'show': true
            });
        });

        $(document).off('click', "#btn-eliminar-data-tracking");
        $(document).on('click', "#btn-eliminar-data-tracking", function (e) {
            btnClickEliminar();
        });

        $(document).off('click', "#btn-delete");
        $(document).on('click', "#btn-delete", function (e) {
            btnClickModalEliminar();
        });

        $(document).off('click', "#btn-delete-selection");
        $(document).on('click', "#btn-delete-selection", function (e) {
            btnClickModalEliminarSeleccion();
        });

        function btnClickEliminar() {
            var ids = '';
            $('.m-datatable__cell--check .m-checkbox--brand > input[type="checkbox"]').each(function () {
                if ($(this).prop('checked')) {
                    var value = $(this).attr('value');
                    if (value != undefined) {
                        ids += value + ',';
                    }
                }
            });

            if (ids != '') {
                $('#modal-eliminar-seleccion').modal({
                    'show': true
                });
            } else {
                toastr.error('Select items to delete', "");
            }
        };

        function btnClickModalEliminar() {
            var data_tracking_id = rowDelete;

            MyApp.block('#data-tracking-table-editable');

            $.ajax({
                type: "POST",
                url: "data-tracking/eliminarDataTracking",
                dataType: "json",
                data: {
                    'data_tracking_id': data_tracking_id
                },
                success: function (response) {
                    mApp.unblock('#data-tracking-table-editable');

                    if (response.success) {

                        btnClickFiltrar();

                        toastr.success(response.message, "Success");

                    } else {
                        toastr.error(response.error, "");
                    }
                },
                failure: function (response) {
                    mApp.unblock('#data-tracking-table-editable');

                    toastr.error(response.error, "");
                }
            });
        };

        function btnClickModalEliminarSeleccion() {
            var ids = '';
            $('.m-datatable__cell--check .m-checkbox--brand > input[type="checkbox"]').each(function () {
                if ($(this).prop('checked')) {
                    var value = $(this).attr('value');
                    if (value != undefined) {
                        ids += value + ',';
                    }
                }
            });

            MyApp.block('#data-tracking-table-editable');

            $.ajax({
                type: "POST",
                url: "data-tracking/eliminarDataTrackings",
                dataType: "json",
                data: {
                    'ids': ids
                },
                success: function (response) {
                    mApp.unblock('#data-tracking-table-editable');
                    if (response.success) {

                        btnClickFiltrar();

                        toastr.success(response.message, "Success !!!");

                    } else {
                        toastr.error(response.error, "");
                    }
                },
                failure: function (response) {
                    mApp.unblock('#data-tracking-table-editable');

                    toastr.error(response.error, "");
                }
            });
        };
    };


    var initWidgets = function () {

        initPortlets();

        $('.m-select2').select2();

        $("[data-switch=true]").bootstrapSwitch();

        // change
        $('#project').change(changeProject);
        $('#item-data-tracking').change(changeItemDataTracking);
        $('#data-tracking-quantity').change(calcularTotalItem);
        $('#data-tracking-price').change(calcularTotalItem);
        $('#total_conc_used').change(calcularLostConcrete);

        // change
        $('#item').change(changeItem);
        $('#yield-calculation').change(changeYield);

        $(document).off('switchChange.bootstrapSwitch', '#item-type');
        $(document).on('switchChange.bootstrapSwitch', '#item-type', changeItemType);
    }

    var changeItemType = function (event, state) {

        // reset
        $('#item').val('');
        $('#item').trigger('change');
        $('#div-item').removeClass('m--hide');

        $('#item-name').val('');
        $('#item-name').removeClass('m--hide').addClass('m--hide');

        $('#unit').val('');
        $('#unit').trigger('change');
        $('#select-unit').removeClass('m--hide').addClass('m--hide');

        if (!state) {
            $('#div-item').removeClass('m--hide').addClass('m--hide');
            $('#item-name').removeClass('m--hide');
            $('#select-unit').removeClass('m--hide');
        }
    }

    var changeYield = function () {
        var yield_calculation = $('#yield-calculation').val();

        // reset
        $('#equation').val('');
        $('#equation').trigger('change');
        $('#select-equation').removeClass('m--hide').addClass('m--hide');

        if (yield_calculation == 'equation') {
            $('#select-equation').removeClass('m--hide');
        }
    }

    var changeItem = function () {
        var item_id = $('#item').val();

        // reset
        $('#item-price').val('');

        $('#yield-calculation').val('');
        $('#yield-calculation').trigger('change');

        $('#equation').val('');
        $('#equation').trigger('change');

        if (item_id != '') {
            var price = $('#item option[value="' + item_id + '"]').data("price");
            $('#item-price').val(price);

            var yield = $('#item option[value="' + item_id + '"]').data("yield");
            $('#yield-calculation').val(yield);
            $('#yield-calculation').trigger('change');

            var equation = $('#item option[value="' + item_id + '"]').data("equation");
            $('#equation').val(equation);
            $('#equation').trigger('change');
        }
    }

    var changeProject = function () {
        var project_id = $('#project').val();

        // reset
        $('.select-item-data-tracking option').each(function (e) {
            if ($(this).val() != "")
                $(this).remove();
        });
        $('.select-item-data-tracking').select2();

        if (project_id != '') {

            MyApp.block('#form-group-item');

            $.ajax({
                type: "POST",
                url: "project/listarItems",
                dataType: "json",
                data: {
                    'project_id': project_id
                },
                success: function (response) {
                    mApp.unblock('#form-group-item');
                    if (response.success) {

                        //Llenar select
                        items = response.items;
                        console.log(items);

                        for (var i = 0; i < items.length; i++) {
                            $('.select-item-data-tracking').append(new Option(items[i].item, items[i].project_item_id, false, false));
                        }
                        $('.select-item-data-tracking').select2();

                    } else {
                        toastr.error(response.error, "");
                    }
                },
                failure: function (response) {
                    mApp.unblock('#form-group-item');

                    toastr.error(response.error, "");
                }
            });
        }
    }

    var changeItemDataTracking = function () {
        var item_id = $('#item-data-tracking').val();

        // reset
        $('#data-tracking-quantity').val('');
        $('#data-tracking-price').val('');
        $('#data-tracking-total').val('');


        if (item_id != '') {
            var item = items.find(function (v) {
                return v.project_item_id == item_id;
            });
            var price = item.price;
            $('#data-tracking-price').val(price);

            mostrarYieldCalculation();

            calcularTotalItem();
        }
    }
    var calcularTotalItem = function () {

        var item_id = $('#item-data-tracking').val();
        var item = items.find(function (v) {
            return v.project_item_id == item_id;
        });


        var cantidad = $('#data-tracking-quantity').val();
        var price = $('#data-tracking-price').val();
        if (cantidad != '' && price != '') {

            // aplicar el yield
            if (item.yield_calculation == "equation") {
                cantidad = MyApp.evaluateExpression(item.yield_calculation_name, cantidad);
            }

            var total = parseFloat(cantidad) * parseFloat(price);
            $('#data-tracking-total').val(total);

            // lost concret
            calcularLostConcrete();
        }
    }

    var calcularLostConcrete = function () {
        var item_id = $('#item-data-tracking').val();
        var item = items.find(function (v) {
            return v.project_item_id == item_id;
        });


        var cantidad = $('#data-tracking-quantity').val();
        // aplicar el yield
        if (item.yield_calculation == "equation") {
            cantidad = MyApp.evaluateExpression(item.yield_calculation_name, cantidad);
        }

        var total_conc_used = $('#total_conc_used').val();
        if (total_conc_used > 0) {
            $('#lost_concrete').val(parseFloat(total_conc_used - cantidad));
        }

    }

    var mostrarYieldCalculation = function () {

        //reset
        $('#item-yield-calculation').val('');
        $('#div-yield-calculation').removeClass('m--hide').addClass('m--hide');

        var item_id = $('#item-data-tracking').val();
        var item = items.find(function (v) {
            return v.project_item_id == item_id;
        });

        if (item.yield_calculation_name != '') {
            $('#div-yield-calculation').removeClass('m--hide');
            $('#item-yield-calculation').val(item.yield_calculation_name);
        }
    }

    var initPortlets = function () {
        var portlet = new mPortlet('lista-data-tracking');
        portlet.on('afterFullscreenOn', function (portlet) {
            $('.m-portlet').addClass('m-portlet--fullscreen');
        });

        portlet.on('afterFullscreenOff', function (portlet) {
            $('.m-portlet').removeClass('m-portlet--fullscreen');
        });
    }

    // inspector
    var initAccionesInspector = function () {
        $(document).off('click', "#btn-add-inspector");
        $(document).on('click', "#btn-add-inspector", function (e) {
            ModalInspector.mostrarModal();
        });

        $('#modal-inspector').on('hidden.bs.modal', function () {
            var inspector = ModalInspector.getInspector();
            if(inspector != null){
                $('#inspector').append(new Option(inspector.name, inspector.inspector_id, false, false));
                $('#inspector').select2();

                $('#inspector').val(inspector.inspector_id);
                $('#inspector').trigger('change');
            }
        });
    }

    // Items
    var initAccionesItems = function () {

        $(document).off('click', "#btn-add-item");
        $(document).on('click', "#btn-add-item", function (e) {

            // add datos de proyecto
            var project = $("#project option:selected").text().split('-');

            ModalItemProject.mostrarModal(project[0], project[1]);

        });

        $('#modal-item').on('hidden.bs.modal', function () {
            var item = ModalItemProject.getItem();
            if(item != null){
                //add items to select
                items.push(item);
                $('.select-item-data-tracking').append(new Option(item.item, item.project_item_id, false, false));
                $('.select-item-data-tracking').select2();

                $('#item-data-tracking').val(item.project_item_id);
                $('#item-data-tracking').trigger('change');
            }
        });

    };

    return {
        //main function to initiate the module
        init: function () {

            initWidgets();
            initTable();
            initForm();

            initAccionNuevo();
            initAccionSalvar();
            initAccionEditar();
            initAccionEliminar();
            initAccionFiltrar();

            // inspectors
            initAccionesInspector();

            // items
            initAccionesItems();
        }

    };

}();
