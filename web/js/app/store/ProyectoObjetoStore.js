
Ext.define('SCS.store.ProyectoObjetoStore', {
    extend: 'Ext.data.Store',
    /* Config */
    fields: ["id","nombre","descripcion"],
    sorters: 'nombre',
    autoLoad: false,
    proxy : {
        type : 'ajax',
        url: '../proyecto/list/objetos',
        reader : {
            type            : 'json',
            root            : 'data',
            totalProperty   : 'total',
            successProperty : 'success'
        }
    }
});
