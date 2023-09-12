<?php include 'header.php'; ?>
<style>
  /* This solution was derived from: https://stackoverflow.com/questions/37629860/automatically-resizing-textarea-in-bootstrap */
  textarea.textarea-autosize {
    padding-top:10px;
    padding-bottom:25px; /* increased! */
    width:100%;
    display:block;
  }
</style>

<p> Some stuff above </p>
<textarea id="example" class="form-control textarea-autosize" rows="10"></textarea>
<p> More stuff below </p>

<script>
  function register_auto_resize_textarea(element, need_scroll_to_bottom){
    var min_height = element.scrollHeight;
    element.addEventListener('input', function(event){
      this.style.overflow = 'hidden';
      if (this.scrollHeight > min_height){
        this.style.height = 0;
        // note: setting above property to 0 automatically changed the value of this.scrollHeight as well
        this.style.height = this.scrollHeight + 'px';
        if (this.scrollHeight < min_height){
          this.style.height = min_height + "px";
        }
        if (need_scroll_to_bottom){
          scroll_page_to_the_bottom();
        }
      }
    });
  }
  
  function scroll_page_to_the_bottom(){
    window.scrollTo(0,document.body.scrollHeight);
  }
  
  register_auto_resize_textarea($example, true);
</script>