</div>
<div class="post"><div class="top"/>

<style>
.accordion {
    background-color: #3c3c3c;
    color: #fff;
    cursor: pointer;
    padding: 15px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
	margin-top: 15px;
}

.active, .accordion:hover {
    background-color: #87CEEB;
	color: #3c3c3c;
}

.accordion:after {
    content: '\002B';
	position: absolute;
	right: 15px;
    color: #fff;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}

.active:after {
    content: "\2212";
}
.date-right {
	float: right;
	margin-right: 20px;
	font-size: 12pt;
}
.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
</style>
</br>
<h1><u>Latest News</u></h1>
<?php
mysql_connect('localhost','root','your password');
mysql_select_db('wordpress');
$query = mysql_query('SELECT * FROM wp_posts WHERE post_status="publish" ORDER BY post_date DESC');
while($output = mysql_fetch_assoc($query))
{ 
	
	$title = '<button class="accordion">'.$output['post_title'].'<div class="date-right">'.date('d-m-Y', strtotime($output['post_date'])).'</div></button>';
	echo $title;
	$topik = $output['post_content'];
	echo '<div class="panel"><br>'.$topik;
	echo '<br><hr /><center>© 2018 NUNA <br> Contact me at nunavx.rf@gmail.com</center><br></div>'; 
}
?>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>

</div>
<!-- news section -->
