
Ext.define('SCS.store.PlanCalidadStore', {
    extend: 'Ext.data.Store',
    /* Config */
    fields: ["id","plan","observacion","estado","codigo","nombre","descripcion","proyecto_id"],
    sorters: 'id',
    proxy : {
        type : 'ajax',
        url: '../plan/calidad/list',
        reader : {
            type            : 'json',
            root            : 'data',
            totalProperty   : 'total',
            successProperty : 'success'
        }
    }
});
