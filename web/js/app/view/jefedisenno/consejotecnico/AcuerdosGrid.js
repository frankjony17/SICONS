
Ext.define('SCS.view.jefedisenno.consejotecnico.AcuerdosGrid', {
    extend: 'Ext.grid.Panel',
    xtype: 'consejo-tecnico-acuerdos-grid',

    width: '100%',
    height: 250,
    selType: 'checkboxmodel',
    autoScroll: 1,
    scrollable: 'vertical',
    store: Ext.create('SCS.store.consejotecnico.AcuerdoStore'),

    initComponent: function () {
        var me = this;
        this.plugins = new Ext.grid.plugin.CellEditing({
            clicksToEdit: 2
        });
        this.stateEvents = 'actioncolumnClick';
        this.columns = [{
            text: 'Id',
            dataIndex: 'id',
            width: 45,
            hidden: true
        },{
            text: 'Número',
            dataIndex: 'numero',
            width: 100
        },{
            text: 'Acuerdos',
            dataIndex: 'acuerdo',
            flex: 1,
            editor: {
                xtype: 'textfield',
                maxLength: 250
            }
        },{
            xtype: 'actioncolumn', width: 25,
            items: [{
                iconCls: 'delete-row',
                tooltip: 'Elimanar registro.',
                handler: function(grid, rowIndex, colIndex){
                    me.fireEvent('actioncolumnClick', [grid, rowIndex]);
                }
            }]
        }];
        this.tbar = [{
            xtype: 'textareafield',
            emptyText: 'Acuerdo',
            name: 'acuerdo',
            allowBlank: false,
            width: 950,
            afterLabelTextTpl: ['<span style="color:red; font-weight:bold" data-qtip="Required">*</span>'],
            margin: '0 5 5 0',
            id: 'field-acuerdo-grid'
        },'-',{
            text: 'Salvar',
            iconCls: 'fa fa-check',
            disabled: true,
            id: 'button-salvar-acuerdo'
        }];
        this.callParent(arguments);
    }
});