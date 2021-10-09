/*!
 * This code isn't ready for release
 *
 * jaralax library
 * http://www.x833.com/
 *
 * Copyright 2012, Jacko Hoogeveen
 * Dual licensed under the MIT or GPL Version 2 licenses.
 *
 *
 *
 * Includes 
 * jquery
 * http://jquery.org/license
 *
 * Date: 2/4/2012
 */
X234=function(){this.x6756=[];this.animations=[];this.defaultValues=[];this.x8886=0;this.height=parseInt(jQuery("body").css("height"),10);this.target=$(window);this.scrollSpace=this.height-this.target.innerHeight();this.target.bind('scroll',{me:this},this.x9874);};X234.prototype.x7654=function(x8886){if(x8886>1){x8886=1;}else if(x8886<0){x8886=0;}
var amountOfDefaults=this.defaultValues.length;for(j=0;j<amountOfDefaults;j++){this.defaultValues[j].x9239(x8886);}
var amountOfAnimations=this.animations.length;for(k=0;k<amountOfAnimations;k++){this.animations[k].x9239(x8886);}
this.x8886=x8886;}
X234.prototype.x9874=function(event){var jaralax=event.data.me;var y=jaralax.target.scrollTop();;var x8886=y/jaralax.scrollSpace;if(x8886>1){x8886=1;}
var amountOfDefaults=jaralax.defaultValues.length;for(j=0;j<amountOfDefaults;j++){jaralax.defaultValues[j].x9239(x8886);}
var amountOfAnimations=jaralax.animations.length;for(k=0;k<amountOfAnimations;k++){jaralax.animations[k].x9239(x8886);}
this.x8886=x8886;};X234.x8456=function(object){if(!object){throw new Error("no values set.");}
if(typeof object!="object"){throw new Error("wrong data type values. expected: 'object', got: '"+typeof object+"'");}
if(object.size==0)
{throw new Error("Got an empty values object");}
return true;}
X234.prototype.x8754=function(selector,values){if(!selector){throw new Error("no selector defined.");}
if(X234.x8456(values))
{var newDefault=new X234Default(selector,values);newDefault.x9239();this.defaultValues.push(newDefault);}}
X234.prototype.x211334=function(selector,values){if(!selector){throw new Error("no selector defined.");}
if(X234.x8456(values))
{var newDefault=new X234Static(selector,values[0],values[1]);this.defaultValues.push(newDefault);}}
X234.prototype.x12343=function(selector,values)
{if(!selector){throw new Error("no selector defined.");}
if(X234.x8456(values)){if(values[0]&&values[1])
{if(values[0]["x8886"]&&values[1]["x8886"]){this.animations.push(new X234Animation(selector,values[0],values[1]));}
else
{throw new Error("no animation boundry found.");}}
else
{throw new Error("bad animation data.");}}};X234Default=function(selector,values){this.selector=selector;this.values=values}
X234Default.prototype.x9239=function(position){for(i in this.values){$(this.selector).css(i,this.values[i]);}}
X234Static=function(selector,start_values,end_values){this.selector=selector;this.values=values}
X234Static.prototype.x9239=function(position){var start;var end;if(this.start_values['x8886'].indexOf("%")>=0){start=parseInt(this.start_values['x8886'],10)/100;}
if(this.end_values['x8886'].indexOf("%")>=0)
{end=parseInt(this.end_values['x8886'],10)/100;}
if(x8886>start&&x8886<end){for(i in this.start_values){if(i!="x8886")
{$(this.selector).css(i,this.start_values[i]);}}}}
X234Position=function(selector,style,value){this.selector=selector;this.style=style;}
Paratest=function(selector,value){this.Inherits(X234Base,selector,value);}
X234Animation=function(selector,start_values,end_values){this.selector=selector;this.start_values=start_values;this.end_values=end_values;};X234Animation.prototype.x9239=function(x8886){var start;var end;var style
if(this.start_values['style']==undefined){style={easing:"linear"};}else{style=this.start_values['style'];}
if(this.start_values['x8886'].indexOf("%")>=0){start=parseInt(this.start_values['x8886'],10)/100;}
if(this.end_values['x8886'].indexOf("%")>=0)
{end=parseInt(this.end_values['x8886'],10)/100;}
if(x8886>=start&&x8886<=end){for(i in this.start_values){if(i!="x8886"&&i!="style")
{if(undefined!=this.end_values[i]){var units=GetUnits(this.start_values[i]+"");units=units.replace("-","")
var start_value=parseFloat(this.start_values[i]);var end_value=parseFloat(this.end_values[i]);var duration=end-start;var currentTime=(x8886-start);var changeInValue=end_value-start_value;var result=X234.x8127[style["easing"]](currentTime,start_value,changeInValue,duration,style["easing"]["power"]);result+=units;$(this.selector).css(i,result);}
else
{$(this.selector).css(i,this.start_values[i]);}}}}};X234.x8127={"linear":function(currentTime,beginningValue,changeInValue,duration,power){return currentTime/duration*changeInValue+beginningValue;},"easeOut":function(currentTime,beginningValue,changeInValue,duration,power){if(power==undefined){power=2;}
return((Math.pow((duration-currentTime)/duration,power)*-1)+1)*changeInValue+beginningValue;},"easeIn":function(currentTime,beginningValue,changeInValue,duration,power){if(power==undefined){power=2;}
return Math.pow(currentTime/duration,power)*changeInValue+beginningValue;},"easeInOut":function(currentTime,beginningValue,changeInValue,duration,power){if(power==undefined){power=2;}
changeInValue/=2;currentTime*=2;if(currentTime<duration){return Math.pow(currentTime/duration,power)*changeInValue+beginningValue;}else{currentTime=currentTime-duration;return((Math.pow((duration-currentTime)/duration,power)*-1)+1)*changeInValue+beginningValue+changeInValue;}
return Math.pow(currentTime/duration,power)*changeInValue+beginningValue;}}
X234.x8127["none"]=X234.x8127["linear"];GetUnits=function(string){return string.replace(/\d+/g,'');}
init=function(){x833=new X234();x833.x8754('h2, #p1, #p2, #p3',{opacity:'0'});x833.x8754('#p1, #p2, #p3',{marginLeft:'-1000px'});x833.x12343('.planet2',[{x8886:"0%",top:"70%"},{x8886:"100%",top:"40%"}]);x833.x12343('.planet1',[{x8886:"0%",top:"90%"},{x8886:"100%",top:"-5%"}]);x833.x12343('.planet0',[{x8886:"0%",top:"0%"},{x8886:"100%",top:"-10%"}]);x833.x12343('#head1',[{x8886:"0%",left:"-800px"},{x8886:"10%",left:"100px"}]);x833.x12343('#head1',[{x8886:"10%",left:"100px"},{x8886:"40%",left:"150px"}]);x833.x12343('#head1',[{x8886:"0%",opacity:"1"},{x8886:"30%",opacity:"1"}]);x833.x12343('#head1',[{x8886:"30%",opacity:"1"},{x8886:"40%",opacity:"0"}]);x833.x12343('#head2',[{x8886:"30%",left:"-800px"},{x8886:"40%",left:"100px"}]);x833.x12343('#head2',[{x8886:"40%",left:"100px"},{x8886:"70%",left:"150px"}]);x833.x12343('#head2',[{x8886:"30%",opacity:"1"},{x8886:"60%",opacity:"1"}]);x833.x12343('#head2',[{x8886:"60%",opacity:"1"},{x8886:"70%",opacity:"0"}]);x833.x12343('#head3',[{x8886:"60%",left:"-800px"},{x8886:"70%",left:"100px"}]);x833.x12343('#head3',[{x8886:"70%",left:"100px"},{x8886:"100%",left:"150px"}]);x833.x12343('#head3',[{x8886:"60%",opacity:"1"},{x8886:"100%",opacity:"1"}]);x833.x12343('#p1',[{x8886:"15%",opacity:"0"},{x8886:"20%",opacity:"1"}]);x833.x12343('#p1',[{x8886:"20%",opacity:"1"},{x8886:"30%"}]);x833.x12343('#p1',[{x8886:"30%",opacity:"1"},{x8886:"40%",opacity:"0"}]);x833.x12343('#p1',[{x8886:"15%",marginLeft:"0"},{x8886:"40%"}]);x833.x12343('#p2',[{x8886:"45%",opacity:"0"},{x8886:"50%",opacity:"1"}]);x833.x12343('#p2',[{x8886:"50%",opacity:"1"},{x8886:"60%"}]);x833.x12343('#p2',[{x8886:"60%",opacity:"1"},{x8886:"70%",opacity:"0"}]);x833.x12343('#p2',[{x8886:"45%",marginLeft:"0"},{x8886:"70%"}]);x833.x12343('#p3',[{x8886:"75%",opacity:"0"},{x8886:"80%",opacity:"1"}]);x833.x12343('#p3',[{x8886:"80%",opacity:"1"},{x8886:"100%"}]);x833.x12343('#p3',[{x8886:"75%",marginLeft:"0"},{x8886:"100%"}]);}
var is={ie:navigator.appName=='Microsoft Internet Explorer',java:navigator.javaEnabled(),ns:navigator.appName=='Netscape',ua:navigator.userAgent.toLowerCase(),version:parseFloat(navigator.appVersion.substr(21))||parseFloat(navigator.appVersion),win:navigator.platform=='Win32'}
is.mac=is.ua.indexOf('mac')>=0;if(is.ua.indexOf('opera')>=0){is.ie=is.ns=false;is.opera=true;}
if(is.ua.indexOf('gecko')>=0){is.ie=is.ns=false;is.gecko=true;}