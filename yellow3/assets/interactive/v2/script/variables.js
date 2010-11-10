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

	SPRY EFFECTS FUNCTION:
	
*******************************************************************************/
	function mySpry (div, duration, from, to, toggle){
		Spry.Effect.DoBlind( div,{ duration: duration, from:from, to:to, toggle:toggle});
		return true;
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

	SWAP iFrame
	
*******************************************************************************/
	function getDocHeight(doc) {
		var docHt = 0, sh, oh;
		if (doc.height) docHt = doc.height;
		else if (doc.body) {
			if (doc.body.scrollHeight) docHt = sh = doc.body.scrollHeight;
			if (doc.body.offsetHeight) docHt = oh = doc.body.offsetHeight;
			if (sh && oh) docHt = Math.max(sh, oh);
		}
		return docHt;
	}
	
	function setIframeHeight(iframeName) {
		var iframeWin = window.frames[iframeName];
		var iframeEl = document.getElementById? document.getElementById(iframeName): document.all? document.all[iframeName]: null;
		if ( iframeEl && iframeWin ) {
			iframeEl.style.height = "auto"; // helps resize (for some) if new doc shorter than previous  
			var docHt = getDocHeight(iframeWin.document);
			// need to add to height to be sure it will all show
			if (docHt) iframeEl.style.height = docHt + 30 + "px";
		}
	}
	
	function goSetHeight() {
		if (parent == window) return;
		else parent.setIframeHeight('ifrm');
	}
	
	function loadIframe(iframeName, url) {
		if ( window.frames[iframeName] ) {
			window.frames[iframeName].location = url;   
			return false;
		}
		else return true;
	}
/*******************************************************************************

	Random BG-Color
	
*******************************************************************************/
	
	Math.randomMax = function(maxVal,asFloat){
		var val = Math.random()*maxVal;
		return asFloat?val:Math.round(val);
	}
	
	function color(ranColor) {
		//var theNumber = Math.randomMax(9);
		//var colorNum = theNumber+theNumber+theNumber+theNumber;
		
		
		//var color = colorNum + "00";
		//alert(colorNum)
		
		var page = new Array();
			page[0]="#CCEEDD";
			page[1]="#99AAAA";
			page[2]="#CCCCAA";
			page[3]="#555555";
			
		//alert("reload");
		//window.location.reload();
		document.body.style.background = ranColor;
		//document.body.sdmenu.style.background = ranColor;
 	}
 	
 /*******************************************************************************


	
*******************************************************************************/