$(function() {
  $.fn.autoKana('input[name="yourLnamePC"] ', 'input[name="yourKLnamePC"]', {katakana:true});　//name属性で判別する場合
  $.fn.autoKana('input[name="yourFnamePC"] ', 'input[name="yourKFnamePC"]', {katakana:true});　//name属性で判別する場合

  $.fn.autoKana('input[name="yourLnameMB"] ', 'input[name="yourKLnameMB"]', {katakana:true});　//name属性で判別する場合
  $.fn.autoKana('input[name="yourFnameMB"] ', 'input[name="yourKFnameMB"]', {katakana:true});　//name属性で判別する場合
});　