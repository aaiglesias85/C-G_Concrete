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
                field: "project",
                title: "Project",
                width: 200,
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
                field: "total_concrete_yiel",
                title: "Concrete Yield",
                width: 100,
                textAlign: 'center',
                template: function (row) {
                    return `<span>${MyApp.formatearNumero(row.total_concrete_yiel, 2, '.', ',')}</span>`;
                }
            },
            {
                field: "total_quantity_today",
                title: "Quantity Today",
                width: 120,
                textAlign: 'center',
                template: function (row) {
                    return `<span>${MyApp.formatearNumero(row.total_quantity_today, 2, '.', ',')}</span>`;
                }
            },
            {
                field: "total_daily_today",
                title: "Daily Today",
                width: 100,
                textAlign: 'center',
                template: function (row) {
                    return `<span>${MyApp.formatearNumero(row.total_daily_today, 2, '.', ',')}</span>`;
                }
            },
            {
                field: "total_concrete",
                title: "Total Concrete",
                width: 100,
                textAlign: 'center',
                template: function (row) {
                    return `<span>${MyApp.formatearNumero(row.total_concrete, 2, '.', ',')}</span>`;
                }
            },
            {
                field: "profit",
                title: "Profit",
                width: 100,
                textAlign: 'center',
                template: function (row) {
                    return `<span>${MyApp.formatearNumero(row.profit, 2, '.', ',')}</span>`;
                }
            },
        );
        oTable = table.mDatatable({
            // datasource definition
            data: {
                type: 'remote',
                source: {
                    read: {
                        url: 'data-tracking/listar',
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
                //height: 550, // datatable's body's fixed height
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

        //Busqueda
        var query = oTable.getDataSourceQuery();
        $('#lista-data-tracking .m_form_search').on('keyup', function (e) {
            btnClickFiltrar();
        }).val(query.generalSearch);
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

        var generalSearch = $('#lista-data-tracking .m_form_search').val();
        query.generalSearch = generalSearch;

        var project_id = $('#project').val();
        query.project_id = project_id;

        var fechaInicial = $('#fechaInicial').val();
        query.fechaInicial = fechaInicial;

        var fechaFin = $('#fechaFin').val();
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

        var fecha_actual = new Date();
        $('#data-tracking-date').val(fecha_actual.format('m/d/Y'));

        $('#inspector').val('');
        $('#inspector').trigger('change');

        var $element = $('.select2');
        $element.removeClass('has-error').tooltip("dispose");

        // items
        items_data_tracking = [];
        actualizarTableListaItems();

        //Mostrar el primer tab
        resetWizard();

        $('#btn-eliminar-data-tracking').removeClass('m--hide').addClass('m--hide');
        $('#form-group-totals').removeClass('m--hide').addClass('m--hide');

        // add datos de proyecto
        $('#proyect-number').html('');
        $('#proyect-name').html('');
        if ($('#project').val() != '') {
            var project = $("#project option:selected").text().split('-');
            $('#proyect-number').html(project[0]);
            $('#proyect-name').html(project[1]);
        }

    };

    //Validacion
    var initForm = function () {
        //Validacion
        $("#data-tracking-form").validate({
            rules: {
                date: {
                    required: true
                },
                total_conc_used: {
                    required: true
                }
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
        $(document).off('click', "#btn-nuevo-data-tracking");
        $(document).on('click', "#btn-nuevo-data-tracking", function (e) {
            btnClickNuevo();
        });

        function btnClickNuevo() {

            // validar que haya seleccionado un proyecto
            var project_id = $('#project').val();
            if (project_id == '') {

                toastr.error('Select the project in the top section', "");

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

            var data_tracking_id = $('#data_tracking_id').val();
            var project_id = $('#project').val();
            if ($('#data-tracking-form').valid() && (data_tracking_id != '' || (data_tracking_id == '' && project_id != ''))) {

                var date = $('#data-tracking-date').val();
                var inspector_id = $('#inspector').val();
                var station_number = $('#station_number').val();
                var measured_by = $('#measured_by').val();
                var conc_vendor = $('#conc_vendor').val();
                var conc_price = $('#conc_price').val();
                var labor_price = $('#labor_price').val();
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
                        'project_id': project_id,
                        'date': date,
                        'inspector_id': inspector_id,
                        'station_number': station_number,
                        'measured_by': measured_by,
                        'conc_vendor': conc_vendor,
                        'conc_price': conc_price,
                        'labor_price': labor_price,
                        'crew_lead': crew_lead,
                        'notes': notes,
                        'other_materials': other_materials,
                        'total_conc_used': total_conc_used,
                        'total_labor': total_labor,
                        'total_stamps': total_stamps,
                        'items': JSON.stringify(items_data_tracking)
                    },
                    success: function (response) {
                        mApp.unblock('#modal-data-tracking .modal-content');
                        if (response.success) {

                            toastr.success(response.message, "Success");

                            // reset
                            resetForms();

                            $('#modal-data-tracking').modal('hide');

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
            }
        };
    }

    //Editar
    var initAccionEditar = function () {
        $(document).off('click', "#data-tracking-table-editable a.edit");
        $(document).on('click', "#data-tracking-table-editable a.edit", function (e) {
            e.preventDefault();
            resetForms();

            var data_tracking_id = $(this).data('id');
            $('#data_tracking_id').val(data_tracking_id);

            // open modal
            $('#modal-data-tracking').modal('show');

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

                        // datos project
                        $('#proyect-number').html(response.data_tracking.project_number);
                        $('#proyect-name').html(response.data_tracking.project_name);

                        $('#data-tracking-date').val(response.data_tracking.date);

                        $('#inspector').val(response.data_tracking.inspector_id);
                        $('#inspector').trigger('change');

                        $('#station_number').val(response.data_tracking.station_number);
                        $('#measured_by').val(response.data_tracking.measured_by);

                        $('#crew_lead').val(response.data_tracking.crew_lead);
                        $('#notes').val(response.data_tracking.notes);
                        $('#other_materials').val(response.data_tracking.other_materials);

                        $('#total_conc_used').off('change', calcularTotalConcrete);
                        $('#conc_price').off('change', calcularTotalConcrete);

                        $('#total_conc_used').val(response.data_tracking.total_conc_used);
                        $('#conc_vendor').val(response.data_tracking.conc_vendor);
                        $('#conc_price').val(response.data_tracking.conc_price);

                        calcularTotalConcrete();

                        $('#total_conc_used').on('change', calcularTotalConcrete);
                        $('#conc_price').on('change', calcularTotalConcrete);


                        $('#total_labor').off('change', calcularTotalLaborPrice);
                        $('#labor_price').off('change', calcularTotalLaborPrice);

                        $('#total_labor').val(response.data_tracking.total_labor);
                        $('#labor_price').val(response.data_tracking.labor_price);

                        calcularTotalLaborPrice();

                        $('#total_labor').on('change', calcularTotalLaborPrice);
                        $('#labor_price').on('change', calcularTotalLaborPrice);

                        $('#total_stamps').val(response.data_tracking.total_stamps);

                        // items
                        items_data_tracking = response.data_tracking.items;
                        actualizarTableListaItems();

                        // project items
                        items = response.data_tracking.project_items;
                        actualizarSelectProjectItems();

                        // totals
                        $('#form-group-totals').removeClass('m--hide');
                        $('#total_concrete_yiel').val(response.data_tracking.total_concrete_yiel);
                        $('#total_quantity_today').val(response.data_tracking.total_quantity_today);
                        $('#total_daily_today').val(response.data_tracking.total_daily_today);
                        $('#profit').val(response.data_tracking.profit);

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

        function actualizarSelectProjectItems() {
            // reset
            $('.select-item-data-tracking option').each(function (e) {
                if ($(this).val() != "")
                    $(this).remove();
            });
            $('.select-item-data-tracking').select2();

            for (var i = 0; i < items.length; i++) {
                $('.select-item-data-tracking').append(new Option(items[i].item, items[i].project_item_id, false, false));
            }
            $('.select-item-data-tracking').select2();
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
    };


    var initWidgets = function () {

        initPortlets();

        $('.m-select2').select2();

        $("[data-switch=true]").bootstrapSwitch();

        initSelectProject();

        // change
        $('#project').change(changeProject);

        // change
        $('#item').change(changeItem);
        $('#yield-calculation').change(changeYield);

        $(document).off('switchChange.bootstrapSwitch', '#item-type');
        $(document).on('switchChange.bootstrapSwitch', '#item-type', changeItemType);

        $('#total_conc_used').change(calcularTotalConcrete);
        $('#conc_price').change(calcularTotalConcrete);

        $('#total_labor').change(calcularTotalLaborPrice);
        $('#labor_price').change(calcularTotalLaborPrice);
    }

    var initSelectProject = function () {
        $("#project").select2({
            templateResult: function (data) {
                // We only really care if there is an element to pull classes from
                if (!data.element) {
                    return data.text;
                }

                var $element = $(data.element);

                var $wrapper = $("<span></span>");
                if (data.text == 'Add Projects') {
                    $wrapper = $("<a class='btn btn-link' href='javascript:;'></a>");
                }
                $wrapper.text(data.text);

                return $wrapper;
            }
        });
    }

    var calcularTotalConcrete = function () {
        var cantidad = $('#total_conc_used').val();
        var price = $('#conc_price').val();
        if (cantidad != '' && price != '') {
            var total = parseFloat(cantidad) * parseFloat(price);
            $('#total_concrete').val(total);

            // profit
            calcularProfit();
        }
    }

    var calcularTotalLaborPrice = function () {
        var cantidad = $('#total_labor').val();
        var price = $('#labor_price').val();
        if (cantidad != '' && price != '') {
            var total = parseFloat(cantidad) * parseFloat(price);
            $('#total_labor_price').val(total);

            // profit
            calcularProfit();
        }
    }

    var calcularProfit = function () {
        var data_tracking_id = $('#data_tracking_id').val();
        if (data_tracking_id != '') {
            var total_concrete = $('#total_concrete').val();
            var total_labor = $('#total_labor_price').val();
            var total_daily_today = $('#total_daily_today').val();

            var profit = parseFloat(total_daily_today) - ( parseFloat(total_concrete) + parseFloat(total_labor) );
            $('#profit').val(profit);
        }
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

    var changeProject = function (e) {
        var project_id = $('#project').val();

        // evitar la opcion de add
        if (project_id == 'add') {
            $('#project').val('');
            $('#project').trigger('change');

            $('#modal-filter-project').modal('show');

            return;
        }

        // reset
        $('.select-item-data-tracking option').each(function (e) {
            if ($(this).val() != "")
                $(this).remove();
        });
        $('.select-item-data-tracking').select2();

        if (project_id != '') {
            listarItemsDeProject(project_id);
        }

        btnClickFiltrar();
    }

    var listarItemsDeProject = function (project_id) {
        MyApp.block('#modal-data-tracking .modal-content');

        $.ajax({
            type: "POST",
            url: "project/listarItems",
            dataType: "json",
            data: {
                'project_id': project_id
            },
            success: function (response) {
                mApp.unblock('#modal-data-tracking .modal-content');
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
                mApp.unblock('#modal-data-tracking .modal-content');

                toastr.error(response.error, "");
            }
        });
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
            if (inspector != null) {
                $('#inspector').append(new Option(inspector.name, inspector.inspector_id, false, false));
                $('#inspector').select2();

                $('#inspector').val(inspector.inspector_id);
                $('#inspector').trigger('change');
            }
        });
    }

    // Items
    var initAccionesModalItems = function () {

        $(document).off('click', "#btn-add-item");
        $(document).on('click', "#btn-add-item", function (e) {

            // add datos de proyecto
            var project = $("#project option:selected").text().split('-');

            ModalItemProject.mostrarModal(project[0], project[1]);

        });

        $('#modal-item').on('hidden.bs.modal', function () {
            var item = ModalItemProject.getItem();
            if (item != null) {
                //add items to select
                items.push(item);
                $('.select-item-data-tracking').append(new Option(item.item, item.project_item_id, false, false));
                $('.select-item-data-tracking').select2();

                $('#item-data-tracking').val(item.project_item_id);
                $('#item-data-tracking').trigger('change');
            }
        });

    };


    //Wizard
    var activeTab = 1;
    var totalTabs = 2;
    var initWizard = function () {
        $(document).off('click', "#modal-data-tracking .wizard-tab");
        $(document).on('click', "#modal-data-tracking .wizard-tab", function (e) {
            e.preventDefault();
            var item = $(this).data('item');

            // validar
            if (item > activeTab && !validWizard()) {
                mostrarTab();
                return;
            }

            activeTab = parseInt(item);

            //bug visual de la tabla que muestra las cols corridas
            switch (activeTab) {
                case 2:
                    actualizarTableListaItems()
                    break;
            }

        });
    };
    var mostrarTab = function () {
        setTimeout(function () {
            switch (activeTab) {
                case 1:
                    $('#tab-general').tab('show');
                    break;
                case 2:
                    $('#tab-items').tab('show');
                    actualizarTableListaItems();
                    break;
            }
        }, 0);
    }
    var resetWizard = function () {
        activeTab = 1;
        totalTabs = 2;
        mostrarTab();
    }
    var validWizard = function () {
        var result = true;
        if (activeTab == 1) {

            if (!$('#data-tracking-form').valid()) {
                result = false;
            }

        }

        return result;
    }

    // items
    var oTableItems;
    var items_data_tracking = [];
    var nEditingRowItem = null;
    var rowDeleteItem = null;
    var initTableItems = function () {
        MyApp.block('#items-table-editable');

        var table = $('#items-table-editable');

        var aoColumns = [
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
                field: "yield_calculation_name",
                title: "Yield Calculation",
            },
            {
                field: "quantity",
                title: "Quantity",
                width: 120,
                textAlign: 'center',
                template: function (row) {
                    return `<span>${MyApp.formatearNumero(row.quantity, 2, '.', ',')}</span>`;
                }
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
                title: "$ Total",
                width: 100,
                textAlign: 'center',
                template: function (row) {
                    return `<span>$${MyApp.formatearNumero(row.total, 2, '.', ',')}</span>`;
                }
            },
            {
                field: "posicion",
                width: 120,
                title: "Actions",
                sortable: false,
                overflow: 'visible',
                textAlign: 'center',
                template: function (row) {
                    return `
                    <a href="javascript:;" data-posicion="${row.posicion}" class="edit m-portlet__nav-link btn m-btn m-btn--hover-success m-btn--icon m-btn--icon-only m-btn--pill" title="Edit item"><i class="la la-edit"></i></a>
                    <a href="javascript:;" data-posicion="${row.posicion}" class="delete m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete item"><i class="la la-trash"></i></a>
                    `;
                }
            }
        ];
        oTableItems = table.mDatatable({
            // datasource definition
            data: {
                type: 'local',
                source: items_data_tracking,
                pageSize: 10,
                saveState: {
                    cookie: false,
                    webstorage: false
                }
            },
            // layout definition
            layout: {
                theme: 'default', // datatable theme
                class: '', // custom wrapper class
                scroll: true, // enable/disable datatable scroll both horizontal and vertical when needed.
                //height: 550, // datatable's body's fixed height
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
            search: {
                input: $('#lista-items .m_form_search'),
            }
        });

        //Events
        oTableItems
            .on('m-datatable--on-ajax-done', function () {
                mApp.unblock('#items-table-editable');
            })
            .on('m-datatable--on-ajax-fail', function (e, jqXHR) {
                mApp.unblock('#items-table-editable');
            })
            .on('m-datatable--on-goto-page', function (e, args) {
                MyApp.block('#items-table-editable');
            })
            .on('m-datatable--on-reloaded', function (e) {
                MyApp.block('#items-table-editable');
            })
            .on('m-datatable--on-sort', function (e, args) {
                MyApp.block('#items-table-editable');
            })
            .on('m-datatable--on-check', function (e, args) {
                //eventsWriter('Checkbox active: ' + args.toString());
            })
            .on('m-datatable--on-uncheck', function (e, args) {
                //eventsWriter('Checkbox inactive: ' + args.toString());
            });
    };
    var actualizarTableListaItems = function () {
        if (oTableItems) {
            oTableItems.destroy();
        }

        initTableItems();
    }
    var initFormItem = function () {
        $("#data-tracking-item-form").validate({
            rules: {
                quantity: {
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
    var initAccionesItems = function () {

        $(document).off('click', "#btn-agregar-item");
        $(document).on('click', "#btn-agregar-item", function (e) {
            // reset
            resetFormItem();

            $('#modal-data-tracking-item').modal({
                'show': true
            });
        });

        $(document).off('click', "#btn-salvar-data-tracking-item");
        $(document).on('click', "#btn-salvar-data-tracking-item", function (e) {
            e.preventDefault();


            var item_id = $('#item-data-tracking').val();

            if ($('#data-tracking-item-form').valid() && item_id != '') {

                var item = items.find(function (val) {
                    return val.project_item_id == item_id;
                });

                var quantity = $('#data-tracking-quantity').val();

                var price = item.price;
                var total = quantity * price;

                var yield_calculation = item.yield_calculation;
                var equation_id = item.equation_id;
                var yield_calculation_name = item.yield_calculation_name;

                if (nEditingRowItem == null) {

                    items_data_tracking.push({
                        data_tracking_item_id: '',
                        item_id: item_id,
                        item: item.item,
                        unit: item.unit,
                        equation_id: equation_id,
                        yield_calculation: yield_calculation,
                        yield_calculation_name: yield_calculation_name,
                        quantity: quantity,
                        price: price,
                        total: total,
                        posicion: items.length
                    });

                } else {
                    var posicion = nEditingRowItem;
                    if (items_data_tracking[posicion]) {
                        items_data_tracking[posicion].item_id = item_id;
                        items_data_tracking[posicion].item = item.item;
                        items_data_tracking[posicion].unit = item.unit;
                        items_data_tracking[posicion].yield_calculation = yield_calculation;
                        items_data_tracking[posicion].yield_calculation_name = yield_calculation_name;
                        items_data_tracking[posicion].equation_id = equation_id;
                        items_data_tracking[posicion].quantity = quantity;
                        items_data_tracking[posicion].price = price;
                        items_data_tracking[posicion].total = total;
                    }
                }

                //actualizar lista
                actualizarTableListaItems();

                if (nEditingRowItem != null) {
                    $('#modal-data-tracking-item').modal('hide');
                }

                // reset
                resetFormItem();

            } else {
                if (item_id == '') {
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

        });

        $(document).off('click', "#items-table-editable a.edit");
        $(document).on('click', "#items-table-editable a.edit", function (e) {
            var posicion = $(this).data('posicion');
            if (items[posicion]) {

                // reset
                resetFormItem();

                nEditingRowItem = posicion;

                $('#item-data-tracking').val(items_data_tracking[posicion].item_id);
                $('#item-data-tracking').trigger('change');

                $('#data-tracking-quantity').val(items_data_tracking[posicion].quantity);

                // open modal
                $('#modal-data-tracking-item').modal('show');

            }
        });

        $(document).off('click', "#items-table-editable a.delete");
        $(document).on('click', "#items-table-editable a.delete", function (e) {

            e.preventDefault();
            rowDeleteItem = $(this).data('posicion');
            $('#modal-eliminar-item').modal({
                'show': true
            });
        });

        $(document).off('click', "#btn-delete-item");
        $(document).on('click', "#btn-delete-item", function (e) {

            e.preventDefault();
            var posicion = rowDeleteItem;

            if (items_data_tracking[posicion]) {

                if (items_data_tracking[posicion].data_tracking_item_id != '') {
                    MyApp.block('#items-table-editable');

                    $.ajax({
                        type: "POST",
                        url: "data-tracking/eliminarItem",
                        dataType: "json",
                        data: {
                            'data_tracking_item_id': items_data_tracking[posicion].data_tracking_item_id
                        },
                        success: function (response) {
                            mApp.unblock('#items-table-editable');
                            if (response.success) {

                                toastr.success(response.message, "Success");

                                deleteItem(posicion);

                            } else {
                                toastr.error(response.error, "");
                            }
                        },
                        failure: function (response) {
                            mApp.unblock('#items-table-editable');

                            toastr.error(response.error, "");
                        }
                    });
                } else {
                    deleteItem(posicion);
                }
            }

        });

        function deleteItem(posicion) {
            //Eliminar
            items_data_tracking.splice(posicion, 1);
            //actualizar posiciones
            for (var i = 0; i < items_data_tracking.length; i++) {
                items_data_tracking[i].posicion = i;
            }
            //actualizar lista
            actualizarTableListaItems();
        }
    };
    var resetFormItem = function () {
        $('#data-tracking-item-form input').each(function (e) {
            $element = $(this);
            $element.val('');

            $element.data("title", "").removeClass("has-error").tooltip("dispose");
            $element.closest('.form-group').removeClass('has-error').addClass('success');
        });

        $('#item-data-tracking').val('');
        $('#item-data-tracking').trigger('change');

        var $element = $('.select2');
        $element.removeClass('has-error').tooltip("dispose");

        nEditingRowItem = null;
    };

    var initAccionFiltrarProjects = function () {

        $(document).off('click', "#btn-filtrar-projects");
        $(document).on('click', "#btn-filtrar-projects", function (e) {
            btnClickFiltrarProjects();
        });

        $(document).off('click', "#btn-reset-filtros-projects");
        $(document).on('click', "#btn-reset-filtros-projects", function (e) {
            resetFormFilter();
        });

        function btnClickFiltrarProjects() {

            var fechaInicial = $('#filtro-project-from').val();
            var fechaFin = $('#filtro-project-to').val();
            var search = $('#filtro-project-search').val();
            var status = $('#filtro-project-status').val();

            MyApp.block('#modal-filter-project .modal-content');

            $.ajax({
                type: "POST",
                url: "project/listarOrdenados",
                dataType: "json",
                data: {
                    'status': status,
                    'search': search,
                    'from': fechaInicial,
                    'to': fechaFin
                },
                success: function (response) {
                    mApp.unblock('#modal-filter-project .modal-content');
                    if (response.success) {

                        // reset
                        $('#project option').each(function (e) {
                            if ($(this).val() != "" && $(this).val() != "add")
                                $(this).remove();
                        });
                        initSelectProject();

                        var projects = response.projects;
                        if (projects.length > 0) {
                            for (var i = 0; i < projects.length; i++) {
                                $('#project').append(new Option(`${projects[i].number} - ${projects[i].name}`, projects[i].project_id, false, false));
                            }
                            initSelectProject();

                            // select si solo hay uno
                            if (projects.length == 1) {
                                $('#project').val(projects[0].project_id);
                                $('#project').trigger('change');
                            }

                            // close modal
                            $('#modal-filter-project').modal('hide');
                        } else {
                            toastr.error('No projects found', "Error !!!");
                        }


                    } else {
                        toastr.error(response.error, "Error !!!");
                    }
                },
                failure: function (response) {
                    mApp.unblock('#modal-filter-project .modal-content');

                    toastr.error(response.error, "Error !!!");
                }
            });

        }

        function resetFormFilter() {
            $('#form-filter-projects input').each(function (e) {
                $element = $(this);
                $element.val('');
            });

            $('#filtro-project-status').val('');
            $('#filtro-project-status').trigger('change');
        };

    };

    return {
        //main function to initiate the module
        init: function () {

            initWidgets();
            initTable();
            initForm();
            initWizard();

            initAccionNuevo();
            initAccionSalvar();
            initAccionEditar();
            initAccionEliminar();
            initAccionFiltrar();
            initAccionFiltrarProjects();

            //modal inspectors
            initAccionesInspector();

            // modal items
            initAccionesModalItems();

            // items
            initTableItems();
            initFormItem();
            initAccionesItems();
        }

    };

}();
