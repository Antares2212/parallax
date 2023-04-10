var all_char = 500;
var count_char_textarea = document.getElementById("count_char_textarea");

count_char_textarea.textContent = "";

function countChar() {
	var count_char = document.getElementById("count_letter");
	count_char.textContent = all_char - count_char_textarea.value.length + " / " + all_char;
}