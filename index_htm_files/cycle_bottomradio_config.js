var xaraSwidgets_cycleBottomradioTemplates = {

	entry:		'<a href="{link}">'
			+	'<img src="{image}"  border="0" class="cycleBottomradio_slideshow" />'
			+	'</a>',
			
	main:	 '<div id="{component_id}OuterDiv" class="cycle_bottomradio">'
			+ 	'{entryhtml}'
			+ '</div>'	
			+ 	'<div class="cycleBottomradio_navcontainer">'
			+ 		'<div class="cycleBottomradio_nav"></div>'
			+ 	'</div>'
			
	
			
	        
};

// this is the constructor for a component
// it loops through each 'entry' in the array of data and compiles the entry template for it
// it then applies the resulting HTML to the main template before writing the whole lot to the div on the page
// it then initialises the actual jquery plugin for the div (that now contains the required HTML as a result of writing the template to it)
function xaraSwidgets_cycleBottomradioConstructor(divID, data)
{
	
	
	var entryHTML = '';
	// loop through each entry in the array and compile the entry template for it
	for(var i=0; i<data.length; i++)
	{
		entryHTML += xaraSwidgets_compileTemplate(xaraSwidgets_cycleBottomradioTemplates.entry, data[i]);
	}
	
	// now lets compile the 'main' template which acts as a wrapper for each entry
	
	var mainData = {
		component_id:divID,
		entryhtml:entryHTML
	};
	
	var mainTemplate = xaraSwidgets_compileTemplate(xaraSwidgets_cycleBottomradioTemplates.main, mainData);
	
	// now lets apply the resulting HTML for the whole component to the main DIV that was exported by XARA
	
	$('#' + divID).html(mainTemplate);
	
	
	// now we have the components DOM on the page - we can use the 'OuterDiv' as the jquery initiation point
	
	$('#' + divID + 'OuterDiv').cycle({
						
						fx: 'all', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
						pager:      '.cycleBottomradio_nav'
						
							
							
	});
}