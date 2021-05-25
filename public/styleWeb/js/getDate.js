$(document).ready(function(){
	var d = new Date();
	var day = d.getDate();
	var year_ = d.getFullYear();
	// var months = d.getMonth();
	// console.log(months);
	document.getElementById('getDay').innerHTML = day;
	document.getElementById('getYear').innerHTML = year_;
	// lấy tên thứ
	// var weekDay = [
	// 	"Chủ Nhật",
	// 	"Thứ Hai",
	// 	"Thứ Ba",
	// 	"Thứ Tư",
	// 	"Thứ Năm",
	// 	"Thứ Sáu",
	// 	"Thứ Bảy",
	// ]
	// var today = weekDay[d.getDay()];
	// document.getElementById('getThu').innerHTML = today;
	// lấy tháng trong năm
	var months = [
		"Tháng 1",
		"Tháng 2",
		"Tháng 3",
		"Tháng 4",
		"Tháng 5",
		"Tháng 6",
		"Tháng 7",
		"Tháng 8",
		"Tháng 9",
		"Tháng 10",
		"Tháng 11",
		"Tháng 12"
	]
	var monthToday = months[d.getMonth()]
	document.getElementById('getMonth').innerHTML = monthToday;
})