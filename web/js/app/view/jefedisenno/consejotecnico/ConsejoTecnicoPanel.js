
Ext.define('SCS.view.jefedisenno.consejotecnico.ConsejoTecnicoPanel', {
    extend: 'Ext.panel.Panel',
    xtype: 'consejo-tecnico-panel',

    layout: {
        type: 'vbox',
        pack: 'start',
        align: 'stretch'
    },
    bodyPadding: 5,
    scrollable: true,
    defaults: {
        bodyPadding: 2
    },
    bodyStyle: 'background-image:url(../../images/square.gif);',

    initComponent: function() {
        var me = this;
        me.proyectoStore = Ext.create('SCS.store.ProyectoStore');
        me.proyectoStore.load({ params:{ start: 0, limit: 250 }});
        me.items = [{
            layout: { type: 'anchor' },
            bodyStyle: 'background-image:url(../../images/square.gif);',
            items: [{
                xtype: 'toolbar',
                items: [{
                    xtype: 'buttongroup',
                    title: 'Seleccione un Proyecto (FILTRO)',
                    padding: 5,
                    items: [{
                        xtype: 'combobox',
                        emptyText: 'Seleccione un Proyecto...',
                        store: me.proyectoStore,
                        queryMode: 'local',
                        displayField: 'nombre',
                        valueField: 'id',
                        typeAhead: true,
                        selectOnFocus: true,
                        afterLabelTextTpl: ['<span style="color:red; font-weight:bold" data-qtip="Required">*</span>'],
                        tpl: Ext.create('Ext.XTemplate',
                            '<ul class="x-list-plain"><tpl for=".">',
                            '<li role="option" class="x-boundlist-item">{codigo} - {nombre}</li>',
                            '</tpl></ul>'
                        ),
                        displayTpl: Ext.create('Ext.XTemplate',
                            '<tpl for=".">',
                            '{codigo} - {nombre}',
                            '</tpl>'
                        ),
                        width: 520,
                        id: 'toolbar-combobox-consejo-tecnico-proyecto'
                    }]
                },{
                    xtype: 'buttongroup',
                    title: 'Seleccione un Consejo Técnico (FILTRO)',
                    padding: 5,
                    items: [{
                        xtype: 'combobox',
                        emptyText: 'Seleccione un Consejo Técnico...',
                        store: Ext.create('SCS.store.ConsejoTecnicoStore'),
                        queryMode: 'local',
                        displayField: 'nombre',
                        valueField: 'id',
                        editable: false,
                        afterLabelTextTpl: ['<span style="color:red; font-weight:bold" data-qtip="Required">*</span>'],
                        tpl: Ext.create('Ext.XTemplate',
                            '<ul class="x-list-plain"><tpl for=".">',
                            '<li role="option" class="x-boundlist-item">{nombre} - {descripcion}</li>',
                            '</tpl></ul>'
                        ),
                        displayTpl: Ext.create('Ext.XTemplate',
                            '<tpl for=".">',
                            '{nombre} - {descripcion}',
                            '</tpl>'
                        ),
                        width: 400,
                        disabled: true,
                        id: 'toolbar-combobox-consejo-tecnico'
                    }]
                },'->',{
                    xtype: 'buttongroup',
                    title: 'Ayuda',
                    padding: 5,
                    items: [{
                        tooltip: 'Ayuda general.',
                        iconCls: 'fa fa-info',
                        iconAlign: 'top'
                    }]
                }]
            }]
        },{
            layout: { type: 'anchor' },
            bodyStyle: 'background-image:url(../../images/square.gif);',
            items: [{
                title: 'Consejo Técnico',
                collapsible: true,
                items: [{
                    xtype: 'form',
                    id: 'form-consejo-tecnico',
                    padding: '10 10 10 10',
                    frame: false,
                    fieldDefaults: {
                        labelAlign: 'top'
                    },
                    items: [{
                        xtype: 'container',
                        border: false,
                        layout: 'hbox',
                        items: [{
                            xtype: 'textfield',
                            emptyText: 'Local',
                            name: 'local',
                            maxLength: 72,
                            allowBlank: false,
                            flex: 2,
                            afterLabelTextTpl: ['<span style="color:red; font-weight:bold" data-qtip="Required">*</span>'],
                            margin: '0 5 5 0'
                        },{
                            xtype: 'textfield',
                            emptyText: 'Observación',
                            name: 'observacion',
                            allowBlank: true,
                            flex: 3
                        }]
                    },{
                        xtype: 'hiddenfield',
                        name: 'id'
                    }],
                    buttons: [{
                        text: 'Eliminar',
                        iconCls: 'fa fa-trash',
                        disabled: true,
                        id: 'button-remove-consejo-tecnico'
                    },'->',{
                        text: 'Salvar',
                        iconCls: 'fa fa-check',
                        disabled: true,
                        id: 'button-salvar-consejo-tecnico'
                    },{
                        text: 'Cancelar',
                        iconCls: 'fa fa-times',
                        id: 'button-cancelar-consejo-tecnico'
                    }]
                }]
            }]
        },{
            layout: { type: 'anchor' },
            bodyStyle: 'background-image:url(../../images/square.gif);',
            items: [{
                title: 'Intervenciones',
                collapsed: true,
                collapsible: true,
                items: Ext.create('SCS.view.jefedisenno.consejotecnico.IntervencionesGrid')
            }]
        },{
            layout: { type: 'anchor' },
            bodyStyle: 'background-image:url(../../images/square.gif);',
            items: [{
                title: 'Acuerdos',
                collapsed: true,
                collapsible: true,
                items: Ext.create('SCS.view.jefedisenno.consejotecnico.AcuerdosGrid')
            }]
        },{
            layout: { type: 'anchor' },
            bodyStyle: 'background-image:url(../../images/square.gif);',
            items: [{
                title: 'Participantes',
                collapsed: true,
                collapsible: true,
                items: Ext.create('SCS.view.jefedisenno.consejotecnico.ParticipantesGrid')
            }]
        }];
        me.callParent(arguments);
    }
});