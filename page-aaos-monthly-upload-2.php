<html>
<head>
	<meta charset="utf-8">
	<title><?php bloginfo('id'); ?></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<style>
	.myHTML{
		font-weight: normal;
	}
	.myBody {
		font-weight: normal;
	}
</style>
<?php
	global $post;
	?>
<body>	
<div class="container bg-info">
	<div class="text-center">
		<h2> HTML Prettifier </h2>
	<h3>Please Input Metadata:</h3><br>
	</div>
<form action="GET" id="myform" action="">

  <div class="form-group">
		<label for="year">Year</label>
		<select type="text" class="form-control" id="year" name ="year">
			<option value="2019">2019</option>
			<option value="2020">2020</option>
			<option value="2021">2021</option>
			<option value="2022">2022</option>
			<option value="2023">2023</option>
			<option value="2024">2024</option>
			<option value="2025">2025</option>
		</select>	 
	</div>
	<div class="form-group">
		<label for="month">Month</label>
		<select class="form-control" id="month" name="month">
			 <option value="01">January</option>
			<option value="02">February</option>
			<option value="03">March</option>
			<option value="04">April</option>
			<option value="05">May</option>
			<option value="06">June</option>
			<option value="07">July</option>
			<option value="08">August</option>
			<option value="09">September</option>
			<option value="10">October</option>
			<option value="11">November</option>
			<option value="12">December</option>
		</select>	
  </div>
	<div class="form-group">
		<label for="Volume">Volume</label>
		<select type="text" class="form-control" id="volume"  name="volume">
			 <option value="01">01</option>
			<option value="02">02</option>
			<option value="03">03</option>
			<option value="04">04</option>
			<option value="05">05</option>
			<option value="06">06</option>
			<option value="07">06</option>
			<option value="08">08</option>
			<option value="09">09</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
		</select>	
  </div>

  <div class="form-group">
		<label for="issue">Issue</label>
		<select type="text" class="form-control" id="issue"name="issue">
			<option value="01">01</option>
			<option value="02">02</option>
			<option value="03">03</option>
			<option value="04">04</option>
			<option value="05">05</option>
			<option value="06">06</option>
			<option value="07">06</option>
			<option value="08">08</option>
			<option value="09">09</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
		</select>	
  </div>
  <div class="form-group">
		<label for="sub">Subspecialties</label>
		<select type="text" class="form-control" id="sub" name ="sub">
			 <option value="arthroscopy ">Arthroscopy </option>
			<option value="foot & ankle">Foot and Ankle</option>
			<option value="hand">Hand</option>
			<option value="hip">Hip</option>
			<option value="knee">Knee</option>
			<option value="other">Other</option>
			<option value="pediatrics">Pediatrics</option>
			<option value="shoulder & Elbow">Shoulder & Elbow</option>
			<option value="spine">Spine</option>
			<option value="sports">Sports</option>
			<option value="total joint">Total Joint</option>
			<option value="trauma">Trauma</option>
		</select>	
  </div>
  <div class="form-group">
		<label for="dep">Departments </label>
		<select type="text" class="form-control" id="dep" name="dep">
			 <option value="Special Coverage">Special Coverage</option>
			<option value="Cover">Cover</option>
			<option value="Advocacy">Advocacy</option>
			<option value="Clinical">Clinical </option>
			<option value="Commentary">Commentary </option>
			<option value="Diversity">Diversity </option>
			<option value="Outside the Office">Outside the Office </option>
			<option value="Practice Management">Practice Management </option>
			<option value="Quality & Research">Quality & Research </option>
			<option value="Professional Development">Professional Development </option>
			<option value="Your AAOS">Your AAOS</option>
			<option value="International">International </option>
			<option value="Research & Quality">Research & Quality</option>
		</select>	
  </div>
  <div class="form-group">
    <label for="month">Article Display Title </label>
    <input type="text" class="form-control" id="artText" name="artText" placeholder="Article Display Title">
  </div>
  <div class="form-group">
    <label for="month">Article-ID </label>
    <input type="text" class="form-control" id="art" name="art" placeholder="Article-ID">
  </div>
  <div class="form-group">
    <label for="month">Author </label>
    <input type="text" class="form-control" id="author" name="author" placeholder="Author">
  </div>
  <div class="form-group">
    <label for="month">Summary </label>
    <input type="text" class="form-control" id="sum" name="sum" placeholder="First sentence">
  </div>
  <br><br>
  <input class="btn btn-success mt-5" id="btn" type="button" value="Validate Data"  >
  <input class="btn btn-danger mt-5" id="reset-btn" type="button" value="Reset Data"  ><br>
  <br><br>
  <div class="form-group">
  <label class="mt-5" for="">Upload Your File </label><br><br>
<input type="file" class="form-control-file" id="file1" id="file1"><br>
</div>
<div class="form-group">
  <label class="mt-5" for="">Save File As: </label>
	<input  type="text" class="form-control" id="rename" name="rename" placeholder="Save as (example: cover01.html)" /><br>
</div>
</form>
<h4>Here is the uploaded file:</h4>	 
<div class="jumbotron jumbotron-fluid" id="info2"></div>
<input class="btn btn-primary mt-5" type="button" id="dwn-btn" value="Download file"/><br><br><br><br>
</div>
	<script>
			function validateForm() {
			var Year = document.forms["myform"]["year"];               
			var Month = document.forms["myform"]["month"];    
			var Volume = document.forms["myform"]["volume"];  
			var Issue =  document.forms["myform"]["issue"];  
			var Author = document.forms["myform"]["author"];  
			var ArtText = document.forms["myform"]["artText"];
			var Art = document.forms["myform"]["art"];  
			var Sum =  document.forms["myform"]["sum"];  
			var Dep = document.forms["myform"]["dep"];  
			var Sub = document.forms["myform"]["sub"]; 
			if (Year.value == "")                                  
			{ 
				window.alert("Please enter year (2019,2020,.."); 
				Year.focus(); 
				return false; 
			} 
			
			if (Month.value == "")                               
			{ 
				window.alert("Please enter month (1-12)"); 
				Month.focus(); 
				return false; 
			} 
			
			if (Volume.value == "")                                   
			{ 
				window.alert("Please enter volume (01-24"); 
				Volume.focus(); 
				return false; 
			} 
		
			if (Issue.value == "")                 
			{ 
				window.alert("Please enter issue (01-24)"); 
				Issue.focus(); 
				return false; 
			} 
		
			if (Author.value =="")                 
			{ 
				window.alert("Please enter article's author"); 
				Author.focus(); 
				return false; 
			} 
		
			if (ArtText.value == "")                           
			{ 
				window.alert("Please enter Article Display Title"); 
				ArtText.focus(); 
				return false; 
			} 
		
			if (Art.value == "")                        
			{ 
				window.alert("Please enter Article-ID"); 
				Art.focus(); 
				return false; 
			} 
			if (Sub.value =="")                 
			{ 
				window.alert("Please enter subcategory."); 
				Sub.focus(); 
				return false; 
			} 
		
			if (Dep.value == "")                           
			{ 
				window.alert("Please enter Department."); 
				Dep.focus(); 
				return false; 
			} else{
				window.alert("Everything is ok! Please choose a file"); 
				return true;
				
			}

		}

		function resetForm(){
			document.getElementById("myform").reset();
		}
		document.getElementById("btn").addEventListener("click", validateForm);
		document.getElementById("reset-btn").addEventListener("click", resetForm);

		//Function That Reads line by line
    document.getElementById('file1').onchange = function(){
    var file = this.files[0];
		var reader = new FileReader();
		reader.onload = function(progressEvent){
		var result = this.result;
		// By lines
		var lines = this.result.split('\n');
		var g = progressEvent.target.result; 
		var xhr = new XMLHttpRequest();
		xhr.onload = function() {
		
		if(xhr.status === 200) {
			$("#info2").html(g).innerHTML = xhr.responseText;
			
			for(var line = 0; line < lines.length; line++){
				
			$(document).ready(function() {

				var phead = $(".Heading-2");
				var head = $(".Header1");
				var ital = $(".Normal_Italic");
				var byline = $(".byline");
				var char = $(".CharOverride-3");
				var img = $("img");
				var cont =$("#_idContainer001");
				var normal = $('.Normal');

				if(line = $(".Heading-2")){
					phead.css("font-weight","bold");
					head.css("font-weight","bold");
				}
				if(line = $("p:contains(editor’s note:)")){
					$("p:contains(editor’s note:)").css("font-style", "italic");
					(function () { 
					var node = $("p").contents().filter(function () { 
						return this.nodeType == 3 
						}).first(),
						text = node.text(),
						first = text.slice(0, text.indexOf(":"));
					if (!node.length)
						return;
					node[0].nodeValue = text.slice(first.length);
						node.before('<strong>' + first + '</strong><br/>');
					})();	
					}
					if(line = $(".Header1")){
						head.css("font-weight","bold");
					}
					if(line = $(".Normal-Italic")){
						ital.css("font-style", "italic");
					}
					if(line = $(".byline")){
						byline.remove();
					}
					if( line = $("span")){
						$("br").remove();
						char.css("font-weight","bold");
						char.append("<br/><br/>");
						char.prepend("<br/><br/>");
					} 
					if(line = $("img")) {
						img.remove();
					}
					

			});
			console.log($("#info2").html());
			var finalHtml =$('#info2').html();
		

			/* 	
			localStorage.setItem('myFile', JSON.stringify(finalHtml));
			localStorage.getItem('myFileLocal');
			var output = ''; 
			for (var value in localStorage) {	
			output = output+(localStorage[value]);
			} */

		}
		
		//Creating missing elements 
		$("meta").remove();
		$("title").remove();
		var html = document.createElement('html')
		
		$("#_idContainer001").wrap(html);
		$("#_idContainer000").wrap(html);
		$("html").addClass("myHTML");

		var body = document.createElement('body')
		$("#_idContainer001").wrap(body);
		$("#_idContainer000").wrap(body);
		$("body").addClass("myBody");
		
		$("head").children().remove();
		$("title").remove()
		var head = document.createElement('head')
		var meta = document.createElement('meta')
		//var doctype = document.createElement('!DOCTYPE')
		var title = document.createElement('title')
		var titleText = document.createTextNode('AAOS_Now');
		title.appendChild(titleText)
		$(".myHTML").prepend(head)
		$("head").prepend(title)
		$("head").prepend(meta)
		$("meta").attr("charset", "utf-8")
		$("html").attr("xmlns", "http://www.w3.org/1999/xhtml")

		//$("!DOCTYPE").insertBefore($("html"))
		// Form variables 
		/* 	<!--
		Periodical Type: AAOS Now<br>
		Article-ID:cover01<br>
		Article Display Title: Kristy L. Weber, MD, Begins Her  Term as AAOS President<br>
		Summary: History took center stage at the AAOS 2019 <br>
		Year: 2019<br>
		Month: 5<br>
		Issue: 5<br>
		Volume: 13<br>
		Article Authors: Terry Stanton<br>
		Subspecialties: <br>
		Departments: <br> 
		-->*/

		//$('#meta').append(JSON.stringify(counter) + '\n\n');
		var year = document.getElementById('year').value;
		var month = document.getElementById('month').value;
		var volume = document.getElementById('volume').value;
		var issue = document.getElementById('issue').value;
		var sub = document.getElementById('sub').value;
		var dep = document.getElementById('dep').value;
		var art = document.getElementById('art').value;
		var author = document.getElementById('author').value;
		var sum = document.getElementById('sum').value;
		var artText= document.getElementById('artText').value;
		// var sum = document.getElementsByTagName('p');
		// var sText = sum.first().textContent;
		//var ArtDisTitle = document.getElementsByClassName('Header1');
		//var artText = ArtDisTitle.first().textContent;
		
		//META DATA 
		$(".myBody").prepend('<!--Departments:' + dep + '-->')
		$(".myBody").prepend('<!--Subspecialties:' + sub + '-->')
		$(".myBody").prepend('<!--Article Authors:' + author +'-->')
		$(".myBody").prepend('<!--Volume:' + volume + '-->')
		$(".myBody").prepend('<!--Issue:' + issue + '-->')
		$(".myBody").prepend('<!--Month:' + month +'-->')
		$(".myBody").prepend('<!--Year:' + year + '-->')
		$(".myBody").prepend('<!--Summary:' + sum +'-->') 
		$(".myBody").prepend('<!--Article Display Title:' + artText + '-->')
		$(".myBody").prepend('<!--Article-ID:' + art +'-->') 
		$(".myBody").prepend('<!--Periodical Type: AAOS Now<br> --> ') 
		
		}				
	};
	
	xhr.open('GET','', true );

	xhr.send(null);
	$('#dwn-btn').click(function(){
		var fileName = document.getElementById("rename").value;
			// Save the page's HTML to a file that is automatically downloaded.

			// We make a Blob that contains the data to download.
			var file = new window.Blob([$('#info2').html()], { type: "text/html" });
			var URL = window.webkitURL || window.URL;	

			// This is the URL that will download the data.
			var downloadUrl = URL.createObjectURL(file);
			var a = document.createElement("a");
		
			// This sets the file name.
			a.download = fileName;
			a.href = downloadUrl;

			// Actually perform the download.
			document.body.appendChild(a);
			a.click();
			document.body.removeChild(a);	
				
			})
};
reader.readAsText(file);
}
	
	</script>	
	
</body>
</html>
