
$(window).on('load', function(){
  $('#loading').delay(900).fadeOut(800);
  console.log("ローディング完了");
});

$(function(){
  setTimeout('stopload()', 10000);
})

function stopload(){
  $('#loading').delay(900).fadeOut(800);
  console.log("10秒経過");
}




////背景画像ゆっくり////////////////////
$(window).on('scroll', function(){

  var scrollTop = $(window).scrollTop();
  var bgPosition = scrollTop / 2; //スクロール後のポジションを指定（値を大きくすると移動距離が小さくなる）

  if(bgPosition){
    $('body').css('background-position', 'center top -'+ bgPosition + 'px');
  }
});

/////////////ページ内リンク/////////////////////
$(function(){
    $('a[href^="#"]').click(function(){
      var speed = 500;
      var href= $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top;
      $("html, body").animate({scrollTop:position}, speed, "swing");
      return false;
    
    });
    //$('h1').animate({fontSize: '80px'}, 2000, 'swing');
  });
///////////////////////////////////////////////////////////////////////////


 ///回るcss/////////////////////////////////////// 
 /*
  $(window).on('scroll', function() {//スクロールしたとき
    var $target = $('.d-img');//アニメーションさせたい要素
    var offset = 100;//アニメーションタイミング
  
    var scroll = $(window).scrollTop();//スクロール量を取得
    var h = $(window).height();//画面の高さを取得
  
    $target.each(function() {
      var pos = $(this).offset().top;//アニメーションさせたい要素の位置を取得
      if (scroll > pos - h + offset) {//スクロール量 > アニメーションさせたい要素の位置
        $(this).addClass('slide-bl');
      }
    })
  
  }).trigger('slide-bl');
  */
  ////////////////////////////////////////////////

  ///ヘッダーを上部に固定/////////
  $(window).on('scroll', function(){
    let $target = $('.header-list');
    let scroll = $(window).scrollTop();

    let pos = $target.offset().top;
    if(scroll > pos){
      $target.addClass('header-up')
    //$('.header-off').addClass('header-on')
    //}else{
    //  $target.removeClass('header-up')
    }
  }).trigger('scroll');

//回転////////////////////////////
  gsap.to(".d-img",{
    y: 0, // 200px右に移動
    rotate: 360, // 360°回転
    scrollTrigger: {
      trigger: ".products", // アニメーションが始まるトリガーとなる要素
      start: "top 30", // アニメーションが始まる位置
      end: "bottom top", // アニメーションが終わる位置
      scrub: true, // スクロール量に合わせてアニメーション
    },
  });

  ScrollTrigger.create({
    trigger: ".products",
    start: "top 30",
    endTrigger: ".products",
    end: "bottom top",
    pin: true
});
///////////////////////////////////////

$(window).on('scroll', function() {//スクロールしたとき
  var $target = $('.shop-img');//アニメーションさせたい要素
  var offset = 100;//アニメーションタイミング

  var scroll = $(window).scrollTop();//スクロール量を取得
  var h = $(window).height();//画面の高さを取得

  $target.each(function() {
    var pos = $(this).offset().top;//アニメーションさせたい要素の位置を取得
    if (scroll > pos - (h/2) + offset) {//スクロール量 > アニメーションさせたい要素の位置
      $(this).addClass('flip');
    }
  })

}).trigger('flip');

/*
$('.shop-img1').on('scroll', function() {//スクロールしたとき

  let scroll = $(window).scrollTop();//スクロール量を取得
  let $target = $('.shop-img2');
  var position = $target.offset().top;
  $("html, body").animate({scrollTop:position}, speed, "swing");
});
*/
  