
Ext.define('NAMESPACE', {
    extend: 'Ext.window.Window',
    xtype: 'XTYPE',

    iconCls: '',
    layout: 'fit',
    width: WIDTH,
    resizable: false,
    modal: true,

    initComponent: function () {
        var me = this;

        this.items = [{
            xtype: 'form',
            url: 'URL',
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
                    ITEMS:1,
                    margin: '0 5 0 0'
                },{
                    ITEMS:2,
                    margin: '0 5 0 0'
                },{
                    ITEMS:3,
                    margin: '0 5 0 0'
                },{
                    ITEMS:4
                }]
            },{
                xtype: 'container',
                border: false,
                layout: 'hbox',
                items: [{
                    ITEMS:5,
                    margin: '0 5 0 0'
                },{
                    ITEMS:6,
                    margin: '0 5 0 0'
                },{
                    ITEMS:7,
                    margin: '0 5 0 0'
                },{
                    ITEMS:8
                }]
            },{
                xtype: 'container',
                border: false,
                layout: 'hbox',
                items: [{
                    ITEMS:9,
                    margin: '0 5 0 0'
                },{
                    ITEMS:10,
                    margin: '0 5 0 0'
                },{
                    ITEMS:11,
                    margin: '0 5 0 0'
                },{
                    ITEMS:12
                }]
            },{
                xtype: 'container',
                border: false,
                layout: 'hbox',
                items: [{
                    ITEMS:13,
                    margin: '0 5 0 0'
                },{
                    ITEMS:14,
                    margin: '0 5 0 0'
                },{
                    ITEMS:15,
                    margin: '0 5 0 0'
                },{
                    ITEMS:16
                }]
            },{
                xtype: 'container',
                border: false,
                layout: 'anchor',
                items: [{
                    ITEMS:17
                },{
                    ITEMS:18
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