var tree_data = [
{
    "text": "Parent Node",
    "children": [{
        "text": "Initially selected",
        "state": {
            "selected": false
        }
    }, {
        "text": "Custom Icon",
        "icon": "fa fa-warning icon-state-danger"
    }, {
        "text": "Initially open",
        "icon" : "fa fa-folder icon-state-success",
        "state": {
            "opened": true
        },
        "children": [
            {"text": "Another node", "icon" : "fa fa-file icon-state-warning"}
        ]
    }, {
        "text": "Another Custom Icon",
        "icon": "fa fa-warning icon-state-warning"
    }, {
        "text": "Disabled Node",
        "icon": "fa fa-check icon-state-success",
        "state": {
            "disabled": true
        }
    }, {
        "text": "Sub Nodes",
        "icon": "fa fa-folder icon-state-danger",
        "children": [
            {"text": "Item 1", "icon" : "fa fa-file icon-state-warning"},
            {"text": "Item 2", "icon" : "fa fa-file icon-state-success"},
            {"text": "Item 3", "icon" : "fa fa-file icon-state-default"},
            {"text": "Item 4", "icon" : "fa fa-file icon-state-danger"},
            {"text": "Item 5", "icon" : "fa fa-file icon-state-info"}
        ]
    }]
},
{"text": "Item 1", "icon" : "fa fa-file icon-state-warning"},
{"text": "Item 1", "icon" : "fa fa-file icon-state-warning"},
{"text": "Item 1", "icon" : "fa fa-file icon-state-warning"}
];

var UITree = function () {

    var contextualMenuSample = function() {

        $("#tree_3").jstree({
            "core" : {
                "themes" : {
                    "responsive": true,
                    "variant" : "large"
                }, 
                // so that create works
                "check_callback" : true,
                'data': tree_data
            },
            "types" : {
                "default" : {
                    "icon" : "fa fa-folder icon-state-warning icon-lg"
                },
                "file" : {
                    "icon" : "fa fa-file icon-state-warning icon-lg"
                }
            },
            "state" : { "key" : "demo2" },
            "plugins" : ["contextmenu", "dnd", "state", "types", "wholerow", "checkbox", "types" ],
            "checkbox" : {
                "keep_selected_style" : false
            }
        });
    
    }

    return {
        init: function () {
            contextualMenuSample();
        }
    };
}();

jQuery(document).ready(function() {    
   UITree.init();
});
