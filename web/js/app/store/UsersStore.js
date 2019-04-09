
Ext.define('SCS.store.UsersStore', {
    extend: 'Ext.data.Store',
    /* Config */
    fields: ["id","username","password","email","is_active"],
    autoLoad: true,
    sorters: 'username',
    proxy : {
        type : 'ajax',
        url: '../admin/users/list',
        reader : {
            type            : 'json',
            root            : 'data',
            totalProperty   : 'total',
            successProperty : 'success'
        }
    }
});
