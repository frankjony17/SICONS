
Ext.define('SCS.store.RevisionContratoStore', {
    extend: 'Ext.data.Store',
    /* Config */
    fields: ["id","fecha","aspecto_revisar","estado_inicial_si","estado_inicial_no","observacion","estado_final_si","estado_final_no","proyecto_id"],
    sorters: 'id',
    proxy : {
        type : 'ajax',
        url: '../revision/contrato/list',
        reader : {
            type            : 'json',
            root            : 'data',
            totalProperty   : 'total',
            successProperty : 'success'
        }
    }
});
