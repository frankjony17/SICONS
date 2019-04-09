
Ext.define('SCS.store.ProyectoPlanCalidadStore', {
    extend: 'Ext.data.Store',
    /* Config */
    fields: ["id","plan","tipo","proyecto","proyecto_id"],
    autoLoad: true,
    sorters: 'id',
    groupField: 'proyecto',
    proxy : {
        type : 'ajax',
        url: '../plan/calidad/nomenclador/plan/list',
        reader : {
            type            : 'json',
            root            : 'data',
            totalProperty   : 'total',
            successProperty : 'success'
        }
    }
});
