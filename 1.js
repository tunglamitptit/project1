// $(document).ready(function() {
    
// });
// function slideShow() {
    
// }
document.addEventListener("DOMContentLoaded",function() {
    var nut = document.querySelectorAll('div.nut ul li');
    var slides = document.querySelectorAll('div.slide div');
    console.log(slides);
    for(var i = 0 ; i < nut.length; i++){
    nut[i].addEventListener('click',function(){
        var nutnay = this;
        var vitrislide = 0;
        console.log(nutnay.previousElementSibling);
        for(var i = 0; nutnay = nutnay.previousElementSibling; vitrislide++) {
            //chay den khi nut nay  = null thi dung.
            // chay xong lenh nay khi click vao nut ta lay dc vitrislide
        }
        for(var i = 0; i < slides.length; i++) {
            slides[i].classList.remove('active');
        }
        for(var i = 0; i < slides.length; i++) {
            slides[vitrislide].classList.add('active');
        }
    })
}
// Click chuyen slide
 
auto();
function auto() {
    var thoigian = setInterval(function(){
        var slide = document.querySelector('div.slide div.active');
        var vitrislide = 0;
        for(var i = 0 ; slide = slide.previousElementSibling ; vitrislide ++){
        }
        for(var i = 0 ; i < slides.length; i++){
            slides[i].classList.remove('active'); // remove hết những thằng đang có class 'ra'
        }
        if(vitrislide == slides.length - 1){
            slides[0].classList.add('active');
                // Thằng này có nghĩa là sau khi tự động chuyển đến slide cuối cùng nó quay lại thằng 0
        }
        else{
        slides[vitrislide].nextElementSibling.classList.add('active');
               // Đây là then chốt của auto slide nó sẽ chuyển sang cái thằng tiếp theo.
    }
    },2000)
// Tu dong chuyen slide
}
 
var x = setInterval(function(){
console.log('dm');
},1000);
 
},false)

// $(document).ready(function() {
// 	$('#btn-next').click(function(event) {

// 		var slide_sau = $('.active').next();
// 		console.log(slide_sau.length);
// 		if(slide_sau.length!=0){
// 			$('.active').addClass('bien-mat-ben-trai').one('webkitAnimationEnd', function(event) {
// 				$('.bien-mat-ben-trai').removeClass('bien-mat-ben-trai').removeClass('active');
// 			});
// 			slide_sau.addClass('active').addClass('di-vao-ben-phai').one('webkitAnimationEnd', function(event) {
// 				$('.di-vao-ben-phai').removeClass('di-vao-ben-phai');
// 			});
// 		}else{
// 			$('.active').addClass('bien-mat-ben-trai').one('webkitAnimationEnd', function(event) {
// 				$('.bien-mat-ben-trai').removeClass('bien-mat-ben-trai').removeClass('active');
// 			});
// 			$('.slide:first-child').addClass('active').addClass('di-vao-ben-phai').one('webkitAnimationEnd', function(event) {
// 				$('.di-vao-ben-phai').removeClass('di-vao-ben-phai');
// 			});
// 		}
// 	});
// 	$('#btn-prev').click(function(event) {
// 		var slide_truoc = $('.active').prev();
// 		if(slide_truoc.length!=0){
// 			$('.active').addClass('bien-mat-ben-phai').one('webkitAnimationEnd', function(event) {
// 				$('.bien-mat-ben-phai').removeClass('bien-mat-ben-phai').removeClass('active');
// 			});
// 			slide_truoc.addClass('active').addClass('di-vao-ben-trai').one('webkitAnimationEnd', function(event) {
// 				$('.di-vao-ben-trai').removeClass('di-vao-ben-trai');
// 			});
// 		}else{
// 			$('.active').addClass('bien-mat-ben-phai').one('webkitAnimationEnd', function(event) {
// 				$('.bien-mat-ben-phai').removeClass('bien-mat-ben-phai').removeClass('active');
// 			});
// 			$('.slide:last-child').addClass('active').addClass('di-vao-ben-trai').one('webkitAnimationEnd', function(event) {
// 				$('.di-vao-ben-trai').removeClass('di-vao-ben-trai');
// 			});
// 		}
// 	});
// });