jQuery(document).ready(function () {

    jQuery('#its_section_image_button, #its_parallax_image_button').click(function () {

        window.send_to_editor = function (html) {
      imgurl = jQuery('img', html).attr('src');
  jQuery('#its_section_image , #its_parallax_image').val(imgurl);


            tb_remove();
        }


        tb_show('', 'media-upload.php?post_id=0&amp;type=image&amp;TB_iframe=true');
        return false;

    });




    
    jQuery('input.browse.img.button').click(function () {
           ('input[type=text]');
    });

});
