/*!
 * Common.js v1.0.0
 * Copyright 2016, Ahmad Firuze
 *
 * Freely distributable under the MIT license.
 * Portions of G.ENE.SYS Ultimate - Manufacturing Systems
 *
 * A collection of functions
 */

/**
* Adding a parameter to the URL with JavaScript
*
* @param String key Key of the setting
* @param String val Value of the setting
* @returns void
*/
function insertParam(key, value)
{
    key = encodeURI(key); value = encodeURI(value);

    var kvp = document.location.search.substr(1).split('&');

    var i=kvp.length; var x; while(i--) 
    {
        x = kvp[i].split('=');

        if (x[0]==key)
        {
            x[1] = value;
            kvp[i] = x.join('=');
            break;
        }
    }

    if(i<0) { kvp[kvp.length] = [key,value].join('='); }

    /* this will reload the page, it's likely better to store this until finished */
    /* document.location.search = kvp.join('&');  */
		return kvp.join('&'); 
}

/**
* Store a new settings in the browser
*
* @param String name Name of the setting
* @param String val Value of the setting
* @returns void
*/
function store(name, val) {
	if (typeof (Storage) !== "undefined") {
		localStorage.setItem(name, val);
	} else {
		window.alert('Please use a modern browser to properly view this template!');
	}
}

/**
* Get a prestored setting
*
* @param String name Name of of the setting
* @returns String The value of the setting | null
*/
function get(name) {
	if (typeof (Storage) !== "undefined") {
		return localStorage.getItem(name);
	} else {
		window.alert('Please use a modern browser to properly view this template!');
	}
}

function _href(){
	$protocol = window.location.protocol;
	$hostname = window.location.hostname;
	$pathname = window.location.pathname.split('/', 2);
	return $protocol+'//'+$hostname+'/'+$pathname[1]+'/';
}

function generateUUID() {
    var d = new Date().getTime();
    var uuid = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
        var r = (d + Math.random()*16)%16 | 0;
        d = Math.floor(d/16);
        return (c=='x' ? r : (r&0x3|0x8)).toString(16);
    });
    return uuid;
};

function truncate(n, len) {
	if (n) {
		var ext = n.substring(n.lastIndexOf(".") + 1, n.length).toLowerCase();
		var filename = n.replace('.'+ext,'');
		if(filename.length <= len) {
			return n;
		}
		filename = filename.substr(0, len) + (n.length > len ? '[...]' : '');
		return filename + '.' + ext;
	}
};
  
function start_month(){
	var date = new Date();
	var y = date.getFullYear();
	var m = date.getMonth();
	
	var f = new Date(y, m, 1);
	var y = f.getFullYear();
	var m = f.getMonth()+1;
	var d = f.getDate();
	
	return (d<10?('0'+d):d)+'/'+(m<10?('0'+m):m)+'/'+y;
}

function end_month(){
	var date = new Date();
	var y = date.getFullYear();
	var m = date.getMonth();
	
	var t = new Date(y, m+1, 0);
	var y = t.getFullYear();
	var m = t.getMonth()+1;
	var d = t.getDate();
	
	return (d<10?('0'+d):d)+'/'+(m<10?('0'+m):m)+'/'+y;
}

function format_dmy(tdate){
	if(typeof(tdate)==='undefined') tdate = 0;
	if (tdate==0)
	{
		var f = new Date();
		var y = f.getFullYear();
		var m = f.getMonth()+1;
		var d = f.getDate();
	}
	else
	{
		var ss = tdate.split('-');
		var y = parseInt(ss[0],10);
		var m = parseInt(ss[1],10);
		var d = parseInt(ss[2],10);
	}
	return (d<10?('0'+d):d)+'/'+(m<10?('0'+m):m)+'/'+y;
}

function format_ymd(tdate, format){
	if(typeof(tdate)==='undefined') tdate = 0;
	if(typeof(format)==='undefined') format = 'dd/mm/yyyy';
	if (tdate==0)
	{
		var f = new Date();
		var y = f.getFullYear();
		var m = f.getMonth()+1;
		var d = f.getDate();
	}
	else
	{
		var ss = tdate.split('-');
		var y = parseInt(ss[0],10);
		var m = parseInt(ss[1],10);
		var d = parseInt(ss[2],10);
	}
	return (y+'-'+(m<10?('0'+m):m)+'-'+(d<10?('0'+d):d));
}

function datetime_db_format(datetime, this_format, is_datetime){
	if(typeof(datetime)==='undefined' || datetime == '') return '';
	if(typeof(this_format)==='undefined') return '';
	if(typeof(is_datetime)==='undefined') is_datetime = false;
	
	if ($.inArray(this_format, ['dd/mm/yyyy', 'mm/dd/yyyy', 'dd-mm-yyyy', 'mm-dd-yyyy', 'dd/mm/yyyy hh:mm', 'mm/dd/yyyy hh:mm', 'dd-mm-yyyy hh:mm', 'mm-dd-yyyy hh:mm']) < 0)
		return '';
	
	/* seperate between date & time */
	var dt = [], dt_format = [];
	dt = datetime.split(' ');
	dt_format = this_format.split(' ');

	var date, time;
	date = (dt.length > 1) ? dt[0] : dt[0];
	time = (dt.length > 1) ? dt[1]+':00' : false;
	var date_format, time_format;
	date_format = (dt_format.length > 1) ? dt_format[0] : dt_format[0];
	time_format = (dt_format.length > 1) ? dt_format[1] : false;

	/* time */
	var time_result;
	time_result = (time !== false) ? time : '00:00:00';
	
	/* date */
	if (date_format.indexOf('-') < 0) {
		var f = date_format.split('/');
	} else {
		var f = date_format.split('-');
	}
	if (date.indexOf('-') < 0) {
		var d = date.split('/');
	} else {
		var d = date.split('-');
	}
	var date_result;
	date_result = [d[$.inArray('yyyy',f)], d[$.inArray('mm',f)], d[$.inArray('dd',f)]].join('-');
	return time_format ? [date_result, time_result].join(' ') : date_result;
}

function format_to_datetime(unix_timestamp){
	if(typeof(unix_timestamp)==='undefined') unix_timestamp = 0;
	if (unix_timestamp!=0)
	{
		// create a new javascript Date object based on the timestamp
		// multiplied by 1000 so that the argument is in milliseconds, not seconds
		var date = new Date(unix_timestamp*1000);
		// hours part from the timestamp
		var hours = date.getHours();
		// minutes part from the timestamp
		var minutes = "0" + date.getMinutes();
		// seconds part from the timestamp
		var seconds = "0" + date.getSeconds();

		var y = date.getFullYear();
		var m = date.getMonth()+1;
		var d = date.getDate();
		// will display time in 10:30:23 format
		var formattedTime = (hours<10?('0'+hours):hours) + ':' + minutes.substr(minutes.length-2) + ':' + seconds.substr(seconds.length-2);	
		// return ((d<10?('0'+d):d)+'/'+(m<10?('0'+m):m)+'/'+y) + ' ' + formattedTime;
		return (y+'-'+(m<10?('0'+m):m)+'-'+(d<10?('0'+d):d)) + ' ' + formattedTime;
	}
	return '';
}

function getURLParameter(name) {
  return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search)||[,""])[1].replace(/\+/g, '%20'))||null;
}

function getURLOrigin() {
	return location.protocol+'//'+location.host+location.pathname;
}

function getURLFull(){
	return window.location.href;
}

function setSelectList(name, id, clazz, optionList) {
	if(typeof(id)==='undefined') id = name;
	var select = $("<select />", {
		"id": id,
		"name": name,
		"class": clazz
	});

	$.each(optionList, function(k, v) {
		select.append($('<option />', {value: k}).html(v));
	});

	return select;
}

/* Using for bootstrap */
function subRow(el, cls){
	if(typeof(el)==='undefined') el = '';
	if(typeof(cls)==='undefined') cls = '';
	var container = $('<div class="row"></div>');
	if (cls) container.addClass(cls);
	return container.append(el);
}

/* Using for bootstrap */
function subCol(siz, el){
	if(typeof(siz)==='undefined') siz = 12;
	if(typeof(el)==='undefined') el = '&nbsp;';
	var container = $('<div class="col-md-'+ siz +'"></div>');
	return container.append(el);
}

function isempty_obj(obj){
	return (Object.keys(obj).length > 0) ? false : true;
}

function isempty_arr(arr){
	return (arr.length > 0) ? false : true;
}