
Ext.define('SCS.store.consejotecnico.AcuerdoStore', {
    extend: 'Ext.data.Store',
    /* Config */
    fields: ["id", "numero", "acuerdo"],
    sorters: 'numero',
    proxy : {
        type : 'ajax',
        url: '../consejo/tecnico/acuerdo/list',
        reader : {
            type            : 'json',
            root            : 'data',
            totalProperty   : 'total',
            successProperty : 'success'
        }
    }
});
