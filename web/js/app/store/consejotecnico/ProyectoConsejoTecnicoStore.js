
Ext.define('SCS.store.consejotecnico.ProyectoConsejoTecnicoStore', {
    extend: 'Ext.data.Store',
    /* Config */
    fields: ["id","fecha","nombre","local","observacion","consejo_tecnico_id"],
    sorters: 'fecha',
    proxy : {
        type : 'ajax',
        url: '../consejo/tecnico/proyecto/list',
        reader : {
            type            : 'json',
            root            : 'data',
            totalProperty   : 'total',
            successProperty : 'success'
        }
    }
});
