
Ext.define('SCS.store.consejotecnico.ParticipantesStore', {
    extend: 'Ext.data.Store',
    /* Config */
    fields: ["persona", "cargo", "persona_id", "proyecto_consejo_tecnico_id"],
    sorters: 'nombre',
    proxy : {
        type : 'ajax',
        url: '../consejo/tecnico/participantes/list',
        reader : {
            type            : 'json',
            root            : 'data',
            totalProperty   : 'total',
            successProperty : 'success'
        }
    }
});
