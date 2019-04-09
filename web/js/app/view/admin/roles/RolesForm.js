
Ext.define('SCS.view.admin.roles.RolesForm', {
    extend: 'Ext.window.Window',
    xtype: 'form-roles',

    iconCls: '',
    layout: 'fit',
    width: 640,
    resizable: false,
    modal: true,

    initComponent: function () {
        var me = this;

        this.items = [{
            xtype: 'form',
            url: '../admin/roles/add-edit',
            padding: '10 10 10 10',
            frame: false,
            fieldDefaults: {
                anchor: '100%',
                allowBlank: false,
                labelAlign: 'top'
            },
            items:[{
                xtype: 'textfield',
                    fieldLabel: 'Name',
                    emptyText: 'Name',
                    name: 'name',
                    /*maskRe: MASKRe,
                    regex: REGEx,*/
                    maxLength: 43,
                    allowBlank: false,
                    flex: 1,
                    afterLabelTextTpl: ['<span style="color:red; font-weight:bold" data-qtip="Required">*</span>']
            },{
                xtype: 'textfield',
                    fieldLabel: 'Role',
                    emptyText: 'Role',
                    name: 'role',
                    /*maskRe: MASKRe,
                    regex: REGEx,*/
                    maxLength: 118,
                    allowBlank: false,
                    flex: 1,
                    afterLabelTextTpl: ['<span style="color:red; font-weight:bold" data-qtip="Required">*</span>']
            },{
                xtype: 'hiddenfield',
                name: 'id'
            }]
        }];
        this.buttons = [{
            text: me.btnText,
            iconCls: 'fa fa-check'
        },{
            text: 'Cancelar',
            iconCls: 'fa fa-times',
            handler: function() {
                me.close();
            }
        }];
        this.callParent(arguments);
    }
});