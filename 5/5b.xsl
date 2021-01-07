<?xml version = "1.0"?>
<xsl:stylesheet version = "1.0" xmlns:xsl = "http://www.w3.org/1999/XSL/Transform" xmlns="http://www.w3.org/1999/xhtml">
<xsl:template match = "RU">
<html><head><title> Style sheet for 5b.xml </title>
</head><body style="background-color:rgb(163, 192, 194); font-size:20px;color:brown">
<h2 align="center" > Shopping </h2>
<span  style = "font-style: italic; color: blue;font-size:40px; margin-left:45%"> Books:
</span> <xsl:value-of select = "b" /> <br />

 <span  style = "font-style: italic; color: blueviolet;font-size:40px; margin-left:45%"> Electronics:
</span> <xsl:value-of select = "e" /> <br />
<span  style = "font-style: italic; color: red;font-size:40px; margin-left:45%"> Stationary:
</span> <xsl:value-of select = "s" /> <br />
<span  style = "font-style: italic; color: red;font-size:40px; margin-left:45%"> Commodities:
</span> <xsl:value-of select = "co" /> <br />

 <span  style = "font-style: italic; color: black;font-size:40px; margin-left:45%"> Clothes:
</span> <xsl:value-of select = "c" /> <br />
 <span  style = "font-style: italic; color: rgb(53, 18, 53);;font-size:40px; margin-left:45%"> Others:
</span> <xsl:value-of select = "o" /> <br />



 </body>
</html>
</xsl:template>
</xsl:stylesheet>