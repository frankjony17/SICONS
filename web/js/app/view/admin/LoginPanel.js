
Ext.define('SCS.view.admin.LoginPanel', {
    extend: 'Ext.panel.Panel',

    layout: {
        type: 'vbox',
        pack: 'start',
        align: 'stretch'
    },
    bodyPadding: 10,
    scrollable: true,
    defaults: {
        bodyPadding: 10
    },
    initComponent: function() {
        var me = this; me.yearTotal = {};

        me.items = [{
            layout: {
                type: 'hbox'
            },
            bodyPadding: 5,
            defaults: {
                frame: true,
                bodyPadding: 5
            },
            items: [{
                title: 'Proyectos Abiertos <b>(2016)</b>',
                flex: 8,
                margin: '0 10 0 0',
                items: [{
                    xtype: 'cartesian',
                    reference: 'chart',

                    width: '100%',
                    height: 250,

                    legend: {
                        docked: 'bottom'
                    },
                    store: {
                        fields: ['year', 'to', 'gm', 'vw', 'fo'],
                        data: [
                            { year: 'Proyecto 1', to: 3, gm: 5, vw: 1, fo: 1 },
                            { year: 'Proyecto 2', to: 0, gm: 0, vw: 10, fo: 0 },
                            { year: 'Proyecto 3', to: 1, gm: 2, vw: 5, fo: 2 },
                            { year: 'Proyecto 4', to: 0, gm: 0, vw: 0, fo: 10 },
                            { year: 'Proyecto 5', to: 3, gm: 1, vw: 4, fo: 2 },
                            { year: 'Proyecto 6', to: 7, gm: 1, vw: 2, fo: 0 },
                            { year: 'Proyecto 7', to: 10, gm: 0, vw: 0, fo: 0 }
                        ]
                    },
                    theme: 'Muted',

                    insetPadding: {
                        top: 40,
                        left: 40,
                        right: 40,
                        bottom: 40
                    },
                    sprites: [{
                        type: 'text',
                        fontSize: 22,
                        width: 100,
                        height: 30,
                        x: 40, // the sprite x position
                        y: 20  // the sprite y position
                    }],
                    axes: [{
                        type: 'numeric',
                        position: 'left',
                        grid: true,
                        fields: [ 'to', 'gm', 'vw', 'fo' ],
                        renderer: me.onAxisLabelRender1
                    }, {
                        type: 'category',
                        position: 'bottom',
                        fields: 'year',
                        label: {
                            rotate: {
                                degrees: -45
                            }
                        }
                    }],
                    series: [{
                        type: 'bar',
                        stacked: true,
                        fullStack: true,

                        title: [ 'Consejo técnico 1', 'Consejo técnico 2', 'Consejo técnico 3', 'Otros' ],

                        xField: 'year',
                        yField: [ 'to', 'gm', 'vw', 'fo' ],

                        style: {
                            minGapWidth: 30
                        },
                        highlight: {
                            fillStyle: 'yellow'
                        },
                        tooltip: {
                            trackMouse: true,
                            renderer: function (tooltip, record, item) {
                                var fieldIndex = Ext.Array.indexOf(item.series.getYField(), item.field),
                                    manufacturer = item.series.getTitle()[fieldIndex],
                                    percent = record.get(item.field) / me.getYearTotal(record) * 100;

                                tooltip.setHtml(manufacturer + ' en el ' + record.get('year') + ': ' +
                                    percent.toFixed(1) + '%');
                            }
                        }
                    }]
                }]
            },{
                title: 'Total Proyectos <b>(2016)</b>',
                flex: 4,
                items: [{
                    xtype: 'polar',
                    reference: 'chart',
                    innerPadding: 40,
                    width: '100%',
                    height: 250,
                    store: {
                        fields: ['os', 'data1'],
                        data: [{
                            os: 'Plan',
                            data1: 45
                        }, {
                            os: 'Real',
                            data1: 15
                        }]
                    },
                    theme: 'Muted',
                    interactions: ['itemhighlight', 'rotatePie3d'],
                    legend: {
                        docked: 'bottom'
                    },
                    series: [{
                        type: 'pie3d',
                        angleField: 'data1',
                        donut: 30,
                        distortion: 0.6,
                        highlight: {
                            margin: 40
                        },
                        label: {
                            field: 'os'
                        },
                        tooltip: {
                            trackMouse: true,
                            renderer: me.onSeriesTooltipRender
                        }
                    }]
                }]
            }]
        },{
            layout: {
                type: 'hbox'
            },
            bodyPadding: 5,
            defaults: {
                frame: true,
                bodyPadding: 5
            },
            items: [{
                title: 'Ingresos anuales <b>(2013-2016)</b>',
                flex: 8,
                margin: '0 10 0 0',
                items: [{
                    xtype: 'cartesian',
                    flipXY: true,
                    reference: 'chart',
                    width: '100%',
                    height: 200,
                    insetPadding: '40 40 30 40',
                    innerPadding: '3 0 0 0',
                    theme: {
                        type: 'muted'
                    },
                    store: {
                        fields: ['country', 'agr', 'ind', 'ser'],
                        data: [
                            { country: '2013', agr: 188217, ind: 2995787, ser: 12500746},
                            { country: '2014', agr: 918138, ind: 3611671, ser: 3792665},
                            { country: '2015', agr: 71568,  ind: 1640091, ser: 4258274},
                            { country: '2016', agr: 17084,  ind: 512506,  ser: 1910915}
                        ]
                    },
                    animation: {
                        easing: 'easeOut',
                        duration: 500
                    },
                    interactions: ['itemhighlight'],
                    axes: [{
                        type: 'numeric3d',
                        position: 'bottom',
                        fields: 'ind',
                        maximum: 4000000,
                        majorTickSteps: 10,
                        renderer: me.onAxisLabelRender,
                        grid: {
                            odd: {
                                fillStyle: 'rgba(245, 245, 245, 1.0)'
                            },
                            even: {
                                fillStyle: 'rgba(255, 255, 255, 1.0)'
                            }
                        }
                    }, {
                        type: 'category3d',
                        position: 'left',
                        fields: 'country',
                        label: {
                            textAlign: 'right'
                        },
                        grid: true
                    }],
                    series: [{
                        type: 'bar3d',
                        xField: 'country',
                        yField: 'ind',
                        style: {
                            minGapWidth: 10
                        },
                        highlight: true,
                        label: {
                            field: 'ind',
                            display: 'insideEnd',
                            renderer: me.onSeriesLabelRender
                        },
                        tooltip: {
                            trackMouse: true,
                            renderer: me.onSeriesTooltipRender1
                        }
                    }],
                    sprites: [{
                        type: 'text',
                        fontSize: 22,
                        width: 100,
                        height: 30,
                        x: 40, // the sprite x position
                        y: 20  // the sprite y position
                    }]
                }]
            },{
                title: 'Autenticación',
                flex: 4,
                items: [{
                    xtype: 'form',
                    url: '../login_check',
                    standardSubmit: true,
                    height: 200,
                    bodyPadding: 15,
                    fieldDefaults: {
                        labelStyle: 'font-weight:bold; font-size:14px; text-shadow: 0 1px 0 #fff;',
                        fieldStyle: 'font-size:14px;',
                        height: 35,
                        anchor: '100%',
                        allowBlank: false
                    },
                    defaultType: 'textfield',
                    items: [{
                        allowBlank: false,
                        fieldLabel: 'Usuario',
                        emptyText: 'Alias del usuario',
                        enableKeyEvents: true,
                        selectOnFocus: true,
                        maskRe: /[a-z\.\ñ\á\é\í\ó\ú]/,
                        regex: /[a-z]/,
                        id: 'login-textfield-usuario',
                        name: '_username'
                    },{
                        allowBlank: false,
                        fieldLabel: 'Contraseña',
                        emptyText: 'Contraseña',
                        inputType: 'password',
                        id: 'login-textfield-password',
                        name: '_password'
                    }],
                    buttons: [{ text:'Iniciar Sesión', iconCls: 'fa fa-key', width: 130, height: 35, id: 'login-button' }]
                }]
            }]
        }];
        // Carga nuestra configuaración y se la pasa al componente del que heredamos.
        me.callParent(arguments);
    },
    onAxisLabelRender: function (axis, label, layoutContext) {
        return Ext.util.Format.number(layoutContext.renderer(label) / 100, '0,000');
    },

    onSeriesLabelRender: function (v) {
        return Ext.util.Format.number(v / 100, '0,000');
    },

    onSeriesTooltipRender1: function (tooltip, record, item) {
        var formatString = '0,000 (miles de CUP)';

        tooltip.setHtml(record.get('country') + ': ' +
            Ext.util.Format.number(record.get('ind'), formatString));
    },
    onSeriesTooltipRender: function (tooltip, record, item) {
        tooltip.setHtml(record.get('os') + ': ' + record.get('data1'));
    },

    getYearTotal: function (record) {
        var map = this.yearTotal,
            year = record.get('year'),
            total = map[year];

        if (!total) {
            map[year] = total =
                record.get('to') +
                record.get('gm') +
                record.get('vw') +
                record.get('fo');
        }
        return total;
    },

    onAxisLabelRender1: function (axis, label, layoutContext) {
        return layoutContext.renderer(label) + '%';
    }
});