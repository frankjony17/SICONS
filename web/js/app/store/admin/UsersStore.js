
Ext.define('SCS.store.admin.UsersStore', {
    extend: 'Ext.data.Store',
    
    fields: [ 'id', 'username', 'email', 'is_active', 'roles' ],
    autoLoad: true,
    sorters: 'roles',
    groupField: 'roles',
    proxy : {
        type : 'ajax',
        url: '../../app.php/admin/users/list',
        reader : {
            type            : 'json',
            root            : 'data',
            totalProperty   : 'total',
            successProperty : 'success'
        }
    }
});