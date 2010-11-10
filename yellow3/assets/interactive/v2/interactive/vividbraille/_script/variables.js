/*******************************************************************************

	JAVA FILE:
	MAGNOLIA FILMS
	
*******************************************************************************/
	function FO (url, wmodeVar, divID){
		var nameVar = {
			movie: url,
			width:"100%",
			height:"100%",
			wmode:wmodeVar,
			majorversion:"8",
			build:"0",
			xi:"true"
		};
                    
		UFO.create(nameVar, divID);
	};                   
/*******************************************************************************

	REPLACE/ HIDE/ SHOW 
	CONTENT DIVS
	
*******************************************************************************/
	function showHide(elementid){
		if (document.getElementById(elementid).style.display == 'none'){
			document.getElementById(elementid).style.display = '';
		} else {
			document.getElementById(elementid).style.display = 'none';
		}
	}
	
	function visibleFalse(name,vis){
		document.getElementById(name).style.visibility=vis;
	}
					
	function divFloat(div, vid){
		document.getElementById(div).style.visibility= vis;
		// ["hidden"|| "visible" || "collapse"]
	}
			
	function changeContent(divID, swf){
		document.getElementById(divID).innerHTML = swf;
	}	
			
/*******************************************************************************


	
*******************************************************************************/