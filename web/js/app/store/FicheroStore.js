
Ext.define('SCS.store.FicheroStore', {
    extend: 'Ext.data.Store',
    /* Config */
    fields: [ 'id', 'fecha', 'nombre', 'size', 'descripcion' ],
    sorters: 'fecha',
    autoLoad: false,
    proxy : {
        type : 'ajax',
        url: '../proyecto/list/file',
        reader : {
            type            : 'json',
            root            : 'data',
            totalProperty   : 'total',
            successProperty : 'success'
        }
    }
});
