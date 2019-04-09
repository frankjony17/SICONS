
Ext.define('SCS.store.ElementoControlStore', {
    extend: 'Ext.data.Store',
    /* Config */
    fields: ["id","nombre","descripcion","elemento_control_tipo_id"],
    autoLoad: true,
    sorters: 'nombre',
    proxy : {
        type : 'ajax',
        url: '../nomenclador/elemento_control/list',
        reader : {
            type            : 'json',
            root            : 'data',
            totalProperty   : 'total',
            successProperty : 'success'
        }
    }
});
