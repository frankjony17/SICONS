
Ext.define('SCS.view.jefedisenno.consejotecnico.ParticipantesGrid', {
    extend: 'Ext.grid.Panel',
    xtype: 'consejo-tecnico-participantes-grid',

    width: '100%',
    height: 250,
    selType: 'checkboxmodel',
    autoScroll: 1,
    scrollable: 'vertical',
    store: Ext.create('SCS.store.consejotecnico.ParticipantesStore'),

    initComponent: function () {
        var me = this;
        me.storePersona = Ext.create('SCS.store.PersonaStore');
        this.plugins = new Ext.grid.plugin.CellEditing({
            clicksToEdit: 2
        });
        this.stateEvents = 'actioncolumnClick';
        this.columns = [{
            xtype: 'rownumberer',
            text: 'No',
            width: 45,
            align: 'center'
        },{
            text: 'Nombre',
            dataIndex: 'persona',
            flex: 4,
            hidden: false
        },{
            text: 'Cargo',
            dataIndex: 'cargo',
            flex: 4,
            hidden: false
        },{
            text: 'Firma',
            flex: 1
        },{
            xtype: 'actioncolumn', width: 25,
            items: [{
                iconCls: 'delete-row',
                tooltip: 'Elimanar registro.',
                handler: function(grid, rowIndex, colIndex){
                    me.fireEvent('actioncolumnClick', [grid, rowIndex]);
                }
            }]
        },{
            text: 'PersonaId',
            dataIndex: 'persona_id',
            flex: 1,
            hidden: true
        },{
            text: 'ProyectoConsejoTecnicoId',
            dataIndex: 'proyecto_consejo_tecnico_id',
            flex: 1,
            hidden: true
        }];
        this.tbar = [{
            xtype: 'combobox',
            emptyText: 'Filtrar por: Cargo',
            store: Ext.create('SCS.store.PersonaTipoStore'),
            queryMode: 'local',
            displayField: 'nombre',
            valueField: 'id',
            margin: '0 5 5 0',
            flex: 2,
            editable: false,
            listeners: {
                select: function (combo) {
                    me.storePersona.clearFilter();
                    if (combo.value) {
                        me.storePersona.filter({
                            property: 'persona_tipo_id',
                            value: combo.value,
                            anyMatch: true
                        });
                    };
                    me.down('[displayField=nombre_apellidos]').setValue();
                }
            }
        },{
            xtype: 'combobox',
            emptyText: 'Seleccione una Persona',
            store: me.storePersona,
            queryMode: 'local',
            displayField: 'nombre_apellidos',
            valueField: 'id',
            margin: '0 0 0 0',
            flex: 4,
            disabled: true,
            editable: false,
            id: 'combobox-persona-participante-form'
        }];
        this.callParent(arguments);
    }
});