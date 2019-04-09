
Ext.define('SCS.store.ProyectoTareaProyeccionStore', {
    extend: 'Ext.data.Store',
    /* Config */
    fields: ["id","tarea","tipo","proyecto","proyecto_id"],
    autoLoad: true,
    sorters: 'id',
    groupField: 'proyecto',
    proxy : {
        type : 'ajax',
        url: '../tarea/proyeccion/nomenclador/tarea/list',
        reader : {
            type            : 'json',
            root            : 'data',
            totalProperty   : 'total',
            successProperty : 'success'
        }
    }
});
