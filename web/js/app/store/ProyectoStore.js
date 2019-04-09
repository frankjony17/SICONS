
Ext.define('SCS.store.ProyectoStore', {
    extend: 'Ext.data.Store',
    /* Config */
    fields: ["id","fecha","codigo","nombre","grupo","contrato","descripcion","estado","proyecto_tipo_id","tipo","seguimiento","data"],
    sorters: 'fecha',
    groupField: 'tipo',
    proxy : {
        type : 'ajax',
        url: '../proyecto/list',
        reader : {
            type            : 'json',
            root            : 'data',
            totalProperty   : 'total',
            successProperty : 'success'
        }
    }
});
