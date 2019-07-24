$(function(){

  window.sr = ScrollReveal();
  sr.reveal('.navbar-brand',{
    duration: 2000,
  });

  sr.reveal(' #about',{
    duration: 3000,
  });

  sr.reveal('.hello',{
    distance: "90px",
    origin: 'right',
    duration: 2000,
    delay:300
  });

  sr.reveal(' #service',{
    duration: 3000,
    origin: 'bottom',
    distance:"90px",
    viewFactor:0.2,
  });

    sr.reveal('.toru',{
      distance: "90px",
      origin: 'right',
      duration: 2000,
      delay:600,
    });

    sr.reveal('.tomo',{
      distance: "90px",
      origin: 'right',
      duration: 2000,
      delay:900,
    });

    sr.reveal('.hisako',{
      distance: "90px",
      origin: 'right',
      duration: 2000,
      delay:1200,
    });

    sr.reveal('.titi',{
      distance: "90px",
      origin: 'right',
      duration: 2000,
      delay:1500,
    });

    sr.reveal('.tim',{
      distance: "90px",
      origin: 'right',
      duration: 2000,
      viewFactor:0.2,
    });

    sr.reveal('.tom',{
      distance: "90px",
      origin: 'right',
      duration: 2000,
      delay:300,
      viewFactor:0.2,
    });

    sr.reveal('.tam',{
      distance: "90px",
      origin: 'right',
      duration: 2000,
      delay: 600,
      viewFactor:0.2,

    });

    sr.reveal('.chan',{
      distance: "90px",
      origin: 'left',
      duration: 2000,
      viewFactor:0.2,
    });

    sr.reveal('.chon',{
      distance: "90px",
      origin: 'left',
      duration: 2000,
      delay:300,
      viewFactor:0.2,
    });

    sr.reveal('.chun',{
      distance: "90px",
      origin: 'left',
      duration: 2000,
      delay: 600,
      viewFactor:0.2,

    });

});

jQuery(function($) {
  $(".boxel").bgswitcher({
  images: ["/image/top.png", "./image/search.png", "./image/post.png"],
});
});
