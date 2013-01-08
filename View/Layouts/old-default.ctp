<?php
/*
  default.thtml design for CakePHP (http://www.cakephp.org)
  ported from http://contenteddesigns.com/ (open source template)
  ported by Shunro Dozono (dozono :@nospam@: gmail.com)
  2006/7/6
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>CakePHP : The PHP Rapid Development Framework :: <?php echo $title_for_layout?></title>
<?php echo $this->Html->charset();?>
<meta name="description" content="Website description" />
<meta name="keywords" content="keyword1,keyword2,keyword2,keyword4" />
<?php echo $this->Html->css('cake.forms', 'stylesheet', array("media"=>"all" ));?>

<?php echo $this->Html->css('contented1', 'stylesheet', array("media"=>"all" ));?>
<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
<div id="header">

<div id="title">Contented1</div>

<div id="contact"><a href="#">CONTACT US</a></div>

<div id="slogan">Contented: How a content-filled design feels</div>

</div>

<div id="nav">
<a class="selected" href="http://cakephp.org">Home</a>
<a href="http://cakephp.org/downloads/">Downloads</a>
<a href="http://manual.cakephp.org">Manual</a>
<a href="http://api.cakephp.org/">API</a>
<a href="http://bakery.cakephp.org">Bakery</a>
<a href="https://trac.cakephp.org">Trac</a>
<a href="http://cakeforge.org">CakeForge</a>
</div>

<div id="content">
<div id="maincontent">
<?php if ($this->session->check('Message.flash')) $this->session->flash(); ?>
<?php echo $content_for_layout?>

<p>
Contented1 is valid 
<a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> 
and valid 
<a href="http://validator.w3.org/check?uri=referer">XHTML 1.0
strict</a>.
It's been tested for consistent appearance on:
</p>



<p>
If you have comments or questions, please contact us at <a
href="http://www.contenteddesigns.com">Contented Designs</a>.  Thanks!
</p>

</div>

<div id="sidecontent">

</div>
</div>

<div id="footer">

<div id="copyrightdesign">
Copyright &copy; 2006 Your Name |
Design by <a href="http://ContentedDesigns.com">Contented Designs</a>
</div>

<div id="footercontact">
<a href="#">Contact Us</a>
</div>

</div>

<p>
 CakePHP : <a href="http://www.cakefoundation.org/pages/copyright/">&copy; 2006 Cake Software Foundation, Inc.</a>
</p>
<a href="http://www.w3c.org/" target="_new">
 <?php echo $this->Html->image('w3c_css.png', array('alt'=>"valid css", 'border'=>"0"))?>
</a>
<a href="http://www.w3c.org/" target="_new">
 <?php echo $this->Html->image('w3c_xhtml10.png', array('alt'=>"valid xhtml", 'border'=>"0"))?>
</a>
<a href="http://www.cakephp.org/" target="_new">
 <?php echo $this->Html->image('cake.power.png', array('alt'=>"CakePHP : Rapid Development Framework", 'border'=>"0"))?>
</a>

<?php echo $cakeDebug;?>
</body>
</html>
