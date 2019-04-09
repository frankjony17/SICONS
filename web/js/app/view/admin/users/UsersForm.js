
Ext.define('SCS.view.admin.users.UsersForm', {
    extend: 'Ext.window.Window',
    xtype: 'form-users',

    iconCls: '',
    layout: 'fit',
    width: 640,
    resizable: false,
    modal: true,

    initComponent: function () {
        var me = this;

        this.items = [{
            xtype: 'form',
            url: '../admin/users/add-edit',
            url: '../admin/users/add-edit',
            padding: '10 10 10 10',
            frame: false,
            fieldDefaults: {
                anchor: '100%',
                allowBlank: false,
                labelAlign: 'top'
            },
            items:[{
                xtype: 'container',
                border: false,
                layout: 'hbox',
                items: [{
                    xtype: 'textfield',
                    fieldLabel: 'Username',
                    emptyText: 'Username',
                    name: 'username',
                    /*maskRe: MASKRe,
                    regex: REGEx,*/
                    maxLength: 23,
                    allowBlank: false,
                    flex: 1,
                    afterLabelTextTpl: ['<span style="color:red; font-weight:bold" data-qtip="Required">*</span>'],
                    margin: '0 5 0 0'
                },{
                    xtype: 'textfield',
                    fieldLabel: 'Password',
                    emptyText: 'Password',
                    name: 'password',
                    /*maskRe: MASKRe,
                    regex: REGEx,*/
                    maxLength: 62,
                    allowBlank: false,
                    flex: 1,
                    afterLabelTextTpl: ['<span style="color:red; font-weight:bold" data-qtip="Required">*</span>']
                }]
            },{
                xtype: 'container',
                border: false,
                layout: 'anchor',
                items: [{
                    xtype: 'textfield',
                    fieldLabel: 'Email',
                    emptyText: 'Email',
                    name: 'email',
                    /*maskRe: MASKRe,
                    regex: REGEx,*/
                    maxLength: 62,
                    allowBlank: true,
                    flex: 1,
                    afterLabelTextTpl: false
                },{
                    xtype: 'combobox',
                    fieldLabel: 'Is Active',
                    emptyText: 'Is Active',
                    name: 'is_active',
                    store: Ext.create('Ext.data.ArrayStore', {
                        fields: [ 'estado', 'value' ],
                        data: [[ true, 'Final' ], [ false, 'Pendiente' ], [ true, 'Si' ], [ false, 'No' ], [ true, 'M' ], [ false, 'F' ], [ true, 'OK' ]]
                    }),
                    queryMode: 'local',
                    displayField: 'value',
                    valueField: 'estado',
                    editable: false,
                    flex: 1,
                    allowBlank: true,
                    afterLabelTextTpl: false

                },{
                    xtype: 'hiddenfield',
                    name: 'id'
                }]
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