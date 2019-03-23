var sheet = document.createElement('style'),  
  $rangeInput = $('.range input'),
  prefs = ['webkit-slider-runnable-track', 'moz-range-track', 'ms-track'];

document.body.appendChild(sheet);

var sheet1 = document.createElement('style'),  
  $rangeInput1 = $('.range1 input'),
  prefs1 = ['webkit-slider-runnable-track', 'moz-range-track', 'ms-track'];

document.body.appendChild(sheet1);

var getTrackStyle = function (el) {  
  var curVal = el.value,
      val = (curVal - 1) * 16.666666667,
      style = '';
  
  // Set active label
  $('.range-labels li').removeClass('active selected');
  
  var curLabel = $('.range-labels').find('li:nth-child(' + curVal + ')');
  
  curLabel.addClass('active selected');
  curLabel.prevAll().addClass('selected');
  
  // Change background gradient
  for (var i = 0; i < prefs.length; i++) {
    style += '.range {background: linear-gradient(to right, #37adbf 0%, #37adbf ' + val + '%, #fff ' + val + '%, #fff 100%)}';
    style += '.range input::-' + prefs[i] + '{background: linear-gradient(to right, #37adbf 0%, #37adbf ' + val + '%, #b2b2b2 ' + val + '%, #b2b2b2 100%)}';
  }

  return style;
}

var getTrackStyle1 = function (el1) {  
  var curVal1 = el1.value,
      val1 = (curVal - 1) * 16.666666667,
      style1 = '';
  
  // Set active label
  $('.range-labels1 li').removeClass('active selected');
  
  var curLabel = $('.range-labels1').find('li:nth-child(' + curVal1 + ')');
  
  curLabel1.addClass('active selected');
  curLabel1.prevAll().addClass('selected');
  
  // Change background gradient
  for (var i = 0; i < prefs1.length; i++) {
    style1 += '.range1 {background: linear-gradient(to right, #37adbf 0%, #37adbf ' + val1 + '%, #fff ' + val1 + '%, #fff 100%)}';
    style1 += '.range1 input::-' + prefs1[i] + '{background: linear-gradient(to right, #37adbf 0%, #37adbf ' + val1 + '%, #b2b2b2 ' + val1 + '%, #b2b2b2 100%)}';
  }

  return style1;
}

$rangeInput.on('input', function () {
  sheet.textContent = getTrackStyle(this);
});

$rangeInput1.on('input', function () {
  sheet1.textContent = getTrackStyle1(this);
});

// Change input value on label click
$('.range-labels li').on('click', function () {
  var index = $(this).index();
  
  $rangeInput.val(index + 1).trigger('input');
  
});
$('.range-labels1 li').on('click', function () {
  var index1 = $(this).index();
  
  $rangeInput1.val(index1 + 1).trigger('input');
  
});