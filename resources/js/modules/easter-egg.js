//GDZ: Porfa pongan algo acá :) #juege
import cheet from 'cheet.js';

eval ("console.info( '                          __            __   \\n'  + \
  '   .--------.-----.---.-.|  |_   .----.|  |  \\n'  + \
  '   |        |  -__|  _  ||   _|__|  __||  |  \\n'  + \
  '   |__|__|__|_____|___._||____|__|____||__|  \\n'  + \
  '                                            \\n' ) ");

cheet('↑ ↑ ↓ ↓ ← → ← → b a', function () {
  //Haga algo aquí...

  //Transform all images into kitten ones
  $('img').each(function() {
    let $this = $(this), h = parseInt($this.height()), w = parseInt($this.width());
    $this.css({width: w, height: h}).attr('src', 'https://placekitten.com/g/' + w + '/' + h)
  });
});