
Ext.define('SCS.view.jefedisenno.Viewport', {
    extend: 'Ext.container.Viewport',
    xtype: 'viewport-jefedisenno',
    
    layout : {
        type: 'border'
    },
    initComponent: function() {
        var me = this;

        me.items = [{
            region: 'north',
            xtype: 'container',
            border: false,
            height: 54,
            style: {
                backgroundColor: '#60A3DD'
            },
            layout: {
                type: 'hbox',
                align: 'center'
            },
            items:[{
                xtype: 'tbspacer',
                width: 4
            },{
                xtype: 'buttongroup',
                items: [{
                    text: 'Nomencladores',
                    iconCls: 'nomenclador-proyecto',
                    menu: Ext.create('Ext.menu.Menu', {
                        width: 250,
                        closeAction : 'destroy',
                        items: [{
                            text: '<b>Tarea de Proyección</b>',
                            iconCls: 'viewport-menu-nomenclador-tarea-proyeccion',
                            id: 'viewport-menu-nomenclador-tarea-proyeccion'
                        },{
                            text: '<b>Plan de Calidad</b>',
                            iconCls: 'viewport-menu-nomenclador-plan-calidad',
                            id: 'viewport-menu-nomenclador-plan-calidad'
                        }]
                    })
                }]
            },{
                xtype: 'tbspacer',
                width: 5
            },{
                xtype: 'buttongroup',
                items: [{
                    text: 'Gestionar-Proyecto',
                    iconCls: 'gestionar-operaciones',
                    menu: Ext.create('Ext.menu.Menu', {
                        width: 250,
                        closeAction : 'destroy',
                        items: [{
                            text: '<b>Proyecto (Parcial/Total)</b>',
                            iconCls: 'proyecto',
                            id: 'viewport-menu-proyecto'
                        },{
                            text: '<b>Tarea de Proyección</b>',
                            iconCls: 'viewport-menu-tarea-proyeccion',
                            id: 'viewport-menu-tarea-proyeccion'
                        },{
                            text: '<b>Plan de Calidad</b>',
                            iconCls: 'viewport-menu-plan-calidad',
                            id: 'viewport-menu-plan-calidad'
                        },{
                            text: '<b>Consejo Técnico</b>',
                            iconCls: 'viewport-menu-consejo-tecnico',
                            id: 'viewport-menu-consejo-tecnico'
                        }]
                    })
                },{
                    xtype: 'tbseparator'
                },{
                    tooltip: 'Gestionar Proyectos (Acceso directo).',
                    xtype: 'button',
                    iconCls: 'proyecto',
                    id: 'new-proyecto-id'
                }]
            },{
                xtype: 'tbfill'
            },{
                xtype: 'tbspacer',
                width: 7
            },{
                xtype: 'buttongroup',
                items: [{
                    text: 'Aplicaciones',
                    xtype: 'button',
                    //menu: Ext.create('CDT.view.AplicacionesMenu',{ appId: me.appId }),
                    iconCls: 'app'
                },{
                    text: 'Salir',
                    xtype: 'button',
                    iconCls: 'logout',
                    id: 'logout'
                }]
            }]
        },{
            region: 'center',
            xtype: 'panel',
            border: false,
            bodyStyle: 'background-image:url(../../images/square.gif);',
            id: 'center-panel-id',
        },{
            region: 'south',
            id: 'south-panel-id',
            items: Ext.create('SCS.view.StatusBarPanel')
        }];
        me.callParent(arguments);
    }
});