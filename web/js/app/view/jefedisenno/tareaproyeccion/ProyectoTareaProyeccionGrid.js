
Ext.define('SCS.view.jefedisenno.tareaproyeccion.ProyectoTareaProyeccionGrid', {
    extend: 'Ext.grid.Panel',
    xtype: 'proyecto-tarea-proyeccion-grid',

    requires: ['Ext.ux.ProgressBarPager'],

    width: '100%',
    border: false,
    selType: 'checkboxmodel',
    autoScroll: true,
    stripeRows: true,

    features: [{
        groupHeaderTpl: '{name}',
        ftype: 'groupingsummary',
        collapsible: true
    }],
    initComponent: function() {
        var me = this; // Scope from component 
        // Store 
        me.store = Ext.create('SCS.store.ProyectoTareaProyeccionStore');
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
            text: 'Tarea de Proyección',
            dataIndex: 'tarea',
            flex: 4
        }, {
            text: 'Tipo',
            dataIndex: 'tipo',
            flex: 1
        }, {
            text: 'Proyecto',
            dataIndex: 'proyecto',
            flex: 4,
            hidden: true
        },{
            text: 'proyecto_id',
            dataIndex: 'proyecto_id',
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
                    store: [50, 100, 250, 500, 1000],
                    value: 50,
                    width: 95,
                    editable: false,
                    selectOnFocus: true,
                    id: 'combobox-pagingtoolbar-tarea-proyeccion'
                },'-'],
            plugins: new Ext.ux.ProgressBarPager({ width: 375 })
        }];
        me.tbar = [{
            text: 'Asignar',
            tooltip: 'Asignar Tarea de Proyeccion a un Proyecto determinado',
            iconCls: '',
            action: 'add-tarea-proyeccion-proyecto'
        },{
            text: 'Eliminar',
            tooltip: 'Eliminar asociación de una o varias Tareas de Proyección a un Proyecto',
            iconCls: 'fa fa-trash',
            action: 'remove'
        },'->',{
            tooltip: 'Ayuda relacionada con la asociación de Tareas de Proyección a un Proyecto determinado',
            iconCls: 'fa fa-info',
            action: 'help'
        }];
        me.callParent(arguments);
    }
});