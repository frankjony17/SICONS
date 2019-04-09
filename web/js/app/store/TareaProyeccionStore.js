
Ext.define('SCS.store.TareaProyeccionStore', {
    extend: 'Ext.data.Store',
    /* Config */
    fields: ["id","tarea","observacion","estado","codigo","nombre","descripcion","proyecto_id"],
    sorters: 'id',
    proxy : {
        type : 'ajax',
        url: '../tarea/proyeccion/list',
        reader : {
            type            : 'json',
            root            : 'data',
            totalProperty   : 'total',
            successProperty : 'success'
        }
    }
});
