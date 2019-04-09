
Ext.define('SCS.store.consejotecnico.IntervencionStore', {
    extend: 'Ext.data.Store',
    /* Config */
    fields: ["id", "persona", "persona_id", "planteamiento"],
    sorters: 'id',
    proxy : {
        type : 'ajax',
        url: '../consejo/tecnico/intervenciones/list',
        reader : {
            type            : 'json',
            root            : 'data',
            totalProperty   : 'total',
            successProperty : 'success'
        }
    }
});
