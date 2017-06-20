$(document).ready(function() {
    //Organizadores
    $("#organizadores-slider").lightSlider({
    	item:8,
    	loop:true,
		auto: true,
    	slideMove:1,
    	slideMargin: 10,
    	controls: true,
    	pager: true,
    	easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
    	speed:600,
    	responsive : [
    		{
    			breakpoint:800,
    			settings: {
    				item:3,
    				slideMove:1,
    				slideMargin:6,
    			  }
    		},
    		{
    			breakpoint:480,
    			settings: {
    				item:3,
    				slideMove:1
    			  }
    		},
    	]
    });

	$('[data-toggle="tooltip"]').tooltip();

	//Participants - updateActive
    $('#content-page').on('click', '.update-active-participant', function(event){
        event.preventDefault();
        
        var value_send = "",
            icon = "",
			title = "",
            element = $(this),
            id = $(this).attr('data-id'),
            value = $(this).attr('data-active');
            
        if (value == '1') {
            value_send = '0';
            icon = '<span class="text-red glyphicon glyphicon-remove"></span>';
			title = "No descargado";
            
        } else {
            value_send = '1';
            icon = '<span class="text-green glyphicon glyphicon-ok"></span>';
			title = "Descargado";
        }
            
        $.ajax({
    		type:"POST", 
    		url: basePath + 'admin/participants/update-active?id=' + id + '&active=' + value_send,
    		dataType:"html",
    		cache: false,
    		beforeSend: function (){
    		    element.html('<i class="fa fa-spinner fa-spin fa-fw"></i>');
    		},
    		success: function (data) {
    		    element.attr('data-active', value_send);
    		},
    		complete: function (){
    		    element.html(icon);
				element.attr('data-original-title', title);
    		},
    		error: function (jqXHR, textStatus) {
    			alert( "Request failed: " + textStatus );
    		}
    	});
        
    });

	//Assistants - updateActive
    $('#content-page').on('click', '.update-active-assistant', function(event){
        event.preventDefault();
        
        var value_send = "",
            icon = "",
			title = "",
            element = $(this),
            id = $(this).attr('data-id'),
            value = $(this).attr('data-active');
            
        if (value == '1') {
            value_send = '0';
            icon = '<span class="text-red glyphicon glyphicon-remove"></span>';
			title = "No descargado";
            
        } else {
            value_send = '1';
            icon = '<span class="text-green glyphicon glyphicon-ok"></span>';
			title = "Descargado";
        }
            
        $.ajax({
    		type:"POST", 
    		url: basePath + 'admin/assistants/update-active?id=' + id + '&active=' + value_send,
    		dataType:"html",
    		cache: false,
    		beforeSend: function (){
    		    element.html('<i class="fa fa-spinner fa-spin fa-fw"></i>');
    		},
    		success: function (data) {
    		    element.attr('data-active', value_send);
    		},
    		complete: function (){
    		    element.html(icon);
				element.attr('data-original-title', title);
    		},
    		error: function (jqXHR, textStatus) {
    			alert( "Request failed: " + textStatus );
    		}
    	});
        
    });

});