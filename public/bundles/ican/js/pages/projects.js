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
                title: "C & G Project #",
                width: 120,
            },
            {
                field: "county",
                title: "County"
            },
            {
                field: "name",
                title: "Name"
            },
            {
                field: "dueDate",
                title: "Due Date",
                width: 100,
            },
            {
                field: "company",
                title: "Company"
            },
            {
                field: "status",
                title: "Status",
                responsive: {visible: 'lg'},
                width: 80,
                // callback function support for column rendering
                template: function (row) {
                    var status = {
                        1: {'title': 'Active', 'class': ' m-badge--success'},
                        0: {'title': 'Inactive', 'class': ' m-badge--danger'}
                    };
                    return '<span class="m-badge ' + status[row.status].class + ' m-badge--wide">' + status[row.status].title + '</span>';
                }
            },
            {
                field: "nota",
                title: "Notes",
                responsive: {visible: 'lg'},
                width: 200,
                sortable: false,
                // callback function support for column rendering
                template: function (row) {

                    var html = '';
                    if(row.nota != null){
                        html = `${row.nota.nota} <span class="m-badge m-badge--info">${row.nota.date}</span> 
                            <i class="flaticon-edit editar-notas" data-id="${row.id}" 
                            data-projectnumber="${row.projectNumber}" data-projectname="${row.name}"
                             data-notaid="${row.nota.id}" style="cursor:pointer;" title="Edit notes"></i>`;
                    }
                    return html;
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

        var company_id = $('#filtro-company').val();
        query.company_id = company_id;

        var status = $('#filtro-status').val();
        query.status = status;

        var fechaInicial = $('#fechaInicial').val();
        query.fechaInicial = fechaInicial;

        var fechaFin = $('#fechaFin').val();
        query.fechaFin = fechaFin;

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

        $('#company').val('');
        $('#company').trigger('change');

        $('#inspector').val('');
        $('#inspector').trigger('change');

        $('#estadoactivo').prop('checked', true);
        $('#federal_funding').prop('checked', false);
        $('#resurfacing').prop('checked', false);
        $('#certified_payrolls').prop('checked', false);

        var $element = $('.select2');
        $element.removeClass('has-error').tooltip("dispose");

        // items
        items = [];
        actualizarTableListaItems();

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

            var company_id = $('#company').val();

            if ($('#project-form').valid() && company_id != '') {

                var project_id = $('#project_id').val();

                var inspector_id = $('#inspector').val();
                var number = $('#number').val();
                var name = $('#name').val();
                var location = $('#location').val();
                var po_number = $('#po_number').val();
                var po_cg = $('#po_cg').val();
                var manager = $('#manager').val();
                var status = ($('#estadoactivo').prop('checked')) ? 1 : 0;
                var owner = $('#owner').val();
                var subcontract = $('#subcontract').val();
                var county = $('#county').val();
                var federal_funding = ($('#federal_funding').prop('checked')) ? 1 : 0;
                var resurfacing = ($('#resurfacing').prop('checked')) ? 1 : 0;
                var certified_payrolls = ($('#certified_payrolls').prop('checked')) ? 1 : 0;
                var invoice_contact = $('#invoice_contact').val();
                var start_date = $('#start_date').val();
                var end_date = $('#end_date').val();
                var due_date = $('#due_date').val();

                MyApp.block('#form-project');

                $.ajax({
                    type: "POST",
                    url: "project/salvarProject",
                    dataType: "json",
                    data: {
                        'project_id': project_id,
                        'company_id': company_id,
                        'inspector_id': inspector_id,
                        'name': name,
                        'number': number,
                        'location': location,
                        'po_number': po_number,
                        'po_cg': po_cg,
                        'manager': manager,
                        'status': status,
                        'owner': owner,
                        'subcontract': subcontract,
                        'county': county,
                        'federal_funding': federal_funding,
                        'resurfacing': resurfacing,
                        'certified_payrolls': certified_payrolls,
                        'invoice_contact': invoice_contact,
                        'start_date': start_date,
                        'end_date': end_date,
                        'due_date': due_date,
                        'items': JSON.stringify(items)
                    },
                    success: function (response) {
                        mApp.unblock('#form-project');
                        if (response.success) {

                            toastr.success(response.message, "Success");
                            cerrarForms();

                            btnClickFiltrar();

                        } else {
                            toastr.error(response.error, "");
                        }
                    },
                    failure: function (response) {
                        mApp.unblock('#form-project');

                        toastr.error(response.error, "");
                    }
                });
            } else {
                if (company_id == "") {
                    var $element = $('#select-company .select2');
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

            editRow(project_id, false);
        });

        $(document).off('click', "#project-table-editable i.editar-notas");
        $(document).on('click', "#project-table-editable i.editar-notas", function (e) {
            e.preventDefault();
            resetForms();

            var project_id = $(this).data('id');
            $('#project_id').val(project_id);

            $('#form-project').removeClass('m--hide');
            $('#lista-project').addClass('m--hide');

            editRow(project_id, true);

            // editar nota directo
            var notes_id = $(this).data('notaid');
            $('#name').val($(this).data('projectnumber'));
            $('#number').val($(this).data('projectname'));

            editRowNote(notes_id);
        });

        function editRow(project_id, editar_notas) {

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

                        $('#company').val(response.project.company_id);
                        $('#company').trigger('change');

                        $('#inspector').val(response.project.inspector_id);
                        $('#inspector').trigger('change');

                        $('#name').val(response.project.name);
                        $('#number').val(response.project.number);

                        $('#location').val(response.project.location);
                        $('#po_number').val(response.project.po_number);
                        $('#po_cg').val(response.project.po_cg);
                        $('#manager').val(response.project.manager);
                        $('#owner').val(response.project.owner);
                        $('#subcontract').val(response.project.subcontract);
                        $('#county').val(response.project.county);
                        $('#invoice_contact').val(response.project.invoice_contact);

                        $('#federal_funding').prop('checked', response.project.federal_funding);
                        $('#resurfacing').prop('checked', response.project.resurfacing);
                        $('#certified_payrolls').prop('checked', response.project.certified_payrolls);

                        if (!response.project.status) {
                            $('#estadoactivo').prop('checked', false);
                            $('#estadoinactivo').prop('checked', true);
                        }

                        $('#start_date').val(response.project.start_date);
                        $('#end_date').val(response.project.end_date);
                        $('#due_date').val(response.project.due_date);

                        // items
                        items = response.project.items;
                        actualizarTableListaItems();

                        // habilitar tab
                        totalTabs = 4;
                        $('.nav-item-hide').removeClass('m--hide');

                        event_change = false;

                        // ir al tab de notas
                        if(editar_notas){
                            activeTab = 3;
                            mostrarTab();
                        }

                    } else {
                        toastr.error(response.error, "");
                    }
                },
                failure: function (response) {
                    mApp.unblock('#form-project');

                    toastr.error(response.error, "");
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
                toastr.error('Select projects to delete', "");
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

                        toastr.success(response.message, "Success");

                    } else {
                        toastr.error(response.error, "");
                    }
                },
                failure: function (response) {
                    mApp.unblock('#project-table-editable');

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
                        toastr.success(response.message, "Success");

                    } else {
                        toastr.error(response.error, "");
                    }
                },
                failure: function (response) {
                    mApp.unblock('#project-table-editable');

                    toastr.error(response.error, "");
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

        $('#item-data-tracking').change(changeItemDataTracking);
        $('#data-tracking-quantity').change(calcularTotalItemDataTracking);
        $('#data-tracking-price').change(calcularTotalItemDataTracking);
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
    var changeItemDataTracking = function () {
        var item_id = $('#item-data-tracking').val();

        // reset
        $('#data-tracking-quantity').val('');
        $('#data-tracking-price').val('');
        $('#data-tracking-total').val('');

        if (item_id != '') {
            var price = $('#item option[value="' + item_id + '"]').data("price");
            $('#data-tracking-price').val(price);

            calcularTotalItemDataTracking();
        }
    }
    var calcularTotalItemDataTracking = function () {
        var cantidad = $('#data-tracking-quantity').val();
        var price = $('#data-tracking-price').val();
        if (cantidad != '' && price != '') {
            var total = parseFloat(cantidad) * parseFloat(price);
            $('#data-tracking-total').val(total);
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
    var totalTabs = 2;
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
                    actualizarTableListaItems()
                    break;
                case 3:
                    btnClickFiltrarNotes();
                    break;
                case 4:
                    btnClickFiltrarDataTracking();
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
                    actualizarTableListaItems();
                    break;
                case 3:
                    $('#tab-notes').tab('show');
                    btnClickFiltrarNotes();
                    break;
                case 4:
                    $('#tab-data-tracking').tab('show');
                    btnClickFiltrarDataTracking();
                    break;

            }
        }, 0);
    }
    var resetWizard = function () {
        activeTab = 1;
        totalTabs = 2;
        mostrarTab();
        // $('#btn-wizard-finalizar').removeClass('m--hide').addClass('m--hide');
        $('#btn-wizard-anterior').removeClass('m--hide').addClass('m--hide');
        $('#btn-wizard-siguiente').removeClass('m--hide');
        $('.nav-item-hide').removeClass('m--hide').addClass('m--hide');
    }
    var validWizard = function () {
        var result = true;
        if (activeTab == 1) {

            var company_id = $('#company').val();
            if (!$('#project-form').valid() || company_id == '') {
                result = false;

                if (company_id == "") {

                    var $element = $('#select-company .select2');
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

    // items
    var oTableItems;
    var items = [];
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
                source: items,
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
        $("#item-form").validate({
            rules: {
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

                var item = $("#item option:selected").text();
                var unit = $('#item option[value="' + item_id + '"]').data("unit");

                var quantity = $('#item-quantity').val();
                var price = $('#item-price').val();
                var total = $('#item-total').val();

                if (nEditingRowItem == null) {

                    items.push({
                        project_item_id: '',
                        item_id: item_id,
                        item: item,
                        unit: unit,
                        quantity: quantity,
                        price: price,
                        total: total,
                        posicion: items.length
                    });

                } else {
                    var posicion = nEditingRowItem;
                    if (items[posicion]) {
                        items[posicion].item_id = item_id;
                        items[posicion].item = item;
                        items[posicion].unit = unit;
                        items[posicion].quantity = quantity;
                        items[posicion].price = price;
                        items[posicion].total = total;
                    }
                }

                //actualizar lista
                actualizarTableListaItems();

                // reset
                resetFormItem();
                //$('#modal-item').modal('hide');

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
            var posicion = $(this).data('posicion');
            if (items[posicion]) {

                // reset
                resetFormItem();

                nEditingRowItem = posicion;

                $('#item').off('change', changeItem);
                $('#item-quantity').off('change', calcularTotalItem);
                $('#item-price').off('change', calcularTotalItem);

                $('#item').val(items[posicion].item_id);
                $('#item').trigger('change');

                $('#item-quantity').val(items[posicion].quantity);
                $('#item-price').val(items[posicion].price);

                calcularTotalItem();

                $('#item').on('change', changeItem);
                $('#item-quantity').on('change', calcularTotalItem);
                $('#item-price').on('change', calcularTotalItem);

                // open modal
                $('#modal-item').modal('show');

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

            if (items[posicion]) {

                if (items[posicion].project_item_id != '') {
                    MyApp.block('#items-table-editable');

                    $.ajax({
                        type: "POST",
                        url: "project/eliminarItem",
                        dataType: "json",
                        data: {
                            'project_item_id': items[posicion].project_item_id
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
            items.splice(posicion, 1);
            //actualizar posiciones
            for (var i = 0; i < items.length; i++) {
                items[i].posicion = i;
            }
            //actualizar lista
            actualizarTableListaItems();
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

        var $element = $('.select2');
        $element.removeClass('has-error').tooltip("dispose");

        nEditingRowItem = null;

        // add datos de proyecto
        $("#proyect-number-item").html($('#number').val());
        $("#proyect-name-item").html($('#name').val());
    };

    // tracking
    var oTableDataTracking;
    var rowDeleteDataTracking = null;
    var initTableDataTracking = function () {
        MyApp.block('#data-tracking-table-editable');

        var table = $('#data-tracking-table-editable');

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
        oTableDataTracking = table.mDatatable({
            // datasource definition
            data: {
                type: 'remote',
                source: {
                    read: {
                        url: 'project/listarDataTracking',
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
        oTableDataTracking
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
        var query = oTableDataTracking.getDataSourceQuery();
        $('#lista-data-tracking .m_form_search').on('keyup', function (e) {
            btnClickFiltrarDataTracking();
        }).val(query.generalSearch);
    };
    var initAccionFiltrarDataTracking = function () {

        $(document).off('click', "#btn-filtrar-data-tracking");
        $(document).on('click', "#btn-filtrar-data-tracking", function (e) {
            btnClickFiltrarDataTracking();
        });

    };
    var btnClickFiltrarDataTracking = function () {
        var query = oTableDataTracking.getDataSourceQuery();

        var generalSearch = $('#lista-data-tracking .m_form_search').val();
        query.generalSearch = generalSearch;

        var project_id = $('#project_id').val();
        query.project_id = project_id;

        var item_id = $('#filtro-item').val();
        query.item_id = item_id;

        var fechaInicial = $('#filtro-fecha-inicial-data-tracking').val();
        query.fechaInicial = fechaInicial;

        var fechaFin = $('#filtro-fecha-fin-data-tracking').val();
        query.fechaFin = fechaFin;

        oTableDataTracking.setDataSourceQuery(query);
        oTableDataTracking.load();
    }

    var initFormDataTracking = function () {
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
    var initAccionesDataTracking = function () {

        $(document).off('click', "#btn-agregar-data-tracking");
        $(document).on('click', "#btn-agregar-data-tracking", function (e) {
            // reset
            resetFormDataTracking();

            $('#modal-data-tracking').modal({
                'show': true
            });
        });

        $(document).off('click', "#btn-salvar-data-tracking");
        $(document).on('click', "#btn-salvar-data-tracking", function (e) {
            e.preventDefault();

            var item_id = $('#item-data-tracking').val();
            if ($('#data-tracking-form').valid() && item_id != '') {

                var data_tracking_id = $('#data_tracking_id').val();
                var project_id = $('#project_id').val();
                var quantity = $('#data-tracking-quantity').val();
                var price = $('#data-tracking-price').val();
                var date = $('#data-tracking-date').val();

                MyApp.block('#modal-data-tracking .modal-content');

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
                        mApp.unblock('#modal-data-tracking .modal-content');
                        if (response.success) {

                            toastr.success(response.message, "Success");

                            // reset
                            resetFormDataTracking();
                            //$('#modal-data-tracking').modal('hide');

                            //actualizar lista
                            btnClickFiltrarDataTracking();

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
                if (item_id == "") {
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

        $(document).off('click', "#data-tracking-table-editable a.edit");
        $(document).on('click', "#data-tracking-table-editable a.edit", function (e) {
            e.preventDefault();
            resetFormDataTracking();

            $('#modal-data-tracking').modal({
                'show': true
            });

            var data_tracking_id = $(this).data('id');
            $('#data_tracking_id').val(data_tracking_id);

            editRow(data_tracking_id);
        });

        $(document).off('click', "#data-tracking-table-editable a.delete");
        $(document).on('click', "#data-tracking-table-editable a.delete", function (e) {

            e.preventDefault();
            rowDeleteDataTracking = $(this).data('id');
            $('#modal-eliminar-data-tracking').modal({
                'show': true
            });
        });

        $(document).off('click', "#btn-delete-data-tracking");
        $(document).on('click', "#btn-delete-data-tracking", function (e) {

            var data_tracking_id = rowDeleteDataTracking;

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

                        btnClickFiltrarDataTracking();

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

        });

        function editRow(data_tracking_id) {

            MyApp.block('#modal-data-tracking .modal-content');

            $.ajax({
                type: "POST",
                url: "project/cargarDatosDataTracking",
                dataType: "json",
                data: {
                    'data_tracking_id': data_tracking_id
                },
                success: function (response) {
                    mApp.unblock('#modal-data-tracking .modal-content');
                    if (response.success) {
                        //Datos project

                        $('#data-tracking-date').val(response.item.date);

                        $('#item-data-tracking').off('change', changeItemDataTracking);
                        $('#data-tracking-quantity').off('change', calcularTotalItemDataTracking);
                        $('#data-tracking-price').off('change', calcularTotalItemDataTracking);

                        $('#item-data-tracking').val(response.item.item_id);
                        $('#item-data-tracking').trigger('change');

                        $('#data-tracking-quantity').val(response.item.quantity);
                        $('#data-tracking-price').val(response.item.price);

                        calcularTotalItemDataTracking();

                        $('#item-data-tracking').on('change', changeItemDataTracking);
                        $('#data-tracking-quantity').on('change', calcularTotalItemDataTracking);
                        $('#data-tracking-price').on('change', calcularTotalItemDataTracking);

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
    var resetFormDataTracking = function () {
        $('#data-tracking-form input').each(function (e) {
            $element = $(this);
            $element.val('');

            $element.data("title", "").removeClass("has-error").tooltip("dispose");
            $element.closest('.form-group').removeClass('has-error').addClass('success');
        });

        $('#item-data-tracking').val('');
        $('#item-data-tracking').trigger('change');

        var fecha_actual = new Date();
        $('#data-tracking-date').val(fecha_actual.format('m/d/Y'));

        var $element = $('.select2');
        $element.removeClass('has-error').tooltip("dispose");
    };


    // notes
    var oTableNotes;
    var rowDeleteNote = null;
    var initTableNotes = function () {
        MyApp.block('#notes-table-editable');

        var table = $('#notes-table-editable');

        var aoColumns = [
            {
                field: "date",
                title: "Date",
                width: 100,
                textAlign: 'center'
            },
            {
                field: "notes",
                title: "Notes",
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
        oTableNotes = table.mDatatable({
            // datasource definition
            data: {
                type: 'remote',
                source: {
                    read: {
                        url: 'project/listarNotes',
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
        oTableNotes
            .on('m-datatable--on-ajax-done', function () {
                mApp.unblock('#notes-table-editable');
            })
            .on('m-datatable--on-ajax-fail', function (e, jqXHR) {
                mApp.unblock('#notes-table-editable');
            })
            .on('m-datatable--on-goto-page', function (e, args) {
                MyApp.block('#notes-table-editable');
            })
            .on('m-datatable--on-reloaded', function (e) {
                MyApp.block('#notes-table-editable');
            })
            .on('m-datatable--on-sort', function (e, args) {
                MyApp.block('#notes-table-editable');
            })
            .on('m-datatable--on-check', function (e, args) {
                //eventsWriter('Checkbox active: ' + args.toString());
            })
            .on('m-datatable--on-uncheck', function (e, args) {
                //eventsWriter('Checkbox inactive: ' + args.toString());
            });

        //Busqueda
        var query = oTableNotes.getDataSourceQuery();
        $('#lista-notes .m_form_search').on('keyup', function (e) {
            btnClickFiltrarNotes();
        }).val(query.generalSearch);
    };
    var initAccionFiltrarNotes = function () {

        $(document).off('click', "#btn-filtrar-notes");
        $(document).on('click', "#btn-filtrar-notes", function (e) {
            btnClickFiltrarNotes();
        });

    };
    var btnClickFiltrarNotes = function () {
        var query = oTableNotes.getDataSourceQuery();

        var generalSearch = $('#lista-notes .m_form_search').val();
        query.generalSearch = generalSearch;

        var project_id = $('#project_id').val();
        query.project_id = project_id;

        var fechaInicial = $('#filtro-fecha-inicial-notes').val();
        query.fechaInicial = fechaInicial;

        var fechaFin = $('#filtro-fecha-fin-notes').val();
        query.fechaFin = fechaFin;

        oTableNotes.setDataSourceQuery(query);
        oTableNotes.load();
    }
    var initFormNote = function () {
        $("#notes-form").validate({
            rules: {
                date: {
                    required: true
                },
                notes: {
                    required: true,
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
    var initAccionesNotes = function () {

        $(document).off('click', "#btn-agregar-note");
        $(document).on('click', "#btn-agregar-note", function (e) {
            // reset
            resetFormNote();

            $('#modal-notes').modal({
                'show': true
            });
        });

        $(document).off('click', "#btn-salvar-note");
        $(document).on('click', "#btn-salvar-note", function (e) {
            e.preventDefault();

            if ($('#notes-form').valid()) {

                var notes_id = $('#notes_id').val();
                var project_id = $('#project_id').val();
                var notes = $('#notes').val();
                var date = $('#notes-date').val();

                MyApp.block('#modal-notes .modal-content');

                $.ajax({
                    type: "POST",
                    url: "project/salvarNotes",
                    dataType: "json",
                    data: {
                        'notes_id': notes_id,
                        'project_id': project_id,
                        'notes': notes,
                        'date': date
                    },
                    success: function (response) {
                        mApp.unblock('#modal-notes .modal-content');
                        if (response.success) {

                            toastr.success(response.message, "Success");

                            // reset
                            resetFormNote();
                            $('#modal-notes').modal('hide');

                            //actualizar lista
                            btnClickFiltrarNotes();

                        } else {
                            toastr.error(response.error, "");
                        }
                    },
                    failure: function (response) {
                        mApp.unblock('#modal-notes .modal-content');

                        toastr.error(response.error, "");
                    }
                });


            }
        });

        $(document).off('click', "#notes-table-editable a.edit");
        $(document).on('click', "#notes-table-editable a.edit", function (e) {
            e.preventDefault();

            var notes_id = $(this).data('id');
            // editar nota
            editRowNote(notes_id);
        });

        $(document).off('click', "#notes-table-editable a.delete");
        $(document).on('click', "#notes-table-editable a.delete", function (e) {

            e.preventDefault();
            rowDeleteNote = $(this).data('id');
            $('#modal-eliminar-notes').modal({
                'show': true
            });
        });

        $(document).off('click', "#btn-delete-note");
        $(document).on('click', "#btn-delete-note", function (e) {

            var notes_id = rowDeleteNote;

            MyApp.block('#notes-table-editable');

            $.ajax({
                type: "POST",
                url: "project/eliminarNotes",
                dataType: "json",
                data: {
                    'notes_id': notes_id
                },
                success: function (response) {
                    mApp.unblock('#notes-table-editable');
                    if (response.success) {

                        btnClickFiltrarNotes();

                        toastr.success(response.message, "Success");

                    } else {
                        toastr.error(response.error, "");
                    }
                },
                failure: function (response) {
                    mApp.unblock('#notes-table-editable');

                    toastr.error(response.error, "");
                }
            });

        });


    };
    var editRowNote = function (notes_id) {

        resetFormNote();

        $('#modal-notes').modal({
            'show': true
        });

        $('#notes_id').val(notes_id);

        MyApp.block('#modal-notes .modal-content');

        $.ajax({
            type: "POST",
            url: "project/cargarDatosNotes",
            dataType: "json",
            data: {
                'notes_id': notes_id
            },
            success: function (response) {
                mApp.unblock('#modal-notes .modal-content');
                if (response.success) {
                    //Datos project

                    $('#notes-date').val(response.notes.date);
                    $('#notes').val(response.notes.notes);

                } else {
                    toastr.error(response.error, "");
                }
            },
            failure: function (response) {
                mApp.unblock('#modal-notes .modal-content');

                toastr.error(response.error, "");
            }
        });

    }
    var resetFormNote = function () {
        $('#notes-form input').each(function (e) {
            $element = $(this);
            $element.val('');

            $element.data("title", "").removeClass("has-error").tooltip("dispose");
            $element.closest('.form-group').removeClass('has-error').addClass('success');
        });
        $('#notes-form textarea').each(function (e) {
            $element = $(this);
            $element.val('');

            $element.data("title", "").removeClass("has-error").tooltip("dispose");
            $element.closest('.form-group').removeClass('has-error').addClass('success');
        });

        var fecha_actual = new Date();
        $('#notes-date').val(fecha_actual.format('m/d/Y'));

        // add datos de proyecto
        $("#proyect-number-note").html($('#number').val());
        $("#proyect-name-note").html($('#name').val());
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
            initFormItem();
            initAccionesItems();

            // data tracking
            initTableDataTracking();
            initAccionFiltrarDataTracking();
            initFormDataTracking();
            initAccionesDataTracking();

            // notes
            initTableNotes();
            initAccionFiltrarNotes();
            initFormNote();
            initAccionesNotes();

            initAccionChange();
        }

    };

}();
