<?php
session_start();

//print "<P>Home for " . $_SESSION['user'] . "</P>";

//print "<P>session: menu = " . $_SESSION['menu'] . "</P>";
?>
<STYLE>

.meter { 
  height: 40px; 
  position: relative;
  background: #FFFFFF;
  padding: 15px;
  box-shadow: inset 0 -1px 1px rgba(255, 255, 255, 0.3);
  border-top: 15px solid #FFA07A;
  border-left: 15px solid #F08080;
  border-right: 15px solid #F08080;
  border-bottom: 15px solid #FFA07A;
}

.meter > span {
  display: block;
  height: 110%;
  border-top-right-radius: 8px;
  border-bottom-right-radius: 8px;
  border-top-left-radius: 20px;
  border-bottom-left-radius: 20px;
  background-color: rgb(43,194,83);
  box-shadow: 
    inset 0 13px 9px  rgba(255,255,255,0.4),
    inset 0 -10px 6px rgba(0,0,0,0.4);
  position: relative;
  overflow: hidden;
}
</STYLE>
<font size="10" style="color:LightCoral">Progress Bar:</font>
<div class="meter">
  <div style="position:absolute; right:0; top:-114px;"><IMG style="border:3px groove gold;" src="celebration.png" width="50"></div>
  <span style="width: 25%"></span> 
</div>
<div style="right:200px; left:200px; top:510px;"><font size="5" style="color:white"> TARGET GOAL: </font></div>

<font size="4" style="color:LightCoral"><P>Calorie Counter is a tool that allows you to track the amount of calories <BR> and other macronutrients you eat. Calorie Counter also allows you to <BR> input activities you perform and will calculate how many calories you <BR> burn while doing them. Set goals to help motivate yourself and track <BR> your progress towards your new goals using Calorie Counter.</P></font>

<table border='15'>  
    <td><IMG src="workout1.jpg" width="400"></td>
</table>
<font size="2" style="color:gray">Hit personal fitness goals to help you become the best version of who YOU want to be.</font>

<table border='15'>
  <td><IMG src="workout2.jpg" width="400"></td>
</table>

<font size="3" style="color:gray">Join Calorie Counter with friends to get the best of both worlds!</font>

<table border='15'>
  <td><IMG src="workout3.jpg" width="400"></td>
</table>
