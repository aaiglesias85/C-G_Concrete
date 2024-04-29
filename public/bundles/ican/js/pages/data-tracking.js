var DataTracking = function () {

    var oTable;
    var rowDelete = null;

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

        aoColumns.push({
                field: "date",
                title: "Date",
                width: 100,
                textAlign: 'center'
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
                field: "acciones",
                width: 80,
                title: "Actions",
                sortable: false,
                overflow: 'visible',
                textAlign: 'center'
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

        var company_id = $('#company').val();
        query.company_id = company_id;

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
        $('#item-form input').each(function (e) {
            $element = $(this);
            $element.val('');

            $element.data("title", "").removeClass("has-error").tooltip("dispose");
            $element.closest('.form-group').removeClass('has-error').addClass('success');
        });

        $('#item').val($('#filtro-item').val());
        $('#item').trigger('change');

        var fecha_actual = new Date();
        $('#item-date').val(fecha_actual.format('m/d/Y'));

        var $element = $('.select2');
        $element.removeClass('has-error').tooltip("dispose");

    };

    //Validacion
    var initForm = function () {
        //Validacion
        $("#item-form").validate({
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

                toastr.error('Select the project in the side panel', "Error !!!");

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

            $('#modal-item').modal({
                'show': true
            });
        };
    };
    //Salvar
    var initAccionSalvar = function () {
        $(document).off('click', "#btn-salvar-item");
        $(document).on('click', "#btn-salvar-item", function (e) {
            btnClickSalvarForm();
        });

        function btnClickSalvarForm() {

            var item_id = $('#item').val();
            var project_id = $('#project').val();
            if ($('#item-form').valid() && item_id != '' && project_id != '') {

                var data_tracking_id = $('#data_tracking_id').val();

                var quantity = $('#item-quantity').val();
                var price = $('#item-price').val();
                var date = $('#item-date').val();

                MyApp.block('#modal-item .modal-content');

                $.ajax({
                    type: "POST",
                    url: "project/salvarDataTracking",
                    dataType: "json",
                    data: {
                        'data_tracking_id': data_tracking_id,
                        'project_id': project_id,
                        'item_id': item_id,
                        'quantity': quantity,
                        'price': price,
                        'date': date
                    },
                    success: function (response) {
                        mApp.unblock('#modal-item .modal-content');
                        if (response.success) {

                            toastr.success(response.message, "Success !!!");

                            // reset
                            resetForms();
                            $('#modal-item').modal('hide');

                            //actualizar lista
                            btnClickFiltrar();

                        } else {
                            toastr.error(response.error, "Error !!!");
                        }
                    },
                    failure: function (response) {
                        mApp.unblock('#modal-item .modal-content');

                        toastr.error(response.error, "Error !!!");
                    }
                });
            } else {
                if (item_id == "") {
                    var $element = $('#select-item .select2');
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

            $('#modal-item').modal({
                'show': true
            });

            var data_tracking_id = $(this).data('id');
            $('#data_tracking_id').val(data_tracking_id);

            editRow(data_tracking_id);
        });

        function editRow(data_tracking_id) {

            MyApp.block('#modal-item .modal-content');

            $.ajax({
                type: "POST",
                url: "project/cargarDatosDataTracking",
                dataType: "json",
                data: {
                    'data_tracking_id': data_tracking_id
                },
                success: function (response) {
                    mApp.unblock('#modal-item .modal-content');
                    if (response.success) {
                        //Datos project

                        $('#item-date').val(response.item.date);

                        $('#item').off('change', changeItem);
                        $('#item-quantity').off('change', calcularTotalItem);
                        $('#item-price').off('change', calcularTotalItem);

                        $('#item').val(response.item.item_id);
                        $('#item').trigger('change');

                        $('#item-quantity').val(response.item.quantity);
                        $('#item-price').val(response.item.price);

                        calcularTotalItem();

                        $('#item').on('change', changeItem);
                        $('#item-quantity').on('change', calcularTotalItem);
                        $('#item-price').on('change', calcularTotalItem);

                    } else {
                        toastr.error(response.error, "Error !!!");
                    }
                },
                failure: function (response) {
                    mApp.unblock('#modal-item .modal-content');

                    toastr.error(response.error, "Error !!!");
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
                toastr.error('Select items to delete', "Error !!!");
            }
        };

        function btnClickModalEliminar() {
            var data_tracking_id = rowDelete;

            MyApp.block('#data-tracking-table-editable');

            $.ajax({
                type: "POST",
                url: "project/eliminarDataTracking",
                dataType: "json",
                data: {
                    'data_tracking_id': data_tracking_id
                },
                success: function (response) {
                    mApp.unblock('#data-tracking-table-editable');

                    if (response.success) {

                        btnClickFiltrar();

                        toastr.success(response.message, "Success !!!");

                    } else {
                        toastr.error(response.error, "Error !!!");
                    }
                },
                failure: function (response) {
                    mApp.unblock('#data-tracking-table-editable');

                    toastr.error(response.error, "Error !!!");
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
                        toastr.error(response.error, "Error !!!");
                    }
                },
                failure: function (response) {
                    mApp.unblock('#data-tracking-table-editable');

                    toastr.error(response.error, "Error !!!");
                }
            });
        };
    };


    var initWidgets = function () {

        initPortlets();

        $('.m-select2').select2();

        // change
        $('#company').change(changeCompany);
        $('#item').change(changeItem);
        $('#item-quantity').change(calcularTotalItem);
        $('#item-price').change(calcularTotalItem);
    }

    var changeCompany = function () {
        var company_id = $('#company').val();

        // reset
        $('#project option').each(function (e) {
            if ($(this).val() != "")
                $(this).remove();
        });
        $('#project').select2();

        if (company_id != '') {

            MyApp.block('#form-group-project');

            $.ajax({
                type: "POST",
                url: "project/listarOrdenados",
                dataType: "json",
                data: {
                    'company_id': company_id
                },
                success: function (response) {
                    mApp.unblock('#form-group-project');
                    if (response.success) {

                        //Llenar select
                        var projects = response.projects;
                        for (var i = 0; i < projects.length; i++) {
                            var descripcion = `${projects[i].number} - ${projects[i].name}`;
                            $('#project').append(new Option(descripcion, projects[i].project_id, false, false));
                        }
                        $('#project').select2();

                    } else {
                        toastr.error(response.error, "Error !!!");
                    }
                },
                failure: function (response) {
                    mApp.unblock('#form-group-project');

                    toastr.error(response.error, "Error !!!");
                }
            });
        }
    }

    var changeItem = function () {
        var item_id = $('#item').val();

        // reset
        $('#item-quantity').val('');
        $('#item-price').val('');
        $('#item-total').val('');

        if (item_id != '') {
            var price = $('#item option[value="' + item_id + '"]').data("price");
            $('#item-price').val(price);

            calcularTotalItem();
        }
    }
    var calcularTotalItem = function () {
        var cantidad = $('#item-quantity').val();
        var price = $('#item-price').val();
        if (cantidad != '' && price != '') {
            var total = parseFloat(cantidad) * parseFloat(price);
            $('#item-total').val(total);
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
        }

    };

}();
