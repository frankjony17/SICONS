
Ext.define('SCS.view.jefedisenno.proyecto.ProyectoGrid', {
    extend: 'Ext.grid.Panel',
    xtype: 'grid-proyecto',

    requires: ['Ext.ux.ProgressBarPager'],

    width: '100%',
    border: false,
    selType: 'checkboxmodel',
    autoScroll: true,
    stripeRows: true,

    plugins: [{
        ptype: 'rowexpander',
        rowBodyTpl: ['{data}']
    }],
    features: [{
        groupHeaderTpl: 'Tipo: {name}',
        ftype: 'groupingsummary',
        collapsible: true
    }],
    initComponent: function() {
        var me = this; // Scope from component 
        // Store 
        me.store = Ext.create('SCS.store.ProyectoStore');
        // CSS a los usuarios que no estan activos o no tienen roles activos.
        me.viewConfig = {
            getRowClass: function(record) {
                if(record.get('estado') === false) {
                    return 'x-grid-row-estado-pendiente';
                } else {
                    return 'x-grid-row-estado-ok';
                }
            }
        };
        // Column Model
        me.columns = [{
            xtype: 'rownumberer',
            text: 'No',
            width: 45,
            align: 'center'
        }, {
            text: 'Id',
            dataIndex: 'id',
            width: 35,
            hidden: true
        }, {
            text: 'Código',
            dataIndex: 'codigo',
            flex: 7
        }, {
            text: 'Nombre',
            dataIndex: 'nombre',
            flex: 7
        }, {
            text: 'Descripción',
            dataIndex: 'descripcion',
            flex: 14
        },{
            dataIndex: 'seguimiento',
            flex: 1,
            align: 'center',
            renderer: function(val) {
                if ( val > 0 ) {
                    return '<img src=\"/images/activo.png\"/>';
                } else {
                    return '<img src=\"/images/no-activo.png\"/>';
                }
            }
        }, {
            text: 'fecha',
            dataIndex: 'fecha',
            flex: 3,
            hidden: true
        }, {
            text: 'grupo',
            dataIndex: 'grupo',
            flex: 3,
            hidden: true
        }, {
            text: 'contrato',
            dataIndex: 'contrato',
            flex: 3,
            hidden: true
        }, {
            text: 'estado',
            dataIndex: 'estado',
            flex: 3,
            hidden: true
        }, {
            text: 'tipo',
            dataIndex: 'tipo',
            flex: 3,
            hidden: true
        }, {
            text: 'proyecto_tipo_id',
            dataIndex: 'proyecto_tipo_id',
            flex: 1,
            hidden: true
        }];
        me.dockedItems = [{
            xtype: 'pagingtoolbar',
            dock: 'bottom',
            height: 40,
            padding: '1 10 1 10',
            store: me.store,
            displayInfo: true,
            inputItemWidth: 40,
            items: ['-', 'Por página ',
                {
                    xtype: 'combobox',
                    store: [15, 35, 60, 100, 500, 1000],
                    value: 15,
                    width: 95,
                    editable: false,
                    selectOnFocus: true,
                    id: 'combobox-pagingtoolbar'
                },'-'],
            plugins: new Ext.ux.ProgressBarPager({ width: 375 })
        }];
        me.tbar = [{
            text: 'Parcial',
            tooltip: 'Nuevo proyecto, solo con datos iniciales',
            iconCls: 'fa fa-toggle-off',
            action: 'add-parcial'
        },{
            text: 'Total',
            tooltip: 'Nuevo proyecto, incluye todos los datos',
            iconCls: 'fa fa-toggle-on',
            action: 'add-total'
        },{
            text: 'Eliminar',
            tooltip: 'Eliminar PROYECTO',
            iconCls: 'fa fa-trash',
            action: 'remove'
        }, '->', {
            tooltip: 'Ayuda relacionada con proyecto',
            iconCls: 'fa fa-info',
            action: 'help'
        }];
        me.callParent(arguments);
    }
});