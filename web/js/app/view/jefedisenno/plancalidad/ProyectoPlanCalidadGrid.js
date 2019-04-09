
Ext.define('SCS.view.jefedisenno.plancalidad.ProyectoPlanCalidadGrid', {
    extend: 'Ext.grid.Panel',
    xtype: 'proyecto-plan-calidad-grid',

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
        me.store = Ext.create('SCS.store.ProyectoPlanCalidadStore');
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
            text: 'Plan de Calidad',
            dataIndex: 'plan',
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
                    id: 'combobox-pagingtoolbar-plan-calidad'
                },'-'],
            plugins: new Ext.ux.ProgressBarPager({ width: 375 })
        }];
        me.tbar = [{
            text: 'Asignar',
            tooltip: 'Asignar Plan de Calidad a un Proyecto determinado',
            iconCls: '',
            action: 'add-plan-calidad-proyecto'
        },{
            text: 'Eliminar',
            tooltip: 'Eliminar asociación de uno o varios Planes de Calidad a un Proyecto',
            iconCls: 'fa fa-trash',
            action: 'remove'
        },'->',{
            tooltip: 'Ayuda relacionada con la asociación de Planes de Calidad a un Proyecto determinado',
            iconCls: 'fa fa-info',
            action: 'help'
        }];
        me.callParent(arguments);
    }
});