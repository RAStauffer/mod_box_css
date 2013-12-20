mod_box_css
===========

mod_box_css Joomla Module

Started with the Joomla Hello World Tutorial to created this Joomla module.

Module is quite simple and allows parameterized HTML and CSS.
HTML and CSS code is entered when setting up the module in Joomla Administrator.

Example
-------
styled drop shadow boxes which display content

HTML
----
<p><span id="txtBold">Sample Text</span> Sample content<p>
<img src="images/imag005.jpg" width="437" height="206" border="0" alt="Alt text" title="title">
<p>
Honest, Dependable, Knowledgeable, Experienced, Quality Products, & Excellent Customer Service.
</p>
<p>
This is our commitment to you, Our Valued Customer.
</p>

CSS
---
/* homeBigBox extension from site definition (defined elsewhere in site CSS file
   allows customizing font-size per module */
#homeBigBox {
  font-family:"Verdana";
  font-size:12pt;
}
#txtBold {
  font-weight:bold;
}
