
Ext.define('SCS.view.jefedisenno.proyecto.ProyectoForm2Edit', {
    extend: 'Ext.form.Panel',
    xtype: 'form-proyecto-2Edit',

    padding: '10 10 10 10',
    fieldDefaults: {
        anchor: '100%',
        allowBlank: false,
        labelAlign: 'top'
    },
    height: 400,

    initComponent: function () {
        var me = this; this.myData = [];

        this.stateEvents = 'actioncolumnClick';

        this.gridPersonaStore = Ext.create('Ext.data.ArrayStore', {
            fields: [ 'id', 'nombre', 'cargo', 'responsabilidad', 'participacion', 'espId' ]
        });
        this.items = [{
            xtype: 'container',
            border: false,
            layout: 'hbox',
            items: [{
                xtype: 'combobox',
                fieldLabel: 'Tipo de Persona',
                emptyText: 'Filtrar por: Tipo de Persona',
                store: Ext.create('SCS.store.PersonaTipoStore'),
                queryMode: 'local',
                displayField: 'nombre',
                margin: '0 5 5 0',
                flex: 2,
                editable: false
            },{
                xtype: 'combobox',
                fieldLabel: 'Persona',
                emptyText: 'Seleccione una Persona',
                store: me.storePersona,
                queryMode: 'local',
                displayField: 'nombre_apellidos',
                valueField: 'id',
                margin: '0 0 0 0',
                flex: 4,
                editable: false
            }]
        },{
            xtype: 'container',
            border: false,
            layout: 'fit',
            items: [{
                xtype: 'grid',
                border: true,
                height: 340,
                selType: 'checkboxmodel',
                autoScroll: true,
                store: me.gridPersonaStore,
                columns: [
                    { text: 'Id', dataIndex: 'id', hidden: true },
                    { text: 'Nombre',  dataIndex: 'nombre', flex: 5 },
                    { text: 'Especialidad', dataIndex: 'cargo', flex: 5 },
                    { text: 'Responsabilidad', dataIndex: 'responsabilidad', flex: 7 },
                    { text: '%', dataIndex: 'participacion', flex: 2 },
                    { text: 'EspId', dataIndex: 'espId', hidden: true },
                    {
                        xtype: 'actioncolumn', width: 25,
                        items: [{
                            iconCls: 'delete-row',
                            tooltip: 'Elimanar fila.',
                            handler: function(grid, rowIndex, colIndex){
                                me.fireEvent('actioncolumnClick', [grid, rowIndex]);
                            }
                        }]
                    }
                ]
            },{
                xtype: 'hiddenfield',
                name: 'id'
            }]
        }];
        this.callParent(arguments);
    }
});