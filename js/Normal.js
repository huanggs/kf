// JavaScript Document
function SetInputNull(){
	var search_a=document.getElementById("search_a");
	search_a.value="";
}

function SetInputNull2(){
	var g_m_input=document.getElementById("g_m_input");
	g_m_input.value="";
}

function SetInputDefault(){
	var search_a=document.getElementById("search_a");
	if (!search_a.value){
	search_a.value="输入游戏或平台名称";
	}
	else {
		search_a.value=search_a.value;
		}
}