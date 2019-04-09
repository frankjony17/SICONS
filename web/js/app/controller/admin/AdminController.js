
Ext.define('SCS.controller.admin.AdminController', {
    extend: 'Ext.app.Controller',

    control: {
        'viewport-admin': { resize: "resizeViewport" },
        '#admin-logout': { click: "logout" },
        'roles-grid': { resize: "resizeGrid" },
        'users-grid': { resize: "resizeGrid" }
    },
    /* when Resize Viewport */
    resizeViewport: function (viewport, width, height) {
        var tree = Ext.getCmp('west-nomenclador-tree');
        /* Tree Nomenclador and Tree Seguridad */
        var h1 = (height/100) * 60, h2 = height - h1;
        if (h2 > 120) {
            h1 += h2 - 205;
        }
        tree.setHeight(h1);
    },
    /* When resize Grid */
    resizeGrid: function (grid) {
        var centerpanel = Ext.getCmp('center-panel-id');
        grid.setHeight(centerpanel.getHeight() - 47);
    },
    /* Logout */
    logout: function () {
        location.href = '../../app.php/logout';
    }
});