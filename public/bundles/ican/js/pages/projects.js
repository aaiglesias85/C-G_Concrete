var Projects = function () {

    var oTable;
    var rowDelete = null;

    //Inicializar table
    var initTable = function () {
        MyApp.block('#project-table-editable');

        var table = $('#project-table-editable');

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
                field: "projectNumber",
                title: "Number",
                width: 120,
            },
            {
                field: "name",
                title: "Name"
            },
            {
                field: "location",
                title: "Location"
            },
            {
                field: "contractor",
                title: "Contractor"
            },
            {
                field: "inspector",
                title: "Inspector"
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
                        url: 'project/listarProject',
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
                scroll: false, // enable/disable datatable scroll both horizontal and vertical when needed.
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
                mApp.unblock('#project-table-editable');
            })
            .on('m-datatable--on-ajax-fail', function (e, jqXHR) {
                mApp.unblock('#project-table-editable');
            })
            .on('m-datatable--on-goto-page', function (e, args) {
                MyApp.block('#project-table-editable');
            })
            .on('m-datatable--on-reloaded', function (e) {
                MyApp.block('#project-table-editable');
            })
            .on('m-datatable--on-sort', function (e, args) {
                MyApp.block('#project-table-editable');
            })
            .on('m-datatable--on-check', function (e, args) {
                //eventsWriter('Checkbox active: ' + args.toString());
            })
            .on('m-datatable--on-uncheck', function (e, args) {
                //eventsWriter('Checkbox inactive: ' + args.toString());
            });

        //Busqueda
        var query = oTable.getDataSourceQuery();
        $('#lista-project .m_form_search').on('keyup', function (e) {
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

        var generalSearch = $('#lista-project .m_form_search').val();
        query.generalSearch = generalSearch;

        var contractor_id = $('#filtro-contractor').val();
        query.contractor_id = contractor_id;

        var inspector_id = $('#filtro-inspector').val();
        query.inspector_id = inspector_id;

        oTable.setDataSourceQuery(query);
        oTable.load();
    }

    //Reset forms
    var resetForms = function () {
        $('#project-form input').each(function (e) {
            $element = $(this);
            $element.val('');

            $element.data("title", "").removeClass("has-error").tooltip("dispose");
            $element.closest('.form-group').removeClass('has-error').addClass('success');
        });

        $('#contractor').val('');
        $('#contractor').trigger('change');

        $('#inspector').val('');
        $('#inspector').trigger('change');

        var $element = $('.select2');
        $element.removeClass('has-error').tooltip("dispose");

        //Mostrar el primer tab
        resetWizard();

        event_change = false;

    };

    //Validacion
    var initForm = function () {
        //Validacion
        $("#project-form").validate({
            rules: {
                number: {
                    required: true
                },
                name: {
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
            }
        });

    };

    //Nuevo
    var initAccionNuevo = function () {
        $(document).off('click', "#btn-nuevo-project");
        $(document).on('click', "#btn-nuevo-project", function (e) {
            btnClickNuevo();
        });

        function btnClickNuevo() {
            resetForms();
            var formTitle = "Do you want to create a new project? Follow the next steps:";
            $('#form-project-title').html(formTitle);
            $('#form-project').removeClass('m--hide');
            $('#lista-project').addClass('m--hide');
        };
    };
    //Salvar
    var initAccionSalvar = function () {
        $(document).off('click', "#btn-wizard-finalizar");
        $(document).on('click', "#btn-wizard-finalizar", function (e) {
            btnClickSalvarForm();
        });

        function btnClickSalvarForm() {
            mUtil.scrollTo();

            event_change = false;

            var contractor_id = $('#contractor').val();

            if ($('#project-form').valid() && contractor_id != '') {

                var project_id = $('#project_id').val();

                var inspector_id = $('#inspector').val();
                var number = $('#number').val();
                var name = $('#name').val();
                var location = $('#location').val();
                var po_number = $('#po_number').val();
                var po_cg = $('#po_cg').val();

                MyApp.block('#form-project');

                $.ajax({
                    type: "POST",
                    url: "project/salvarProject",
                    dataType: "json",
                    data: {
                        'project_id': project_id,
                        'contractor_id': contractor_id,
                        'inspector_id': inspector_id,
                        'name': name,
                        'number': number,
                        'location': location,
                        'po_number': po_number,
                        'po_cg': po_cg
                    },
                    success: function (response) {
                        mApp.unblock('#form-project');
                        if (response.success) {

                            toastr.success(response.message, "Success !!!");
                            cerrarForms();
                            oTable.load();
                        } else {
                            toastr.error(response.error, "Error !!!");
                        }
                    },
                    failure: function (response) {
                        mApp.unblock('#form-project');

                        toastr.error(response.error, "Error !!!");
                    }
                });
            } else {
                if (contractor_id == "") {
                    var $element = $('#select-contractor .select2');
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
    //Cerrar form
    var initAccionCerrar = function () {
        $(document).off('click', ".cerrar-form-project");
        $(document).on('click', ".cerrar-form-project", function (e) {
            cerrarForms();
        });
    }
    //Cerrar forms
    var cerrarForms = function () {
        if (!event_change) {
            cerrarFormsConfirmated();
        } else {
            $('#modal-salvar-cambios').modal({
                'show': true
            });
        }
    };

    //Eventos change
    var event_change = false;
    var initAccionChange = function () {
        $(document).off('change', ".event-change");
        $(document).on('change', ".event-change", function (e) {
            event_change = true;
        });

        $(document).off('click', "#btn-save-changes");
        $(document).on('click', "#btn-save-changes", function (e) {
            cerrarFormsConfirmated();
        });
    };
    var cerrarFormsConfirmated = function () {
        resetForms();
        $('#form-project').addClass('m--hide');
        $('#lista-project').removeClass('m--hide');
    };

    //Editar
    var initAccionEditar = function () {
        $(document).off('click', "#project-table-editable a.edit");
        $(document).on('click', "#project-table-editable a.edit", function (e) {
            e.preventDefault();
            resetForms();

            var project_id = $(this).data('id');
            $('#project_id').val(project_id);

            $('#form-project').removeClass('m--hide');
            $('#lista-project').addClass('m--hide');

            editRow(project_id);
        });

        function editRow(project_id) {

            MyApp.block('#form-project');

            $.ajax({
                type: "POST",
                url: "project/cargarDatos",
                dataType: "json",
                data: {
                    'project_id': project_id
                },
                success: function (response) {
                    mApp.unblock('#form-project');
                    if (response.success) {
                        //Datos project

                        var formTitle = "You want to update the project? Follow the next steps:";
                        $('#form-project-title').html(formTitle);

                        $('#name').val(response.project.name);
                        $('#number').val(response.project.number);
                        $('#location').val(response.project.location);
                        $('#po_number').val(response.project.po_number);
                        $('#po_cg').val(response.project.po_cg);

                        $('#contractor').val(response.project.contractor_id);
                        $('#contractor').trigger('change');

                        $('#inspector').val(response.project.inspector_id);
                        $('#inspector').trigger('change');

                        // habilitar tab
                        totalTabs = 2;
                        $('#btn-wizard-siguiente').removeClass('m--hide');
                        $('#nav-tabs-project').removeClass('m--hide');

                        event_change = false;

                    } else {
                        toastr.error(response.error, "Error !!!");
                    }
                },
                failure: function (response) {
                    mApp.unblock('#form-project');

                    toastr.error(response.error, "Error !!!");
                }
            });

        }
    };
    //Eliminar
    var initAccionEliminar = function () {
        $(document).off('click', "#project-table-editable a.delete");
        $(document).on('click', "#project-table-editable a.delete", function (e) {
            e.preventDefault();

            rowDelete = $(this).data('id');
            $('#modal-eliminar').modal({
                'show': true
            });
        });

        $(document).off('click', "#btn-eliminar-project");
        $(document).on('click', "#btn-eliminar-project", function (e) {
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
                toastr.error('Select projects to delete', "Error !!!");
            }
        };

        function btnClickModalEliminar() {
            var project_id = rowDelete;

            MyApp.block('#project-table-editable');

            $.ajax({
                type: "POST",
                url: "project/eliminarProject",
                dataType: "json",
                data: {
                    'project_id': project_id
                },
                success: function (response) {
                    mApp.unblock('#project-table-editable');

                    if (response.success) {
                        oTable.load();

                        toastr.success(response.message, "Success !!!");

                    } else {
                        toastr.error(response.error, "Error !!!");
                    }
                },
                failure: function (response) {
                    mApp.unblock('#project-table-editable');

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

            MyApp.block('#project-table-editable');

            $.ajax({
                type: "POST",
                url: "project/eliminarProjects",
                dataType: "json",
                data: {
                    'ids': ids
                },
                success: function (response) {
                    mApp.unblock('#project-table-editable');
                    if (response.success) {

                        oTable.load();
                        toastr.success(response.message, "Success !!!");

                    } else {
                        toastr.error(response.error, "Error !!!");
                    }
                },
                failure: function (response) {
                    mApp.unblock('#project-table-editable');

                    toastr.error(response.error, "Error !!!");
                }
            });
        };
    };


    var initWidgets = function () {

        initPortlets();

        $('.m-select2').select2();

        // change
        $('#item').change(changeItem);
        $('#item-quantity').change(calcularTotalItem);
        $('#item-price').change(calcularTotalItem);
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
        var portlet = new mPortlet('lista-project');
        portlet.on('afterFullscreenOn', function (portlet) {
            $('.m-portlet').addClass('m-portlet--fullscreen');
        });

        portlet.on('afterFullscreenOff', function (portlet) {
            $('.m-portlet').removeClass('m-portlet--fullscreen');
        });
    }

    //Wizard
    var activeTab = 1;
    var totalTabs = 1;
    var initWizard = function () {
        $(document).off('click', "#form-project .wizard-tab");
        $(document).on('click', "#form-project .wizard-tab", function (e) {
            e.preventDefault();
            var item = $(this).data('item');

            // validar
            if (item > activeTab && !validWizard()) {
                mostrarTab();
                return;
            }

            activeTab = parseInt(item);

            if (activeTab < totalTabs) {
                // $('#btn-wizard-finalizar').removeClass('m--hide').addClass('m--hide');
            }
            if (activeTab == 1) {
                $('#btn-wizard-anterior').removeClass('m--hide').addClass('m--hide');
                $('#btn-wizard-siguiente').removeClass('m--hide');
            }
            if (activeTab > 1) {
                $('#btn-wizard-anterior').removeClass('m--hide');
                $('#btn-wizard-siguiente').removeClass('m--hide');
            }
            if (activeTab == totalTabs) {
                // $('#btn-wizard-finalizar').removeClass('m--hide');
                $('#btn-wizard-siguiente').removeClass('m--hide').addClass('m--hide');
            }

            //bug visual de la tabla que muestra las cols corridas
            switch (activeTab) {
                case 2:
                    btnClickFiltrarItems();
                    break;
            }

        });

        //siguiente
        $(document).off('click', "#btn-wizard-siguiente");
        $(document).on('click', "#btn-wizard-siguiente", function (e) {
            if (validWizard()) {
                activeTab++;
                $('#btn-wizard-anterior').removeClass('m--hide');
                if (activeTab == totalTabs) {
                    $('#btn-wizard-finalizar').removeClass('m--hide');
                    $('#btn-wizard-siguiente').addClass('m--hide');
                }

                mostrarTab();
            }
        });
        //anterior
        $(document).off('click', "#btn-wizard-anterior");
        $(document).on('click', "#btn-wizard-anterior", function (e) {
            activeTab--;
            if (activeTab == 1) {
                $('#btn-wizard-anterior').addClass('m--hide');
            }
            if (activeTab < totalTabs) {
                $('#btn-wizard-finalizar').addClass('m--hide');
                $('#btn-wizard-siguiente').removeClass('m--hide');
            }
            mostrarTab();
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
                    btnClickFiltrarItems();
                    break;
            }
        }, 0);
    }
    var resetWizard = function () {
        activeTab = 1;
        totalTabs = 1;
        mostrarTab();
        // $('#btn-wizard-finalizar').removeClass('m--hide').addClass('m--hide');
        $('#btn-wizard-anterior').removeClass('m--hide').addClass('m--hide');
        $('#btn-wizard-siguiente').removeClass('m--hide').addClass('m--hide');
        $('#nav-tabs-project').removeClass('m--hide').addClass('m--hide');
    }
    var validWizard = function () {
        var result = true;
        if (activeTab == 1) {

            var contractor_id = $('#contractor').val();
            if (!$('#project-form').valid() || contractor_id == '') {
                result = false;

                if (contractor_id == "") {

                    var $element = $('#select-contractor .select2');
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

        }

        return result;
    }

    // items details
    var oTableItems;
    var rowDeleteItem = null;
    var initTableItems = function () {
        MyApp.block('#items-table-editable');

        var table = $('#items-table-editable');

        var aoColumns = [
            {
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
        ];
        oTableItems = table.mDatatable({
            // datasource definition
            data: {
                type: 'remote',
                source: {
                    read: {
                        url: 'project/listarItemDetails',
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
                scroll: false, // enable/disable datatable scroll both horizontal and vertical when needed.
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

        //Busqueda
        var query = oTableItems.getDataSourceQuery();
        $('#lista-items .m_form_search').on('keyup', function (e) {
            btnClickFiltrar();
        }).val(query.generalSearch);
    };
    var initAccionFiltrarItems = function () {

        $(document).off('click', "#btn-filtrar-items");
        $(document).on('click', "#btn-filtrar-items", function (e) {
            btnClickFiltrarItems();
        });

    };
    var btnClickFiltrarItems = function () {
        var query = oTableItems.getDataSourceQuery();

        var generalSearch = $('#lista-items .m_form_search').val();
        query.generalSearch = generalSearch;

        var project_id = $('#project_id').val();
        query.project_id = project_id;

        var item_id = $('#filtro-item').val();
        query.item_id = item_id;

        var fechaInicial = $('#filtro-fecha-inicial-item').val();
        query.fechaInicial = fechaInicial;

        var fechaFin = $('#filtro-fecha-fin-item').val();
        query.fechaFin = fechaFin;

        oTableItems.setDataSourceQuery(query);
        oTableItems.load();
    }

    var initFormItem = function () {
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
    var initAccionesItems = function () {

        $(document).off('click', "#btn-agregar-item");
        $(document).on('click', "#btn-agregar-item", function (e) {
            // reset
            resetFormItem();

            $('#modal-item').modal({
                'show': true
            });
        });

        $(document).off('click', "#btn-salvar-item");
        $(document).on('click', "#btn-salvar-item", function (e) {
            e.preventDefault();

            var item_id = $('#item').val();
            if ($('#item-form').valid() && item_id != '') {

                var item_details_id = $('#item_details_id').val();
                var project_id = $('#project_id').val();
                var quantity = $('#item-quantity').val();
                var price = $('#item-price').val();
                var date = $('#item-date').val();

                MyApp.block('#modal-item .modal-content');

                $.ajax({
                    type: "POST",
                    url: "project/salvarItemDetails",
                    dataType: "json",
                    data: {
                        'item_details_id': item_details_id,
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
                            resetFormItem();
                            $('#modal-item').modal('hide');

                            //actualizar lista
                            btnClickFiltrarItems();

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

        });

        $(document).off('click', "#items-table-editable a.edit");
        $(document).on('click', "#items-table-editable a.edit", function (e) {
            e.preventDefault();
            resetFormItem();

            $('#modal-item').modal({
                'show': true
            });

            var item_details_id = $(this).data('id');
            $('#item_details_id').val(item_details_id);

            editRow(item_details_id);
        });

        $(document).off('click', "#items-table-editable a.delete");
        $(document).on('click', "#items-table-editable a.delete", function (e) {

            e.preventDefault();
            rowDeleteItem = $(this).data('id');
            $('#modal-eliminar-item').modal({
                'show': true
            });
        });

        $(document).off('click', "#btn-delete-item");
        $(document).on('click', "#btn-delete-item", function (e) {

            var item_details_id = rowDeleteItem;

            MyApp.block('#items-table-editable');

            $.ajax({
                type: "POST",
                url: "project/eliminarItemDetails",
                dataType: "json",
                data: {
                    'item_details_id': item_details_id
                },
                success: function (response) {
                    mApp.unblock('#items-table-editable');
                    if (response.success) {

                        btnClickFiltrarItems();

                        toastr.success(response.message, "Success !!!");

                    } else {
                        toastr.error(response.error, "Error !!!");
                    }
                },
                failure: function (response) {
                    mApp.unblock('#items-table-editable');

                    toastr.error(response.error, "Error !!!");
                }
            });

        });

        function editRow(item_details_id) {

            MyApp.block('#modal-item .modal-content');

            $.ajax({
                type: "POST",
                url: "project/cargarDatosItemDetails",
                dataType: "json",
                data: {
                    'item_details_id': item_details_id
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
    var resetFormItem = function () {
        $('#item-form input').each(function (e) {
            $element = $(this);
            $element.val('');

            $element.data("title", "").removeClass("has-error").tooltip("dispose");
            $element.closest('.form-group').removeClass('has-error').addClass('success');
        });

        $('#item').val('');
        $('#item').trigger('change');

        var fecha_actual = new Date();
        $('#item-date').val(fecha_actual.format('m/d/Y'));

        var $element = $('.select2');
        $element.removeClass('has-error').tooltip("dispose");
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
            initAccionCerrar();
            initAccionEditar();
            initAccionEliminar();
            initAccionFiltrar();


            // items
            initTableItems();
            initAccionFiltrarItems();
            initFormItem();
            initAccionesItems();

            initAccionChange();
        }

    };

}();
