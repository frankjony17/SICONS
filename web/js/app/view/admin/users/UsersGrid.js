
Ext.define('SCS.view.admin.users.UsersGrid', {
    extend: 'Ext.grid.Panel',
    xtype: 'grid-users',

    width: '100%',
    border: false,
    selType: 'checkboxmodel',
    autoScroll: true,

    features: [{
        groupHeaderTpl: 'Roles: {name}',
        ftype: 'groupingsummary',
        collapsible: true
    }],

    initComponent: function() {
        var me = this; // Scope from component 
        // Store 
        me.store = Ext.create('SCS.store.admin.UsersStore');
        // CSS a los usuarios que no estan activos o no tienen roles activos.
        me.viewConfig = {
            getRowClass: function(record) {
                if(record.get('is_active') === false) {
                    return 'x-grid-row-estado-color';
                } else if(record.get('roles') === '') {
                    return 'x-grid-row-no-roles-color';
                }
            }
        };
        // Column Model
        me.columns = [{
            xtype: 'rownumberer',
            text: 'No',
            width: 35,
            align: 'center'
        }, {
            text: 'Id',
            dataIndex: 'id',
            width: 35,
            hidden: true
        }, {
            text: 'Alias',
            dataIndex: 'username',
            flex: 2
        }, {
            text: 'E-mail',
            dataIndex: 'email',
            flex: 3
        }, {
            text: 'Roles',
            dataIndex: 'roles',
            flex: 4
        }, {
            xtype: 'booleancolumn',
            text: 'Activo',
            trueText: '<img src=\"/images/admin/users-activo.png\"/>&nbsp;&nbsp;&nbsp;&nbsp;<b>Si</b>',
            falseText: '<img src=\"/images/admin/user-inactivo.png\"/>&nbsp;&nbsp;&nbsp;&nbsp;<b>No</b>',
            dataIndex: 'is_active',
            flex: 1
        }];
        me.tbar = [{
            text: 'Adicionar',
            tooltip: 'Adicionar usuario',
            iconCls: 'fa fa-user-plus'
        },{
            text: 'Eliminar',
            tooltip: 'Eliminar usuario',
            iconCls: 'fa fa-user-times'
        },'->',{
            tooltip: 'Ayuda acerca de usuarios.',
            iconCls: 'fa fa-info'
        }]; 
        me.callParent(arguments);
    }
});