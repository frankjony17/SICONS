
Ext.define('SCS.store.ObjetosStore', {
    extend: 'Ext.data.Store',
    /* Config */
    fields: ["id","nombre","descripcion"],
    autoLoad: true,
    sorters: 'nombre',
    proxy : {
        type : 'ajax',
        url: '../nomenclador/objetos/list',
        reader : {
            type            : 'json',
            root            : 'data',
            totalProperty   : 'total',
            successProperty : 'success'
        }
    }
});
